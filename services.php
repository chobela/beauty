<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Services</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Vogue template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/services.css">
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">
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
				<div class="hamburger"><div></div><div></div><div></div></div>
			</div>

		<?php
		include('header.php');
		?>
	
	</header>

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

	<div class="home">
		<div class="parallax_background" data-image-src="images/services_background.jpg"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col-xl-8">
						<div class="section_title_container">
							<!-- <div class="section_title"><h1><span>Services</span> we provide</h1></div> -->
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

							<div class="services_more">
								<div class="services_more_button ml-auto mr-auto trans_200"><a href="#">load more</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Pricing -->

	<div class="pricing">
		<div class="parallax_background" data-image-src="images/pricing_background.jpg"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="section_title_container">
						<div class="section_title"><h1>Pricing</h1></div>
						<p>Our Range of prices.</p>
					</div>
				</div>
			</div>
			<div class="row pricing_row">
				<div class="col">

					<!-- Pricing Slider -->
					<div class="pricing_slider_container">
						<div class="owl-carousel owl-theme pricing_slider">
							
							<!-- Slide -->
							<div class="owl-item">
								<div class="pricing_item">
									<div class="background_image" style="background-image:url(images/pricing.jpg)"></div>
									<div class="pricing_border"></div>
									<div class="pricing_content">
										<div class="pricing_title">Hair Cuts</div>
										<div class="pricing_list">
											<ul>
												<li class="d-flex flex-row align-items-start justify-content-start">
													<div>Women's Haircut</div>
													<div class="ml-auto">$95+</div>
												</li>
												<li class="d-flex flex-row align-items-start justify-content-start">
													<div>Men's Haircut</div>
													<div class="ml-auto">$25+</div>
												</li>
												<li class="d-flex flex-row align-items-start justify-content-start">
													<div>Teen's Haircut</div>
													<div class="ml-auto">$55+</div>
												</li>
												<li class="d-flex flex-row align-items-start justify-content-start">
													<div>Children's Haircut</div>
													<div class="ml-auto">$30+</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<div class="pricing_item">
									<div class="background_image" style="background-image:url(images/pricing.jpg)"></div>
									<div class="pricing_border"></div>
									<div class="pricing_content">
										<div class="pricing_title">Hair Color</div>
										<div class="pricing_list">
											<ul>
												<li class="d-flex flex-row align-items-start justify-content-start">
													<div>One Color</div>
													<div class="ml-auto">$95+</div>
												</li>
												<li class="d-flex flex-row align-items-start justify-content-start">
													<div>Men's Color</div>
													<div class="ml-auto">$25+</div>
												</li>
												<li class="d-flex flex-row align-items-start justify-content-start">
													<div>Pro Highlights</div>
													<div class="ml-auto">$55+</div>
												</li>
												<li class="d-flex flex-row align-items-start justify-content-start">
													<div>Full Highlights</div>
													<div class="ml-auto">$30+</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<div class="pricing_item">
									<div class="background_image" style="background-image:url(images/pricing.jpg)"></div>
									<div class="pricing_border"></div>
									<div class="pricing_content">
										<div class="pricing_title">Services 4 Men</div>
										<div class="pricing_list">
											<ul>
												<li class="d-flex flex-row align-items-start justify-content-start">
													<div>Women's Haircut</div>
													<div class="ml-auto">$95+</div>
												</li>
												<li class="d-flex flex-row align-items-start justify-content-start">
													<div>Men's Haircut</div>
													<div class="ml-auto">$25+</div>
												</li>
												<li class="d-flex flex-row align-items-start justify-content-start">
													<div>Teen's Haircut</div>
													<div class="ml-auto">$55+</div>
												</li>
												<li class="d-flex flex-row align-items-start justify-content-start">
													<div>Children's Haircut</div>
													<div class="ml-auto">$30+</div>
												</li>
											</ul>
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

	<!-- Gallery -->

	<div class="gallery">
		<div class="gallery_slider_container">
			<div class="owl-carousel owl-theme gallery_slider">
				
				<!-- Slide -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_1.jpg">
						<div class="background_image" style="background-image:url(images/gallery_1.jpg)"></div>
					</a>
					<div class="gallery_overlay trans_200 d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
				</div>

				<!-- Slide -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_2.jpg">
						<div class="background_image" style="background-image:url(images/gallery_2.jpg)"></div>
					</a>
					<div class="gallery_overlay trans_200 d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
				</div>

				<!-- Slide -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_3.jpg">
						<div class="background_image" style="background-image:url(images/gallery_3.jpg)"></div>
					</a>
					<div class="gallery_overlay trans_200 d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
				</div>

				<!-- Slide -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_4.jpg">
						<div class="background_image" style="background-image:url(images/gallery_4.jpg)"></div>
					</a>
					<div class="gallery_overlay trans_200 d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
				</div>

				<!-- Slide -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_5.jpg">
						<div class="background_image" style="background-image:url(images/gallery_5.jpg)"></div>
					</a>
					<div class="gallery_overlay trans_200 d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
				</div>

			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="parallax_background" data-image-src="images/footer.jpg"></div>
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
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
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
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="js/services.js"></script>
</body>
</html>