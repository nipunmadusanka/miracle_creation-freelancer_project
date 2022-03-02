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
$my_name=$row['username'];
?>
              <?php if(isset($_POST['submit'])){
                $eid=$_SESSION['cvmsaid'];
$msg=$_POST['msg'];
$today = @date('Y-m-d H:i:s');
$query=mysqli_query($con,"insert into agent_inbox (agent_id,agent_msg,date) value('$eid','$msg','$today')");
if($query){
echo "<script>alert('successfully');</script>";
} } ?>
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
          <div class="box2">
            
<?php
if (isset($_GET['id'])) {
   $id=$_GET['id'];
 $que=mysqli_query($con,"update agent_inbox set msg_read='read' where ID='$id'");
  }?> 
     <?php
 $ret=mysqli_query($con, "select * from  agent_inbox where agent_id='$eid' order by ID DESC ");
while ($row=mysqli_fetch_array($ret)) {
  ?>

<p>Admin :<i style="color: red;"><?php echo $row['msg']; ?></i><br>
<i><?php echo $row['date']; ?></i></p>
<?php } ?>
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