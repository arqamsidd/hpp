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
                            <h4 class="card-title">Add Popup Product</h4>
                          </div>
                          <div class="col s12 m6 l2">
                          </div>
                        </div>
                      </div>
                      <div id="html-view-validations">
                        <form class="formValidate0" id="formValidate0" method="POST" action="{{ !empty($record) ? url('admin/update-popup-product'): url('admin/insert-popup-product')}}" enctype="multipart/form-data">
                          <div class="row">
                          
                            <input type="hidden" name="id" value="<?= !empty($record[0]->id) ? $record[0]->id : '' ?>">
                              @csrf

                            <div class="col s12">
                              <label for="role">Select Categories</label>
                              <div class="input-field">
                                <select class="select2 browser-default" name="sub_cat_id" required="">
                                    @if($records->count() <= 0)
                                        <option disabled>Empty</option>
                                    @endif
                                    @foreach($records as $row)

                                        <option value="{{$row->id}}" <?php if(!empty($record[0]->sub_cat_id) && $record[0]->sub_cat_id == $row->id): ?> selected <?php endif ?> >{{$row->sub_cat_name}}</option>
                                    @endforeach
                                </select>
                                
                              </div>
                            </div>
                            <div class="input-field col s12">
                              <label for="uname0">Product Name*</label>
                              <input class="validate" id="uname0" name="name" type="text" placeholder="Name" required="" value="<?= !empty($record[0]->name) ? $record[0]->name : '' ?>" >
                            </div>

                            <div class="divider mb-1 mt-1"></div>
                            <div class="row section">
                              <div class="col s12 m4 l3">
                                <label for="cemail0">Popup Image</label>
                              </div>
                              <div class="col s12 m8 l9 bg_img">
                                <p>Maximum file upload size 2MB.</p>
                                <input type="file" id="input-file-max-fs" name="image" class="dropify" data-max-file-size="2M" <?= !empty($record[0]->image) ?  '' : '' ?>  />
                            
                              </div>
                            </div>

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

  
  $(document).ready(function(){
    <?php if(!empty($record[0]->image)){ ?>
      window.onload = bg_img();
      function bg_img(){
      $('.bg_img .dropify-preview').show();
      $('.bg_img').find('span').html('<img src="{{ asset("storage/popup_product_uploads") }}/<?= $record[0]->image; ?>">');
    }
    <?php } ?>

  });

    
</script>

@endsection