<?php
session_start();
error_reporting(0);
include_once('include/connection.php');
error_reporting(0);
if (strlen($_SESSION['cvmsaid']==0)) {
  header('location:logout.php');
  } else{ 
?>
  <?php
 $eid=$_SESSION['cvmsaid'];
$ret=mysqli_query($con,"select * from  agent where ID='$eid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>miracle creation || <?php  echo $row['username'];?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/home.css" >
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"></head>
<body id="top">
<?php }?>
<?php 
include_once('include/agent_menubar.php');
 ?>
<div class="main">
  <div class="innerr">
    <div class="thumbnails" style="padding-top: 5em;">
      <div class="box wow fadeInUp" style="width: 34%;">
        <a href="agent_dev_order.php">
        <div class="inner">  
          <span class="fa  fa-upload fa-4x " aria-hidden="true"></span>
<?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM dev_order WHERE agent_read ='' && agent_id='$eid' ");
while ($row=mysqli_fetch_array($ret)) {
?>
          <h2>Development Order <?php  echo $row['COUNT(*)'];?></h2>
          <?php } ?>
        </div>
        </a>
      </div>
      <div class="box wow fadeInUp" style="width: 34%;">
        <div class="inner">
        <a href="agent_normal_order.php">
        <span class="fa  fa-upload fa-4x " aria-hidden="true"></span>  
        <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM normal_order WHERE agent_read ='' && agent_id='$eid' ");
while ($row=mysqli_fetch_array($ret)) {
?>
          <h2>Normal Order <?php  echo $row['COUNT(*)'];}?></h2>
        </div>
      </a>
      </div>
      <div class="box wow fadeInUp" style="width: 34%;">
        <div class="inner"> 
        <a href="#"> 
          <span class="fa  fa-upload fa-4x " aria-hidden="true"></span>
          <h2>Outdoor Order</h2>
        </div>
      </a>
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