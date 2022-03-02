
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
	<title>miracle creation || Message Inbox || <?php  echo $row['username'];?></title>
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
  
         <div class="thumbnails"  style="padding-top: 10em;">
         	<div class="box"><center>Message Inbox</center></div>
      <div class="content">
       <div class="thumbnails1" style="width: 70%;background-color:rgb(28, 23, 56);">
        <div class="inner">

<table>
	<tr>
		<th></th>
		<th></th>
	</tr>
	<?php
 $ret=mysqli_query($con, "select * from  agent_msg where msg_read='' and agent_id='$eid'");
while ($row=mysqli_fetch_array($ret)) {
  ?>
	<tr>
		<td><p style="font-style: normal;color: red;"><?php echo $row['msg']; ?></p></td>
		<td> <a href="read_agent_reaport.php?id=<?php echo $row['ID']; ?>">view</a></td>
	</tr>
	     <?php } ?>
	     	<?php
 $ret=mysqli_query($con, "select msg,ID from  agent_inbox where  msg_read='' and agent_id='$eid'");
while ($row=mysqli_fetch_array($ret)) {
  ?>
      <?php 
$is_emty=$row['msg'];
if ($is_emty=='') {
 
}else{ ?>
	<tr>
		<td><p style="font-style: normal;">Admin: <?php echo $row['msg']; ?></p></td>
		<td><a href="read_agent_msg.php?id=<?php echo $row['ID']; ?>">view</a></td>
	</tr>
<?php } } ?>
</table>

				</div>
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
<?php } ?>