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
    <div id="main">

          <div class="inner">
              <center><h2>complete Development Orders</h2></center>
              <div class="thumbnails wow fadeInUp" style="padding-top: 5em;">
            <table border="1" class="mg-b-0" style="background-color: gray;">
    <?php
 // $eid=$_SESSION['adid'];
$ID=$_GET['id'];
$ret=mysqli_query($con,"select * from  dev_order where ID ='$ID' && agent_id='$eid' && agent_read ='read'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
  ?>
<tr>
<th>Order Type</th> 
    <td><?php  echo $row['order_type'];?></td>
</tr> 
<tr>
  <th>ID</th>
    <td><?php  echo $row['ID'];?></td>
</tr>
<tr>
  <th>User Id</th>
    <td><?php  echo $row['user_id'];?></td>
</tr>
<tr>
  <th>Read</th>
    <td><?php  echo $row['agent_read'];?></td>
</tr>
<tr>
  <th>Name</th>
   <td><?php  echo $row['name'];?></td>
</tr>
<tr>
  <th>Telephone</th>
  <td><?php  echo $row['telephone'];?></td>
</tr>
<tr>
  <th>Email</th>
 <td><?php  echo $row['email'];?></td>
</tr>
<tr>
  <th>City</th>
  <td><?php  echo $row['city'];?></td>
</tr>
<tr>
  <th>Reasen</th>
   <td><?php  echo $row['reasen'];?></td>
</tr>
<tr>
  <th>Status_of_the_project</th>
  <td><?php  echo $row['status_of_the_project'];?></td>
</tr>
<tr>
  <th>Create Date</th>
  <td><?php  echo $row['created'];?></td>
</tr>
<tr>
  <th>Required_date</th>
   <td><?php  echo $row['required_date'];?></td>
</tr>
<tr>
  <th>Payment</th>
   <td><?php  echo $row['payment'];?></td>
</tr>
<tr>
  <th>user msg</th>
    <td><?php  echo $row['msg'];?></td>
</tr>
<tr>
<th></th>
<td>     <!--  -->

</td>
</tr>
<?php  } ?>
</table>
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
  
<?php  } ?>