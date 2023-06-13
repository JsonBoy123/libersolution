@extends('frontend-layout.main')
@section('content')
	
	<!--Page Title-->
    <section class="page-title">
		<div class="pattern-layer-one" style="background-image: url({{asset('images/background/pattern-16.png')}})"></div>
    	<div class="auto-container">
			<h2>Services</h2>
			<ul class="page-breadcrumb">
				<li><a href="index-2.html">home</a></li>
				<li>Services</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Services Page Section -->
	<section class="services-page-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- News Block Three -->
				<div class="news-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="{{url('services-details')}}"><img src="{{asset('images/resource/news-5.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="content">
								<div class="icon-box">
									<span class="icon flaticon-coding-1"></span>
								</div>
								<h4><a href="{{url('services-detail')}}">Web Development</a></h4>
								<div class="text">We carry more than just good coding skills. Our experience makes us stand out from other web development.</div>
								<a class="read-more" href="{{url('services-details')}}">Read More<span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- News Block Three -->
				<div class="news-block-three style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="lower-content">
							<div class="content">
								<div class="icon-box">
									<span class="icon flaticon-mobile-app"></span>
								</div>
								<h4><a href="{{url('services-detail')}}">Mobile App Development</a></h4>
								<div class="text">We carry more than just good coding skills. Our experience makes us stand out from other Mobile App development.</div>
								<a class="read-more" href="{{url('services-details')}}">Read More<span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
							</div>
						</div>
						<div class="image">
							<a href="{{url('services-details')}}"><img src="{{asset('images/resource/news-6.jpg')}}" alt="" /></a>
						</div>
					</div>
				</div>
				
				<!-- News Block Three -->
				<div class="news-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="{{url('services-details')}}"><img src="{{asset('images/resource/news-7.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="content">
								<div class="icon-box">
									<span class="icon flaticon-computer"></span>
								</div>
								<h4><a href="{{url('services-detail')}}">UI/UX Design</a></h4>
								<div class="text">Build the product you need on time with an experienced team that uses a clear and effective design process.</div>
								<a class="read-more" href="{{url('services-details')}}">Read More<span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- News Block Three -->
				<div class="news-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="{{url('services-details')}}"><img src="{{asset('images/resource/news-11.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="content">
								<div class="icon-box">
									<span class="icon flaticon-web"></span>
								</div>
								<h4><a href="{{url('services-detail')}}">Search Engine Optimization</a></h4>
								<div class="text">Turn to our experts to perform comprehensive, multi-stage search engine optimization and auditing of your website.</div>
								<a class="read-more" href="{{url('services-details')}}">Read More<span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- News Block Three -->
				<div class="news-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="{{url('services-details')}}"><img src="{{asset('images/resource/news-12.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="content">
								<div class="icon-box">
									<span class="icon flaticon-monitor-2"></span>
								</div>
								<h4><a href="{{url('services-detail')}}">IT Consultancy</a></h4>
								<div class="text">Turn to our experts to perform comprehensive, multi-stage testing and auditing of your software.</div>
								<a class="read-more" href="{{url('services-details')}}">Read More<span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- News Block Three -->
				<div class="news-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="{{url('services-details')}}"><img src="{{asset('images/resource/news-13.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="content">
								<div class="icon-box">
									<span class="icon flaticon-human-resources"></span>
								</div>
								<h4><a href="{{url('services-detail')}}">Database Security</a></h4>
								<div class="text">We carry more than just good database security skills. Our experience makes us stand out from other Databse Security.</div>
								<a class="read-more" href="{{url('services-details')}}">Read More<span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Services Page Section -->
	
	<!-- Featured Section -->
	<section class="featured-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Featured Block Two -->
				<div class="feature-block-two col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms" style="background-image: url({{asset('images/resource/feature-1.jpg')}})">
						<div class="number">35 +</div>
						<h4>Worldwide Work Pair</h4>
						<div class="text">To succeed, every software solution must be deeply integrated into the existing tech environment..</div>
					</div>
				</div>
				
				<!-- Featured Block Two -->
				<div class="feature-block-two col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="background-image: url({{asset('images/resource/feature-2.jpg')}})">
						<div class="number">1 k</div>
						<h4>Happy Clients</h4>
						<div class="text">To succeed, every software solution must be deeply integrated into the existing tech environment..</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Featured Section -->
	
	<!-- Services Section -->
	
	<!-- End Services Section -->
	
	<!-- Services Section Two -->
	{{-- <section class="services-section-two margin-top">
		<div class="auto-container">
			<div class="upper-box">
				<div class="icon-one" style="background-image: url({{asset('images/icons/icon-1.png')}})"></div>
				<div class="icon-two" style="background-image: url({{asset('images/icons/icon-2.png')}})"></div>
				<div class="icon-three" style="background-image: url({{asset('images/icons/icon-3.png')}})"></div>
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
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
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
						<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
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
						<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
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
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="shape-one"></div>
							<div class="shape-two"></div>
							<div class="icon-box">
								<span class="icon flaticon-web"></span>
							</div>
							<h5><a href="{{url('services-details')}}">SEO</a></h5>
							<div class="text">Turn to our experts to perform comprehensive, multi-stage SEO and Searching of your software.</div>
						</div>
					</div>
					
					<!-- Service Block Two -->
					<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
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
						<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="shape-one"></div>
							<div class="shape-two"></div>
							<div class="icon-box">
								<span class="icon flaticon-human-resources"></span>
							</div>
							<h5><a href="{{url('services/details')}}">Database Security</a></h5>
              				<div class="text">We carry more than just good database security skills. Our experience makes us stand out from other Databse Security.</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section> --}}
	<!-- End Services Section Two -->
	
	<!-- Appointment Section -->
	<section class="appointment-section style-two">
		<div class="image-layer" style="background-image: url({{asset('images/background/4.jpg')}})"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<div class="title">CONTACT US</div>
				<h2>Join Us To Get IT Free <br> Consultations</h2>
			</div>
			<div class="inner-container">
				<div class="row clearfix">
					
					<!-- Image Column -->
					<div class="image-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<img src="{{asset('images/resource/appointment.jpg')}}" alt="" />
							</div>
						</div>
					</div>
					
					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<h4>You Don't Hesitate To Contact <br> With Us, Now Say Hello......</h4>
							<!-- Appointment Form -->
							<div class="appointment-form">
								<form method="post" action="https://expert-themes.com/html/globex/appointment.html">
									<div class="row clearfix">
										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="text" name="username" placeholder="Name" required="">
											<span class="icon fa fa-user"></span>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="email" name="email" placeholder="Email" required="">
											<span class="icon fa fa-envelope"></span>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="tel" name="phone" placeholder="Phone No" required="">
											<span class="icon fa fa-phone"></span>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="text" name="department" placeholder="Department" required="">
											<span class="icon fa fa-home"></span>
										</div>

										<div class="col-lg-12 col-md-12 col-sm-12 form-group">
											<textarea name="message" placeholder="Message"></textarea>
										</div>

										<div class="col-lg-12 col-md-12 col-sm-12 form-group">
											<button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="txt">Send Massage</span></button>
										</div>
									</div>
								</form>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	
@endsection