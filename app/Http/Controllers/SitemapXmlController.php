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


class SitemapXmlController extends Controller
{
    function index()
    {
        return response()->view('frontend.sitemap')->header("Content-Type: text/xml;charset=iso-8859-1"); 
    }
}