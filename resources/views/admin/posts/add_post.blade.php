@extends('admin.layouts.admin')
@section('content')

   <!-- BEGIN: Page Main-->
   <div id="main">
     
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
    
        <div class="col s12">
          <div class="container">
              <div class="section">
              <!-- HTML VALIDATION  -->

              <div class="row">
                <div class="col s12">
                  <div id="html-validations" class="card card-tabs">
                    <div class="card-content">
                      <!-- Validation error start -->
                      @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="card-alert card gradient-45deg-red-pink">
                          <div class="card-content white-text">
                              <p><i class="material-icons">error</i> Error : {{ $error }}</p>
                          </div>
                          <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        @endforeach
                      @endif
                          
                      <!-- Validation error -->
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
                              <i class="material-icons">error</i> Error : {{ session()->get('error') }}</p>
                          </div>
                          <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                      @endif

                      <div class="card-title">
                        <div class="row">
                          <div class="col s12 m6 l10">
                            <h4 class="card-title">{{ !empty($record) ? 'Edit Post' : 'Add Post' }}</h4>
                          </div>
                          <div class="col s12 m6 l2">
                          </div>
                        </div>
                      </div>
                      <div id="html-view-validations">
                        <form class="formValidate0" id="formValidate0" method="POST" action="{{ !empty($record) ? url('admin/post-edit',['post_id' => $record->id]): url('admin/add-post')}}" enctype="multipart/form-data">
                          <div class="row">
                          
                            <input type="hidden" name="cat_id" value="<?= !empty($record->id) ? $record->id : '' ?>">
                              @csrf
                            <div class="input-field col s12">
                              <label for="uname0">Title</label>
                              <input class="validate" id="uname0" name="title" type="text" placeholder="Name" required="" value="<?= !empty($record->title) ? $record->title : '' ?>" >
                            </div>
                            
                            <div class="input-field col s12">
                              <label for="uname0">Slug <strong>(DO NOT CHANGE)</strong></label>
                              <input class="validate" id="uname0" name="slug" type="text" placeholder="Name" required="" value="<?= !empty($record->slug) ? $record->slug : '' ?>" >
                            </div>

                            <div class="input-field col s12">
                              <!--<textarea  class="validate summernote" name="post" placeholder="Description" style="height: 600px;"><?= !empty($record->post) ? $record->post : '' ?></textarea>-->
                            </div>
                            
                            <div class="input-field col s12">
                                <textarea id="blog-content" name="post">
                              		<?= !empty($record->post) ? $record->post : '' ?>
                              	</textarea>
                            </div>

                            

                            <textarea style='display:none;' name='' id='editor1'></textarea>

                            <div class="input-field col s12">
                              <label for="uname0">Meta Title</label>
                              <input class="validate" id="uname0" name="meta_title" type="text" placeholder="Name" required="" value="<?= !empty($record->meta_title) ? $record->meta_title : '' ?>" >
                            </div>

                            <div class="input-field col s12">
                              <label for="uname0">Meta Description</label>
                              <input class="validate" id="uname0" name="meta_description" type="text" placeholder="Name" required="" value="<?= !empty($record->meta_description) ? $record->meta_description : '' ?>" >
                            </div>

                            <div class="divider mb-1 mt-1"></div>
                            <div class="row section">
                              <div class="col s12 m4 l3">
                                <label for="cemail0">Home Image</label>
                              </div>
                              <div class="col s12 m8 l9 bg_img">
                                <p>Maximum file upload size 2MB.</p>
                                <input type="file" id="input-file-max-fs" name="postImage" class="dropify" data-max-file-size="2M" <?= !empty($record->bg_image) ?  '' : '' ?> />
                              </div>
                            </div>

                            <div class="divider mb-1 mt-1"></div>
                            <div class="row section">
                              <div class="col s12 m4 l3">
                                <label for="cemail0">Post Banner Image</label>
                              </div>
                              <div class="col s12 m8 l9 bg_left_image">
                                <p>Maximum file upload size 2MB.</p>
                                <input type="file" id="input-file-max-fs" name="postBannerImage" class="dropify" data-max-file-size="2M" <?= !empty($record->bg_left_image) ?  '' : '' ?> />
                              </div>
                            </div>

                            <div class="divider mb-1 mt-1"></div>
                            <div class="col s12">
                              <label for="role">Status</label>
                              <select class="error validate" name="status" required>
                                <option value="enabled"  <?php if(!empty($record) && $record->status == 'enabled'): ?> selected <?php endif ?> >Published</option>
                                <option value="disabled" <?php if(!empty($record) && $record->status == 'disabled'): ?> selected <?php endif ?> > Drafted</option>
                              </select>
                            </div>
                            <div class="divider mb-1 mt-1"></div>
                            
                            <div class="col s12">
                              <label for="role">Select Categories</label>
                              <div class="input-field">
                                <select class="select2 browser-default" multiple="multiple" name="categories[]">
                                    @php($categories = DB::table('categories')->where('is_deleted',0)->get())
                                    @if($categories->count() <= 0)
                                        <option disabled>Empty</option>
                                    @endif
                                    @foreach($categories as $category)

                                        <option value="{{$category->id}}"  
                                          <?php if(!empty($post_categories)) { $cat_id = in_array($category->id, $post_categories); if($cat_id){ ?> selected <?php } } ?> >{{$category->cat_name}}
                                        </option>
                                    @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="input-field col s12">
                                  <label for="cemail0">Page Schema</label>
                                  <textarea  rows="50" style="height: 15rem;" name="schema_script_other">
                                      {!! !empty($record->schema_script_other) ? $record->schema_script_other : ''; !!}
                                  </textarea>
                              </div>
                            <div class="input-field col s12">
                              <label for="cemail0">OG Scripts</label>
                              <textarea rows="50" style="height: 15rem;" name="og_tag_script"><?=
                                !empty($record->og_tag_script) ? $record->og_tag_script : '' ?></textarea>
                            </div>
                              <div class="divider mb-1 mt-1" style="user-select: auto;"></div>
                            <div class="input-field col s12">
                              <button class="btn waves-effect waves-light right submit" type="submit" name="action">Submit
                                <i class="material-icons right">send</i>
                              </button>
                            </div>

                            
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

             </div><!-- START RIGHT SIDEBAR NAV -->
            </div>
          </div>
          <div class="content-overlay"></div>
        </div>
      </div>
    <!-- END: Page Main-->

@endsection
@section('script')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
      tinymce.init({
        selector: '#blog-content',
        plugins: [
          'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
          'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
          'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
        ],
        toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
          'alignleft aligncenter alignright alignjustify | ' +
          'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
      });
    </script>

<script>
  




    $(document).ready(function(){
      $('.summernote').summernote({
       
       placeholder: 'Hello stand alone ui',
       tabsize: 2,
       height: 120,
       toolbar: [
         ['style', ['style']],
         ['font', ['bold', 'underline', 'clear']],
         ['color', ['color']],
         ['para', ['ul', 'ol', 'paragraph']],
         ['table', ['table']],
         ['insert', ['link', 'picture', 'video']],
         ['view', ['fullscreen', 'codeview', 'help']]
       ]
     });
    })



  
  $(document).ready(function(){
    <?php if(!empty($record->image)){ ?>
      window.onload = bg_img();
    <?php } ?>
    <?php if(!empty($record->bannerimage)){ ?>
      window.onload = bg_left_image();
    <?php } ?>
    

  });
    
  
    function bg_img(){
      $('.bg_img .dropify-preview').show();
      $('.bg_img').find('span').html('<img alt="fahad" src="{{ asset("assets/post_images/") }}/<?= !empty($record->image) ? $record->image : ''; ?>">');
    }

    function bg_left_image(){
      $('.bg_left_image .dropify-preview').show();
      $('.bg_left_image').find('span').html('<img src="{{ asset("assets/post_images/view_post/") }}/<?= !empty($record->bannerimage) ? $record->bannerimage : ''; ?>">');
    }

    
</script>

@endsection