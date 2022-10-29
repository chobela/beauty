<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);

if(isset($_POST['submit']))
  {
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $contno=$_POST['mobilenumber'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    $ret=mysqli_query($con, "select Email from tbluser where Email='$email' || MobileNumber='$contno'");
    $result=mysqli_fetch_array($ret);
    if($result>0){

echo "<script>alert('This email or Contact Number already associated with another account!.');</script>";
    }
    else{
    $query=mysqli_query($con, "insert into tbluser(FirstName, LastName, MobileNumber, Email, Password) value('$fname', '$lname','$contno', '$email', '$password' )");
    if ($query) {
    
    echo "<script>alert('You have successfully registered.');</script>";
  }
  else
    {
    
      echo "<script>alert('Something Went Wrong. Please try again.');</script>";
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SignUp</title>
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

	<!-- Footer -->

	<footer class="footer">
		<div class="parallax_background" data-image-src="images/footer.jpg"></div>
		<div class="footer_container">
			<div class="container">
			
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
						<div class="footer_title">Signup</div>
						<div class="contact_form_container">
							<form method="post" name="signup" onsubmit="return checkpass();" class="contact_form">
								<div>
									<div class="row">
										<div class="col-lg-6">
											<input type="text" placeholder="First Name" name="firstname" id="firstname" class="contact_input" required="required">
										</div>
										<div class="col-lg-6">
											<input type="text" placeholder="Last Name" name="lastname" id="lastname" class="contact_input" required="required">
										</div>
									</div>
								</div>
								<div><input type="text" placeholder="Mobile Number" name="mobilenumber" id="mobilenumber" class="contact_input"></div>
                                <div><input type="text" placeholder="Email Address" name="email" id="email" class="contact_input"></div>
								<div><input type="password" placeholder="Password" name="password" id="password" class="contact_input"></div>
								<div><input type="password" placeholder="Repeat Password" name="repeatpassword" id="repeatpassword" class="contact_input"></div>
								
								<button type="submit" name="submit" class="contact_form_button">Submit</button>
							
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
<script src="js/contact.js"></script>
<script type="text/javascript">
function checkpass()
{
if(document.signup.password.value!=document.signup.repeatpassword.value)
{
alert('Password and Repeat Password field does not match');
document.signup.repeatpassword.focus();
return false;
}
return true;
} 
</script>
</body>
</html>