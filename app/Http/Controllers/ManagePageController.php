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

class ManagePageController extends Controller
{
    function __construct()
    {
        $this->Generic_model = new GenericModel;
    }

    public function index()
    {
	    echo view('admin/pages/add_page');
    }

    public function insert(Request $request)
    {
        $data['page_name'] = $request->input('page_name');
        $data['page_slug'] = Str::slug($request->input('page_name'));
        $data['sort_order'] = $request->input('sort_order');
        $data['status'] = $request->input('status');
        $data['meta_title'] = $request->input('meta_title');
        $data['meta_keywords'] = $request->input('meta_keywords');
        $data['schema_script_other'] = $request->input('schema_script_other');
        $data['meta_description'] = $request->input('meta_description');
        $data['is_deleted'] = '0';
        $data['created_at'] = now();
        $data['created_by'] = Auth::id();
        $added = $this->Generic_model->insertGetId('new_page',$data);
        if (!empty($added))
        {
            return redirect('admin/view-pages/')->with('success', 'Data added successfully!');
        }
        else
        {
            return redirect('admin/view-pages/')->with('error', 'Something went wrong.');
        }
    }

    public function view_pages()
    {
        $data['records'] = DB::table('new_page')->where('is_deleted',0)->get();
        return view('admin/pages/view_pages',$data);
    }

    function edit_page($id)
    {
        $data['record'] = $this->Generic_model->getSpecificRecord('new_page' , array('is_deleted'=>0,'id'=>$id));
      
        return view('admin/pages/add_page',$data);
    }

    public function update_page(Request $request)
    {
    	$id = $request->input('id');
    	$preRecord = $this->Generic_model->getSpecificRecord('new_page' , array('is_deleted'=>0,'id'=>$id)) ;
        $data['page_name'] = $request->input('page_name');
        $data['page_slug'] = Str::slug($request->input('page_name'));
        $data['sort_order'] = $request->input('sort_order');
        $data['status'] = $request->input('status');
        $data['meta_title'] = $request->input('meta_title');
        $data['meta_keywords'] = $request->input('meta_keywords');
      $data['schema_script_other'] = $request->input('schema_script_other');
        $data['meta_description'] = $request->input('meta_description');
        $data['is_deleted'] = '0';
        $data['updated_at'] = now();
        $data['modified_by'] = Auth::id();
        $updated = $this->Generic_model->updateRecord('new_page',$data,array('id'=>$id));
        if (!empty($updated))
        {
            return redirect('admin/view-pages/')->with('success', 'Data added successfully!');
        }
        else
        {
            return redirect('admin/view-pages/')->with('error', 'Something went wrong.');
        }
    }

    function delete_page($id)
    {
        $data['is_deleted'] = '1';
        $data['deleted_at'] = now();
        $data['deleted_by'] = Auth::id();
        DB::table('new_page')->where('id',$id)->update($data);
        return redirect('admin/view-pages')->with('success', 'Data is successfully Delete');
    }
}
