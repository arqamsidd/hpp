<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Http\Requests;
use App\Models\GenericModel;
use App\Models\CategoryModel;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class CustomFormController extends Controller
{
    function __construct()
    {
        $this->Generic_model = new GenericModel;
        $this->CategoryModel = new CategoryModel;
    }

    public function viewCustomQuotes()
    {
        $data['form_type'] = 'All';
        $data['heading'] = 'View All Quotes';
        $data['records'] = DB::table('custom_quotes')->where(array('is_deleted' =>0))->orderBY('id','desc')->get();
        
        return view('admin/forms/view_custom_quote',$data);
    }

    public function viewCustomQuotesWithFilter(Request $request)
    {
        $form_type = !empty($request->input('form_type')) ? $request->input('form_type') : '';
        if ($form_type == 'Intant Quote') 
        {
            $type = 'instant_quote';
            $data['form_type'] = 'Intant Quote';
            $data['heading'] = 'View All Instant Quotes';
        }
        elseif ($form_type == 'SampleKit') 
        {
            $type = 'sample_quote';
            $data['form_type'] = 'SampleKit';
            $data['heading'] = 'View All Sample Kit Quotes';
        }
        elseif ($form_type == 'Contact Us') 
        {
            $type = 'contact_us';
            $data['form_type'] = 'Contact Us';
            $data['heading'] = 'View All Contact Us';
        }
        elseif ($form_type == 'Custom Quote') 
        {
            $type = 'custom_quote';
            $data['form_type'] = 'Custom Quote';
            $data['heading'] = 'View All Custom Quotes';
        }
        elseif ($form_type == 'Popup') 
        {
            $type = 'popup_quote';
            $data['form_type'] = 'Popup';
            $data['heading'] = 'View All Popup Form Quotes';
        }
        elseif ($form_type == 'CallBackPopupForm') 
        {
            $type = 'call_back_popup_quote';
            $data['form_type'] = 'CallBackPopupForm';
            $data['heading'] = 'View All Call Back Popup Form Quotes';
        }
        
        else
        {
            return redirect('admin/view-custom-quotes');
        }
        $data['records'] = DB::table('custom_quotes')->where(array('is_deleted' =>0 , 'form_type' => $type))->orderBY('id','desc')->get();
        
        return view('admin/forms/view_custom_quote',$data);
    }

    public function viewSampleKitQuotes()
    {
        $data['records'] = DB::table('sample_kit')->where('is_deleted',0)->get();
        $data['form_type'] = 'Contact Us';
        return view('admin/forms/view_custom_quote',$data);
    }

    public function viewInstantQuotes()
    {
        $data['records'] = DB::table('instant_quotes')->where('is_deleted',0)->get();
        $data['form_type'] = 'Intant Quote';
        return view('admin/forms/view_custom_quote',$data);
    }
    
    public function viewAutopopUp3()
    {
        $data['records'] = DB::table('instant_quotes')->where('is_deleted',0)->get();
        $data['form_type'] = 'Popup Quote';
        return view('admin/forms/view_custom_quote',$data);
    }
    
     public function viewCallBackpopUp()
    {
        $data['records'] = DB::table('instant_quotes')->where('is_deleted',0)->get();
        $data['form_type'] = 'Call Back Popup Quote';
        return view('admin/forms/view_custom_quote',$data);
    }
    
    
}
