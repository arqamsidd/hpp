@extends('admin.layouts.admin')
@section('content')

  <!-- BEGIN: Page Main-->
  <div id="main">
    <div class="row">
      <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>

      <div class="col s12">
        <div class="container">
            <div class="section section-data-tables">

        <!-- Page Length Options -->
          <div class="row">
            <div class="col s12">
              <div class="card">
                <div class="card-content">
                @if(session()->get('success'))
                  <div class="card-alert card gradient-45deg-green-teal">
                    <div class="card-content white-text">
                      <p>
                        <i class="material-icons">check</i> SUCCESS : {{ session()->get('success') }} </p>
                    </div>
                    <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                @endif
                @if(session()->get('error'))
                  <div class="card-alert card gradient-45deg-red-pink">
                    <div class="card-content white-text">
                      <p>
                        <i class="material-icons">error</i> DANGER : {{ session()->get('error') }}</p>
                    </div>
                    <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                @endif

                <div style="margin-top: 11px;">
                    <a href="{{URL::to('admin/add-post-index')}}" class="btn btn-primary" >Post +</a>
                </div>

                  <h4 class="card-title">View Posts</h4>
                  <div class="row">
                    <div class="col s12">
                      <table id="page-length-option" class="display Highlight">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th >Post</th>
                            <th>Slug</th>
                            <th>image</th>
                            <th>Status</th>
                            <!-- <th>Category</th> -->
                            <!-- <th>Tags</th> -->
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody> 

                          @php($count = 1)
                                    @if($posts->count() <= 0)
                                        <tr>
                                            <th>
                                                Empty
                                            </th>
                                        </tr>
                                    @endif
                                    @foreach($posts as $post)
                                        @php($post_cates = DB::table('post__categories')->where('post_id',$post->id)->get())
                                        @php($post_tags = DB::table('post_tags')->where('post_id',$post->id)->get())

                                        <tr>
                                          <td scope="row">{{$count}}</td>
                                          <td><?php $title = strip_tags($post->title);
                                                if (strlen($title) > 25) {

                                                    // truncate title
                                                    $titleCut = substr($title, 0, 20);
                                                    $endPoint = strrpos($titleCut, ' ');

                                                    //if the title doesn't contain any space then it will cut without word basis.
                                                    $title = $endPoint? substr($titleCut, 0, $endPoint) : substr($titleCut, 0);
                                                    $title .= '...';
                                                }
                                                ?>
                                                <?php
                                                echo $title;
                                                ?>
                                          </td>
                                          <td>
                                                <?php $string = strip_tags($post->post);
                                                if (strlen($string) > 25) {

                                                    // truncate string
                                                    $stringCut = substr($string, 0, 20);
                                                    $endPoint = strrpos($stringCut, ' ');

                                                    //if the string doesn't contain any space then it will cut without word basis.
                                                    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                                    $string .= '...';
                                                }
                                                ?>
                                                <?php
                                                echo $string;
                                                ?>
                                            </td>
                                            <td ><?php $slug = strip_tags($post->slug);
                                                if (strlen($slug) > 25) {

                                                    // truncate slug
                                                    $slugCut = substr($slug, 0, 20);
                                                    $endPoint = strrpos($slugCut, ' ');

                                                    //if the slug doesn't contain any space then it will cut without word basis.
                                                    $slug = $endPoint? substr($slugCut, 0, $endPoint) : substr($slugCut, 0);
                                                    $slug .= '...';
                                                }
                                                ?>
                                                <?php
                                                echo $slug;
                                                ?></td>
                                            <td><img width="50px" height="50px" src="{{asset('assets/post_images/'.$post->image)}}"></td>
                                            <td>@if($post->status == 'enabled') Published @else Drafted @endif</td>
                                            <!-- <td>
                                                @foreach($post_cates as $post_cate)
                                                    @php($cate = DB::table('categories')->where('id',$post_cate->category_id)->first())
                                                    @if(isset($cate->cat_name))
                                                        {{$cate->cat_name}},
                                                    @endif
                                                @endforeach
                                            </td> -->
                                            <td>
                                              <a href="{{ url('admin/edit-post-page', $post->id)}}" type="button" class="btn btn-primary rounded-pill" >Edit</a>&nbsp;&nbsp; 
                                              <a href="#" onClick="confirmation(<?php echo $post->id; ?>);" class="btn btn-danger rounded-pill" >Delete</a>
                                              
                                            </td>
                                        </tr>
                                        @php($count += 1)
                                    @endforeach

                          
                        </tbody>
                        
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Page Length End Options -->
         </div><!-- START RIGHT SIDEBAR NAV -->
        </div>
      </div>
      <div class="content-overlay"></div>
    </div>
  </div>


@endsection
@section('script')
<script type="text/javascript">
  function confirmation(value){
         event.preventDefault();
            alertify.confirm("Are you Sure you Want to Delete?", function (e) {
          if (e) {
             window.location.href = "{{url('')}}/admin/delete-post/"+value;
           }
          else{
           }
         });
      }
</script>
@endsection