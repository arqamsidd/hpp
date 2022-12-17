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
                          @if (\Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                <h5 class="alert-heading">Success!</h5>
                                <p>Url has been generated for this media.Copy the url for future use here: 
                                  <a href="{{URL(\Session::get('success'))}}" target="_blank"><b>Generated Url</b></a></p>
                              </div>
                          @endif
                          <div class="col s12 m6 l10">

                            <h4 class="card-title">Add Media</h4>

                          </div>

                          <div class="col s12 m6 l2">

                          </div>

                        </div>

                      </div>

                      <div id="html-view-validations">
                        <form class="formValidate0" id="formValidate0" method="POST" action="{{ Route('save_media')}}" enctype="multipart/form-data">

                          <div class="row">
                              @csrf
                            <div class="row section">

                              <div class="col s12 m4 l3">

                                <label for="cemail0">Image</label>

                              </div>

                              <div class="col s12 m8 l9 collection_image">

                                <p>Maximum file upload size 2MB.</p>

                                <input type="file" id="input-file-max-fs" name="image" class="dropify" data-max-file-size="2M" />

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