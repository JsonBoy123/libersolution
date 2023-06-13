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
	
	<!--Page Title-->
    <section class="page-title">
		<div class="pattern-layer-one" style="background-image: url(images/background/pattern-16.png)"></div>
    	<div class="auto-container">
			<h2>About us</h2>
			<ul class="page-breadcrumb">
				<li><a href="{{url('/')}}">home</a></li>
				<li>About us</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- About Section -->
	<section class="about-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="title">ABOUT COMPANY</div>
				<h2>You Can not Use Up <br> Creativity.</h2>
			</div>
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="text">Liber solutions established in 2014. We have the young enthusiastic and dynamic professional’s team who completed lots of projects related websites development, custom web based app development, CMS based website on wordpress, E-Commerce solution, data warehousing, data mining and data analytic. We offer best IT benefits that are locked in, modified and practical to suit customer needs and budget plan. Our motive is to offer mind blowing IT services and phenomenal benefits an entirely moderate cost. The company is dedicated to providing the very best in IT service and support. That’s why we are committed to the continuing education of our staff and forming partnerships with world-renowned leaders in technology. We deliver creative web solutions customers by helping them recognize their most significant business and innovation openings and benefiting from them.<br>Liber Solutions engages team of motivated, dedicated and skilled professionals; we are not only delivering solutions but also delivering end to end solutions as per client specifications. Our analyst, knows “What Exactly” client need so we are always able to meet the client expectations provide. Our core values are driven by our commitment to deliver excellent services to our customers. We truly believe that our success is dependent on the success of our clients and we make sure all of our energies are aligned to achieve that.</div>
						<div class="blocks-outer">
							<!-- Feature Block -->
							<div class="feature-block">
								<div class="inner-box">
									<div class="icon flaticon-award-1"></div>
									<h6>Experience</h6>
									<div class="feature-text">Our great team of more than 50 software experts.</div>
								</div>
							</div>
							<!-- Feature Block -->
							<div class="feature-block">
								<div class="inner-box">
									<div class="icon flaticon-technical-support"></div>
									<h6>Quick Support</h6>
									<div class="feature-text">We’ll help you test bold new ideas while sharing your.</div>
								</div>
							</div>
						</div>
						{{-- <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image theme-btn btn-style-one"><span class="txt"><i class="play-icon"><img src="images/icons/play-icon.png" alt="" /></i>&ensp; intro Video</span></a> --}}
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
					<a href="{{url('/about-us')}}" class="learn"><span class="arrow flaticon-long-arrow-pointing-to-the-right"></span>Learn More About Company</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Section -->
	
	<!-- Counter Section -->
	<section class="counter-section">
		<div class="auto-container">
			<div class="inner-container">
				<!-- Fact Counter -->
				<div class="fact-counter">
					<div class="row clearfix">

						<!-- Column -->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="count-outer count-box">
										<span class="count-text" data-speed="3000" data-stop="50">0</span>+
									</div>
									<h4 class="counter-title">ACTIVE CLIENTS</h4>
								</div>
							</div>
						</div>

						<!-- Column -->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="count-outer count-box alternate">
										<span class="count-text" data-speed="5000" data-stop="850">0</span>+
									</div>
									<h4 class="counter-title">PROJECTS DONE</h4>
								</div>
							</div>
						</div>

						<!-- Column -->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="count-outer count-box">
										<span class="count-text" data-speed="2000" data-stop="10">0</span>+
									</div>
									<h4 class="counter-title">TEAM ADVISORS</h4>
								</div>
							</div>
						</div>

						<!-- Column -->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="count-outer count-box">
										<span class="count-text" data-speed="3500" data-stop="12">0</span>+
									</div>
									<h4 class="counter-title">GLORIOUS YEARS</h4>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Counter Section -->
	
	<!-- About Section Two -->
	<section class="about-section-two" style="background-image: url({{asset('images/background/3.jpg')}})">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Image Column -->
				<div class="image-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="circle-layer" style="background-image: url({{asset('images/background/pattern-10.png')}})"></div>
						<div class="image">
							<img src="{{asset('images/resource/about-5.jpg')}}" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Skill Column -->
				<div class="skill-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Sec Title -->
						<div class="sec-title light">
							<div class="title">About Libersolution</div>
							<h2>Transform Your Business With The Leading IT Solution rovider.</h2>
							<div class="text">We listen. We advise. We design, together. Happy customers and ongoing relationships are what we strive for. Success is measured by results, the most important being how our clients feel about their experience with us.</div>
						</div>
						
						<!-- Skills -->
						<div class="skills">
							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Web Development</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="93">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="93"></div></div>
								</div>
							</div>

							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">UI/UX Design</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="80">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="80"></div></div>
								</div>
							</div>

							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">App Development</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="73">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="73"></div></div>
								</div>
							</div>

							

						</div>
						
						<a href="{{url('about-us')}}" class="theme-btn btn-style-two"><span class="txt">Learn More</span></a>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End About Section Two -->
	
	<!--Sponsors Section-->
	<section class="sponsors-section style-two">
		<div class="auto-container">
			
			<div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li><div class="image-box"><a href="#"><img src="{{asset('images/clients/1.png')}}" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{asset('images/clients/2.png')}}" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{asset('images/clients/3.png')}}" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{asset('images/clients/4.png')}}" alt=""></a></div></li>
					<li><div class="image-box"><a href="#"><img src="{{asset('images/clients/1.png')}}" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{asset('images/clients/2.png')}}" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{asset('images/clients/3.png')}}" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{asset('images/clients/4.png')}}" alt=""></a></div></li>
                </ul>
            </div>
			
		</div>
	</section>
	<!--End Sponsors Section-->
	
	<!-- Process Section -->
    {{-- <section class="process-section">
		<div class="pattern-layer-one" style="background-image: url(images/background/pattern-11.jpg)"></div>
		<div class="pattern-layer-two" style="background-image: url(images/background/pattern-12.jpg)"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">OUR PROCESS</div>
				<h2>Driving Client Results Utilizing New <br> Innovation Points of view</h2>
			</div>
			<div class="row clearfix">
				
				<!-- Process Block -->
				<div class="process-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="number-box">01</div>
						<h4><a href="services-detail.html">End to End Solutions and Services Guaranteed</a></h4>
						<div class="text">Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. per inceptos himenaeos.</div>
						<a class="read-more" href="services-detail.html"><span class="arrow flaticon-long-arrow-pointing-to-the-right"></span>Read More</a>
					</div>
				</div>
				
				<!-- Process Block -->
				<div class="process-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="number-box">02</div>
						<h4><a href="services-detail.html">Ahead of The Curve We Future-proof Your IT</a></h4>
						<div class="text">Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. per inceptos himenaeos.</div>
						<a class="read-more" href="services-detail.html"><span class="arrow flaticon-long-arrow-pointing-to-the-right"></span>Read More</a>
					</div>
				</div>
				
				<!-- Process Block -->
				<div class="process-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="number-box">03</div>
						<h4><a href="services-detail.html">Experience Certainty Every Project Executed Successful</a></h4>
						<div class="text">Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. per inceptos himenaeos.</div>
						<a class="read-more" href="services-detail.html"><span class="arrow flaticon-long-arrow-pointing-to-the-right"></span>Read More</a>
					</div>
				</div>
				
			</div>
		</div>
	</section> --}}
	<!-- End Process Section -->
	
	<!-- Technology Section -->
	<section class="technology-section style-two" style="background-image: url({{asset('images/background/1.jpg')}}')">
		<div class="pattern-layer-one" style="background-image: url({{asset('images/background/pattern-5.png')}}')"></div>
		<div class="pattern-layer-two" style="background-image: url({{asset('images/background/pattern-6.png')}}')"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<div class="title">TECHNOLOGY INDEX</div>
				<h2>Real Time Monitoring Your Infrstracture <br> Branded Degital Solutions</h2>
			</div>
			<div class="row clearfix">
				<!-- Technology Block -->
				<div class="technology-block">
					<div class="inner-box">
						<a href="{{url('services-details')}}" class="overlay-link"></a>
						<div class="icon-box">
							<span class="flaticon-coding-3"></span>
						</div>
						<h6>Web Develpment</h6>
					</div>
				</div>
					
				<!-- Technology Block -->
				<div class="technology-block">
					<div class="inner-box">
						<a href="{{url('services-details')}}" class="overlay-link"></a>
						<div class="icon-box">
							<span class="flaticon-design"></span>
						</div>
						<h6>Ul/UX Design</h6>
					</div>
				</div>
				<!-- Technology Block -->
				<div class="technology-block">
					<div class="inner-box">
						<a href="{{url('services-details')}}" class="overlay-link"></a>
						<div class="icon-box">
							<span class="flaticon-dashboard"></span>
						</div>
						<h6>Data Analytics</h6>
					</div>
				</div>
				<!-- Technology Block -->
				<div class="technology-block">
					<div class="inner-box">
						<a href="{{url('services-details')}}" class="overlay-link"></a>
						<div class="icon-box">
							<span class="flaticon-web-browser"></span>
						</div>
						<h6>SEO</h6>
					</div>
				</div>
				<!-- Technology Block -->
				<div class="technology-block">
					<div class="inner-box">
						<a href="{{url('services-details')}}" class="overlay-link"></a>
						<div class="icon-box">
							<span class="flaticon-network-1"></span>
						</div>
						<h6>Mobile Application</h6>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Technology Section -->
	
	<!-- Experiance Section -->
	<section class="experiance-section" style="background-image: url(images/background/pattern-9.png)">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">EXPERIENCE. EXECUTION. EXCELLENCE.</div>
				<h2>What We Actually Do</h2>
			</div>
			
			<!-- Experiance Info Tabs -->
			<div class="experiance-info-tabs">
				<!-- Experiance Tabs -->
				<div class="experiance-tabs tabs-box">
				
					<!-- Tab Btns-->
					<ul class="tab-btns tab-buttons clearfix">
						<li data-tab="#prod-php" class="tab-btn active-btn"><span class="icon flaticon-php"></span>Php</li>
						<li data-tab="#prod-html" class="tab-btn"><span class="icon flaticon-html"></span>HTML</li>
						<li data-tab="#prod-css" class="tab-btn "><span class="icon flaticon-css"></span>CSS</li>
						<li data-tab="#prod-bootstrap" class="tab-btn"><span class="icon flaticon-bootstrap"></span>Bootstrap</li>
						<li data-tab="#prod-java" class="tab-btn"><span class="icon flaticon-java"></span>JavaScript</li>
						<li data-tab="#prod-node" class="tab-btn"><span class="icon flaticon-java"></span>NodeJs</li>
						<li data-tab="#prod-react" class="tab-btn"><span class="icon flaticon-java"></span>ReactJS</li>
						<li data-tab="#prod-vue" class="tab-btn"><span class="icon flaticon-java"></span>VueJS</li>
						<li data-tab="#prod-angular" class="tab-btn"><span class="icon flaticon-java"></span>AngularJs</li>
						<li data-tab="#prod-a" class="tab-btn"><span class="icon flaticon-seo"></span>SEO</li>
					</ul>
					
					<!--Tabs Container-->
					<div class="tabs-content">
						
						<!--Tab / Active Tab-->
						<div class="tab" id="prod-html">
							<div class="content">
								<h4>HTML Website Development Services</h4>
								<div class="text">Engitech is the partner of choice for many of the world’s leading enterprises, SMEs and technology challengers. We help businesses <br> elevate their value through custom software development, product design, QA and consultancy services.</div>
								<div class="btn-box text-center">
									<a href="services-detail.html" class="theme-btn btn-style-three"><span class="txt">Learn More</span></a>
								</div>
							</div>
						</div>
						
						<!-- Tab -->
						<div class="tab" id="prod-bootstrap">
							<div class="content">
								<h4>Bootstrap Website Development Services</h4>
								<div class="text">Engitech is the partner of choice for many of the world’s leading enterprises, SMEs and technology challengers. We help businesses <br> elevate their value through custom software development, product design, QA and consultancy services.</div>
								<div class="btn-box text-center">
									<a href="services-detail.html" class="theme-btn btn-style-three"><span class="txt">Learn More</span></a>
								</div>
							</div>
						</div>
						
						<!-- Tab -->
						<div class="tab active-tab" id="prod-css">
							<div class="content">
								<h4>PHP Website Development Services</h4>
								<div class="text">Engitech is the partner of choice for many of the world’s leading enterprises, SMEs and technology challengers. We help businesses <br> elevate their value through custom software development, product design, QA and consultancy services.</div>
								<div class="btn-box text-center">
									<a href="{{url('services-detail')}}" class="theme-btn btn-style-three"><span class="txt">Learn More</span></a>
								</div>
							</div>
						</div>
						
						<!-- Tab -->
						<div class="tab" id="prod-php">
							<div class="content">
								<h4>Php Website Development Services</h4>
								<div class="text">Engitech is the partner of choice for many of the world’s leading enterprises, SMEs and technology challengers. We help businesses <br> elevate their value through custom software development, product design, QA and consultancy services.</div>
								<div class="btn-box text-center">
									<a href="services-detail.html" class="theme-btn btn-style-three"><span class="txt">Learn More</span></a>
								</div>
							</div>
						</div>
						
						<!-- Tab -->
						<div class="tab" id="prod-java">
							<div class="content">
								<h4>JavaScript Website Development Services</h4>
								<div class="text">Engitech is the partner of choice for many of the world’s leading enterprises, SMEs and technology challengers. We help businesses <br> elevate their value through custom software development, product design, QA and consultancy services.</div>
								<div class="btn-box text-center">
									<a href="services-detail.html" class="theme-btn btn-style-three"><span class="txt">Learn More</span></a>
								</div>
							</div>
						</div>
						<!-- Tab -->
						<div class="tab" id="prod-nod">
							<div class="content">
								<h4>Node js Website Development Services</h4>
								<div class="text">Engitech is the partner of choice for many of the world’s leading enterprises, SMEs and technology challengers. We help businesses <br> elevate their value through custom software development, product design, QA and consultancy services.</div>
								<div class="btn-box text-center">
									<a href="services-detail.html" class="theme-btn btn-style-three"><span class="txt">Learn More</span></a>
								</div>
							</div>
						</div>
						<!-- Tab -->
						<div class="tab" id="prod-react">
							<div class="content">
								<h4>React js Website Development Services</h4>
								<div class="text">Engitech is the partner of choice for many of the world’s leading enterprises, SMEs and technology challengers. We help businesses <br> elevate their value through custom software development, product design, QA and consultancy services.</div>
								<div class="btn-box text-center">
									<a href="services-detail.html" class="theme-btn btn-style-three"><span class="txt">Learn More</span></a>
								</div>
							</div>
						</div>	<!-- Tab -->
						<div class="tab" id="prod-vue">
							<div class="content">
								<h4>Vue js Website Development Services</h4>
								<div class="text">Engitech is the partner of choice for many of the world’s leading enterprises, SMEs and technology challengers. We help businesses <br> elevate their value through custom software development, product design, QA and consultancy services.</div>
								<div class="btn-box text-center">
									<a href="services-detail.html" class="theme-btn btn-style-three"><span class="txt">Learn More</span></a>
								</div>
							</div>
						</div>
						<div class="tab" id="prod-angular">
							<div class="content">
								<h4>Angular js Website Development Services</h4>
								<div class="text">Engitech is the partner of choice for many of the world’s leading enterprises, SMEs and technology challengers. We help businesses <br> elevate their value through custom software development, product design, QA and consultancy services.</div>
								<div class="btn-box text-center">
									<a href="services-detail.html" class="theme-btn btn-style-three"><span class="txt">Learn More</span></a>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
<!-- Main Footer -->
  @endsection