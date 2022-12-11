<?php
use App\Models\GenericModel;

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
    	$products = DB::table('products')->where(array('subcategory_id'=>$subcategory_id,'is_deleted'=>0))->orderBy('sort_order','ASC')->get();
    	if(!empty($products))
    		return $products;
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
        $blogs = DB::connection('mysql2')->table('posts')->where('status','enabled')->limit(4)->orderBy('id','DESC')->get();   
        if(!empty($blogs))
            return $blogs;
        else
            return '';
    }   
}


?>