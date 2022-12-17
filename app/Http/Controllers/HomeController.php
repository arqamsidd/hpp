<?php

namespace App\Http\Controllers;


use App\Models\CategoryModel;
use App\Models\Comment;
use App\Models\Cta;
use App\Models\GenericModel;
use App\Models\PopupProductModel;
use App\Models\Post_Category;
use App\Models\Post;
use App\Models\Tag;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $this->Generic_model = new GenericModel;
        $this->CategoryModel = new CategoryModel;
        $this->PopupProductModel = new PopupProductModel;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      die("dd");
        return view('home');
    }

    public function l1()
    {
        $segments = request()->segments();
        $slug  = end($segments);
        $data['cat_record'] = $this->Generic_model->getSpecificRecord('categories' , array('is_deleted'=>0,'slug'=>$slug)) ;
        if (!empty($data['cat_record']))
        {
            $id = $data['cat_record']['id'];
            $data['meta_info'] = $this->Generic_model->getSpecificRecord('meta_info' , array('type_id'=>$id,'type'=>1,'is_deleted'=>0,'id'=>$id)) ;
            $data['sub_cat_record'] = $this->CategoryModel->catSubCateoryList($id);
            foreach ($data['sub_cat_record'] as $value)
            {
                //echo $value->id;
                $data['sub_cat_pro_record'][$value->id] = $this->CategoryModel->subCatProducts($value->id);
            }
            $data['cat_cta'] = $this->CategoryModel->cateoryCTA($id);
            return view('frontend/l1',$data);
        }
        else
        {
            return abort(404);// 'Unauthorized action.');
        }
    }

    public function l2()
    {
        $segments = request()->segments();
        $slug  = end($segments);
        $data['sub_cat_record'] = $this->Generic_model->getSpecificRecord('sub_categories' , array('is_deleted'=>0,'slug'=>$slug)) ;
        if (!empty($data['sub_cat_record']))
        {
            $id = $data['sub_cat_record']['id'];
            $data['meta_info'] = $this->Generic_model->getSpecificRecord('meta_info' , array('type_id'=>$id,'type'=>2,'is_deleted'=>0,'id'=>$id)) ;

            $data['products'] = $this->CategoryModel->subCatProducts($data['sub_cat_record']['id']);

            $data['subcategory_cta'] = $this->CategoryModel->subCateoryCTA($id);
            return view('frontend/l2',$data);
        }
        else
        {
            return abort(404);// 'Unauthorized action.');
        }

    }


    protected function loadOtherPage(Request $request){

        $page_slug = last(request()->segments());
        $page_SEO = DB::table('new_page')->where(array('page_slug' => $page_slug, 'is_deleted' => 0))->get();
        if(count($page_SEO)){
            $meta_info = (array) $page_SEO->first();
        }
        $page_data['meta_info'] = $meta_info;
      
        return view('frontend/'.$page_slug,$page_data);
        // print_r($data);
    }

    public function product_detail_page()
    {
        $segments = request()->segments();
        $slug  = end($segments);
        $data['product'] = (array)DB::table('products')->where('is_deleted',0)->where(DB::raw('BINARY `slug`'), $slug )->first();
        $data['cat_record'] = (array)DB::table('categories')->where('is_deleted',0)->where(DB::raw('BINARY `slug`'), $slug )->first();
        $data['sub_cat_record'] = (array)DB::table('sub_categories')->where('is_deleted',0)->where(DB::raw('BINARY `slug`'), $slug )->first();
        if (!empty($data['product']))
        {
            $id = $data['product']['id'];
            $data['meta_info'] = $this->Generic_model->getSpecificRecord('meta_info' , array('type_id'=>$id,'type'=>3,'is_deleted'=>0)) ;
            $data['gallery_images'] = $this->Generic_model->getAllRecords('gallery_images' , array('product_id'=>$id), 'id', 'DESC') ;

            // $data['p_feature_img'] = !empty($data['product']['feature_image_path']) ? $data['product']['feature_image_path'] : '';

            //$data['product_cta'] = $this->CategoryModel->productCTA($id);
            $sub_categories_id = getSubCategoriesIds($id);
            $data['related_products'] = $this->CategoryModel->relatedProducts($sub_categories_id,$id);

            if (empty($data['related_products']))
            {
                $data['related_products'] = $this->CategoryModel->similarProducts($id);
            }
          
            if(Cta::where(['type_id' => $id,'type' => 3])->exists()){

                //$data['subcategory_cta'] = $this->CategoryModel->subCateoryCTA($sub_categories_id['0']);
                //$data['subcategory_cta'] = Cta::where(['type_id' => $id,'type' => 3])->get();
              
               $data['subcategory_cta'] = DB::table('products')
                                          ->join('cta', 'products.id', '=', 'cta.type_id')
                                          ->select('products.cta_image_path', 'cta.cta_title','cta.cta_description')
                 							->where('products.id',$id)
                                          ->get();
              
              
            }
            else{
                $data['subcategory_cta'] = $this->CategoryModel->subCateoryCTA($sub_categories_id['0']);
            }



            $page_slug = last(request()->segments());
            $page_SEO = DB::table('products')->where(array('slug' => $page_slug, 'is_deleted' => 0))->get();
            if(count($page_SEO)){
                $meta_info = (array) $page_SEO->first();
            }
            $data['meta_info']['page_indexing'] = $meta_info['page_indexing'];
            $data['meta_info']['schema_script'] = $meta_info['schema_script'];
            $data['meta_info']['og_tag_script'] = $meta_info['og_tag_script'];



            // print_r($data['subcategory_cta']);die;
            return view('frontend/product-detail-page',$data);
        }
        elseif (!empty($data['cat_record']))
        {

            $id = $data['cat_record']['id'];
            $data['meta_info'] = $this->Generic_model->getSpecificRecord('meta_info' , array('type_id'=>$id,'type'=>1,'is_deleted'=>0)) ;
            if($id == 9){
            	$data['sub_cat_record'] = $this->CategoryModel->catSubCateoryList(6);
            }
            else{
            	$data['sub_cat_record'] = $this->CategoryModel->catSubCateoryList($id);
            }
            
          	//dd($data['sub_cat_record']);
            //$ganjaIDs = [65, 43, 46, 45, 44];
            //$loopCounter = 0;
          	if (true ){
            	foreach ($data['sub_cat_record'] as $value)
                {
                    $data['sub_cat_pro_record'][$value->id] = $this->CategoryModel->subCatProducts($value->id);
                    $data['popup_products'][$value->id] = $this->PopupProductModel->getPopupProducts([$value->id]);
                }
            }
            
            /*
            else{
            	foreach ($ganjaIDs as $singleId){
                	$data['sub_cat_pro_record'][$singleId] = $this->CategoryModel->subCatProducts($singleId);
                    $data['popup_products'][$singleId] = $this->PopupProductModel->getPopupProducts([$singleId]);
                }
            }
            */
            
            $data['selectedDropdownValue'] = $data['cat_record']['cat_name'];
            $data['cat_cta'] = $this->CategoryModel->cateoryCTA($id);
            $page_slug = last(request()->segments());
            $page_SEO = DB::table('categories')->where(array('slug' => $page_slug, 'is_deleted' => 0))->get();

            if(count($page_SEO)){
                $meta_info = (array) $page_SEO->first();
            }
            $data['meta_info']['schema_script'] = $meta_info['schema_script'];
            $data['meta_info']['og_tag_script'] = $meta_info['og_tag_script'];
            return view('frontend/l1',$data);
        }
        elseif (!empty($data['sub_cat_record']))
        {
            $id = $data['sub_cat_record']['id'];
            $data['meta_info'] = $this->Generic_model->getSpecificRecord('meta_info' , array('type_id'=>$id,'type'=>2,'is_deleted'=>0)) ;

            $data['products'] = $this->CategoryModel->subCatProducts($data['sub_cat_record']['id']);
            $data['selectedDropdownValue'] = $data['sub_cat_record']['sub_cat_name'];
            $data['subcategory_cta'] = $this->CategoryModel->subCateoryCTA($id);
            $data['popup_products'] = $this->PopupProductModel->getPopupProducts($data['sub_cat_record']['id']);
            $page_slug = last(request()->segments());
            $page_SEO = DB::table('sub_categories')->where(array('slug' => $page_slug, 'is_deleted' => 0))->get();

            if(count($page_SEO)){
                $meta_info = (array) $page_SEO->first();
            }
            $data['meta_info']['schema_script'] = $meta_info['schema_script'];
            $data['meta_info']['og_tag_script'] = $meta_info['og_tag_script'];
            return view('frontend/l2',$data);
        }
        else
        {
            return abort(404);
        }
    }

    public function l2withPopup(Request $request)
    {
        $request->session()->flash('popup','yes') ;
    }

    public function searchVal(Request $request)
    {
        if(!$request->ajax()){
            return response('', 405);
        }
        $search_val = $request->input('search_val');
        if(!empty($search_val))
        {
            $searchResult = $this->CategoryModel->searchResult($search_val);
            if($searchResult){
                $data['searchResult'] = $searchResult;

                $html = view('frontend/ajax-search-data', $data)->render();
                return response()->json($html);
            }

        }
    }

    public function getCategoryImage(Request $request)
    {
        if(!$request->ajax()){
            return response('', 405);
        }

        $cat_id = $request->input('category_id');

        if(!empty($cat_id)){

            $categories = $this->Generic_model->getSpecificRecord('categories' , array('is_deleted'=>0,'id'=>$cat_id)) ;
            if($categories){
                return response()->json($categories);
            }
        }
    }

    public function getSubCategoryImage(Request $request)
    {
        if(!$request->ajax()){
            return response('', 405);
        }

        $subcat_id = $request->input('subcategory_id');

        if(!empty($subcat_id)){

            $subcategories = $this->Generic_model->getSpecificRecord('sub_categories' , array('is_deleted'=>0,'id'=>$subcat_id)) ;
            if($subcategories){
                return response()->json($subcategories);
            }
        }
    }

    //Blog data//
    public function blogs()
    {
        $posts_count = Post::all();
        $post = null;
        if($posts_count->count() <= 6 || $posts_count->count() > 0)
        {
            $posts = Post::orderBy('created_at', 'desc')->get();
        }
        else
        {
            $posts = Post::all()->random(6);
        }

        $pagi_posts = DB::table('posts')->where('status','enabled')->orderBy('created_at', 'desc')->paginate(15);
        $recent_posts = Post::orderByRaw("RAND()")->take(4)->get();
        $popular_posts = Post::latest()->where('status','enabled')->take(4)->get();
       $post_categories = DB::table('post__categories')->get();
        // echo "<pre>";
        // print_r($popular_posts);die;
        return view('frontend.packaging-news')->with('posts',$posts)->with('pagi_posts',$pagi_posts)->with('recent_posts',$recent_posts)->with('popular_posts',$popular_posts)->with('post_cates',$post_categories);
    }
    public function viewPost($slug)
    {
//        $post = Post::find($post_id);
        if (Post::where('slug', '=', $slug)->count() > 0) {
            // user found

            $post = DB::table('posts')->where('slug',$slug)->first();
            $comments = Comment::all();
            $post_tags = DB::table('post_tags')->where('post_id',$post->id)->get();
            $recent_posts = Post::orderByRaw("RAND()")->take(15)->get();
          $meta_info = $this->Generic_model->getSpecificRecord('posts' , array('slug'=>$slug)) ;
            return view('frontend.packaging-news-detail')->with('post',$post)->with('comments',$comments)->with('post_tags',$post_tags)->with('recent_posts',$recent_posts)->with('meta_info',$meta_info);
        }
        else{
            return abort(404);
        }
    }
    function customQuoteForm(Request $request)
    {
        $rules = array(
            'material' => 'required',
            'length' => 'required',
            'width' => 'required',
            'depth' => 'required',
            'unit' => 'required',
            'quantity' => 'required',
            'printing' => 'required',
            'card_thickness' => 'required',
            'extra_finishes' => 'required',
            'coating_lamination' => 'required',
            'description' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            // 'image' => 'required',
        );
//
        $validator = Validator::make($request->all(), $rules);
      
        if($request->name === "HenryDex"){
          return redirect('thank-you-custom-quote-form');
        }

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        } else {

            $data = array(

                'material' => $request->material,
                'length' => $request->length,
                'width' => $request->width,
                'depth' => $request->depth,
                'unit' => $request->unit,
                'quantity' => $request->quantity,
                'printing' => $request->printing,
                'card_thickness' => $request->card_thickness,
                'extra_finishes' => $request->extra_finishes,
                'coating_lamination' => $request->coating_lamination,
                'description' => $request->description,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'ip2loc_ip' => $request->ip2loc_ip,
                'ip2loc_isp' => $request->ip2loc_isp,
                'ip2loc_org' => $request->ip2loc_org,
                'ip2loc_country' => $request->ip2loc_country,
                'ip2loc_region' => $request->ip2loc_region,
                'ip2loc_city' => $request->ip2loc_city,
                'page_url' => $request->p_name,
                'is_deleted' => 0,
                'created_at' => now(),
                'form_type' => 'custom_quote',
              'fullpageurl' 		 => $request->fullpageurl
            );


            if ($request->file()) {
                $filePath = $request->file('image')->store('custom_quote', 'public');
                $explode = explode('/', $filePath);
                $data['image'] = $explode[1];
                $data['image_path'] = '/storage/' . $filePath;
            }
            
            $apiData =array();
            $apiData=$data;
            $apiData['medium']=$request->lb_medium??0;
            $apiData['q1']=$request->unit??0;
            $apiData['campaign_name']=$request->lb_camp??'';
            $apiData['campaign_id']=$request->lb_camp_id??'';
            $apiData['campaign_keywords']=$request->lb_camp_keywords??'';
            $apiData['script_key']=$request->lb_script_key??'';

            //            send data tp pCamp
            $result = \App\Utils\Helper::addLead($apiData);
//            end
            $addData = $this->Generic_model->insert('custom_quotes', $data);
            if ($addData) {
                $data['view'] = 'custom_quote';
                $data['subject'] = 'Custom Quote Form - New Lead';
                $this->sendEmail($data);
                $request->session()->flash('success', 'Quote submitted successfully.');
                return redirect('thank-you-custom-quote-form');
            } else {
                $request->session()->flash('flash_errors', 'Error Try Again Later.');
                return redirect('error-page');
            }
        }

    }

    function instantQuoteForm(Request $request)
    {
        $rules = array(
            'p_name' => 'required',
            'unit' => 'required',
            'description' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        );

        $validator = Validator::make($request->all(),$rules) ;
    

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        else
        {
            $page_url = Str::slug($request->input('p_name'));
            $data = array(
                'page_url'           => $page_url,
                'unit'               => $request->unit,
                'description'        => $request->description,
                'name'               => $request->name,
                'email'              => $request->email,
                'phone'              => $request->phone,
                'ip2loc_ip'          => $request->ip2loc_ip,
                'ip2loc_isp'         => $request->ip2loc_isp,
                'ip2loc_org'         => $request->ip2loc_org,
                'ip2loc_country'     => $request->ip2loc_country,
                'ip2loc_region'      => $request->ip2loc_region,
                'ip2loc_city'        => $request->ip2loc_city,
                'is_deleted'         => 0,
                'created_at'         => now(),
                'form_type'          => 'instant_quote',
                'material'           => '',
                'length'             => '',
                'width'              => '',
                'depth'              => '',
                'quantity'           => '',
                'printing'           => '',
                'card_thickness'     => '',
                'extra_finishes'     => '',
                'coating_lamination' => '',
              'fullpageurl' 		 => $request->fullpageurl
            );
            $apiData =array();
            $apiData=$data;
            $apiData['medium']=$request->lb_medium??0;
            $apiData['q1']=$request->unit??0;
            $apiData['campaign_name']=$request->lb_camp??'';
             $apiData['campaign_id']=$request->lb_camp_id??'';
            $apiData['campaign_keywords']=$request->lb_camp_keywords??'';
            $apiData['script_key']=$request->lb_script_key??'';

            //            send data tp pCamp
            $result = \App\Utils\Helper::addLead($apiData);
//            end


            $addData = $this->Generic_model->insert('custom_quotes',$data) ;
            if($addData)
            {
                $data['view'] = 'instant_quote_form';
                $data['subject'] = 'Instant Quote Form - New Lead';
                $this->sendEmail($data);

                $request->session()->flash('success','Quote submitted successfully.') ;
                return redirect('thank-you-instant-quote-form');
            }
            else
            {
                $request->session()->flash('flash_errors','Error Try Again Later.') ;
                return redirect('error-page');
            }
        }
    }




    function PopupForm(Request $request)
    {

        $rules = array(
            'p_name' => 'required',
            'unit' => 'required',
            'description' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        );

        $validator = Validator::make($request->all(),$rules) ;

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        else
        {
            $page_url = Str::slug($request->input('p_name'));
            $data = array(
                'page_url'           => $page_url,
                'unit'               => $request->unit,
                'description'        => $request->description,
                'name'               => $request->name,
                'email'              => $request->email,
                'phone'              => $request->phone,
                'ip2loc_ip'          => $request->ip2loc_ip,
                'ip2loc_isp'         => $request->ip2loc_isp,
                'ip2loc_org'         => $request->ip2loc_org,
                'ip2loc_country'     => $request->ip2loc_country,
                'ip2loc_region'      => $request->ip2loc_region,
                'ip2loc_city'        => $request->ip2loc_city,
                'is_deleted'         => 0,
                'created_at'         => now(),
                'form_type'          => 'popup_quote',
                'material'           => '',
                'length'             => '',
                'width'              => '',
                'depth'              => '',
                'quantity'           => '',
                'printing'           => '',
                'card_thickness'     => '',
                'extra_finishes'     => '',
                'coating_lamination' => '',
              'fullpageurl' 		 => $request->fullpageurl
            );

            $apiData =array();
            $apiData=$data;
            $apiData['medium']=$request->lb_medium??0;
            $apiData['q1']=$request->unit??0;
            $apiData['campaign_name']=$request->lb_camp??'';
             $apiData['campaign_id']=$request->lb_camp_id??'';
            $apiData['campaign_keywords']=$request->lb_camp_keywords??'';
            $apiData['script_key']=$request->lb_script_key??'';

            //            send data tp pCamp
            $result = \App\Utils\Helper::addLead($apiData);
//            end
            $addData = $this->Generic_model->insert('custom_quotes',$data) ;
            if($addData)
            {
                $data['view'] = 'instant_quote_form';
                $data['subject'] = 'Popup Quote Form - New Lead';
                $this->sendEmail($data);

                $request->session()->flash('success','Quote submitted successfully.') ;
                return redirect('thank-you-popup-form');
            }
            else
            {
                $request->session()->flash('flash_errors','Error Try Again Later.') ;
                return redirect('error-page');
            }
        }
    }
    
    
    function CallBackPopupForm(Request $request)
    {

        $rules = array(
            'p_name' => 'required',
            'birthdaytime' => 'required',
            'description' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        );
		
        if($request->input('p_name') == ""){
            $request->merge([
                'p_name' => "normal-page",
            ]);
        }
      


        $validator = Validator::make($request->all(),$rules) ;
      
        

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        else
        {
            $page_url = Str::slug($request->input('p_name'));
            $data = array(
                'page_url'           => $page_url,
                'birthdaytime'       => $request->birthdaytime,
                'description'        => $request->description,
                'name'               => $request->name,
                'email'              => $request->email,
                'phone'              => $request->phone,
                'ip2loc_ip'          => $request->ip2loc_ip,
                'ip2loc_isp'         => $request->ip2loc_isp,
                'ip2loc_org'         => $request->ip2loc_org,
                'ip2loc_country'     => $request->ip2loc_country,
                'ip2loc_region'      => $request->ip2loc_region,
                'ip2loc_city'        => $request->ip2loc_city,
                'is_deleted'         => 0,
                'created_at'         => now(),
                'form_type'          => 'call_back_popup_quote',
                'material'           => '',
                'length'             => '',
                'width'              => '',
                'depth'              => '',
                'quantity'           => '',
                'printing'           => '',
                'card_thickness'     => '',
                'extra_finishes'     => '',
                'coating_lamination' => '',
                'fullpageurl' 		 => $request->fullpageurl
            );

            $apiData =array();
            $apiData=$data;
            $apiData['medium']=$request->lb_medium??0;
            $apiData['q1']=1;
            $apiData['campaign_name']=$request->lb_camp??'';
             $apiData['campaign_id']=$request->lb_camp_id??'';
            $apiData['campaign_keywords']=$request->lb_camp_keywords??'';
            $apiData['script_key']=$request->lb_script_key??'';
             $type='callback';

            //            send data tp pCamp
            $result = \App\Utils\Helper::addLead($apiData);
//            end
            $addData = $this->Generic_model->insert('custom_quotes',$data) ;
            if($addData)
            {
                $data['view'] = 'requestpop-up-3';
                $data['subject'] = 'Call Back Popup Quote Form - New Lead';
                $this->sendEmail($data);

                $request->session()->flash('success','Quote submitted successfully.') ;
                return redirect('thank-you-callback-popup-form');
            }
            else
            {
                $request->session()->flash('flash_errors','Error Try Again Later.') ;
                return redirect('error-page');
            }
        }
    }
    
    

    function sampleKitForm(Request $request)
    {
        $rules = array(
            //'p_name' => 'required',
            // 'msg' => 'required',
            'name' => 'required',
            'email' => 'required',
            'companyname' => 'required',
            'companywebsite' => 'required',
            'socialaddress' => 'required',
            'phone' => 'required',
        );



        $validator = Validator::make($request->all(),$rules) ;



        if($validator->fails())

        {

            dd($validator->errors());

            // return redirect()->back()->withErrors($validator->errors())->withInput();

            //   Print_r(session('error' ) );
            // die();
        }
        else
        {
            $data = array(
                'page_url'           => $request->p_name??'home',
                // 'description'        => $request->msg,
                'name'               => $request->name,
                'email'              => $request->email,
                'companyname'        => $request->companyname,
                'companywebsite'     => $request->companywebsite,
                'socialaddress'      => $request->socialaddress,
                'phone'              => $request->phone,
                'ip2loc_ip'          => $request->ip2loc_ip,
                'ip2loc_isp'         => $request->ip2loc_isp,
                'ip2loc_org'         => $request->ip2loc_org,
                'ip2loc_country'     => $request->ip2loc_country,
                'ip2loc_region'      => $request->ip2loc_region,
                'ip2loc_city'        => $request->ip2loc_city,
                'is_deleted'         => 0,
                'created_at'         => now(),
                'form_type'          => 'sample_quote',
                'material'           => '',
                'unit'           => '',
                'length'             => '',
                'width'              => '',
                'depth'              => '',
                'quantity'           => '',
                'printing'           => '',
                'card_thickness'     => '',
                'extra_finishes'     => '',
                'coating_lamination' => '',
              	'fullpageurl' 		 => $request->fullpageurl
            );
          $apiData =array();
            $apiData=$data;
            $apiData['medium']=$request->lb_medium??0;
            $apiData['q1']=1;
            $apiData['campaign_name']=$request->lb_camp??'';
             $apiData['campaign_id']=$request->lb_camp_id??'';
            $apiData['campaign_keywords']=$request->lb_camp_keywords??'';
            $apiData['script_key']=$request->lb_script_key??'';
            $type='sample_kit';
            //            send data tp pCamp
             $result = \App\Utils\Helper::addLead($apiData,$type);
//            end
           
         
            $addData = $this->Generic_model->insert('custom_quotes',$data) ;
            if($addData)
            {
                $data['view'] = 'sample_kit_form';
                $data['subject'] = 'Sample Kit Form - New Lead';
                $this->sendEmail($data);
                //$request->session()->flash('success','Quote submitted successfully.') ;
                return redirect('thank-you-sample-kit');
            }
            else
            {
                $request->session()->flash('flash_errors','Error Try Again Later.') ;
                return redirect('error-page');
            }
        }
    }

    function contactUsForm(Request $request)
    {
        $rules = array(
            // 'p_name' => 'required',
            'description' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        );

        $validator = Validator::make($request->all(),$rules) ;

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        else
        {
            $data = array(
                'page_url'           => $request->p_name,
                'description'        => $request->description,
                'name'               => $request->name,
                'email'              => $request->email,
                'phone'              => $request->phone,
                'ip2loc_ip'          => $request->ip2loc_ip,
                'ip2loc_isp'         => $request->ip2loc_isp,
                'ip2loc_org'         => $request->ip2loc_org,
                'ip2loc_country'     => $request->ip2loc_country,
                'ip2loc_region'      => $request->ip2loc_region,
                'ip2loc_city'        => $request->ip2loc_city,
                'is_deleted'         => 0,
                'created_at'         => now(),
                'form_type'          => 'contact_us',
                'material'           => '',
                'unit'           => '',
                'length'             => '',
                'width'              => '',
                'depth'              => '',
                'quantity'           => '',
                'printing'           => '',
                'card_thickness'     => '',
                'extra_finishes'     => '',
                'coating_lamination' => '',
                'fullpageurl' 		 => $request->fullpageurl
            );

            // echo "<pre>";
            // print_r($data);die();

            $addData = $this->Generic_model->insert('custom_quotes',$data) ;
            if($addData)
            {
                //     echo "<pre>";
                // print_r($addData);die();
                $data['view'] = 'contact-us';
                $data['subject'] = 'Contact us Form - New Lead';
                $this->sendEmail($data);
                //$request->session()->flash('success','Quote submitted successfully.') ;
                return redirect('thank-you');
            }
            else
            {
                $request->session()->flash('flash_errors','Error Try Again Later.') ;
                return redirect('error-page');
            }
        }
    }

    function sendEmail($data)
    {

        if(!empty($data['view']) && !empty($data['email']) && !empty($data['name']) && !empty($data['subject'])){

            Mail::send('frontend/emails/'.$data['view'], $data, function($message) use ($data)
            {

                $message->to(['orders@halfpricepackaging.com'])
                    ->cc(['omair.ahmed@salsoft.net', 'salman@salsoft.net', 'marketing@halfpricepackaging.co'])
                    ->subject($data['subject']);
            });
        }


        return true;
    }

}