@extends('frontend-layout.main')

@section('content')

  <!-- Sidebar Cart Item -->
  {{-- <div class="xs-sidebar-group info-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
      <div class="sidebar-widget-container">
        <div class="widget-heading">
          <a href="#" class="close-side-widget">
            X
          </a>
        </div>
        <div class="sidebar-textwidget">
          
          <!-- Sidebar Info Content -->
          <div class="sidebar-info-contents">
            <div class="content-inner">
              <div class="logo">
                <a href="index-2.html"><img src="images/logo-2.png" alt="" /></a>
              </div>
              <div class="content-box">
                <h2>About Us</h2>
                <p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
                <a href="#" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
              </div>
              <div class="contact-info">
                <h2>Contact Info</h2>
                <ul class="list-style-one">
                  <li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA</li>
                  <li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
                  <li><span class="icon fa fa-envelope"></span>globex@gmail.com</li>
                  <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
                </ul>
              </div>
              <!-- Social Box -->
              <ul class="social-box">
                <li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
                <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                <li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
                <li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
              </ul>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div> --}}
  <!-- END sidebar widget item -->
  
  <!-- Banner Section -->
    <section class="banner-section">
    <div class="main-slider-carousel owl-carousel owl-theme">
            
            <div class="slide" style="background-image: url(images/main-slider/image-1.jpg)">
        <div class="patern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
        <div class="patern-layer-two" style="background-image: url(images/main-slider/pattern-2.png)"></div>
        <div class="auto-container">
          
          <!-- Content Column -->
          <div class="content-column">
            <div class="inner-column">
              <div class="patern-layer-three" style="background-image: url(images/main-slider/pattern-3.png)"></div>
              <div class="title">IT Business Consulting</div>
              <h1>Our Agency Provide <br> Best IT Solutions</h1>
              <div class="text">We are 50+ professional software engineers with more than <br> 12 years of experience in delivering superior products.</div>
              <div class="btns-box">
                <a href="{{url('about-us')}}" class="theme-btn btn-style-one"><span class="txt">Learn More</span></a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
      <div class="slide" style="background-image: url(images/main-slider/image-1.jpg)">
        <div class="patern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
        <div class="patern-layer-two" style="background-image: url(images/main-slider/pattern-2.png)"></div>
        <div class="auto-container">
          
          <!-- Content Column -->
          <div class="content-column">
            <div class="inner-column">
              <div class="patern-layer-three" style="background-image: url(images/main-slider/pattern-3.png)"></div>
              <div class="title">IT Business Consulting</div>
              <h1>Our Agency Provide <br> Best IT Solutions</h1>
              <div class="text">We are 50+ professional software engineers with more than <br> 12 years of experience in delivering superior products.</div>
              <div class="btns-box">
                <a href="{{url('about-us')}}" class="theme-btn btn-style-one"><span class="txt">Learn More</span></a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
      <div class="slide" style="background-image: url(images/main-slider/image-1.jpg)">
        <div class="patern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
        <div class="patern-layer-two" style="background-image: url(images/main-slider/pattern-2.png)"></div>
        <div class="auto-container">
          
          <!-- Content Column -->
          <div class="content-column">
            <div class="inner-column">
              <div class="patern-layer-three" style="background-image: url(images/main-slider/pattern-3.png)"></div>
              <div class="title">IT Business Consulting</div>
              <h1>Our Agency Provide <br> Best IT Solutions</h1>
              <div class="text">We are 50+ professional software engineers with more than <br> 12 years of experience in delivering superior products.</div>
              <div class="btns-box">
                <a href="{{url('about-us')}}" class="theme-btn btn-style-one"><span class="txt">Learn More</span></a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
    </div>
    
  </section>
  <!-- End Banner Section -->
  
  <!-- About Section -->
  <section class="about-section">
    <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title">
        <div class="title">ABOUT COMPANY</div>
        {{-- <h2>You Can not Use Up <br> Creativity.</h2> --}}
      </div>
      <div class="row clearfix">
        
        <!-- Content Column -->
        <div class="content-column col-lg-6 col-md-12 col-sm-12">
          <div class="inner-column">
            <div class="text">Liber solutions established in 2014. We have the young enthusiastic and dynamic professional’s team who completed lots of projects related websites development, custom web based app development, CMS based website on wordpress, E-Commerce solution, data warehousing, data mining and data analytic. We offer best IT benefits that are locked in, modified and practical to suit customer needs and budget plan. Our motive is to offer mind blowing IT services and phenomenal benefits an entirely moderate cost. The company is dedicated to providing the very best in IT service and support. That’s why we are committed to the continuing education of our staff and forming partnerships with world-renowned leaders in technology. We deliver creative web solutions customers by helping them recognize their most significant business and innovation openings and benefiting from them.</div>
            <div class="blocks-outer">
            
              <!-- Feature Block -->
              <div class="feature-block">
                <div class="inner-box">
                  <div class="icon flaticon-award-1"></div>
                  <h6>Experience</h6>
                  <div class="feature-text">Our great team of more than 50+ software experts.</div>
                </div>
              </div>
              
              <!-- Feature Block -->
           {{--    <div class="feature-block">
                <div class="inner-box">
                  <div class="icon flaticon-technical-support"></div>
                  <h6>Quick Support</h6>
                  <div class="feature-text">We’ll help you test bold new ideas while sharing your.</div>
                </div>
              </div> --}}
              
            </div>
            
          {{--   <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image theme-btn btn-style-one"><span class="txt"><i class="play-icon"><img src="images/icons/play-icon.png" alt="" /></i>&ensp; intro Video</span></a> --}}
            
          </div>
        </div>
        
        <!-- Images Column -->
        <div class="images-column col-lg-6 col-md-12 col-sm-12">
          <div class="inner-column" style="background-image: url(images/icons/globe.png)">
            <div class="pattern-layer" style="background-image: url(images/background/pattern-1.png)"></div>
            <div class="images-outer parallax-scene-1">
              <div class="image" data-depth="0.10">
                <img src="{{ asset('images/resource/about-1.jpg')}}" alt="" />
              </div>
              <div class="image-two" data-depth="0.30">
                <img src="{{ asset('images/resource/about-2.jpg')}}" alt="" />
              </div>
              <div class="image-three" data-depth="0.20">
                <img src="{{ asset('images/resource/about-3.jpg')}}" alt="" />
              </div>
              <div class="image-four" data-depth="0.30">
                <img src="{{ asset('images/resource/about-4.jpg')}}" alt="" />
              </div>
            </div>
          </div>
          <a href="{{url('about-us')}}" class="learn"><span class="arrow flaticon-long-arrow-pointing-to-the-right"></span>Learn More About Company</a>
        </div>
        
      </div>
    </div>
  </section>
  <!-- End About Section -->
  
  <!-- Featured Section -->
  <section class="featured-section">
    <div class="auto-container">
      <div class="row clearfix">
        
        <!-- Featured Block Two -->
        <div class="feature-block-two col-lg-6 col-md-12 col-sm-12">
          <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms" style="background-image: url(images/resource/feature-1.jpg)">
            <div class="number">35 +</div>
            <h4>Worldwide Work Pair</h4>
            <div class="text">To succeed, every software solution must be deeply integrated into the existing tech environment..</div>
          </div>
        </div>
        
        <!-- Featured Block Two -->
        <div class="feature-block-two col-lg-6 col-md-12 col-sm-12">
          <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="background-image: url(images/resource/feature-2.jpg)">
            <div class="number">500+</div>
            <h4>Happy Clients</h4>
            <div class="text">To succeed, every software solution must be deeply integrated into the existing tech environment..</div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!-- End Featured Section -->

  
  <!-- Services Section Two -->
  <section class="services-section-two margin-top mt-2">
    <div class="auto-container">
      <div class="upper-box">
        <div class="icon-one" style="background-image: url(images/icons/icon-1.png)"></div>
        <div class="icon-two" style="background-image: url(images/icons/icon-2.png)"></div>
        <div class="icon-three" style="background-image: url(images/icons/icon-3.png)"></div>
        <!-- Sec Title -->
        <div class="sec-title light centered">
          <div class="title">WHO WE ARE</div>
          <h2>We deal with the aspects of <br> professional IT Services</h2>
        </div>
      </div>
      <div class="inner-container">
        <div class="row clearfix">
          
          <!-- Service Block Two -->
          <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="shape-one"></div>
              <div class="shape-two"></div>
              <div class="icon-box">
                <span class="icon flaticon-coding-1"></span>
              </div>
              <h5><a href="{{url('services-details')}}">Web Develpment</a></h5>
              <div class="text">We carry more than just good coding skills. Our experience makes us stand out from other web development.</div>
            </div>
          </div>
          
          <!-- Service Block Two -->
          <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="shape-one"></div>
              <div class="shape-two"></div>
              <div class="icon-box">
                <span class="icon flaticon-mobile-app"></span>
              </div>
              <h5><a href="{{url('services-details')}}">Mobile Development</a></h5>
              <div class="text">Create complex enterprise software, ensure reliable software integration, modernise your legacy system.</div>
            </div>
          </div>
          
          <!-- Service Block Two -->
          <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="shape-one"></div>
              <div class="shape-two"></div>
              <div class="icon-box">
                <span class="icon flaticon-computer"></span>
              </div>
              <h5><a href="{{url('services-details')}}">UI/UX Design</a></h5>
              <div class="text">Build the product you need on time with an experienced team that uses a clear and effective design process.</div>
            </div>
          </div>
          
          <!-- Service Block Two -->
          <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="shape-one"></div>
              <div class="shape-two"></div>
              <div class="icon-box">
                <span class="icon flaticon-web"></span>
              </div>
              <h5><a href="{{url('services-details')}}">Search Engine Optimization</a></h5>
              <div class="text">Turn to our experts to perform comprehensive, Search Engine Optimization for of page and on page .</div>
            </div>
          </div>
          
          <!-- Service Block Two -->
          <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="shape-one"></div>
              <div class="shape-two"></div>
              <div class="icon-box">
                <span class="icon flaticon-monitor-2"></span>
              </div>
              <h5><a href="{{url('services-details')}}">IT Counsultancy</a></h5>
              <div class="text">Trust our top minds to eliminate workflow pain points, implement new tech, and consolidate app portfolios.</div>
            </div>
          </div>
          
          <!-- Service Block Two -->
          <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="shape-one"></div>
              <div class="shape-two"></div>
              <div class="icon-box">
                <span class="icon flaticon-human-resources"></span>
              </div>
              <h5><a href="{{url('services-details')}}">Database Security</a></h5>
              <div class="text">We carry more than just database security skills. Our experience makes us stand out from other Database security development.</div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  <!-- End Services Section Two -->
  
  <!-- Call To Action Section -->
  <section class="call-to-action-section" style="background-image: url(images/background/pattern-3.png)">
    <div class="auto-container">
      <div class="row clearfix">
        <!-- Heading Column -->
        <div class="heading-column col-lg-8 col-md-12 col-sm-12">
          <div class="inner-column">
            <h2>Preparing For Your Business <br> Success With IT Solution</h2>
          </div>
        </div>
        <!-- Button Column -->
        <div class="button-column col-lg-4 col-md-12 col-sm-12">
          <div class="inner-column">
            <a href="{{url('contact-us')}}" class="theme-btn btn-style-two"><span class="txt">Meet With Us</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Call To Action Section -->
  
  <!-- Cases Section -->
  {{-- <section class="cases-section">
    <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title centered">
        <div class="title">LATEST CASE STUDIES</div>
        <h2>Reads Now Our Recent <br> Projects Studies</h2>
      </div>
      <div class="row clearfix">
        
        <!-- Case Block -->
        <div class="case-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="image">
              <img src="{{ asset('images/gallery/1.jpg')}}" alt="" />
              <div class="overlay-box">
                <a href="{{ asset('images/gallery/1.jpg')}}" data-fancybox="case" data-caption="" class="search-icon"><span class="icon flaticon-search"></span></a>
                <div class="content">
                  <h4><a href="projects-detail.html">Social Media App</a></h4>
                  <div class="category">Ideas / Technology</div>
                </div>
                <a href="projects-detail.html" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Case Block -->
        <div class="case-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="image">
              <img src="{{ asset('images/gallery/2.jpg')}}" alt="" />
              <div class="overlay-box">
                <a href="{{ asset('images/gallery/2.jpg')}}" data-fancybox="case" data-caption="" class="search-icon"><span class="icon flaticon-search"></span></a>
                <div class="content">
                  <h4><a href="projects-detail.html">Social Media App</a></h4>
                  <div class="category">Ideas / Technology</div>
                </div>
                <a href="projects-detail.html" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Case Block -->
        <div class="case-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="image">
              <img src="{{ asset('images/gallery/3.jpg')}}" alt="" />
              <div class="overlay-box">
                <a href="{{ asset('images/gallery/3.jpg')}}" data-fancybox="case" data-caption="" class="search-icon"><span class="icon flaticon-search"></span></a>
                <div class="content">
                  <h4><a href="projects-detail.html">Social Media App</a></h4>
                  <div class="category">Ideas / Technology</div>
                </div>
                <a href="projects-detail.html" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Case Block -->
        <div class="case-block col-lg-6 col-md-12 col-sm-12">
          <div class="inner-box">
            <div class="image">
              <img src="{{ asset('images/gallery/4.jpg')}}" alt="" />
              <div class="overlay-box">
                <a href="{{ asset('images/gallery/4.jpg')}}" data-fancybox="case" data-caption="" class="search-icon"><span class="icon flaticon-search"></span></a>
                <div class="content">
                  <h4><a href="projects-detail.html">Social Media App</a></h4>
                  <div class="category">Ideas / Technology</div>
                </div>
                <a href="projects-detail.html" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Case Block -->
        <div class="case-block col-lg-6 col-md-12 col-sm-12">
          <div class="inner-box">
            <div class="image">
              <img src="{{ asset('images/gallery/5.jpg')}}" alt="" />
              <div class="overlay-box">
                <a href="{{ asset('images/gallery/5.jpg')}}" data-fancybox="case" data-caption="" class="search-icon"><span class="icon flaticon-search"></span></a>
                <div class="content">
                  <h4><a href="projects-detail.html">Social Media App</a></h4>
                  <div class="category">Ideas / Technology</div>
                </div>
                <a href="projects-detail.html" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      
      <div class="section-text">We Have Done More Than 1K Projects in Last 3 Years, With 100% Satisfaction.</div>
      
      <div class="btn-box text-center">
        <a href="#" class="theme-btn btn-style-three"><span class="txt">View All</span></a>
      </div>
      
    </div>
  </section> --}}
  <!-- End Cases Section -->
  
  <!--Sponsors Section-->
  <section class="sponsors-section">
    <div class="auto-container">
      
      <div class="carousel-outer">
                <!--Sponsors Slider-->
          <ul class="sponsors-carousel owl-carousel owl-theme">
              <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
              <li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>
              <li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>
              <li><div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div></li>
              <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
              <li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>
              <li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>
              <li><div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div></li>
          </ul>
      </div>
      
    </div>
  </section>
  <!--End Sponsors Section-->
  
  <!-- Testimonial Section -->
  <section class="testimonial-section">
    <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title">
        <div class="clearfix">
          <div class="pull-left">
            <div class="title">LATEST CASE STUDIES</div>
            <h2>Reads Now Our Recent <br> Projects Studies</h2>
          </div>
          <div class="pull-right">
            <div class="text">Our goal is to help our companies maintain or achieve best- in-class <br> positions in their respective industries and our team works.</div>
          </div>
        </div>
      </div>
      <div class="testimonial-carousel owl-carousel owl-theme">
        
        <!-- Testimonial Block -->
        <div class="testimonial-block">
          <div class="inner-box" style="background-image: url(images/background/pattern-4.png)">
            <div class="upper-box">
              <div class="icon">
                <img src="images/resource/testimonial-icon-1.png" alt="" />
              </div>
              <h4>Matt Stefanik</h4>
              <div class="designation">Client of Company</div>
            </div>
            <div class="text">"Very well thought out and articulate communication. Clear milestones, deadlines and fast work. Patience. Infinite patience. No shortcuts. Even if the client is being careless. The best part!."</div>
          </div>
        </div>
        
        <!-- Testimonial Block -->
        {{-- <div class="testimonial-block">
          <div class="inner-box" style="background-image: url(images/background/pattern-4.png)">
            <div class="upper-box">
              <div class="icon">
                <img src="images/resource/testimonial-icon-2.png" alt="" />
              </div>
              <h4>Figma Skills</h4>
              <div class="designation">Client of Company</div>
            </div>
            <div class="text">"Very well thought out and articulate communication. Clear milestones, deadlines and fast work. Patience. Infinite patience. No shortcuts. Even if the client is being careless. The best part...always solving problems with great original ideas!."</div>
          </div>
        </div> --}}
        
        <!-- Testimonial Block -->
        <div class="testimonial-block">
          <div class="inner-box" style="background-image: url(images/background/pattern-4.png)">
            <div class="upper-box">
              <div class="icon">
                <img src="images/resource/testimonial-icon-1.png" alt="" />
              </div>
              <h4>Chuck Kluckhohn</h4>
              <div class="designation">Client of Company</div>
            </div>
            <div class="text">Very Cooperative and impressive client, work in future again and again. Thank you."</div>
          </div>
        </div>
        
        <!-- Testimonial Block -->
        <div class="testimonial-block">
          <div class="inner-box" style="background-image: url(images/background/pattern-4.png)">
            <div class="upper-box">
              <div class="icon">
                <img src="images/resource/testimonial-icon-2.png" alt="" />
              </div>
              <h4>Marc Esadrian</h4>
              <div class="designation">Client of Company</div>
            </div>
            <div class="text">"Great freelancer! Will call upon his expertise again in the near future. A+...always solving problems with great original ideas!."</div>
          </div>
        </div>
        
        <!-- Testimonial Block -->
        <div class="testimonial-block">
          <div class="inner-box" style="background-image: url(images/background/pattern-4.png)">
            <div class="upper-box">
              <div class="icon">
                <img src="images/resource/testimonial-icon-1.png" alt="" />
              </div>
              <h4>Sonia S </h4>
              <div class="designation">Client of Company</div>
            </div>
            <div class="text">"A Good client explained the requirement completely. If get chance will work with him for future assignment."</div>
          </div>
        </div>
        
        <!-- Testimonial Block -->
        <div class="testimonial-block">
          <div class="inner-box" style="background-image: url(images/background/pattern-4.png)">
            <div class="upper-box">
              <div class="icon">
                <img src="images/resource/testimonial-icon-2.png" alt="" />
              </div>
              <h4>James Alexander</h4>
              <div class="designation">Client of Company</div>
            </div>
            <div class="text">"very impressive work"</div>
          </div>
        </div>
        
      </div>
      
      <div class="lower-text">More than 500+ customers share their thoughts to us. . . <a href="{{url('testimonial')}}">Read All Reviews</a></div>
      
    </div>
  </section>
  <!-- End Testimonial Section -->
  
  <!-- Technology Section -->
  <section class="technology-section" style="background-image: url(images/background/1.jpg)">
    <div class="pattern-layer-one" style="background-image: url(images/background/pattern-5.png)"></div>
    <div class="pattern-layer-two" style="background-image: url(images/background/pattern-6.png)"></div>
    <div class="auto-container">
      <div class="row clearfix">
        <!-- Title Column -->
        <div class="title-column col-lg-5 col-md-12 col-sm-12">
          <div class="inner-column">
            <!-- Sec Title -->
            <div class="sec-title light">
              <div class="title">TECHNOLOGY INDEX</div>
              <h2>We Deliver Solutions with the Goal of Trusting Workships</h2>
            </div>
          </div>
        </div>
        <!-- Blocks Column -->
        <div class="blocks-column col-lg-7 col-md-12 col-sm-12">
          <div class="inner-column">
            <div class="row clearfix">
              
              <!-- Technology Block -->
              <div class="technology-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <a href="{{url('services-details')}}" class="overlay-link"></a>
                  <div class="icon-box">
                    <span class="flaticon-coding-2"></span>
                  </div>
                  <h6>Custom Web Development</h6>
                </div>
              </div>
              
              <!-- Technology Block -->
              <div class="technology-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <a href="{{url('services-details')}}" class="overlay-link"></a>
                  <div class="icon-box">
                    <span class="flaticon-android"></span>
                  </div>
                  <h6>Mobile Development</h6>
                </div>
              </div>
              
              <!-- Technology Block -->
              <div class="technology-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <a href="{{url('services-details')}}" class="overlay-link"></a>
                  <div class="icon-box">
                    <span class="flaticon-apple"></span>
                  </div>
                  <h6>IOS Development</h6>
                </div>
              </div>
              
              <!-- Technology Block -->
              <div class="technology-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <a href="{{url('services-details')}}" class="overlay-link"></a>
                  <div class="icon-box">
                    <span class="flaticon-iot"></span>
                  </div>
                  <h6>IOT Development</h6>
                </div>
              </div>
              
              <!-- Technology Block -->
              <div class="technology-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <a href="{{url('services-details')}}" class="overlay-link"></a>
                  <div class="icon-box">
                    <span class="flaticon-smartband"></span>
                  </div>
                  <h6>  E-Commerce Development</h6>
                </div>
              </div>
              
              <!-- Technology Block -->
              <div class="technology-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <a href="{{url('services-details')}}" class="overlay-link"></a>
                  <div class="icon-box">
                    <span class="flaticon-tv"></span>
                  </div>
                  <h6>Search Engine Marketing</h6>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Technology Section -->
  
  <!-- Team Section -->
 {{--  <section class="team-section" style="background-image: url(images/background/2.jpg)">
    <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title">
        <div class="clearfix">
          <div class="pull-left">
            <div class="title">OUR DEDICATED TEAM</div>
            <h2>We have Large No <br> of Expert Team Member</h2>
          </div>
          <div class="pull-right">
            <div class="text">Our goal is to help our companies maintain or achieve best- in-class <br> positions in their respective industries and our team works.</div>
          </div>
        </div>
      </div>
      <div class="clearfix">
        
        <!-- Team Block -->
        <div class="team-block col-lg-3 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="image">
              <a href="team.html"><img src="images/resource/team-1.jpg" alt="" /></a>
            </div>
            <div class="lower-box">
              <!-- Social Box -->
              <ul class="social-box">
                <li><a href="#" class="fa fa-facebook-f"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-dribbble"></a></li>
              </ul>
              <div class="content">
                <h5><a href="team.html">Jennifer Garcia</a></h5>
                <div class="designation">Consultant Officer</div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Team Block -->
        <div class="team-block col-lg-3 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="image">
              <a href="team.html"><img src="images/resource/team-2.jpg" alt="" /></a>
            </div>
            <div class="lower-box">
              <!-- Social Box -->
              <ul class="social-box">
                <li><a href="#" class="fa fa-facebook-f"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-dribbble"></a></li>
              </ul>
              <div class="content">
                <h5><a href="team.html">Robert Liam</a></h5>
                <div class="designation">Web Designer</div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Team Block -->
        <div class="team-block col-lg-3 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="image">
              <a href="team.html"><img src="images/resource/team-3.jpg" alt="" /></a>
            </div>
            <div class="lower-box">
              <!-- Social Box -->
              <ul class="social-box">
                <li><a href="#" class="fa fa-facebook-f"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-dribbble"></a></li>
              </ul>
              <div class="content">
                <h5><a href="team.html">Jassica Ethan</a></h5>
                <div class="designation">Project Manager</div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Team Block -->
        <div class="team-block col-lg-3 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="image">
              <a href="team.html"><img src="images/resource/team-4.jpg" alt="" /></a>
            </div>
            <div class="lower-box">
              <!-- Social Box -->
              <ul class="social-box">
                <li><a href="#" class="fa fa-facebook-f"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-dribbble"></a></li>
              </ul>
              <div class="content">
                <h5><a href="team.html">Adaim Mrala</a></h5>
                <div class="designation">IT Service Officer</div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section> --}}
  <!-- End Team Section -->
  
  <!-- News Section -->
 {{--  <section class="news-section">
    <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title centered">
        <div class="title">Our Blog</div>
        <h2>Click Out Our <br> Latest News & Artical</h2>
      </div>
      <div class="row clearfix">
        
        <!-- News Block -->
        <div class="news-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="image">
              <a href="news-detail.html"><img src="images/resource/news-1.jpg" alt="" /></a>
            </div>
            <div class="lower-content">
              <div class="post-date">22 <span>DEC</span></div>
              <ul class="post-meta">
                <li><span class="icon flaticon-comment"></span>3 comments</li>
                <li><span class="icon flaticon-user"></span>Admin</li>
              </ul>
              <h4><a href="news-detail.html">Define World Best IT Solution Technology</a></h4>
              <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has ...</div>
              <a class="read-more" href="news-detail.html">Read More<span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
            </div>
          </div>
        </div>
        
        <!-- News Block -->
        <div class="news-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="image">
              <a href="news-detail.html"><img src="images/resource/news-2.jpg" alt="" /></a>
            </div>
            <div class="lower-content">
              <div class="post-date">15 <span>DEC</span></div>
              <ul class="post-meta">
                <li><span class="icon flaticon-comment"></span>3 comments</li>
                <li><span class="icon flaticon-user"></span>Admin</li>
              </ul>
              <h4><a href="news-detail.html">You Must Try 20 Secret Of Digital Transform</a></h4>
              <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has ...</div>
              <a class="read-more" href="news-detail.html">Read More<span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
            </div>
          </div>
        </div>
        
        <!-- News Block -->
        <div class="news-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="image">
              <a href="news-detail.html"><img src="images/resource/news-3.jpg" alt="" /></a>
            </div>
            <div class="lower-content">
              <div class="post-date">10 <span>oct</span></div>
              <ul class="post-meta">
                <li><span class="icon flaticon-comment"></span>3 comments</li>
                <li><span class="icon flaticon-user"></span>Admin</li>
              </ul>
              <h4><a href="news-detail.html">Digital Conference Of IT Tech Events in 2020</a></h4>
              <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has ...</div>
              <a class="read-more" href="news-detail.html">Read More<span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section> --}}
  <!-- End News Section -->
@endsection
  
{{-- @include('frontend-layout.mainfooter');                                                                                                                                                                                                                                    --}}
  