<?php $page_check = "home"; ?>
@extends('frontend.layouts.app')
@section('content')
  <section class="inner_banner_mm l1_banner new-pg-l2-st" @if(!empty($sub_cat_record['bg_image_path'])) style="background-image:url({{url($sub_cat_record['bg_image_path'])}})" @else style=" background-image:url({{url('frontend/images/default/l2/l2-banner-bg.jpg')}})" @endif>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 htp-left">
          <div class="bnr-txt">
            <h1 class="wow fadeInUp">{{ $sub_cat_record['sub_cat_name'] }}</h1>
            <p class="wow fadeInUp">{{$sub_cat_record['sub_cat_title']}}</p>
            <div class="bnr-new-img">
              @if(!empty($sub_cat_record['bg_left_image_path']))
                <img src="{{ cdn($sub_cat_record['bg_left_image_path']) }}" alt="{{$sub_cat_record['bg_left_image_alt']}}">
              @else
                <img src="{{ cdn('frontend/images/default/l2/left-img.png') }}">
              @endif
            </div>

          </div>
        </div>

        @include("frontend/includes/instant-quote")
      </div>
    </div>
  </section>
  @include("frontend/includes/logo-slider")
  <section class="auto_parts_grid_sec auto-parts-sec-st">
    <div class="container">
      <div class="row">
        <div class="auto_parts_grid_boxes">
          <div class="col-sm-5 p0">
            <div class="col-sm-12">
              <div class="auto_parts_grid_box1">
                <h2 class="title_mm">{{ $sub_cat_record['sub_cat_name'] }} </h2>
                <p class="para_mm">{{$sub_cat_record['sub_cat_title']}}</p>
                <div class="auto_parts_btn">
                </div>
                <div class="dropdown_products_filtering">
                  <label for="standard-select">Select from Wide Variety from - {{ $sub_cat_record['sub_cat_name'] }} </label>
                  <div class="select">
                    @if(!empty($products[0]))
                      <select id="standard-select" onchange="window.open(this.value, '_blank')">
                        @foreach($products as $key => $product)
                          <option value="{{ url($product->slug)}}">{{$product->name}}</option>
                        @endforeach
                      </select>
                    @endif
                    <span class="focus"></span>
                  </div>
                </div>
                <div class="auto_parts_grid_box1_img">
                  @if(!empty($sub_cat_record['bg_left_image_path']))
                    <img src="{{ cdn($sub_cat_record['bg_left_image_path']) }}">
                  @else
                    <img src="{{ cdn('frontend/images/default/l2/featured-image.png') }}">
                  @endif
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-7 p0 l2_blade_mm">
            <div class="col-sm-6">
              <div class="auto_parts_grid_box">

                @if(!empty($products[0]))
                  @if(!empty($products[0]->feature_image_path))
                    <img src="{{ cdn($products[0]->feature_image_path) }}" style="width: 314px;">
                  @else
                    <img src="{{ cdn('frontend/images/automotive/auto-parts-grid-img2.png') }}">
                  @endif
                  <div class="auto_parts_grid_box_btn">
                    <a class="wht_btn" href="{{ url($products[0]->slug)}}">More Info</a>
                  </div>
                  <h5><a class="rclr" href="{{ url($products[0]->slug)}}"> {{ !empty($products[0]) ? $products[0]->name: ''}} </a></h5>
                @endif
              </div>
            </div>
            <div class="col-sm-6">
              <div class="auto_parts_grid_box">
                @if(!empty($products[1]))
                  @if(!empty($products[1]->feature_image_path))
                    <img src="{{ cdn($products[1]->feature_image_path) }}" style="width: 314px;">
                  @else
                    <img src="{{ cdn('frontend/images/automotive/auto-parts-grid-img3.png') }}">
                  @endif
                  <div class="auto_parts_grid_box_btn">
                    <a class="wht_btn" href="{{ url($products[1]->slug)}}">More Info</a>
                  </div>
                  <h5><a class="rclr" href="{{ url($products[1]->slug)}}"> {{ !empty($products[1]) ? $products[1]->name: ''}} </a></h5>
                @endif

              </div>
            </div>


            <div class="col-sm-6">
              <div class="auto_parts_grid_box">

                @if(!empty($products[2]))
                  @if(!empty($products[2]->feature_image_path))
                    <img src="{{ cdn($products[2]->feature_image_path) }}" style="width: 314px;">
                  @else
                    <img src="{{ cdn('frontend/images/automotive/auto-parts-grid-img2.png') }}">
                  @endif
                  <div class="auto_parts_grid_box_btn">
                    <a class="wht_btn" href="{{ url($products[2]->slug)}}">More Info</a>
                  </div>
                  <h5><a class="rclr" href="{{ url($products[2]->slug)}}"> {{ !empty($products[2]) ? $products[2]->name: ''}} </a></h5>
                @endif
              </div>
            </div>
            <div class="col-sm-6">
              <div class="auto_parts_grid_box">
                @if(!empty($products[3]))
                  @if(!empty($products[3]->feature_image_path))
                    <img src="{{ cdn($products[3]->feature_image_path) }}" style="width: 314px;">
                  @else
                    <img src="{{ cdn('frontend/images/automotive/auto-parts-grid-img3.png') }}">
                  @endif
                  <div class="auto_parts_grid_box_btn">
                    <a class="wht_btn" href="{{ url($products[3]->slug)}}">More Info</a>
                  </div>
                  <h5><a class="rclr" href="{{ url($products[3]->slug)}}"> {{ !empty($products[3]) ? $products[3]->name: ''}} </a></h5>
                @endif

              </div>
            </div>
          </div>

          @if(!empty($products[4]))
            <section class="auto_parts_grid_sec auto-parts-sec-st auto-parts-sec-st-dynamic auto_parts_grid_sec_mobile">
              <div class="container">
                <div class="row">
                  <div class="auto_parts_grid_boxes">
                    <div class="col-sm-12 p0">
                      @foreach($products as $key => $product)
                        @if($key == 0 || $key == 1 || $key == 2 || $key == 3 )
                          @continue
                        @endif

                        <div class="col-sm-3">
                          <div class="auto_parts_grid_box">
                            @if(!empty($product->feature_image_path))
                              <img src="{{ cdn($product->feature_image_path) }}" style="width: 262px;">
                            @else
                              <img src="{{ cdn('frontend/images/automotive/auto-parts-grid-img5.png') }}" style="width: 262px;">
                            @endif
                            <div class="auto_parts_grid_box_btn">
                              <a class="wht_btn" href="{{ url($product->slug)}}">More Info</a>
                            </div>
                            <h5><a class="rclr" href="{{ url($product->slug)}}">{{$product->name}}</a></h5>
                          </div>

                        </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </section>
          @endif
        </div>
      </div>
    </div>
  </section>


  <!-- popup_products -->
  @if(!empty($popup_products))

    <section class="auto_parts_grid_sec auto-parts-sec-st">

      <div class="container">
        <div class="row">
          <div class="auto_parts_grid_boxes">
            <div class="col-sm-12 p0">

              @foreach($popup_products as $p_product)
                <div class="col-sm-3">
                  <a class="popup-btn" href="javascript:;">
                    <div class="auto_parts_grid_box">
                      <a href="javascript:void(0)" class="popup-btn"> <img src="{{cdn($p_product->image_path)}}" style="width: 262px;"></a>

                      <h5><a class="rclr popuph" href="javascript:void(0)" class="popup-btn">{{$p_product->name}}</a></h5>
                    </div>
                  </a>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>

  @endif


  @if(!empty($subcategory_cta[1]) || !empty($sub_cat_record['whyus_title']))
    <!-- <section class="brand-sec brand-sec-product-dpg" @if(!empty($subcategory_cta[1]->cta_image_path)) style="background-image:url({{url($subcategory_cta[1]->cta_image_path)}})" @else style=" background-image:url({{url('frontend/images/default/l2/first-cta-image.jpg')}})" @endif> -->
    <section class="brand-sec cta-parag brand-sec-product-dpg" style=" background-image:url({{url('frontend/images/default/l2/first-cta-image.jpg')}})" >
      <div class="container">
        <div class="row">
          <div class="col-sm-12 brnd-sec-bg-st">
            <div class="hd-txt">
              <h2 class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0s">{!! !empty($sub_cat_record['background_title']) ? $sub_cat_record['background_title'] : $subcategory_cta[1]->cta_title !!}</h2>
              <div class="cta-content">{!! !empty($sub_cat_record['background_desc']) ? $sub_cat_record['background_desc'] : $subcategory_cta[1]->cta_description !!}</div>
              <div class="brand-btn-st wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s">
                <a href="tel:866-225-2112" class="get-started btn-ani white"><i class="fa fa-phone" aria-hidden="true"></i> Cal Us Now</a>

                <a href="javascript:;" class="get-started popup-btn btn-ani black">
                  <i class="fa fa-plane" aria-hidden="true"></i> Order Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endif

  @if(!empty($subcategory_cta[0]) || !empty($sub_cat_record['whyus_title']))
    <section class="cta_section cta-parag">
      <div class="container">
        <div class="row">
          <div class="col-sm-7">
            <div class="cta_text wow fadeInLeft" data-wow-duration="1s">
              <h2>{!! !empty($sub_cat_record['whyus_title']) ? $sub_cat_record['whyus_title'] : $subcategory_cta[0]->cta_title !!}</h2>
              <div class="cta-content">{!! !empty($sub_cat_record['whyus_desc']) ? $sub_cat_record['whyus_desc'] : $subcategory_cta[0]->cta_description !!}</div>
            </div>
            <div class="cta_btn wow fadeInLeft" data-wow-duration="1s">
              <a href="javascript:;" class="red-btn popup-btn">Get Started</a>
              <a href="javascript:;" class="black-btn">Live Chat</a>
            </div>
          </div>
          <div class="col-sm-5">
            <div class="cta_img_box wow zoomIn">
              @if(!empty($sub_cat_record['cta_image']) || !empty($subcategory_cta[0]->cta_image_path))
                <img loading="lazy" src="{{ cdn(!empty($sub_cat_record['cta_image']) ? $sub_cat_record['cta_image_path'] : $subcategory_cta[0]->cta_image_path) }}" alt="{{!empty($sub_cat_record['cta_image_alt']) ? $sub_cat_record['cta_image_alt'] : '' }}">
              @else
                <img loading="lazy" src="{{ cdn('frontend/images/default/l2/second-cta-image.png') }}">
              @endif
            </div>
          </div>
        </div>
      </div>
    </section>
  @endif




  @if(!empty($subcategory_cta[1]))

    @foreach($subcategory_cta as $key => $cta)
      @if($key == 0 || $key == 1 )
        @continue
      @endif
      <section class="brand-sec cta-parag brand-sec-product-dpg" @if(!empty($cta->cta_image_path)) style="background-image:url({{url($cta->cta_image_path)}})" @else style=" background-image:url({{url('frontend/images/default/l2/first-cta-image.jpg')}})" @endif>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 brnd-sec-bg-st">
              <div class="hd-txt">
                <h2 class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0s">{!! $cta->cta_title !!}</h2>
                <div class="cta-content">{!! $cta->cta_description !!}</div>
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
    @endforeach
  @endif



  @include('frontend/includes/testimonial-all')
  @include('frontend/includes/sample-kit-form')
@endsection
