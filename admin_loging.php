<?php
session_start();
error_reporting(0);
include_once('include/connection.php');

if(isset($_POST['submit']))
  {
    $Email=$_POST['Email'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from admin where  Email='$Email' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['adid']=$ret['ID'];
     header('location:admin_dashboard.php');
    }
    else{
    $msg="Invalid Details.";
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
		
		<div class="thumbnails" style="padding-top: 8em;">
			<div class="box" style="width: 34%;">
				<div class="inner">  <p>Admin</p>
					                         <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

					<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

						<fieldset style="padding-top: 10px;">
							<label>Email</label>
						</fieldset>

						<fieldset>
							<input type="text" name="Email" placeholder="enter Email" title="Email">
						</fieldset>	
						<fieldset style="padding-top: 10px;">
							<label>PASSWORD</label>
						</fieldset>

						<fieldset>
							<input type="Password" name="password" placeholder="enter Password" title="Password">
						</fieldset>	

								<div style="padding-top: 20px;">
						<fieldset>
						<button type="submit" name="submit" class="button fit" title="sign in">SIGN IN</button>
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
