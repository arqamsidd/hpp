<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Http\Requests;
use App\Models\GenericModel;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CTA_Controller extends Controller
{
    function __construct()
    {
        $this->Generic_model = new GenericModel;
    }

    public function index($type_id)
    {
    	// For Category 1//
    	if ($type_id == 1) 
    	{
    		$data['type_name'] = 'Category'; 
    		$data['type'] = '1'; 
	    	$data['records'] = DB::table('categories')->where('is_deleted',0)->get();
	    }
	    elseif ($type_id == 2) 
	    {
	    	$data['type_name'] = 'Sub Category'; 
    		$data['type'] = '2'; 
	    	$data['records'] = DB::table('sub_categories')->where('is_deleted',0)->get();
	    }
	    else
	    {
	    	$data['type_name'] = 'Product'; 
    		$data['type'] = '3'; 
	    	$data['records'] = DB::table('products')->where('is_deleted',0)->get();
	    }
	    echo view('admin/cta/add_cta',$data);
    }

    public function insert(Request $request)
    {
        $data['type'] = $request->input('type');
        $data['type_id'] = $request->input('type_id');
        $data['cta_title'] = $request->input('cta_title');
        $data['cat_cta_image_alt'] = $request->input('cat_cta_image_alt');
        $data['cta_description'] = $request->input('cta_description');
        $data['status'] = $request->input('status');
        $data['sort_order'] = $request->input('sort_order');
        $data['is_deleted'] = '0';
        $data['created_at'] = now();//strtotime(date('Y-m-d'));
        $data['created_by'] = Auth::id();
        // print_r($data);die;
        // $request->validate([
        // 'cta_image' => 'required|max:2048'
        // ]);
        if($request->file()) 
        {
            $cta_image = $request->cta_image->getClientOriginalName();
            $cta_image_path = $request->file('cta_image')->storeAs('cta_uploads', $cta_image, 'public');
            $data['cta_image'] = $cta_image;
            $data['cta_image_path'] = '/storage/' . $cta_image_path;

            // $filePath = $request->file('cta_image')->store('cta_uploads', 'public');
            // $explode = explode('/',$filePath);
            // $data['cta_image'] = $explode[1];
            // $data['cta_image_path'] = '/storage/' . $filePath;
        }
        $added = $this->Generic_model->insertGetId('cta',$data);
        if (!empty($added ))
        {
            return redirect('admin/view-cta/'.$data['type'])->with('success', 'Data added successfully!');
        }
        else
        {
            return redirect('admin/view-cta/'.$data['type'])->with('error', 'Something went wrong.');
        }
    }

    public function view_cta($type_id)
    {
        // For Category 1//
    	if ($type_id == 1) 
    	{
    		$data['type_name'] = 'Categories'; 
    		$data['type'] = '1'; 
	    	$data['records'] = DB::table('cta')
            ->leftjoin('categories', 'categories.id', '=', 'cta.type_id')
            ->select('cta.*', 'categories.cat_name')
            ->where('cta.type',1)
            ->where('cta.is_deleted',0)
            ->where('categories.is_deleted',0)
            ->get();
	    }
	    elseif ($type_id == 2) 
	    {
	    	$data['type_name'] = 'Sub Categories'; 
    		$data['type'] = '2'; 
	    	$data['records'] = DB::table('cta')
            ->leftjoin('sub_categories', 'sub_categories.id', '=', 'cta.type_id')
            ->select('cta.*', 'sub_categories.sub_cat_name')
            ->where('cta.type',2)
            ->where('cta.is_deleted',0)
            ->where('sub_categories.is_deleted',0)
            ->get();
	    }
	    else
	    {
	    	$data['type_name'] = 'Products'; 
    		$data['type'] = '3'; 
	    	$data['records'] = DB::table('cta')
            ->leftjoin('products', 'products.id', '=', 'cta.type_id')
            ->select('cta.*', 'products.name')
            ->where('cta.type',3)
            ->where('cta.is_deleted',0)
            ->where('products.is_deleted',0)
            ->get();
	    }
        return view('admin/cta/view_cta',$data);
    }

    function edit_cta($id)
    {
        $data['record'] = $this->Generic_model->getSpecificRecord('cta' , array('is_deleted'=>0,'id'=>$id)) ;
        $type_id = $data['record']['type'];
        if ($type_id == 1) 
    	{
    		$data['type_name'] = 'Category'; 
    		$data['type'] = '1'; 
	    	$data['records'] = DB::table('categories')->where('is_deleted',0)->get();
	    }
	    elseif ($type_id == 2) 
	    {
	    	$data['type_name'] = 'Sub Category'; 
    		$data['type'] = '2'; 
	    	$data['records'] = DB::table('sub_categories')->where('is_deleted',0)->get();
	    }
	    else
	    {
	    	$data['type_name'] = 'Product'; 
    		$data['type'] = '3'; 
	    	$data['records'] = DB::table('products')->where('is_deleted',0)->get();
	    }
        return view('admin/cta/add_cta',$data);
    }

    public function update_cta(Request $request)
    {
    	$id = $request->input('id');
    	$preRecord = $this->Generic_model->getSpecificRecord('cta' , array('is_deleted'=>0,'id'=>$id)) ;
        $data['type'] = $request->input('type');
        $data['type_id'] = $request->input('type_id');
        $data['cta_title'] = $request->input('cta_title');
        $data['cat_cta_image_alt'] = $request->input('cat_cta_image_alt');
        $data['cta_description'] = $request->input('cta_description');
        $data['status'] = $request->input('status');
        $data['sort_order'] = $request->input('sort_order');
        $data['is_deleted'] = '0';
        $data['updated_at'] = now();//strtotime(date('Y-m-d'));
        $data['modified_by'] = Auth::id();
        // print_r($data);die;
        // $request->validate([
        // 'cta_image' => 'required|max:2048'
        // ]);
        if($request->file('cta_image')) 
        {
            $this->deleteImage($preRecord['cta_image']);

            $cta_image = $request->cta_image->getClientOriginalName();
            $cta_image_path = $request->file('cta_image')->storeAs('cta_uploads', $cta_image, 'public');
            $data['cta_image'] = $cta_image;
            $data['cta_image_path'] = '/storage/' . $cta_image_path;

            // $filePath = $request->file('cta_image')->store('cta_uploads', 'public');
            // $explode = explode('/',$filePath);
            // $data['cta_image'] = $explode[1];
            // $data['cta_image_path'] = '/storage/' . $filePath;
        }
        $updated = $this->Generic_model->updateRecord('cta',$data,array('id'=>$id));
        if (!empty($updated ))
        {
            return redirect('admin/view-cta/'.$data['type'])->with('success', 'Data added successfully!');
        }
        else
        {
            return redirect('admin/view-cta/'.$data['type'])->with('error', 'Something went wrong.');
        }
    }

    function delete_cta($id)
    {
        $data['is_deleted'] = '1';
        $data['deleted_at'] = now();//strtotime(date('Y-m-d'));
        $data['deleted_by'] = Auth::id();
        DB::table('cta')->where('id',$id)->update($data);
        return redirect('admin/view-product')->with('success', 'Data is successfully Delete');
    }

    public function deleteImage($img_name)
    {
        //echo $img_name;die;
        if(Storage::disk('public')->delete('/cta_uploads/'.$img_name)) 
        {
            Storage::disk('public')->delete('/cta_uploads/'.$img_name);
        }
        //return 'File does not exists';

    }




}
