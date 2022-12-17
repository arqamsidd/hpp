<?php $page_check = "shapes-and-styles";?>
@extends('frontend.layouts.app')
@section('content')
<section class="main-banner inner-banner  inner-shapes-banner" style="">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="bnr-txt">
					<h2 class="inner-heading wow fadeInUp">Shapes And Style</h2>
					
				</div>
			</div>
		</div>
	</div>
</section>
<section class="boxex-style portfolio-spacing">
	<div class="container">
		<div class="row">
			<div class="hd-txt text-center">
				<h2>Shapes And Style</h2>
				 <p class="wow fadeInUp">Amplify your products with our custom design boxes made for everyone!</p> 
			</div>
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3 col-md-3">
						<div class="portfolio-box wow fadeInUp popup-btn">
							<img src="{{ asset('frontend/images/box-by-style/Five-Panel-Hanger-Boxes.png') }}">
						</div>
						<p class="shapestyle"><a class="popup-btn" href="javascript:;">Five Panel Hanger Boxes</a></p>
					</div>
					<div class="col-sm-3 col-md-3">
					    <a href="mailer-boxes">
						<div class="portfolio-box wow fadeInUp">
							<img src="{{ asset('frontend/images/box-by-style/Mailer-Boxes.png') }}">
						</div>
						</a>
						<p class="shapestyle"><a href="mailer-boxes">Mailer Boxes </a></p>
					</div>
					<div class="col-sm-3 col-md-3">
					    <a href="pillow-boxes">
						<div class="portfolio-box wow fadeInUp">
							<img src="{{ asset('frontend/images/box-by-style/Pillow-Boxes.png') }}">
						</div>
						</a>
						<p class="shapestyle"><a href="pillow-boxes">Pillow Boxes</a></p>
					</div>
					<div class="col-sm-3 col-md-3">
					    <a href="pop-up-display-boxes">
						<div class="portfolio-box wow fadeInUp">
							<img src="{{ asset('frontend/images/box-by-style/Popup-Display-Boxes.png') }}">
						</div>
						</a>
						<p class="shapestyle"><a href="pop-up-display-boxes">Popup Display Boxes</a></p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 col-md-3">
					    <a href="custom-pyramid-boxes">
						<div class="portfolio-box wow fadeInUp">
							<img src="{{ asset('frontend/images/box-by-style/Pyramid-Boxes.png') }}">
						</div>
						</a>
						<p class="shapestyle"><a href="custom-pyramid-boxes">Pyramid Boxes</a></p>
					</div>
					<div class="col-sm-3 col-md-3">
					    <a href="hexagon-boxes">
						<div class="portfolio-box wow fadeInUp">
							<img src="{{ asset('frontend/images/box-by-style/Hexagon-Boxes.png') }}">
						</div>
						</a>
						<p class="shapestyle"><a href="hexagon-boxes">Hexagon Boxes</a></p>
					</div>
					<div class="col-sm-3 col-md-3">
						<div class="portfolio-box wow fadeInUp">
							<img src="{{ asset('frontend/images/box-by-style/Window-Display-Boxes.png') }}">
						</div>
						<p class="shapestyle"><a href="">Window Display Boxes</a></p>
					</div>
					<div class="col-sm-3 col-md-3">
						<div class="portfolio-box wow fadeInUp popup-btn">
							<img src="{{ asset('frontend/images/box-by-style/Telescope-Boxes.png') }}">
						</div>
						<p class="shapestyle"><a class="popup-btn" href="javascript:;">Telescope Boxes</a></p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 col-md-3">
					    <a href="cube-boxes">
						<div class="portfolio-box wow fadeInUp">
							<img src="{{ asset('frontend/images/box-by-style/Cube-Boxes.png') }}">
						</div>
						</a>
					<p class="shapestyle"><a href="cube-boxes">Cube Boxes</a></p>
					</div>
					<div class="col-sm-3 col-md-3">
						<div class="portfolio-box wow fadeInUp popup-btn">
							<img src="{{ asset('frontend/images/box-by-style/Round-Top-Boxes.png') }}">
						</div>
						<p class="shapestyle"><a class="popup-btn" href="javascript:;">Round Top Boxes</a></p>
					</div>
					<div class="col-sm-3 col-md-3">
					    <a href="gable-boxes">
						<div class="portfolio-box wow fadeInUp">
							<img src="{{ asset('frontend/images/box-by-style/Gable-Boxes.png') }}">
						</div>
						</a>
						<p class="shapestyle"><a href="gable-boxes">Gable Boxes</a></p>
					</div>
					<div class="col-sm-3 col-md-3">
						<div class="portfolio-box wow fadeInUp popup-btn">
							<img src="{{ asset('frontend/images/box-by-style/Tuck-Top-Auto-Bottom-Boxes.png') }}">
						</div>
						<p class="shapestyle"><a class="popup-btn" href="javascript:;">Tuck Top Auto Bottom Boxes</a></p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 col-md-3">
					    <a href="sleeve-boxes">
						<div class="portfolio-box wow fadeInUp">
							<img src="{{ asset('frontend/images/box-by-style/Sleeve-Boxes.png') }}">
						</div>
						</a>
						<p class="shapestyle"><a href="sleeve-boxes">Sleeve Boxes</a></p>
					</div>
					<div class="col-sm-3 col-md-3">
					    <a href="roll-end-tuck-boxes">
						<div class="portfolio-box wow fadeInUp">
							<img src="{{ asset('frontend/images/box-by-style/Roll-End-Tuck-Top-Boxes.png') }}">
						</div>
						</a>
						<p class="shapestyle"><a href="roll-end-tuck-boxes">Roll End Tuck Top Boxes</a></p>
					</div>
					<div class="col-sm-3 col-md-3">
						<div class="portfolio-box wow fadeInUp popup-btn">
							<img src="{{ asset('frontend/images/box-by-style/Roll-End-Lid-Boxes.png') }}">
						</div>
					<p class="shapestyle"><a class="popup-btn" href="javascript:;">Roll End Lid Boxes</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@include('frontend/includes/testimonial-all')
@include('frontend/includes/sample-kit-form')
@endsection