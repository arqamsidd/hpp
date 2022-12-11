<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Contact Half Price Packaging to grab exclusive custom box packaging at the lowest prices. Hurry! Order our best mailer boxes, rigid boxes and other types.">
    <meta name="keywords" content="">
    <meta name="author" content="ThemeSelect">
    <title>Custom Boxes With Logo | Half Price Packaging</title>
    <link rel="apple-touch-icon" href="{{asset('/')}}assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/vendors/vendors.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/css/themes/vertical-modern-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/css/themes/vertical-modern-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/css/pages/login.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/css/custom/custom.css">
    <!-- END: Custom CSS-->

    <style>
      .invalid-feedback{
        color: red;
      }
    </style>
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 1-column login-bg   blank-page blank-page" data-open="click" data-menu="vertical-modern-menu" data-col="1-column">
    <div class="row">
      <div class="col s12">
        <div class="container"><div id="login-page" class="row">

      <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
      
          @if(session('success'))
          <div class="pt-2 alert border-success alert-dismissible fade show" role="alert">
              
              <div class="card-alert card green lighten-5">
                <div class="card-content green-text">
                  <p>{{ session('success')}}</p>
                </div>
                <button type="button" class="close green-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
          </div>
          @elseif(session('error'))
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
        <form class="login-form" action="{{route('admin.login')}}" method="POST">
          @csrf
          <div class="row">
            <div class="input-field col s12">
              <h5 class="ml-4">Sign in</h5>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-2">person_outline</i>
              <!-- <label for="username" class="center-align">Email</label> -->

              <input type="email" required placeholder="Enter Email" name="email" class="form-control " id="yourEmail"
                     value="{{ old('email') }}">

              @if( isset($errors) && count($errors) > 0)
                    <span class="invalid-feedback error" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-2">lock_outline</i>
              <!-- <label for="password">Password</label> -->

              <input type="password" required placeholder="Enter password" name="password" class="form-control" id="yourPassword" >

              @if( isset($errors) && count($errors) > 0)
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password')}}</strong>
                    </span>
              @endif

            </div>
          </div>
          <div class="row">
            <div class="col s12 m12 l12 ml-2 mt-1">
              <p>
                <label>
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <span>Remember Me</span>
                </label>
              </p>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
            <button class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12" type="submit">Login</button>
              <!-- <a href="index.html" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</a> -->
            </div>
          </div>
      
        </form>
      </div>
    </div>
        </div>
        <div class="content-overlay"></div>
      </div>
    </div>

    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('/')}}assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{asset('/')}}assets/js/plugins.js"></script>
    <script src="{{asset('/')}}assets/js/search.js"></script>
    <script src="{{asset('/')}}assets/js/custom/custom-script.js"></script>
    <script src="{{asset('/')}}assets/js/scripts/ui-alerts.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>