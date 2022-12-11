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
                      <div class="card-title">
                        <div class="row">
                          <div class="col s12 m6 l10">
                            <h4 class="card-title">Add New Page </h4>
                          </div>
                          <div class="col s12 m6 l2">
                          </div>
                        </div>
                      </div>
                      <div id="html-view-validations">
                        
                        <form class="formValidate0" id="formValidate0" method="POST" action="{{ !empty($record) ? url('admin/update-page'): url('admin/insert-page')}}" enctype="multipart/form-data">
                          <div class="row">
                          
                            <input type="hidden" name="id" value="<?= !empty($record['id']) ? $record['id'] : '' ?>">
                              @csrf
                            
                            <div class="input-field col s12">
                              <label for="uname0">Page Name*</label>
                              <input class="validate" id="uname0" name="page_name" type="text" placeholder="Page Name will be the slug of page" required="" 
                                     value="<?= !empty($record['page_name']) ? $record['page_name'] : '' ?>" >
                            </div>
                            <!-- <div class="input-field col s12">
                              <label for="uname0">Page Link*</label>
                              <input class="validate" id="uname0" name="cta_title" type="text" placeholder="Name" required="" value="<?= !empty($record['cta_title']) ? $record['cta_title'] : '' ?>" >
                            </div> -->
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
                              <input class="validate" id="uname0" name="sort_order" type="number" placeholder="This will be sort according to this order on website" required="" min="1" max="1000" value="<?= !empty($record['sort_order']) ? $record['sort_order'] : '' ?>" >
                            </div>
                            <div class="divider mb-1 mt-1" style="user-select: auto;"></div>
                              <div class="card-title">
                                  <div class="row">
                                  <div class="col s12 m6 l10">
                                      <h4 class="card-title">Seo Meta Data</h4>
                                  </div>
                                  <div class="col s12 m6 l2">
                                  </div>
                                  </div>
                              </div>
                              <div class="input-field col s12">
                                  <label for="cemail0">Meta Title</label>
                                  <input class="validate" id="uname0" name="meta_title" type="text" placeholder="Enter Meta Title"  value="<?= !empty($record['meta_title']) ? $record['meta_title'] : '' ?>" >
                              </div>
                              <div class="input-field col s12">
                                  <label for="cemail0">Meta Keyword</label>
                                  <input class="validate" id="uname0" name="meta_keywords" type="text" placeholder="Enter the keywords with comma separated like boxes,big boxes"  value="<?= !empty($record['meta_keywords']) ? $record['meta_keywords'] : '' ?>" >
                              </div>
                              <div class="input-field col s12">
                                  <label for="cemail0">Meta Description</label>
                                  <textarea class="materialize-textarea validate" id="ccomment0" name="meta_description" placeholder="Title" style="height: 100px;">
                                    <?= !empty($record['meta_description']) ? $record['meta_description'] : '' ?></textarea>
                              </div>
                            
                            <div class="input-field col s12">
                                  <label for="cemail0">Page Schema</label>
                              		<textarea  rows="50" style="height: 15rem;" name="schema_script_other">
                                      {!! !empty($record["schema_script_other"]) ? $record["schema_script_other"] : ''; !!}
                                  </textarea>
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