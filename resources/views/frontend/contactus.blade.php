@extends('frontend-layout.main')
@section('content')
	
	<!--Page Title-->
    <section class="page-title">
		<div class="pattern-layer-one" style="background-image: url(images/background/pattern-16.png)"></div>
    	<div class="auto-container">
			<h2>Contact us</h2>
			<ul class="page-breadcrumb">
				<li><a href="index-2.html">home</a></li>
				<li>Contact us</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Contact Info Section -->
	<section class="contact-info-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="title-box">
				<div class="title">GET IN TOUCH</div>
				<h2>A Monthly Project Fee <br> Price Plans</h2>
				<div class="text">For genereal enquires you can touch with our front desk supporting team <br> at <a href="mailto:info@libersolution.com">info@libersolution.com</a> or call on <a href="tel:+8.555.55.55">+91-731-4996625 <br>+91-731-4043798</a></div>
			</div>
			
			<div class="row clearfix">
			
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="content">
							<div class="icon-box"><span class="flaticon-pin"></span></div>
							<ul>
								<li><strong>Address</strong></li>
								<li>Laxyo House, Plot No.-2,
									County Park, MR-5, Mahalaxmi Nagar, Indore</li>
							</ul>
						</div>
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="content">
							<div class="icon-box"><span class="flaticon-phone-call"></span></div>
							<ul>
								<li><strong>Phone</strong></li>
								<li>+91-731-4996625</li>
								<li>+91-731-4043798</li>
							</ul>
						</div>
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="content">
							<div class="icon-box"><span class="flaticon-email-1"></span></div>
							<ul>
								<li><strong>E-Mail</strong></li>
								<li>info@libersolution.com</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			{{-- <div class="lower-text">We are at 36 places over the country, <a href="#">see our branches.</a></div> --}}
		</div>
	</section>
	<!-- End Contact Info Section -->
	
	<!-- Map Section -->
	<section class="contact-map-section">
		<div class="auto-container">
			<!-- Map Boxed -->
			<div class="map-boxed">
				<!--Map Outer-->
				<div class="map-outer">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.0949425018794!2d75.91135641404917!3d22.761857585085664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39631d576afd8de9%3A0xca591c51aef88b18!2sLiber%20Solutions%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1611311180721!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
		</div>
	</section>
	<!-- End Map Section -->
	
	<!-- Contact Map Section -->
	<section class="contact-map-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title">SEND YOUR MESSAGE</div>
						<h2>Send Your Message</h2>
					</div>
					<div class="pull-right">
						<div class="text">Our goal is to help our companies maintain or achieve best- in-class <br> positions in their respective industries and our team works.</div>
					</div>
				</div>
			</div>
			
			<!-- Contact Form -->
			<div class="contact-form">
					
				<!-- Contact Form -->
				<form method="post" action="https://expert-themes.com/html/globex/sendemail.php" id="contact-form">
					<div class="row clearfix">
					
						<div class="form-group col-lg-6 col-md-6 col-sm-12">
							<label>Your name *</label>
							<input type="text" name="username" placeholder="" required>
						</div>
						
						<div class="form-group col-lg-6 col-md-6 col-sm-12">
							<label>Email address *</label>
							<input type="text" name="email" placeholder="" required>
						</div>
						
						<div class="form-group col-lg-6 col-md-6 col-sm-12">
							<label>Phone number *</label>
							<input type="text" name="phone" placeholder="" required>
						</div>
						
						<div class="form-group col-lg-6 col-md-6 col-sm-12">
							<label>Website</label>
							<input type="text" name="subject" placeholder="" required>
						</div>
						
						<div class="form-group col-lg-12 col-md-12 col-sm-12">
							<label>Your Message *</label>
							<textarea name="message" placeholder=""></textarea>
						</div>
						
						<div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
							<button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="txt">Send Now</span></button>
						</div>
						
					</div>
				</form>
			</div>
			<!-- End Contact Form -->
			
		</div>
	</section>
	<!-- End Contact Map Section -->
	
	
 @endsection
