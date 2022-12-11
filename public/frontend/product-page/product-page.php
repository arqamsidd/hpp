<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title> Personalize your shoe boxes with Half Price packaging.  </title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/fancybox.css">
      <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
      <link rel="stylesheet" href="assets/css/accordian-jquery-ui.css">
      <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
      <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
      <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/icomo.css">
      <link rel="stylesheet" type="text/css" href="assets/css/fancybox.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css" />
      
      <link rel="icon" href="/images/fav.png" />
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
      <?php include '../header-inr-pg.php';?>
      <section class="banner-section">
         <div class="container">
            <div class="row row-box">
               <div class="col-sm-6">
                  <div class="banner-main wow fadeInLeft" >
                     <div class="banner-text">
                        <h4>Custom Cardboard</h4>
                        <h1>Shoe Boxes</h1>
                        <p>Get the highest quality custom packaging material and build a <br>unique brand image with fully customized boxes. </p>
                     </div>
                     <!-- <div class="form-btn">
                        <a href="javascript:;" class="fm-btn popup-btn">Get Instant Quote</a>
                     </div> -->
                     <div class="bnr-side-img">
                        <img src="assets/images/bnr-side-new-img.png">
                     </div>
                     
                  </div>
               </div>
               <div class="col-sm-offset-1 col-sm-5">
                  <div class="bnr-form-product">
                     <h4>Instant Quote</h4>
                     <form method="POST" action="/mail.php">
                        <div class="form-div-box bnr-new-form-st">
                           
                           <div class="form-div-box col-sm-12 p0">
                              <input name="cn" required class="form-control" type="text"   placeholder="Enter Your Name" >
                           </div>
                           <div class="form-div-box col-sm-12 p0">
                              <input name="em" required class="form-control" type="email"   placeholder="Email Address" >
                           </div>
                           <div class="form-div-box fem-bx col-sm-12 p0">
                              <input name="pn" required class="form-control" type="number"   placeholder="Phone Number" >
                           </div>
                           <div class="form-div-box fem-bx col-sm-9 p0">
                              <input name="bxt" required class="form-control" type="text"   placeholder="Box Type" >
                           </div>
                           <div class="form-div-box fem-bx col-sm-3 p0">
                              <input name="un" required class="form-control" type="text"   placeholder="Unit" >
                           </div>
                           <div class="form-div-box form-div-msg-bx">
                              <textarea class="form-control san-bor" name="msg" placeholder="Project Description" required></textarea>
                           </div>
                           <div class="form-div-box-new ">
                              <button type="submit" class="btn custom-btn1">Submit </button>
                              <input type="hidden" name="lead_area" value="">
                              <input type="hidden" name="lead_org_price" value="">
                              <input type="hidden" name="send" value="1">
                              <!-- Email Source -->
                              <input type="hidden" name="lb_source"     value="" />
                              <input type="hidden" name="lb_source_cat"    value="" />
                              <input type="hidden" name="lb_source_nam"    value="" />
                              <input type="hidden" name="lb_source_ema"    value="" />
                              <input type="hidden" name="lb_source_con"    value="" />
                              <input type="hidden" name="lb_source_pho"    value="" />
                              <input type="hidden" name="lb_source_off"    value="" />
                              <!-- Customer Info -->
                              <input type="hidden" name="fullpageurl"   value="" />
                              <input type="hidden" name="pageurl"       value="" />
                              <!-- ip2Location -->
                              <input type="hidden" name="ip2loc_ip"     value="" />
                              <input type="hidden" name="ip2loc_isp"       value="" />
                              <input type="hidden" name="ip2loc_org"       value="" />
                              <input type="hidden" name="ip2loc_country"   value="" />
                              <input type="hidden" name="ip2loc_region"    value="" />
                              <input type="hidden" name="ip2loc_city"   value="" />
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <!--   <div class="col-sm-6 col-sm-offset-1">
                  <form action="/mail.php" method="post" class="wpcf7-form init"  >
                     <div class="cat-bx-txt">
                        <h4>Get A Custom Quote</h4>
                     </div>
                     <div class="cat-form-2">
                        <div class="intr-txt">
                           <p>Enter Interior Dimensions</p>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <input type="text" name="cn" class="form-control" placeholder="Full Name" required="">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 email-col-fm-bx-pd">
                              <div class="form-group">
                                 <input type="email" name="em" class="form-control" placeholder="Email Address" required="">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <input type="tel" id="phone" name="pn" class="form-control" data-validation="Phone Number" placeholder="Phone" required="">
                              </div>
                           </div>
                        </div>
                        <div class="tab">
                           <div class="row">
                              <div class="col-sm-4">
                                 <div class="breif-box1 breif-box5 qty-inp">
                                    <h5>Length(in)</h5>
                                    <div class="row">
                                       <div class="col-sm-12">
                                          <span class="wpcf7-form-control-wrap length"><input type="number" name="length" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number input_product_des" aria-required="true" aria-invalid="false" placeholder="1"></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="breif-box1 breif-box5 qty-inp">
                                    <h5>Width(in)</h5>
                                    <div class="row">
                                       <div class="col-sm-12">
                                          <span class="wpcf7-form-control-wrap width"><input type="number" name="width" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number input_product_des" aria-required="true" aria-invalid="false" placeholder="1"></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="breif-box1 breif-box5 qty-inp">
                                    <h5>Depth(in)</h5>
                                    <div class="row">
                                       <div class="col-sm-12">
                                          <span class="wpcf7-form-control-wrap depth"><input type="number" name="depth" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number input_product_des" aria-required="true" aria-invalid="false" placeholder="1"></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="breif-box1 breif-box5">
                                    <h4>Corrugated Material</h4>
                                    <div class="row">
                                       <div class="col-sm-12">
                                          <span class="wpcf7-form-control-wrap material">
                                             <select name="material" class="wpcf7-form-control wpcf7-select intrested" aria-invalid="false">
                                                <option value="Standard white Corrugated Cardboard">Standard white Corrugated Cardboard</option>
                                                <option value="1 COLOUR">1 COLOUR</option>
                                                <option value="2 COLOUR">2 COLOUR</option>
                                                <option value="3 COLOUR">3 COLOUR</option>
                                                <option value="4 COLOUR">4 COLOUR</option>
                                                <option value="PANTONE">PANTONE</option>
                                                <option value="METALLIC">METALLIC</option>
                                                <option value="NO IDEA">NO IDEA</option>
                                             </select>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="breif-box1 breif-box5">
                                    <h4>Printed Sides</h4>
                                    <div class="row">
                                       <div class="col-sm-12">
                                          <span class="wpcf7-form-control-wrap printing">
                                             <select name="printing" class="wpcf7-form-control wpcf7-select intrested" aria-invalid="false">
                                                <option value="Outside Only-Fully Color">Outside Only-Fully Color</option>
                                                <option value="1 COLOUR">1 COLOUR</option>
                                                <option value="2 COLOUR">2 COLOUR</option>
                                                <option value="3 COLOUR">3 COLOUR</option>
                                                <option value="4 COLOUR">4 COLOUR</option>
                                                <option value="PANTONE">PANTONE</option>
                                                <option value="METALLIC">METALLIC</option>
                                                <option value="NO IDEA">NO IDEA</option>
                                             </select>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-12 form-nu-box">
                                 <div class="breif-box1 breif-box5 qty-bx-brif">
                                    <h4>Quantity</h4>
                                    <div class="row">
                                       <div class="col-sm-12">
                                          <span class="wpcf7-form-control-wrap printing">
                                             <select name="printing" class="wpcf7-form-control wpcf7-select intrested selection_change" >
                                                <option value="29.43" data-quantity="1"> 1 Sample  </option>
                                             <option value="1.87"  data-quantity="25"> 25  </li>
                                             <option value="1.42"  data-quantity="50"> 50  </option>
                                             <option value="1.21"  data-quantity="75"> 75  </option>
                                             <option value="1.10"  data-quantity="100"> 100  </option>
                                             <option value="1.00"  data-quantity="150"> 150  </option>
                                             <option value="0.96"  data-quantity="200"> 200  </option>
                                             <option value="0.93"  data-quantity="250" selected=""> 250  </option>
                                             <option value="0.91"  data-quantity="300"> 300  </option>
                                             <option value="0.89"  data-quantity="400"> 400  </option>
                                             <option value="0.88"  data-quantity="500"> 500  </option>
                                             <option value="0.84"  data-quantity="600"> 600  </option>
                                             <option value="0.81"  data-quantity="700"> 700  </option>
                                             <option value="0.79"  data-quantity="800"> 800  </option>
                                             <option value="0.78"  data-quantity="900"> 900  </option>
                                             <option value="0.77"  data-quantity="1000"> 1000  </option>
                                             <option value="0.73"  data-quantity="1500"> 1500  </option>
                                             <option value="0.71"  data-quantity="2000"> 2000  </option>
                                             <option value="0.64"  data-quantity="3000"> 3000  </option>
                                             <option value="0.61"  data-quantity="4000"> 4000  </option>
                                             <option value="0.59"  data-quantity="5000"> 5000  </option>
                                             <option value="0.55"  data-quantity="10000"> 10000 </option>
                                             <option value="0.51"  data-quantity="15000"> 15000 </option>
                                             <option value="0.49"  data-quantity="20000"> 20000 </option>
                                          </select>
                                       </span>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-nu">
                                 <div class="form-text">
                                    <h2>$<span id="each">0.96</span> each</h2>
                                    <h3>Subtotal: $<span id="total">240.00</span></h3>
                                 </div>
                                 <div class="form-nu-box">
                                    <p>We Price Match</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-12">
                              <div class="chk-col">
                                 <h5>Production Time: Standard (10-15 Business Days)*</h5>
                                 <div class="chk-bx-st cat-frm">
                                    <span class="wpcf7-form-control-wrap standard_time"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first last"><label><input type="checkbox" name="standard_time[]" value="Expedite Production"><span class="wpcf7-list-item-label">Expedite Production</span></label></span></span></span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-12">
                              <div class="chk-col-box">
                                 <h5>Ready to Design Your Box Online?</h5>
                                 <div class="chk-bx-st cat-frm-box">
                                    <a href="" class="desi-btn">Design Your Mailer Box Online</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-12">
                              <div class="chk-col-custom">
                                 <h5>Using Professional Design Editor?</h5>
                                 <input type="submit" value="Order Now & Receive a Dieline Template" class="wpcf7-form-control wpcf7-submit btn btn-primary cat-form-btn-st">
                                 <input type="hidden" id="lead_area_popup" name="lead_area" value="for $19">
                                 <input type="hidden" id="lead_org_price" name="lead_org_price" value="19">
                                 <input type="hidden" name="send" value="1">
                                 <input type="hidden" name="service_id" value="5669" class="service_id">
                                 <input type="hidden" name="lb_source" value="" />
                                 <input type="hidden" name="lb_source_cat" value="" />
                                 <input type="hidden" name="lb_source_nam" value="" />
                                 <input type="hidden" name="lb_source_ema" value="" />
                                 <input type="hidden" name="lb_source_con" value="" />
                                 <input type="hidden" name="lb_source_pho" value="" />
                                 <input type="hidden" name="lb_source_off" value="" />
                                 <input type="hidden" name="fullpageurl" value="" />
                                 <input type="hidden" name="pageurl" value="" />
                                 <input type="hidden" name="ip2loc_ip" value="" />
                                 <input type="hidden" name="ip2loc_isp" value="" />
                                 <input type="hidden" name="ip2loc_org" value="" />
                                 <input type="hidden" name="ip2loc_country" value="" />
                                 <input type="hidden" name="ip2loc_region" value="" />
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="wpcf7-response-output" aria-hidden="true"></div>
               </form>
            </div> -->
         </div>
      </div>
      
   </section>
   <section class="cl-logo-sec">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="logos-main wow zoomIn" >
                  <img src="assets/images/logo-1.png">
                  <img src="assets/images/logo-2.png">
                  <img src="assets/images/logo-3.png">
                  <img src="assets/images/logo-4.png">
                  <img src="assets/images/logo-5.png">
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="tuckbox-section">
      <div class="container">
         <div class="row">
            <div class="col-sm-6">
               <div class="tuck-text wow fadeInLeft" >
                  <h2>Custom cardboard shoe boxes </h2>
                  <p>When your customers spend on buying their favorite pair of shoes, they want them to be presented in equally good shoe boxes. This raises the demand for you to revamp your packaging by getting exclusively designed printed custom shoe boxes that stand parallel to the aura of your shoe collection. Fortunately, fulfilling your custom packaging needs has become easier and affordable with Half Price Packaging. We manufacture premium quality cardboard shoe boxes at economical rates with added discounts on bulk purchases with various other add-ons.</p>
               </div>
            </div>
            <div class="col-sm-6">
               <div class="tuck-maon-box wow fadeInRight" >
                  <div class="tuck-main">
                     <h3>Shipping:</h3>
                     <p>Free shipping for deliveries in the USA, Canada, and Australia.</p>
                  </div>
                  <div class="tuck-main">
                     <h3>Payments:</h3>
                     <img src="assets/images/payment-1.png">
                  </div>
                  <div class="tuck-main">
                     <h3>Guarantee:</h3>
                     <p>24/7 Customer Support, Fast Turnaround, Unique Design</p>
                  </div>
               </div>
            </div>
            <div class="col-sm-12 tuck-custom-box row">
               <div class="col-sm-7 wow fadeInLeft" >
                  <div class="tuck-slider">
                     <div class="tuck-slider-for">
                        <div>
                           <div class="tuckbox-img">
                              <img loading="lazy" src="assets/images/tuckbox-11.png">
                           </div>
                        </div>
                        <div>
                           <div class="tuckbox-img">
                              <img loading="lazy" src="assets/images/tuckbox-22.png">
                           </div>
                        </div>
                        <div>
                           <div class="tuckbox-img">
                              <img loading="lazy" src="assets/images/tuckbox-33.png">
                           </div>
                        </div>
                        <div>
                           <div class="tuckbox-img">
                              <img loading="lazy" src="assets/images/tuckbox-44.png">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row touck new-box tuck-slider-nav">
                     <div class="">
                        <div class="tuckbox-box wow fadeInLeft" data-wow-duration="1s">
                           <div class="tuck-img-box">
                              <img loading="lazy" src="assets/images/tuckbox-1.png">
                           </div>
                        </div>
                     </div>
                     <div class="">
                        <div class="tuckbox-box wow fadeInLeft" data-wow-duration="1s">
                           <div class="tuck-img-box">
                              <img loading="lazy" src="assets/images/tuckbox-2.png">
                           </div>
                        </div>
                     </div>
                     <div class="">
                        <div class="tuckbox-box wow fadeInLeft" data-wow-duration="1s">
                           <div class="tuck-img-box">
                              <img loading="lazy" src="assets/images/tuckbox-3.png">
                           </div>
                        </div>
                     </div>
                     <div class="">
                        <div class="tuckbox-box wow fadeInLeft" data-wow-duration="1s">
                           <div class="tuck-img-box">
                              <img loading="lazy" src="assets/images/tuckbox-4.png">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-5 tuck-form-main wow fadeInRight" >
                  <div class="ftr-form-st">
                     <form action="/mail.php" method="post" class="wpcf7-form init"  >
                        
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
                                             <div class="col-sm-12">
                                                <span class="wpcf7-form-control-wrap material"><select name="material" class="wpcf7-form-control wpcf7-select intrested" aria-invalid="false"><option value="Standard white Corrugated Cardboard">Standard white Corrugated Cardboard</option><option value="1 COLOUR">1 COLOUR</option><option value="2 COLOUR">2 COLOUR</option><option value="3 COLOUR">3 COLOUR</option><option value="4 COLOUR">4 COLOUR</option><option value="PANTONE">PANTONE</option><option value="METALLIC">METALLIC</option><option value="NO IDEA">NO IDEA</option></select></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-4 form-group">
                                       <div class="breif-box1 breif-box5 qty-inp">
                                          <h5>Length(in)</h5>
                                          <div class="row">
                                             <div class="col-sm-12">
                                                <span class="wpcf7-form-control-wrap length"><input type="number" name="length" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number input_product_des" aria-required="true" aria-invalid="false" placeholder="1"></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 form-group">
                                       <div class="breif-box1 breif-box5 qty-inp">
                                          <h5>Width(in)</h5>
                                          <div class="row">
                                             <div class="col-sm-12">
                                                <span class="wpcf7-form-control-wrap width"><input type="number" name="width" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number input_product_des" aria-required="true" aria-invalid="false" placeholder="1"></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 form-group">
                                       <div class="breif-box1 breif-box5 qty-inp">
                                          <h5>Depth(in)</h5>
                                          <div class="row">
                                             <div class="col-sm-12">
                                                <span class="wpcf7-form-control-wrap depth"><input type="number" name="depth" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number input_product_des" aria-required="true" aria-invalid="false" placeholder="1"></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6 form-nu-box form-group">
                                       <div class="breif-box1 breif-box5 qty-bx-brif">
                                          <h4>Quantity</h4>
                                          <div class="row">
                                             <div class="col-sm-12">
                                                <span class="wpcf7-form-control-wrap printing"><select name="printing" class="wpcf7-form-control wpcf7-select intrested" aria-invalid="false"><option value="250">250</option><option value="300">300</option><option value="350">350</option><option value="400">400</option></select></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 form-nu-box form-group">
                                       <div class="breif-box1 breif-box5 qty-bx-brif">
                                          <h4>Printed Sides</h4>
                                          <div class="row">
                                             <div class="col-sm-12">
                                                <span class="wpcf7-form-control-wrap printing"><select name="printing" class="wpcf7-form-control wpcf7-select intrested" aria-invalid="false"><option value="Both Side">Both Side</option><option value="One Side">One Side</option></select></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-12 form-group">
                                       <div class="breif-box1 breif-box5">
                                          <h4>Materials</h4>
                                          <div class="row">
                                             <div class="col-sm-12">
                                                <span class="wpcf7-form-control-wrap material"><select name="material" class="wpcf7-form-control wpcf7-select intrested" aria-invalid="false"><option value="Standard white Corrugated Cardboard">Standard white Corrugated Cardboard</option><option value="1 COLOUR">1 COLOUR</option><option value="2 COLOUR">2 COLOUR</option><option value="3 COLOUR">3 COLOUR</option><option value="4 COLOUR">4 COLOUR</option><option value="PANTONE">PANTONE</option><option value="METALLIC">METALLIC</option><option value="NO IDEA">NO IDEA</option></select></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                       <div class="breif-box1 breif-box5">
                                          <h4>Premium Finishes</h4>
                                          <div class="row">
                                             <div class="col-sm-12">
                                                <span class="wpcf7-form-control-wrap printing"><select name="printing" class="wpcf7-form-control wpcf7-select intrested" aria-invalid="false"><option value="Gold Foil">Gold Foil</option><option value="1 COLOUR">1 COLOUR</option><option value="2 COLOUR">2 COLOUR</option><option value="3 COLOUR">3 COLOUR</option><option value="4 COLOUR">4 COLOUR</option><option value="PANTONE">PANTONE</option><option value="METALLIC">METALLIC</option><option value="NO IDEA">NO IDEA</option></select></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-12">
                                       <div class="chk-col-custom">
                                          <h5>Using Professional Design Editor?</h5>
                                          <input type="submit" value="Next" class="wpcf7-form-control wpcf7-submit btn btn-primary cat-form-btn-st">
                                          <input type="hidden" id="lead_area_popup" name="lead_area" value="for $19">
                                          <input type="hidden" id="lead_org_price" name="lead_org_price" value="19">
                                          <input type="hidden" name="send" value="1">
                                          <!-- <input type="hidden" name="service_id" value="5669" class="service_id"> -->
                                          
                                          <input type="hidden" name="lb_source" value="" />
                                          <input type="hidden" name="lb_source_cat" value="" />
                                          <input type="hidden" name="lb_source_nam" value="" />
                                          <input type="hidden" name="lb_source_ema" value="" />
                                          <input type="hidden" name="lb_source_con" value="" />
                                          <input type="hidden" name="lb_source_pho" value="" />
                                          <input type="hidden" name="lb_source_off" value="" />
                                          
                                          <input type="hidden" name="fullpageurl" value="" />
                                          <input type="hidden" name="pageurl" value="" />
                                          
                                          <input type="hidden" name="ip2loc_ip" value="" />
                                          <input type="hidden" name="ip2loc_isp" value="" />
                                          <input type="hidden" name="ip2loc_org" value="" />
                                          <input type="hidden" name="ip2loc_country" value="" />
                                          <input type="hidden" name="ip2loc_region" value="" />
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- Step 2 -->
                              <div role="tabpanel" class="tab-pane" id="two">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <input type="text" name="cn" class="form-control" placeholder="Full Name" required="">
                                       </div>
                                    </div>
                                    
                                    <div class="col-md-6 email-col-fm-bx-pd">
                                       <div class="form-group">
                                          <input type="email" name="em" class="form-control" placeholder="Email Address" required="">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12 p0">
                                       <div class="form-group">
                                          <input type="tel" id="phone" name="pn" class="form-control" data-validation="Phone Number" placeholder="Phone" required="">
                                       </div>
                                    </div>
                                    <div class="col-sm-12">
                                       <div class="chk-col-custom">
                                          <h5>Using Professional Design Editor?</h5>
                                          <input type="submit" value="Order Now & Receive a Dieline Template" class="wpcf7-form-control wpcf7-submit btn btn-primary cat-form-btn-st">
                                          <input type="hidden" id="lead_area_popup" name="lead_area" value="for $19">
                                          <input type="hidden" id="lead_org_price" name="lead_org_price" value="19">
                                          <input type="hidden" name="send" value="1">
                                          <!-- <input type="hidden" name="service_id" value="5669" class="service_id"> -->
                                          
                                          <input type="hidden" name="lb_source" value="" />
                                          <input type="hidden" name="lb_source_cat" value="" />
                                          <input type="hidden" name="lb_source_nam" value="" />
                                          <input type="hidden" name="lb_source_ema" value="" />
                                          <input type="hidden" name="lb_source_con" value="" />
                                          <input type="hidden" name="lb_source_pho" value="" />
                                          <input type="hidden" name="lb_source_off" value="" />
                                          
                                          <input type="hidden" name="fullpageurl" value="" />
                                          <input type="hidden" name="pageurl" value="" />
                                          
                                          <input type="hidden" name="ip2loc_ip" value="" />
                                          <input type="hidden" name="ip2loc_isp" value="" />
                                          <input type="hidden" name="ip2loc_org" value="" />
                                          <input type="hidden" name="ip2loc_country" value="" />
                                          <input type="hidden" name="ip2loc_region" value="" />
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
               <div class="material-slider-st  mcs-horizontal">
                  
                  <div class="material-slider">
                     <div>
                        <div class="material-bx">
                           <img src="assets/images/material-img-1.png">
                           <h4>Standard White <br>Corrugated Cardboard</h4>
                           <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
                        </div>
                     </div>
                     <div>
                        <div class="material-bx">
                           <img src="assets/images/material-img-1.png">
                           <h4>Standard White <br>Corrugated Cardboard</h4>
                           <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
                        </div>
                     </div>
                     <div>
                        <div class="material-bx">
                           <img src="assets/images/material-img-1.png">
                           <h4>Standard White <br>Corrugated Cardboard</h4>
                           <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
                        </div>
                     </div>
                     <div>
                        <div class="material-bx">
                           <img src="assets/images/material-img-1.png">
                           <h4>Standard White <br>Corrugated Cardboard</h4>
                           <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
                        </div>
                     </div>
                     <div>
                        <div class="material-bx">
                           <img src="assets/images/material-img-1.png">
                           <h4>Standard White <br>Corrugated Cardboard</h4>
                           <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
                        </div>
                     </div>
                     <div>
                        <div class="material-bx">
                           <img src="assets/images/material-img-1.png">
                           <h4>Standard White <br>Corrugated Cardboard</h4>
                           <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
                        </div>
                     </div>
                     <div>
                        <div class="material-bx">
                           <img src="assets/images/material-img-1.png">
                           <h4>Standard White <br>Corrugated Cardboard</h4>
                           <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
                        </div>
                     </div>
                     <div>
                        <div class="material-bx">
                           <img src="assets/images/material-img-1.png">
                           <h4>Standard White <br>Corrugated Cardboard</h4>
                           <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
                        </div>
                     </div>
                     <div>
                        <div class="material-bx">
                           <img src="assets/images/material-img-1.png">
                           <h4>Standard White <br>Corrugated Cardboard</h4>
                           <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
                        </div>
                     </div>
                     <div>
                        <div class="material-bx">
                           <img src="assets/images/material-img-1.png">
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
               <div class="material-slider-st  mcs-horizontal">
                  
                  <div class="material-slider">
                     <div>
                        <div class="material-bx">
                           <img src="assets/images/material-img-1.png">
                           <h4>Standard White <br>Corrugated Cardboard</h4>
                           <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
                        </div>
                     </div>
                     <div>
                        <div class="material-bx">
                           <img src="assets/images/material-img-1.png">
                           <h4>Standard White <br>Corrugated Cardboard</h4>
                           <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
                        </div>
                     </div>
                     <div>
                        <div class="material-bx">
                           <img src="assets/images/material-img-1.png">
                           <h4>Standard White <br>Corrugated Cardboard</h4>
                           <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
                        </div>
                     </div>
                     <div>
                        <div class="material-bx">
                           <img src="assets/images/material-img-1.png">
                           <h4>Standard White <br>Corrugated Cardboard</h4>
                           <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
                        </div>
                     </div>
                     <div>
                        <div class="material-bx">
                           <img src="assets/images/material-img-1.png">
                           <h4>Standard White <br>Corrugated Cardboard</h4>
                           <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
                        </div>
                     </div>
                     <div>
                        <div class="material-bx">
                           <img src="assets/images/material-img-1.png">
                           <h4>Standard White <br>Corrugated Cardboard</h4>
                           <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
                        </div>
                     </div>
                     <div>
                        <div class="material-bx">
                           <img src="assets/images/material-img-1.png">
                           <h4>Standard White <br>Corrugated Cardboard</h4>
                           <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
                        </div>
                     </div>
                     <div>
                        <div class="material-bx">
                           <img src="assets/images/material-img-1.png">
                           <h4>Standard White <br>Corrugated Cardboard</h4>
                           <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
                        </div>
                     </div>
                     <div>
                        <div class="material-bx">
                           <img src="assets/images/material-img-1.png">
                           <h4>Standard White <br>Corrugated Cardboard</h4>
                           <p>Our most popular box material. Has a white base and comes uncoated which gives the surface excellent.</p>
                        </div>
                     </div>
                     <div>
                        <div class="material-bx">
                           <img src="assets/images/material-img-1.png">
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
   <section class="cta-section">
      <div class="container">
         <div class="row">
            <div class="col-sm-offset-1 col-sm-6">
               <div class="cta-ext wow fadeInLeft" data-wow-duration="1s">
                  <h2>Half Price packaging ensures complete perfection for your packaging desires! </h2>
                  <p>Discover the world of exclusive designs and amazing prints that will make your shoe boxes stand out in the crowd.</p>
               </div>
               <div class="banner-btn wow fadeInLeft" data-wow-duration="1s">
                  <a href="javascript:;" class="red-btn popup-btn">Get Started</a>
                  <a href="javascript:;" class="black-btn">Live Chat</a>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="cta-img-box wow zoomIn" >
                  <img loading="lazy" src="assets/images/cta-img-1.png">
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--      <section class="packages-section">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="custom-text wow fadeInLeft" data-wow-duration="1s">
                  <h2>FULLY CUSTOMIZED PACKAGES, SHOPPERS, AND BOXES THAT CREATE GREAT FIRST IMPRESSIONS</h2>
                  <p>You have already done your part by formulating an amazing product, let us do our part by creating a unique custom packaging material. Have a look at our collection of boxes and find the right fit for your needs!</p>
               </div>
            </div>
         </div>
         <div class=" row pakg-slider">
            <div class="col-sm-4">
               <div class="pakg-main wow fadeInLeft" data-wow-duration="1s">
                  <div class="pakg-img">
                     <img loading="lazy" src="assets/images/pakg-1.png">
                  </div>
                  <div class="pakg-text">
                     <h2>Gable Boxes</h2>
                     <p>Half Price Packaging specializes in creating custom Gable Boxes, made from cardboard with a square bottom. Gable boxes are very practical to use as they come with handles, providing ease to carry around.</p>
                  </div>
                  <div class="pakg-btn">
                     <a href="javascript:;" class="green-btn popup-btn">Get a Quote</a>
                     <a href="javascript:;" class="orang-btn">Book a Call</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="pakg-main wow fadeInLeft" data-wow-duration="1s">
                  <div class="pakg-img">
                     <img loading="lazy" src="assets/images/pakg-2.png">
                  </div>
                  <div class="pakg-text">
                     <h2>Custom Paper Bags</h2>
                     <p>Eco-friendly bags that can be used to carry everyday products. At Half Price Packaging, we create paper bags with unique customizations for our customers with different designs, sizes, and colors. </p>
                  </div>
                  <div class="pakg-btn">
                     <a href="javascript:;" class="green-btn popup-btn">Get a Quote</a>
                     <a href="javascript:;" class="orang-btn">Book a Call</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="pakg-main wow fadeInLeft" data-wow-duration="1s">
                  <div class="pakg-img">
                     <img loading="lazy" src="assets/images/pakg-3.png">
                  </div>
                  <div class="pakg-text">
                     <h2>Mailer Boxes</h2>
                     <p>Mailer boxes are an excellent way to get your products and goods transported elegantly. Half Price Packaging produces durable mailer boxes using high-end products to ensure the safety of the products.</p>
                  </div>
                  <div class="pakg-btn">
                     <a href="javascript:;" class="green-btn popup-btn">Get a Quote</a>
                     <a href="javascript:;" class="orang-btn">Book a Call</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="pakg-main">
                  <div class="pakg-img">
                     <img src="assets/images/pakg-1.png">
                  </div>
                  <div class="pakg-text">
                     <h2>Gift Boxes</h2>
                     <p>Take celebrations to the next level by giving gifts in customized boxes. We create unique gift boxes using HD printing techniques to make the gift boxes look attractive and make the gift presentation unique.</p>
                  </div>
                  <div class="pakg-btn">
                     <a href="javascript:;" class="green-btn popup-btn">Get a Quote</a>
                     <a href="javascript:;" class="orang-btn">Book a Call</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="pakg-main">
                  <div class="pakg-img">
                     <img src="assets/images/pakg-2.png">
                  </div>
                  <div class="pakg-text">
                     <h2>Kraft Boxes</h2>
                     <p>Kraft Boxes provide the best solution to ship fragile items ensuring complete protection. We can customize Kraft Boxes in different styles, sizes, shapes, and colors while maintaining the durability of the boxes. </p>
                  </div>
                  <div class="pakg-btn">
                     <a href="javascript:;" class="green-btn popup-btn">Get a Quote</a>
                     <a href="javascript:;" class="orang-btn">Book a Call</a>
                  </div>
               </div>
            </div>
         </div>
         <div class=" col-sm-12 pakg-main-box wow zoomIn" >
            <div class="col-sm-3">
               <div class="pakg-box">
                  <img loading="lazy" src="assets/images/pakg-box-1.png">
                  <h2>Get in Touch with Our Team</h2>
               </div>
            </div>
            <div class="col-sm-3">
               <div class="pakg-box">
                  <img loading="lazy" src="assets/images/pakg-box-12.png">
                  <h2>24/7 Chat <br> Support</h2>
               </div>
            </div>
            <div class="col-sm-3">
               <div class="pakg-box">
                  <img loading="lazy" src="assets/images/pakg-box-13.png">
                  <h2>100% Satisfaction Guaranteed</h2>
               </div>
            </div>
            <div class="col-sm-3">
               <div class="pakg-box">
                  <img src="assets/images/pakg-box-14.png">
                  <h2>Free Sample<br> Kits</h2>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <section class="portfolio-section">
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
                  <div class="port-box box18">
                     <a href="assets/images/portfolio/port-1.png" class="fancybox" rel="ligthbox" tabindex="0">
                        <img loading="lazy" src="assets/images/portfolio/port-1.png">
                        <div class="box-content"> <i class="fa fa-plus"></i> </div>
                     </a>
                  </div>
               </div>
               <div class="col-sm-6 p0">
                  <div class="col-sm-12 port-2-col ">
                     <div class="port-box box18">
                        <a href="assets/images/portfolio/port-2.png" class="fancybox" rel="ligthbox" tabindex="0">
                           <img loading="lazy" src="assets/images/portfolio/port-2.png">
                           <div class="box-content"> <i class="fa fa-plus"></i> </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6 port-3-col">
                     <div class="port-box box18">
                        <a href="assets/images/portfolio/port-3.png" class="fancybox" rel="ligthbox" tabindex="0">
                           <img loading="lazy" src="assets/images/portfolio/port-3.png">
                           <div class="box-content"> <i class="fa fa-plus"></i> </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6 port-4-col">
                     <div class="port-box box18">
                        <a href="assets/images/portfolio/port-4.png" class="fancybox" rel="ligthbox" tabindex="0">
                           <img loading="lazy" src="assets/images/portfolio/port-4.png">
                           <div class="box-content"> <i class="fa fa-plus"></i> </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-12 p0">
               
               <div class="col-sm-6 p0">
                  <div class="col-sm-12 port-5-col ">
                     <div class="port-box box18">
                        <a href="assets/images/portfolio/port-5.png" class="fancybox" rel="ligthbox" tabindex="0">
                           <img loading="lazy" src="assets/images/portfolio/port-5.png">
                           <div class="box-content"> <i class="fa fa-plus"></i> </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-12 port-6-col ">
                     <div class="port-box box18">
                        <a href="assets/images/portfolio/port-6.png" class="fancybox" rel="ligthbox" tabindex="0">
                           <img loading="lazy" src="assets/images/portfolio/port-6.png">
                           <div class="box-content"> <i class="fa fa-plus"></i> </div>
                        </a>
                     </div>
                  </div>
                  
               </div>
               <div class="col-sm-6 port-7-col">
                  <div class="port-box box18">
                     <a href="assets/images/portfolio/port-7.png" class="fancybox" rel="ligthbox" tabindex="0">
                        <img loading="lazy" src="assets/images/portfolio/port-7.png">
                        <div class="box-content"> <i class="fa fa-plus"></i> </div>
                     </a>
                  </div>
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
               <div class="sample-btn wow fadeInLeft" data-wow-duration="1s">
                  <a href="javascript:;" class="wite-btn popup-btn">Get a Quote</a>
                  <a href="javascript:;" class="black-btn">Book a Call</a>
               </div>
            </div>
            <div class="col-sm-6 bnr-form-main wow zoomIn" >
               <form method="POST" action="mail.php">
                  <div class="form-div-main">
                     <div class=" col-sm-6 form-div">
                        <input name="cn" required class="form-control" type="text"   placeholder="Enter Name" >
                     </div>
                     <div class="  col-sm-6 form-div">
                        <input name="em" required class="form-control" type="email"   placeholder="Enter Email" >
                     </div>
                     <div class="  col-sm-6 form-div">
                        <input name="pn" required class="form-control" type="number"   placeholder="Enter Phone" >
                     </div>
                     <div class="  col-sm-6 form-div">
                        <input name="cmn" required class="form-control" type="text"   placeholder="Company Name" >
                     </div>
                     <div class="col-sm-12 form-div">
                        <textarea class="form-control san-bor" name="msg" placeholder="Message" required></textarea>
                     </div>
                     <div class=" col-sm-12 form-div bnr-form-btn">
                        <!-- <input type="submit" class="btn form-btn" value="submit" /> -->
                        <input type="submit" name="submit" class="btn form-btn" value="Submit">
                        <input type="hidden" name="lead_area" value="">
                        <input type="hidden" name="lead_org_price" value="">
                        <input type="hidden" name="send" value="1">
                        <!-- Email Source -->
                        <input type="hidden" name="lb_source"     value="" />
                        <input type="hidden" name="lb_source_cat"    value="" />
                        <input type="hidden" name="lb_source_nam"    value="" />
                        <input type="hidden" name="lb_source_ema"    value="" />
                        <input type="hidden" name="lb_source_con"    value="" />
                        <input type="hidden" name="lb_source_pho"    value="" />
                        <input type="hidden" name="lb_source_off"    value="" />
                        <!-- Customer Info -->
                        <input type="hidden" name="fullpageurl"   value="" />
                        <input type="hidden" name="pageurl"       value="" />
                        <!-- ip2Location -->
                        <input type="hidden" name="ip2loc_ip"     value="" />
                        <input type="hidden" name="ip2loc_isp"       value="" />
                        <input type="hidden" name="ip2loc_org"       value="" />
                        <input type="hidden" name="ip2loc_country"   value="" />
                        <input type="hidden" name="ip2loc_region"    value="" />
                        <input type="hidden" name="ip2loc_city"   value="" />
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </section>
   <!--       <section class="boxix-section">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="custom-text wow fadeInRight" data-wow-duration="1s">
                  <h2>Various Styles of Our Custom Boxes</h2>
                  <p>In order to meet the diverse requirements of our customers, we have come up with different styles of boxes to fulfill the varying needs of our clients. Following are the styles of boxes we deal in:</p>
               </div>
            </div>
            <div class="col-sm-3">
               <div class="boxix-main wow fadeInRight" data-wow-duration="1s">
                  <div class="box-img">
                     <img loading="lazy" class="bx-img-st" src="assets/images/box-1.png">
                     <img loading="lazy" class="bx-img-hvr" src="assets/images/box-11.png">
                  </div>
                  <div class="boxix-text">
                     <h4>Reverse Tuck <br> End Box</h4>
                     <p>These boxes are the most functional type of boxes, ideal for storage, retail, and wholesale products including cosmetics, dry foods, grocery items, technology, and much more.</p>
                  </div>
                  <div class="pakg-btn">
                     <a href="javascript:;" class="green-btn popup-btn">Get a Quote</a>
                     <a href="javascript:;" class="orang-btn">Book a Call</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-3">
               <div class="boxix-main wow fadeInRight" data-wow-duration="1s">
                  <div class="box-img">
                     <img loading="lazy" class="bx-img-st" src="assets/images/box-2.png">
                     <img loading="lazy" class="bx-img-hvr" src="assets/images/box-22.png">
                  </div>
                  <div class="boxix-text">
                     <h4>Snap Lock Bottom <br> with Tuck Top</h4>
                     <p>These boxes can be used for any product and can be used for slightly heavier products too. An economical packaging option that does not require any glue or tape.</p>
                  </div>
                  <div class="pakg-btn">
                     <a href="javascript:;" class="green-btn popup-btn">Get a Quote</a>
                     <a href="javascript:;" class="orang-btn">Book a Call</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-3">
               <div class="boxix-main wow fadeInRight" data-wow-duration="1s">
                  <div class="box-img">
                     <img loading="lazy" class="bx-img-st" src="assets/images/box-3.png">
                     <img loading="lazy" class="bx-img-hvr" src="assets/images/box-33.png">
                  </div>
                  <div class="boxix-text">
                     <h4>Auto-lock Bottom <br> with Tuck Top</h4>
                     <p>A folding box that has an automatic locking bottom. These boxes are very practical to use and can get into shape just by squeezing. Ideal for retail products.</p>
                  </div>
                  <div class="pakg-btn">
                     <a href="javascript:;" class="green-btn popup-btn">Get a Quote</a>
                     <a href="javascript:;" class="orang-btn">Book a Call</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-3">
               <div class="boxix-main wow fadeInRight" data-wow-duration="1s">
                  <div class="box-img">
                     <img loading="lazy" class="bx-img-st" src="assets/images/box-4.png">
                     <img loading="lazy" class="bx-img-hvr" src="assets/images/box-44.png">
                  </div>
                  <div class="boxix-text">
                     <h4>Straight Tuck <br>End Box</h4>
                     <p>Versatile boxes that provide an extraordinary look for the retail display. The lids on the top and the bottom tuck to the back, giving the product a great presentation.</p>
                  </div>
                  <div class="pakg-btn">
                     <a href="javascript:;" class="green-btn popup-btn">Get a Quote</a>
                     <a href="javascript:;" class="orang-btn">Book a Call</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <section  class="what-sec">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-6">
               <div class="what-img">
                  <img src="assets/images/what-img.png">
               </div>
            </div>
            <div class="col-md-6">
               <div class="what-head">
                  <h3> The place of shoe boxes in <br> High-end businesses</h3>
                  <p>Shoe boxes are an important part of our lifestyle as it has become a basic necessity. After buying their favorite pair of shoes people are more concerned about the shoe boxes in which they have to keep them.  These boxes are of great significance because they are manufactured out of the finest quality cardboard that is durable and sturdy.  They are eco-friendly and safe to carry anywhere. With the growing competition in the market, many brands are trying to create a distinctive mark through creative packaging. <br><br>
                     Half Price Packaging offers you a great deal of creating versatile custom shoe boxes which is a source of inspiration for the customers. They are easy to assemble, carry and a fantastic thing to present to the customers. They can be personalized into all sorts of customization from design to eye-catching prints. Our customer team is ready to help you 24/7 regarding placing your online orders so what you waiting for.
                  </p>
                  <div class="banner-btn wow bounceIn" >
                     <a href="javascript:;" class="red-btn popup-btn">Get Started</a>
                     <a href="javascript:;" class="black-btn">Live Chat</a>
                  </div>
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
               <div class="banner-btn wow fadeInLeft" data-wow-duration="1s">
                  <a href="javascript:;" class="red-btn popup-btn">Get Started</a>
                  <a href="javascript:;" class="black-btn">Live Chat</a>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="cta-img-box wow zoomIn" >
                  <img loading="lazy" src="assets/images/cta-img-2.png">
               </div>
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
               <div class="writ-img">
                  <img loading="lazy" src="assets/images/trustpilot-1.png">
               </div>
            </div>
         </div>
         <div class="col-sm-12">
            <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-tabs-horizontal">
               <li class="active "><a href="#tab1" data-toggle="tab" aria-expanded="false"><img src="assets/images/testi-tab-img-1.png"></a></li>
               <li class=""><a href="#tab2" data-toggle="tab" aria-expanded="false"><img src="assets/images/testi-tab-img-2.png"></a></li>
               <li class=""><a href="#tab3" data-toggle="tab" aria-expanded="false"><img src="assets/images/testi-tab-img-3.png"></a></li>
               <li class=""><a href="#tab4" data-toggle="tab" aria-expanded="false"><img src="assets/images/testi-tab-img-4.png"></a></li>
            </ul>
         </div>
         <div class="col-sm-12">
            <div class="tab-content">
               <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                  <div class="testi-slider-pro">
                     <div>
                        <div class="testi-box">
                           <div class="testi-hd-st">
                              <img src="assets/images/testi-user-1.png">
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
                           <div class="testi-hd-st">
                              <img src="assets/images/testi-user-1.png">
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
                           <div class="testi-hd-st">
                              <img src="assets/images/testi-user-1.png">
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
                           <div class="testi-hd-st">
                              <img src="assets/images/testi-user-1.png">
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
                           <div class="testi-hd-st">
                              <img src="assets/images/testi-user-1.png">
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
                           <div class="testi-hd-st">
                              <img src="assets/images/testi-user-1.png">
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
                           <div class="testi-hd-st">
                              <img src="assets/images/testi-user-1.png">
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
                           <div class="testi-hd-st">
                              <img src="assets/images/testi-user-1.png">
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
                           <div class="testi-hd-st">
                              <img src="assets/images/testi-user-1.png">
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
                           <div class="testi-hd-st">
                              <img src="assets/images/testi-user-1.png">
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
                           <div class="testi-hd-st">
                              <img src="assets/images/testi-user-1.png">
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
                           <div class="testi-hd-st">
                              <img src="assets/images/testi-user-1.png">
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
                           <div class="testi-hd-st">
                              <img src="assets/images/testi-user-1.png">
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
                           <div class="testi-hd-st">
                              <img src="assets/images/testi-user-1.png">
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
                           <div class="testi-hd-st">
                              <img src="assets/images/testi-user-1.png">
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
                           <div class="testi-hd-st">
                              <img src="assets/images/testi-user-1.png">
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
                           <div class="testi-hd-st">
                              <img src="assets/images/testi-user-1.png">
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
                           <div class="testi-hd-st">
                              <img src="assets/images/testi-user-1.png">
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
         <!-- <div class="col-sm-12">
            <div class="team-slider-st">
               <div class="team-slider">
                  <div>
                     <div class="team-bx wow fadeInLeft" data-wow-duration="1s">
                        <div class="team-hd">
                           <div class="team-img-str">
                              <img loading="lazy" src="assets/images/team-img-1.png">
                              <div>
                                 <h4>Ava Stryder</h4>
                                 <div class="str-icon">
                                    <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="team-list">
                           <h4>Great Service!</h4>
                           <p>I got gift boxes made for Christmas in bulk by Half Price Packaging and they did a great job!</p>
                        </div>
                        <div class="team-detl">
                           
                           <p>06/05/2021</p>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="team-bx wow fadeInLeft" data-wow-duration="1s">
                        <div class="team-hd">
                           <div class="team-img-str">
                              <img loading="lazy" src="assets/images/team-img-2.png">
                              <div>
                                 <h4>Katharine Jacob</h4>
                                 <div class="str-icon">
                                    <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="team-list">
                           <h4>5 Star Experience</h4>
                           <p>They are very professional and designed Chinese food boxes for my restaurant just as I asked.</p>
                        </div>
                        <div class="team-detl">
                           
                           <p>01/02/2021</p>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="team-bx wow fadeInLeft" data-wow-duration="1s">
                        <div class="team-hd">
                           <div class="team-img-str">
                              <img loading="lazy" src="assets/images/team-img-3.png">
                              <div>
                                 <h4>Edward Douglas</h4>
                                 <div class="str-icon">
                                    <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="team-list">
                           <h4>Fantastic Experience</h4>
                           <p>I am glad I chose Half Price Packaging to design custom gift boxes for my brand’s 5th anniversary.</p>
                        </div>
                        <div class="team-detl">
                           
                           <p>06/07/2020</p>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="team-bx wow fadeInLeft" data-wow-duration="1s">
                        <div class="team-hd">
                           <div class="team-img-str">
                              <img loading="lazy" src="assets/images/team-img-4.png">
                              <div>
                                 <h4>Burton Cooper</h4>
                                 <div class="str-icon">
                                    <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="team-list">
                           <h4>Cooperative Staff</h4>
                           <p>Their staff was very cooperative and responsive. They made really beautiful cosmetic boxes for my beauty brand. </p>
                        </div>
                        <div class="team-detl">
                           
                           <p>08/07/2020</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
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
            <div class="footyer-logos wow fadeInLeft" data-wow-duration="1s">
               <img loading="lazy" src="assets/images/footer-logos.png">
            </div>
         </div>
         <div class="col-sm-6 col-sm-offset-1 bnr-form-col wow zoomIn" >
            <form method="POST" action="/mail.php">
               <div class="form-div-box">
                  <div class="form-div-box">
                     <input name="cn" required class="form-control" type="text"   placeholder="Enter Your Name" >
                  </div>
                  <div class="form-div-box">
                     <input name="em" required class="form-control" type="email"   placeholder="Email Address" >
                  </div>
                  <div class="form-div-box">
                     <input name="pn" required class="form-control" type="number"   placeholder="Phone Number" >
                  </div>
                  <div class="form-div-box">
                     <textarea class="form-control san-bor" name="msg" placeholder="Message" required></textarea>
                  </div>
                  <div class="form-div-box-new ">
                     <button type="submit" class="btn custom-btn1">Submit Now </button>
                     <input type="hidden" name="lead_area" value="">
                     <input type="hidden" name="lead_org_price" value="">
                     <input type="hidden" name="send" value="1">
                     <!-- Email Source -->
                     <input type="hidden" name="lb_source"     value="" />
                     <input type="hidden" name="lb_source_cat"    value="" />
                     <input type="hidden" name="lb_source_nam"    value="" />
                     <input type="hidden" name="lb_source_ema"    value="" />
                     <input type="hidden" name="lb_source_con"    value="" />
                     <input type="hidden" name="lb_source_pho"    value="" />
                     <input type="hidden" name="lb_source_off"    value="" />
                     <!-- Customer Info -->
                     <input type="hidden" name="fullpageurl"   value="" />
                     <input type="hidden" name="pageurl"       value="" />
                     <!-- ip2Location -->
                     <input type="hidden" name="ip2loc_ip"     value="" />
                     <input type="hidden" name="ip2loc_isp"       value="" />
                     <input type="hidden" name="ip2loc_org"       value="" />
                     <input type="hidden" name="ip2loc_country"   value="" />
                     <input type="hidden" name="ip2loc_region"    value="" />
                     <input type="hidden" name="ip2loc_city"   value="" />
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
<?php include '../footer-inr-pg.php';?>
<?php include 'pop-up-2.php';?>
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/fancybox.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/accordian-jquery-ui.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/custom.js"></script>
<script>

$(".mcs-horizontal").mCustomScrollbar({
axis:"x",
theme:"dark-thick",
autoExpandScrollbar:true,
advanced:{autoExpandHorizontalScroll:true},
updateOnContentResize:true,
scrollbarPosition: 'outside',
scrollInertia: 200
});
$(document).ready(function(){
$(".selection_change").change(function(){
// $(this).css("background-color", "#D6D6FF");

price_a = this.value;
var price =  this.value;
var quantity =  $(this).find(':selected').data('quantity');



console.log(quantity * price);


total =  quantity * price;




$("#each").html(price_a);
$("#total").html(total);
// console.log(price);
//console.log(quality);


});
});



$('.popup-btn').on('click', function(){
$('.popupform-main').addClass('active');
$('body').addClass('o-hidden');
$('.overlay-bg').fadeIn(500);
$('.close-btn').on('click', function(){
$('.popupform-main').removeClass('active');
$('body').removeClass('o-hidden');
$('.overlay-bg').fadeOut(500);
});
$('.overlay-bg').click(function() {
$('popupform-main').removeClass('active');
$('body').removeClass('o-hidden');
$('.overlay-bg').fadeOut(500);
});
});
$( document ).ready(function() {
//var currentIP;
var key = '5XpThOAEkfgOvEJ';
var currentIP = $("meta[name=ip2loc]").attr('content');
var pgurl = $("meta[name=page_url]").attr('content');
$.ajax({
method: 'get',
url: '//pro.ip-api.com/json/' + currentIP,
data: {key: key},
success: function (data) {
if (data) {
$('input[name=ip2loc_ip]').val(data.query);
$('input[name=ip2loc_isp]').val(data.isp);
$('input[name=ip2loc_org]').val(data.org);
$('input[name=ip2loc_country]').val(data.country);
$('input[name=ip2loc_region]').val(data.regionName);
$('input[name=ip2loc_city]').val(data.city);
$('input[name=pageurl]').val(pgurl);
}
}
});
});

</script>
<script>
$(document).ready(function() {
$(".fancybox").fancybox();
});
</script>
<script >
$('.material-slider').slick({
dots: false,
infinite: false,
arrows:false,
swipe: false,
swipeToSlide: false,
touchMove: false,
draggable: false,
speed: 300,
slidesToShow: 7,
prevArrow: $('.slick-prev'),
nextArrow: $('.slick-next'),
slidesToScroll:1,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 4,
slidesToScroll:1,
infinite: true,
dots: true
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
}
// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]
});
$('.pakg-slider').slick({
dots: true,
infinite: true,
arrows:true,
speed: 300,
slidesToShow: 3,
slidesToScroll:3,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 3,
slidesToScroll:3,
infinite: true,
dots: true
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 1,
slidesToScroll: 2
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
}
// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]
});
</script>
<script>
$('.team-slider').slick({
dots: true,
arrows: true,
infinite: false,
speed: 300,
slidesToShow: 4,
slidesToScroll: 1,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 4,
slidesToScroll: 3,
infinite: true,
dots: true
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 2,
slidesToScroll: 2
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
}
// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]
});


$('.testi-slider-pro').slick({
dots: true,
arrows: true,
infinite: false,
speed: 300,
slidesToShow: 4,
slidesToScroll: 1,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 3,
slidesToScroll: 1,
infinite: true,
dots: true
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
}
// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]
});

// $('.nav-tabs a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
//      e.target
//      e.relatedTarget
//      $('.testi-slider-pro').slick('setPosition');

//  });

// $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
//   $('.testi-slider-pro').slick('setPosition');

// })

$(document).on("click",".nav-tabs li a",function() {


   setTimeout(function(){
$('.testi-slider-pro').slick('setPosition');


   },200);
        
    });

$('.tuck-slider-for').slick({
slidesToShow: 1,
slidesToScroll: 1,
arrows: false,
fade: true,
asNavFor: '.tuck-slider-nav'
});
$('.tuck-slider-nav').slick({
slidesToShow: 5,
slidesToScroll: 1,
asNavFor: '.tuck-slider-for',
dots: true,
focusOnSelect: true
});
</script>
</script>
</body>
</html>