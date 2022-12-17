<?php $page_check = "packaging-news";
?>

@extends('frontend.layouts.app')
@section('content')
<section class="main-banner inner-banner inner-banner-portfolio short-header" style="">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="bnr-txt">
          <h2 class="inner-heading wow fadeInUp"> Packaging News</h2>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<div class="section section_slider">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-12 text-center">
        <div class="hd-txt text-center">
          <h2>Trending </h2>
          <p class="wow fadeInUp">At Half Price Packaging, we assist you in creating your custom boxes all backed by a 24/7 support team.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="posts-slide-wrap">
          <div class="posts-slide" id="posts-slide">
            @if(!empty($popular_posts))
            @foreach($popular_posts as $key => $post)
            <div class="item">
              <div class="post-entry d-lg-flex">
                <div class="me-lg-5 thumbnail mb-4 mb-lg-0">
                  @if(!empty($post->bannerimage))
                  <a href="{{URL::to('/blog/' . $post->slug)}}"> <img src="{{ asset('/assets/post_images/view_post/'.$post->bannerimage) }} " alt="Image" class="img-fluid"> </a>
                  @else
                  <a href="{{URL::to('/blog/' . $post->slug)}}"> <img src="https://preview.colorlib.com/theme/magdesign/images/xpost_lg_1.jpg.pagespeed.ic.FHpKG3L7pq.webp" alt="Image" class="img-fluid"> </a>
                  @endif
                </div>
                <div class="content align-self-center">
                  <div class="post-meta mb-3"> <a href="{{URL::to('/blog/' . $post->slug)}}" class="category"></a>
                    <a href="#" class="category"></a>
                    <!--&mdash; -->
                    <span class="date">{{date('M d, Y',strtotime($post->created_at))}}</span>
                    <br>

                    <?php
                    $catsPost = DB::table('post__categories as pc')->leftJoin('categories as c', 'c.id', 'pc.category_id')->where('post_id', $post->id)->get()->toArray();
                    $ccat = array_column($catsPost, 'cat_name');
                    $cats = implode(", ", $ccat);
                    echo $cats;
                    ?>

                  </div>
                  <h2 class="heading"><a href="{{URL::to('/blog/' . $post->slug)}}">{{$post->title}}.</a></h2>


                  </a>
                </div>
              </div>
            </div>
            @endforeach
            @endif

          </div>
        </div>
      </div>
    </div>

  </div>

</div>
<div class="clearfix"></div>
<div class="section section_blog_page">
  <div class="container">
    <div class="row g-5 post-loop-container">
      @if(!empty($pagi_posts))
      @foreach($pagi_posts as $key => $p_post)
      <div class="post-loop-item">
        <div class="post-entry d-block small-post-entry-v">
          <div class="thumbnail">
            @if(!empty($p_post->bannerimage))
            <a href="{{URL::to('/blog/' . $p_post->slug)}}"> <img src="{{ asset('/assets/post_images/view_post/'.$p_post->bannerimage) }} " alt="Image" class="img-fluid"> </a>
            @else
            <a href="{{URL::to('/blog/' . $p_post->slug)}}">
              <img src="https://preview.colorlib.com/theme/magdesign/images/ximg_2.jpg.pagespeed.ic.fbbBEgB1Q6.webp" alt="Image" class="img-fluid">
            </a>
            @endif
          </div>
          <div class="content">
            <div class="post-meta mb-1">
              <a href="{{URL::to('/blog/' . $p_post->slug)}}"></a>
              <a href="{{URL::to('/blog/' . $p_post->slug)}}" class="category"></a> <!-- — -->
              <span class="date">{{date('M d, Y',strtotime($p_post->created_at))}}</span>
              <br>
              <?php
              $catsPost = DB::table('post__categories as pc')->leftJoin('categories as c', 'c.id', 'pc.category_id')->where('post_id', $p_post->id)->get()->toArray();
              $ccat = array_column($catsPost, 'cat_name');
              $cats = implode(", ", $ccat);
              echo $cats;
              ?>

            </div>
            <h2 class="heading mb-3"><a href="{{URL::to('/blog/' . $p_post->slug)}}">{{ Str::limit($p_post->title, 65) }}</a></h2>

          </div>
        </div>
      </div>
      @endforeach
      @endif
    </div>
    <div class="clearfix"></div>
    <nav class="ow-pagination">
      <ul class="pagination">
        @foreach($pagi_posts->links()->elements as $pagination)
        @php($count = 1)
        @foreach($pagination as $paginate)
        <li class="{{ (url()->full() == $paginate) ? 'active' : '' }}"><a href="{{URL::to(str_replace('?', '/?', $paginate))}}">{{$count}}</a></li>
        @php($count += 1)
        @endforeach
        @endforeach
      </ul>
    </nav>
  </div>

</div>

@endsection