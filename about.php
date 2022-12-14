<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>About us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Vogue template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header trans_400">
		<div class="header_content d-flex flex-row align-items-center justify-content-center trans_400">

			<!-- Logo -->
			<div class="logo">
				<a href="#">
				<div>Be<span>a</span>uty</div>
					<div>by Toya</div>
				</a>
				<div class="hamburger"><div></div><div></div><div></div></div>
			</div>

			<!-- Main Navigation -->
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
		<div class="parallax_background" data-image-src="images/about.jpg"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col-xl-8">
						<div class="section_title_container">
							<!-- <div class="section_title"><h1>The <span>Masters</span> of hair</h1></div> -->
						</div>
					</div>
				</div>
				<div class="row about_row">
					<div class="col-lg-6">
						<div class="about_text">
							<p>Our main focus is on quality and hygiene. Our Parlour is well equipped with advanced technology equipments and provides best quality services. Our staff is well trained and experienced, offering advanced services in Skin, Hair and Body Shaping that will provide you with a luxurious experience that leave you feeling relaxed and stress free. The specialities in the parlour are, apart from regular bleachings and Facials, many types of hairstyles, Bridal and cine make-up and different types of Facials & fashion hair colourings.</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about_text">
							<!-- <p>Our main focus is on quality and hygiene. Our Parlour is well equipped with advanced technology equipments and provides best quality services. Our staff is well trained and experienced, offering advanced services in Skin, Hair and Body Shaping that will provide you with a luxurious experience that leave you feeling relaxed and stress free. The specialities in the parlour are, apart from regular bleachings and Facials, many types of hairstyles, Bridal and cine make-up and different types of Facials & fashion hair colourings.</p> -->
						</div>
					</div>
				</div>
				<div class="row about_link_row">
					<div class="col">
						<div class="home_link"><a href="#">Read More</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Milestones -->

	<div class="milestones_section">
		<div class="parallax_background" data-image-src="images/milestones.jpg"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_title"><h1>What we do best</h1></div>
						<p> Haircuts for men, women, and children</p>
					</div>
				</div>
			</div>
			<div class="row milestones_row">
				<div class="col">
					
					<!-- Milestones Slider -->
					<div class="milestones_slider_container">
						<div class="owl-carousel owl-theme milestones_slider">
							
							<!-- Slide -->
							<!-- <div class="owl-item">
								<div class="milestone">
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value="5" data-sign-before="+" data-sign-after="k">0k</div>
										<div class="milestone_title">Satisfied Clients</div>
										<div class="milestone_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum quis sem sed pharetra. Morbi tempus lobortis.</p>
										</div>
									</div>
								</div>
							</div> -->

							<!-- Slide -->
							<!-- <div class="owl-item">
								<div class="milestone">
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value="3">0k</div>
										<div class="milestone_title">Salon Locations</div>
										<div class="milestone_text">
											<p>Ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum quis sem sed pharetra. Morbi tempus lobortis.</p>
										</div>
									</div>
								</div>
							</div> -->

							<!-- Slide -->
							<!-- <div class="owl-item">
								<div class="milestone">
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value="25">0k</div>
										<div class="milestone_title">Awards Won</div>
										<div class="milestone_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum quis sem sed pharetra. Morbi tempus lobortis.</p>
										</div>
									</div>
								</div>
							</div> -->

							<!-- Slide -->
							<!-- <div class="owl-item">
								<div class="milestone">
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value="17">0k</div>
										<div class="milestone_title">Awarded Stylists</div>
										<div class="milestone_text">
											<p>Ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum quis sem sed pharetra. Morbi tempus lobortis.</p>
										</div>
									</div>
								</div>
							</div> -->

							<!-- Slide -->
							<!-- <div class="owl-item">
								<div class="milestone">
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value="5" data-sign-before="+" data-sign-after="k">0k</div>
										<div class="milestone_title">Satisfied Clients</div>
										<div class="milestone_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum quis sem sed pharetra. Morbi tempus lobortis.</p>
										</div>
									</div>
								</div>
							</div> -->

							<!-- Slide -->
							<!-- <div class="owl-item">
								<div class="milestone">
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value="3">0k</div>
										<div class="milestone_title">Salon Locations</div>
										<div class="milestone_text">
											<p>Ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum quis sem sed pharetra. Morbi tempus lobortis.</p>
										</div>
									</div>
								</div>
							</div> -->

							<!-- Slide -->
							<!-- <div class="owl-item">
								<div class="milestone">
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value="25">0k</div>
										<div class="milestone_title">Awards Won</div>
										<div class="milestone_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum quis sem sed pharetra. Morbi tempus lobortis.</p>
										</div>
									</div>
								</div>
							</div> -->

							<!-- Slide -->
							<!-- <div class="owl-item">
								<div class="milestone">
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value="17">0k</div>
										<div class="milestone_title">Awarded Stylists</div>
										<div class="milestone_text">
											<p>Ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum quis sem sed pharetra. Morbi tempus lobortis.</p>
										</div>
									</div>
								</div>
							</div> -->

							<!-- Slide -->
							<!-- <div class="owl-item">
								<div class="milestone">
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value="25">0k</div>
										<div class="milestone_title">Awards Won</div>
										<div class="milestone_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum quis sem sed pharetra. Morbi tempus lobortis.</p>
										</div>
									</div>
								</div>
							</div> -->

							<!-- Slide -->
							<!-- <div class="owl-item">
								<div class="milestone">
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value="17">0k</div>
										<div class="milestone_title">Awarded Stylists</div>
										<div class="milestone_text">
											<p>Ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum quis sem sed pharetra. Morbi tempus lobortis.</p>
										</div>
									</div>
								</div>
							</div> -->

						</div>
						
						<!-- Slider Progress Bar -->
						<!-- <div class="slide_progress">
							<div class="slide_num">01.</div>
							<div class="slide_bar"><div style="width: 0%; transition: width 0s ease 0s;"></div></div>
						</div> -->

					</div>
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
							<!-- <p>Please get in touch with us</p> -->
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
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="js/about.js"></script>
</body>
</html>