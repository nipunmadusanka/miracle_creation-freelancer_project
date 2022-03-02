<?php
session_start();
error_reporting(0);
include_once('include/connection.php');
error_reporting(0);
if (strlen($_SESSION['adid']==0)) {
  header('location:logout.php');
  } else{ 

?>
<?php
 $eid=$_SESSION['adid'];
$ret=mysqli_query($con,"select * from  admin where ID='$eid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>miracle creation || <?php  echo $row['Name'];?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/home.css" >
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"></head>
<body id="top">
<?php }?>
<?php 
include_once('include/admin_menubar.php');
 ?>

<div class="main">
	<div class="innerr">
		
		<div class="thumbnails" style="padding-top: 8em;">
			<div class="box wow fadeInUp" style="width: 34%;">
				<?php 
if(isset($_POST['submit']))
  {
    $adminuser=$_POST['username'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"insert into admin(Name,Email,Password) value('$adminuser','$email','$password')");
if ($query) {
echo "<script>alert('Added');</script>";
	# code...
}
else{
echo "<script>alert('Not Added');</script>";
}
}
 ?>
				<div class="inner">
<!--  -->
					<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
						<fieldset style="padding-top: 10px;">
							<label>USER NAME</label>
						</fieldset>

						<fieldset>
							<input type="text" name="username" placeholder="enter user name" title="user name">
						</fieldset>	
						<fieldset style="padding-top: 10px;">
							<label>EMAIL</label>
						</fieldset>

						<fieldset>
							<input type="Email" name="email" placeholder="enter user email" title="user email">
						</fieldset>

						<fieldset style="padding-top: 10px;">
							<label>PASSWORD</label>
						</fieldset>

						<fieldset>
							<input type="Password" name="password" placeholder="enter Password" title="Password">
						</fieldset>	

								<div style="padding-top: 20px;">
						<fieldset>
						<button type="submit" name="submit" class="button fit" title="sign in">ADD</button>
						</fieldset>
								</div>	
							

					</form>
				</div>
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
<script src="assets/js/dropdown.js"></script> 
<script src="assets/js/timeout.js"></script> 
</body>
</html>
<?php } ?>