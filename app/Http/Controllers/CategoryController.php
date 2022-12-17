<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Http\Requests;
use App\Models\GenericModel;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    function __construct()
    {
        $this->Generic_model = new GenericModel;
        $this->CategoryModel = new CategoryModel;
    }

    public function index()
    {
        echo view('admin/category/add_category');
    }
    public function insert(Request $request)
    {
      
        $data['cat_name'] = $request->input('cat_name');
        $data['cat_title'] = $request->input('cat_title');
        $data['cat_background_image_alt'] = $request->input('cat_background_image_alt');
        $data['cat_collection_image_alt'] = $request->input('cat_collection_image_alt');
        $data['cta_image_alt'] = $request->input('cta_image_alt');
        $data['cat_navigation_image_alt'] = $request->input('cat_navigation_image_alt');
        $data['cat_featured_image_alt'] = $request->input('cat_featured_image_alt');
        $data['slug'] = Str::slug($request->input('cat_name'));
        $data['sort_order'] = $request->input('sort_order');
        $data['status'] = $request->input('status');
        $data['whyus_title'] = $request->input('whyus_title');
        $data['whyus_desc'] = $request->input('whyus_desc');
        $data['background_title'] = $request->input('background_title');
        $data['background_desc'] = $request->input('background_desc');
        $data['is_deleted'] = '0';
        $data['created_at'] = now();
        $data['created_by'] = Auth::id();

        // $request->validate([
        // 'bg_image' => 'required|max:2048',
        // 'bg_left_image' => 'required|max:2048',
        // //'bg_right_image' => 'required|max:2048'
        // ]);

        $preRecord = $this->Generic_model->getSpecificRecord('categories' , array('is_deleted'=>0,'cat_name'=>$data['cat_name'])) ;

        if(!empty($preRecord))
        {
            return redirect('admin/add_category')->with('error', 'Category already exists with same name.');
        }
        else
        {
            if($request->file()) 
            {
                if(!empty($request->file('bg_image'))) 
                {
                    //$fileName = str_replace(' ', '',(rand().time().'_'.$request->bg_image->getClientOriginalName()));
                    $fileName = $request->bg_image->getClientOriginalName();
                    $filePath = $request->file('bg_image')->storeAs('cat_uploads', $fileName, 'public');
                    $data['bg_image'] = $fileName;
                    $data['bg_image_path'] = '/storage/' . $filePath;
                }

                if(!empty($request->file('bg_left_image'))) 
                {
                    $fileName_bgl = $request->bg_left_image->getClientOriginalName();
                    $filePath_bgl = $request->file('bg_left_image')->storeAs('cat_uploads', $fileName_bgl, 'public');
                    $data['bg_left_image'] = $fileName_bgl;
                    $data['bg_left_image_path'] = '/storage/' . $filePath_bgl;
                }
                if(!empty($request->file('bg_right_image'))) 
                {
                    $fileName_bgr = $request->bg_right_image->getClientOriginalName();
                    $filePath_bgr = $request->file('bg_right_image')->storeAs('cat_uploads', $fileName_bgr, 'public');
                    $data['bg_right_image'] = $fileName_bgr;
                    $data['bg_right_image_path'] = '/storage/' . $filePath_bgr;
                }
                if(!empty($request->file('collection_image'))) 
                {
                    $collection_img = $request->collection_image->getClientOriginalName();
                    $collection_image_path = $request->file('collection_image')->storeAs('cat_uploads', $collection_img, 'public');
                    $data['cta_image'] = $collection_img;
                    $data['cta_image_path'] = '/storage/' . $collection_image_path;
                }
                if(!empty($request->file('feature_image'))) 
                {
                    $feature_img = $request->feature_image->getClientOriginalName();
                    $feature_image_path = $request->file('feature_image')->storeAs('cat_uploads', $feature_img, 'public');
                    $data['feature_image'] = $feature_img;
                    $data['feature_image_path'] = '/storage/' . $feature_image_path;
                }
            }
            $added = $this->Generic_model->insertGetId('categories',$data);
            if(!empty($added))
            {
                //for saerch record//
                $this->Generic_model->insert('search_record',array('name'=>$data['cat_name'],'slug'=>$data['slug'],'type'=>'1','type_id'=>$added,'status'=>$data['status']));
                //End//
                $m_data['meta_keywords'] = $request->input('meta_keywords');
                $m_data['meta_title'] = $request->input('meta_title');
                $m_data['meta_description'] = $request->input('meta_description');
                $m_data['is_deleted'] = 0;
                $m_data['type_id'] = $added;
                $m_data['type'] = '1'; // for category 
                $m_data['created_at'] = $data['created_at'];
                $m_data['created_by'] = $data['created_by'];
                $added = $this->Generic_model->insertGetId('meta_info',$m_data);
                return redirect('admin/view-category')->with('success', 'Data added successfully!');
            }
            else
            {
                return redirect('admin/view-category')->with('error', 'Something went wrong.');
            }
        }
            
    }

    public function view_category()
    {
        $data['records'] = DB::table('categories')->where('is_deleted',0)->get();
        return view('admin/category/view_category',$data);
    }

    function edit_category($id)
    {
        $data['record'] = DB::table('categories')->where(array('is_deleted'=>0,'id'=>$id))->get();
        $data['subcategory_cta'] = $this->CategoryModel->subCateoryCTA($id);
        $data['meta_record'] = $this->Generic_model->getSpecificRecord('meta_info' , array('is_deleted'=>0,'type_id'=>$id,'type'=>'1')) ;

        return view('admin/category/add_category',$data);

    }

    function update_category(Request $request)
    {
        $id = $request->input('cat_id');
        $preRecord = $this->Generic_model->getSpecificRecord('categories' , array('is_deleted'=>0,'id'=>$id)) ;
        $data['cat_name'] = $request->input('cat_name');
        $data['cat_background_image_alt'] = $request->input('cat_background_image_alt');
        $data['cat_collection_image_alt'] = $request->input('cat_collection_image_alt');
        $data['cta_image_alt'] = $request->input('cta_image_alt');
        $data['cat_navigation_image_alt'] = $request->input('cat_navigation_image_alt');
        $data['cat_featured_image_alt'] = $request->input('cat_featured_image_alt');
        $data['cat_title'] = $request->input('cat_title');
        $data['slug'] = Str::slug($request->input('cat_name'));
        $data['sort_order'] = $request->input('sort_order');
        $data['status'] = $request->input('status');
        $data['whyus_title'] = $request->input('whyus_title');
        $data['whyus_desc'] = $request->input('whyus_desc');
        $data['background_title'] = $request->input('background_title');
        $data['background_desc'] = $request->input('background_desc');
        $data['schema_script'] = $request->input('schema_script');
        $data['og_tag_script'] = $request->input('og_tag_script');
        //$data['is_deleted'] = '0';
        $data['updated_at'] = now();//strtotime(date('Y-m-d'));
        $data['modified_by'] = Auth::id();

        // $request->validate([
            // 'bg_image' => 'required|max:2048',
            // 'bg_left_image' => 'required|max:2048',
            // 'bg_right_image' => 'required|max:2048'
            // ]);

        $previous_Record = $this->Generic_model->getSpecificRecord('categories' , array('is_deleted'=>0,'cat_name'=>$data['cat_name'] )) ;

        if (!empty($previous_Record))
        {
            if ($previous_Record['id'] == $id) 
            {
                
            }
            else
            {
                return redirect('admin/edit-category/'.$id)->with('error', 'Category already exists with same name.');
            }
        }
        if($request->file('bg_image')) 
        {
            $this->deleteImage($preRecord['bg_image']);
            $fileName = $request->bg_image->getClientOriginalName();
            $filePath = $request->file('bg_image')->storeAs('cat_uploads', $fileName, 'public');
            $data['bg_image'] = $fileName;
            $data['bg_image_path'] = '/storage/' . $filePath;
        }
        if($request->file('bg_left_image')) 
        {
            $this->deleteImage($preRecord['bg_left_image']);
            $fileName_bgl = $request->bg_left_image->getClientOriginalName();
            $filePath_bgl = $request->file('bg_left_image')->storeAs('cat_uploads', $fileName_bgl, 'public');
            $data['bg_left_image'] = $fileName_bgl;
            $data['bg_left_image_path'] = '/storage/' . $filePath_bgl;
        }
        if($request->file('bg_right_image')) 
        {
            $this->deleteImage($preRecord['bg_right_image']);
            $fileName_bgr = $request->bg_right_image->getClientOriginalName();
            $filePath_bgr = $request->file('bg_right_image')->storeAs('cat_uploads', $fileName_bgr, 'public');
            $data['bg_right_image'] = $fileName_bgr;
            $data['bg_right_image_path'] = '/storage/' . $filePath_bgr;
        }
        if($request->file('collection_image')) 
        {
            $this->deleteImage($preRecord['collection_image']);
            $collection_img = $request->collection_image->getClientOriginalName();
            $collection_image_path = $request->file('collection_image')->storeAs('cat_uploads', $collection_img, 'public');
            $data['cta_image'] = $collection_img;
            $data['cta_image_path'] = '/storage/' . $collection_image_path;
        }
        if($request->file('feature_image')) 
        {
            $this->deleteImage($preRecord['feature_image']);
            $feature_img = $request->feature_image->getClientOriginalName();
            $feature_image_path = $request->file('feature_image')->storeAs('cat_uploads', $feature_img, 'public');
            $data['feature_image'] = $feature_img;
            $data['feature_image_path'] = '/storage/' . $feature_image_path;
        }
        
        $this->Generic_model->updateRecord('categories',$data,array('id'=>$id));

        //for saerch record//
        $this->Generic_model->updateRecord('search_record',array('name'=>$data['cat_name'],'slug'=>$data['slug'],'status'=>$data['status']),array('type'=>1,'type_id'=>$id));
        //End//

        $meta_id = $request->input('meta_id');
        $m_data['meta_keywords'] = $request->input('meta_keywords');
        $m_data['meta_title'] = $request->input('meta_title');
        $m_data['meta_description'] = $request->input('meta_description');
        $m_data['updated_at'] = $data['updated_at'];
        $m_data['modified_by'] = $data['modified_by'];
        $this->Generic_model->updateRecord('meta_info',$m_data,array('id'=>$meta_id));
        return redirect('admin/view-category')->with('success', 'Data is successfully updated');
    }

    function delete_category($id)
    {
        $data['is_deleted'] = '1';
        $data['deleted_at'] = now();//strtotime(date('Y-m-d'));
        $data['deleted_by'] = Auth::id();
        DB::table('categories')->where('id',$id)->update($data);
        //for saerch record//
        $this->Generic_model->updateRecord('search_record',array('is_deleted'=>$data['is_deleted']),array('type'=>1,'type_id'=>$id));
        //End//
        return redirect('admin/view-category')->with('success', 'Data is successfully Delete');
    }

    public function deleteImage($img_name)
    {
        if(Storage::disk('public')->delete('/cat_uploads/'.$img_name)) 
        {
            Storage::disk('public')->delete('/cat_uploads/'.$img_name);
        }
    }


}
