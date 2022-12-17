<?php

namespace App\Http\Controllers;

use App\Models\Cta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Http\Requests;
use App\Models\GenericModel;
use App\Models\CategoryModel;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    function __construct()
    {
        $this->Generic_model = new GenericModel;
        $this->CategoryModel = new CategoryModel;
    }

    public function index()
    {
        $data['records'] = DB::table('sub_categories')->where('is_deleted',0)->get();
        return view('admin/product/add_product',$data);
    }
    public function insert(Request $request)
    {

        $data['category_id'] = 0;//$request->input('cat_id');
        $data['subcategory_id'] = 0;//$request->input('subcat_id');
        $data['name'] = $request->input('name');
        $data['seoname'] = $request->input('seoname');
        $data['collection_image_alt'] = $request->input('collection_image_alt');
        $data['feature_image_alt'] = $request->input('feature_image_alt');
        $data['cta_image_alt'] = $request->input('cta_image_alt');
        $data['page_indexing'] = $request->input('page_indexing');
        $data['schema_script'] = $request->input('schema_script');
        $data['title'] = $request->input('title');
        $data['slug'] = Str::slug($request->input('name'));
        $data['short_description'] = $request->input('short_description');
        $data['long_description'] = $request->input('long_description');
        $data['sort_order'] = $request->input('sort_order');
        $data['status'] = $request->input('status');
        $data['whyus_title'] = $request->input('why_us_title');
        $data['whyus_desc'] = $request->input('why_us_description');
        $data['background_title'] = $request->input('background_title');
        $data['background_desc'] = $request->input('background_description');
        $data['best_seller_product'] = !empty($request->input('best_seller_product')) ? $request->input('best_seller_product') : 0;
        $data['is_deleted'] = '0';
        $data['created_at'] = now();
        $data['created_by'] = Auth::id();
        $preRecord = $this->Generic_model->getSpecificRecord('products' , array('is_deleted'=>0,'name'=>$data['name'])) ;

        if(!empty($preRecord))
        {
            return redirect('admin/add-product')->with('error', 'Product already exists with same name.');
        }
        else
        {
            if($request->file()) {
                if(!empty($request->file('bg_image')))
                {
                    $fileName = $request->bg_image->getClientOriginalName();
                    $filePath = $request->file('bg_image')->storeAs('product_uploads', $fileName, 'public');
                    $data['bg_image'] = $fileName;
                    $data['bg_image_path'] = '/storage/' . $filePath;
                }
                if(!empty($request->file('collection_image')))
                {
                    $collection_img = $request->collection_image->getClientOriginalName();
                    $collection_image_path = $request->file('collection_image')->storeAs('product_uploads', $collection_img, 'public');
                    $data['collection_image'] = $collection_img;
                    $data['collection_image_path'] = '/storage/' . $collection_image_path;
                }
                if(!empty($request->file('feature_image')))
                {
                    $feature_img = $request->feature_image->getClientOriginalName();
                    $feature_image_path = $request->file('feature_image')->storeAs('product_uploads', $feature_img, 'public');
                    $data['feature_image'] = $feature_img;
                    $data['feature_image_path'] = '/storage/' . $feature_image_path;
                }

                if(!empty($request->file('feature_image_l2')))
                {
                    $feature_image_l2 = $request->feature_image_l2->getClientOriginalName();
                    $feature_image_l2_path = $request->file('feature_image_l2')->storeAs('product_uploads', $feature_image_l2, 'public');
                    $data['feature_image_l2'] = $feature_image_l2;
                    $data['feature_image_l2_path'] = '/storage/' . $feature_image_l2_path;
                }

                if(!empty($request->file('cta_image')))
                {
                    $cta_image = $request->cta_image->getClientOriginalName();
                    $cta_image_path = $request->file('cta_image')->storeAs('product_uploads', $cta_image, 'public');
                    $data['cta_image'] = $cta_image;
                    $data['cta_image_path'] = '/storage/' . $cta_image_path;
                }

            }
            $added = $this->Generic_model->insertGetId('products',$data);
            if(!empty($added))
            {
                //multi tagg products//
                $categories = $request->categories;
                if(isset($categories))
                {
                    foreach ($categories as $category)
                    {
                        $arr = explode('-', $category);
                        $multi_tag['cat_id'] = $arr['0'];
                        $multi_tag['sub_cat_id'] = $arr['1'];
                        $multi_tag['product_id'] = $added;
                        $multi_tag['is_deleted'] = '0';
                        $multi_tag['created_at'] = now();
                        $multi_tag['created_by'] = Auth::id();
                        $this->Generic_model->insertGetId('multi_tag_products',$multi_tag);
                    }
                }
                //for saerch record//
                $this->Generic_model->insert('search_record',array('name'=>$data['name'],'slug'=>$data['slug'],'type'=>'3','type_id'=>$added,'status'=>$data['status']));
                //End//
                if ($request->hasfile('gallery_images')) {
                    $images = $request->file('gallery_images');
                    $i=1;
                    foreach($images as $image) {

                        //$gallery_image_path = $image->store('product_uploads', 'public');
                        $gallery_image_name = $image->getClientOriginalName();
                        $gallery_image_path = $image->storeAs('product_uploads', $gallery_image_name ,'public');
                        $explode = explode('/',$gallery_image_path);
                        $g_data['image_name'] =  $explode[1];
                        $g_data['product_id'] = $added;
                        $g_data['image_alt_name'] = !empty($request->input('gallery_img_alt_'.$i)) ? $request->input('gallery_img_alt_'.$i) : null;
                        // $data['feature_image'] = $feature_img;
                        $g_data['image_path'] = '/storage/' . $gallery_image_path;
                        $i++;
                        $this->Generic_model->insertGetId('gallery_images',$g_data);
                    }
                }
                $m_data['meta_keywords'] = $request->input('meta_keywords');
                $m_data['meta_title'] = $request->input('meta_title');
                $m_data['meta_description'] = $request->input('meta_description');
                $m_data['is_deleted'] = 0;
                $m_data['type_id'] = $added;
                $m_data['type'] = '3'; // for product
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
                return redirect('admin/view-product')->with('success', 'Data added successfully!');
            }
        }
    }

    public function view_product()
    {
        // ->whereDate('created_at','>=','2022-02-01')->whereDate('created_at','<=','2022-02-11')

        $data['records'] = $this->CategoryModel->getProducts();

        return view('admin/product/view_product',$data);
    }

    function edit_product($id)
    {
        $data['record'] = DB::table('products')->where(array('is_deleted'=>0,'id'=>$id))->get();
        $data['records'] = DB::table('sub_categories')->where('is_deleted',0)->get();
        $mult_tag = $this->CategoryModel->multiTagProd($id);
        $cate_id = array();
        if(!empty($mult_tag))
        {
            foreach ($mult_tag as $key => $value)
            {
                $cate_id[] =  $value->sub_cat_id;
            }
        }
        else
        {
            $cate_id[] = $data['record'][0]->subcategory_id;
        }
        $data['gallery_images'] = DB::table('gallery_images')->where(array('product_id'=>$id))->get();
        $data['meta_record'] = $this->Generic_model->getSpecificRecord('meta_info' ,
            array('is_deleted'=>0,'type_id'=>$id,'type'=>'3')) ;
        $data['cta_data'] = Cta::where(['is_deleted'=> 0,'type' => 3, 'type_id' => $id])->get();

        return view('admin/product/add_product',$data)->with('mult_tag',$cate_id);

    }

    function update_product(Request $request)
    {
        $id = $request->input('id');
        $preRecord = $this->Generic_model->getSpecificRecord('products' , array('is_deleted'=>0,'id'=>$id)) ;
        $data['category_id'] = 0;//$request->input('cat_id');
        $data['subcategory_id'] = 0;//$request->input('subcat_id');
        $data['name'] = $request->input('name');
        $data['seoname'] = $request->input('seoname');
        $data['collection_image_alt'] = $request->input('collection_image_alt');
        $data['feature_image_alt'] = $request->input('feature_image_alt');
        $data['cta_image_alt'] = $request->input('cta_image_alt');
        $data['page_indexing'] = $request->input('page_indexing');
        $data['schema_script'] = $request->input('schema_script');
        $data['og_tag_script'] = $request->input('og_tag_script');
        $data['title'] = $request->input('title');
        $data['slug'] = Str::slug($request->input('name'));
        $data['short_description'] = $request->input('short_description');
        $data['long_description'] = $request->input('long_description');
        $data['sort_order'] = $request->input('sort_order');
        $data['status'] = $request->input('status');
        $data['whyus_title'] = $request->input('why_us_title');
        $data['whyus_desc'] = $request->input('why_us_description');
        $data['background_title'] = $request->input('background_title');
        $data['background_desc'] = $request->input('background_description');
        $data['best_seller_product'] = !empty($request->input('best_seller_product')) ? $request->input('best_seller_product') : 0;
        $data['is_deleted'] = '0';
        $data['updated_at'] = now();//strtotime(date('Y-m-d'));
        $data['modified_by'] = Auth::id();

        $previous_Record = $this->Generic_model->getSpecificRecord('products' , array('is_deleted'=>0,'name'=>$data['name'] )) ;
        if (!empty($previous_Record))
        {
            if ($previous_Record['id'] == $id)
            {

            }
            else
            {
                return redirect('admin/edit-product/'.$id)->with('error', 'Product already exists with same name.');
            }
        }

        if($request->file('bg_image'))
        {
            $this->deleteImage($preRecord['bg_image']);

            $fileName = $request->bg_image->getClientOriginalName();
            $filePath = $request->file('bg_image')->storeAs('product_uploads', $fileName, 'public');
            $data['bg_image'] = $fileName;
            $data['bg_image_path'] = '/storage/' . $filePath;
        }
        if($request->file('collection_image'))
        {
            $this->deleteImage($preRecord['collection_image']);

            $collection_img = $request->collection_image->getClientOriginalName();
            $collection_image_path = $request->file('collection_image')->storeAs('product_uploads', $collection_img, 'public');
            $data['collection_image'] = $collection_img;
            $data['collection_image_path'] = '/storage/' . $collection_image_path;
        }
        if($request->file('feature_image'))
        {
            $this->deleteImage($preRecord['feature_image']);

            $feature_img = $request->feature_image->getClientOriginalName();
            $feature_image_path = $request->file('feature_image')->storeAs('product_uploads', $feature_img, 'public');
            $data['feature_image'] = $feature_img;
            $data['feature_image_path'] = '/storage/' . $feature_image_path;
        }

        if($request->file('feature_image_l2'))
        {
            $this->deleteImage($preRecord['feature_image_l2']);

            $feature_image_l2 = $request->feature_image_l2->getClientOriginalName();
            $feature_image_l2_path = $request->file('feature_image_l2')->storeAs('product_uploads', $feature_image_l2, 'public');
            $data['feature_image_l2'] = $feature_image_l2;
            $data['feature_image_l2_path'] = '/storage/' . $feature_image_l2_path;
        }

        if(!empty($request->file('cta_image')))
        {
            $this->deleteImage($preRecord['cta_image']);

            $cta_image = $request->cta_image->getClientOriginalName();
            $cta_image_path = $request->file('cta_image')->storeAs('product_uploads', $cta_image, 'public');
            $data['cta_image'] = $cta_image;
            $data['cta_image_path'] = '/storage/' . $cta_image_path;
        }

        //upload multiple images
        if ($request->hasfile('gallery_images')) {
            $images = $request->file('gallery_images');
            $i=1;
            foreach($images as $image) {

                //$gallery_image_path = $image->store('product_uploads', 'public');
                $gallery_image_name = $image->getClientOriginalName();
                $gallery_image_path = $image->storeAs('product_uploads', $gallery_image_name ,'public');
                $explode = explode('/',$gallery_image_path);
                $g_data['image_name'] =  $explode[1];
                $g_data['product_id'] = $id;
                $g_data['image_alt_name'] = !empty($request->input('gallery_img_alt_'.$i)) ? $request->input('gallery_img_alt_'.$i) : null;
                // $data['feature_image'] = $feature_img;
                $g_data['image_path'] = '/storage/' . $gallery_image_path;

                $this->Generic_model->insertGetId('gallery_images',$g_data);
                $i++;
            }
        }

        $update = $this->Generic_model->updateRecord('products',$data,array('id'=>$id));
        if ($update)
        {
            //multi tagg products//
            $categories = $request->categories;
            if(isset($categories))
            {
                $this->Generic_model->deleteRecord('multi_tag_products',array('product_id'=>$id));
                foreach ($categories as $category)
                {
                    $arr = explode('-', $category);
                    $multi_tag['cat_id'] = $arr['0'];
                    $multi_tag['sub_cat_id'] = $arr['1'];
                    $multi_tag['product_id'] = $id;
                    $multi_tag['is_deleted'] = '0';
                    $multi_tag['created_at'] = now();
                    $multi_tag['created_by'] = Auth::id();
                    $this->Generic_model->insertGetId('multi_tag_products',$multi_tag);
                }
            }
            //for saerch record//
            $this->Generic_model->updateRecord('search_record',array('name'=>$data['name'],'slug'=>$data['slug'],'status'=>$data['status']),array('type'=>3,'type_id'=>$id));
            //End//
            $meta_id = $request->input('meta_id');
            $m_data['meta_keywords'] = $request->input('meta_keywords');
            $m_data['meta_title'] = $request->input('meta_title');
            $m_data['meta_description'] = $request->input('meta_description');
            $m_data['updated_at'] = $data['updated_at'];
            $m_data['modified_by'] = $data['modified_by'];
            $this->Generic_model->updateRecord('meta_info',$m_data,array('id'=>$meta_id));

            // $dataForCta = array_combine($request->order_now_or_call_us_title,$request->order_now_or_call_us_description);

            // if(!Cta::where(['type_id' => $id,'type' => 3])->exists()) {
            //     foreach ($dataForCta as $key => $value) {
            //         $cta = new Cta();
            //         $cta->cta_title = $key;
            //         $cta->cta_description = $value;
            //         $cta->created_by = $data['modified_by'];
            //         $cta->type_id = $id;
            //         $cta->type = 3;
            //         $cta->save();
            //     }
            // }
            // else{
            //     foreach ($dataForCta as $key => $value) {
            //         Cta::where('type_id', $id)->update([
            //             'cta_title' => $key,
            //             'cta_description' => $value,
            //             'modified_by' => $data['modified_by']
            //         ]);
            //     }
            // }
            return redirect('admin/view-product')->with('success', 'Data updated successfully');
        }
        else
        {
            return redirect('admin/view-product')->with('error', 'Data not update');
        }
    }

    function delete_product($id)
    {
        $data['is_deleted'] = '1';
        $data['deleted_at'] = now();//strtotime(date('Y-m-d'));
        $data['deleted_by'] = Auth::id();
        DB::table('products')->where('id',$id)->update($data);
        //for saerch record//
        $this->Generic_model->updateRecord('search_record',array('is_deleted'=>$data['is_deleted']),array('type'=>3,'type_id'=>$id));
        //End//
        return redirect('admin/view-product')->with('success', 'Data is successfully Delete');
    }

    public function deleteGalleryImage(Request $request)
    {
        $id = $request->input('id');

        $preRecord = $this->Generic_model->getSpecificRecord('gallery_images' , array('id'=>$id)) ;
        $delete = DB::table('gallery_images')->where('id',$id)->delete();

        if($delete)
        {
            $this->deleteImage($preRecord['image_name']);
            echo $delete;
        }

    }

    public function updateGalleryImagAlt(Request $request)
    {
        $id = $request->input('id');
        $image_alt_name = $request->input('g_img_alt');

        $update = $this->Generic_model->updateRecord('gallery_images',array('image_alt_name'=>$image_alt_name),array('id'=>$id));

        if($update)
        {
            echo "1";
        }
        else
        {
            echo "0";
        }

    }

    public function deleteImage($img_name)
    {
        //echo $img_name;die;
        if(Storage::disk('public')->delete('/product_uploads/'.$img_name))
        {
            Storage::disk('public')->delete('/product_uploads/'.$img_name);
        }
        //return 'File does not exists';

    }

    public function get_subcategories(Request $request)
    {
        if(!$request->ajax()){
            return response('', 405);
        }
        $cat_id = $request->input('category_id');
        if(!empty($cat_id)){

            $subcategories = DB::table('sub_categories')->where(array('is_deleted'=>0,'cat_id'=>$cat_id))->get();
            if($subcategories)
                return response("$subcategories", 200);
        }
    }

    public function getSubcategoriesWithCategoryId($id)
    {

        $data['is_getSubcategoriesWithCategoryId'] = 1;
        $data['records'] = $this->CategoryModel->catSubCateoryList($id);

        return view('admin/sub_category/view_sub_category',$data);
    }

    public function getProductsWithSubCategoryId($id)
    {

        $data['is_getSubcategoriesWithCategoryId'] = 1;
        $data['records'] = $this->CategoryModel->getSubCatProducts($id);
        // echo "<pre>";
        // print_r($data);die;
        return view('admin/product/view_product',$data);
    }




}
