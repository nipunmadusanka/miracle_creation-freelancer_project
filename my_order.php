<?php
session_start();
error_reporting(0);
include_once('include/connection.php');
error_reporting(0);
if (strlen($_SESSION['cuid']==0)) {
  header('location:logout.php');
  } else{ 
?>
  <?php
 $cid=$_SESSION['cuid'];
$ret=mysqli_query($con,"select * from  customer where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>My Orders ||  Uncompleted Order || <?php  echo $row['name'];?> </title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/home.css" >
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"></head>

<body id="top" style="background-color: gray;">
<?php } ?>
<?php 
include_once('include/customer_menubar.php');
 ?>
<div class="main">
  <div class="inner" style="padding-top: 10em;">
    <center><h2>Uncompleted Order</h2></center>
 <div class="thumbnails">
  <!-- New Web Orders///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="box wow fadeInDown" style="background-color: #0c0514;">
        <div class="inner">
 <a href="my_web_order.php">        
  <h4>Web Orders</h4>
  <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM web_order WHERE order_read ='' && user_id='$cid'");
while ($row=mysqli_fetch_array($ret)) {
?>
  <p><i style="color: white;"><?php  echo $row['COUNT(*)'];?></i></p>
  
  <?php } ?>
  </a> 
</div>
</div>
  <!-- Development Orders///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="box wow fadeInDown" style="background-color: #0c0514;">
        <div class="inner">
<a href="my_dev_order.php">      
  <h4>Developement Orders</h4>
  <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM dev_order WHERE agent_read ='' && user_id='$cid'");
while ($row=mysqli_fetch_array($ret)) {
?>
  <p><i style="color: white;"><?php  echo $row['COUNT(*)'];?></i></p>
  
  <?php } ?>
  </a>  
</div>
</div>
  <!-- Normal Orders///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="box wow fadeInDown" style="background-color: #0c0514;">
        <div class="inner">
         <a href="my_normal_order.php">  
  <h4>Normal Orders</h4>
  <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM normal_order WHERE agent_read ='' && user_id='$cid'");
while ($row=mysqli_fetch_array($ret)) {
?>
  <p><i style="color: white;"><?php  echo $row['COUNT(*)'];?></i></p>
  
  <?php } ?>  </a> 
</div>
</div>
  <!-- Outdoor Orders///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="box wow fadeInDown" style="background-color: #0c0514;">
        <div class="inner">
          <a href="my_outdoor_order.php">  
  <h4>Outdoor Orders</h4>
  <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM outdoor_order WHERE agent_read ='' && user_id='$cid'");
while ($row=mysqli_fetch_array($ret)) {
?>
  <p><i style="color: white;"><?php  echo $row['COUNT(*)'];?></i></p>
  
  <?php } ?>  </a> 
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
