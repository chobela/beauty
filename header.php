<?php 
if(isset($_POST['submitform']))
  {

    $uid=$_SESSION['bpmsuid'];
    $adate=$_POST['adate'];
    $atime=$_POST['atime'];
    $msg=$_POST['message'];
    $aptnumber = mt_rand(100000000, 999999999);
  
    $query=mysqli_query($con,"insert into tblbook(UserID,AptNumber,AptDate,AptTime,Message) value('$uid','$aptnumber','$adate','$atime','$msg')");

    if ($query) {
$ret=mysqli_query($con,"select AptNumber from tblbook where tblbook.UserID='$uid' order by ID desc limit 1;");
$result=mysqli_fetch_array($ret);
$_SESSION['aptno']=$result['AptNumber'];
 echo '<script>alert("Thank you for applying! Your appointment number is '.$_SESSION['aptno'].'")</script>';  
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
  }

?>
            <nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="signup.php">Signup</a></li>
					<?php if ($_SESSION['bpmsuid'] > 0) {?>
					<li><a href="logout.php">Logout</a></li>
					<?php }?>
					<li><a href="admin/index.php">Admin</a></li>
				</ul>
			</nav>

			<?php if ($_SESSION['bpmsuid'] > 0) {?>
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
				<form method="POST" class="app_form">

					<input id='adate' name="adate" type="date" class="app_input" placeholder="Appointment Date" required="required">
					
					<input id='atime' name="atime" type="time" class="app_input" placeholder="Appointment Time" required="required">

					<textarea id="message" name="message" type="textarea" class="app_input" placeholder="Message" required="required"> </textarea>
					

					<button type="submit" name="submitform" class="app_form_button">submit</button>
				</form>
				</div>
			</div>	
		</div>
		<?php }?>