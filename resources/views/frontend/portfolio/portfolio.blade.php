@extends('frontend-layout.main')
{{-- @include('frontend-layout.header')	 --}}
@section('content')
{{-- 	<!-- Sidebar Cart Item -->
	<div class="xs-sidebar-group info-group">
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
	</div>
	<!-- END sidebar widget item -->
	
	<!--Page Title-->
    <section class="page-title">
		<div class="pattern-layer-one" style="background-image: url(images/background/pattern-16.png)"></div>
    	<div class="auto-container">
			<h2>Projects</h2>
			<ul class="page-breadcrumb">
				<li><a href="{{url('/')}}">home</a></li>
				<li>Projects</li>
			</ul>
        </div>
    </section>
    <!--End Page Title--> --}}
	
	<!-- Gallery Section -->
	<section class="gallery-section">
		<div class="auto-container mb-10">
			<!-- Sec Title -->
			<div class="sec-title centered">
				{{-- <div class="title">LATEST CASE STUDIES</div> --}}
				<h2>Reads Now Our Recent Projects Studies</h2>
			</div>
			<!--MixitUp Galery-->
            <div class="mixitup-gallery">
                
                <!--Filter-->
                <div class="filters clearfix " >
                	
                	<ul class="filter-tabs filter-btns text-center clearfix">
                        <li class="active filter" data-role="button" data-filter="all">All</li>
                        <li class="filter" data-role="button" data-filter=".design">Design</li>
                        <li class="filter" data-role="button" data-filter=".development">Development</li>
                        {{-- <li class="filter" data-role="button" data-filter=".ideas">Ideas</li> --}}
                        <li class="filter" data-role="button" data-filter=".technology">Technology</li>
                    </ul>
                    
                </div>
                
                <div class="filter-list row clearfix">
						<!-- Case Block -->
					<div class="case-block mix all ideas technology development col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="{{asset('images/portfolio/erp.png')}}" alt="" style="height: 300px;" />
								<div class="overlay-box">
									<a href="{{asset('images/portfolio/erp.png')}}" data-fancybox="gallery" data-caption="" class="search-icon"><span class="icon flaticon-search"></span></a>
									<div class="content">
										<h4><a href="https://www.laxyo.org/" target="_blank">ERP Model Organization</a></h4>
										<div class="category">Web Development</div>
									</div>
									<a href="{{url('portfolio/projects-details')}}" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
								</div>
							</div>
						</div>
					</div>
					<!-- Case Block -->
					<div class="case-block mix all development ideas col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="{{asset('images/portfolio/cj.png')}}" alt=""  style="height: 300px;" />
								<div class="overlay-box">
									<a href="{{asset('images/portfolio/cj.png')}}"  data-fancybox="gallery" data-caption="" class="search-icon" ><span class="icon flaticon-search" ></span></a>
									<div class="content">
										<h4><a href="https://www.courtsjudgments.com/" target="_blank">COURT JUDMENTS</a></h4>
										<div class="category"> Web Development </div>
									</div>
									<a href="{{url('portfolio/projects-details')}}" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Case Block -->
					<div class="case-block mix all ideas design col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="{{asset('images/portfolio/adlaw.png')}}" alt="" style="height: 300px;"adlaw.png />
								{{-- <img src="images/gallery/3.jpg" alt="" style="height: 450px;"adlaw.png /> --}}
								<div class="overlay-box">
									<a href="{{asset('images/portfolio/adlaw.png')}}" data-fancybox="gallery" data-caption="" class="search-icon"><span class="icon flaticon-search"></span></a>
									<div class="content">
										<h4><a href="https://www.adlaw.in/" target="_blank">ADLAW</a></h4>
										<div class="category">Web Development</div>
									</div>
									<a href="{{url('portfolio/projects-details')}}" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
								</div>
							</div>
						</div>
					</div>
					<!-- Case Block -->
					<div class="case-block mix all ideas technology development col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="{{asset('images/portfolio/schoolmanagment.png')}}" alt="" style="height: 300px;" />
								<div class="overlay-box">
									<a href="{{asset('images/portfolio/schoolmanagment.png')}}" data-fancybox="gallery" data-caption="" class="search-icon"><span class="icon flaticon-search"></span></a>
									<div class="content">
										<h4><a href="https://www.lis.laxyo.org/" target="_blank">SCHOOL MANAGMENT</a></h4>
										<div class="category"> Web Development</div>
									</div>
									<a href="{{url('portfolio/projects-details')}}" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Case Block -->
					<div class="case-block mix all ideas development col-lg-6 col-md-12 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="{{asset('images/portfolio/LaPinkCafe.png')}}" alt="" />
								<div class="overlay-box">
									<a href="{{asset('images/portfolio/LaPinkCafe.png')}}" data-fancybox="gallery" data-caption="" class="search-icon"><span class="icon flaticon-search"></span></a>
									<div class="content">
										<h4><a href="http://www.lapinkcafe.com">LaPink Cafe</a></h4>
										<div class="category"> Web Development</div>
									</div>
									<a href="{{url('portfolio/projects-details')}}" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Case Block -->
					<div class="case-block mix all technology design ideas col-lg-6 col-md-12 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="{{asset('images/portfolio/Nomoneylaundering.png')}}" alt="" style="height: 500px;"/>
								<div class="overlay-box">
									<a href="{{asset('images/portfolio/Nomoneylaundering.png')}}" data-fancybox="gallery" data-caption="" class="search-icon"><span class="icon flaticon-search"></span></a>
									<div class="content">
										<h4><a href="https://www.nomoneylaundering.com/">Nomoneylaundering</a></h4>
										<div class="category"> Web Development</div>
									</div>
									<a href="{{url('portfolio/projects-details')}}" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Case Block -->
					<div class="case-block mix all design development col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="{{asset('images/portfolio/Sanctionalert.png')}}" alt="" style="height: 500px;"/>
								<div class="overlay-box">
									<a href="{{asset('images/portfolio/Sanctionalert.png')}}" data-fancybox="gallery" data-caption="" class="search-icon"><span class="icon flaticon-search"></span></a>
									<div class="content">
										<h4><a href="https://www.sanctionalert.com/">Sanctionalert</a></h4>
										<div class="category"> Web Development</div>
									</div>
									<a href="{{url('portfolio/projects-details')}}" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Case Block -->
					<div class="case-block mix all design technology development col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="{{asset('images/portfolio/taxi.png')}}" alt="" style="height: 300px;" />
								<div class="overlay-box">
									<a href="{{asset('images/portfolio/taxi.png')}}" data-fancybox="gallery" data-caption="" class="search-icon"><span class="icon flaticon-search"></span></a>
									<div class="content">
										<h4><a href="portfolio/projects-details.html">Taxi booking plugin</a></h4>
										<div class="category"> Web Development</div>
									</div>
									<a href="{{url('portfolio/projects-details')}}" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Case Block -->
					<div class="case-block mix all design technology ideas col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="{{asset('images/portfolio/DailyCarShare.jpeg')}}" alt="" style="height: 300px;"/>
								<div class="overlay-box">
									<a href="{{asset('images/portfolio/DailyCarShare.jpeg')}}" data-fancybox="gallery" data-caption="" class="search-icon"><span class="icon flaticon-search"></span></a>
									<div class="content">
										<h4><a href="http://dailycarshare.com/">DailyCarShare- Codeigniter Based Website</a></h4>
										<div class="category">Web Development</div>
									</div>
									<a href="{{url('portfolio/projects-details')}}" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
				<div class="btn-box text-center">
					<a href="#" class="theme-btn btn-style-three"><span class="txt">Send Massage</span></a>
				</div>
				
			</div>
		</div>
	</section>
	
	
	@endsection
{{-- @include('frontend-layout.otherfooter'); --}}
	