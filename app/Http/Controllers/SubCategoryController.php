<?php

namespace App\Http\Controllers;

use App\Models\Cta;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Http\Requests;
use App\Models\GenericModel;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SubCategoryController extends Controller
{
    function __construct()
    {
        $this->Generic_model = new GenericModel;
        $this->CategoryModel = new CategoryModel;
    }

    public function index()
    {
        $data['records'] = DB::table('categories')->where('is_deleted',0)->get();
        echo view('admin/sub_category/add_sub_category',$data);
    }
    public function insert(Request $request)
    {
        $data['cat_id'] = $request->input('cat_id');
        $data['sub_cat_name'] = $request->input('sub_cat_name');
        $data['subcat_bg_image_alt'] = $request->input('subcat_bg_image_alt');
        $data['subcat_collection_image_alt'] = $request->input('subcat_collection_image_alt');
        $data['cta_image_alt'] = $request->input('cta_image_alt');
        $data['bg_left_image_alt'] = $request->input('bg_left_image_alt');
        $data['sub_cat_title'] = $request->input('sub_cat_title');
        $data['sub_cat_description'] = $request->input('sub_cat_description');
        $data['slug'] = Str::slug($request->input('sub_cat_name'));
        $data['status'] = $request->input('status');
        $data['whyus_title'] = $request->input('whyus_title');
        $data['whyus_desc'] = $request->input('whyus_desc');
        $data['background_title'] = $request->input('background_title');
        $data['background_desc'] = $request->input('background_desc');
        $data['sort_order'] = $request->input('sort_order');
        $data['is_deleted'] = '0';
        $data['created_at'] = now();
        $data['created_by'] = Auth::id();

        $preRecord = $this->Generic_model->getSpecificRecord('sub_categories' , array('is_deleted'=>0,'sub_cat_name'=>$data['sub_cat_name'])) ;

        if(!empty($preRecord))
        {
            return redirect('admin/add-sub-category')->with('error', 'Sub Category already exists with same name.');
        }
        else
        {
            if($request->file())
            {
                if(!empty($request->file('bg_image')))
                {
                    $fileName = $request->bg_image->getClientOriginalName();
                    $filePath = $request->file('bg_image')->storeAs('sub_cat_uploads', $fileName, 'public');
                    $data['bg_image'] = $fileName;
                    $data['bg_image_path'] = '/storage/' . $filePath;
                }
                if(!empty($request->file('bg_left_image')))
                {
                    $fileName_bgl = $request->bg_left_image->getClientOriginalName();
                    $filePath_bgl = $request->file('bg_left_image')->storeAs('sub_cat_uploads', $fileName_bgl, 'public');
                    $data['bg_left_image'] = $fileName;
                    $data['bg_left_image_path'] = '/storage/' . $filePath_bgl;
                }
                if(!empty($request->file('bg_right_image')))
                {
                    $fileName_bgr = $request->bg_right_image->getClientOriginalName();
                    $filePath_bgr = $request->file('bg_right_image')->storeAs('sub_cat_uploads', $fileName_bgr, 'public');
                    $data['bg_right_image'] = $fileName_bgr;
                    $data['bg_right_image_path'] = '/storage/' . $filePath_bgr;
                }
                if(!empty($request->file('collection_image')))
                {
                    $collection_img = $request->collection_image->getClientOriginalName();
                    $collection_image_path = $request->file('collection_image')->storeAs('sub_cat_uploads', $collection_img, 'public');
                    $data['cta_image'] = $collection_img;
                    $data['cta_image_path'] = '/storage/' . $collection_image_path;
                }
                if(!empty($request->file('feature_image')))
                {
                    $feature_img = $request->feature_image->getClientOriginalName();
                    $feature_image_path = $request->file('feature_image')->storeAs('sub_cat_uploads', $feature_img, 'public');
                    $data['feature_image'] = $feature_img;
                    $data['feature_image_path'] = '/storage/' . $feature_image_path;
                }
            }
            $added = $this->Generic_model->insertGetId('sub_categories',$data);
            if(!empty($added))
            {
                $this->Generic_model->insert('search_record',array('name'=>$data['sub_cat_name'],'slug'=>$data['slug'],'type'=>'2','type_id'=>$added,'status'=>$data['status']));
                $m_data['meta_keywords'] = $request->input('meta_keywords');
                $m_data['meta_title'] = $request->input('meta_title');
                $m_data['meta_description'] = $request->input('meta_description');
                $m_data['is_deleted'] = 0;
                $m_data['type_id'] = $added;
                $m_data['type'] = '2';
                $m_data['created_at'] = $data['created_at'];
                $m_data['created_by'] = $data['created_by'];
                $addedMeta = $this->Generic_model->insertGetId('meta_info',$m_data);
                // if(!empty($addedMeta)){
                //     $data = array_combine($request->order_now_or_call_us_title,$request->order_now_or_call_us_description);
                //     foreach($data as $key => $value){
                //         $cta = new Cta();
                //         $cta->cta_title = $key;
                //         $cta->cta_description = $value;
                //         $cta->type_id = $m_data['type_id'];
                //         $cta->type = $m_data['type'];
                //         $cta->created_by = $m_data['created_by'];
                //         $cta->save();
                //     }
                //     return redirect('admin/view-sub-category')->with('success', 'Data added successfully!');
                // }
                return redirect('admin/view-sub-category')->with('success', 'Data added successfully!');
            }
            else
            {
                return redirect('admin/view-sub-category')->with('error', 'Something went wrong.');
            }
        }
    }

    public function view_sub_category()
    {
        $data['records'] = DB::table('sub_categories')
            ->leftjoin('categories', 'categories.id', '=', 'sub_categories.cat_id')
            ->select('sub_categories.*', 'categories.cat_name')
            ->where('sub_categories.is_deleted',0)
            ->where('categories.is_deleted',0)
            ->get();
        return view('admin/sub_category/view_sub_category',$data);
    }

    function edit_sub_category($id)
    {
        $data['records'] = DB::table('categories')->where('is_deleted',0)->get();
        $data['record'] = $this->Generic_model->getSpecificRecord('sub_categories' , array('is_deleted'=>0,'id'=>$id)) ;
        $data['cta_data'] = Cta::where(['is_deleted'=> 0,'type' => 2, 'type_id' => $id])->get();
        $data['subcategory_cta'] = $this->CategoryModel->subCateoryCTA($id);
        $data['meta_record'] = $this->Generic_model->getSpecificRecord('meta_info' , array('is_deleted'=>0,'type_id'=>$id,'type'=>'2')) ;
        return view('admin/sub_category/add_sub_category',$data);

    }

    function update_sub_category(Request $request)
    {
        $where['id'] = $request->input('sub_id');
        $preRecord = $this->Generic_model->getSpecificRecord('sub_categories' , array('is_deleted'=>0,'id'=>$where['id'])) ;
        $data['cat_id'] = $request->input('cat_id');
        $data['sub_cat_name'] = $request->input('sub_cat_name');
        $data['subcat_bg_image_alt'] = $request->input('subcat_bg_image_alt');
        $data['subcat_collection_image_alt'] = $request->input('subcat_collection_image_alt');
        $data['bg_left_image_alt'] = $request->input('bg_left_image_alt');
        $data['cta_image_alt'] = $request->input('cta_image_alt');
        $data['sub_cat_title'] = $request->input('sub_cat_title');
        $data['sub_cat_description'] = $request->input('sub_cat_description');
        $data['slug'] = Str::slug($request->input('sub_cat_name'));
        $data['status'] = $request->input('status');
        $data['whyus_title'] = $request->input('whyus_title');
        $data['whyus_desc'] = $request->input('whyus_desc');
        $data['background_title'] = $request->input('background_title');
        $data['background_desc'] = $request->input('background_desc');
        $data['sort_order'] = $request->input('sort_order');
        $data['is_deleted'] = '0';
        $data['updated_at'] = now();
        $data['modified_by'] = Auth::id();
        $data['schema_script'] = $request->input('schema_script');
        $data['og_tag_script'] = $request->input('og_tag_script');

        $previous_Record = $this->Generic_model->getSpecificRecord('sub_categories' , array('is_deleted'=>0,'sub_cat_name'=>$data['sub_cat_name'] )) ;

        if (!empty($previous_Record))
        {
            if ($previous_Record['id'] == $where['id'])
            {

            }
            else
            {
                return redirect('admin/edit-sub-category/'.$where['id'])->with('error', 'Sub Category already exists with same name.');
            }
        }

        if($request->file('bg_image'))
        {
            $this->deleteImage($preRecord['bg_image']);

            $fileName = $request->bg_image->getClientOriginalName();
            $filePath = $request->file('bg_image')->storeAs('sub_cat_uploads', $fileName, 'public');
            $data['bg_image'] = $fileName;
            $data['bg_image_path'] = '/storage/' . $filePath;
        }
        if($request->file('bg_left_image'))
        {
            $this->deleteImage($preRecord['bg_left_image']);

            $fileName_bgl = $request->bg_left_image->getClientOriginalName();
            $filePath_bgl = $request->file('bg_left_image')->storeAs('sub_cat_uploads', $fileName_bgl, 'public');
            $data['bg_left_image'] = $fileName_bgl;
            $data['bg_left_image_path'] = '/storage/' . $filePath_bgl;
        }
        if($request->file('bg_right_image'))
        {
            $this->deleteImage($preRecord['bg_right_image']);

            $fileName_bgr = $request->bg_right_image->getClientOriginalName();
            $filePath_bgr = $request->file('bg_right_image')->storeAs('sub_cat_uploads', $fileName_bgr, 'public');
            $data['bg_right_image'] = $fileName_bgr;
            $data['bg_right_image_path'] = '/storage/' . $filePath_bgr;
        }
        
        if($request->file('collection_image'))
        {
            $this->deleteImage($preRecord['collection_image']);
            $collection_img = $request->collection_image->getClientOriginalName();
            $collection_image_path = $request->file('collection_image')->storeAs('sub_cat_uploads', $collection_img, 'public');
            $data['cta_image'] = $collection_img;
            $data['cta_image_path'] = '/storage/' . $collection_image_path;
        }
        if($request->file('feature_image'))
        {
            $this->deleteImage($preRecord['feature_image']);

            $feature_img = $request->feature_image->getClientOriginalName();
            $feature_image_path = $request->file('feature_image')->storeAs('sub_cat_uploads', $feature_img, 'public');
            $data['feature_image'] = $feature_img;
            $data['feature_image_path'] = '/storage/' . $feature_image_path;
        }
        $this->Generic_model->updateRecord('sub_categories',$data,$where);
        //for saerch record//
        $this->Generic_model->updateRecord('search_record',array('name'=>$data['sub_cat_name'],'slug'=>$data['slug'],'status'=>$data['status']),array('type'=>2,'type_id'=>$where['id']));
        //End//
        $meta_id = $request->input('meta_id');
        $m_data['meta_keywords'] = $request->input('meta_keywords');
        $m_data['meta_title'] = $request->input('meta_title');
        $m_data['meta_description'] = $request->input('meta_description');
        $m_data['updated_at'] = $data['updated_at'];
        $m_data['modified_by'] = $data['modified_by'];
        $this->Generic_model->updateRecord('meta_info',$m_data,array('id'=>$meta_id));
        
        return redirect('admin/view-sub-category')->with('success', 'Data is successfully updated');
    }

    function delete_sub_category($id)
    {
        $data['is_deleted'] = '1';
        $data['deleted_at'] = now();
        $data['deleted_by'] = Auth::id();
        $this->Generic_model->updateRecord('sub_categories',$data,array('id'=>$id));
        //for saerch record//
        $this->Generic_model->updateRecord('search_record',array('is_deleted'=>$data['is_deleted']),array('type'=>2,'type_id'=>$id));
        //End//
        return redirect('admin/view-sub-category')->with('success', 'Data is successfully Delete');
    }
    public function deleteImage($img_name)
    {
        if(!empty(Storage::disk('public')->delete('/sub_cat_uploads/'.$img_name)))
        {
            Storage::disk('public')->delete('/sub_cat_uploads/'.$img_name);
        }
    }
}
