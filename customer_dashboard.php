<?php
session_start();
error_reporting(0);
include_once('include/connection.php');
error_reporting(0);
if (strlen($_SESSION['cuid']==0)) {
  header('location:logout.php');
  } else{ 

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
     <?php
 $cid=$_SESSION['cuid'];
$ret=mysqli_query($con,"select * from  customer where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?> 
	<title>miracle creation || <?php  echo $row['name'];?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/home.css" >
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"></head>
<body id="top" style="background-color: brown;">
<?php } ?>
<?php 
include_once('include/customer_menubar.php');
 ?>
<div class="main">
	<div class="inner">
		
		<div class="thumbnails" style="padding-top: 5em;">
			<div class="box wow fadeInUp" style="width: 50%;">
				<div class="inner">
<h4>WELCOME USER</h4>
<table border="" class="mg-b-0">
        <?php
 $cid=$_SESSION['cuid'];
$ret=mysqli_query($con,"select * from  customer where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?> 
   <tr>
    <th>User Name</th>
    <td><?php  echo $row['name'];?></td>
  </tr>
     <tr>
    <th>User ID</th>
    <td><?php  echo $row['ID'];?></td>
  </tr>
   <tr>
    <th>Email</th>
    <td><?php  echo $row['email'];?></td>
  </tr>

  <tr>
    <th>Mobile Number</th>
    <td><?php  echo $row['contact_number'];?></td>
  </tr>
  <tr>
    <th>Address</th>
    <td><?php  echo $row['address'];?></td>
  </tr>
  <tr>
    <th>Live City</th>
    <td><?php  echo $row['city'];?></td>
  </tr>

  <tr>
    <th>Entering Time</th>
    <td><?php  echo $row['today'];?></td>
  </tr>
 
  
<?php } ?>

</table> 

    </div>
      </div>
      </div>
      <div class="thumbnails">
  <!-- New Web Orders///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="box wow fadeInDown" style="background-color: #0c0514;">
        <div class="inner">
          <span class="fa fa-upload fa-4x " aria-hidden="true"></span>
  <h4>Web Orders</h4>
  <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM web_order WHERE user_id='$cid'");
while ($row=mysqli_fetch_array($ret)) {
?>
  <p>All Web Orders ::<i style="color: white;"><?php  echo $row['COUNT(*)'];?><br>
      <?php } ?>
<?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM web_order WHERE user_id='$cid' and order_read='read'");
while ($row=mysqli_fetch_array($ret)) {
?>  
Complete Orders ::<?php  echo $row['COUNT(*)'];?></i></p>
  <?php  }?>

</div>
</div>
  <!-- Development Orders///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="box wow fadeInDown" style="background-color: #0c0514;">
        <div class="inner">
          <span class="fa fa-upload fa-4x " aria-hidden="true"></span>
  <h4>Developement Orders</h4>
  <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM dev_order WHERE user_id='$cid'");
while ($row=mysqli_fetch_array($ret)) {
?>
  <p>All Development Orders ::<i style="color: white;"><?php  echo $row['COUNT(*)'];?><br>
    <?php }?>
    <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM dev_order WHERE user_id='$cid' and agent_read='read' ");
while ($row=mysqli_fetch_array($ret)) {
?>
Complete Development Orders ::<?php  echo $row['COUNT(*)'];?></i></p>

  <?php } ?>
</div>
</div>
  <!-- Normal Orders///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="box wow fadeInDown" style="background-color: #0c0514;">
        <div class="inner">
          <span class="fa fa-upload fa-4x " aria-hidden="true"></span>
  <h4>Normal Orders</h4>
  <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM normal_order WHERE user_id='$cid'");
while ($row=mysqli_fetch_array($ret)) {
?>
  <p>All Normal Orders ::<i style="color: white;"><?php  echo $row['COUNT(*)'];?><br>
  
  <?php } ?>
    <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM normal_order WHERE user_id='$cid' and agent_read='read' ");
while ($row=mysqli_fetch_array($ret)) {
?>
Complete Normal Orders ::<?php  echo $row['COUNT(*)'];?></i></p>
  
  <?php } ?>
</div>
</div>
  <!-- Outdoor Orders///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="box wow fadeInDown" style="background-color: #0c0514;">
        <div class="inner">
          <span class="fa fa-upload fa-4x " aria-hidden="true"></span>
  <h4>Outdoor Orders</h4>
  <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM outdoor_order WHERE user_id='$cid'");
while ($row=mysqli_fetch_array($ret)) {
?>
  <p>All Outdoor Orders ::<i style="color: white;"><?php  echo $row['COUNT(*)'];?><br>
  <?php } ?>
  <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM outdoor_order WHERE user_id='$cid' and agent_read='read' ");
while ($row=mysqli_fetch_array($ret)) {
?>
 Complete Outdoor Orders ::<?php  echo $row['COUNT(*)'];?></i></p> 
  <?php } ?>
</div>
</div>
</div>
<div class="box">
  <div><center><h2>Last Time Orders</h2></center></div>
  <div>
            <table border="1" class="mg-b-0">
 <tr>
    <th><p style="color: yellow;">Outdoor Order</p></th>
  </tr>
  <tr style="background-color:black ;">
<th>Order Type</th>  
<th>Order ID</th>
<th>Description</th>
<th>Status_of_the_project</th>
<th>Required_date</th>
<th>Complete</th>
</tr>
    <?php
 // $eid=$_SESSION['adid'];

$ret=mysqli_query($con,"select * from  outdoor_order where user_id='$cid' order by ID DESC");
if ($row=mysqli_fetch_array($ret)) {
  ?>

   <tr style="background-color:black ;">
    
    <td><?php  echo $row['order_type'];?></td>
    <td><?php  echo $row['ID'];?></td>
    <td><?php  echo $row['description'];?></td>
    <td><?php  echo $row['status_of_the_project'];?></td>
    <td><?php  echo $row['required_date'];?></td>
    <td><?php  $x=$row['agent_read'];
    if ($x=='read') {
      echo "YES";
    }
    else{
      echo "NO";
    }
    ?></td>
 <td> 
 </td>
</tr>
  <?php } ?>
</table>
</div>
<div>
            <table border="1" class="mg-b-0">
 <tr>
    <th><p style="color: yellow;">Normal Order</p></th>
  </tr>
  <tr style="background-color:black ;">
<th>Order Type</th>  
<th>Order ID</th>
<th>Description</th>
<th>Status_of_the_project</th>
<th>Required_date</th>
<th>Complete</th>
</tr>
    <?php
 // $eid=$_SESSION['adid'];

$ret=mysqli_query($con,"select * from  normal_order where user_id='$cid' order by ID DESC");
if ($row=mysqli_fetch_array($ret)) {
  ?>

   <tr style="background-color: gray;">
    
    <td><?php  echo $row['order_type'];?></td>
    <td><?php  echo $row['ID'];?></td>
    <td><?php  echo $row['description'];?></td>
    <td><?php  echo $row['status_of_project'];?></td>
    <td><?php  echo $row['required_date'];?></td>
    <td><?php  $x=$row['agent_read'];
    if ($x=='read') {
      echo "YES";
    }
    else{
      echo "NO";
    }
    ?></td>
 <td> 
 </td>
</tr>
  <?php } ?>
</table>
</div>
  <div>
            <table border="1" class="mg-b-0">
   <tr>
    <th><p style="color: yellow;">Development Order</p></th>
  </tr>
              <tr style="background-color:black ;">
<th>Order Type</th>  
<th>Order ID</th>
<th>Reasen</th>
<th>Status_of_the_project</th>
<th>Required_date</th>
<th>Complete</th>
              </tr>
    <?php
 // $eid=$_SESSION['adid'];

$ret=mysqli_query($con,"select * from  dev_order where user_id='$cid' order by ID DESC");
if ($row=mysqli_fetch_array($ret)) {
  ?>
   <tr style="background-color: purple;">
    
    <td><?php  echo $row['order_type'];?></td>
    <td><?php  echo $row['ID'];?></td>
    <td><?php  echo $row['reasen'];?></td>
    <td><?php  echo $row['status_of_the_project'];?></td>
    <td><?php  echo $row['required_date'];?></td>
    <td><?php  $x=$row['agent_read'];
    if ($x=='read') {
      echo "YES";
    }
    else{
      echo "NO";
    }
    ?></td>
 <td> 
 </td>
</tr>
  <?php } ?>
</table>
</div>
  <div>
                <table border="1" class="mg-b-0">
 <tr>
    <th><p style="color: yellow;">Web Order</p></th>
  </tr>
<tr style="background-color:black ;">
<th>Name</th>  
<th>Order ID</th>
<th>Package</th>
<th>Reason</th>
<th>Date</th>
<th>Complete</th>
</tr>
    <?php
 // $eid=$_SESSION['adid'];

$ret=mysqli_query($con,"select * from  web_order where user_id='$cid' order by ID DESC");
if ($row=mysqli_fetch_array($ret)) {
  ?>
   <tr style="background-color: indigo;">
    <td><?php  echo $row['name'];?></td>
    <td><?php  echo $row['ID'];?></td>
    <td><?php  echo $row['package'];?></td>
    <td><?php  echo $row['why_need_a_website'];?></td>
    <td><?php  echo $row['date'];?></td>
    <td><?php  $x=$row['order_read'];
    if ($x=='read') {
      echo "YES";
    }
    else{
      echo "NO";
    }
    ?></td>
 <td> 
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
<?php } ?>