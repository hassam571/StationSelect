   {{-- <div id="footer" class="footer_sticky_part">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-6">
          <h4>Useful Links</h4>
          <ul class="social_footer_link">
            <li><a href="{{ route('add-station') }}" class="footer-link">Submit Station</a></li>
            <li><a href="{{ route('frontend.login') }}" class="footer-link">Login</a></li>
            <li><a href="{{ route('faq') }}" class="footer-link">FAQ</a></li>
            <li><a href="{{ route('banners') }}" class="footer-link">Banners</a></li>
            <li><a href="{{ route('broadcaster') }}" class="footer-link">Broadcast</a></li>
        </ul>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6">
          <h4>Information</h4>
          <ul class="social_footer_link">
            <li><a href="{{ route('privacy') }}" class="footer-link">Privacy Policy</a></li>
            <li><a href="{{ route('about-us') }}" class="footer-link">About Us</a></li>
            <li><a href="{{ route('contact') }}" class="footer-link">Contact Us</a></li>
        </ul>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6">
          <h4>Connect with US</h4>
          <ul class="social_footer_link">
            <li><a href="https://www.facebook.com/profile.php?id=61558112994637" target="_blank" class="footer-link">
                <img src="{{ asset('assets/frontend/img/social_facebook.png') }}" alt="Facebook" style="width: 30px; margin-right: 10px;" />
                Facebook
            </a></li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="footer_copyright_part">© Online Audience - Station Select 2024 - All rights reserved.</div>
        </div>
      </div>
    </div>
  </div>
  <div id="bottom_backto_top"><a href="#"></a></div>
</div> --}}



<!-- Footer Section -->
<div id="footer" class="footer_sticky_part">
<div class="footer_wrapper ms_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12 col-sm-12">
                <div class="footer_widget footer_about_wrapper ms_cover">
                    <div class="wrapper_first_image">
                        <a href="{{ route('frontend.index') }}">
                            <img src="{{ asset('assets/frontend/img/logo1.png') }}" alt="logo">
                        </a>                    </div>
                    <div class="abotus_content">
                        <p>Join millions of users who trust us for music, talk shows, and live broadcasts. Stay connected and discover what’s trending across the globe with StationSelect.com!</p>
                    </div>
                    <ul class="footer_about_link_wrapper ms_cover">
                        <li> <i class="fa fa-phone"></i>+44 7565 167387 </li>
                        <li> <a href="#"><i class="fa fa-envelope"></i>Info@stationselect.com</a></li>
                        <li> <a href="#"><i class="fas fa-user-alt"></i>stationselect.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 col-sm-12">
                <div class="footer_widget footer_blog_wrapper ms_cover">
                    <h4>usefull links</h4>
                    <ul class="footer_about_link_wrapper usefull_linkx ms_cover">
                        <li> <a href="{{ route('about-us') }}">About Us</a></li>
                        <li> <a href="{{ route('privacy') }}">Privacy Policy</a></li>
                        <li> <a href="{{ route('contact') }}">Contact Us</a></li>
                        <li> <a href="{{ route('add-station') }}">Submit Station</a></li>
                        <li> <a href="{{ route('banners') }}">Banners</a></li>
                        <li> <a href="{{ route('faq') }}">FAQ</a></li>
                        <li> <a href="{{ route('broadcaster') }}">Broadcaster</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 col-sm-12">
                <div class="footer_widget footer_contact_wrapper ms_cover">
                    <h4>download app</h4>
                    <p>Apps available for download</p>
                    <span><a href="https://play.google.com/store/apps/details?id=com.wStationSelect_18017199"><img src="{{ asset('assets/images/app_btn1.png') }}" class="img-responsive" alt="App Button 1"></a></span>
                    {{-- <span><a href="#"><img src="{{ asset('assets/images/app_btn2.png') }}" class="img-responsive" alt="App Button 2"></a></span>
                    <span><a href="#"><img src="{{ asset('assets/images/app_btn3.png') }}" class="img-responsive" alt="App Button 3"></a></span> --}}
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-12 col-sm-12">
                <div class="footer_widget footer_contact_wrapper ms_cover">
                    <h4>newsletter</h4>
                    <p>Our latest news & Special Offers</p>
                    <div class="contect_form_footer ms_cover">
                        <input type="text" name="name" placeholder="Name">
                    </div>
                    <div class="contect_form_footer ms_cover">
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="lang_apply_btn footer_cont_btn">
                        <ul>
                            <li>
                                <a href="#"><i class="flaticon-play-button"></i>Subscribe</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="foter_top_wrapper ms_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="btm_foter_box">
                    <p>Copyright © 2024 <a href="index.html">Online Audience</a> Station Select <a href="#"> All rights reserved.</a>.</p>
                    <div class="aboutus_social_icons">
                        <a href="#">Station Select <i class="flaticon-play-button"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
