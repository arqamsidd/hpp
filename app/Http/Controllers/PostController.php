<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Post_Category;
use App\Models\Post_tag;
use App\Models\Tag;
use App\Models\GenericModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Session;

class PostController extends Controller
{
    function __construct()
    {
        $this->Generic_model = new GenericModel;
    }

    public function managePosts()
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.posts.posts')->with('posts',$posts)->with('categories',$categories)->with('tags',$tags);
    }
    function clean($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
        $string = strtolower($string);
        return preg_replace('/[^A-Za-z0-9\-]/', '-', $string); // Removes special chars.
    }
    public function addPost_index()
    {
        if(Auth::check())
        {
        $posts = Post::all();
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.posts.add_post')->with('posts',$posts)->with('categories',$categories)->with('tags',$tags);
        }
        else
        {
            return Redirect::to('admin/sign-in');
        }
    }
    public function edit_post_page($post_id)
    {
        $post = DB::table('posts')->where('id',$post_id)->first();
        $post_categories = DB::table('post__categories')->where('post_id',$post_id)->get();
        
        $cate_id = array();
        if($post_categories->isNotEmpty())
        {
            foreach ($post_categories as $key => $value) 
            {
                $cate_ids[] =  $value->category_id;
            }
        }
        else 
        {
            $cate_ids = array();
        }

        return view('admin.posts.add_post')->with('record',$post)->with('post_categories',$cate_ids);
    }
    public function addPost(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->meta_title = $request->meta_title;
        $post->meta_description = $request->meta_description;
        $slug = $this->clean($post->title);
        $post->post = $request->post;
        $post->slug = $slug;

        if(!empty($request->file('postImage'))) 
        {
            $post_image = $request->file('postImage');
            $fileName = str_replace(' ', '',(rand().time().'_'.$request->postImage->getClientOriginalName()));
            $path = public_path('assets/post_images/');
            $post_image->move($path, $fileName);
            $post->image = $fileName;
        }

        if(!empty($request->file('postBannerImage'))) 
        {
            $post_banner_image = $request->file('postBannerImage');
            $bannerimageName = str_replace(' ', '',(rand().time().'_'.$request->postBannerImage->getClientOriginalName()));
            $bannerpath = public_path('assets/post_images/view_post/');
            $post_banner_image->move($bannerpath, $bannerimageName);
            $post->bannerimage = $bannerimageName;
        }

        $post->status = $request->status;
        $post->approved_by = Auth::id();

        $post->save();

        $categories = $request->categories;
        if(isset($categories))
        {
            foreach ($categories as $category)
            {
                $post_category = new Post_Category();
                $post_category->category_id = $category;
                $post_category->post_id = $post->id;
                $post_category->save();
            }
        }
        // $tags = $request->tags;
        // if(isset($tags))
        // {
        //     foreach ($tags as $tag)
        //     {
        //         $post_tag = new Post_tag();
        //         $post_tag->post_id = $post->id;
        //         $post_tag->tag_id = $tag;
        //         $post_tag->save();
        //     }
        // }
        return redirect('admin/manage-posts')->with('success', 'Data added successfully!');
    }
    public function deletePost($post_id)
    {
        $post = Post::find($post_id);
        if(isset($post))
        {
            $post->delete();
        }
        DB::table('post__categories')->where('post_id',$post_id)->delete();
        return redirect()->back()->with('success', 'Record Deleted successfully!');
    }
    public function editPost(Request $request,$post_id)
    {
        $post = Post::find($post_id);

        $categories = $request->categories;
        if(!empty($request->file('postImage'))) 
        {
            $this->deleteImage($post['image']);
            $post_image = $request->file('postImage');
            $fileName = str_replace(' ', '',(rand().time().'_'.$request->postImage->getClientOriginalName()));
            $path = public_path('assets/post_images/');
            $post_image->move($path, $fileName);
            $post->image = $fileName;
        }

        if(!empty($request->file('postBannerImage'))) 
        {
            $this->deleteImage($post['bannerimage']);
            $post_banner_image = $request->file('postBannerImage');
            $bannerimageName = str_replace(' ', '',(rand().time().'_'.$request->postBannerImage->getClientOriginalName()));
            $bannerpath = public_path('assets/post_images/view_post/');
            $post_banner_image->move($bannerpath, $bannerimageName);
            $post->bannerimage = $bannerimageName;
        }
        $post->schema_script_other = $request->schema_script_other;
        $post->og_tag_script = $request->og_tag_script;
        $post->title = $request->title;
        $post->meta_title = $request->meta_title;
        $post->meta_description = $request->meta_description;
        $post->post = $request->post;
      
      	$slug = $this->clean($request->slug);
        $post->slug = $slug;
        
        
        $post->approved_by = Auth::id();
        $post->status = $request->status;
        
        if(isset($categories))
        {
            DB::table('post__categories')->where('post_id',$post_id)->delete();
            foreach ($categories as $category)
            {
                $post_cates = new Post_Category();
                $post_cates->category_id = $category;
                $post_cates->post_id = $post_id;
                $post_cates->save();
            }
        }

        // $tags = $request->tags;
        // if(isset($tags))
        // {
        //     DB::table('post_tags')->where('post_id',$post_id)->delete();
        //     foreach ($tags as $tag)
        //     {
        //         $post_tag = new Post_tag();
        //         $post_tag->tag_id = $tag;
        //         $post_tag->post_id = $post_id;
        //         $post_tag->save();
        //     }
        // }
        // dd('asdsad');
        $post->save();
        return redirect('admin/manage-posts')->with('success', 'Data Update successfully!');

    }

    public function deleteImage($img_name)
    {
        if(public_path('assets/post_images/view_post/'.$img_name)) 
        {
            $filename = public_path('assets/post_images/'.$img_name);
            if(File::exists($filename)) {
                File::delete($filename);
            }
            //Storage::disk('public')->delete('/cat_uploads/'.$img_name);
        }
    }
}
