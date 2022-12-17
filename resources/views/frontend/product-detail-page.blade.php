<?php $page_check = "product_detail_page"; ?>
@extends('frontend.layouts.app')
@section('content')


<section class="banner-section banner_product_detail_page" @if(!empty($product['bg_image_path'])) style="background-image:url({{url($product['bg_image_path'])}})" @else style=" background-image:url({{url('frontend/images/default/product/banner-bg.jpg')}})" @endif>
  <div class="container">
    <div class="row row-box">
      <div class="col-sm-6">
        <div class="banner-main wow fadeInLeft">
          <div class="banner-text">
            <h1>{{$product['name']}}</h1>
            <p>{{$product['title']}}</p>
          </div>
          <div class="bnr-side-img">
            @if(!empty($product['collection_image_path']))
            <img src="{{ cdn($product['collection_image_path']) }}" alt="{{$product['collection_image_alt']}}">
            @else
            <img src="{{ cdn('frontend/images/default/product/product-collection.png') }}" alt="image">
            @endif
          </div>
        </div>
      </div>
      @include("frontend/includes/instant-quote")
    </div>
  </div>
</section>
@include("frontend/includes/logo-slider")
<section class="tuckbox-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="tuck-text wow fadeInLeft">
          <h2>Product Overview</h2>
          <p>
            {!! $product['short_description'] !!}
          </p>
        </div>
      </div>
    </div>
    <div class="tuck-custom-box row">
      <div class="col-sm-7 wow fadeInLeft">
        <div class="tuck-slider">
          <div class="tuck-slider-for">
            @if(!empty($product['feature_image_path']))
            <div>
              <div class="tuckbox-img">
                <img loading="lazy" src="{{ cdn($product['feature_image_path']) }}" alt="{{$product['feature_image_alt']}}">
              </div>
            </div>
            @else
            <div>
              <div class="tuckbox-img">
                <img loading="lazy" src="{{ cdn('frontend/images/default/l2/featured-image.png') }}" alt="image">
              </div>
            </div>
            @endif
            @if(!empty($gallery_images))
            @foreach($gallery_images as $g_img)
            <div>
              <div class="tuckbox-img">
                <img loading="lazy" src="{{ cdn('storage/product_uploads') }}/<?= $g_img->image_name; ?>" alt="{{ !empty($g_img->image_alt_name) ? $g_img->image_alt_name : 'image';}}">
              </div>
            </div>
            @endforeach
            @else
            <div>
              <div class="tuckbox-img">
                <img loading="lazy" src="{{ cdn('frontend/images/tuckbox-11.png') }}" alt="{{ !empty($g_img->image_alt_name) ? $g_img->image_alt_name : 'image';}}">
              </div>
            </div>
            <div>
              <div class="tuckbox-img">
                <img loading="lazy" src="{{ cdn('frontend/images/tuckbox-22.png') }}" alt="{{ !empty($g_img->image_alt_name) ? $g_img->image_alt_name : 'image';}}">
              </div>
            </div>
            <div>
              <div class="tuckbox-img">
                <img loading="lazy" src="{{ cdn('frontend/images/tuckbox-33.png') }}" alt="{{ !empty($g_img->image_alt_name) ? $g_img->image_alt_name : 'image';}}">
              </div>
            </div>

            @endif
          </div>
        </div>
        <div class="row touck new-box tuck-slider-nav">
          @if(!empty($product['feature_image_path']))
          <div class="">
            <div class="tuckbox-box wow fadeInLeft" data-wow-duration="1s">
              <div class="tuck-img-box">
                <img loading="lazy" src="{{ cdn($product['feature_image_path']) }}">
              </div>
            </div>
          </div>
          @else
          <div class="">
            <div class="tuckbox-box wow fadeInLeft" data-wow-duration="1s">
              <div class="tuck-img-box">
                <img loading="lazy" src="{{ cdn('frontend/images/default/l2/featured-image.png') }}">
              </div>
            </div>
          </div>
          @endif
          @if(!empty($gallery_images))
          @foreach($gallery_images as $g_img)
          <div class="">
            <div class="tuckbox-box wow fadeInLeft" data-wow-duration="1s">
              <div class="tuck-img-box">
                <img loading="lazy umar" src="{{ cdn('storage/product_uploads') }}/<?= $g_img->image_name; ?>" alt="{{ !empty($g_img->image_alt_name) ? $g_img->image_alt_name : 'image';}}">
              </div>
            </div>
          </div>
          @endforeach
          @else
          <div class="">
            <div class="tuckbox-box wow fadeInLeft" data-wow-duration="1s">
              <div class="tuck-img-box">
                <img loading="lazy" src="{{ cdn('frontend/images/tuckbox-1.png') }}" alt="{{ !empty($g_img->image_alt_name) ? $g_img->image_alt_name : 'image';}}">
              </div>
            </div>
          </div>
          <div class="">
            <div class="tuckbox-box wow fadeInLeft" data-wow-duration="1s">
              <div class="tuck-img-box">
                <img loading="lazy" src="{{ cdn('frontend/images/tuckbox-2.png') }}" alt="{{ !empty($g_img->image_alt_name) ? $g_img->image_alt_name : 'image';}}">
              </div>
            </div>
          </div>
          <div>
            <div class="tuckbox-box wow fadeInLeft" data-wow-duration="1s">
              <div class="tuckbox-img">
                <img loading="lazy" src="{{ cdn('frontend/images/tuckbox-3.png') }}" alt="{{ !empty($g_img->image_alt_name) ? $g_img->image_alt_name : 'image';}}">
              </div>
            </div>
          </div>
          @endif
        </div>
      </div>
      <div class="col-sm-5 tuck-form-main wow fadeInRight">
        @include("frontend/includes/two-step-quote")
      </div>
    </div>
  </div>
</section>
<section class="material_sec_product  material-pro-sec-st">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="hd-txt material-txt">
          <h2>Materials</h2>
        </div>
      </div>
    </div>
  </div>
  <hr class="material_sec_product_br">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="material_slider_product">
          <div class="material_slider_product_box">
            <div class="material-bx">
              <a href=""> <img src="{{cdn('frontend')}}/images/materials/card-stock.png"></a>
            </div>
          </div>
          <div class="material_slider_product_box">
            <div class="material-bx">
              <a href="box-by-material#section_two"> <img src="{{cdn('frontend')}}/images/materials/Corrugated-Stock.png"></a>
            </div>
          </div>
          <div class="material_slider_product_box">
            <div class="material-bx">
              <a href="box-by-material#section_three"><img src="{{cdn('frontend')}}/images/materials/foil-metallic-card-stock.png"></a>
            </div>
          </div>
          <div class="material_slider_product_box">
            <div class="material-bx">
              <a href="box-by-material#section_one"><img src="{{cdn('frontend')}}/images/materials/karaft-eco-freudbkt-brown-card-stock.png"></a>
            </div>
          </div>
          <div class="material_slider_product_box">
            <div class="material-bx">
              <a href="box-by-material#section_six"><img src="{{cdn('frontend')}}/images/materials/rigid-press-board-card.png"></a>
            </div>
          </div>
          <div class="material_slider_product_box">
            <div class="material-bx">
              <a href="box-by-material#section_five"> <img src="{{cdn('frontend')}}/images/materials/Textured-Linen-Neenah-Card-Stock.png"></a>
            </div>
          </div>
          <div class="material_slider_product_box">
            <div class="material-bx">
              <a href="box-by-material#section_four"> <img src="{{cdn('frontend')}}/images/materials/white-card-stock.png"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="material_sec_product  material-pro-sec-st">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="hd-txt material-txt">
          <h2>Premium Finishes</h2>
        </div>
      </div>
    </div>
  </div>
  <hr class="material_sec_product_br">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="material_slider_product">
          <div class="material_slider_product_box">
            <div class="material-bx">
              <a href="premium-finishes#section_three"><img src="{{cdn('frontend')}}/images/finishs/aqueous-coating.png"></a>
            </div>
          </div>
          <div class="material_slider_product_box">
            <div class="material-bx">
              <a href="premium-finishes#section_four"> <img src="{{cdn('frontend')}}/images/finishs/embosing-debossing.png"></a>
            </div>
          </div>
          <div class="material_slider_product_box">
            <div class="material-bx">
              <a href="premium-finishes#section_one"><img src="{{cdn('frontend')}}/images/finishs/foiling.png"></a>
            </div>
          </div>
          <div class="material_slider_product_box">
            <div class="material-bx">
              <a href="premium-finishes#section_five"><img src="{{cdn('frontend')}}/images/finishs/gloss-lamination.png"></a>
            </div>
          </div>
          <div class="material_slider_product_box">
            <div class="material-bx">
              <a href="premium-finishes#section_two"><img src="{{cdn('frontend')}}/images/finishs/holographic-foiling.png"></a>
            </div>
          </div>
          <div class="material_slider_product_box">
            <div class="material-bx">
              <a href="premium-finishes#section_six"> <img src="{{cdn('frontend')}}/images/finishs/matt-lamination.png"></a>
            </div>
          </div>
          <div class="material_slider_product_box">
            <div class="material-bx">
              <a href="premium-finishes#section_seven"> <img src="{{cdn('frontend')}}/images/finishs/raised-spot-uv.png"></a>
            </div>
          </div>
          <div class="material_slider_product_box">
            <div class="material-bx">
              <a href="premium-finishes#section_eight"> <img src="{{cdn('frontend')}}/images/finishs/silk-lamination.png"></a>
            </div>
          </div>
          <div class="material_slider_product_box">
            <div class="material-bx">
              <a href="premium-finishes#section_nine"> <img src="{{cdn('frontend')}}/images/finishs/spot-UV-Spot-Floss.png"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="tuckbox-section tuckbox-section-long-description">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="tuck-text wow fadeInLeft">
          <div class="hd-txt material-txt">
            <h2>Learn More About {{$product['name']}}</h2>
          </div>
          {!! $product['long_description'] !!}
        </div>
      </div>
    </div>
  </div>
</section>

@if(!empty($subcategory_cta[0]) || !empty($product['whyus_title']))
<section class="cta_section cta-parag ">
  <div class="container">
    <div class="row">
      <div class="col-sm-7">
        <div class="cta_text wow fadeInLeft" data-wow-duration="1s">
          <h2>{!! $product['whyus_title'] != null ? $product['whyus_title'] :  $subcategory_cta[0]->cta_title !!}</h2>
          <div class="cta-content">{!! $product['whyus_desc'] != null ?  $product['whyus_desc'] : $subcategory_cta[0]->cta_description !!}</div>
        </div>
        <div class="cta_btn wow fadeInLeft" data-wow-duration="1s">
          <a href="javascript:;" class="red-btn popup-btn">Get Started</a>
          <a href="javascript:;" class="black-btn">Live Chat</a>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="cta_img_box wow zoomIn">
          @if(!empty($product['cta_image_path']))
          <img loading="lazy" src="{{ cdn($product['cta_image_path']) }}" alt="{{ $product['cta_image_alt'] }}">
          @else
          <img loading="lazy" src="{{ cdn('frontend/images/default/l2/second-cta-image.png') }}">
          @endif
        </div>
      </div>
    </div>
  </div>
</section>
@endif

<section class="related_products_sec">
  <div class="container">
    <div class="row">
      <div class="hd-txt wow fadeInLeft" data-wow-duration="1s">
        <h2>Related Products</h2>
        <p>You have already done your part by formulating an amazing product, let us do our part by creating a unique custom packaging material. Have a look at our collection of boxes and find the right fit for your needs!</p>
      </div>
      <div class="related_products_boxes">
        <div class="related_products_boxes_slider">
          @if(!empty($related_products[0]))
          <div class="related_products_box_slid">
            <a href="{{ url($related_products[0]->slug)}}">
              <div class="related_products_box_slid_img">
                @if(!empty($related_products[0]->feature_image_path))
                <img loading="lazy" src="{{ cdn($related_products[0]->feature_image_path) }}">
                @else
                <img loading="lazy" src="{{ cdn('frontend/images/product-details-img/related-products-img1.jpg') }}">
                @endif
              </div>
              <h3 class="rclr">{{\Illuminate\Support\Str::limit($related_products[0]->name,30)}}</h3>
            </a>
          </div>
          @endif
          <div class="related_products_box_slid">

            @if(!empty($related_products[1]))
            <div class="col-sm-4 p0">
              <a href="{{ url($related_products[1]->slug)}}">
                <div class="related_products_box_slid_img">
                  @if(!empty($related_products[1]->feature_image_path))
                  <img loading="lazy" src="{{ cdn($related_products[1]->feature_image_path) }}">
                  @else
                  <img loading="lazy" src="{{ cdn('frontend/images/product-details-img/related-products-img3.jpg') }}">
                  @endif
                </div>
                <h3 class="rclr">{{\Illuminate\Support\Str::limit($related_products[1]->name,13)}}</h3>
              </a>
            </div>
            @endif

            @if(!empty($related_products[2]))
            <div class="col-sm-4 p0">
              <a href="{{ url($related_products[2]->slug)}}">
                <div class="related_products_box_slid_img">
                  @if(!empty($related_products[2]->feature_image_path))
                  <img loading="lazy" src="{{ cdn($related_products[2]->feature_image_path) }}">
                  @else
                  <img loading="lazy" src="{{ cdn('frontend/images/product-details-img/related-products-img3.jpg') }}">
                  @endif
                </div>
                <h3 class="rclr">{{\Illuminate\Support\Str::limit($related_products[2]->name,13)}}</h3>
              </a>
            </div>
            @endif

            @if(!empty($related_products[3]))
            <div class="col-sm-4 p0">
              <a href="{{ url($related_products[3]->slug)}}">
                <div class="related_products_box_slid_img">
                  @if(!empty($related_products[3]->feature_image_path))
                  <img loading="lazy" src="{{ cdn($related_products[3]->feature_image_path) }}">
                  @else
                  <img loading="lazy" src="{{ cdn('frontend/images/product-details-img/related-products-img4.jpg') }}">
                  @endif
                </div>
                <h3 class="rclr">{{\Illuminate\Support\Str::limit($related_products[3]->name,13)}}</h3>
              </a>
            </div>
            @endif

            @if(!empty($related_products[4]))
            <div class="col-sm-4 p0">
              <a href="{{ url($related_products[4]->slug)}}">
                <div class="related_products_box_slid_img">
                  @if(!empty($related_products[4]->feature_image_path))
                  <img loading="lazy" src="{{ cdn($related_products[4]->feature_image_path) }}">
                  @else
                  <img loading="lazy" src="{{ cdn('frontend/images/product-details-img/related-products-img5.jpg') }}">
                  @endif
                </div>
                <h3 class="rclr">{{\Illuminate\Support\Str::limit($related_products[4]->name,25)}}</h3>
              </a>
            </div>
            @endif

            @if(!empty($related_products[5]))
            <div class="col-sm-4 p0">
              <a href="{{ url($related_products[5]->slug)}}">
                <div class="related_products_box_slid_img">
                  @if(!empty($related_products[5]->feature_image_path))
                  <img loading="lazy" src="{{ cdn($related_products[5]->feature_image_path) }}">
                  @else
                  <img loading="lazy" src="{{ cdn('frontend/images/product-details-img/related-products-img4.jpg') }}">
                  @endif
                </div>
                <h3 class="rclr">{{\Illuminate\Support\Str::limit($related_products[5]->name,25)}}</h3>
              </a>
            </div>
            @endif

            @if(!empty($related_products[6]))
            <div class="col-sm-4 p0">
              <a href="{{ url($related_products[6]->slug)}}">
                <div class="related_products_box_slid_img">
                  @if(!empty($related_products[6]->feature_image_path))
                  <img loading="lazy" src="{{ cdn($related_products[6]->feature_image_path) }}">
                  @else
                  <img loading="lazy" src="{{ cdn('frontend/images/product-details-img/related-products-img5.jpg') }}">
                  @endif
                </div>
                <h3 class="rclr">{{\Illuminate\Support\Str::limit($related_products[6]->name,25)}}</h3>
              </a>
            </div>

            @endif


          </div>

          @if(!empty($related_products[7]))
          <div class="related_products_box_slid">
            <a href="{{ url($related_products[7]->slug)}}">
              <div class="related_products_box_slid_img">
                @if(!empty($related_products[7]->feature_image_path))
                <img loading="lazy" src="{{ cdn($related_products[7]->feature_image_path) }}">
                @else
                <img loading="lazy" src="{{ cdn('frontend/images/product-details-img/related-products-img6.jpg') }}">
                @endif
              </div>
              <h3 class="rclr">{{\Illuminate\Support\Str::limit($related_products[7]->name,30)}}</h3>
            </a>
          </div>
          @endif

          <div class="related_products_box_slid">

            @if(!empty($related_products[8]))
            <div class="col-sm-4 p0">
              <a href="{{ url($related_products[8]->slug)}}">
                <div class="related_products_box_slid_img">
                  @if(!empty($related_products[8]->feature_image_path))
                  <img loading="lazy" src="{{ cdn($related_products[8]->feature_image_path) }}">
                  @else
                  <img loading="lazy" src="{{ cdn('frontend/images/product-details-img/related-products-img3.jpg') }}">
                  @endif
                </div>
                <h3 class="rclr">{{\Illuminate\Support\Str::limit($related_products[8]->name,13)}}</h3>
              </a>
            </div>
            @endif


            @if(!empty($related_products[9]))
            <div class="col-sm-4 p0">
              <a href="{{ url($related_products[9]->slug)}}">
                <div class="related_products_box_slid_img">
                  @if(!empty($related_products[9]->feature_image_path))
                  <img loading="lazy" src="{{ cdn($related_products[9]->feature_image_path) }}">
                  @else
                  <img loading="lazy" src="{{ cdn('frontend/images/product-details-img/related-products-img3.jpg') }}">
                  @endif
                </div>
                <h3 class="rclr">{{\Illuminate\Support\Str::limit($related_products[9]->name,13)}}</h3>
              </a>
            </div>
            @endif

            @if(!empty($related_products[10]))
            <div class="col-sm-4 p0">
              <a href="{{ url($related_products[10]->slug)}}">
                <div class="related_products_box_slid_img">
                  @if(!empty($related_products[10]->feature_image_path))
                  <img loading="lazy" src="{{ cdn($related_products[10]->feature_image_path) }}">
                  @else
                  <img loading="lazy" src="{{ cdn('frontend/images/product-details-img/related-products-img4.jpg') }}">
                  @endif
                </div>
                <h3 class="rclr">{{\Illuminate\Support\Str::limit($related_products[10]->name,13)}}</h3>
              </a>
            </div>
            @endif

            @if(!empty($related_products[11]))
            <div class="col-sm-4 p0">
              <a href="{{ url($related_products[11]->slug)}}">
                <div class="related_products_box_slid_img">
                  @if(!empty($related_products[11]->feature_image_path))
                  <img loading="lazy" src="{{ cdn($related_products[11]->feature_image_path) }}">
                  @else
                  <img loading="lazy" src="{{ cdn('frontend/images/product-details-img/related-products-img5.jpg') }}">
                  @endif
                </div>
                <h3 class="rclr">{{\Illuminate\Support\Str::limit($related_products[11]->name,25)}}</h3>
              </a>
            </div>
            @endif

            @if(!empty($related_products[12]))
            <div class="col-sm-4 p0">
              <a href="{{ url($related_products[12]->slug)}}">
                <div class="related_products_box_slid_img">
                  @if(!empty($related_products[12]->feature_image_path))
                  <img loading="lazy" src="{{ cdn($related_products[12]->feature_image_path) }}">
                  @else
                  <img loading="lazy" src="{{ cdn('frontend/images/product-details-img/related-products-img4.jpg') }}">
                  @endif
                </div>
                <h3 class="rclr">{{\Illuminate\Support\Str::limit($related_products[12]->name,25)}}</h3>
                <a href="{{ url($related_products[0]->slug)}}">
            </div>
            @endif

            @if(!empty($related_products[13]))
            <div class="col-sm-4 p0">
              <a href="{{ url($related_products[13]->slug)}}">
                <div class="related_products_box_slid_img">
                  @if(!empty($related_products[13]->feature_image_path))
                  <img loading="lazy" src="{{ cdn($related_products[13]->feature_image_path) }}">
                  @else
                  <img loading="lazy" src="{{ cdn('frontend/images/product-details-img/related-products-img5.jpg') }}">
                  @endif
                </div>
                <h3 class="rclr">{{\Illuminate\Support\Str::limit($related_products[13]->name,25)}}</h3>
              </a>
            </div>

            @endif
          </div>

          @if(!empty($related_products[14]))
          <div class="related_products_box_slid">
            <a href="{{ url($related_products[14]->slug)}}">
              <div class="related_products_box_slid_img">
                @if(!empty($related_products[14]->feature_image_path))
                <img loading="lazy" src="{{ cdn($related_products[14]->feature_image_path) }}">
                @else
                <img loading="lazy" src="{{ cdn('frontend/images/product-details-img/related-products-img6.jpg') }}">
                @endif
              </div>
              <h3 class="rclr">{{\Illuminate\Support\Str::limit($related_products[14]->name,30)}}</h3>
            </a>
          </div>
          @endif

        </div>
      </div>
    </div>
  </div>
</section>

@if(!empty($subcategory_cta[1]) || !empty($product['background_title']))
<!-- <section class="brand-sec brand-sec-product-dpg"  @if(!empty($subcategory_cta[1]->cta_image_path)) style="background-image:url({{url($subcategory_cta[1]->cta_image_path)}})" @else style=" background-image:url({{url('frontend/images/default/l2/first-cta-image.jpg')}})" @endif> -->
<section class="brand-sec cta-parag brand-sec-product-dpg" style=" background-image:url({{url('frontend/images/default/l2/first-cta-image.jpg')}})">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 brnd-sec-bg-st">
        <div class="hd-txt">
          <h2 class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0s">{!! $product['background_title'] != null ? $product['background_title'] : $subcategory_cta[1]->cta_title !!}</h2>
          <div class="cta-content">{!! $product['background_desc'] != null ? $product['background_desc'] : $subcategory_cta[1]->cta_description !!}</div>
          <div class="brand-btn-st wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s">
            <a href="javascript:;" class="get-started popup-btn btn-ani white"><i class="fa fa-phone" aria-hidden="true"></i> Cal Us Now</a>

            <a href="javascript:;" class="get-started popup-btn btn-ani black">
              <i class="fa fa-plane" aria-hidden="true"></i> Order Now</a>
          </div>
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
<section class="brand-sec brand-sec-product-dpg" style="display: none;" @if(!empty($cta->cta_image_path)) style="background-image:url({{url($cta->cta_image_path)}})" @else style=" background-image:url({{url('frontend/images/default/l2/first-cta-image.jpg')}})" @endif>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 brnd-sec-bg-st">
        <div class="hd-txt">
          <h2 class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0s">{!! $cta->cta_title !!}</h2>
          {!! $cta->cta_description !!}
          <div class="brand-btn-st wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s">
            <a href="javascript:;" class="get-started popup-btn btn-ani white"><i class="fa fa-phone" aria-hidden="true"></i> Cal Us Now</a>

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
<!-- cta section end -->
@include('frontend/includes/testimonial-all')
@include('frontend/includes/sample-kit-form')
@endsection