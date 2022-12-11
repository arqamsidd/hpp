 <!-- BEGIN: SideNav-->
 
 <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
      <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="{{ route('admin.home')}}"><img class="hide-on-med-and-down" src="{{asset('/')}}frontend/images/logo.png" alt="materialize logo"/><img class="show-on-medium-and-down hide-on-med-and-up" src="{{asset('/')}}frontend/images/logo.png" alt="logo"/><span class="logo-text hide-on-med-and-down"></span></a><a class="navbar-toggler" href="#"></a></h1>
      </div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        
        <li class="{{ Request::is('admin/register-admin') || Request::is('admin/view-admins') ? 'active' : '' }} bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Admins</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li class="active"><a class="{{ Request::is('admin/register-admin') ? 'active' : '' }}" href="{{ url('admin') }}/register-admin"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Add Admin</span></a>
              </li>
              <li><a class="{{ Request::is('admin/view-admins') ? 'active' : '' }}" href="{{ url('admin') }}/view-admins"><i class="material-icons">radio_button_unchecked</i><span data-i18n="eCommerce">View All Admins</span></a>
              </li>
            </ul>
          </div>
        </li>

        <li class="{{ Request::is('admin/add-post-index') || Request::is('admin/manage-posts') ? 'active' : '' }} bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Posts</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="{{ Request::is('admin/manage-posts') ? 'active' : '' }}" href="{{ url('admin') }}/manage-posts"><i class="material-icons">radio_button_unchecked</i><span data-i18n="eCommerce">Manage Posts</span></a>
              </li>
            </ul>
          </div>
        </li>

        <li class="{{ Request::is('admin/add_category') || Request::is('admin/view-category') ? 'active' : '' }} bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Categories</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li class="active"><a class="{{ Request::is('admin/add_category') ? 'active' : '' }}" href="{{ url('admin') }}/add_category"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Add Category</span></a>
              </li>
              <li><a class="{{ Request::is('admin/view-category') ? 'active' : '' }}" href="{{ url('admin') }}/view-category"><i class="material-icons">radio_button_unchecked</i><span data-i18n="eCommerce">View All Categories</span></a>
              </li>
              <li><a class="{{ Request::is('admin/add-cta') ? 'active' : '' }}" href="{{ url('admin') }}/add-cta/1"><i class="material-icons">radio_button_unchecked</i><span data-i18n="eCommerce">Add Category CTA</span></a>
              </li>
              <li><a class="{{ Request::is('admin/view-cta') ? 'active' : '' }}" href="{{ url('admin') }}/view-cta/1"><i class="material-icons">radio_button_unchecked</i><span data-i18n="eCommerce">View All Categories CTA </span></a>
              </li>
            </ul>
          </div>
        </li>

        <li class="{{ Request::is('admin/add-sub-category') || Request::is('admin/view-sub-category') ? 'active' : '' }} bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Sub Categories</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li class="active"><a class="{{ Request::is('admin/add-sub-category') ? 'active' : '' }}" href="{{ url('admin') }}/add-sub-category"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Add Sub Category</span></a>
              </li>
              <li><a  class="{{ Request::is('admin/view-sub-category') ? 'active' : '' }}" href="{{ url('admin') }}/view-sub-category"><i class="material-icons">radio_button_unchecked</i><span data-i18n="eCommerce">View All Sub Categories</span></a>
              </li>
              <li><a class="{{ Request::is('admin/add-cta') ? 'active' : '' }}" href="{{ url('admin') }}/add-cta/2"><i class="material-icons">radio_button_unchecked</i><span data-i18n="eCommerce">Add Sub Category CTA</span></a>
              </li>
              <li><a class="{{ Request::is('admin/view-cta') ? 'active' : '' }}" href="{{ url('admin') }}/view-cta/2"><i class="material-icons">radio_button_unchecked</i><span data-i18n="eCommerce">View All L2 CTA's </span></a>
              </li>
            </ul>
          </div>
        </li>

        <li class="{{ Request::is('admin/add-product') || Request::is('admin/view-product') ? 'active' : '' }} bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Products</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li class="active"><a class="{{ Request::is('admin/add-product') ? 'active' : '' }}" href="{{ url('admin') }}/add-product"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Add Product</span></a>
              </li>
              <li><a  class="{{ Request::is('admin/view-product') ? 'active' : '' }}" href="{{ url('admin') }}/view-product"><i class="material-icons">radio_button_unchecked</i><span data-i18n="eCommerce">View All Products</span></a>
              </li>
              
             <!--  <li><a class="{{ Request::is('admin/add-cta') ? 'active' : '' }}" href="{{ url('admin') }}/add-cta/3"><i class="material-icons">radio_button_unchecked</i><span data-i18n="eCommerce">Add Products CTA</span></a>
              </li>
              <li><a class="{{ Request::is('admin/view-cta') ? 'active' : '' }}" href="{{ url('admin') }}/view-cta/3"><i class="material-icons">radio_button_unchecked</i><span data-i18n="eCommerce">View All Productss CTA </span></a>
              </li> -->

            </ul>
          </div>
        </li>


        <li class="{{ Request::is('admin/add-product') || Request::is('admin/view-product') ? 'active' : '' }} bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Popup Products</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li class="active"><a class="{{ Request::is('admin/add-popup-product') ? 'active' : '' }}" href="{{ url('admin') }}/add-popup-product"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Add Popup Product</span></a>
              </li>
              <li><a  class="{{ Request::is('admin/view-popup-product') ? 'active' : '' }}" href="{{ url('admin') }}/view-popup-product"><i class="material-icons">radio_button_unchecked</i><span data-i18n="eCommerce">View All Popup Products</span></a>
              </li>
            </ul>
          </div>
        </li>

        <li class="{{ Request::is('admin/add-product') || Request::is('admin/view-product') ? 'active' : '' }} bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Manage Pages</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li class="active"><a class="{{ Request::is('admin/add-new-page') ? 'active' : '' }}" href="{{ url('admin') }}/add-new-page"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Add New Page</span></a>
              </li>
              <li><a  class="{{ Request::is('admin/view-pages') ? 'active' : '' }}" href="{{ url('admin') }}/view-pages"><i class="material-icons">radio_button_unchecked</i><span data-i18n="eCommerce">View All Pages</span></a>
              </li>
            </ul>
          </div>
        </li>

        <li class="{{ Request::is('admin/view-custom-quotes') ? 'active' : '' }} bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Custom Quote</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
             
              <li><a  class="{{ Request::is('admin/view-custom-quotes') ? 'active' : '' }}" href="{{ url('admin') }}/view-custom-quotes"><i class="material-icons">radio_button_unchecked</i><span data-i18n="eCommerce">View Custom Quotes</span></a>
              </li>
              <!-- <li><a  class="{{ Request::is('admin/view-samplekit-quotes') ? 'active' : '' }}" href="{{ url('admin') }}/view-samplekit-quotes"><i class="material-icons">radio_button_unchecked</i><span data-i18n="eCommerce">View Sample Quotes</span></a>
              </li>
              <li><a  class="{{ Request::is('admin/view-instant-quotes') ? 'active' : '' }}" href="{{ url('admin') }}/view-instant-quotes"><i class="material-icons">radio_button_unchecked</i><span data-i18n="eCommerce">View Instant Quotes</span></a>
              </li> -->
            </ul>
          </div>
        </li>
        <li>
        <a  class="{{ Request::is('admin/media-library') ? 'active' : '' }}" href="{{ url('admin') }}/media-library">
          <i class="material-icons">settings_input_svideo</i>
          <span data-i18n="eCommerce">Media Library</span>
        </a>
      </li>
        
      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->