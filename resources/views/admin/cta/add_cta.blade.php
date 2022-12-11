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

                      <div class="card-title">
                        <div class="row">
                          <div class="col s12 m6 l10">
                            <h4 class="card-title">Add <?= $type_name ; ?> CTA </h4>
                          </div>
                          <div class="col s12 m6 l2">
                          </div>
                        </div>
                      </div>
                      <div id="html-view-validations">
                        <form class="formValidate0" id="formValidate0" method="POST" action="{{ !empty($record) ? url('admin/update-cta'): url('admin/insert-cta')}}" enctype="multipart/form-data">
                          <div class="row">
                          
                            <input type="hidden" name="id" value="<?= !empty($record['id']) ? $record['id'] : '' ?>">

                            <input type="hidden" name="type" value="<?= !empty($type) ? $type : '' ?>">
                              @csrf
                          @if($type == '1')
                            <div class="col s12">
                              <label for="role">Select  <?= $type_name ; ?></label>
                              <select class="error validate" name="type_id" required>
                                <option selected="" value="" disabled="">Select  <?= $type_name ; ?></option>
                                @foreach($records as $row)
                                  <option value="{{$row->id}}" <?php if(!empty($record['type_id']) && $record['type_id'] == $row->id): ?> selected <?php endif ?> >{{$row->cat_name}}</option>
                                @endforeach
                              </select>
                            </div>
                          @elseif($type == '2')
                            <div class="col s12">
                              <label for="role">Select  <?= $type_name ; ?></label>
                              <select class="error validate" name="type_id" required>
                                <option selected="" value="" disabled="">Select  <?= $type_name ; ?></option>
                                @foreach($records as $row)
                                  <option value="{{$row->id}}" <?php if(!empty($record['type_id']) && $record['type_id'] == $row->id): ?> selected <?php endif ?> >{{$row->sub_cat_name}}</option>
                                @endforeach
                              </select>
                            </div>
                          @elseif($type == '3')
                            <div class="col s12">
                              <label for="role">Select  <?= $type_name ; ?></label>
                              <select class="error validate" name="type_id" required>
                                <option selected="" value="" disabled="">Select  <?= $type_name ; ?></option>
                                @foreach($records as $row)
                                  <option value="{{$row->id}}" <?php if(!empty($record['type_id']) && $record['type_id'] == $row->id):?> selected <?php endif ?> >{{$row->name}}</option>
                                @endforeach
                              </select>
                            </div>
                          @endif
                            
                            <div class="input-field col s12">
                              <label for="uname0">CTA Title*</label>
                              <textarea class="materialize-textarea validate" id="ccomment0" name="cta_title" required="" placeholder="Title" style="height: 100px;"><?= !empty($record['cta_title']) ? $record['cta_title'] : '' ?></textarea>
                            </div>
                            <div class="input-field col s12">
                              <label for="cemail0">CTA Description</label>
                              <div class="document-editor">
                                <div class="document-editor__toolbar"></div>
                                  <div class="document-editor__editable-container">
                                      <div class="document-editor__editable">
                                          
                                          <?= !empty($record['cta_description']) ? $record['cta_description'] : '<p></p>' ?>
                                      </div>
                                  </div>
                                </div>
                            </div>
                           
                            
                              <!-- Use to save the all content of editor bcz decoupled-document(ckeditor5) not supported form post data -->
                              <textarea style='display:none;' name='cta_description' id='editor1'></textarea>

                            <div class="divider mb-1 mt-1"></div>
                            <div class="row section">
                              <div class="col s12 m4 l3">
                                <label for="cemail0">CTA Image</label>
                              </div>
                              <div class="col s12 m8 l9 cta_img">
                                <p>Maximum file upload size 2MB.</p>
                                <input type="file" id="input-file-max-fs" name="cta_image" class="dropify" data-max-file-size="2M" <?= !empty($record['cta_image']) ?  '' : '' ?> />
                              </div>
                              
                              <div class="input-field col s12">
                                <label for="cemail0">CTA   Image Alt</label>
                                <input class="validate" id="uname0" name="cat_cta_image_alt" type="text" placeholder="CTA  Image Alt" value="<?= !empty($record[0]->cat_cta_image_alt) ? $record[0]->cat_cta_image_alt : '' ?>" >
                             </div>
                             
                            
                              
                            </div>

                            <div class="divider mb-1 mt-1"></div>
                            <div class="col s12">
                              <label for="role">Status</label>
                              <select class="error validate" name="status" required>
                                <option value="1" selected>Active</option>
                                <option value="0" > Inactive</option>
                              </select>
                            </div>
                            <div class="input-field col s12">
                              <label for="uname0">Sort Order</label>
                              <input class="validate" id="uname0" name="sort_order" type="number" placeholder="Sub Category will be sort according to this order on website" required="" min="1" max="1000" value="<?= !empty($record['sort_order']) ? $record['sort_order'] : '' ?>" >
                            </div>
                            <div class="divider mb-1 mt-1"></div>
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
<script>

  DecoupledEditor
    .create( document.querySelector( '.document-editor__editable' ), {
        
    } )
    .then( editor => {
        const toolbarContainer = document.querySelector( '.document-editor__toolbar' );

        toolbarContainer.appendChild( editor.ui.view.toolbar.element );

        window.editor = editor;
    } )
    .catch( err => {
        console.error( err );
    } );  

    $('.submit').click(function(){

        html = $(".document-editor__editable").html();
        $("#editor1").text(html);
  });
  $(document).ready(function(){
    <?php if(!empty($record['cta_image'])){ ?>
      window.onload = cta_img();
    <?php } ?>
  });
  
    function cta_img(){
      $('.cta_img .dropify-preview').show();
      $('.cta_img').find('span').html('<img src="{{ asset("storage/cta_uploads") }}/<?= !empty($record['cta_image']) ? $record['cta_image'] : ''; ?>">');
    }
</script>
@endsection