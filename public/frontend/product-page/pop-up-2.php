<style>
.overlay-bg {
background: rgba(0, 0, 0, 0.8);
position: absolute;
top: 0;
left: 0;
right: 0;
bottom: 0;
width: 100%;
height: 100%;
z-index: 10;
display: none;
}
.pop-form .submit-btn {
font-size: 18px;
width: 100%;
padding: 15px 0px;
background-color: #000000;
color: #fff;
cursor: pointer;
border-radius: 5px;
position: relative;
border: none;
margin-top: 15px;
width: 100%;
margin: 10px 0 0 0px !important;
font-weight: 700;
}
.pop-form .submit-btn {
font-size: 18px;
padding: 15px 0px;
background: #fb2224;
color: #fff;
cursor: pointer;
border-radius: 5px;
position: relative;
border: none;
margin-top: 15px;
width: 100%;
}
.popupform-main.active {
display: block;
}
.popupform-main {
position: fixed;
background-color: rgba(0, 0, 0, 0.62);
top: 0;
bottom: 0;
left: 0;
width: 100%;
width: 100%;
height: 100%;
z-index: 9999;
display: none;
}
.pop-form {
position: absolute;
width: 1049px;
height: 679px;
top: 0px;
left: 0;
bottom: 0;
right: 0;
margin: auto;
background: url(popup-bg2.png);
padding: 0px 0 0px 0;
z-index: 99;
-webkit-transition: 0.5s;
-moz-transition: 0.5s;
-o-transition: 0.5s;
transition: 0.5s;
background-size: cover;
}
.popupform-main .main-pop .col-md-12 {
padding: 0;
}
.popupform-main h3 {
font-size: 26px;
margin: 31px 0 0 0;
float: none;
color: #ffffff;
font-weight: 500;
text-align: center;
padding: 0 !important;
}
.popupform-main h2 {
font-size: 40px;
margin: 10px 0 0 0;
color: #ffffff;
font-weight: 700;
}
.popupform-main h4 {
font-size: 26px;
margin: 8px 0 0 0;
color: #ffffff;
font-weight: 700;
}
.fspx-23 {
font-size: 23px;
}
.fw-exbold {
font-weight: 800 !important;
}
.ls-xsmall {
letter-spacing: -2px;
}
.fc-red {
color: #fb2224;
}
.tt-uppercase {
text-transform: uppercase !important;
}
.popupform-main h6 {
letter-spacing: 0;
font-size: 45px;
background: #4274fa;
color: #fff;
border-radius: 10px;
padding: 10px 15px 5px 15px;
text-align: left;
position: relative;
right: 0px;
margin: 0px;
float: right;
}
.fspx-20 {
font-size: 20px;
display: block;
}
.fspx-23 {
font-size: 23px;
margin-bottom: 10px;
}
.fw-normal {
font-weight: 400 !important;
}
.popupform-main .main-pop {
padding: 25px 10px 0 0;
}
.pop-form .no-thanks {
text-decoration: underline;
color: #666666;
}
.pop-form form .control-group {
margin-bottom: 10px;
}
form .control-group {
margin-bottom: 24px;
position: relative;
}
.pop-form form .control-group input[type=text],.pop-form form .control-group input[type=text], .pop-form form .control-group input[type=number], .pop-form form .control-group input[type=email], .pop-form form .control-group select, .pop-form form .control-group textarea {
background-color: #fff;
font-family: "Nunito", sans-serif;
text-align: left;
}
.popupform-main form input[type=text], .popupform-main form input[type=number], .popupform-main form input[type=email] {
padding-left: 10px;
min-height: 50px;
}
.popupform-main form input[type=text], .popupform-main form input[type=number], .popupform-main form input[type=email] {
color: #333333;
padding: 10px;
height: 44px;
width: 100%;
background: transparent;
border: 1px solid #cccccc;
box-shadow: none;
-webkit-appearance: none;
border-radius: 4px;
font-family: "Nunito", sans-serif;
}
form .numberarea {
width: auto;
position: relative;
}
.pop-form .submit-btn {
font-size: 18px;
width: 100%;
padding: 10px 0px;
background-color: #ffffff;
color: #000;
cursor: pointer;
border-radius: 5px;
position: relative;
border: none;
margin-top: 15px;
width: 100%;
margin: 10px 0 0 0px !important;
font-weight: 700;
text-transform: uppercase;
}
.pop-form .no-thanks {
text-decoration: underline;
color: #666666;
}
.popupform-main h6:before {
position: absolute;
content: "";
left: -35px;
top: 0px;
width: 0;
height: 0;
border-top: 0px solid transparent;
border-right: 45px solid #4274fa;
border-bottom: 28px solid transparent;
}
.float-left {
float: left;
}
.lh-medium {
line-height: 1.2;
}
.lh-medium {
line-height: 1.2;
}
.ta-left {
text-align: left;
}
.fw-exbold {
font-weight: 800 !important;
}
.mtpx-60{
margin-top: 60px;
}
.pop-form .close-btn {
width: 45px;
height: 45px;
display: block;
position: absolute;
top: 80px;
right: 120px;
font-size: 18px;
font-weight: 900;
color: #000;
padding-top: 3px;
background-color: #e9e9e9;
text-align: center;
border-radius: 50px;
align-items: center;
display: grid;
border: inset 3px #000;
/* border: 5px solid #fff; */
}
@media(max-width: 1366px){
.pop-form {
width: 950px;
height: 620px;
}
}
@media(max-width: 991px){
.pop-form {
position: absolute;
width: 510px;
height: 500px;
top: 0px;
left: 0;
bottom: 0;
right: 0;
margin: auto;
/* background-image: url(../images/popup-bg2.png); */
padding: 0px 0 0px 0;
z-index: 99;
-webkit-transition: 0.5s;
-moz-transition: 0.5s;
-o-transition: 0.5s;
transition: 0.5s;
background: #260868;
}
.popupform-main .col-sm-offset-4.col-sm-8 {
max-width: 100%;
width: 100%;
margin: 0;
}
.popupform-main h3{
font-size: 30px !important;
}
.popupform-main h6 {
font-size: 30px;
}
#flform input[type="text"], input[type="email"]{
margin-bottom: 0px;
}
.pop-form .close-btn {
width: 35px;
height: 30px;
display: block;
position: absolute;
top: 2px;
right: 0;
font-size: 18px;
font-weight: 900;
color: #080808;
padding-top: 3px;
}
}
@media(max-width: 767px){
.popupform-main h6:before {
position: absolute;
content: "";
left: -20px;
top: 0px;
width: 0;
height: 0;
border-top: 0px solid transparent;
border-right: 28px solid #4274fa;
border-bottom: 28px solid transparent;
}
div#pop-form form {
width: 100% !important;
}
.pop-form {
position: absolute;
width: 334px !important;
height: 535px !important;
}
.popupform-main .pop-form h3 {
font-size: 21px !important;
margin-top: 4px;
}
.pop-form .close-btn {
top: -13px;
right: -6px;
height: 35px;
}
.popupform-main h6 {
letter-spacing: 0;
font-size: 21px;
background: #4274fa;
color: #fff;
border-radius: 10px;
padding: 3px 8px 5px 8px;
text-align: left;
position: relative;
right: 0px;
margin: 0px;
float: right;
}
.pop-form .submit-btn {
font-size: 18px;
width: 100%;
padding: 8px 0px;
}
div#pop-form {
max-width: 100%;
width: 100%;
margin: 0;
text-align: center;
padding-top: 10px;
}
.popupform-main h3 {
font-size: 26px;
margin: 31px 0 0 0;
color: #ffffff;
font-weight: 500;
}
.popupform-main h2 {
font-size: 30px;
margin: 10px 0 0 0;
color: #ffffff;
font-weight: 700;
}
.popupform-main h4 {
font-size: 24px;
margin: 8px 0 0 0;
color: #fff;
font-weight: 700;
}
.chk-st-1 {display: inline-flex;}
}
div#pop-form {
width: 100%;
margin: 0 auto;
display: table;
text-align: center;
padding-top: 70px;
}
div#pop-form form {
width: 33%;
margin: 0 auto;
display: table;
}
@media (min-width:320px) and (max-width:767px){
.wow {
animation-name: none !important;
visibility: visible !important;
}
div#pop-form {
width: 100%;
margin: 0 auto;
display: table;
text-align: center;
padding-top: 14px;
}
}
</style>
<div class="overlay-bg"></div>
<div  class="popupform-main">
    <div class="pop-form ta-center">
        <div id="pop-form" class="col-sm-12">
            <h3>Fill This Form to Avail  </h3>
            <h2>Amazing Discounts on</h2>
            <h4>Custom Boxes</h4>
            <a href="javascript:;" class="close-btn ta-center">X</a>
            <div class="clearfix"></div>
            <form action="/mail.php" class="jform validate main-pop" method="POST">
                <div class="col-md-12">
                    <div class="control-group">
                        <input type="text" placeholder="Name" name="cn" class="required" required="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="control-group">
                        <input type="email" name="em" class="required email" placeholder="Enter your email here" required="" />
                    </div>
                </div>
                <div class="col-md-12 phonecode">
                    <div class="control-group clearfix">
                        <div class="numberarea">
                            <input type="number" name="pn" id="phone" class="number required" placeholder="Phone Number" required="" />
                        </div>
                    </div>
                </div>
                <div class="col-md-12 ">
                    <div class="control-group clearfix">
                        <div class="textarea_auto">
                            <textarea class="form-control" name="msg" placeholder="Talk about your project" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="control-group clearfix  ">
                        <input type="submit" class="btn btn-default pop_btn submit-btn fspx-23  ls-medium d-block w-100 fw-bold" value="Submit">
                        <input type="hidden" id="lead_area_popup" name="lead_area" value="for $19">
                        <input type="hidden" id="lead_org_price" name="lead_org_price" value="19">
                        <input type="hidden" name="send" value="1">
                        <input type="hidden" name="service_id" value="5640"   class="service_id" >
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
            </form>
        </div>
    </div>
</div>
</div>