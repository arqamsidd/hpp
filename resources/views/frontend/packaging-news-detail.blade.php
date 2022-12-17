<?php $page_check = "packaging-news-detail"; ?>
@extends('frontend.layouts.app')
@section('content')
<section class="main-banner inner-banner inner-banner-portfolio short-header" style="">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="bnr-txt">
          <h2 class="inner-heading wow fadeInUp"> Packaging News Detail</h2>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pack-detl-inner-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-9">
        <div class="blog-detal-inr-st">
          <div class="blog-post-cntnt-st">
            <div class="shar-post">

              <div class="blog-share-link">
                <h4>Share this post:</h4>
                <ul>
                  <li>
                    <a href="https://www.facebook.com/sharer.php?u={{url()->full()}}" target="_blank">
                      <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{url()->full()}}" target="_blank">
                      <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/sharer.php?u={{url()->full()}}" target="_blank">
                      <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://twitter.com/share?url={{url()->full()}}" target="_blank">
                      <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="share-post-cntnt">
              <h4>{{$post->title}}</h4>
            </div>
          </div>
          <div class="blog-post-img-div">
            <img src="{{ asset('/assets/post_images/'.$post->image) }}" alt='{{$post->title}}'>
          </div>
          <div class="blog-post-cntnt">
            <?php
            echo $post->post;
            ?>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="blog-popular-news">
          <h3>Popular News</h3>
          @if(!empty($recent_posts))
          @foreach($recent_posts as $key => $r_post)
          <div class="new-pblog new-pblog-1">
            <h5>{{date('M d, Y',strtotime($r_post->created_at))}}</h5>
            <p> <a href="{{URL::to('/blog/' . $r_post->slug)}}">{{$r_post->title}}</a></p>
          </div>
          @endforeach
          @endif
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
@endsection