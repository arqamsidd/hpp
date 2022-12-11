<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\MediaLibrary;
use Illuminate\Support\Facades\Storage;

class MediaLibraryController extends Controller
{
    function __construct()
    {
        $this->MediaLibrary = new MediaLibrary;
    }

    public function getMediaLibrary(){
        return view('admin.forms.media_library');
    }
    public function saveMedia(Request $request){
        if($request->file()) {
                if(!empty($request->file('image'))) 
                {
                    $fileName = $request->image->getClientOriginalName();
                    $filePath = $request->file('image')->move('storage/media_library_uploads', $fileName);
                    $data['name'] = $fileName;
                    $data['path'] = $filePath;

                }
            }
            $added = $this->MediaLibrary->insertGetId('media_library',$data);
            
            if(!empty($added))
            {
                $path = $this->MediaLibrary->getSpecificRecord('media_library',array('id' => $added));
                return redirect()->back()->with('success', $path['path']); 
            }
    }
}