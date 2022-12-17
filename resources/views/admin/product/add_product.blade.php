@extends('admin.layouts.admin')

@section('content')
<!-- ckeditor style -->
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

                  <!-- Validation error -->
                  {{-- @if ($errors->any())--}}
                  {{-- @foreach ($errors->all() as $error)--}}
                  {{-- <div class="card-alert card gradient-45deg-red-pink">--}}
                  {{-- <div class="card-content white-text">--}}
                  {{-- <p><i class="material-icons">error</i> Error : {{ $error }}</p>--}}
                  {{-- </div>--}}
                  {{-- <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">--}}
                  {{-- <span aria-hidden="true">×</span>--}}
                  {{-- </button>--}}
                  {{-- </div>--}}
                  {{-- @endforeach--}}
                  {{-- @endif--}}
                  @if(session()->get('success'))
                  <div class="card-alert card gradient-45deg-green-teal">
                    <div class="card-content white-text">
                      <p>
                        <i class="material-icons">check</i> SUCCESS : {{ session()->get('success') }}
                      </p>
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
                        <i class="material-icons">error</i> Error : {{ session()->get('error') }}
                      </p>
                    </div>
                    <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  @endif

                  <div class="card-title">
                    <div class="row">
                      <div class="col s12 m6 l10">
                        <h4 class="card-title">Add Product</h4>
                      </div>
                      <div class="col s12 m6 l2">
                      </div>
                    </div>
                  </div>
                  <div id="html-view-validations">
                    <form class="formValidate0" id="formValidate0" method="POST" action="{{ !empty($record) ? url('admin/update-product'): url('admin/insert-product')}}" enctype="multipart/form-data">
                      <div class="row">

                        <input type="hidden" name="id" value="<?= !empty($record[0]->id) ? $record[0]->id : '' ?>">
                        @csrf

                        <div class="col s12">
                          <label for="role">Select Categories</label>
                          <div class="input-field">
                            <select class="select2 browser-default" multiple="multiple" name="categories[]">
                              @if($records->count() <= 0) <option disabled>Empty</option>
                                @endif
                                @foreach($records as $category)

                                <option value="{{$category->cat_id}} - {{$category->id}} " <?php
                                                                                            if (!empty($mult_tag)) {
                                                                                              $cat_id = in_array($category->id, $mult_tag);
                                                                                              if ($cat_id) {
                                                                                            ?> selected <?php }
                                                                                                    } ?>>
                                  {{$category->sub_cat_name}}
                                </option>
                                @endforeach
                            </select>
                          </div>
                        </div>

                        <!-- fahad code start here  -->
                        <div class="input-field col s12">
                          <label for="uname0">Slug <strong>(DO NOT CHANGE)</strong></label>
                          <input class="validate" id="uname0" name="slug" type="text" placeholder="Name" required="" value="<?= !empty($record[0]->slug) ? $record[0]->slug : '' ?>">
                        </div>
                        <!-- fahad code end here  -->

                        <div class="input-field col s12">
                          <label for="uname0">Product Name* -> Slug <strong>(DO NOT CHANGE)</strong></label>
                          <input class="validate" id="uname0" name="name" type="text" placeholder="Name" required="" value="<?= !empty($record[0]->name) ? $record[0]->name : '' ?>">
                        </div>
                        <div class="input-field col s12">
                          <label for="uname0">Product SEO Title*</label>
                          <input class="validate" id="uname0" name="seoname" type="text" placeholder="Product SEO Title" value="<?= !empty($record['seoname']) ? $record['seoname'] : '' ?>">


                        </div>

                        <div class="input-field col s12">
                          <label for="uname0">Product Tagline*</label>
                          <input class="validate" id="uname0" name="title" type="text" placeholder="Title" required="" value="<?= !empty($record[0]->title) ? $record[0]->title : '' ?>">
                        </div>

                        <div class="input-field col s12">
                          <label for="cemail0">Short Description</label>
                          <div class="document-editor">
                            <div class="document-editor__toolbar"></div>
                            <div class="document-editor__editable-container">
                              <div class="document-editor__editable">

                                <?= !empty($record[0]->short_description) ? $record[0]->short_description : '<p></p>' ?>
                              </div>
                            </div>
                          </div>
                        </div>


                        <!-- Use to save the all content of editor bcz decoupled-document(ckeditor5) not supported form post data -->
                        <textarea style='display:none;' name='short_description' id='editor1'></textarea>

                        <div class="input-field col s12">
                          <label for="cemail0">Long Description</label>
                          <div class="document-editor">
                            <div class="document-editor__toolbar2"></div>
                            <div class="document-editor__editable-container">
                              <div class="document-editor__editable2">
                                <?= !empty($record[0]->long_description) ? $record[0]->long_description : '<p></p>' ?>
                              </div>
                            </div>
                          </div>
                        </div>

                        <textarea style='display:none;' name='long_description' id='editor2'></textarea>

                        <div class="divider mb-1 mt-1"></div>
                        <div class="row section">
                          <div class="col s12 m4 l3">
                            <label for="cemail0">Collection Image</label>
                          </div>
                          <div class="col s12 m8 l9 collection_image">
                            <p>Maximum file upload size 2MB.</p>
                            <input type="file" id="input-file-max-fs" name="collection_image" class="dropify" data-max-file-size="2M" <?= !empty($record[0]->collection_image) ?  '' : '' ?> />
                          </div>
                        </div>
                        <div class="input-field col s12">
                          <label for="cemail0">Collection Image Alt</label>
                          <input class="validate" id="uname0" name="collection_image_alt" type="text" placeholder="Collection Image Alt" value="<?= !empty($record[0]->collection_image_alt) ? $record[0]->collection_image_alt : '' ?>">
                        </div>

                        <div class="divider mb-1 mt-1"></div>
                        <div class="row section">
                          <div class="col s12 m4 l3">
                            <label for="cemail0">BackGround Image</label>
                          </div>
                          <div class="col s12 m8 l9 bg_img">
                            <p>Maximum file upload size 2MB.</p>
                            <input type="file" id="input-file-max-fs" name="bg_image" class="dropify" data-max-file-size="2M" <?= !empty($record[0]->bg_image) ?  '' : '' ?> />

                          </div>
                        </div>

                        <div class="divider mb-1 mt-1"></div>
                        <div class="row section">
                          <div class="col s12 m4 l3">
                            <label for="cemail0">Featured Image</label>
                          </div>
                          <div class="col s12 m8 l9 feature_image">
                            <p>Maximum file upload size 2MB.</p>
                            <input type="file" id="input-file-max-fs" name="feature_image" class="dropify" data-max-file-size="2M" <?= !empty($record[0]->feature_image) ?  '' : '' ?> />
                          </div>
                          <div class="input-field col s12">
                            <label for="cemail0">Featured Image Alt</label>
                            <input class="validate" id="uname0" name="feature_image_alt" type="text" placeholder="Featured Image Alt" value="<?= !empty($record[0]->feature_image_alt) ? $record[0]->feature_image_alt : '' ?>">
                          </div>
                        </div>

                        <div class="divider mb-1 mt-1"></div>
                        <div class="row section">
                          <div class="col s12 m4 l3">
                            <label for="cemail0">Featured Image For L2 Page</label>
                          </div>
                          <div class="col s12 m8 l9 feature_image_l2">
                            <p>Maximum file upload size 2MB.</p>
                            <input type="file" id="input-file-max-fs" name="feature_image_l2" class="dropify" data-max-file-size="2M" <?= !empty($record[0]->feature_image_l2) ?  '' : '' ?> />
                          </div>
                        </div>

                        <div class="divider mb-1 mt-1"></div>
                        <div class="row section">
                          <div class="col s12 m4 l3">
                            <label for="cemail0">CTA Image</label>
                          </div>
                          <div class="col s12 m8 l9 cta_image">
                            <p>Maximum file upload size 2MB.</p>
                            <input type="file" id="input-file-max-fs" name="cta_image" class="dropify" data-max-file-size="2M" <?= !empty($record[0]->cta_image) ?  '' : '' ?> />
                          </div>
                          <div class="input-field col s12">
                            <label for="cemail0">CTA Image Alt</label>
                            <input class="validate" id="uname0" name="cta_image_alt" type="text" placeholder="Product CTA Image Alt" value="<?= !empty($record[0]->cta_image_alt) ? $record[0]->cta_image_alt : '' ?>">
                          </div>
                        </div>

                        @if(!empty($gallery_images))
                        <div class="row">
                          @foreach($gallery_images as $gallery)
                          <div class="col s3 m3 l3">
                            <div class="gallery-images">

                              <div class="cross">
                                <a href="javascript:void(0);" class="cleartheimage" data-dismiss="fileinput" onclick="removefromDB(this,<?php echo $gallery->id; ?>,'<?php echo url('admin/delete-gallery-image') ?>')">
                                  <i class="material-icons">cancel</i>
                                </a>

                              </div>
                              <img src="{{ asset('storage/product_uploads') }}/<?= $gallery->image_name; ?>">
                              <input type="text" onfocusout="updateGlryAlt(this.value,<?php echo $gallery->id; ?>,'<?php echo url('admin/update-gallery-image-alt') ?>')" value="<?= !empty($gallery->image_alt_name) ? $gallery->image_alt_name : ''; ?>">
                            </div>

                          </div>
                          @endforeach
                        </div>

                        @endif
                        <div class="row section">
                          <div class="col s12 m4 l3">
                            <label for="cemail0">Gallery Images</label>
                          </div>

                          <div class="col s12 m8 l9">
                            <div class="file-field input-field">
                              <div class="btn">
                                <span>File</span>
                                <input type="file" id="gallery_file" name="gallery_images[]" multiple>
                              </div>
                              <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload one or more files">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="gallery-alt-img">

                        </div>



                        <div class="input-field col s12">
                          <label for="uname0">Sort Order</label>
                          <input class="validate" id="uname0" name="sort_order" type="number" placeholder="Enter sort order" required="" value="<?= !empty($record[0]->sort_order) ? $record[0]->sort_order : '' ?>">
                        </div>

                        <div class="divider mb-1 mt-1"></div>
                        <div class="col s12">
                          <label for="role">Status</label>
                          <select class="error validate" name="status" required>
                            <option value="1" <?php if (!empty($record[0]) && $record[0]->status == '1') : ?> selected <?php endif ?>>Active</option>
                            <option value="0" <?php if (!empty($record[0]) && $record[0]->status == '0') : ?> selected <?php endif ?>> Inactive</option>
                          </select>
                        </div>

                        <div class="input-field col s12">
                          <p class="mb-1">
                            <label>
                              <input type="checkbox" class="filled-in" name="best_seller_product" <?php if (!empty($record[0]->best_seller_product) && $record[0]->best_seller_product == '1') : ?> checked <?php endif ?> value="<?= !empty($record[0]->best_seller_product) ? $record[0]->best_seller_product : '1' ?>" />
                              <span>Best Seller Product</span>
                            </label>
                          </p>
                        </div>
                        <div class="divider mb-1 mt-1"></div>
                        @include('admin.includes.seo-meta-fields')
                        <!-- Other fields start here -->
                        <div class="card-title other_fields">
                          <div class="row">
                            <div class="col s12 m6 l10">
                              <h4 class="card-title">Other Fields</h4>
                            </div>
                            <div class="col s12 m6 l2">
                            </div>
                          </div>
                        </div>
                        <!-- @if(isset($cta_data) && count($cta_data) > 0)
                        @foreach($cta_data as $value)

                        <div class="input-field col s12 other_fields">
                          <label for="cemail0">{{$value->cta_title}} Title</label>
                          <input class="validate" id="uname0" name="order_now_or_call_us_title[]" type="text" placeholder="Enter {{$value->cta_title}} Title" value="">
                        </div>
                        <div class="input-field col s12 other_fields">
                          <label for="cemail0">{{$value->cta_description}} Description</label>
                          <textarea class="materialize-textarea summernote" id="ccomment0" name="order_now_or_call_us_description[]" style="height: 100px;"><></textarea>
                        </div>
                        @endforeach
                        @else
                        <div class="input-field col s12 other_fields">
                          <label for="cemail0">Background CTA Title</label>
                          <input class="validate" id="uname0" name="order_now_or_call_us_title[]" type="text" placeholder="Enter Order Title">
                        </div>
                        <div class="input-field col s12 other_fields">
                          <label for="cemail0">Background CTA Description</label>
                          <textarea class="materialize-textarea summernote" id="ccomment0" name="order_now_or_call_us_description[]" style="height: 100px;"></textarea>
                        </div>
                        <div class="input-field col s12 other_fields">
                          <label for="cemail0">Why Us Title</label>
                          <input class="validate" id="uname0" name="order_now_or_call_us_title[]" type="text" placeholder="Enter Why Us Title">
                        </div>
                        <div class="input-field col s12 other_fields">
                          <label for="cemail0">Why Us Description</label>
                          <textarea class="materialize-textarea summernote" id="ccomment0" name="order_now_or_call_us_description[]" style="height: 100px;"></textarea>
                        </div>
                        @endif -->
                        
                        <div class="input-field col s12 other_fields">
                          <label for="cemail0">Why Us Title</label>
                          <input class="validate" id="why_us_title" name="why_us_title" type="text" placeholder="Enter Why Us Title" value="<?= !empty($record[0]->whyus_title) ?  $record[0]->whyus_title : '' ?>">
                        </div>
                        <div class="input-field col s12 other_fields">
                          <label for="cemail0">Why Us Description</label>
                          <textarea class="materialize-textarea summernote" id="ccomment0" name="why_us_description"  ><?= !empty($record[0]->whyus_desc) ?  $record[0]->whyus_desc : '' ?></textarea>
                        <div class="input-field col s12 other_fields">
                          <label for="cemail0">Background Title</label>
                          <input class="validate" id="background_title" name="background_title" type="text" placeholder="Enter Background Title" value="<?= !empty($record[0]->background_title) ?  $record[0]->background_title : '' ?>">
                        </div>
                        <div class="input-field col s12 other_fields">
                          <label for="cemail0"> Background Description</label>
                          <textarea  class="materialize-textarea summernote" id="ccomment0" name="background_description" ><?= !empty($record[0]->background_desc) ?  $record[0]->background_desc : '' ?></textarea>
                        </div>
                        <!-- Other fields end here -->

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
<script>
  $(document).ready(function() {

    $('.summernote').summernote({



      placeholder: 'Enter Why Us Description',

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

    $('.summernote1').summernote({
      
      placeholder: 'Enter Background Description',

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
  $("input#gallery_file").change(function() {
    var ele = document.getElementById($(this).attr('id'));
    var result = ele.files;
    // alert(result.length);
    $(".gallery-alt-img").empty();
    for (var x = 1; x <= result.length; x++) {
      $(".gallery-alt-img").append("<div class='input-field col s12'><label for='cemail0'>Gallery Img Alt</label><input name='gallery_img_alt_" + x + "' type='text' placeholder='Gallery Image Alt'></div>");
    }

  });

  function updateGlryAlt(value, id, url) {
    var _token = $('input[name=_token]').val();

    $.ajax({

      type: "POST",
      url: url,
      data: {
        g_img_alt: value,
        _token: _token,
        id: id
      },
      success: function(data) {

        if (data == 1) {

          //jQuery(elem).parent().parent().remove()

        }
      },
      error: function(data) {},
    });

  }

  $("select[name=cat_id]").change(function() {

    if ($(this).val() != '') {
      var category_id = $(this).val();
      getCategory(category_id);
    }
  });

  function getCategory(category_id, subcategory_id = '') {

    $.ajax({
      type: "get",
      url: "{{url('admin/get-subcategories')}}",
      data: {
        category_id: category_id
      },
      dataType: "JSON",
      success: function(result) {
        var data = '';
        // var data = '<option value="">Select SubCategoery</option>';
        var subcat_id = subcategory_id;

        if (result != '') {
          for (var i = 0; i < result.length; i++) {

            if (result[i].id == subcat_id) {
              data += '<option  selected value="' + result[i].id + '">' + result[i].sub_cat_name + '</option>';
            } else {
              data += '<option value="' + result[i].id + '">' + result[i].sub_cat_name + '</option>';
            }

          }
          $("#subcategory").attr('required', true);
          $("#subcategory").html(data);
          $("select").formSelect();
        } else {
          $("#subcategory").attr('required', false);
          $("#subcategory").html(data);
          $("select").formSelect();
        }



      }
    });
  }

  function removefromDB(elem, id, url) {
    var _token = $('input[name=_token]').val();

    $.ajax({

      type: "POST",
      url: url + '/' + id,
      data: {
        id: id,
        _token: _token
      },
      success: function(data) {

        if (data == 1) {

          jQuery(elem).parent().parent().remove()

        }
      },
      error: function(data) {},
    });

  }

  DecoupledEditor
    .create(document.querySelector('.document-editor__editable'), {

    })
    .then(editor => {
      const toolbarContainer = document.querySelector('.document-editor__toolbar');

      toolbarContainer.appendChild(editor.ui.view.toolbar.element);

      window.editor = editor;
    })
    .catch(err => {
      console.error(err);
    });

  DecoupledEditor
    .create(document.querySelector('.document-editor__editable2'), {

    })
    .then(editor => {
      const toolbarContainer = document.querySelector('.document-editor__toolbar2');

      toolbarContainer.appendChild(editor.ui.view.toolbar.element);

      window.editor = editor;
    })
    .catch(err => {
      console.error(err);
    });

  $('.submit').click(function() {

    html = $(".document-editor__editable").html();
    $("#editor1").text(html);
    html = $(".document-editor__editable2").html();
    $("#editor2").text(html);
  });

  $(document).ready(function() {
    <?php if (!empty($record[0]->bg_image)) { ?>
      window.onload = bg_img();

      function bg_img() {
        $('.bg_img .dropify-preview').show();
        $('.bg_img').find('span').html('<img src="{{ asset("storage/product_uploads") }}/<?= $record[0]->bg_image; ?>">');
      }
    <?php } ?>
    <?php if (!empty($record[0]->collection_image)) { ?>
      window.onload = collection_image();

      function collection_image() {
        $('.collection_image .dropify-preview').show();
        $('.collection_image').find('span').html('<img src="{{ asset("storage/product_uploads") }}/<?= $record[0]->collection_image; ?>">');
      }
    <?php } ?>
    <?php if (!empty($record[0]->feature_image)) { ?>
      window.onload = feature_image();

      function feature_image() {
        $('.feature_image .dropify-preview').show();
        $('.feature_image').find('span').html('<img src="{{ asset("storage/product_uploads") }}/<?= $record[0]->feature_image; ?>">');
      }
    <?php } ?>

    <?php if (!empty($record[0]->feature_image_l2)) { ?>
      window.onload = feature_image_l2();

      function feature_image_l2() {
        $('.feature_image_l2 .dropify-preview').show();
        $('.feature_image_l2').find('span').html('<img src="{{ asset("storage/product_uploads") }}/<?= $record[0]->feature_image_l2; ?>">');
      }
    <?php } ?>

    <?php if (!empty($record[0]->cta_image)) { ?>
      window.onload = cta_image();

      function cta_image() {
        $('.cta_image .dropify-preview').show();
        $('.cta_image').find('span').html('<img src="{{ asset("storage/product_uploads") }}/<?= $record[0]->cta_image; ?>">');
      }
    <?php } ?>

  });
</script>

@if(!empty($record[0]->category_id))
<script type="text/javascript">
  window.onload = getCategory('{{$record[0]->category_id}}', '{{$record[0]->subcategory_id}}');
</script>

@endif;
@endsection