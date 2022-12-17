<?php $page_check = "home";
?>
@extends('frontend.layouts.app')
@section('og_tag_meta')
<meta property="og:title" content="Custom Boxes With Logo | Custom Printing and Packaging Wholesale">
<meta property="og:site_name" content="Half Price Packaging">
<meta property="og:url" content="https://www.halfpricepackaging.com" />
<meta property="og:description" content="Grab exclusive custom box packaging from Half Price Packaging at highly competitive prices. Order our best mailer boxes, rigid boxes, and other types.">
<meta property="og:type" content="website">
<meta property="og:image" content="https://www.halfpricepackaging.com/frontend/images/slider/Olvee-Boxes.webp">
@endsection
@section('content')
<img style="pointer-events: none; position: absolute; top: 0; left: 0; width: 99vw; height: 99vh; max-width: 99vw; max-height: 99vh;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSI5OTk5OXB4IiBoZWlnaHQ9Ijk5OTk5cHgiIHZpZXdCb3g9IjAgMCA5OTk5OSA5OTk5OSIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48ZyBzdHJva2U9Im5vbmUiIGZpbGw9Im5vbmUiIGZpbGwtb3BhY2l0eT0iMCI+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9Ijk5OTk5IiBoZWlnaHQ9Ijk5OTk5Ij48L3JlY3Q+IDwvZz4gPC9zdmc+" alt="half price packaging home page">
<section class="main-banner">
  <div class="pic-wrapper">
    <figure class="pic-1" ></figure>
    <!--<figure class="pic-2"></figure>
    <figure class="pic-3"></figure>
    <figure class="pic-4"></figure>-->
  </div>
  <div class="container home-slider">
    <div class="row">
      <div class="col-sm-12">
        <div class="bnr-txt">
          <h5 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s"></h5>
          <h2 class="wow fadeInUp">Fastest growing<br> custom packaging <br>company in Silicon Valley</h2>
          
          <h5 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">25+ Years of Excellence</h5>
          <!-- <hr class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s"> -->
          <div class="bnr-btn-st d-flex-left wow fadeInUp">
            <a href="javascript:;" class="get-started popup-btn btn-ani white">
              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              Request for Quote</a>
            <a href="javascript:;" onclick="toggleChat();" class="live-cht chats btn-ani chat">
              <i class="fa fa-weixin" aria-hidden="true"></i>
              Talk to an Expert</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@include("frontend/includes/logo-slider")

<section class="fea-product">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="hd-txt">
          <h1 class="wow fadeInUp customh1">OUR POPULAR PRODUCTS</h1>
          <h4 class="wow fadeInUp">WE CREATE THE PERFECT CUSTOM PACKAGING FOR YOUR SUCCESS</h4>
          <hr class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
          <p class="wow fadeInUp">Our Online Creative and Support Team Allows You to Order Custom Boxes with Specific Design Requirements. Half Price Packaging Offers Wide Assortment of Custom Boxes to Choose From </p>
        </div>
      </div>
      <div class="col-sm-12 p0 fea-box-col">
        <div class="col-sm-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0s">
          <div class="fea-box">
            <!-- <div class="fea-box-ani"> -->
              
            <div >
              <a href="cosmetic-boxes"><img loading="lazy" src="{{cdn('frontend')}}/images/fea-pro/cosmetic-boxes.jpg" alt="Cosmetic Boxes"></a>
            </div>
            <h4><a href="cosmetic-boxes">Cosmetic Boxes</a></h4>
          </div>
        </div>
        <div class="col-sm-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s">
          <div class="fea-box">
            <div >
              <a href="mailer-boxes"><img loading="lazy" src="{{cdn('frontend')}}/images/fea-pro/mailer-boxes.jpg" alt="Mailer Boxes"></a>
            </div>
            <h4><a href="mailer-boxes">Mailer Boxes</a></h4>
          </div>
        </div>
        <div class="col-sm-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s">
          <div class="fea-box">
            <div >
              <a href="candle-boxes"><img loading="lazy" src="{{cdn('frontend')}}/images/fea-pro/candle-boxes.jpg" alt="Candle Boxes"></a>
            </div>
            <h4><a href="candle-boxes">Candle Boxes</a></h4>
          </div>
        </div>
        <div class="col-sm-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s">
          <div class="fea-box">
            <div >
              <a href="soap-boxes"><img loading="lazy" src="{{cdn('frontend')}}/images/fea-pro/soap-boxes.jpg" alt="Soap Boxes"></a>
            </div>
            <h4><a href="soap-boxes">Soap Boxes</a></h4>
          </div>
        </div>
        <div class="col-sm-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s">
          <div class="fea-box">
            <div >
              <a href="display-boxes"><img loading="lazy" src="{{cdn('frontend')}}/images/fea-pro/custom-product-display-boxes.jpg" alt="Display Boxes"></a>
            </div>
            <h4><a href="display-boxes">Display Boxes</a></h4>
          </div>
        </div>
        <div class="col-sm-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s">
          <div class="fea-box">
            <div >
              <a href="beverage-box"><img loading="lazy" src="{{cdn('frontend')}}/images/fea-pro/bevarage-boxes.jpg" alt="Beverage Boxes"></a>
            </div>
            <h4><a href="beverage-box">Beverage Boxes</a></h4>
          </div>
        </div>
        <div class="col-sm-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s">
          <div class="fea-box">
            <div >
              <a href="eco-friendly-boxes"><img loading="lazy" src="{{cdn('frontend')}}/images/fea-pro/ecofriendly-boxes.jpg" alt="Ecofriendly Boxes"></a>
            </div>
            <h4><a href="eco-friendly-boxes">Eco Friendly Boxes</a></h4>
          </div>
        </div>
        <div class="col-sm-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s">
          <div class="fea-box">
            <div >
              <a href="gift-boxes"><img loading="lazy" src="{{cdn('frontend')}}/images/fea-pro/gift-boxes.jpg" alt="Gift Boxes"></a>
            </div>
            <h4><a href="gift-boxes">Gift Boxes</a></h4>
          </div>
        </div>
        <div class="col-sm-3 hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s">
          <div class="fea-box">
            <div >
              <a href="tuck-boxes"><img loading="lazy" src="{{cdn('frontend')}}/images/fea-pro/tuck-boxes.jpg" alt="Tuck Boxes"></a>
            </div>
            <h4><a href="tuck-boxes">Tuck Boxes</a></h4>
          </div>
        </div>
        <div class="col-sm-3 hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s">
          <div class="fea-box">
            <div >
              <a href="cbd-boxes"><img loading="lazy" src="{{cdn('frontend')}}/images/fea-pro/cbd-boxes.jpg" alt="CBD Boxes"></a>
            </div>
            <h4><a href="cbd-boxes">CBD Boxes</a></h4>
          </div>
        </div>
        <div class="col-sm-3 hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s">
          <div class="fea-box">
            <div >
              <a href="rigid-boxes"><img loading="lazy" src="{{cdn('frontend')}}/images/fea-pro/rigid-boxes.jpg" alt="Rigid Boxes"></a>
            </div>
            <h4><a href="rigid-boxes">Rigid Boxes</a></h4>
          </div>
        </div>
        <div class="col-sm-3 hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s">
          <div class="fea-box">
            <div >
              <a href="mylar-bags"><img loading="lazy" src="{{cdn('frontend')}}/images/fea-pro/mylar-bag.jpg" alt="Mylar Bags"></a>
            </div>
            <h4><a href="mylar-bags">Mylar Bags</a></h4>
          </div>
        </div>
        <div class="col-sm-3 hidden wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s">
          <div class="fea-box">
            <div >
              <a href="tincture-boxes"><img loading="lazy" src="{{cdn('frontend')}}/images/fea-pro/tincture-boxes.jpg" alt="Tincture Boxes"></a>
            </div>
            <h4><a href="tincture-boxes">Tincture Boxes</a></h4>
          </div>
        </div>
        <div class="col-sm-3 hidden wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s">
          <div class="fea-box">
            <div >
              <a class="fancybox" href="window-boxes"><img loading="lazy" src="{{cdn('frontend')}}/images/fea-pro/window-boxes.jpg" alt="Window Boxes"></a>
            </div>
            <h4><a href="window-boxes">Window Boxes</a></h4>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>


<section class="port-product">
  <div class="container-fluid">
    <div class="row">

      <div class="col-sm-12">
        <div class="hd-txt">
          <h2 class="wow fadeInUp">Custom packaging for Bonbon NYC</h2>
          <h4 class="wow fadeInUp">Luxury Treats wrapped in Custom Packaging with love from Half Price Packaging For Bonbon NYC!</h4>
          <br>
          <iframe style="aspect-ratio: 16/9; width: 80%;"  src="https://www.youtube.com/embed/GmDOvGXpUTA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         
          
        </div>
      </div>
     

    </div>
  </div>
</section>
<!-- 
<section class="port-product">
  <div class="container-fluid">
    <div class="row">

      <div class="col-sm-12">
        <div class="hd-txt">
          <h2 class="wow fadeInUp">Premium Finishes</h2>
          <h4 class="wow fadeInUp">Variety of Finishing Options to Ensure Spectacular Looks and Premium Feel of Custom Boxes</h4>
          <hr class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
          <p class="wow fadeInUp hidden">Custom Packaging is All About the Finish Quality. Laminations are like an Icing on the Cake and Necessary to Exude and Enhance the Aesthetic Appeal of Custom Boxes <br>

            Fortunately, At Half Price Packaging, we provide You with the Best Finishes, Laminations, and Coatings under one Roof and with a Single Click. <br>
            Our Premium Fabrication Options increase the Value of your Packaging and make it Profoundly Distinctive</p>
        </div>
      </div>
      <div class="col-sm-12 p0">
        <div class="port-img-ul">
          <ul>
            <li class="port-img-1-st" style="width: 90%;">
              <div class="port-bx port-1 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0s">
                <a href="premium-finishes#section_one"><img loading="lazy" src="{{cdn('frontend')}}/images/premium-finishes/home/prem.webp">
                  <div class="overlay-box">
                    <h3>Premium Finishes</h3>
                  </div>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
		<div class="col-12 text-center" style="width: 100%;">
          <a href="javascript:;" class="get-started popup-btn btn-ani white" style="margin-top: 20px !important;"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Request for Quote</a>
        </div>
    

    </div>
  </div>
</section> -->

<section>
<div class="container" >
    <div class="row">
      <div class="col-sm-12">
       <div class="hd-txt">
          <h2 class="wow fadeInUp">Half Price Packaging, Where Quality Meets Affordability</h2>

          <hr class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
        </div>
        <div class="tabs">

          <div class="tab">
            <button id="defaultOpen" class="tablinks" onclick="openCity(event, 't-one')">Cost saving</button>
            <button class="tablinks" onclick="openCity(event, 't-two')">Time-saving</button>
            <button class="tablinks" onclick="openCity(event, 't-three')">Reliability</button>
            <button class="tablinks" onclick="openCity(event, 't-four')">Brand Impact</button>
            <button class="tablinks" onclick="openCity(event, 't-five')">sustainability</button>
          </div>

          <!-- Tab content -->
          <div id="t-one" class="tabcontent">
            <h3 class="review-headline">50% cost minimization with the use of simple and structured shipping routes</h3>
            <p class="review-content">All hail half-price packaging! We were able to save a hefty amount of shipping costs due to their optimized, structured and well-managed shipping routes. As a result of the company's timely shipping, we were able to save material costs and reduce our operational costs of putting the products in the warehouse. Which was a very favorable deal for us. </p>
            <p class="review-author">Joanna Smith CEO & Founder of Saga Innovations</p>
            
          </div>

          <div id="t-two" class="tabcontent">
            <h3 class="review-headline">Behold! 40% time saved because of the properly managed supply chain </h3>
            <p class="review-content">We were able to save an ample amount of time as Half Price Packaging managed our entire packaging supply chain. We utilized this time focusing entirely on our customers and hence saw massive growth. We are thankful to the company for providing an efficient and hassle-free delivery process. </p>
            <p class="review-author">Chloe Kurtis CEO of Mighty Mule </p>
          </div>

          <div id="t-three" class="tabcontent">
            <h3 class="review-headline">Increased consistency through stringent quality control</h3>
            <p class="review-content">We are confident in the brand's reliability because of the meticulous quality control offered. Not only that, the cherry on top is their helpful customer service, which makes communication very easy and convenient. Thanks to the rigorous quality control of Half Price Packaging, it has helped in the production of better-quality products that have greatly impressed our consumers.</p>
            <p class="review-author">Alex Hawkman Founder of Click Inc. </p>
          </div>

          <div id="t-four" class="tabcontent">
            <h3 class="review-headline">50% increase in revenue due to the one-of-a-kind products and structural redesign</h3>
            <p class="review-content">Our rebranding has been smooth, thanks to the team at Half Price Packaging. We appreciate the designer who assisted us in revamping our website and turning it into a unique selling point. It has helped us gain a competitive edge, resulting in increased sales and positive customer feedback</p>
            <p class="review-author">Noah Jack Ceo & Founder of Volume 9 s</p>
          </div>

          <div id="t-five" class="tabcontent">
            <h3 class="review-headline">50% less wastage and increased sustainability with structural engineering </h3>
            <p class="review-content">We believe in minimum waste and the sustainability of our products, which is exactly what Half Price Packaging helped us achieve. Not only that, but they effectively reduced our shipping frequency and assisted us in reducing product waste to meet our aim of reducing carbon emissions!</p>
            <p class="review-author">Alfie Theodore CEO of The Growth CO.</p>
          </div>

        </div>
      </div>
    </div>
</div>

</section>

<script>
function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>

<section class="why-sec r-c-before">
  <div class="container-fluid">
    <div class="row">

      <div class="col-sm-12">
        <div class="hd-txt">
          <h2 class="wow fadeInUp">Why Choose Us?</h2>
          <h4 class="wow fadeInUp">Accomplish Your Business Goals with Our Superior Service</h4>
          <hr class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
        </div>
      </div>

      <div class="col-sm-12 p0 why-chose-us-flex">
        <div class="col-sm-4">
          
          <div class="why-box">
            <div class="why-hd-txt wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0s">
              <img loading="lazy" class="wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s" src="{{asset('frontend')}}/images/globe.png" alt="half price packaging globe icon">

              <h2 class="wow fadeInLeft wb" data-wow-duration="0.8s" data-wow-delay="0.1s">Global Sourcing</h2>
            </div>
            <p class="wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.5s">Select the most suitable and valuable design requirements that include layout, style, size, color, and artwork
            </p>
          </div>
          
          <div class="why-box">
            <div class="why-hd-txt wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0s">
              <img loading="lazy" class="wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s" src="{{asset('frontend')}}/images/head-logo/modren-design.png" alt="half price packaging modern design icon">

              <h2 class="wow fadeInLeft wb" data-wow-duration="0.8s" data-wow-delay="0.1s">Modern Design and Dimensions</h2>
            </div>
            <p class="wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.5s">Select the most suitable and valuable design requirements that include layout, style, size, color, and artwork
            </p>
          </div>
          <div class="why-box">
            <div class="why-hd-txt wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0s">
              <img loading="lazy" class="wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s" src="{{cdn('frontend')}}/images/head-logo/no-extra.png" alt="half price packaging no extra icon">
              <h2 class="wow fadeInLeft wb" data-wow-duration="0.8s" data-wow-delay="0.1s">No Extra Charge</h2>
            </div>
            <p class="wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.5s">Get truly spectacular custom graphics and artwork without any extra costs.
            </p>
          </div>
          <div class="why-box">
            <div class="why-hd-txt wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0s">
              <img loading="lazy" class="wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s" src="{{cdn('frontend')}}/images/head-logo/Asset 11.png" alt="half price packaging super fast delivery icon">
              <h2 class="wow fadeInLeft wb" data-wow-duration="0.8s" data-wow-delay="0.1s">Super-Fast Delivery </h2>
            </div>
            <p class="wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.5s">We take pride in ensuring fast turnaround and super-fast delivery service on all custom orders
            </p>
          </div>
          <div class="why-box">
            <div class="why-hd-txt wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0s">
              <img loading="lazy" class="wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s" src="{{cdn('frontend')}}/images/head-logo/distinctive-finishes.png" alt="half price packaging distinctive finishes icon">
              <h2 class="wow fadeInLeft wb" data-wow-duration="0.8s" data-wow-delay="0.1s">Distinctive Finishes </h2>
            </div>
            <p class="wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.5s">Get a Wide Assortment of Exclusive Finishes, Laminations, and Coating Under One Roof, One Click, and One Price
            </p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="why-box">
            <div class="why-hd-txt wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0s">
              <img loading="lazy" class="wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s" src="{{cdn('frontend')}}/images/head-logo/market-competitive.png" alt="half price packaging market competitive icon">
              <h2 class="wow fadeInLeft wb" data-wow-duration="0.8s" data-wow-delay="0.1s">Cost-effective Pricing</h2>
            </div>
            <p class="wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.5s">We offer most affordable price of custom packaging with wholesale rates not found anywhere else
            </p>
          </div>
          <div class="why-box">
            <div class="why-hd-txt wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0s">
              <img loading="lazy" class="wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s" src="{{cdn('frontend')}}/images/head-logo/impeccabl-print-quality.png" alt="half price packaging impeccable print quality icon">
              <h2 class="wow fadeInLeft wb" data-wow-duration="0.8s" data-wow-delay="0.1s">Impeccable Print Quality</h2>
            </div>
            <p class="wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.5s">We provide incredible and colorful print quality for your common and elaborate designs
            </p>
          </div>
          <div class="why-box">
            <div class="why-hd-txt wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0s">
              <img loading="lazy" class="wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s" src="{{cdn('frontend')}}/images/head-logo/exclusive-discounts.png" alt="half price packaging exclusive discounts icon">
              <h2 class="wow fadeInLeft wb" data-wow-duration="0.8s" data-wow-delay="0.1s">Exclusive Discounts on Offer</h2>
            </div>
            <p class="wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.5s">Get best printing services with most affordable prices and wholesale rates on bulk orders
            </p>
          </div>
          <div class="why-box">
            <div class="why-hd-txt wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0s">
              <img loading="lazy" class="wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s" src="{{cdn('frontend')}}/images/head-logo/Asset 6.png" alt="half price packaging functional materials icon">
              <h2 class="wow fadeInLeft wb" data-wow-duration="0.8s" data-wow-delay="0.1s">Robust & Functional Materials</h2>
            </div>
            <p class="wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.5s">We are well aware of CSR (Corporate Social Responsibility) and use high-quality eco-friendly packaging materials to ensure a sustainable environment
            </p>
          </div>
        </div>
        

      </div>
      <div class="col-12 text-center" style="width: 100%;">
        <a href="javascript:;" class="get-started popup-btn btn-ani white" style="margin-top: 20px !important;"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Request for Quote</a>
      </div>

    </div>
  </div>
</section>


<section class="form-sec-ftr">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="ftr-form-txt">
          <h2 class="wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.1s">Our 5-Step Order Process</h2>
          <ul class="process-ul-main">
            <li>
              <div class="process-bx pr-m-1 active">
                <h3 class="">Order</h3>
                <p> You can place the custom order directly through our website.</p>
              </div>
            </li>
            <li>
              <div class="process-bx pr-m-1">
                <h3 class="">Design</h3>
                <p>Please choose from our portfolio of custom designs or provide a certain layout, pattern, logo, or artwork.</p>
              </div>
            </li>
            <li>
              <div class="process-bx pr-m-1">
                <h3 class="">Approve</h3>
                <p>You will get an email as a confirmation once you finalize the custom design.</p>
              </div>
            </li>
            <li>
              <div class="process-bx pr-m-1">
                <h3 class="">Production</h3>
                <p>Our team will develop the custom boxes tailor-made to your exclusive designs</p>
              </div>
            </li>
            <li>
              <div class="process-bx pr-m-1">
                <h3 class="">Delivery</h3>
                <p> You will get the order delivered within two weeks after your confirmation</p>
              </div>
            </li>
          </ul>
          <div class="brand-btn-st wow fadeInUp" data-wow-delay="0.4s">
            <a href="tel:866-225-2112" class="get-started  btn-ani white"><i class="fa fa-phone" aria-hidden="true"></i> Call Us Now</a>

            <a href="javascript:;" class="get-started popup-btn btn-ani black">
              <i class="fa fa-plane" aria-hidden="true"></i> Order Now</a>
          </div>

        </div>
      </div>
      <div class="col-sm-2 empty-div-col"></div>
      <div class="col-sm-5 tuck-form-main wow fadeInRight">
        @include("frontend/includes/two-step-quote")

      </div>
    </div>
  </div>
</section>


<section class="testi-sec">
  <div class="container p0">
    <div class="row m0">
      <div class="col-sm-12">

      </div>
      <div class="col-sm-6 faq-clo-st wow fadeInLeft faqmargn" data-wow-duration="0.8s">
        <div class="hd-txt">
          <h2 class="wow fadeInUp">FAQ'S</h2>
          <h4 class="wow fadeInUp">Find Answers to all the Urgent Questions You may have.</h4>
          <hr class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
        </div>

        <div class="accordion ftr-faq-st" id="accordion2">
          <div class="wrapper center-block">
            <div class="panel-group faq-list-st" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading active" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      How do I know what the Final Product will look like?
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    We provide digital proof with a 3D and flat view so that you can make sure how the box will look once its printed and assembled. Then you can make changes as per your requirement. Moreover, we offer physical samples on wholesale purchases for a small fee.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      What is your Standard Turnaround Time?
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    Our standard turnaround time is 8-10 business days after the final approval of your order.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Do you offer Wholesale Prices?
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    Yes, we offer wholesale discounts on bulk purchases.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Can I print Custom Artwork?
                    </a>
                  </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                  <div class="panel-body">
                    Yes, you can have your own artwork printed on the boxes with our advanced custom printing.

                  </div>
                </div>
              </div>


              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      How can I order Custom Boxes?
                    </a>
                  </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                  <div class="panel-body">
                    Ordering your custom boxes with us is just a click away. You can customize your boxes with your own design file. We have an efficient design team that will work on your designs and layout the artwork absolutely free of cost.

                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSix">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      How can I process the Order?
                    </a>
                  </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                  <div class="panel-body">
                    You can process your order in 4 simple steps.
                    <ul>
                      <li>Submit your quote request</li>
                      <li>Send your artwork </li>
                      <li>Approve the digital proof</li>
                      <li>Complete your payment so that your order can be sent for production</li>
                    </ul>

                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSeven">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                      How do I Contact You?
                    </a>
                  </h4>
                </div>
                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                  <div class="panel-body">
                    You can get your queries resolved in the following ways:
                    <ul>
                      <li>Visit our website www.halfpricepackaging.com to have a live chat with our team or book a call.</li>
                      <li>E-mail us at <b><a href="mailto:orders@halfpricepackaging.com">orders@halfpricepackaging.com</a></b> </li>
                      <li>Or contact us at <b><a href="tel:866-225-2112">866-225-2112</a></b></li>

                    </ul>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class=" col-sm-6 faq-clo-st-rt wow fadeInUp" data-wow-duration="0.8s">
        <div class="hd-txt">
          <h2 class="wow fadeInUp">Client Testimonial</h2>
          <h4 class="wow fadeInUp">Get to Know All About Our Service through Various Business Clients.</h4>
          <hr class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
        </div>
        <div>
          <div class="testi-box">
            <img loading="lazy" class="qq" src="{{cdn('frontend')}}/images/qq.png" alt="half price packaging quotes logo">
            <h4>You Said About Us</h4>
            <h3>Top quality service and printing</h3>
            <p>Working with Travis was a great experience. He was on the ball and always got back to me quickly. On top of this, we received high-quality prints at a great price!</p>
            <div class="testi-img-nm">
              <img loading="lazy" src="{{cdn('frontend')}}/images/reviews/boxtan.png" alt="half price packaging boxtan client">
              <div>
                <h4>Braxton Ard</h4>
                <h5>United States</h5>
              </div>
            </div>

            <div class="testi-box">
              <h3>Nick was very helpful!</h3>
              <p>Nick was very helpful!! He was able to create exactly what I wanted. I will continue to use Half Price Packaging in the future!</p>
              <div class="testi-img-nm">
                <img loading="lazy" src="{{cdn('frontend')}}/images/reviews/cynthia.png" alt="half price packaging cynthia client">
                <div>
                  <h4>Cynthia Minnie</h4>
                  <h5>United States</h5>
                </div>
              </div>
            </div>

            <div class="testi-box">
              <h3>5 Star Service</h3>
              <p>Very happy with the service, quality and turn around time from Half Price Packaging. Steve Parker was wonderful to deal with, he is very responsive and nothing is ever too much trouble.I look forward to keeping a healthy, long-term relationship with them.</p>
              <div class="testi-img-nm">
                <img loading="lazy" src="{{cdn('frontend')}}/images/testi-img-1.png" alt="half price packaging krystal client">
                <div>
                  <h4>Krystal Glanville</h4>
                  <h5>Australia</h5>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="testi-trust-logo">
          <a target="_blank" href="https://www.trustpilot.com/review/www.halfpricepackaging.com"><img loading="lazy" src="{{cdn('frontend')}}/images/testi-trust.png" alt="half price packaging trust pilot"></a>
          <a target="_blank" href="https://www.google.com/search?q=half+price+packaging&sxsrf=ALiCzsagnxfrnR5uzV0qnBby6qK5JPHlfA%3A1667214393089&source=hp&ei=OaxfY9e8A6aJlwTW4oD4Dg&iflsig=AJiK0e8AAAAAY1-6STHTn6Ls6EZe00ThMT0OmDApSXrJ&ved=0ahUKEwiXvabNqYr7AhWmxIUKHVYxAO8Q4dUDCAg&uact=5&oq=half+price+packaging&gs_lcp=Cgdnd3Mtd2l6EAMyCgguEMcBEK8BECcyBQgAEIAEMgUIABCABDIGCAAQFhAeMgYIABAWEB4yBggAEBYQHjIFCAAQhgMyBQgAEIYDMgUIABCGAzIFCAAQhgM6BwgjEOoCECc6BAgjECc6CgguEMcBENEDEEM6BAgAEEM6BwguENQCEEM6CAgAELEDEIMBOggIABCABBCxAzoHCAAQyQMQQzoECC4QQzoHCAAQsQMQQzoKCAAQsQMQgwEQQzoKCC4QsQMQgwEQQzoICC4QgAQQsQM6CggAEIAEEIcCEBQ6BQguEIAEOgcIABCABBAKOgsILhCABBDHARCvAToICAAQgAQQyQM6CQgAEBYQHhDJAzoICAAQFhAeEApQAFjaFGDlFWgBcAB4A4ABmAWIAbgwkgEKMi0xMy41LjAuMpgBAKABAbABCg&sclient=gws-wiz"><img loading="lazy" src="{{cdn('frontend')}}/images/testi-google.png" alt="half price packaging google reviews logo"></a>
          <a target="_blank" href="https://www.bark.com/en/us/company/half-price-packaging/ZwMpK/"><img loading="lazy" src="{{cdn('frontend')}}/images/testi-bark.png" alt="half price packaging bark reviews logo"></a>
        </div>
      </div>
    </div>
  </div>
</section>




<section class="blog-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="hd-txt">
          <h2 class="wow fadeInUp">Packaging News & Blog</h2>
          

          <p></p>
          <hr class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
        </div>
      </div>
      <div class="col-sm-12 p0">
        <?php $blogs = getBlogs();  ?>
        @if(!empty($blogs))
        @foreach($blogs as $blog)
        <div class="col-sm-3">
          <div class="blog-box wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0s">
            <div class="blog-tag">
              <!-- <h4>24 July <span>2021</span></h4> -->
            </div>
            <a href="{{URL::to('/blog/' . $blog->slug)}}"> <img loading="lazy" src="https://www.halfpricepackaging.com/assets/post_images/{{$blog->image}}" alt='{{$blog->title}}'> </a>
            <div class="blog-text">
              <h2><a class="white" href="{{URL::to('/blog/' . $blog->slug)}}">{{ $blog->title}}</a></h2>
              <!-- <p>Do you have a great business idea or a rebranding vision that...</p> -->
            </div>
          </div>
        </div>
        @endforeach
        @endif

      </div>
    </div>
  </div>
</section>
@include('frontend/includes/sample-kit-form')


<section class="brand-sec cta-parag brand-sec-product-cta2 brand-sec-hme-pg">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 brnd-sec-bg-st" style="width: 100%;">
        <div class="hd-txt">
          <h2 class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0s">Why Custom Packaging Essential for Your Business</h2>
          <div class="cta-content" class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s" style="height: 320px;">
            We live in a fast-paced world where advancements in technology have allowed people to make informed decisions and better choices. Today, nearly everyone uses a smartphone or laptop to know about consumer products and all other details that will help them make best buying decision.

            In the business sector, due to significant competition, there is a clear shift from product-centric to a customer-centric approach. Another reason for the shift is ambitious entrepreneurs and small-businessmen running their own brands to better serve the customers.
            <br><br>
            We all know the famous 4 Ps of marketing (Product, Price, Place, and Promotion). However, another P that has been added to the mix is Packaging. According to research studies, an average consumer takes less than 20 seconds to make a buying decision. Also, almost <a href="https://www.ipsos.com/en-us/news-polls/Most-Americans-Say-That-the-Design-of-a-Products-Packaging-Often-Influences-Their-Purchase-Decisions" target="_blank">72% of the population</a> says that their buying decision is influenced by the packaging design.
            <br><br>
            The first thing that allows the average consumer to make the purchase decision is none other than the ‘packaging of the product. People usually buy from brands there are familiar with, such as startups, and business companies have to think out of the box to make an impression on potential customers. <br><br>

            <b class="boldsize">The Changing Trends in Packaging Industry</b><br><br>
            Custom packaging is arguably the best solution for startups, e-commerce stores, and small businesses to inspire customers and achieve success. The main emphasis of the custom-centric approach is allowing brands to customize the product according to particular requirements. As a brand, you can manufacture custom boxes which means choosing the size, dimension, shape, theme, color, and material of the product packaging.
            <br><br>
            The goal of customization is to make the products more appealing and attractive to the consumer or end-user and beat the competition. More than <a href="https://dotcomdist.com/2016-ecommerce-packaging-study/" target="_blank">61% of the population</a> is happily willing to make a repeat purchase if it comes in premium packaging. Another growing trend among people, particularly those making Vlogs and running their online video channels, is making Unboxing Videos. The more a social media influencer appreciates the packaging of a product, the more appreciation, and recognition for the brand.
            <br><br>
            Business companies mostly use all the traditional and modern marketing tools to establish themselves and increase sales. <b>Custom box packaging</b> not only secures the product but it is a fantastic tool to market your brand and make it popular among the potential audience.
            <br><br>
            The rapid advancement within the custom packaging industry has given way to custom boxes that can be used to serve various business purposes. For example, boxes can be custom designed according to a certain niche of the market, whether it is Food, Retail, Cosmetic, Fashion, and Healthcare. It is at the business owner's discretion to choose the size, shape, and color of the <b>custom packaging boxes</b>.
            <br><br>
            The stylish and exquisite custom printed boxes can be displayed not only in physical brick and mortar stores but also in online e-commerce stores. But one thing is certain; these custom boxes can be designed to fit nearly all kinds of business needs and also special occasions and events.
            <br><br>


            <b class="boldsize">The Essential Elements of Custom Packaging</b><br><br>
            The main purpose of packaging is to protect the product, but in these modern times, there is added element of branding that is significant for businesses, big or small. Packaging can be the cardboard box that holds a product, or a satchel you can use to mail a product or a shrink wrap that surrounds the product.<br><br>
            For most consumers, the packaging is the first point of view and first point of contact when they see a brand's product in a retail store. As a startup brand or ecommerce store, most customers may not be familiar with the quality and scope of your brand. So, you have to ensure that the product or finished good arrives at the customer in the best shape possible.<br><br>
            So, what are the features of a best shape that can vow the customer and win their approval!!
            The best form of <b>custom packaging</b> is one that includes certain elements such as<br><br>
            An inspiring logo<br>
            Colorful and vibrant artwork<br>
            Quality finish<br>
             Important information or details about the product or its usage<br><br>

            The world we live in is seeing quite a number of uncertainties, whether it is the rising impacts of Global Warming or the spread of pandemics such as the Covid-19. Businesses, big or small, are all vulnerable to the internal and global market situations. Due to increased energy costs and the impending result of using plastic, the businesses, both established and startups, need to revamp their marketing strategy.
            <br><br>
            The first and foremost question that you as a business owner have to ask is<br>

            Does the packaging contain the Name and Logo of your Brand?<br>

            Also, does it have the marketing message that your brand wants to portray to customers?<br>

            In these highly competitive times, more so with the businesses struggling to survive and sustain. You can use custom packaging to attain a competitive edge and market your products.<br><br>

            The modern custom packaging methods allow you to easily market your brand and <b>design custom boxes with a logo</b>.<br><br>

            <b class="boldsize">Why Custom Boxes the Most Practical Branding Tool</b><br><br>

            As a business owner, you need to invest in using sustainable packaging materials that serve to reduce the carbon footprint and overall production cost. In these competitive times <b>half off wholesale boxes</b> is the best solution to attract potential customers and achieve success. <br><br>

            <b>Custom packaging</b> can be one element that you can use to your advantage over the competition. As a business owner, you need to present not only the product but a completely enchanting experience to your target audience. People today look for brands that are offering the best value for money and one they can easily flaunt in their social circle, whether physically or online.<br><br>

            You need to ensure that the product that arrives at the customer is not only present in stellar packaging but includes the branding elements and the brands message. The goal of nearly every business is to win customer approval and satisfaction. If a customer receives a product packed in an exquisite custom box will all the incredible features, it means the brand cares about its customers.<br><br>

            Making <b>printed box packaging</b> with your brand logo would entail your brand more professional and business-like.<br><br>

            Half Price Packaging needs to be your one-stop solution if you are looking for premium custom boxes for your boxes. We have a skillful and experienced creative team equipped with all the modern tools and techniques to cater to your business needs. <br><br>

            The team is familiar with the changing trends of custom packaging and knows how to develop a design that can connect with the emotions and opinions of the customers. One such example is <b>half price auto boxes</b> that are true reflection of creativity and functionality. <br><br>

            We at Half Price Packaging use advanced printing options and sustainable packaging that allow us to offer a wide assortment of custom options. The latest digital and offset printing ensures that the colors of the custom boxes do not alter and remain vibrant for a long duration.<br><br>

            If you are low on a marketing budget, then you can use certain economical options such as Rubber Stamps, Labels or Stickers, or a Custom Tape. On the contrary, if you have a high or meager budget, then you can consider a custom printed box and experiment with different design and finishing options, along with graphics, color, and artwork.<br><br>

            Most established businesses think that <b>custom packaging</b> is more suitable for startup brands. However, this is not right as you can easily tweak your packaging style to improve the dwindling sales and achieve success.<br><br>

            Whether you are launching a brand or offering e-commerce shopping, there is one thing that you need to know. Today, there is a staggering number of products shipping directly from brands to customers' doorstep. The time of sending the products in plain old Kraft boxes is long gone. Now is the time to invest in custom packaging that can deliver unprecedented results for your business.<br><br>

            People will truly treasure the moment, unwrapping the product in a crafty and alluring custom box more<br><br>



            <b class="boldsize">Bottom Line</b><br><br>
            Half Price Packaging allows potential customers to design fully <b>customized boxes</b> according to their requirements and budget. We also offer cheap discounts if you want to buy these boxes in bulk. Our staff is highly skilled and qualified and can guide you in choosing the quality packaging material, shape, size, logo, design, and other printing options for your custom boxes.<br><br>

            A wide range of goods can be packed in these boxes as they are very spacious and lightweight. We can provide extra cushioning and protection, depending on your requirements. Our team knows about corporate social responsibility and ensures that we use 100% sustainable and bio-degradable packaging materials.
            <br><br>


          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- 
<section class="brand-sec cta-parag brand-sec-product-dpg brand-sec-hme-pg">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 brnd-sec-bg-st">
        <div class="hd-txt">
          <h2 class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0s">Accomplish All Your Business Goals with Spectacular Custom Packaging</h2>
          <div class="cta-content">
            <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s">
              Do you want to make your products to make instant impression and achieve long term success? <br><br>
              Are you looking for a stellar packaging that helps get your brand the recognition it deserves? <br><br>
              If so, then Half Price Packaging is the Best Place offering Cost-effective <b>Custom Packaging Solutions</b>. We help brands grow with our effective rebranding vision and strategic eate spectacular <b>custom packaging boxes</b> that multiply the desirability of your products among customers and boost your brand.
              <br><br>
              Half Price Packaging is one place where you get a chance to select a custom design from a wide assortment of options. We are one of the best <b>product packaging companies</b> with a reputation for exceeding the expectations of our clients and customers.<br><br>
              We allow you to provide exclusive design ideas and our team is creative enough to give them an inspiring realization. You can trust the creative insight of our experienced design team to have exclusive design options for your packaging. <br><br>
              Our design team is familiar with the modern trends in custom packaging and deliver outstanding and top-notch <b>half price boxes</b> that will help brand visibility and increase sales. Our team will offer numerous styles from our archive designs, and clients are free to choose the size, dimension, shape, and color of the boxes.<br><br>
              So, if you want to reach your business goals without any hassle, feel free to put your trust in us. Kindly fill the form below and well reach out to you instantly. We would love to connect with you and know how we can assist you in making the <b>custom boxes</b> and delivering it free of cost in United States.
            </p>
          </div>
          <div class="brand-btn-st wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s">
            <a href="tel:866-225-2112" class="get-started  btn-ani white"><i class="fa fa-phone" aria-hidden="true"></i> Call Us Now</a>

            <a href="javascript:;" class="get-started popup-btn btn-ani black">
              <i class="fa fa-plane" aria-hidden="true"></i> Order Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
@endsection