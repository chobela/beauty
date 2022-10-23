<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Vogue template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
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

			<!-- Main Navigation -->
		<?php
		include('header.php');
		?>

			<!-- Appointment -->
			<div class="app trans_400">
				<div class="app_button_container d-flex flex-row align-items-center justify-content-start">
					<div class="app_button trans_400 d-flex flex-row align-items-center justify-content-start">
						<div class="app_button_icon"><img src="images/woman.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div>Book an Appointment</div>
					</div>
					<div class="app_button_close">close</div>
				</div>
			</div>
			<div class="app_content d-flex flex-column align-items-start justify-content-center">
				<div class="app_form_container text-right">
					<form action="#" id="app_form" class="app_form">
						<input type="text" class="app_input" placeholder="Full Name" required="required">
						<input type="email" class="app_input" placeholder="Email Address" required="required">
						<input type="text" class="app_input" placeholder="Phone Number" required="required">
						<input type="text" class="app_input" placeholder="Desired Date" required="required">
						<select class="app_input app_select">
							<option disabled="" selected="">Select Service</option>
							<option>Service 1</option>
							<option>Service 2</option>
							<option>Service 3</option>
							<option>Service 4</option>
						</select>
						<button class="app_form_button">submit</button>
					</form>
				</div>
			</div>	
		</div>
	</header>

	<!-- Menu -->
	
	<div class="menu">
		<nav class="menu_nav">
			<ul class="d-flex flex-column align-items-start justify-content-start">
				<li><a href="index.html">Home</a></li>
				<li class="active"><a href="about.html">About Us</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href="articles.html">Articles</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background" data-image-src="images/contact.jpg"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col-xl-8">
						<div class="section_title_container">
							<div class="section_title"><h1>Here is where you can<span> find us</span></h1></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">

		<!-- Google Map -->
		<div class="map">
			<div id="google_map" class="google_map">
				<div class="map_container">
					<div id="map"></div>
				</div>
			</div>
		</div>

		<div class="contact_overlay">
			<div class="contact_overlay_content d-flex flex-column align-items-center justify-content-center">
				<!-- Logo -->
				<div class="logo">
				<a href="#">
					<div>B<span>ea</span>uty</div>
					<div>hair</div>
				</a>
				</div>
				<div class="contact_list">
					<ul>
						<li class="text-center">
							<div><span><img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/freepik"></span>4127 Raoul Wallenber4127 Raoul Wallen berg Place</div>
						</li>
						<li class="text-center">
							<div><span><img src="images/phone-call.svg" alt="https://www.flaticon.com/authors/freepik"></span>203-808-8613</div>
						</li>
					</ul>
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
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
</body>
</html>