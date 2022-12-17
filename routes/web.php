<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PopupProductController;
use App\Http\Controllers\CTA_Controller;
use App\Http\Controllers\ManagePageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CustomFormController;
use App\Http\Controllers\SitemapXmlController;
use App\Http\Controllers\MediaLibraryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $page_slug = last(request()->segments());
    if($page_slug == false){
        $page_slug = 'index';
        $page_SEO = DB::table('new_page')->where(array('page_slug' => $page_slug, 'is_deleted' => 0))->get();
        if(count($page_SEO)){
            $meta_info = (array) $page_SEO->first();
        }
        $page_data['meta_info'] = $meta_info;
      
        return view('frontend/'.$page_slug,$page_data);
    }
    else{
        return view('frontend/index');
    }
});

Route::get('/clear', function() {

   Artisan::call('cache:clear');
   Artisan::call('config:clear');
   Artisan::call('config:cache');
   Artisan::call('view:clear');
   Artisan::call('route:clear');
   Artisan::call('route:cache');
   return "All Cache Cleared!";
});
//Route::get('/sitemap.xml',[SitemapXmlController::class,'index']);
Route::get('index',[HomeController::class,'loadOtherPage']);
Route::get('thank-you',[HomeController::class,'loadOtherPage']);
Route::get('thank-you-sample-kit',[HomeController::class,'loadOtherPage']);
Route::get('thank-you-custom-quote-form',[HomeController::class,'loadOtherPage']);
Route::get('thank-you-popup-form',[HomeController::class,'loadOtherPage']);
Route::get('thank-you-callback-popup-form',[HomeController::class,'loadOtherPage']);
Route::get('thank-you-instant-quote-form',[HomeController::class,'loadOtherPage']);
Route::get('box-by-material',[HomeController::class,'loadOtherPage']);
Route::get('shapes-and-styles',[HomeController::class,'loadOtherPage']);
Route::get('our-portfolio',[HomeController::class,'loadOtherPage']);
Route::get('premium-finishes',[HomeController::class,'loadOtherPage']);
Route::get('terms-and-conditions',[HomeController::class,'loadOtherPage']);
Route::get('privacy-policy',[HomeController::class,'loadOtherPage']);
Route::get('refund-cancellation-policy',[HomeController::class,'loadOtherPage']);
Route::get('shipping-policy',[HomeController::class,'loadOtherPage']);
Route::get('about-us',[HomeController::class,'loadOtherPage']);
Route::get('contact-us',[HomeController::class,'loadOtherPage']);
Route::get('packaging-news',[HomeController::class,'loadOtherPage']);
Route::get('packaging-news-detail',[HomeController::class,'loadOtherPage']);
Route::get('error-page',[HomeController::class,'loadOtherPage']);

//search value
Route::get('get-searchVal',[HomeController::class,'searchVal']);
Route::post('get-categoryImage',[HomeController::class,'getCategoryImage']);
Route::post('get-SubcategoryImage',[HomeController::class,'getSubCategoryImage']);
Route::post('custom-quote-form',[HomeController::class,'customQuoteForm']) ;
Route::post('autopop-up-3',[HomeController::class,'PopupForm']) ;
Route::post('requestpop-up-3',[HomeController::class,'CallBackPopupForm']) ;
Route::post('instant-quote-form',[HomeController::class,'instantQuoteForm']) ;
Route::post('sample-kit-form',[HomeController::class,'sampleKitForm']) ;
Route::post('testimonial-all',[HomeController::class,'testimonialAll']) ;
Route::post('contact-us-form',[HomeController::class,'contactUsForm']) ;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin'],function(){

    
    Route::group(['middleware'=>'admin.guest'],function(){
        // Route::get('login', [App\Http\Controllers\AdminController::class, 'loginForm'])->name('admin.login');
        Route::view('login','admin.login')->name('admin.login');

        Route::post('login', [App\Http\Controllers\AdminController::class, 'login'])->name('admin.auth');
        
    });

    Route::group(['middleware'=>'admin.auth'],function(){

        Route::view('dashboard','admin.home')->name('admin.home');
        // Route::get('admin-dashboard',[AdminController::class,'index']);
        Route::get('logout',[AdminController::class,'logout'])->name('admin.logout');

        // Admin Controller
        Route::get('register-admin',[AdminController::class,'addAdmin']);
        Route::post('insert-admin',[AdminController::class,'insertAdmin']);
        Route::get('view-admins',[AdminController::class,'view_admins']);
        Route::get('edit-admin/{id}',[AdminController::class,'edit_admin']);
        Route::post('update-admin',[AdminController::class,'update_admin']);
        Route::get('delete-admin/{id}',[AdminController::class,'delete_admin']);

        //Category Controller
        Route::get('add_category',[CategoryController::class,'index']);
        Route::post('insert_cat',[CategoryController::class,'insert']);
        Route::get('view-category',[CategoryController::class,'view_category']);
        Route::get('edit-category/{id}',[CategoryController::class,'edit_category']);
        Route::post('update-category',[CategoryController::class,'update_category']);
        Route::get('delete-category/{id}',[CategoryController::class,'delete_category']);

        //Sub Category Controller
        Route::get('add-sub-category',[SubCategoryController::class,'index']);
        Route::post('insert-sub-cat',[SubCategoryController::class,'insert']);
        Route::get('view-sub-category',[SubCategoryController::class,'view_sub_category']);
        Route::get('edit-sub-category/{id}',[SubCategoryController::class,'edit_sub_category']);
        Route::post('update-sub-category',[SubCategoryController::class,'update_sub_category']);
        Route::get('delete-sub-category/{id}',[SubCategoryController::class,'delete_sub_category']);

        //Product Controller
        Route::get('add-product',[ProductController::class,'index']);
        Route::post('insert-product',[ProductController::class,'insert']);
        Route::get('view-product',[ProductController::class,'view_product']);
        Route::get('edit-product/{id}',[ProductController::class,'edit_product']);
        Route::post('update-product',[ProductController::class,'update_product']);
        Route::get('delete-product/{id}',[ProductController::class,'delete_product']);
        Route::get('get-subcategories',[ProductController::class,'get_subcategories']);
        Route::post('delete-gallery-image/{id}',[ProductController::class,'deleteGalleryImage']);
        Route::post('update-gallery-image-alt',[ProductController::class,'updateGalleryImagAlt']);

        //Popup Product Controller
        Route::get('add-popup-product',[PopupProductController::class,'index']);
        Route::post('insert-popup-product',[PopupProductController::class,'insert']);
        Route::get('view-popup-product',[PopupProductController::class,'view_product']);
        Route::get('edit-popup-product/{id}',[PopupProductController::class,'edit_product']);
        Route::post('update-popup-product',[PopupProductController::class,'update_product']);
        Route::get('delete-popup-product/{id}',[PopupProductController::class,'delete_product']);

        // Get Category Products
        Route::get('category/{id}',[ProductController::class,'getSubcategoriesWithCategoryId']);
        Route::get('subcategory/{id}',[ProductController::class,'getProductsWithSubCategoryId']);



        //CTA Controller
        Route::get('add-cta/{id}',[CTA_Controller::class,'index']);
        Route::post('insert-cta/',[CTA_Controller::class,'insert']);
        Route::get('view-cta/{id}',[CTA_Controller::class,'view_cta']);
        Route::get('edit-cta/{id}',[CTA_Controller::class,'edit_cta']);
        Route::post('update-cta',[CTA_Controller::class,'update_cta']);
        Route::get('delete-cta/{id}',[CTA_Controller::class,'delete_cta']);

        //Pages Controller
        Route::get('add-new-page',[ManagePageController::class,'index']);
        Route::post('insert-page/',[ManagePageController::class,'insert']);
        Route::get('view-pages',[ManagePageController::class,'view_pages']);
        Route::get('edit-page/{id}',[ManagePageController::class,'edit_page']);
        Route::post('update-page',[ManagePageController::class,'update_page']);
        Route::get('delete-page/{id}',[ManagePageController::class,'delete_page']);

        //Post Controller//
        Route::get('manage-posts',[PostController::class,'managePosts']);
        //Route::get('manage-posts','PostController@managePosts');
        Route::get('add-post-index',[PostController::class,'addPost_index']);
        Route::post('add-post',[PostController::class,'addPost']);

        Route::get('delete-post/{post_id}',[PostController::class,'deletePost']);
        Route::get('edit-post-page/{post_id}',[PostController::class,'edit_post_page']);
        Route::post('post-edit/{post_id}',[PostController::class,'editPost']);

        // Custom Quotes
        Route::get('view-custom-quotes',[CustomFormController::class,'viewCustomQuotes']);
        Route::post('view-custom-quotes-filter',[CustomFormController::class,'viewCustomQuotesWithFilter']);
        Route::get('view-samplekit-quotes',[CustomFormController::class,'viewSampleKitQuotes']);
        Route::get('view-instant-quotes',[CustomFormController::class,'viewInstantQuotes']);
        
      // Media Library
      	Route::get('/media-library',[MediaLibraryController::class,'getMediaLibrary']);
        Route::post('/save-media-library',[MediaLibraryController::class,'saveMedia'])->name('save_media');

    });
});

Route::get('/blog',[HomeController::class,'blogs'])->name('blog');
Route::get('/blog/{slug}',[HomeController::class,'viewPost']);
Route::get('popup',[HomeController::class,'l2withPopup']);

Route::get('/{slug}',[HomeController::class,'product_detail_page'])->name('product-detail-page');

Route::get('/{slug}/{string}',[HomeController::class,'l2withPopup']);




