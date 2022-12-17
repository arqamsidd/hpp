<?php $page_check = "product_page"; ?> @extends('frontend.layouts.app') @section('content') <section class="banner-section">
  <div class="container">
    <div class="row row-box">
      <div class="col-sm-6">
        <div class="banner-main wow fadeInLeft">
          <div class="banner-text">
            <h1>{{$product['name']}}</h1>
            <h1>{{$product['seoname']}}</h1>
            <p>{{$product['title']}}</p>
          </div>
          <div class="bnr-side-img"> <img src="{{ cdn('storage/product_uploads') }}/<?= $product['bg_image']; ?>"> </div>
        </div>
      </div>
      <div class="col-sm-offset-1 col-sm-5">
        <div class="bnr-form-product">
          <h4>Instant Quote</h4>
          <form method="POST" action="/mail.php">
            <div class="form-div-box bnr-new-form-st">
              <div class="form-div-box col-sm-12 p0"> <input name="cn" required class="form-control" type="text" placeholder="Enter Your Name"> </div>
              <div class="form-div-box col-sm-12 p0"> <input name="em" required class="form-control" type="email" placeholder="Email Address"> </div>
              <div class="form-div-box fem-bx col-sm-12 p0"> <input name="pn" required class="form-control" type="number" placeholder="Phone Number"> </div>
              <div class="form-div-box fem-bx col-sm-9 p0"> <input name="bxt" required class="form-control" type="text" placeholder="Box Type"> </div>
              <div class="form-div-box fem-bx col-sm-3 p0"> <input name="un" required class="form-control" type="text" placeholder="Unit"> </div>
              <div class="form-div-box form-div-msg-bx"> <textarea class="form-control san-bor" name="msg" placeholder="Project Description" required></textarea> </div>
              <div class="form-div-box-new "> <button type="submit" class="btn custom-btn1">Submit </button> <input type="hidden" name="lead_area" value=""> <input type="hidden" name="lead_org_price" value=""> <input type="hidden" name="send" value="1"> <!-- Email Source --> <input type="hidden" name="lb_source" value="" /> <input type="hidden" name="lb_source_cat" value="" /> <input type="hidden" name="lb_source_nam" value="" /> <input type="hidden" name="lb_source_ema" value="" /> <input type="hidden" name="lb_source_con" value="" /> <input type="hidden" name="lb_source_pho" value="" /> <input type="hidden" name="lb_source_off" value="" /> <!-- Customer Info --> <input type="hidden" name="fullpageurl" value="" /> <input type="hidden" name="pageurl" value="" /> <!-- ip2Location --> <input type="hidden" name="ip2loc_ip" value="" /> <input type="hidden" name="ip2loc_isp" value="" /> <input type="hidden" name="ip2loc_org" value="" /> <input type="hidden" name="ip2loc_country" value="" /> <input type="hidden" name="ip2loc_region" value="" /> <input type="hidden" name="ip2loc_city" value="" /> </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section> @include("frontend/includes/logo-slider") <section class="tuckbox-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="tuck-text wow fadeInLeft">
          <h1>{{$product['name']}}</h1>
          <p>{{$product['title']}}</p>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="tuck-maon-box wow fadeInRight">
          <div class="tuck-main">
            <h3>Shipping:</h3>
            <p>Free shipping for deliveries in the USA, Canada, and Australia.</p>
          </div>
          <div class="tuck-main">
            <h3>Payments:</h3> <img src="{{asset('frontend')}}/images/payment-1.png">
          </div>
          <div class="tuck-main">
            <h3>Guarantee:</h3>
            <p>24/7 Customer Support, Fast Turnaround, Unique Design</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 tuck-custom-box row">
        <div class="col-sm-7 wow fadeInLeft">
          <div class="tuck-slider">
            <div class="tuck-slider-for"> @if(!empty($gallery_images)) @foreach($gallery_images as $g_img) <div>
                <div class="tuckbox-img">
                  <!-- <img loading="lazy" src="{{asset('frontend')}}/images/tuckbox-11.png"> --> <img loading="lazy" src="{{ asset('storage/product_uploads') }}/<?= $g_img->image_name; ?>">
                </div>
              </div> @endforeach @endif </div>
          </div>
          <div class="row touck new-box tuck-slider-nav"> @if(!empty($gallery_images)) @foreach($gallery_images as $g_img) <div class="">
              <div class="tuckbox-box wow fadeInLeft" data-wow-duration="1s">
                <div class="tuck-img-box"> <img loading="lazy" src="{{ asset('storage/product_uploads') }}/<?= $g_img->image_name; ?>"> </div>
              </div>
            </div> @endforeach @endif </div>
        </div>
        <div class="col-sm-5 tuck-form-main wow fadeInRight">
          <div class="ftr-form-st">
            <form action="/mail.php" method="post" class="wpcf7-form init">
              <div class="cat-bx-txt">
                <h4>Get A Custom Quote</h4>
              </div>
              <div class="cat-form-2">
                <ul class="nav" role="tablist">
                  <li role="presentation" class="active"><a href="#one" aria-controls="home" role="tab" data-toggle="tab">Step 1</a></li>
                  <li role="presentation"><a href="#two" aria-controls="profile" role="tab" data-toggle="tab">Step 2</a></li>
                </ul>
                <div class="tab-content">
                  <!-- Step 1 -->
                  <div role="tabpanel" class="tab-pane active" id="one">
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <div class="breif-box1 breif-box5">
                          <h4>Corrugated Material</h4>
                          <div class="row">
                            <div class="col-sm-12"> <span class="wpcf7-form-control-wrap material"><select name="material" class="wpcf7-form-control wpcf7-select intrested" aria-invalid="false">
                                  <option value="Standard white Corrugated Cardboard">Standard white Corrugated Cardboard</option>
                                  <option value="1 COLOUR">1 COLOUR</option>
                                  <option value="2 COLOUR">2 COLOUR</option>
                                  <option value="3 COLOUR">3 COLOUR</option>
                                  <option value="4 COLOUR">4 COLOUR</option>
                                  <option value="PANTONE">PANTONE</option>
                                  <option value="METALLIC">METALLIC</option>
                                  <option value="NO IDEA">NO IDEA</option>
                                </select></span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4 form-group">
                        <div class="breif-box1 breif-box5 qty-inp">
                          <h5>Length(in)</h5>
                          <div class="row">
                            <div class="col-sm-12"> <span class="wpcf7-form-control-wrap length"><input type="number" name="length" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number input_product_des" aria-required="true" aria-invalid="false" placeholder="1"></span> </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 form-group">
                        <div class="breif-box1 breif-box5 qty-inp">
                          <h5>Width(in)</h5>
                          <div class="row">
                            <div class="col-sm-12"> <span class="wpcf7-form-control-wrap width"><input type="number" name="width" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number input_product_des" aria-required="true" aria-invalid="false" placeholder="1"></span> </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 form-group">
                        <div class="breif-box1 breif-box5 qty-inp">
                          <h5>Depth(in)</h5>
                          <div class="row">
                            <div class="col-sm-12"> <span class="wpcf7-form-control-wrap depth"><input type="number" name="depth" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number input_product_des" aria-required="true" aria-invalid="false" placeholder="1"></span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 form-nu-box form-group">
                        <div class="breif-box1 breif-box5 qty-bx-brif">
                          <h4>Quantity</h4>
                          <div class="row">
                            <div class="col-sm-12"> <span class="wpcf7-form-control-wrap printing"><select name="printing" class="wpcf7-form-control wpcf7-select intrested" aria-invalid="false">
                                  <option value="250">250</option>
                                  <option value="300">300</option>
                                  <option value="350">350</option>
                                  <option value="400">400</option>
                                </select></span> </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 form-nu-box form-group">
                        <div class="breif-box1 breif-box5 qty-bx-brif">
                          <h4>Printed Sides</h4>
                          <div class="row">
                            <div class="col-sm-12"> <span class="wpcf7-form-control-wrap printing"><select name="printing" class="wpcf7-form-control wpcf7-select intrested" aria-invalid="false">
                                  <option value="Both Side">Both Side</option>
                                  <option value="One Side">One Side</option>
                                </select></span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 form-group">
                        <div class="breif-box1 breif-box5">
                          <h4>Materials</h4>
                          <div class="row">
                            <div class="col-sm-12"> <span class="wpcf7-form-control-wrap material"><select name="material" class="wpcf7-form-control wpcf7-select intrested" aria-invalid="false">
                                  <option value="Standard white Corrugated Cardboard">Standard white Corrugated Cardboard</option>
                                  <option value="1 COLOUR">1 COLOUR</option>
                                  <option value="2 COLOUR">2 COLOUR</option>
                                  <option value="3 COLOUR">3 COLOUR</option>
                                  <option value="4 COLOUR">4 COLOUR</option>
                                  <option value="PANTONE">PANTONE</option>
                                  <option value="METALLIC">METALLIC</option>
                                  <option value="NO IDEA">NO IDEA</option>
                                </select></span> </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12 form-group">
                        <div class="breif-box1 breif-box5">
                          <h4>Premium Finishes</h4>
                          <div class="row">
                            <div class="col-sm-12"> <span class="wpcf7-form-control-wrap printing"><select name="printing" class="wpcf7-form-control wpcf7-select intrested" aria-invalid="false">
                                  <option value="Gold Foil">Gold Foil</option>
                                  <option value="1 COLOUR">1 COLOUR</option>
                                  <option value="2 COLOUR">2 COLOUR</option>
                                  <option value="3 COLOUR">3 COLOUR</option>
                                  <option value="4 COLOUR">4 COLOUR</option>
                                  <option value="PANTONE">PANTONE</option>
                                  <option value="METALLIC">METALLIC</option>
                                  <option value="NO IDEA">NO IDEA</option>
                                </select></span> </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="chk-col-custom">
                          <h5>Using Professional Design Editor?</h5> <input type="submit" value="Next" class="wpcf7-form-control wpcf7-submit btn btn-primary cat-form-btn-st"> <input type="hidden" id="lead_area_popup" name="lead_area" value="for $19"> <input type="hidden" id="lead_org_price" name="lead_org_price" value="19"> <input type="hidden" name="send" value="1"> <!-- <input type="hidden" name="service_id" value="5669" class="service_id"> --> <input type="hidden" name="lb_source" value="" /> <input type="hidden" name="lb_source_cat" value="" /> <input type="hidden" name="lb_source_nam" value="" /> <input type="hidden" name="lb_source_ema" value="" /> <input type="hidden" name="lb_source_con" value="" /> <input type="hidden" name="lb_source_pho" value="" /> <input type="hidden" name="lb_source_off" value="" /> <input type="hidden" name="fullpageurl" value="" /> <input type="hidden" name="pageurl" value="" /> <input type="hidden" name="ip2loc_ip" value="" /> <input type="hidden" name="ip2loc_isp" value="" /> <input type="hidden" name="ip2loc_org" value="" /> <input type="hidden" name="ip2loc_country" value="" /> <input type="hidden" name="ip2loc_region" value="" />
                        </div>
                      </div>
                    </div>
                  </div> <!-- Step 2 -->
                  <div role="tabpanel" class="tab-pane" id="two">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group"> <input type="text" name="cn" class="form-control" placeholder="Full Name" required=""> </div>
                      </div>
                      <div class="col-md-6 email-col-fm-bx-pd">
                        <div class="form-group"> <input type="email" name="em" class="form-control" placeholder="Email Address" required=""> </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 p0">
                        <div class="form-group"> <input type="tel" id="phone" name="pn" class="form-control" data-validation="Phone Number" placeholder="Phone" required=""> </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="chk-col-custom">
                          <h5>Using Professional Design Editor?</h5> <input type="submit" value="Order Now & Receive a Dieline Template" class="wpcf7-form-control wpcf7-submit btn btn-primary cat-form-btn-st"> <input type="hidden" id="lead_area_popup" name="lead_area" value="for $19"> <input type="hidden" id="lead_org_price" name="lead_org_price" value="19"> <input type="hidden" name="send" value="1"> <!-- <input type="hidden" name="service_id" value="5669" class="service_id"> --> <input type="hidden" name="lb_source" value="" /> <input type="hidden" name="lb_source_cat" value="" /> <input type="hidden" name="lb_source_nam" value="" /> <input type="hidden" name="lb_source_ema" value="" /> <input type="hidden" name="lb_source_con" value="" /> <input type="hidden" name="lb_source_pho" value="" /> <input type="hidden" name="lb_source_off" value="" /> <input type="hidden" name="fullpageurl" value="" /> <input type="hidden" name="pageurl" value="" /> <input type="hidden" name="ip2loc_ip" value="" /> <input type="hidden" name="ip2loc_isp" value="" /> <input type="hidden" name="ip2loc_org" value="" /> <input type="hidden" name="ip2loc_country" value="" /> <input type="hidden" name="ip2loc_region" value="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="wpcf7-response-output" aria-hidden="true"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="material-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="hd-txt material-txt">
          <h2>Premium Finishes</h2>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="material-slider-st mcs-horizontal">
          <div class="material-slider">
            <div>
              <div class="material-bx"> <img src="{{asset('frontend')}}/images/material-img-1.png">
                <h4>Standard White <br>Corrugated Cardboard</h4>
                <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
              </div>
            </div>
            <div>
              <div class="material-bx"> <img src="{{asset('frontend')}}/images/material-img-1.png">
                <h4>Standard White <br>Corrugated Cardboard</h4>
                <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
              </div>
            </div>
            <div>
              <div class="material-bx"> <img src="{{asset('frontend')}}/images/material-img-1.png">
                <h4>Standard White <br>Corrugated Cardboard</h4>
                <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
              </div>
            </div>
            <div>
              <div class="material-bx"> <img src="{{asset('frontend')}}/images/material-img-1.png">
                <h4>Standard White <br>Corrugated Cardboard</h4>
                <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
              </div>
            </div>
            <div>
              <div class="material-bx"> <img src="{{asset('frontend')}}/images/material-img-1.png">
                <h4>Standard White <br>Corrugated Cardboard</h4>
                <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
              </div>
            </div>
            <div>
              <div class="material-bx"> <img src="{{asset('frontend')}}/images/material-img-1.png">
                <h4>Standard White <br>Corrugated Cardboard</h4>
                <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
              </div>
            </div>
            <div>
              <div class="material-bx"> <img src="{{asset('frontend')}}/images/material-img-1.png">
                <h4>Standard White <br>Corrugated Cardboard</h4>
                <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
              </div>
            </div>
            <div>
              <div class="material-bx"> <img src="{{asset('frontend')}}/images/material-img-1.png">
                <h4>Standard White <br>Corrugated Cardboard</h4>
                <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
              </div>
            </div>
            <div>
              <div class="material-bx"> <img src="{{asset('frontend')}}/images/material-img-1.png">
                <h4>Standard White <br>Corrugated Cardboard</h4>
                <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
              </div>
            </div>
            <div>
              <div class="material-bx"> <img src="{{asset('frontend')}}/images/material-img-1.png">
                <h4>Standard White <br>Corrugated Cardboard</h4>
                <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="material-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="hd-txt material-txt">
          <h2>Materials</h2>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="material-slider-st mcs-horizontal">
          <div class="material-slider">
            <div>
              <div class="material-bx"> <img src="{{asset('frontend')}}/images/material-img-1.png">
                <h4>Standard White <br>Corrugated Cardboard</h4>
                <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
              </div>
            </div>
            <div>
              <div class="material-bx"> <img src="{{asset('frontend')}}/images/material-img-1.png">
                <h4>Standard White <br>Corrugated Cardboard</h4>
                <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
              </div>
            </div>
            <div>
              <div class="material-bx"> <img src="{{asset('frontend')}}/images/material-img-1.png">
                <h4>Standard White <br>Corrugated Cardboard</h4>
                <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
              </div>
            </div>
            <div>
              <div class="material-bx"> <img src="{{asset('frontend')}}/images/material-img-1.png">
                <h4>Standard White <br>Corrugated Cardboard</h4>
                <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
              </div>
            </div>
            <div>
              <div class="material-bx"> <img src="{{asset('frontend')}}/images/material-img-1.png">
                <h4>Standard White <br>Corrugated Cardboard</h4>
                <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
              </div>
            </div>
            <div>
              <div class="material-bx"> <img src="{{asset('frontend')}}/images/material-img-1.png">
                <h4>Standard White <br>Corrugated Cardboard</h4>
                <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
              </div>
            </div>
            <div>
              <div class="material-bx"> <img src="{{asset('frontend')}}/images/material-img-1.png">
                <h4>Standard White <br>Corrugated Cardboard</h4>
                <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
              </div>
            </div>
            <div>
              <div class="material-bx"> <img src="{{asset('frontend')}}/images/material-img-1.png">
                <h4>Standard White <br>Corrugated Cardboard</h4>
                <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
              </div>
            </div>
            <div>
              <div class="material-bx"> <img src="{{asset('frontend')}}/images/material-img-1.png">
                <h4>Standard White <br>Corrugated Cardboard</h4>
                <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
              </div>
            </div>
            <div>
              <div class="material-bx"> <img src="{{asset('frontend')}}/images/material-img-1.png">
                <h4>Standard White <br>Corrugated Cardboard</h4>
                <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> @include("frontend/includes/cta-sec") <section class="portfolio-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="port-text">
          <h2> Related Products </h2>
          <p>With regards to buying footwear whether casual, formal, or fashion icons choose from our innovative custom shoe boxes categories. A Variety of sizes, shapes, and designs will make your customer fall in love with them.</p>
        </div>
      </div>
      <div class="col-sm-12 p0">
        <div class="col-sm-6 port-1-col">
          <div class="port-box box18"> <a href="{{asset('frontend')}}/images/portfolio-product/port-1.png" class="fancybox" rel="ligthbox" tabindex="0"> <img loading="lazy" src="{{asset('frontend')}}/images/portfolio-product/port-1.png">
              <div class="box-content"> <i class="fa fa-plus"></i> </div>
            </a> </div>
        </div>
        <div class="col-sm-6 p0">
          <div class="col-sm-12 port-2-col ">
            <div class="port-box box18"> <a href="{{asset('frontend')}}/images/portfolio-product/port-2.png" class="fancybox" rel="ligthbox" tabindex="0"> <img loading="lazy" src="{{asset('frontend')}}/images/portfolio-product/port-2.png">
                <div class="box-content"> <i class="fa fa-plus"></i> </div>
              </a> </div>
          </div>
          <div class="col-sm-6 port-3-col">
            <div class="port-box box18"> <a href="{{asset('frontend')}}/images/portfolio-product/port-3.png" class="fancybox" rel="ligthbox" tabindex="0"> <img loading="lazy" src="{{asset('frontend')}}/images/portfolio-product/port-3.png">
                <div class="box-content"> <i class="fa fa-plus"></i> </div>
              </a> </div>
          </div>
          <div class="col-sm-6 port-4-col">
            <div class="port-box box18"> <a href="{{asset('frontend')}}/images/portfolio-product/port-4.png" class="fancybox" rel="ligthbox" tabindex="0"> <img loading="lazy" src="{{asset('frontend')}}/images/portfolio-product/port-4.png">
                <div class="box-content"> <i class="fa fa-plus"></i> </div>
              </a> </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 p0">
        <div class="col-sm-6 p0">
          <div class="col-sm-12 port-5-col ">
            <div class="port-box box18"> <a href="{{asset('frontend')}}/images/portfolio-product/port-5.png" class="fancybox" rel="ligthbox" tabindex="0"> <img loading="lazy" src="{{asset('frontend')}}/images/portfolio-product/port-5.png">
                <div class="box-content"> <i class="fa fa-plus"></i> </div>
              </a> </div>
          </div>
          <div class="col-sm-12 port-6-col ">
            <div class="port-box box18"> <a href="{{asset('frontend')}}/images/portfolio-product/port-6.png" class="fancybox" rel="ligthbox" tabindex="0"> <img loading="lazy" src="{{asset('frontend')}}/images/portfolio-product/port-6.png">
                <div class="box-content"> <i class="fa fa-plus"></i> </div>
              </a> </div>
          </div>
        </div>
        <div class="col-sm-6 port-7-col">
          <div class="port-box box18"> <a href="{{asset('frontend')}}/images/portfolio-product/port-7.png" class="fancybox" rel="ligthbox" tabindex="0"> <img loading="lazy" src="{{asset('frontend')}}/images/portfolio-product/port-7.png">
              <div class="box-content"> <i class="fa fa-plus"></i> </div>
            </a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="sample-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="sample-text wow fadeInLeft" data-wow-duration="1s">
          <h2>Get a Free Sample Kit</h2>
          <p>We understand how impactful a product’s packaging is. That’s why we provide top-notch packaging material services. In order to provide our customers with an exceptional experience, we also provide free sample kits from our past orders. </p>
        </div>
        <div class="sample-btn wow fadeInLeft" data-wow-duration="1s"> <a href="javascript:;" class="wite-btn popup-btn">Get a Quote</a> <a href="javascript:;" class="black-btn">Book a Call</a> </div>
      </div>
      <div class="col-sm-6 bnr-form-main wow zoomIn">
        <form method="POST" action="mail.php">
          <div class="form-div-main">
            <div class=" col-sm-6 form-div"> <input name="cn" required class="form-control" type="text" placeholder="Enter Name"> </div>
            <div class=" col-sm-6 form-div"> <input name="em" required class="form-control" type="email" placeholder="Enter Email"> </div>
            <div class=" col-sm-6 form-div"> <input name="pn" required class="form-control" type="number" placeholder="Enter Phone"> </div>
            <div class=" col-sm-6 form-div"> <input name="cmn" required class="form-control" type="text" placeholder="Company Name"> </div>
            <div class="col-sm-12 form-div"> <textarea class="form-control san-bor" name="msg" placeholder="Message" required></textarea> </div>
            <div class=" col-sm-12 form-div bnr-form-btn">
              <!-- <input type="submit" class="btn form-btn" value="submit" /> --> <input type="submit" name="submit" class="btn form-btn" value="Submit"> <input type="hidden" name="lead_area" value=""> <input type="hidden" name="lead_org_price" value=""> <input type="hidden" name="send" value="1"> <!-- Email Source --> <input type="hidden" name="lb_source" value="" /> <input type="hidden" name="lb_source_cat" value="" /> <input type="hidden" name="lb_source_nam" value="" /> <input type="hidden" name="lb_source_ema" value="" /> <input type="hidden" name="lb_source_con" value="" /> <input type="hidden" name="lb_source_pho" value="" /> <input type="hidden" name="lb_source_off" value="" /> <!-- Customer Info --> <input type="hidden" name="fullpageurl" value="" /> <input type="hidden" name="pageurl" value="" /> <!-- ip2Location --> <input type="hidden" name="ip2loc_ip" value="" /> <input type="hidden" name="ip2loc_isp" value="" /> <input type="hidden" name="ip2loc_org" value="" /> <input type="hidden" name="ip2loc_country" value="" /> <input type="hidden" name="ip2loc_region" value="" /> <input type="hidden" name="ip2loc_city" value="" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<section class="what-sec">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="what-img"> <img src="{{asset('frontend')}}/images/what-img.png"> </div>
      </div>
      <div class="col-md-6">
        <div class="what-head">
          <h3> The place of shoe boxes in <br> High-end businesses</h3>
          <p>Shoe boxes are an important part of our lifestyle as it has become a basic necessity. After buying their favorite pair of shoes people are more concerned about the shoe boxes in which they have to keep them. These boxes are of great significance because they are manufactured out of the finest quality cardboard that is durable and sturdy. They are eco-friendly and safe to carry anywhere. With the growing competition in the market, many brands are trying to create a distinctive mark through creative packaging. <br><br> Half Price Packaging offers you a great deal of creating versatile custom shoe boxes which is a source of inspiration for the customers. They are easy to assemble, carry and a fantastic thing to present to the customers. They can be personalized into all sorts of customization from design to eye-catching prints. Our customer team is ready to help you 24/7 regarding placing your online orders so what you waiting for. </p>
          <div class="banner-btn wow bounceIn"> <a href="javascript:;" class="red-btn popup-btn">Get Started</a> <a href="javascript:;" class="black-btn">Live Chat</a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="cta-section cta-section-2">
  <div class="container">
    <div class="row">
      <div class="col-sm-offset-1 col-sm-6">
        <div class="cta-ext wow fadeInLeft" data-wow-duration="1s">
          <h2>Half Price packaging ensures complete perfection for your packaging desires! </h2>
          <p>Discover the world of exclusive designs and amazing prints that will make your shoe boxes stand out in the crowd.</p>
        </div>
        <div class="banner-btn wow fadeInLeft" data-wow-duration="1s"> <a href="javascript:;" class="red-btn popup-btn">Get Started</a> <a href="javascript:;" class="black-btn">Live Chat</a> </div>
      </div>
      <div class="col-sm-4">
        <div class="cta-img-box wow zoomIn"> <img loading="lazy" src="{{asset('frontend')}}/images/cta-img-2.png"> </div>
      </div>
    </div>
  </div>
</section>
<section class=""></section>
<section class="writer-team-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="hd-txt wow fadeInLeft" data-wow-duration="1s">
          <h2>What Our Clients Say About Us</h2>
          <p>We have assisted over 3500 businesses, helping them take their branding to a whole new level by creating unique customized custom boxes and packages for them.</p>
          <div class="writ-img"> <img loading="lazy" src="{{asset('frontend')}}/images/trustpilot-1.png"> </div>
        </div>
      </div>
      <div class="col-sm-12">
        <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-tabs-horizontal">
          <li class="active "><a href="#tab1" data-toggle="tab" aria-expanded="false"><img src="{{asset('frontend')}}/images/testi-tab-img-1.png"></a></li>
          <li class=""><a href="#tab2" data-toggle="tab" aria-expanded="false"><img src="{{asset('frontend')}}/images/testi-tab-img-2.png"></a></li>
          <li class=""><a href="#tab3" data-toggle="tab" aria-expanded="false"><img src="{{asset('frontend')}}/images/testi-tab-img-3.png"></a></li>
          <li class=""><a href="#tab4" data-toggle="tab" aria-expanded="false"><img src="{{asset('frontend')}}/images/testi-tab-img-4.png"></a></li>
        </ul>
      </div>
      <div class="col-sm-12">
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="tab1">
            <div class="testi-slider-pro">
              <div>
                <div class="testi-box">
                  <div class="testi-hd-st"> <img src="{{asset('frontend')}}/images/testi-user-1.png">
                    <div class="tesit-hd-txt">
                      <p>Customer ID: <span>#675098</span></p>
                    </div>
                  </div>
                  <h4>Essay (any type)</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                  <div class="testi-ftr-txt">
                    <p>Writer: <b>Vincent E</b></p>
                    <h5>06/30/2022</h5>
                  </div>
                </div>
              </div>
              <div>
                <div class="testi-box">
                  <div class="testi-hd-st"> <img src="{{asset('frontend')}}/images/testi-user-1.png">
                    <div class="tesit-hd-txt">
                      <p>Customer ID: <span>#675098</span></p>
                    </div>
                  </div>
                  <h4>Essay (any type)</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                  <div class="testi-ftr-txt">
                    <p>Writer: <b>Vincent E</b></p>
                    <h5>06/30/2022</h5>
                  </div>
                </div>
              </div>
              <div>
                <div class="testi-box">
                  <div class="testi-hd-st"> <img src="{{asset('frontend')}}/images/testi-user-1.png">
                    <div class="tesit-hd-txt">
                      <p>Customer ID: <span>#675098</span></p>
                    </div>
                  </div>
                  <h4>Essay (any type)</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                  <div class="testi-ftr-txt">
                    <p>Writer: <b>Vincent E</b></p>
                    <h5>06/30/2022</h5>
                  </div>
                </div>
              </div>
              <div>
                <div class="testi-box">
                  <div class="testi-hd-st"> <img src="{{asset('frontend')}}/images/testi-user-1.png">
                    <div class="tesit-hd-txt">
                      <p>Customer ID: <span>#675098</span></p>
                    </div>
                  </div>
                  <h4>Essay (any type)</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                  <div class="testi-ftr-txt">
                    <p>Writer: <b>Vincent E</b></p>
                    <h5>06/30/2022</h5>
                  </div>
                </div>
              </div>
              <div>
                <div class="testi-box">
                  <div class="testi-hd-st"> <img src="{{asset('frontend')}}/images/testi-user-1.png">
                    <div class="tesit-hd-txt">
                      <p>Customer ID: <span>#675098</span></p>
                    </div>
                  </div>
                  <h4>Essay (any type)</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                  <div class="testi-ftr-txt">
                    <p>Writer: <b>Vincent E</b></p>
                    <h5>06/30/2022</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade in" id="tab2">
            <div class="testi-slider-pro">
              <div>
                <div class="testi-box">
                  <div class="testi-hd-st"> <img src="{{asset('frontend')}}/images/testi-user-1.png">
                    <div class="tesit-hd-txt">
                      <p>Customer ID: <span>#675098</span></p>
                    </div>
                  </div>
                  <h4>Essay (any type)</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                  <div class="testi-ftr-txt">
                    <p>Writer: <b>Vincent E</b></p>
                    <h5>06/30/2022</h5>
                  </div>
                </div>
              </div>
              <div>
                <div class="testi-box">
                  <div class="testi-hd-st"> <img src="{{asset('frontend')}}/images/testi-user-1.png">
                    <div class="tesit-hd-txt">
                      <p>Customer ID: <span>#675098</span></p>
                    </div>
                  </div>
                  <h4>Essay (any type)</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                  <div class="testi-ftr-txt">
                    <p>Writer: <b>Vincent E</b></p>
                    <h5>06/30/2022</h5>
                  </div>
                </div>
              </div>
              <div>
                <div class="testi-box">
                  <div class="testi-hd-st"> <img src="{{asset('frontend')}}/images/testi-user-1.png">
                    <div class="tesit-hd-txt">
                      <p>Customer ID: <span>#675098</span></p>
                    </div>
                  </div>
                  <h4>Essay (any type)</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                  <div class="testi-ftr-txt">
                    <p>Writer: <b>Vincent E</b></p>
                    <h5>06/30/2022</h5>
                  </div>
                </div>
              </div>
              <div>
                <div class="testi-box">
                  <div class="testi-hd-st"> <img src="{{asset('frontend')}}/images/testi-user-1.png">
                    <div class="tesit-hd-txt">
                      <p>Customer ID: <span>#675098</span></p>
                    </div>
                  </div>
                  <h4>Essay (any type)</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                  <div class="testi-ftr-txt">
                    <p>Writer: <b>Vincent E</b></p>
                    <h5>06/30/2022</h5>
                  </div>
                </div>
              </div>
              <div>
                <div class="testi-box">
                  <div class="testi-hd-st"> <img src="{{asset('frontend')}}/images/testi-user-1.png">
                    <div class="tesit-hd-txt">
                      <p>Customer ID: <span>#675098</span></p>
                    </div>
                  </div>
                  <h4>Essay (any type)</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                  <div class="testi-ftr-txt">
                    <p>Writer: <b>Vincent E</b></p>
                    <h5>06/30/2022</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade in" id="tab3">
            <div class="testi-slider-pro">
              <div>
                <div class="testi-box">
                  <div class="testi-hd-st"> <img src="{{asset('frontend')}}/images/testi-user-1.png">
                    <div class="tesit-hd-txt">
                      <p>Customer ID: <span>#675098</span></p>
                    </div>
                  </div>
                  <h4>Essay (any type)</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                  <div class="testi-ftr-txt">
                    <p>Writer: <b>Vincent E</b></p>
                    <h5>06/30/2022</h5>
                  </div>
                </div>
              </div>
              <div>
                <div class="testi-box">
                  <div class="testi-hd-st"> <img src="{{asset('frontend')}}/images/testi-user-1.png">
                    <div class="tesit-hd-txt">
                      <p>Customer ID: <span>#675098</span></p>
                    </div>
                  </div>
                  <h4>Essay (any type)</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                  <div class="testi-ftr-txt">
                    <p>Writer: <b>Vincent E</b></p>
                    <h5>06/30/2022</h5>
                  </div>
                </div>
              </div>
              <div>
                <div class="testi-box">
                  <div class="testi-hd-st"> <img src="{{asset('frontend')}}/images/testi-user-1.png">
                    <div class="tesit-hd-txt">
                      <p>Customer ID: <span>#675098</span></p>
                    </div>
                  </div>
                  <h4>Essay (any type)</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                  <div class="testi-ftr-txt">
                    <p>Writer: <b>Vincent E</b></p>
                    <h5>06/30/2022</h5>
                  </div>
                </div>
              </div>
              <div>
                <div class="testi-box">
                  <div class="testi-hd-st"> <img src="{{asset('frontend')}}/images/testi-user-1.png">
                    <div class="tesit-hd-txt">
                      <p>Customer ID: <span>#675098</span></p>
                    </div>
                  </div>
                  <h4>Essay (any type)</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                  <div class="testi-ftr-txt">
                    <p>Writer: <b>Vincent E</b></p>
                    <h5>06/30/2022</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade in" id="tab4">
            <div class="testi-slider-pro">
              <div>
                <div class="testi-box">
                  <div class="testi-hd-st"> <img src="{{asset('frontend')}}/images/testi-user-1.png">
                    <div class="tesit-hd-txt">
                      <p>Customer ID: <span>#675098</span></p>
                    </div>
                  </div>
                  <h4>Essay (any type)</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                  <div class="testi-ftr-txt">
                    <p>Writer: <b>Vincent E</b></p>
                    <h5>06/30/2022</h5>
                  </div>
                </div>
              </div>
              <div>
                <div class="testi-box">
                  <div class="testi-hd-st"> <img src="{{asset('frontend')}}/images/testi-user-1.png">
                    <div class="tesit-hd-txt">
                      <p>Customer ID: <span>#675098</span></p>
                    </div>
                  </div>
                  <h4>Essay (any type)</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                  <div class="testi-ftr-txt">
                    <p>Writer: <b>Vincent E</b></p>
                    <h5>06/30/2022</h5>
                  </div>
                </div>
              </div>
              <div>
                <div class="testi-box">
                  <div class="testi-hd-st"> <img src="{{asset('frontend')}}/images/testi-user-1.png">
                    <div class="tesit-hd-txt">
                      <p>Customer ID: <span>#675098</span></p>
                    </div>
                  </div>
                  <h4>Essay (any type)</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                  <div class="testi-ftr-txt">
                    <p>Writer: <b>Vincent E</b></p>
                    <h5>06/30/2022</h5>
                  </div>
                </div>
              </div>
              <div>
                <div class="testi-box">
                  <div class="testi-hd-st"> <img src="{{asset('frontend')}}/images/testi-user-1.png">
                    <div class="tesit-hd-txt">
                      <p>Customer ID: <span>#675098</span></p>
                    </div>
                  </div>
                  <h4>Essay (any type)</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                  <div class="testi-ftr-txt">
                    <p>Writer: <b>Vincent E</b></p>
                    <h5>06/30/2022</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="footer-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-5">
        <div class="footer-main wow fadeInLeft" data-wow-duration="1s">
          <h4>We Create What’s Trending</h4>
          <h2>Get in touch with us for a free consultation and sample kit.</h2>
          <p>Improve the image of your brand and build a unique brand identity by getting customized packaging materials made by Half Price Packaging. We are here to take care of all your brand’s packaging material needs. </p>
        </div>
        <div class="footyer-logos wow fadeInLeft" data-wow-duration="1s"> <img loading="lazy" src="{{asset('frontend')}}/images/footer-logos.png"> </div>
      </div>
      <div class="col-sm-6 col-sm-offset-1 bnr-form-col wow zoomIn">
        <form method="POST" action="/mail.php">
          <div class="form-div-box">
            <div class="form-div-box"> <input name="cn" required class="form-control" type="text" placeholder="Enter Your Name"> </div>
            <div class="form-div-box"> <input name="em" required class="form-control" type="email" placeholder="Email Address"> </div>
            <div class="form-div-box"> <input name="pn" required class="form-control" type="number" placeholder="Phone Number"> </div>
            <div class="form-div-box"> <textarea class="form-control san-bor" name="msg" placeholder="Message" required></textarea> </div>
            <div class="form-div-box-new "> <button type="submit" class="btn custom-btn1">Submit Now </button> <input type="hidden" name="lead_area" value=""> <input type="hidden" name="lead_org_price" value=""> <input type="hidden" name="send" value="1"> <!-- Email Source --> <input type="hidden" name="lb_source" value="" /> <input type="hidden" name="lb_source_cat" value="" /> <input type="hidden" name="lb_source_nam" value="" /> <input type="hidden" name="lb_source_ema" value="" /> <input type="hidden" name="lb_source_con" value="" /> <input type="hidden" name="lb_source_pho" value="" /> <input type="hidden" name="lb_source_off" value="" /> <!-- Customer Info --> <input type="hidden" name="fullpageurl" value="" /> <input type="hidden" name="pageurl" value="" /> <!-- ip2Location --> <input type="hidden" name="ip2loc_ip" value="" /> <input type="hidden" name="ip2loc_isp" value="" /> <input type="hidden" name="ip2loc_org" value="" /> <input type="hidden" name="ip2loc_country" value="" /> <input type="hidden" name="ip2loc_region" value="" /> <input type="hidden" name="ip2loc_city" value="" /> </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section> @include('frontend/includes/insta-widget') @endsection