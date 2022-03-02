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

    <div class="thumbnails" style="padding-top: 10em;">
      <div class="content">
       <div class="thumbnails1" style="width: 70%;background-color: white;">
 <div class="box2 wow fadeInDown" style="background-color: #0c0514;text-align: none;">
        <div class="inner">
          <div class="content">
            <div class="leftt">
<?php
if (isset($_GET['id'])) {
   $id=$_GET['id'];
  $ret=mysqli_query($con, "select * from  agent_msg where ID='$id' and msg_read=''");
  while ($row=mysqli_fetch_array($ret)) {
$read_stut=$row['msg_read'];
$msg=$row['msg'];
    }
    if ($read_stut=='') {
      # code...
    
  ?>
  <p> Message :- <i style="color: red;"><?php  echo $msg;?></i></p>
          <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM report WHERE agent_id='$eid'");
while ($row=mysqli_fetch_array($ret)) {
  $all_report=$row['COUNT(*)']; } ?>

  <?php
  # code...
 $ret=mysqli_query($con, "select * from report where agent_id='$agid' ");
if ($row=mysqli_fetch_array($ret)) {
  $reason=$row['re_reasen'];
} 
 $que=mysqli_query($con,"update agent_msg set msg_read='read' where ID='$id'");
} }?> 

     
				</div>
<div class="rightt">
  <p style="font-style: normal;font-family: Source Sans Pro;"><b>last one reasen :</b><?php echo $reason;?></p>
  <p> All Reports :- <i style="color: red;"><?php  echo $all_report;?></i></p>
</div>
			</div>
		</div>
	</div>		
</div>
</div>
</div>
</div>
 		<!-- Footer -->
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