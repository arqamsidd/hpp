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
{{--                      @if ($errors->any())--}}
{{--                        @foreach ($errors->all() as $error)--}}
{{--                        <div class="card-alert card gradient-45deg-red-pink">--}}
{{--                          <div class="card-content white-text">--}}
{{--                              <p><i class="material-icons">error</i> Error : {{ $error }}</p>--}}
{{--                          </div>--}}
{{--                          <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">--}}
{{--                            <span aria-hidden="true">×</span>--}}
{{--                          </button>--}}
{{--                        </div>--}}
{{--                        @endforeach--}}
{{--                      @endif--}}
                          
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
                            <h4 class="card-title">Add Category</h4>
                          </div>
                          <div class="col s12 m6 l2">
                          </div>
                        </div>
                      </div>
                      <div id="html-view-validations">
                        <form class="formValidate0" id="formValidate0" method="POST" action="{{ !empty($record) ? url('admin/update-category'): url('admin/insert_cat')}}" enctype="multipart/form-data">
                          <div class="row">
                          
                            <input type="hidden" name="cat_id" value="<?= !empty($record[0]->id) ? $record[0]->id : '' ?>">
                              @csrf
                            <div class="input-field col s12">
                              <label for="uname0">Category Name*</label>
                              <input class="validate" id="uname0" name="cat_name" type="text" placeholder="Name" required="" value="<?= !empty($record[0]->cat_name) ? $record[0]->cat_name : '' ?>" >
                            </div>
                            <div class="input-field col s12">
                              <label for="cemail0">Category Title</label>
                              <textarea class="materialize-textarea validate" id="ccomment0" name="cat_title" required="" placeholder="Title" style="height: 100px;"><?= !empty($record[0]->cat_title) ? $record[0]->cat_title : '' ?></textarea>
                            </div>

                            <div class="divider mb-1 mt-1"></div>
                            <div class="row section">
                              <div class="col s12 m4 l3">
                                <label for="cemail0">Category Back Ground Image</label>
                              </div>
                              <div class="col s12 m8 l9 bg_img">
                                <p>Maximum file upload size 2MB.</p>
                                <input type="file" id="input-file-max-fs" name="bg_image" class="dropify" data-max-file-size="2M" <?= !empty($record[0]->bg_image) ?  '' : '' ?> />
                              </div>
                               <div class="input-field col s12">
                                <label for="cemail0">Category Background Image Alt</label>
                                <input class="validate" id="uname0" name="cat_background_image_alt" type="text" placeholder="Category Background Image Alt" value="<?= !empty($record[0]->cat_background_image_alt) ? $record[0]->cat_background_image_alt : '' ?>" >
                             </div>
                             
                            </div>

                            <div class="divider mb-1 mt-1"></div>
                            <div class="row section">
                              <div class="col s12 m4 l3">
                                <label for="cemail0">Category Collection Image</label>
                              </div>
                              <div class="col s12 m8 l9 bg_left_image">
                                <p>Maximum file upload size 2MB.</p>
                                <input type="file" id="input-file-max-fs" name="bg_left_image" class="dropify" data-max-file-size="2M" <?= !empty($record[0]->bg_left_image) ?  '' : '' ?> />
                              </div>
                              <div class="input-field col s12">
                                <label for="cemail0">Category Collection Image Alt</label>
                                <input class="validate" id="uname0" name="cat_collection_image_alt" type="text" placeholder="Category Collection Image Alt" value="<?= !empty($record[0]->cat_collection_image_alt) ? $record[0]->cat_collection_image_alt : '' ?>" >
                             </div>
                            </div>

                            <div class="divider mb-1 mt-1"></div>
                            <div class="row section">
                              <div class="col s12 m4 l3">
                                <label for="cemail0">Category Right Image</label>
                              </div>
                              <div class="col s12 m8 l9 bg_right_image">
                                <p>Maximum file upload size 2MB.</p>
                                <input type="file" id="input-file-max-fs" name="bg_right_image" class="dropify" data-max-file-size="2M"  />
                              </div>
                            </div>

                            <div class="divider mb-1 mt-1"></div>
                            <div class="row section">
                              <div class="col s12 m4 l3">
                                <label for="cemail0">CTA Image</label>
                              </div>
                              <div class="col s12 m8 l9 collection_image">
                                <p>Maximum file upload size 2MB.</p>
                                <input type="file" id="input-file-max-fs" name="collection_image" class="dropify" data-max-file-size="2M" <?= !empty($record[0]->collection_image) ?  '' : '' ?> />
                              </div>
                              <div class="input-field col s12">
                                <label for="cemail0">CTA Image Alt</label>
                                <input class="validate" id="uname0" name="cta_image_alt" type="text" placeholder="Category Navigation Image Alt" value="<?= !empty($record[0]->cta_image_alt) ? $record[0]->cta_image_alt : '' ?>" >
                             </div>
                            </div>

                            <!--<div class="divider mb-1 mt-1"></div>-->
                            <!--<div class="row section">-->
                            <!--  <div class="col s12 m4 l3">-->
                            <!--    <label for="cemail0">Category Feature Image <b style={color:red;}>its Not Showing on Design so ingore</b></label>-->
                            <!--  </div>-->
                            <!--  <div class="col s12 m8 l9 feature_image">-->
                            <!--    <p>Maximum file upload size 2MB.</p>-->
                            <!--    <input type="file" id="input-file-max-fs" name="feature_image" class="dropify" data-max-file-size="2M" <?= !empty($record[0]->feature_image) ?  '' : '' ?> />-->
                            <!--  </div>-->
                              
                            <!--   <div class="input-field col s12">-->
                            <!--    <label for="cemail0">Category Featured Image Alt</label>-->
                            <!--    <input class="validate" id="uname0" name="cat_featured_image_alt" type="text" placeholder="Category Featured Image Alt" value="<?= !empty($record[0]->cat_featured_image_alt) ? $record[0]->cat_featured_image_alt : '' ?>" >-->
                            <!-- </div>-->
                             
                            <!--</div>-->

                            <div class="input-field col s12">
                              <label for="uname0">Sort Order</label>
                              <input class="validate" id="uname0" name="sort_order" type="number" placeholder="Enter sort order" required="" value="<?= !empty($record[0]->sort_order) ? $record[0]->sort_order : '' ?>" >
                            </div>

                            <div class="divider mb-1 mt-1"></div>
                            <div class="col s12">
                              <label for="role">Status</label>
                              <select class="error validate" name="status" required>
                                <option value="1"  <?php if(!empty($record[0]) && $record[0]->status == '1'): ?> selected <?php endif ?> >Active</option>
                                <option value="0" <?php if(!empty($record[0]) && $record[0]->status == '0'): ?> selected <?php endif ?> > Inactive</option>
                              </select>
                            </div>
                            <div class="divider mb-1 mt-1"></div>
                            @include('admin.includes.seo-meta-fields')
                            @if(request()->segment(2) == 'edit-category')
                              <div class="input-field col s12">
                                  <label for="cemail0">OG Scripts</label>
                                  <textarea rows="50" style="height: 15rem;" name="og_tag_script"><?=
                                      !empty($record[0]->og_tag_script) ? $record[0]->og_tag_script : '' ?></textarea>
                              </div>
                            @endif
                            <!-- Other fields start here -->
                          <div class="card-title">
                            <div class="row">
                              <div class="col s12 m6 l10">
                                <h4 class="card-title">Other Fields</h4>
                              </div>
                              <div class="col s12 m6 l2">
                              </div>
                            </div>
                          </div>
                             <!-- Other fields start here -->
                          <div class="input-field col s12">
                            <label for="cemail0">Why Us Title</label>
                            <input class="validate" id="uname0" name="whyus_title" type="text"
                                    placeholder="Enter Why Us Title"
                                    value="<?= !empty($record[0]->whyus_title) ? $record[0]->whyus_title : '' ?>">
                          </div>
                          <div class="input-field col s12">
                            <label for="cemail0">Why Us Description</label>
                            <textarea placeholder="Enter Why US Description"  class="materialize-textarea summernote" id="ccomment0" name="whyus_desc"><?= !empty($record[0]->whyus_desc) ? $record[0]->whyus_desc : '' ?></textarea>
                          </div>
                          <div class="input-field col s12">
                            <label for="cemail0">Background Title</label>
                            <input class="validate" id="uname0" name="background_title" type="text"
                                    placeholder="Enter Background Title"
                                    value="<?= !empty($record[0]->background_title) ? $record[0]->background_title : '' ?>">
                          </div>
                          <div class="input-field col s12">
                            <label for="cemail0">Background Description</label>
                            <textarea placeholder="Enter Background Description"  class="materialize-textarea summernote" id="ccomment0" name="background_desc"><?= !empty($record[0]->background_desc) ? $record[0]->background_desc : '' ?></textarea>
                          </div>
                      <!-- Other fields end here -->
                            <div class="input-field col s12">
                              <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
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
<script>
  
  $(document).ready(function(){
    <?php if(!empty($record[0]->bg_image)){ ?>
      window.onload = bg_img();
    <?php } ?>
    <?php if(!empty($record[0]->bg_left_image)){ ?>
      window.onload = bg_left_image();
    <?php } ?>
    <?php if(!empty($record[0]->bg_right_image)){ ?>
      window.onload = bg_right_image();
    <?php } ?>
    <?php if(!empty($record[0]->collection_image)){ ?>
      window.onload = collection_image();
    <?php } ?>
    <?php if(!empty($record[0]->feature_image)){ ?>
      window.onload = feature_image();
    <?php } ?>

  });
    
  
    function bg_img(){
      $('.bg_img .dropify-preview').show();
      $('.bg_img').find('span').html('<img src="{{ asset("storage/cat_uploads") }}/<?= !empty($record[0]->bg_image) ? $record[0]->bg_image : ''; ?>">');
    }

    function bg_left_image(){
      $('.bg_left_image .dropify-preview').show();
      $('.bg_left_image').find('span').html('<img src="{{ asset("storage/cat_uploads") }}/<?= !empty($record[0]->bg_left_image) ? $record[0]->bg_left_image : ''; ?>">');
    }

    function bg_right_image(){
      $('.bg_right_image .dropify-preview').show();
      $('.bg_right_image').find('span').html('<img src="{{ asset("storage/cat_uploads") }}/<?= !empty($record[0]->bg_right_image) ? $record[0]->bg_right_image : ''; ?>">');
    }

    function collection_image(){
      $('.collection_image .dropify-preview').show();
      $('.collection_image').find('span').html('<img src="<?=!empty($record[0]->cta_image_path) ? $record[0]->cta_image_path : (!empty($subcategory_cta[0]->cta_image_path) ? $subcategory_cta[0]->cta_image_path : '') ?>">');
    }

    function feature_image(){
      $('.feature_image .dropify-preview').show();
      $('.feature_image').find('span').html('<img src="{{ asset("storage/cat_uploads") }}/<?= !empty($record[0]->feature_image) ? $record[0]->feature_image : ''; ?>">');
    }
</script>

@endsection