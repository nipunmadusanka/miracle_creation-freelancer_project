           
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
  <title>report || <?php  echo $row['Name'];?></title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/home.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
</head>
<body id="top" style="background-color:rgba(14, 10, 10, 0.9);">
  <?php 
include_once('include/admin_menubar.php');
 }?>
 <div id="main">

          <div class="inner">
    <center><h2>report</h2></center>
<div class="thumbnails">
<div class="box wow fadeInDown" style="background-color: #0c0514;text-align: left;">
 
      <?php
      if (isset($_GET['id'])) {
        # code...
    
$id=$_GET['id'];
$ret=mysqli_query($con,"select * from  report where ID='$id'");
while ($row=mysqli_fetch_array($ret)) {
?>
      
        <div>
        <p>Report ID: <i><?php  echo $row['ID'];?></i></p>
         <p>Report User ID: <i><?php  echo $row['user_id'];?></i></p>
        <p>User Name: <i><?php  echo $row['u_name'];?></i></p>
        <p>User ID: <i><?php  echo $row['user_id'];?></i></p>
        <p>User Telephone: <i><?php  echo $row['u_telephone'];?></i></p>
        <p>Reason: <i><?php  echo $row['re_reasen'];?></i></p>
        <p>Agent ID: <a href="delete_agent.php?agid=<?php  echo $row['agent_id'];?>"><i><?php  echo $row['agent_id'];?></i></a></p>
        
<?php
$aid=$row['agent_id'];
$ret=mysqli_query($con," SELECT COUNT(*) FROM report WHERE agent_id='$aid'");
while ($row=mysqli_fetch_array($ret)) {
?>
<p>This Agent(<?php  echo $aid;?>) all Reports :- <i style="color: red;"><?php  echo $row['COUNT(*)'];?></i></p>
<?php
 } ?>
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 -->
<?php
$ret=mysqli_query($con,"select * from  agent where ID='$aid'");
while ($row=mysqli_fetch_array($ret)) {
?>
<p>Agent Name :-<?php  echo $row['username'];?></p>
 <?php } ?>
</div>
      
 <?php }   }?>     
</div>
</div> 
</div>
</div>
  <script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/dropdown.js"></script> 
<script src="assets/js/timeout.js"></script> 
</body>
</html>
  
<?php  } ?>