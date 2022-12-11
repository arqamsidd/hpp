<?php
use App\Models\GenericModel;
use App\Models\CategoryModel;
use App\Models\PopupProductModel;

if (! function_exists('getCategories'))
{
    function getCategories()
    {
    	$categories = DB::table('categories')->where('is_deleted',0)->orderBy('sort_order','ASC')->get();   
    	if(!empty($categories))
    		return $categories;
    	else
    		return '';
    }	
}

if (! function_exists('getSubCategories'))
{
    function getSubCategories($category_id)
    { 
    	$sub_categories = DB::table('sub_categories')->where(array('cat_id'=>$category_id,'is_deleted'=>0))->orderBy('sort_order','ASC')->get();
    	if(!empty($sub_categories))
    		return $sub_categories;
    	else
    		return '';
    }
}

if (! function_exists('getAllSubCategories'))
{
    function getAllSubCategories()
    { 
    	$sub_categories = DB::table('sub_categories')->where(array('is_deleted'=>0))->orderBy('sort_order','ASC')->get();
    	if(!empty($sub_categories))
    		return $sub_categories;
    	else
    		return '';
    }
}

if (! function_exists('getSubCategoryProducts'))
{
    function getSubCategoryProducts($subcategory_id)
    { 
    	//$products = DB::table('products')->where(array('subcategory_id'=>$subcategory_id,'is_deleted'=>0))->orderBy('sort_order','ASC')->get();
        $CategoryModel = new CategoryModel;
        $products = $CategoryModel->getSubCatProducts($subcategory_id);
    	if(!empty($products))
    		return $products;
    	else
    		return '';
    }
}

if (! function_exists('getSubCategoryPopupProducts'))
{
    function getSubCategoryPopupProducts($subcategory_id)
    {
        $PopupProductModel = new PopupProductModel;
        $popup_products = $PopupProductModel->getPopupProducts($subcategory_id);
        if(!empty($popup_products))
            return $popup_products;
        else
            return '';
    }
}


if (! function_exists('getNavPages'))
{
    function getNavPages()
    { 
        $pages = DB::table('new_page')->where(array('is_deleted'=>0))->orderBy('sort_order','ASC')->get();
        if(!empty($pages))
            return $pages;
        else
            return '';
    }
}

if (! function_exists('getBlogs'))
{
    function getBlogs()
    {
        $blogs = DB::table('posts')->where('status','enabled')->limit(4)->orderBy('id','DESC')->get();   
        if(!empty($blogs))
            return $blogs;
        else
            return '';
    }   
}

if (! function_exists('getAdminDetail'))
{
    function getAdminDetail($id)
    {
        $admin = DB::table('admins')->where(array('is_deleted'=>0,'id'=>$id))->orderBy('id','ASC')->get();
        if(!empty($admin))
            return $admin;
        else
            return '';
    }   
}

if(!function_exists('getSubCategoriesIds'))
{
    function getSubCategoriesIds($prod_id)
    {
        $Generic_model = new GenericModel;
        $Sub_ids = $Generic_model->getAllRecords('multi_tag_products',array('product_id'=>$prod_id),'id','ASC');
        // echo "<pre>";
        // print_r($Sub_ids);die;
        $s_ids = array();
        if (!empty($Sub_ids)) 
        {
            foreach ($Sub_ids as $value) 
            {
                $sub_id = !empty($value->sub_cat_id) ? $value->sub_cat_id : '';
                $s_ids[] = $sub_id;
            }
            return $s_ids;
        }
        else
        {
            return $s_ids;
        }
    }   
}

?>