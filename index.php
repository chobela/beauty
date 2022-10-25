<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Hair Beauty</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The hair that you dream">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header trans_400">
		<div class="header_content d-flex flex-row align-items-center justify-content-center trans_400">

			<!-- Logo -->
			<div class="logo">
				<a href="#">
					<div>B<span>ea</span>uty</div>
					<div>hair</div>
				</a>
				<div class="hamburger"></div>
			</div>

			<!-- Main Navigation -->
		<?php
		
		include('header.php');
		
		?>


	</header>

	<!-- Menu -->
	
	<div class="menu">
		<nav class="menu_nav">
			<ul class="d-flex flex-column align-items-start justify-content-start">
			<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="signup.php">Signup</a></li>
					<li><a href="admin/index.php">Admin</a></li>
			</ul>
		</nav>
	</div>

	<!-- Home -->

	<div class="home">

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item home_slide">
					<div class="background_image" style="background-image:url(images/index.jpg)"></div>
					<div class="slide_text" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
						<!-- <div class="slide_title">Our best offers</div> -->
						<div class="slide_subtitle">Beauty is the gift of god and transmitted from one to the other generation.</div>
					</div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col-lg-11">
									<div class="slide_content" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOut">
										<div class="home_title"><h1>The <span>hair</span> that you dream</h1></div>
										<div class="home_text">
											<p>Life style is fast changing in the modern era and the women have become more conscious about their make up the status of women has improved a lot and is improving further.</p>
										</div>
										<!-- <div class="home_link"><a href="#">View our offers</a></div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item home_slide">
					<div class="background_image" style="background-image:url(images/index.jpg)"></div>
					<div class="slide_text" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
						<!-- <div class="slide_title">Our best offers</div> -->
						<div class="slide_subtitle">We believe beauty is the gift of god and transmitted from one to the other generation.</div>
					</div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col-lg-11">
									<div class="slide_content" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOut">
										<div class="home_title"><h1>The <span>hair</span> that you dream</h1></div>
										<div class="home_text">
											<p>Life style is fast changing in the modern era and the women have become more conscious about their make up the status of women has improved a lot and is improving further.</p>
										</div>
										<!-- <div class="home_link"><a href="#">View our offers</a></div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item home_slide">
					<div class="background_image" style="background-image:url(images/index.jpg)"></div>
					<div class="slide_text" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
					
						<div class="slide_subtitle">Beauty is the gift of god and transmitted from one to the other generation.</div>
					</div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col-lg-11">
									<div class="slide_content" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOut">
										<div class="home_title"><h1>The <span>hair</span> that you dream</h1></div>
										<div class="home_text">
											<p>Life style is fast changing in the modern era and the women have become more conscious about their make up the status of women has improved a lot and is improving further </p>
										</div>
										<!-- <div class="home_link"><a href="#">View our offers</a></div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Scroll Down -->
		<div class="scroll_down scroll_to d-flex flex-column align-items-center justify-content-center" data-scroll-to="#services">
			<div class="scroll_icon"></div>
			<div>Scroll Down</div>
		</div>

		<!-- Slider Progress -->
		<!-- <div class="slide_progress">
			<div class="slide_num">01.</div>
			<div class="slide_bar"><div></div></div>
		</div> -->
	</div>

	<!-- Services -->

	<div class="services" id="services">
		<div class="parallax_background" data-image-src="images/services.jpg"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="section_title_container">
						<div class="section_title"><h1>Our Services</h1></div>
						<p>Our array of beauty services include haircuts, hair spas, colouring, texturing, styling, waxing, pedicures, manicures, threading, body spa, natural facials and more.</p>
					</div>
				</div>
			</div>
			<div class="row services_row">
				<div class="col">
					<div class="section_expander">

						<!-- Services Slider -->
						<div class="services_slider_container">
							<div class="owl-carousel owl-theme services_slider">
								
								<!-- Slide -->
								<div class="owl-item">

									<!-- Service -->
									<div class="service d-flex flex-row align-items-start justify-content-start trans_200">
											<div class="service_icon"><div class="text-right"><img src="images/mirror.svg" class="svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
											<div class="service_content">
												<div class="service_title trans_200">Hair Dressing</div>
												<div class="service_text trans_200">
													<p> The action or process of washing, cutting, curling, or arranging the hair.</p>
												</div>
											</div>
										</div>

										<!-- Service -->
										<div class="service d-flex flex-row align-items-start justify-content-start trans_200">
											<div class="service_icon"><div class="text-right"><img src="images/cream.svg" class="svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
											<div class="service_content">
												<div class="service_title trans_200">Ombre Hair</div>
												<div class="service_text trans_200">
													<p>Ombre’ remains one of the hottest hair color trends not only because it has so many different options, but because it can be ridiculously low maintenance.</p>
												</div>
											</div>
										</div>

									</div>

									<!-- Slide -->
									<div class="owl-item">
										
										<!-- Service -->
										<div class="service d-flex flex-row align-items-start justify-content-start trans_200">
											<div class="service_icon"><div class="text-right"><img src="images/facial-mask.svg" class="svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
											<div class="service_content">
												<div class="service_title trans_200">Hair Coloring</div>
												<div class="service_text trans_200">
													<p>Hair coloring works by coating each strand with color (non-permanent color) or by penetrating each hair cuticle, entering the hair cortex, and bonding with the hair (permanent color). While non-permanent hair color can be shampooed out eventually, permanent color, as the name suggests, permanently colors the hair.</p>
												</div>
											</div>
										</div>

										<!-- Service -->
										<div class="service d-flex flex-row align-items-start justify-content-start trans_200">
											<div class="service_icon service_icon_2 service_icon_flip"><div class="text-right"><img src="images/make-up.svg" class="svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
											<div class="service_content">
												<div class="service_title trans_200">Treatments</div>
												<div class="service_text trans_200">
													<p>The salon deep conditioning treatment consists of head massage, soaking and application of various hair masks.</p>
												</div>
											</div>
										</div>

									</div>

									<!-- Slide -->
									<div class="owl-item">
										
										<!-- Service -->
										<div class="service d-flex flex-row align-items-start justify-content-start trans_200">
											<div class="service_icon"><div class="text-right"><img src="images/makeup.svg" class="svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
											<div class="service_content">
												<div class="service_title trans_200">Trimming</div>
												<div class="service_text trans_200">
													<p> Trimming your hair actually encourages hair growth. It may sound counter-intuitive, but the appearance of broken and split-ends not only damages the look and feel of your hair, but it also contributes to the appearance of shorter hair and thinner ends.</p>
												</div>
											</div>
										</div>

										<!-- Service -->
										<div class="service d-flex flex-row align-items-start justify-content-start trans_200">
											<div class="service_icon service_icon_3"><div class="text-right"><img src="images/cream-2.svg" class="svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
											<div class="service_content">
												<div class="service_title trans_200">Streightening</div>
												<div class="service_text trans_200">
													<p> Hair straightening is a term to describe hair treatments that chemically straighten hair for a long period of time.</p>
												</div>
											</div>
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Testimonials -->

	 <!-- <div class="testimonials">
		<div class="parallax_background" data-image-src="images/testimonials.jpg"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="section_title_container">
						<div class="section_title"><h1>Testimonials</h1></div>
						<p>Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum dolor sit amet.</p>
					</div>
				</div>
			</div>
			<div class="row testimonials_row">
				<div class="col">
					<div class="section_expander"> -->
						 
						<!-- Testimonials Slider -->
						<!-- <div class="testimonials_slider_container">
							<div class="owl-carousel owl-theme testimonials_slider"> -->
								
								<!-- Slide -->
								<!-- <div class="owl-item">
									<div class="testimonial_container">
										<div class="testimonial d-flex flex-column align-items-center justify-content-center text-center trans_200">
											<div class="testimonial_image"><img src="images/author_1.jpg" alt=""></div>
											<div class="testimonial_title">The perfect hair</div>
											<div class="testimonial_text">
												<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
											</div>
											<div class="testimonial_author">Jessica Smith, Client</div>
										</div>
									</div>
								</div> -->

								<!-- Slide -->
								<!-- <div class="owl-item">
									<div class="testimonial_container">
										<div class="testimonial d-flex flex-column align-items-center justify-content-center text-center trans_200">
											<div class="testimonial_image"><img src="images/author_2.jpg" alt=""></div>
											<div class="testimonial_title">I just love my hair</div>
											<div class="testimonial_text">
												<p>Mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus.</p>
											</div>
											<div class="testimonial_author">Jessica Smith, Client</div>
										</div>
									</div>
								</div> -->

								<!-- Slide -->
								<!-- <div class="owl-item">
									<div class="testimonial_container">
										<div class="testimonial d-flex flex-column align-items-center justify-content-center text-center trans_200">
											<div class="testimonial_image"><img src="images/author_3.jpg" alt=""></div>
											<div class="testimonial_title">The best hair salon</div>
											<div class="testimonial_text">
												<p>Retiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
											</div>
											<div class="testimonial_author">Jessica Smith, Client</div>
										</div>
									</div>
								</div> -->

							</div>
						</div>
						<!-- <div class="testimonials_more">
							<div class="testimonials_more_button ml-auto mr-auto trans_200"><a href="#">load more</a></div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div> 

	<!-- Footer -->

	<footer class="footer">
		<div class="parallax_background" data-image-src="images/footer.jpg"></div>
		<!-- <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer.jpg" data-speed="0.8"></div> -->
		<div class="footer_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container">
							<div class="section_title"><h1>Get in touch</h1></div>
							<!-- <p>Maximus mauris sceleri sque, at rutrum nulla dictum.</p> -->
						</div>
					</div>
				</div>
				<div class="row footer_row">
					<div class="col-lg-4 footer_col">
						<div class="contact_info">
							<div class="footer_title">Contact Info</div>
							<div class="contact_info_list">
								<ul>
									<li class="d-flex flex-row align-items-start justify-content-start">
										<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
										<div class="contact_info_content">4127 Raoul Wallenber4127 Raoul Wallen berg Place</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
										<div class="contact_info_content">203-808-8613</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div><div class="contact_info_icon"><img src="images/message.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
										<div class="contact_info_content">milothemes@gmail.com</div>
									</li>
								</ul>
							</div>
							<div class="social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="footer_title">Leave a comment</div>
						<div class="contact_form_container">
							<form action="#" id="contact_form" class="contact_form">
								<div>
									<div class="row">
										<div class="col-lg-6">
											<input type="text" placeholder="Name" class="contact_input" required="required">
										</div>
										<div class="col-lg-6">
											<input type="email" placeholder="E-mail" class="contact_input" required="required">
										</div>
									</div>
								</div>
								<div><input type="text" placeholder="Subject" class="contact_input"></div>
								<div><textarea class="contact_input contact_textarea" placeholder="Message" required="required"></textarea></div>
								<button class="contact_form_button">send message</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar d-flex flex-row align-items-center justify-content-start">
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>