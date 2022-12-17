<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <?php
  $title = 'Custom Boxes With Logo | Custom Printing and Packaging Wholesale';
  $keywords = '';
  $description = '';
  $page_indexing = '';
  $schema_script = '';
  $schema_script_other = '';
  $og_tag_script = '';
  if (isset($meta_info)) {
    if (!empty($meta_info['meta_title'])) {
      $title = $meta_info['meta_title'];
    }
    if (!empty($meta_info['page_indexing'])) {
      $page_indexing = $meta_info['page_indexing'];
    }
    if (!empty($meta_info['schema_script'])) {
      $schema_script = $meta_info['schema_script'];
    }
    if (!empty($meta_info['schema_script_other'])) {
      $schema_script_other = $meta_info['schema_script_other'];
    }
    if (!empty($meta_info['og_tag_script'])) {
      $og_tag_script = $meta_info['og_tag_script'];
    }
  }
  if (isset($keywords)) {
    if (!empty($keywords)) {
      foreach ($keywords as $key => $keyword) {
        $keywords .= $keyword . ',';
      }
    }
  }

  ?>
  <title>
    <?= $title ?>
  </title>
  <meta name="description"
    content="{{ !empty($meta_info['meta_description']) ? $meta_info['meta_description'] : 'Grab exclusive custom box packaging from Half Price Packaging at highly competitive prices. Order our best mailer boxes, rigid boxes, and other types.'}}" />
  @if(!empty($meta_info['meta_keywords']))
  <?php $keywords = explode(',', $meta_info['meta_keywords']) ?>
  <meta name="keywords" content="@foreach($keywords as $keyword) {{ $keyword}}@endforeach" />@endif
  <meta name="robots" content="<?= $page_indexing ?>index, follow" />
  {!! $schema_script; !!}
  {!! $schema_script_other; !!}
  {!! $og_tag_script; !!}
  <meta name="page_url" content="<?php echo $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('og_tag_meta')


  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>



  <link rel="stylesheet" type="text/css" href="{{cdn('frontend')}}/css/bootstrap.min.css">
  <link rel="icon" type="image/gif" href="{{cdn('frontend')}}//images/fav.png" />
  <link rel="stylesheet" type="text/css" href="{{cdn('frontend')}}/css/navigation.css">
  <link rel="stylesheet" type="text/css" href="{{cdn('frontend')}}/font/fonts.css">
  <link rel="stylesheet" type="text/css" href="{{cdn('frontend')}}/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{cdn('frontend')}}/css/side-menu.css">
  <link rel="stylesheet" type="text/css" href="{{cdn('frontend')}}/css/slick.css">
  <link rel="stylesheet" type="text/css" href="{{cdn('frontend')}}/css/slick-theme.css">

  <!--
  <link rel="stylesheet" type="text/css" href="{{cdn('frontend')}}/css/animate.css">
  <link rel="stylesheet" type="text/css" href="{{cdn('frontend')}}/css/jquery.fancybox.min.css">
  <link rel="stylesheet" type="text/css" href="{{cdn('frontend')}}/css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="{{cdn('frontend')}}/css/icomo.css">
  <link rel="stylesheet" type="text/css" href="{{cdn('frontend')}}/css/hover-min.css">
  <link rel="stylesheet" type="text/css" href="{{cdn('frontend')}}/css/xzoom.min.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{cdn('frontend')}}/css/magnific-popup.css" media="all" />

  -->

  <!-- Begin Inspectlet Asynchronous Code -->
  <script type="text/javascript">
    (function () {
      window.__insp = window.__insp || [];
      __insp.push(['wid', 358778193]);
      var ldinsp = function () {
        if (typeof window.__inspld != "undefined") return; window.__inspld = 1; var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js?wid=358778193&r=' + Math.floor(new Date().getTime() / 3600000); var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x);
      };
      setTimeout(ldinsp, 0);
    })();
  </script>
  <!-- End Inspectlet Asynchronous Code -->


  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Poppins:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{cdn('frontend')}}/css/style.css">
  <link rel="stylesheet" type="text/css" href="{{cdn('frontend')}}/css/responsive.css">
  <meta name="ip2loc" content="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
  <link rel="canonical" href="https://www.halfpricepackaging.com<?php echo $_SERVER['REQUEST_URI']; ?>" />
  <meta name="page_url" content="<?php echo $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>">
  <meta name="facebook-domain-verification" content="9bjynxr6cw9fgh8ntb1pt3nlzcmfmv" />

  <script type="text/javascript" id="zsiqchat">

    var fired = false;
    var $zoho = $zoho || {};

    window._mfq = window._mfq || [];
    window.addEventListener('scroll', function () {
      let scroll = window.scrollY;
      if (scroll > 0 && fired === false) {

        (function () {
          var mf = document.createElement("script");
          mf.type = "text/javascript";
          mf.defer = true;
          mf.src = "//cdn.mouseflow.com/projects/358e4b4c-54c5-4db5-b3f8-3d1e8cc046f1.js";
          document.getElementsByTagName("head")[0].appendChild(mf);
        })();

        var recaptchaScript = document.createElement('script');
        recaptchaScript.src = 'https://www.google.com/recaptcha/api.js';
        recaptchaScript.defer = true;
        document.body.appendChild(recaptchaScript);

        $zoho.salesiq = $zoho.salesiq || {
          widgetcode: "53ace2be95218902fd56402b215cacf12309bcf330d87e7d60d5e34a7294ec86",
          values: {},
          ready: function () { }
        };
        var d = document;
        s = d.createElement("script");
        s.type = "text/javascript";
        s.id = "zsiqscript";
        s.defer = true;
        s.src = "https://salesiq.zoho.com/widget";
        t = d.getElementsByTagName("script")[0];
        t.parentNode.insertBefore(s, t);

        fired = true;

        // console.log('On scroll fired');
      }
    }, true);

  </script>





  <script type=text/javascript>
    function toggleChat() {
      $zoho.salesiq.chat.start();
    }
  </script>


  <!-- Global site tag (gtag.js) - Google Ads: 954941554 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-954941554"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-954941554');
  </script>
  <!-- Google Tag Manager -->
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WDX5T2S');
  </script>
  <!-- End Google Tag Manager -->
  <meta name="google-site-verification" content="IDNO8vKza8gJMVpR_34NZQ9J6JCe2S37Hwu1aEinkyQ" />
</head>

<body class="<?php echo $page_check ?>">



  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WDX5T2S" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div id="overlay"></div>
  <header>
    <div class="container-fluid">
      <nav class="navbar fixed-top navbar-expand-xl navbar-dark">
        <div class="container-fluid">
          <button id="sidebarCollapse" class="navbar-toggle" type="button" data-toggle="collapse"
            data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="desktop-menu m-auto collapse " id="navbarText" style="">
            <div class="row">
              <div class="col-md-4 head-col-1 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.0s">
                <div class="social-link">
                  <ul>
                    <li><a href="https://www.facebook.com/halfpricepackaging" target="_blank"><i class="fa fa-facebook"
                          aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/halfpricepacka1" target="_blank"><i class="fa fa-twitter"
                          aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/halfpricepackaging/" target="_blank"><i
                          class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/halfpricepackaging" target="_blank"><i
                          class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCtGFbR-weWi7z18bB_YmGfA" target="_blank"><i
                          class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
                <div class="hd-logo-st">
                  <ul>
                    <li><a
                        href="https://www.google.com/search?q=half+price+packaging&sxsrf=ALiCzsZM-fdsMbNFCTeTPuOSvy653ziIJw%3A1653824594538&source=hp&ei=UlyTYpbBHpSklwTCmIb4CA&iflsig=AJiK0e8AAAAAYpNqYno26egrlUnJ3LiwMkQFzHGhw2Sz&gs_ssp=eJzj4tVP1zc0zC0vTikwy0o3YLRSNaiwMLBISza3MLFMMzMwTE62tDKoMDcyNDQwMjVNTjU3MDU2SvESyUjMSVMoKMpMTlUoSEzOTkzPzEsHADnpFoE&oq=halfprice&gs_lcp=Cgdnd3Mtd2l6EAEYADINCC4QgAQQxwEQrwEQCjIFCAAQgAQyDQguEIAEEMcBENEDEAoyBwgAEIAEEAoyBQgAEIAEMgUIABCABDIHCAAQgAQQCjILCC4QgAQQxwEQrwEyBwgAEIAEEAoyBwgAEIAEEAo6BAgjECc6CAgAEIAEELEDOggILhCxAxCDAToLCAAQgAQQsQMQgwE6BQguEIAEOgQIABBDOgQILhBDOgoIABCxAxCDARBDOgcILhDUAhBDOgoILhDHARDRAxBDOg0ILhCxAxCDARDUAhBDUABYxRpgxiloAHAAeACAAdgGiAHbGJIBCTItNS4zLjYtMZgBAKABAQ&sclient=gws-wiz"
                        data-toggle="tooltip4" data-placement="bottom"
                        title="&bigstar;&bigstar;&bigstar;&bigstar;&bigstar;Excellent - 4.6" target="_blank"><img
                          src="{{cdn('frontend')}}/images/head-logo/head-logo-3.png"
                          alt="half price packaging google logo"></a></li>
                    <li><a href="https://www.bark.com/en/us/company/half-price-packaging/ZwMpK/" data-toggle="tooltip1"
                        data-placement="bottom" title="&bigstar;&bigstar;&bigstar;&bigstar;&bigstar;Reviews (55)"
                        target="_blank"><img src="{{cdn('frontend')}}/images/head-logo/head-logo-2.png"
                          alt="half price packaging bark logo"></a></li>
                    <li><a href="https://www.reviews.io/company-reviews/store/halfpricepackaging-com"
                        data-toggle="tooltip1" data-placement="bottom"
                        title="&bigstar;&bigstar;&bigstar;&bigstar;&bigstar;Excellent - 4.7" target="_blank"><img
                          src="{{cdn('frontend')}}/images/head-logo/56x22-review-logo.png"
                          alt="half price packaging reviews.io logo"></a></li>
                    <li><a href="https://www.trustpilot.com/review/www.halfpricepackaging.com" data-toggle="tooltip"
                        data-placement="bottom" title="&bigstar;&bigstar;&bigstar;&bigstar;&bigstar;Excellent - 4.8"
                        target="_blank"><img src="{{cdn('frontend')}}/images/head-logo/head-logo-1.png"
                          alt="half price packaging trustpilot logo"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4 head-col-3 wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.0s">
                <div class="hd-cntr">
                  <a href="/"><img src="{{cdn('frontend')}}/images/hpp-logo.webp" alt="Half price packaging logo"></a>
                  <ul>
                    <li><a href="{{ url('tuck-boxes') }}">Tuck boxes</a></li>
                    <li><a href="{{ url('mailer-box-packaging') }}">Mailer boxes</a></li>
                    <li><a href="{{ url('cbd-and-tobacco-packaging') }}">CBD boxes</a></li>
                    <li><a href="{{ url('beauty-and-cosmetics-packaging') }}">Cosmetic Boxes</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4 head-col-2 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.0s">
                <div class="head-btn-st ">
                  <a href="javascript:;" style="margin-right: 15px;"
                    class="get-started popup-btn-beat btn-ani white">Beat The Price</a>
                  <a href="https://wa.me/14155781759" target="_blank"><img
                      src="{{cdn('frontend')}}/images/hd-call-icon1.jpg" alt="half price packaging whatsapp logo"></a>
                  <a href="javascript:;" class="popup-btn-req btn-ani white"><img
                      src="{{cdn('frontend')}}/images/hd-call-icon3.png"
                      alt="half price packaging book a call logo"></a>
                  <a href="javascript:;" class="get-started popup-btn btn-ani white">Get A Quote</a>
                </div>
                <div class="head-link-num-em">
                  <a href="tel:866-225-2112"><i class="fa fa-phone-square" aria-hidden="true"></i> 866-225-2112</a>
                  <a href="mailto:orders@halfpricepackaging.com"><i class="fa fa-envelope-square"
                      aria-hidden="true"></i>orders@halfpricepackaging.com</a>
                </div>
              </div>
            </div>
            <div class="hdr-nav-list">
              <ul class="navbar-nav m-auto">
                <li class="dropdown_custom " id="dropdown_custom1">
                  <a class="dropdown-toggles" data-toggle="dropdowns" href="#">Box by Industry <span
                      class="caret"></span></a>
                  <div class="mega_dropdown_menu">
                    <div class="container">
                      <div class="row flex_row">
                        <div class="col-sm-3 no-padding">
                          <div class="nav_main_categories">
                            <ul id="nav_main_categories">
                              <?php $categories = getCategories();  ?>
                              @if(!empty($categories))
                              @php $i="1" @endphp
                              @foreach($categories as $category)
                              <li><a href="{{url('').'/'.$category->slug}}"
                                  onmouseover="getCategoryImage('{{$category->id}}')"
                                  class="@if($i == 1) active_navigation @endif" data-id="sub_menu_{{$category->id}}">{{
                                  $category->cat_name}} </a> </li>
                              @php $i++ @endphp
                              @endforeach
                              @endif;
                            </ul>
                          </div>
                        </div>
                        <div class="col-sm-3 no-padding">
                          <div class="nav_sub_products">
                            @if(!empty($categories))
                            @php $i="1"; @endphp
                            @foreach($categories as $category)
                            <ul id="sub_menu_{{$category->id}}" class="@if($i != 1) sub_menu_none @endif">
                              <?php $sub_categories = getSubCategories($category->id);  ?>
                              @if(!empty($sub_categories))
                              @php $x="1"; @endphp
                              @foreach($sub_categories as $sub_category)
                              <li><a href="{{url('').'/'.$sub_category->slug}}"
                                  data-sub-id="layer_2_0_{{$sub_category->id}}"
                                  onmouseover="getSubCategoryImage('{{$sub_category->id}}')"
                                  class="@if($x == 1) active_sub_menu @endif">{{$sub_category->sub_cat_name}} </a> </li>
                              @php $x++ @endphp
                              @endforeach
                              @endif

                              @if($i == 1)
                              <div class="sub_menu_image">
                                <img width="100%" src="{{cdn($category->collection_image_path)}}">
                              </div>
                              @else
                              <div class="sub_menu_image">
                              </div>
                              @endif
                            </ul>
                            @php $i++ @endphp
                            @endforeach
                            @endif
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="navigation_product_main">
                            <?php $subcategories = getAllSubCategories();  ?>
                            @if(!empty($subcategories))
                            @php $i="1"; @endphp
                            @foreach($subcategories as $sub_category)
                            <div class="navigation_product_listing @if($i != 1) navigation_product_none @endif "
                              id="layer_2_0_{{$sub_category->id}}">

                              <ul>
                                <?php $products = getSubCategoryProducts($sub_category->id);  ?>
                                <?php $pop_up_products = getSubCategoryPopupProducts($sub_category->id);  ?>
                                @if(!empty($products))
                                @php $x="1"; @endphp
                                @foreach($products as $key => $product)
                                @if($key < 13) <li><a href="{{url('').'/'.$product->slug}}">{{ $product->name}} </a>
                </li>
                @endif

                @php $x++ @endphp
                @endforeach
                @endif

                @if(!empty($pop_up_products))
                @php $x="1"; @endphp
                @foreach($pop_up_products as $key => $pproduct)


                <li><a href="{{url('').'/'.$pproduct->slug}}" onclick="getL2WithPopup()">{{ $pproduct->name}} </a> </li>

                @php $x++ @endphp
                @endforeach
                @endif
              </ul>

              <ul>

                <?php $products = getSubCategoryProducts($sub_category->id);  ?>
                @if(!empty($products))
                @php $x="1"; @endphp
                @foreach($products as $key => $product)
                @if($key >= 13)

                <li><a href="{{url('').'/'.$product->slug}}">{{ $product->name}} </a> </li>
                @endif

                @php $x++ @endphp
                @endforeach
                @endif
                @if($i == 1)
                <div class="product_menu_image">
                  <img width="100%" src="{{cdn($sub_category->collection_image_path)}}">
                </div>
                @else
                <div class="product_menu_image">
                </div>
                @endif
              </ul>
            </div>
            @php $i++ @endphp
            @endforeach
            @endif
          </div>
        </div>
    </div>
    </div>
    </div>
    </li>

    <li class="nav-item dropdown_second_open"><a href="{{ url('box-by-material') }}">Box by Material</a>
      <ul class="deropdown_second">
        <li class="nav-item dropdown_second_inner"><a href="{{ url('cardboard-box-packaging') }}">Cardboard Boxes<i
              class="fa fa-caret-right" aria-hidden="true"></i></a>
          <ul class="deropdown_second_sub">
            <li class="nav-item"><a href="{{ url('cardboard-boxes') }}">Cardboard Boxes</a></li>
            <li class="nav-item"><a href="{{ url('cosmetic-cardboard-boxes') }}">Cosmetic Cardboard Boxes</a></li>
            <li class="nav-item"><a href="{{ url('cardboard-pillow-boxes') }}">Cardboard Pillow Boxes</a></li>
            <li class="nav-item"><a href="{{ url('cardboard-gable-boxes') }}">Cardboard Gable Boxes</a></li>
            <li class="nav-item"><a href="{{ url('suitcase-boxes') }}">Suitcase Boxes</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown_second_inner"><a href="#!">Corrugated Boxes<i class="fa fa-caret-right"
              aria-hidden="true"></i></a>
          <ul class="deropdown_second_sub">
            <li class="nav-item"><a href="{{ url('custom-corrugated-boxes') }}">Custom Corrugated Boxes</a></li>
            <li class="nav-item"><a href="{{ url('kraft-corrugated-boxes') }}">Kraft Corrugated Boxes</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown_second_inner"><a href="{{ url('kraft-box-packaging') }}">Kraft Bags and Boxes<i
              class="fa fa-caret-right" aria-hidden="true"></i></a>
          <ul class="deropdown_second_sub">
            <li class="nav-item"><a href="{{ url('kraft-pie-boxes') }}">Kraft Pie Boxes</a></li>
            <li class="nav-item"><a href="{{ url('white-kraft-boxes') }}">White Kraft Boxes</a></li>
            <li class="nav-item"><a href="{{ url('kraft-tuck-top-boxes') }}">Kraft Tuck Top Boxes</a></li>
            <li class="nav-item"><a href="{{ url('small-kraft-boxes') }}">Small Kraft Boxes</a></li>
            <li class="nav-item"><a href="{{ url('kraft-sleeve-boxes') }}">Kraft Sleeve Boxes</a></li>
            <li class="nav-item"><a href="{{ url('kraft-paper-gable-box') }}">Kraft Paper Gable Box</a></li>
            <li class="nav-item"><a href="{{ url('kraft-gable-boxes') }}">Kraft Gable Boxes</a></li>
            <li class="nav-item"><a href="{{ url('kraft-boxes-with-lid') }}">Kraft Boxes with Lid</a></li>
            <li class="nav-item"><a href="{{ url('kraft-candy-boxes') }}">Kraft Candy Boxes</a></li>
            <li class="nav-item"><a href="{{ url('kraft-boxes') }}">Kraft Boxes</a></li>
            <li class="nav-item"><a href="{{ url('kraft-cupcake-boxes') }}">Kraft Cupcake Boxes</a></li>
            <li class="nav-item"><a href="{{ url('kraft-jewelry-boxes') }}">Kraft Jewelry Boxes</a></li>
            <li class="nav-item"><a href="{{ url('kraft-gift-boxes') }}">Kraft Gift Boxes</a></li>
            <li class="nav-item"><a href="{{ url('kraft-soap-boxes') }}">Kraft Soap Boxes</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown_second_inner"><a href="{{ url('rigid-box-packaging') }}">Rigid Boxes<i
              class="fa fa-caret-right" aria-hidden="true"></i></a>
          <ul class="deropdown_second_sub">
            <li class="nav-item"><a href="{{ url('rigid-boxes') }}">Rigid Boxes</a></li>
            <li class="nav-item"><a href="{{ url('white-rigid-boxes') }}">White Rigid Boxes</a></li>
            <li class="nav-item"><a href="{{ url('rigid-paper-boxes') }}">Rigid Paper Boxes</a></li>
            <li class="nav-item"><a href="{{ url('invitation-boxes') }}">Invitation Boxes</a></li>
            <li class="nav-item"><a href="{{ url('small-rigid-boxes') }}">Small Rigid Boxes</a></li>
            <li class="nav-item"><a href="{{ url('rigid-invitation-boxes') }}">Rigid Invitation Boxes</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown_second_inner"><a href="{{ url('holographic-stock-card-boxes') }}">Holographic
            Stock/Card Boxes <i class="fa fa-caret-right" aria-hidden="true"></i></a>
          <ul class="deropdown_second_sub">
            <li class="nav-item"><a href="{{ url('holographic-foiling-boxes') }}">Holographic Foiling Boxes</a></li>
          </ul>
        </li>
        <li class="nav-item"><a href="{{ url('bux-board-boxes') }}">Bux board Boxes</a>
        </li>
      </ul>
    </li>
    <li class="nav-item dropdown_second_open"><a href="{{ url('shapes-and-styles') }}">Shapes & Styles</a>
      <ul class="deropdown_second">
        <li class="nav-item dropdown_second_inner"><a href="{{ url('custom-bags') }}">Custom Bags<i
              class="fa fa-caret-right" aria-hidden="true"></i></a>
          <ul class="deropdown_second_sub">
            <li class="nav-item"><a href="{{ url('mylar-bags') }}">Mylar Bags</a></li>
            <li class="nav-item"><a href="{{ url('ziplock-paper-bags-with-windows') }}">Ziplock Paper Bags</a></li>
            <li class="nav-item"><a href="{{ url('zip-lock-paper-bags') }}">Zip Lock Paper Bags</a></li>
            <li class="nav-item"><a href="{{ url('cookie-bags') }}">Cookie Bags</a></li>
            <li class="nav-item"><a href="{{ url('food-gable-bag') }}">Food Gable Bag</a></li>
            <li class="nav-item"><a href="{{ url('custom-paper-bags') }}">Custom Paper Bags</a></li>
            <li class="nav-item"><a href="{{ url('paper-grocery-bags') }}">Paper Grocery Bags</a></li>
            <li class="nav-item"><a href="{{ url('consumer-gable-bag-tuck-end') }}">Consumer Gable Bag</a></li>
            <li class="nav-item"><a href="{{ url('gift-bags') }}">Gift Bags</a></li>
            <li class="nav-item"><a href="{{ url('tshirt-bags') }}">Tshirt bags</a></li>
            <li class="nav-item"><a href="{{ url('brown-paper-bags-wholesale') }}">Brown Paper Bags</a></li>
            <li class="nav-item"><a href="{{ url('white-paper-bags') }}">White Paper Bags</a></li>
            <li class="nav-item"><a href="{{ url('meal-packaging-bags') }}">Meal Packaging Bags</a></li>
            <li class="nav-item"><a href="{{ url('kraft-bags') }}">Kraft Bags </a></li>
          </ul>
        </li>
        <li class="nav-item dropdown_second_inner"><a href="{{ url('display-box-packaging') }}">Display Boxes<i
              class="fa fa-caret-right" aria-hidden="true"></i></a>
          <ul class="deropdown_second_sub">
            <li class="nav-item"><a href="{{ url('cbd-display-boxes') }}">CBD Display Boxes</a></li>
            <li class="nav-item"><a href="{{ url('double-wall-tuck-top-boxes') }}">Double Wall Tuck Top</a></li>
            <li class="nav-item"><a href="{{ url('custom-display-boxes') }}">Custom Display Boxes</a></li>
            <li class="nav-item"><a href="{{ url('counter-display-boxes') }}">Counter Display Boxes</a></li>
            <li class="nav-item"><a href="{{ url('display-boxes') }}">Display Boxes</a></li>
            <li class="nav-item"><a href="{{ url('health-counter-display-boxes') }}">Health Counter Display</a></li>
            <li class="nav-item"><a href="{{ url('candy-display-boxes') }}">Candy Display Boxes</a></li>
            <li class="nav-item"><a href="{{ url('food-counter-display-boxes') }}">Food Counter Display Boxes</a></li>
            <li class="nav-item"><a href="{{ url('auto-bottom-counter-display-toy-boxes') }}">Counter Display Toy
                Boxes</a></li>
            <li class="nav-item"><a href="{{ url('pharmaceutical-display-boxes') }}">Pharmaceutical Display Boxes</a>
            </li>
            <li class="nav-item"><a href="{{ url('clear-lid-boxes') }}">Clear Lid Boxes</a></li>
            <li class="nav-item"><a href="{{ url('display-lid-boxes') }}">Display Lid Boxes</a></li>
            <li class="nav-item"><a href="{{ url('pop-up-display-boxes') }}">Pop up Display Boxes</a></li>
            <li class="nav-item"><a href="{{ url('display-toy-boxes') }}">Display Toy Boxes</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown_second_inner"><a href="{{ url('mailer-box-packaging') }}">Mailer Boxes<i
              class="fa fa-caret-right" aria-hidden="true"></i></a>
          <ul class="deropdown_second_sub">
            <li class="nav-item"><a href="{{ url('mailer-boxes') }}">Mailer Boxes</a></li>
            <li class="nav-item"><a href="{{ url('poly-bubble-mailers') }}">Poly Bubble Mailers</a></li>
            <li class="nav-item"><a href="{{ url('kraft-mailer-boxes') }}">Kraft Mailer Boxes</a></li>
            <li class="nav-item"><a href="{{ url('tuck-top-mailer-boxes') }}">Tuck top Mailer Boxes</a></li>
            <li class="nav-item"><a href="{{ url('luxury-mailer-boxes') }}">Luxury Mailer Boxes</a></li>
            <li class="nav-item"><a href="{{ url('bubble-mailers') }}">Bubble Mailers</a></li>
            <li class="nav-item"><a href="{{ url('custom-mailer-boxes') }}">Custom Mailer Boxes</a></li>
            <li class="nav-item"><a href="{{ url('ear-lock-mailer-box') }}">Ear Lock Mailer Box</a></li>
            <li class="nav-item"><a href="{{ url('sleeved-mailer-boxes') }}">Sleeved Mailer boxes</a></li>
            <li class="nav-item"><a href="{{ url('vinyl-record-mailers') }}">Vinyl Record Mailers</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown_second_inner"><a href="{{ url('shipping-and-delivery') }}">Shipping And Delivery<i
              class="fa fa-caret-right" aria-hidden="true"></i></a>
          <ul class="deropdown_second_sub">
            <li class="nav-item"><a href="{{ url('white-shipping-boxes') }}">White Shipping Boxes</a></li>
            <li class="nav-item"><a href="{{ url('chinese-takeout-boxes') }}">Chinese Takeout Boxes</a></li>
            <li class="nav-item"><a href="{{ url('fast-food-takeout-boxes') }}">Fast Food Takeout Boxes</a></li>
            <li class="nav-item"><a href="{{ url('takeout-boxes') }}">Takeout Boxes</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown_second_inner"><a href="{{ url('gable-packaging') }}">Gable Bags and Boxes<i
              class="fa fa-caret-right" aria-hidden="true"></i></a>
          <ul class="deropdown_second_sub">
            <li class="nav-item"><a href="{{ url('gable-boxes') }}">Gable Boxes</a></li>
            <li class="nav-item"><a href="{{ url('blue-gable-boxes') }}">Blue Gable Boxes</a></li>
            <li class="nav-item"><a href="{{ url('cardboard-gable-boxes') }}">Cardboard Gable Boxes</a></li>
            <li class="nav-item"><a href="{{ url('gable-boxes-bulk') }}">Gable Boxes Bulk</a></li>
            <li class="nav-item"><a href="{{ url('gable-boxes-with-window') }}">Gable Boxes With Window</a></li>
            <li class="nav-item"><a href="{{ url('handle-boxes') }}">Handle Boxes</a></li>
            <li class="nav-item"><a href="{{ url('gift-gable-boxes') }}">Gift Gable Boxes</a></li>
            <li class="nav-item"><a href="{{ url('red-gable-boxes') }}">Red Gable Boxes</a></li>
            <li class="nav-item"><a href="{{ url('wedding-gable-boxes') }}">Wedding Gable Boxes</a></li>
            <li class="nav-item"><a href="{{ url('white-gable-boxes') }}">White Gable Boxes</a></li>
            <li class="nav-item"><a href="{{ url('gift-gable-bag-auto-bottom-boxes') }}">Gift Gable Bag</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown_second_inner"><a href="{{ url('tuck-boxes') }}">Tuck Boxes<i
              class="fa fa-caret-right" aria-hidden="true"></i></a>
          <ul class="deropdown_second_sub">
            <li class="nav-item"><a href="{{ url('tuck-top-boxes') }}">Tuck Top Boxes</a></li>
            <li class="nav-item"><a href="{{ url('reverse-tuck-end-boxes') }}">Reverse Tuck end boxes</a></li>
            <li class="nav-item"><a href="{{ url('straight-tuck-end-box') }}">Straight Tuck End Box</a></li>
            <li class="nav-item"><a href="{{ url('roll-end-tuck-boxes') }}">Roll End Tuck Boxes</a></li>
            <li class="nav-item"><a href="{{ url('snap-lock-bottom-boxes') }}">Snap Lock Bottom Boxes</a></li>
            <li class="nav-item"><a href="{{ url('automobile-tuck-end') }}">Automobile Tuck end</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown_second_inner"><a href="{{ url('pillow-box-packaging') }}">Pillow Boxes<i
              class="fa fa-caret-right" aria-hidden="true"></i></a>
          <ul class="deropdown_second_sub">
            <li class="nav-item"><a href="{{ url('food-pillow-boxes') }}">Food Pillow Boxes</a></li>
            <li class="nav-item"><a href="{{ url('pillow-boxes') }}">Pillow Boxes</a></li>
            <li class="nav-item"><a href="{{ url('gift-pillow-box') }}">Gift Pillow Box</a></li>
            <li class="nav-item"><a href="{{ url('pillow-candy-boxes') }}">Pillow Candy Boxes</a></li>
            <li class="nav-item"><a href="{{ url('apparel-pillow-boxes') }}">Apparel Pillow Boxes</a></li>
            <li class="nav-item"><a href="{{ url('kraft-pillow-boxes') }}">Kraft Pillow Boxes</a></li>
            <li class="nav-item"><a href="{{ url('luxury-pillow-boxes') }}">Luxury Pillow Boxes</a></li>
            <li class="nav-item"><a href="{{ url('pillow-boxes-with-window') }}">Pillow Boxes with Window</a></li>
            <li class="nav-item"><a href="{{ url('cardboard-pillow-boxes') }}">Cardboard Pillow Boxes</a></li>
            <li class="nav-item"><a href="{{ url('christmas-pillow-boxes') }}">Christmas Pillow Boxes</a></li>
            <li class="nav-item"><a href="{{ url('paper-pillow-box') }}">Paper Pillow Box</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown_second_inner"><a href="{{ url('window-box-packaging') }}">Window Boxes<i
              class="fa fa-caret-right" aria-hidden="true"></i></a>
          <ul class="deropdown_second_sub">
            <li class="nav-item"><a href="{{ url('soap-boxes-with-window') }}">Soap Boxes with Window</a></li>
            <li class="nav-item"><a href="{{ url('window-boxes') }}">Window Boxes</a></li>
            <li class="nav-item"><a href="{{ url('pillow-boxes-with-window') }}">Pillow Boxes with Window</a></li>
            <li class="nav-item"><a href="{{ url('pillow-boxes-with-window') }}">pillow-boxes-with-window</a></li>
            <li class="nav-item"><a href="{{ url('gable-boxes-with-window') }}">Gable Boxes With Window</a></li>
            <li class="nav-item"><a href="{{ url('cbd-window-boxes') }}">CBD Window Boxes</a></li>
            <li class="nav-item"><a href="{{ url('candle-boxes-with-window') }}">Candle Boxes with Window</a></li>
            <li class="nav-item"><a href="{{ url('ziplock-paper-bags-with-windows') }}">Ziplock Paper Bags With
                Windows</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown_second_inner"><a href="{{ url('sleeve-and-tray-packaging') }}">Sleeve and Tray
            Packaging<i class="fa fa-caret-right" aria-hidden="true"></i></a>
          <ul class="deropdown_second_sub">
            <li class="nav-item"><a href="{{ url('soap-packaging-sleeves') }}">Soap Packaging Sleeves</a></li>
            <li class="nav-item"><a href="{{ url('donut-tray-boxes') }}">Donut Tray Boxes</a></li>
            <li class="nav-item"><a href="{{ url('custom-tray-and-sleeve-box') }}">Custom Tray and Sleeve Box</a></li>
            <li class="nav-item"><a href="{{ url('soap-sleeves') }}">Soap Sleeves</a></li>
            <li class="nav-item"><a href="{{ url('gift-sleeve') }}">Gift Sleeve</a></li>
            <li class="nav-item"><a href="{{ url('candle-tray-and-sleeve-box') }}">Candle Tray and Sleeve Box</a></li>
            <li class="nav-item"><a href="{{ url('food-tray-packaging') }}">Food Tray Packaging</a></li>
            <li class="nav-item"><a href="{{ url('cream-butter-sleeve') }}">Cream Butter Sleeve</a></li>
            <li class="nav-item"><a href="{{ url('paper-soap-sleeves') }}">Paper Soap Sleeves</a></li>
            <li class="nav-item"><a href="{{ url('consumer-tray-box') }}">Consumer Tray Box</a></li>
            <li class="nav-item"><a href="{{ url('custom-shrink-sleeves') }}">Custom Shrink Sleeves</a></li>
            <li class="nav-item"><a href="{{ url('custom-tray-boxes') }}">Custom Tray Boxes</a></li>
            <li class="nav-item"><a href="{{ url('sleeve-boxes') }}">Sleeve Boxes</a></li>
            <li class="nav-item"><a href="{{ url('tray-boxes') }}">Tray Boxes</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown_second_inner"><a href="{{ url('subscription-box-packaging') }}">Subscription Box
            Packaging<i class="fa fa-caret-right" aria-hidden="true"></i></a>
          <ul class="deropdown_second_sub">
            <li class="nav-item"><a href="{{ url('candle-subscription-boxes') }}">Candle Subscription Boxes</a></li>
            <li class="nav-item"><a href="{{ url('weed-subscription-box') }}">Weed Subscription Box</a></li>
            <li class="nav-item"><a href="{{ url('chocolate-subscription-box') }}">Chocolate Subscription Box</a></li>
            <li class="nav-item"><a href="{{ url('custom-subscription-boxes') }}">Custom Subscription Boxes</a></li>
            <li class="nav-item"><a href="{{ url('perfume-subscription-boxes') }}">Perfume Subscription Boxes</a></li>
            <li class="nav-item"><a href="{{ url('soap-subscription-boxes') }}">Soap Subscription Boxes</a></li>
            <li class="nav-item"><a href="{{ url('cosmetic-subscription-boxes') }}">Cosmetic Subscription Boxes</a></li>
            <li class="nav-item"><a href="{{ url('cbd-subscription-boxes') }}">CBD Subscription Boxes</a></li>
            <li class="nav-item"><a href="{{ url('stationery-subscription-box') }}">Stationery Subscription Box</a></li>
            <li class="nav-item"><a href="{{ url('golf-subscription-boxes') }}">Golf Subscription Boxes</a></li>
            <li class="nav-item"><a href="{{ url('candy-subscription-boxes') }}">Candy Subscription Boxes</a></li>
            <li class="nav-item"><a href="{{ url('food-subscription-box') }}">Food Subscription Box</a></li>
            <li class="nav-item"><a href="{{ url('snack-box-subscription') }}">Snack Box Subscription</a></li>
            <li class="nav-item"><a href="{{ url('mystery-subscription-box') }}">Mystery Subscription Box</a></li>
            <li class="nav-item"><a href="{{ url('art-subscription-boxes') }}">Art Subscription Boxes</a></li>
            <li class="nav-item"><a href="{{ url('gaming-subscription-box') }}">Gaming Subscription Box</a></li>
            <li class="nav-item"><a href="{{ url('sports-subscription-boxes') }}">Sports Subscription Boxes</a></li>
            <li class="nav-item"><a href="{{ url('disney-subscription-box') }}">Disney Subscription Box</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown_second_inner"><a href="{{ url('custom-shapes') }}">Custom Shapes<i
              class="fa fa-caret-right" aria-hidden="true"></i></a>
          <ul class="deropdown_second_sub">
            <li class="nav-item"><a href="{{ url('hexagon-boxes') }}">Hexagon Boxes</a></li>
            <li class="nav-item"><a href="{{ url('octagon-box') }}">Octagon Box</a></li>
            <li class="nav-item"><a href="{{ url('custom-pyramid-boxes') }}">Custom Pyramid Boxes</a></li>
            <li class="nav-item"><a href="{{ url('square-boxes') }}">Square Boxes</a></li>
            <li class="nav-item"><a href="{{ url('triangle-box') }}">Triangle Box</a></li>
            <li class="nav-item"><a href="{{ url('cube-boxes') }}">Cube Boxes</a></li>
            <li class="nav-item"><a href="{{ url('food-hexagon-boxes') }}">Food Hexagon Boxes</a></li>
            <li class="nav-item"><a href="{{ url('gift-hexagon-boxes') }}">Gift Hexagon Boxes</a></li>
            <li class="nav-item"><a href="{{ url('cosmetic-hexagon-boxes') }}">Cosmetic Hexagon Boxes</a></li>
            <li class="nav-item"><a href="{{ url('auto-lock-boxes') }}">Auto Lock Boxes</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="nav-item"><a href="{{ url('our-portfolio') }}">Our Portfolio</a></li>
    <li class="nav-item"><a href="/blog">Packaging News</a></li>
    <li class="nav-item"><a href="{{ url('premium-finishes') }}">Premium Finishes</a></li>
    <li class="search-ico"><i class="fa fa-search" aria-hidden="true"></i></li>
    </ul>
    <div id="search-bar" class="">
      <div class="container">
        <form class="form-inline">
          <input class="form-control mr-sm-2" id="keyword" autocomplete="off" type="search" placeholder="Search..."
            aria-label="Search" name="search">
          <div class="result"></div>
        </form>
      </div>
    </div>
    </div>
    </div>
    <div class="mobile-menu">
      <a class="navbar-brand" href="/">
        <img src="{{cdn('frontend')}}/images/hpp-logo.webp" alt="Half price packaging logo">
      </a>
      <!-- Sidebar Holder -->
      <nav id="sidebar">
        <div id="dismiss">
          <i class="fa fa-times"></i>
        </div>
        <div class="head-btn-st">
          <a href="javascript:;" class="get-started popup-btn btn-ani white">
            Get A Quote</a>
          <a href="javascript:;" class="get-started popup-btn btn-ani black">
            Request Call Back</a>
        </div>
        <!--<div id="search-bar">-->
        <!--  <div class="container">-->
        <!--    <form class="form-inline">-->
        <!--      <input class="form-control mr-sm-2" id="keyword" autocomplete="off" type="search" placeholder="Search..." aria-label="Search" name="search">-->
        <!--      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>-->
        <!--    </form>-->
        <!--  </div>-->
        <!--</div>-->
        <ul class="nav nav-pills flex-column">

          <li class="nav-item">
            <a href="javascript:;">Box by Industry</a>
            <a href="#!" class="menu-arrow collapsed" data-toggle="collapse" data-target="#submenu66"
              aria-expanded="false">
              <i class="fa fa-angle-down"></i>
            </a>
            <div class="collapse" id="submenu66" aria-expanded="false" role="submenu" style="">
              <ul class="flex-column nav">
                <li class="nav-item"><a href="{{ url('automotive-and-hardware-packaging') }}"
                    class="nav-link">Automotive and Hardware Packaging</a></li>
                <li class="nav-item"><a href="{{ url('bakery-food-and-beverage-packaging') }}" class="nav-link">Bakery,
                    Food & Beverage Packaging</a></li>
                <li class="nav-item"><a href="{{ url('business-essentials') }}" class="nav-link">Business Essentials</a>
                </li>
                <li class="nav-item"><a href="{{ url('material-style-and-shape-packaging') }}"
                    class="nav-link">Material, Style and Shape Packaging</a></li>
                <li class="nav-item"><a href="{{ url('cbd-and-tobacco-packaging') }}" class="nav-link">CBD and Tobacco
                    Packaging</a></li>
                <li class="nav-item"><a href="{{ url('healthcare-and-pharma-packaging') }}" class="nav-link">Healthcare
                    and Pharma Packaging</a></li>
                <li class="nav-item"><a href="{{ url('fashion-retail-and-electronics-packaging') }}"
                    class="nav-link">Fashion, Retail & Electronics Packaging</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a href="{{ url('shapes-and-styles') }}">Shapes and Style</a>
            <a class="menu-arrow collapsed" href="#!" data-toggle="collapse" data-target="#submenu6"
              aria-expanded="false">
              <i class="fa fa-angle-down"></i>
            </a>
            <div class="collapse" id="submenu6" aria-expanded="false" role="submenu" style="">
              <ul class="flex-column nav">
                <li class="nav-item">
                  <a href="{{ url('custom-bags') }}" class="nav-link">Custom Bags</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('display-box-packaging') }}" class="nav-link">Display Boxes</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('mailer-box-packaging') }}" class="nav-link">Mailer Boxes</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('shipping-and-delivery') }}" class="nav-link">Shipping and Delivery</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('gable-packaging') }}" class="nav-link">Gable Boxes</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('tuck-boxes') }}" class="nav-link">Tuck Boxes</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('pillow-box-packaging') }}" class="nav-link">Pillow Boxes</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('window-box-packaging') }}" class="nav-link">Window Boxes</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('custom-shapes') }}" class="nav-link">Custom Shapes</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('sleeve-and-tray-packaging') }}" class="nav-link">Sleeve and tray Packaging</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('subscription-box-packaging') }}" class="nav-link">Subscription Box Packaging</a>
                </li>
              </ul>
            </div>
          </li>
          <li><a href="{{ url('box-by-material') }}">Box by Material</a></li>
          <li><a href="{{ url('business-essentials') }}">Business Essentials</a></li>
          <li><a href="{{ url('our-portfolio') }}">Our Portfolio</a></li>
          <li><a href="{{ url('premium-finishes') }}">Premium Finishes</a></li>
          <li><a href="/blog">Packaging News</a></li>
        </ul>
        <div class="head-link-num-em">
          <a href="tel:866-225-2112"><i class="fa fa-phone-square" aria-hidden="true"></i> 866-225-2112</a>
          <a href="mailto:orders@halfpricepackaging.com"><i class="fa fa-envelope-square" aria-hidden="true"></i>
            orders@halfpricepackaging.com</a>
        </div>
        <div class="social-link">
          <ul>
            <li><a href="https://www.facebook.com/halfpricepackaging" target="_blank"><i class="fa fa-facebook"
                  aria-hidden="true"></i></a></li>
            <li><a href="https://twitter.com/halfpricepacka1" target="_blank"><i class="fa fa-twitter"
                  aria-hidden="true"></i></a></li>
            <li><a href="https://www.instagram.com/halfpricepackaging/" target="_blank"><i class="fa fa-instagram"
                  aria-hidden="true"></i></a></li>
            <li><a href="https://www.linkedin.com/company/halfpricepackaging" target="_blank"><i class="fa fa-linkedin"
                  aria-hidden="true"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCtGFbR-weWi7z18bB_YmGfA" target="_blank"><i
                  class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
          </ul>
        </div>
        <div class="hd-logo-st">
          <ul>
            <li><a href="https://www.trustpilot.com/review/www.halfpricepackaging.com" data-toggle="tooltip"
                data-placement="bottom" title="&bigstar;&bigstar;&bigstar;&bigstar;&bigstar;Excellent - 4.8"
                target="_blank""><img src=" {{cdn('frontend')}}/images/head-logo/head-logo-1.png"
                alt="half price packaging trustpilot logo"></a></li>
            <li><a href="https://www.bark.com/en/us/company/half-price-packaging/ZwMpK/" data-toggle="tooltip1"
                data-placement="bottom" title="&bigstar;&bigstar;&bigstar;&bigstar;&bigstar;Reviews (55)"
                target="_blank"><img src="{{cdn('frontend')}}/images/head-logo/head-logo-2.png"
                  alt="half price packaging bark logo"></a></li>
            <li><a
                href="https://www.google.com/search?q=half+price+packaging&sxsrf=ALiCzsZM-fdsMbNFCTeTPuOSvy653ziIJw%3A1653824594538&source=hp&ei=UlyTYpbBHpSklwTCmIb4CA&iflsig=AJiK0e8AAAAAYpNqYno26egrlUnJ3LiwMkQFzHGhw2Sz&gs_ssp=eJzj4tVP1zc0zC0vTikwy0o3YLRSNaiwMLBISza3MLFMMzMwTE62tDKoMDcyNDQwMjVNTjU3MDU2SvESyUjMSVMoKMpMTlUoSEzOTkzPzEsHADnpFoE&oq=halfprice&gs_lcp=Cgdnd3Mtd2l6EAEYADINCC4QgAQQxwEQrwEQCjIFCAAQgAQyDQguEIAEEMcBENEDEAoyBwgAEIAEEAoyBQgAEIAEMgUIABCABDIHCAAQgAQQCjILCC4QgAQQxwEQrwEyBwgAEIAEEAoyBwgAEIAEEAo6BAgjECc6CAgAEIAEELEDOggILhCxAxCDAToLCAAQgAQQsQMQgwE6BQguEIAEOgQIABBDOgQILhBDOgoIABCxAxCDARBDOgcILhDUAhBDOgoILhDHARDRAxBDOg0ILhCxAxCDARDUAhBDUABYxRpgxiloAHAAeACAAdgGiAHbGJIBCTItNS4zLjYtMZgBAKABAQ&sclient=gws-wiz"
                data-toggle="tooltip4" data-placement="bottom"
                title="&bigstar;&bigstar;&bigstar;&bigstar;&bigstar;Excellent - 4.6" target="_blank"><img
                  src="{{cdn('frontend')}}/images/head-logo/head-logo-3.png" alt="half price packaging google logo"></a>
            </li>
            <li><a href="https://www.reviews.io/company-reviews/store/halfpricepackaging-com" data-toggle="tooltip1"
                data-placement="bottom" title="&bigstar;&bigstar;&bigstar;&bigstar;&bigstar;Excellent - 4.7"
                target="_blank"><img
                  src="https://www.halfpricepackaging.com/frontend/images/head-logo/56x22-review-logo.png"
                  alt="half price packaging reviews.io logo"></a></li>
          </ul>
        </div>
      </nav>
    </div>
    </div>
    </nav>
    </div>
  </header>
  <script>

    function getCategoryImage(cat_id) {

      $.ajax({
        type: "post",
        url: "{{url('/get-categoryImage')}}",
        data: {
          _token: "{{ csrf_token() }}",
          category_id: cat_id
        },
        dataType: "JSON",
        success: function (result) {
          if (result.collection_image != '') {
            //$('.sub_menu_image').html('<img src={{cdn("storage/cat_uploads/")}}' + '/' + result.cta_image_path + '>');
            var path = result.cta_image_path.split('/')[3];
            //console.log(path);
            $('.sub_menu_image').html('<img style="width: 100%;" src={{cdn("storage/cat_uploads/")}}' + '/' + path + '>');
          } else {
            $('.sub_menu_image').html("<img style='width: 100%;' src={{cdn('frontend/images/navigation_image_sub_category_1.png')}}>");

          }

        }
      });
    }


    function getSubCategoryImage(subcategory_id) {

      $.ajax({
        type: "post",
        url: "{{url('/get-SubcategoryImage')}}",
        data: {
          _token: "{{ csrf_token() }}",
          subcategory_id: subcategory_id
        },
        dataType: "JSON",
        success: function (result) {
          if (result.collection_image != '') {
            //$('.product_menu_image').html('<img src={{cdn("storage/sub_cat_uploads/")}}' + '/' + result.collection_image + '>');
            var path = result.cta_image_path.split('/')[3];
            //console.log(path);
            $('.product_menu_image').html('<img style="width: 100%;" src={{cdn("storage/sub_cat_uploads/")}}' + '/' + path + '>');
          } else {
            $('.product_menu_image').html("<img style='width: 100%;' src={{cdn('frontend/images/navigation_products_image_1.png')}}>");

          }

        }
      });
    }
  </script>