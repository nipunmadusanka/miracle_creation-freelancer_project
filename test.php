<?php
include_once('include/connection.php');
    if(isset($_POST['submit']))
  {

 


 $fullname=$_POST['name'];
$mobilenumber=$_POST['mobilenumber'];
$add=$_POST['address'];
$city=$_POST['city'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$date=$_POST['date'];

 
 $query=mysqli_query($con,"insert into customer1 (name,contact_number,address,city,email_or_feedback,password,date) value('$fullname','$mobilenumber','$add','$city','$email','$password','$date')");

    if ($query) {
    header('location:customer_loging.php');
  }


  else
    {
        echo "<script>alert('try again');</script>";
    }

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>miracle creation</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/home.css" >
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"></head>

<body id="top">
<?php 
include_once('include/menubar.php');
 ?>

<div class="main">
	<div class="innerr">
		
		<div class="thumbnails" style="padding-top: 5em;">
			<div class="box wow fadeInUp" style="width: 55%;">
				<div class="inner">                                                 
                 
					 <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
						<h3>create account</h3>

						



						<fieldset style="padding-top: 10px;">			
							<label style="float: left;">User Name</label>
						</fieldset>

						<fieldset>
							
						<input type="text" name="name" placeholder="enter User Name" title="user name">
						</fieldset>

						<fieldset style="padding-top: 10px;">
							<label style="float: left;">Mobile Number</label>
						</fieldset>

						<fieldset>
							<input type="tel" name="mobilenumber" placeholder="enter Mobile Number" title="your mobile number">
						</fieldset>


						<fieldset style="padding-top: 10px;">
							<label style="float: left;">Address</label>
						</fieldset>
						
						<fieldset>
							<input type="text" name="address" placeholder="enter address" title="your address">
						</fieldset>
						
						<fieldset style="padding-top: 10px;">
							<label style="float: left;">City</label>
						</fieldset>

						<fieldset>
							<input type="text" name="city" placeholder="enter Live City" title="live city">
						</fieldset>

						<fieldset style="padding-top: 10px;">
							<label style="float: left;">Email</label>
						</fieldset>

						<fieldset>
							<input type="text" name="email" placeholder="enter Email" title="your email address">
						</fieldset>

						<fieldset style="padding-top: 10px;">
							<label style="float: left;">Password</label>
						</fieldset>

						<fieldset>
							<input type="Password" name="password" placeholder="enter Password" title="Password">
						</fieldset>	

						<fieldset style="padding-top: 10px;">
							<label style="float: left;">Date</label>
						</fieldset>

						<fieldset>
							<input type="checkbox" name="date" value="condition">
						</fieldset>

						<!-- <fieldset style="padding-top: 10px;">
						<input type="text" name="nn" placeholder="enter Live City" title="live city">
					</fieldset> -->

						<!-- <fieldset style="padding-top: 10px;">
							<label style="float: left;">Upload Profile Picture</label>
						</fieldset>
						<fieldset>
							<input type="file" name="profilepic" style="float: left;" title="your profile picture">
						</fieldset> -->
<!-- <fieldset style="padding-top: 10px;">
							<label>term</label>
						</fieldset>

						<fieldset style="float: left;">
							<input type="checkbox" name="condition" value="condition">
						</fieldset> -->

								<div style="padding-top: 20px;">
						<fieldset>
						<button type="submit" name="submit" class="button fit" title="Register">create account</button>
						</fieldset>
								</div>	

					</form>
				</div>
		</div>
	</div>
</div>
			
 		<!-- Footer -->
		<?php include_once('include/footer.php'); ?>
  <script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>
