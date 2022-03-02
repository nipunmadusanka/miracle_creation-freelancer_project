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
              <center><h2>Uncomplete Normal Orders</h2></center>
              <div class="thumbnails wow fadeInUp" style="padding-top: 5em;">
            <table border="1" class="mg-b-0" style="background-color: gray;">
<th>Order Type</th>  
<th>User Id</th>
<th>ID</th>
<th>Name</th>
<th>Telephone</th>
<th>Whatsapp number</th>
<th>Email</th>
<th>City</th>
<th>Description</th>
<th>Status_of_the_project</th>
<th>Required_date</th>
<th>Payment</th>
<th>Creat Date</th>
<th>user msg</th>
    <?php
 // $eid=$_SESSION['adid'];

$ret=mysqli_query($con,"select * from  normal_order where agent_read ='' && agent_id='$eid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
	?>
 <tr>
    <td><p style="color: black;">Order number</p></td>
    <td><p style="color: red;"><?php  echo "$cnt"; ?></p></td>
  </tr>
  <tr>

  </tr>
   <tr>
    
    <td><?php  echo $row['order_type'];?></td>
    <td><?php  echo $row['user_id'];?></td>
    <td><?php  echo $row['ID'];?></td>
    <td><?php  echo $row['name'];?></td>
    <td><?php  echo $row['phone_number'];?></td>
     <td><?php  echo $row['whatsapp_number'];?></td>
    <td><?php  echo $row['email'];?></td>
    <td><?php  echo $row['city'];?></td>
    <td><?php  echo $row['description'];?></td>
    <td><?php  echo $row['status_of_project'];?></td>
    <td><?php  echo $row['required_date'];?></td>
    <td><?php  echo $row['payment'];?></td>
    <td><?php  echo $row['created'];?></td>
    <td><?php  echo $row['u_msg'];?></td>
    <!-- -->
 <td>     <!--  -->
<a href="agent_normal_order_view.php?id=<?php echo $row['ID'];?>"><button style="background-color: rgba(100, 30, 250, 0.7);width: 6em;"title="complete">view</button></a>
</td>
</tr>
<?php $cnt=$cnt+1; } ?>
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