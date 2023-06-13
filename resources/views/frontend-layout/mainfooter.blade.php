<!-- Info Section -->
  {{-- <section class="info-section " style={{Request::path() === '/' ? 'display:none;' :'' }} style="background-image: url(images/background/6.jpg)">
    <div class="auto-container">
      <div class="row clearfix">
        
        <!-- Logo Column -->
        <div class="logo-column col-lg-3 col-md-6 col-sm-12">
          <div class="inner-column">
            <div class="logo">
              <a href="index-2.html"><img src="images/logo-2.png" alt="" /></a>
            </div>
          </div>
        </div>
        <!-- Info Column -->
        <div class="info-column col-lg-3 col-md-6 col-sm-12">
          <div class="inner-column">
            <div class="icon-box"><span class="flaticon-pin"></span></div>
            <ul>
              <li><strong>Address</strong></li>
              <li>Laxyo House, Plot No.-2, County Park, MR-5, Mahalaxmi Nagar, Indore </li>
            </ul>
          </div>
        </div>
        
        <!-- Info Column -->
        <div class="info-column col-lg-3 col-md-6 col-sm-12">
          <div class="inner-column">
            <div class="icon-box"><span class="flaticon-phone-call"></span></div>
            <ul>
              <li><strong>Phone</strong></li>
              <li>+91-731-4996625</li>
              <li> +91-731-4043798</li>
            </ul>
          </div>
        </div>
        
        <!-- Info Column -->
        <div class="info-column col-lg-3 col-md-6 col-sm-12">
          <div class="inner-column">
            <div class="icon-box"><span class="flaticon-email-1"></span></div>
            <ul>
              <li><strong>E-Mail</strong></li>
              <li>info@laxyo.com</li>
            </ul>
          </div>
        </div>
        
      </div>
    </div>
  </section> --}}
  <!-- End Info Section -->
<!-- Main Footer -->
@if(Request::path() === '/' )
<footer class="main-footer">
  <div class="pattern-layer-one" style="background-image: url(images/background/pattern-7.png)"></div>
    <div class="pattern-layer-two" style="background-image: url(images/background/pattern-8.png)"></div>
    <!--Waves end-->
      <div class="auto-container">
          <!--Widgets Section-->
            <div class="widgets-section">
              <div class="row clearfix">
                  
                    <!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
            <div class="row clearfix">
            
            <!-- Footer Column -->
              <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                  <div class="footer-widget logo-widget">
                  <div class="logo">
                    <a href="index-2.html"><img src="{{ asset('/images/logo4.png')}}" alt="" /></a>
                    {{-- <a href=""> Libersolution</a> --}}
                  </div>
                  <div class="text">We are the best world Information Technology Company. Providing the highest quality in Web development solutions. About more than 12 years of experience and 100 of innovative achievements.</div>
                  <!-- Social Box -->
                  <ul class="social-box">
                    <li><a href="#" class="fa fa-facebook-f"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-google"></a></li>
                  </ul>
                </div>
              </div>
              
              <!-- Footer Column -->
              <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                  <div class="footer-widget links-widget">
                  <h5>Quick Links</h5>
                  <ul class="list-link">
                    <li><a href="{{url('services/all')}}">Managed IT services</a></li>
                    <li><a href="{{url('our-products')}}">Our Products</a></li>
                    <li><a href="{{url('contact-us')}}">IT support & helpdesk</a></li>
                    <li><a href="{{url('portfolio')}}">Our Portfolio</a></li>
                    <li><a href="#">Custom Software</a></li>
                    <li><a href="{{url('contact-us')}}">Free Consultation</a></li>
                  </ul>
                </div>
              </div>
              
            </div>
          </div>
          
          <!-- Column -->
          <div class="big-column col-lg-6 col-md-12 col-sm-12">
            <div class="row clearfix">
              
              <!-- Footer Column -->
              <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                <div class="footer-widget news-widget">
                  <h5>Our Group and Companies </h5>
                  <!-- Footer Column -->
                  <ul class="list-link">
                    <li><a target="_blank" href="http://www.laxyo.com/">Laxyo Energy Ltd. </a>></li>
                    <li><a target="_blank" href="http://www.laxyofinance.com/">Laxyo Finance Limited </a></li>
                    <li><a target="_blank" href="http://www.yolaxinfra.com/">Yolax Infranergy Pvt Ltd </a></li>
                    <li><a target="_blank" href="http://lakshyainternationalschool.org/">Lakshya International School </a></li>
                    <li><a target="_blank" href="http://www.maagayatrihospital.org/">Maa Gayatri Hospital </a></li>
                    <li><a target="_blank" href="http://www.discountbrandfactory.com/">Discount Brand Factory </a></li>
                    <li><a target="_blank" href="http://www.adlaw.in/">Adlaw </a></li>
                    <li><a target="_blank" href="http://www.apnagps.com/">Apna Gps </a></li>
                    <li><a target="_blank" href="https://www.courtsjudgments.com/">Courtsjudgment </a></li>
                    <li><a target="_blank" href="http://www.advocatemail.com/">Advocate Mail </a></li>
                  </ul>
                </div>
              </div>
              
              <!-- Footer Column -->
              <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                <div class="footer-widget contact-widget">
                  <h5>Contact Us</h5>
                  <ul>
                    <li>
                      <span class="icon flaticon-placeholder-2"></span>
                      <strong>Address</strong>
                      Laxyo House, Plot No.-2, County Park, MR-5, Mahalaxmi Nagar, Indore
                    </li>
                    <li>
                      <span class="icon flaticon-phone-call"></span>
                      <strong>Phone</strong>
                      <a href="tel:+786-875-864-75">+91-731-4996625, +91-731-4043798</a>
                    </li>
                    <li>
                      <span class="icon flaticon-email-1"></span>
                      <strong>E-Mail</strong>
                      <a href="#">info@libersolution.com</a>
                    </li>
                  </ul>
                </div>
              </div>
              
            </div>
          </div>
          
        </div>
      </div>
      
      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <div class="auto-container">
          <div class="row clearfix">
            <!-- Column -->
            <div class="column col-lg-6 col-md-12 col-sm-12">
              <div class="copyright">Copyright &copy; 2020 by libersolution.com
              . All Rights Reserved.</div>
            </div>
            <!-- Column -->
            <div class="column col-lg-6 col-md-12 col-sm-12">
              <ul class="footer-nav">
                <li><a href="{{url('about-us')}}">About Us</a></li>
                <li><a href="{{url('services/all')}}">Services</a></li>
                <li><a href="#">Privacy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
</footer>
<!-- Color Palate / Color Switcher -->

<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-gear"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
  
  <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
            <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
            <span class="palate olive-color" data-theme-file="css/color-themes/olive-theme.css"></span>
            <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
            <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
            <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
            <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
            <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
        </div>
    </div>
  
  

</div>

<!-- Search Popup -->
<div class="search-popup">
  <button class="close-search style-two"><span class="flaticon-multiply"></span></button>
  <button class="close-search"><span class="flaticon-up-arrow-1"></span></button>
  <form method="post" action="https://expert-themes.com/html/globex/blog.html">
    <div class="form-group">
      <input type="search" name="search-field" value="" placeholder="Search Here" required="">
      <button type="submit"><i class="fa fa-search"></i></button>
    </div>
  </form>
</div>
<!-- End Header Search -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="{{ asset('js/jquery.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ asset('js/jquery.fancybox.js')}}"></script>
<script src="{{ asset('js/appear.js')}}"></script>
<script src="{{ asset('js/parallax.min.js')}}"></script>
<script src="{{ asset('js/tilt.jquery.min.js')}}"></script>
<script src="{{ asset('js/jquery.paroller.min.js')}}"></script>
<script src="{{ asset('js/owl.js')}}"></script>
<script src="{{ asset('js/wow.js')}}"></script>
<script src="{{ asset('js/nav-tool.js')}}"></script>
<script src="{{ asset('js/jquery-ui.js')}}"></script>
<script src="{{ asset('js/script.js')}}"></script>
<script src="{{ asset('js/color-settings.js')}}"></script>
</body>
</html>
@else

<!-- Info Section -->
  <section class="info-section" style="background-image: url({{ asset('images/background/6.jpg')}})">
    <div class="auto-container">
      <div class="row clearfix">
        
        <!-- Logo Column -->
        <div class="logo-column col-lg-3 col-md-6 col-sm-12">
          <div class="inner-column">
            <div class="logo">
                <a href="{{url('/')}}"><img src="{{ asset('/images/logo4.png')}}" alt="" /></a>
            </div>
          </div>
        </div>
        <!-- Info Column -->
        <div class="info-column col-lg-3 col-md-6 col-sm-12">
          <div class="inner-column">
            <div class="icon-box"><span class="flaticon-pin"></span></div>
            <ul>
              <li><strong>Address</strong></li>
              <li>Laxyo House, Plot No.-2, County Park, MR-5, Mahalaxmi Nagar, Indore </li>
            </ul>
          </div>
        </div>
        
        <!-- Info Column -->
        <div class="info-column col-lg-3 col-md-6 col-sm-12">
          <div class="inner-column">
            <div class="icon-box"><span class="flaticon-phone-call"></span></div>
            <ul>
              <li><strong>Phone</strong></li>
              <li>+91-731-4996625</li>
              <li> +91-731-4043798</li>
            </ul>
          </div>
        </div>
        
        <!-- Info Column -->
        <div class="info-column col-lg-3 col-md-6 col-sm-12">
          <div class="inner-column">
            <div class="icon-box"><span class="flaticon-email-1"></span></div>
            <ul>
              <li><strong>E-Mail</strong></li>
              <li>info@libersolution.com</li>
            </ul>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!-- End Info Section -->

<!-- Main Footer -->
    <footer class="main-footer style-three">
    <div class="pattern-layer-three" style="background-image: url({{ asset('images/background/pattern-14.png')}})"></div>
    <div class="pattern-layer-four" style="background-image: url({{ asset('images/background/pattern-15.png')}})"></div>
    <!--Waves end-->
      <div class="auto-container">
          <!--Widgets Section-->
            <div class="widgets-section">
              <div class="row clearfix">
          <!-- Footer Column -->
          <div class="footer-column col-lg-4 col-md-6 col-sm-12">
            <div class="footer-widget logo-widget">
              <h5>About Liber Solution</h5>
              <div class="text">Liber solutions established in 2014. We have the young enthusiastic and dynamic professional’s team who completed lots of projects related websites development, custom web based app development, CMS based website on wordpress, E-Commerce solution, data warehousing, data mining and data analytic. We offer best IT benefits that are locked in, modified and practical to suit customer needs and budget plan. </div>
            </div>
          </div>
          <!-- Footer Column -->
          <div class="footer-column col-lg-3 col-md-6 col-sm-12">
            <div class="footer-widget links-widget">
              <h5>Quick Links</h5>
              <ul class="list-link">
                <li><a href="{{url('services/all')}}">Managed IT services</a></li>
                <li><a href="{{url('our-products')}}">Our Products</a></li>
                <li><a href="{{url('contact-us')}}">IT support & helpdesk</a></li>
                <li><a href="{{url('portfolio')}}">Our Portfolio</a></li>
                <li><a href="#">Custom Software</a></li>
                <li><a href="{{url('contact-us')}}">Free Consultation</a></li>
              </ul>
            </div>
          </div>
          
                    <!-- Footer Column -->
          <div class="footer-column col-lg-5 col-md-6 col-sm-12">
            <div class="footer-widget subscribe-widget">
              <h5>Subscribe Newsletter</h5>
              <div class="text">Sign up today for hints, tips and <br> the latest product news</div>
              <!--Emailed Form-->
              <div class="emailed-form">
                <form method="post" action="https://expert-themes.com/html/globex/contact.html">
                  <div class="form-group">
                    <input type="email" name="email" value="" placeholder="Enter Your Email" required>
                    <button type="submit" class="theme-btn">Subscribe Now</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <div class="auto-container">
        <div class="row clearfix">
          <!-- Column -->
          <div class="column col-lg-6 col-md-12 col-sm-12">
            <div class="copyright">Copyright &copy; 2012-2021 by libersolution.com. All Rights Reserved.</div>
          </div>
          <!-- Column -->
          <div class="column col-lg-6 col-md-12 col-sm-12">
            <ul class="footer-nav">
              <li><a href="{{url('contact-us')}}">About Us</a></li>
              <li><a href="{{url('/services/all')}}">Services</a></li>
              <li><a href="#">Privacy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
<!--End pagewrapper-->

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-gear"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
  
  <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
            <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
            <span class="palate olive-color" data-theme-file="css/color-themes/olive-theme.css"></span>
            <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
            <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
            <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
            <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
            <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
        </div>
    </div>
  
</div>
<!-- Search Popup -->
<div class="search-popup">
  <button class="close-search style-two"><span class="flaticon-multiply"></span></button>
  <button class="close-search"><span class="flaticon-up-arrow-1"></span></button>
  <form method="post" action="https://expert-themes.com/html/globex/blog.html">
    <div class="form-group">
      <input type="search" name="search-field" value="" placeholder="Search Here" required="">
      <button type="submit"><i class="fa fa-search"></i></button>
    </div>
  </form>
</div>
<!-- End Header Search -->
<!--Scroll to top-->
<script src="{{ asset('js/jquery.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ asset('js/jquery.fancybox.js')}}"></script>
<script src="{{ asset('js/appear.js')}}"></script>
<script src="{{ asset('js/mixitup.js')}}"></script>
<script src="{{ asset('js/parallax.min.js')}}"></script>
<script src="{{ asset('js/tilt.jquery.min.js')}}"></script>
<script src="{{ asset('js/jquery.paroller.min.js')}}"></script>
<script src="{{ asset('js/owl.js')}}"></script>
<script src="{{ asset('js/wow.js')}}"></script>
<script src="{{ asset('js/nav-tool.js')}}"></script>
<script src="{{ asset('js/jquery-ui.js')}}"></script>
<script src="{{ asset('js/validate.js')}}"></script>
<script src="{{ asset('js/script.js')}}"></script>
<script src="{{ asset('js/color-settings.js')}}"></script>
</body>

</html>
@endif
<!--End pagewrapper-->

