<?php $page_check = "home"; ?>
@extends('frontend.layouts.app')
@section('content')
<section class="inner_banner_mm l1_banner new-pg-l2-st" @if(!empty($cat_record['bg_image_path'])) style="background-image:url({{url($cat_record['bg_image_path'])}})" @else style=" background-image:url({{url('frontend/images/default/l1/l1-banner-bg.jpg')}})" @endif>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="bnr-txt">
          <h1 class="wow fadeInUp">{{$cat_record['cat_name']}}</h1>
          <p class="wow fadeInUp">{{$cat_record['cat_title']}}</p>
          <div class="bnr-new-img">
            @if(!empty($cat_record['bg_left_image_path']))
            <img src="{{ cdn($cat_record['bg_left_image_path']) }}" alt="{{$cat_record['cat_collection_image_alt']}}">
            @else
            <img src="{{ cdn('frontend/images/default/l1/left-image.png') }}" alt="{{$cat_record['cat_background_image_alt']}}">
            @endif
          </div>
        </div>
      </div>
      @include("frontend/includes/instant-quote")
    </div>
  </div>
</section>
<style>
  /*
  .auto_parts_products_slider2 {
    
   display: flex !important;
    flex-wrap: wrap;
    gap: 0; 
  }
  */

  .CBD.Custom.Packaging .auto_parts_products_slider2 {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .CBD.Custom.Packaging .auto_parts_products_slider2 a {
    margin-bottom: 30px;
  }

  .CBD.Custom.Packaging .swiper-button-next {
    display: none;

  }

  .CBD.Custom.Packaging .swiper-button-prev {
    display: none;

  }

  .swiper2 {
    position: relative;
  }

  .auto_parts_products_slider2>a {
    width: auto !important;
    /*
    flex-basis: 20%;
    margin-bottom: 30px;
    */

  }

  .swiper-button-next {
    background: rgba(139, 13, 16, 0.6);
    color: white !important;
    padding: 10px;
  }

  .swiper-button-prev {
    background: rgba(139, 13, 16, 0.6);
    color: white !important;
    padding: 10px;
  }

  .swiper-button-next::after {
    font-size: 18px !important;
  }

  .swiper-button-prev::after {
    font-size: 18px !important;
  }
</style>

@include("frontend/includes/logo-slider")

@if(!empty($sub_cat_record))
@foreach($sub_cat_record as $sub_cat)
<section class="auto_parts_sec">
  <div class="container">

    <div class="row">
      <div class="auto_parts_boxes">
        <div class="col-sm-7">
          <div class="auto_parts_box">
            <a href="{{ url($sub_cat->slug) }} ">
              <h2 class="title_mm">{{$sub_cat->sub_cat_name}} </h2>
            </a>
            <p class="para_mm">{{$sub_cat->sub_cat_title}}</p>
            <div class="auto_parts_btn">
            </div>
            <div class="dropdown_products_filtering">
              <label for="standard-select">Select from Wide Variety from - {{$sub_cat->sub_cat_name}} </label>
              <div class="select">
                @if(!empty($sub_cat_pro_record[$sub_cat->id]))
                <select id="standard-select" onchange="window.open(this.value, '_blank')">
                  @foreach($sub_cat_pro_record[$sub_cat->id] as $product)
                  <option value="{{ url($product->slug)}}">{{$product->name}}</option>
                  @endforeach
                </select>
                @endif
                <span class="focus"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="auto_parts_box">
            @if(!empty($sub_cat->bg_left_image_path))
            <img src="{{ cdn($sub_cat->bg_left_image_path) }}">
            @else
            <img src="{{ cdn('frontend/images/default/l1/featured-img.png') }}">
            @endif
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="auto_parts_products_boxes">
        <!--<a href="{{ url($sub_cat->slug) }} ">
          <h2 class="title_mm">{{$sub_cat->sub_cat_name}} Products </h2>
        </a>-->
        <div class="swiper2 {{$cat_record['cat_name']}}">
          <div class="auto_parts_products_slider2 swiper-wrapper">
            @if(!empty($sub_cat_pro_record[$sub_cat->id]))
            @foreach($sub_cat_pro_record[$sub_cat->id] as $product)

            <a href="{{ url($product->slug)}}" class="auto_parts_products_slider_box swiper-slide">
              <div class="auto_parts_products_slider_box_img">
                @if(!empty($product->feature_image_path))
                <img src="{{ cdn($product->feature_image_path) }}" alt="{{$cat_record['cat_featured_image_alt']}}">
                @else
                <img src="{{ cdn('frontend/images/automotive/auto-parts-product1.png') }}" alt="{{$cat_record['cat_navigation_image_alt']}}">
                @endif
              </div>
              <h3 class="rclr">{{$product->name}}</h3>
            </a>
            @endforeach
            @endif

            @if(!empty($popup_products[$sub_cat->id]))
            @foreach($popup_products[$sub_cat->id] as $pproduct)
            <a href="{{ url($pproduct->slug)}}" class="auto_parts_products_slider_box swiper-slide">
              <div class="auto_parts_products_slider_box_img">
                @if(!empty($pproduct->image_path))
                <img src="{{ cdn($pproduct->image_path) }}">
                @else
                <img src="{{ cdn('frontend/images/automotive/auto-parts-product1.png') }}">
                @endif
              </div>
              <h3 class="rclr">{{$pproduct->name}}</h3>
            </a>
            @endforeach
            @endif
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach
@endif
@if(!empty($cat_cta[0]) || !empty($cat_record['background_title']))
<!-- <section class="brand-sec brand-sec-product-dpg" @if(!empty($cat_cta[0]->cta_image_path)) style="background-image:url({{url($cat_cta[0]->cta_image_path)}})" @else style=" background-image:url({{url('frontend/images/default/l1/first-cta-img.jpg')}})" @endif> -->
<section class="brand-sec cta-parag brand-sec-product-dpg" style=" background-image:url({{url('frontend/images/default/l1/first-cta-img.jpg')}})" >
  <div class="container">
    <div class="row">
      <div class="col-sm-12 brnd-sec-bg-st">
        <div class="hd-txt">
          <h2 class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0s">{{ !empty($cat_record['background_title']) ? $cat_record['background_title'] : $cat_cta[0]->cta_title}}</h2>
          <div class="cta-content">
          {!! !empty($cat_record['background_desc']) ? $cat_record['background_desc'] :  $cat_cta[0]->cta_description !!}

          </div>
          <div class="brand-btn-st wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s">
            <a href="javascript:;" class="get-started popup-btn btn-ani white"><i class="fa fa-phone" aria-hidden="true"></i> Call Us Now</a>
            <a href="javascript:;" class="get-started popup-btn btn-ani black">
              <i class="fa fa-plane" aria-hidden="true"></i> Order Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endif
@if(!empty($cat_cta[0]) || !empty($cat_record['whyus_title']) )
<section class="cta_section cta-parag">
  <div class="container">
    <div class="row">
      <div class="col-sm-7">
        <div class="cta_text wow fadeInLeft" data-wow-duration="1s">
          <h2>{!! !empty($cat_record['whyus_title']) ? $cat_record['whyus_title'] : $cat_cta[0]->cta_title !!}</h2>
          <div class="cta-content">{!! !empty($cat_record['whyus_desc']) ? $cat_record['whyus_desc'] : $cat_cta[0]->cta_description !!}</div>
        </div>
        <div class="cta_btn wow fadeInLeft" data-wow-duration="1s">
          <a href="javascript:;" class="red-btn popup-btn">Get Started</a>
          <a href="javascript:;" class="black-btn">Live Chat</a>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="cta_img_box wow zoomIn">
          @if(!empty($cat_cta[0]->cta_image_path) || !empty($cat_record['cta_image']))
          <img loading="lazy" src="{{ cdn( !empty($cat_record['cta_image_path']) ? $cat_record['cta_image_path'] : $cat_cta[0]->cta_image_path) }}" alt="{{!empty($cat_record['cta_image_alt']) ? $cat_record['cta_image_alt'] : $cat_cta[0]->cat_cta_image_alt}}">
          @else
          <img loading="lazy" src="{{ cdn('frontend/images/default/l1/second-cta-img.png') }}" alt="{{$cat_cta[0]->cat_cta_image_alt}}">
          @endif
        </div>
      </div>
    </div>
  </div>
</section>
@endif


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script>
  const swiper = new Swiper('.swiper2', {
    // Optional parameters
    slidesPerView: 6,
    spaceBetween: 10,
    loop: true,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
      1024: {
        slidesPerView: 6,
        spaceBetween: 10,
      },
    },

  });
</script>

@include('frontend/includes/testimonial-all')
@include('frontend/includes/sample-kit-form')
@endsection