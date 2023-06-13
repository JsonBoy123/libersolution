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
</div>
<!-- END sidebar widget item -->
<!--Page Title-->
<section class="page-title">
	<div class="pattern-layer-one" style="background-image: url(images/background/pattern-16.png)"></div>
	<div class="auto-container">
		<h2>Service Detail</h2>
		<ul class="page-breadcrumb">
			<li><a href="index-2.html">home</a></li>
			<li>Services</li>
		</ul>
    </div>
</section> --}}
<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
<div class="auto-container">
<div class="row clearfix">
<!-- Sidebar Side -->
<div class="sidebar-side left-sidebar col-lg-4 col-md-12 col-sm-12">
	<aside class="sidebar sticky-top">
		<!-- Services -->
        <div class="sidebar-widget">
            <ul class="service-list">
                <li class={{(Request::path() == 'services/laravel-development') ? 'current' :  (( Request::path() == 'services/yii-development' ) ? 'current' : (( Request::path() == 'services/codeigniter-development' ) ? 'current' : (( Request::path() == 'services/nodejs-development' ) ? 'current' : (( Request::path() == 'services/react-development' ) ? 'current' : (( Request::path() == 'services/angular-development' ) ? 'current' : (( Request::path() == 'services/wordpress-development' ) ? 'current' : (( Request::path() == 'services/drupal-development' ) ? 'current' : (( Request::path() == 'services/magento-development' ) ? 'current' :''))) )))))}}><a href="{{('services/laravel-development')}}"><span class="arrow fa fa-angle-double-right"></span> Web Development</a></li>
                <li class = {{(Request::path() == 'services/android-app-development' ? 'current' : (Request::path() == 'services/ios-app-development' ? 'current' :'')) }}><a href="{{url('services/android-app-development')}}"><span class="arrow fa fa-angle-double-right"></span> Mobile Development</a></li>
                <li><a href="{{url('services-details')}}"><span class="arrow fa fa-angle-double-right"></span> UI/UX Design</a></li>
                <li class={{Request::path() == 'services/online-marketing' ? 'current' :'' }}><a href="{{url('/services/online-marketing')}}"><span class="arrow fa fa-angle-double-right"></span> Digital Marketing</a></li>
                {{-- <li ><a href="services-detail.html"><span class="arrow fa fa-angle-double-right"></span> SEO</a></li> --}}
                <li class ={{Request::path() == 'our-products' ? 'current' :'' }}><a href="{{url('our-products')}}"><span class="arrow fa fa-angle-double-right"></span>Our Products</a></li>
                <li class ={{Request::path() == 'services-details' ? 'current' :'' }}><a href="{{url('services-details')}}"><span class="arrow fa fa-angle-double-right"></span> IT Counsultancy</a></li>
            </ul>
        </div>
		
		<!-- Contact Widget -->
		<div class="sidebar-widget contact-widget">
			<div class="widget-content" style="background-image:url(images/resource/service.jpg)">
				<div class="border-layer"></div>
				<div class="icon-box flaticon-phone-call"></div>
				<h4>How Can We Help?</h4>
				<div class="text">If you need any help, please <br> feel free to contact us.</div>
				<ul>
					<li><span class="icon flaticon-call"></span>+91-731-4996625</li>
					<li><span class="icon flaticon-call"></span> +91-731-4043798</li>
				
					<li><span class="icon flaticon-envelope"></span>info@libersolution.com</li>
				</ul>
			</div>
		</div>
		
	</aside>
</div>
