<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Http\Requests;
use App\Models\GenericModel;
use App\Models\CategoryModel;
use App\Models\PopupProductModel;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PopupProductController extends Controller
{
    function __construct()
    {
        $this->Generic_model = new GenericModel;
        $this->CategoryModel = new CategoryModel;
        $this->PopupProductModel = new PopupProductModel;
    }

    public function index()
    {
        $data['records'] = DB::table('sub_categories')->where('is_deleted',0)->get();
        return view('admin/pop-up-product/add_pop_up_product',$data);
    }
    public function insert(Request $request)
    {
        $data['sub_cat_id'] = $request->input('sub_cat_id');
        $data['name'] = $request->input('name');
        $data['is_deleted'] = '0';
        $data['created_at'] = now();
        $data['created_by'] = Auth::id();

        if($request->file()) 
        {
            if(!empty($request->file('image'))) 
            {
                $fileName = $request->image->getClientOriginalName();
                $filePath = $request->file('image')->storeAs('popup_product_uploads', $fileName, 'public');
                $data['image'] = $fileName;
                $data['image_path'] = '/storage/' . $filePath;
            }
        }
        $added = $this->Generic_model->insertGetId('popup_products',$data);
        if(!empty($added))
        {
            return redirect('admin/view-popup-product')->with('success', 'Data added successfully!');
        }  
    }

    public function view_product()
    {
        $data['records'] = $this->PopupProductModel->getPopupProducts();

        return view('admin/pop-up-product/view_pop_up_product',$data);
    }

    function edit_product($id)
    {
        $data['record'] = DB::table('popup_products')->where(array('is_deleted'=>0,'id'=>$id))->get();
        $data['records'] = DB::table('sub_categories')->where('is_deleted',0)->get();
        //echo "<pre>";print_r($data['record']);die;
        return view('admin/pop-up-product/add_pop_up_product',$data);

    }

    function update_product(Request $request)
    {
        $id = $request->input('id');
        $data['sub_cat_id'] = $request->input('sub_cat_id');
        $data['name'] = $request->input('name');
        $data['is_deleted'] = '0';
        $data['updated_at'] = now();//strtotime(date('Y-m-d'));
        $data['modified_by'] = Auth::id();
        $preRecord = $this->Generic_model->getSpecificRecord('popup_products' , array('is_deleted'=>0,'id'=>$id)) ;
        if($request->file('image')) 
        {
            $this->deleteImage($preRecord['image']);

            $fileName = $request->image->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('popup_product_uploads', $fileName, 'public');
            $data['image'] = $fileName;
            $data['image_path'] = '/storage/' . $filePath;
        }
        
        $update = $this->Generic_model->updateRecord('popup_products',$data,array('id'=>$id));
        if ($update) 
        {
            return redirect('admin/view-popup-product')->with('success', 'Data updated successfully');
        }
        else
        {
            return redirect('admin/view-popup-product')->with('error', 'Data not update');
        }
    }

    function delete_product($id)
    {
        $data['is_deleted'] = '1';
        $data['deleted_at'] = now();//strtotime(date('Y-m-d'));
        $data['deleted_by'] = Auth::id();
        DB::table('popup_products')->where('id',$id)->update($data);
        
        return redirect('admin/view-popup-product')->with('success', 'Data is successfully Delete');
    }

    public function deleteImage($img_name)
    {
        //echo $img_name;die;
        if(Storage::disk('public')->delete('/popup_product_uploads/'.$img_name)) 
        {
            Storage::disk('public')->delete('/popup_product_uploads/'.$img_name);
        }
        //return 'File does not exists';

    }

    
    
}
