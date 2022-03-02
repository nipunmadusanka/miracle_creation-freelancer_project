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
<?php }?>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/home.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"></head>
<body id="top">
<?php 
include_once('include/admin_menubar.php');
 ?>
<div class="main">
	<div class="innerr">
		
		<div class="thumbnails" style="padding-top: 5em;">
			<div class="box wow fadeInUp" style="width: 55%;">
				<div class="inner">
  <?php
 $eid=$_SESSION['adid'];
$ret=mysqli_query($con,"select * from  admin where ID='$eid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
  ?>
<table border="1" class="mg-b-0">
                                            <tr>
    <th>User Name</th>
    <td><?php  echo $row['Name'];?></td>
    <td>
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
      <input type="text" name="username"><button type="submit" name="submit1">Change User Name</button>
    </form>
         <?php if(isset($_POST['submit1'])){
 $username=$_POST['username'];
$query=mysqli_query($con,"update admin set Name='$username' where  ID='$eid' ");
if($query){
echo "<script>alert('username successfully changed');</script>";
} } ?>
  </td>
  </tr>
   <tr>
    <th>Email</th>
    <td><?php  echo $row['Email'];?></td>
       <td>
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
      <input type="text" name="email"><button type="submit" name="submit2">Change Email</button>
    </form>
    <?php if(isset($_POST['submit2'])){
 $email=$_POST['email'];
$query=mysqli_query($con,"update admin set Email='$email' where  ID='$eid' ");
if($query){
echo "<script>alert('email successfully changed');</script>";
session_destroy();
} } ?>
  </td>
  </tr>
<?php } ?>

</table> 
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
<?php }  ?>

