@extends('admin.layouts.admin')
@section('content')

  <!-- BEGIN: Page Main-->
   <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
    
        <div class="col s12">
          <div class="container">
              <div class="section">

              <div class="row">
                <div class="col s12">
                  <div id="html-validations" class="card card-tabs">
                    <div class="card-content">
                      <div class="card-title">
                        <div class="row">
                          <div class="col s12 m6 l10">
                            <h4 class="card-title">Add Admin</h4>
                          </div>
                          <div class="col s12 m6 l2">
                             @if(session('error'))
                              <div class="pt-2 alert border-danger alert-dismissible fade show" role="alert">
                                  
                                  <div class="card-alert card red lighten-5">
                                    <div class="card-content red-text">
                                      <p>{{ session('error')}}</p>
                                    </div>
                                    <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">×</span>
                                    </button>
                                  </div>
                              </div>
                              @endif
                          </div>
                        </div>
                      </div>
                      <div id="html-view-validations">
                        <form class="formValidate0" id="formValidate0" method="POST" action="{{ !empty($record) ? url('admin/update-admin'): url('admin/insert-admin')}}" enctype="multipart/form-data">
                          <div class="row">
                            <input type="hidden" name="id" value="<?= !empty($record['id']) ? $record['id'] : '' ?>">
                           
                            @csrf
                            <div class="col s12">
                              <label for="role">Role</label>
                              <select class="error validate" name="role" required>
                                <option selected value="">Select Role</option>
                                <option value="admin" <?php if(!empty($record['role']) && $record['role'] == '2'): ?> selected <?php endif ?> >Admin</option>
                                <option value="data-entry" <?php if(!empty($record['role']) && $record['role'] == '3'): ?> selected <?php endif ?> >Data Entry Operator</option>
                              </select>
                              @error('role')
                                  <span class="invalid-feedback error" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                            <div class="input-field col s12">
                              <label for="uname0">Name</label>
                              <input class="validate" id="uname0" name="name" type="text" placeholder="Name" required="" value="<?= !empty($record['name']) ? $record['name'] : '' ?>" >
                            </div>
                            <div class="input-field col s12">
                              <label for="cemail0">Email</label>
                              <input class="validate" id="uname0" name="email" type="email" placeholder="Email" <?php if(!empty($record['email'])): ?> readonly="" <?php endif ?>  required="" value="<?= !empty($record['email']) ? $record['email'] : '' ?>" >
                            </div>
                          @if(empty($record['password']))
                            <div class="input-field col s12">
                              <label for="uname0">Password</label>
                              <input class="validate" id="uname0" name="password" type="password" placeholder="Password" required="" value="<?= !empty($record['password']) ? $record['password'] : '' ?>" >
                            </div>
                          @endif

                            <div class="divider mb-1 mt-1"></div>
                            <div class="col s12">
                              <label for="role">Status</label>
                              <select class="error validate" name="status" required>
                                <option value="1" selected>Active</option>
                                <option value="0" > Inactive</option>
                              </select>
                            </div>
                        
                            
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
  
  
</script>

@endsection