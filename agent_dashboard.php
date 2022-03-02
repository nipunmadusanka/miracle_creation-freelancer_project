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

<body id="top" style="background-color: gray;">
<?php }?>
<?php 
include_once('include/agent_menubar.php');
 ?>
<div class="main">
	<div class="innerr">
		
		<div class="thumbnails" style="padding-top: 5em;">
			<div class="box wow fadeInDown" style="width: 55%;background-color: #171c30;">
				<div class="inner"><i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
<span class="sr-only">Loading...</span>
<h4>WELCOME AGENT</h4>

  <?php
 $eid=$_SESSION['cvmsaid'];
$ret=mysqli_query($con,"select * from  agent where ID='$eid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?><table border="1" class="mg-b-0">
  <tr>
    <th>User Name</th>
    <td><?php  echo $row['username'];?></td>
  </tr>
   <tr>
    <th>Email</th>
    <td><?php  echo $row['email'];?></td>
  </tr>
     <tr>
    <th>ID</th>
    <td><?php  echo $row['ID'];?></td>
  </tr>
  
<?php 
$agent_id=$row['ID'];
} ?>
</table> 

				</div>
			</div>
		</div>
    <div class="thumbnails">
       <div class="box wow fadeInDown" style="background-color: #0c0514;">
        <div class="inner">
          <span class="fa  fa-upload fa-4x " aria-hidden="true"></span>
  <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM dev_order WHERE agent_id='$eid' && agent_read='' ");
while ($row=mysqli_fetch_array($ret)) {
?>
<h3>NEW</h3>
<a href="agent_dev_order.php">
<p>Development Order <i style="color: red;"><?php  echo $row['COUNT(*)'];?></i></p>
</a>
<?php } ?>
</div>
</div>


      <div class="box wow fadeInDown" style="background-color: #0c0514;">
        <div class="inner">
          <span class="fa  fa-upload fa-4x " aria-hidden="true"></span>
  <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM normal_order WHERE agent_id='$eid' && agent_read='' ");
while ($row=mysqli_fetch_array($ret)) {
?>
<h3>NEW</h3>
<a href="agent_normal_order.php">
<p>Normal Order <i style="color: red;"><?php  echo $row['COUNT(*)'];?></i></p>
</a>
<?php } ?>
</div>
</div>
            <div class="box wow fadeInDown" style="background-color: #0c0514;">
        <div class="inner">
          <span class="fa  fa-upload fa-4x " aria-hidden="true"></span>
  <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM outdoor_order WHERE agent_id='$eid' && agent_read='' ");
while ($row=mysqli_fetch_array($ret)) {
?>
<h3>NEW</h3>
<a href="agent_outdoor_order.php">
<p>Outdoor Order <i style="color: red;"><?php  echo $row['COUNT(*)'];?></i></p>
</a>
<?php } ?>
</div>
</div>
            <div class="box wow fadeInDown" style="background-color: #0c0514;">
        <div class="inner">
          <span class="fa fa-check-square-o fa-4x " aria-hidden="true"></span>
  <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM dev_order WHERE agent_id='$eid' && agent_read='read' ");
while ($row=mysqli_fetch_array($ret)) {
    $dev=$row['COUNT(*)'];
?>
<h2>COMPLETE</h2>
<a href="complete_dev_order.php">
<p>Development Order <i style="color: red;"><?php  echo $row['COUNT(*)'];?></i></p>
</a>
<?php } ?>
</div>
</div>
            <div class="box wow fadeInDown" style="background-color: #0c0514;">
        <div class="inner">
          <span class="fa fa-check-square-o fa-4x " aria-hidden="true"></span>
  <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM normal_order WHERE agent_id='$eid' && agent_read='read' ");
while ($row=mysqli_fetch_array($ret)) {
  $normal=$row['COUNT(*)'];
?>
<h2>COMPLETE</h2>
<a href="complete_normal_order.php">
<p>Normal Order <i style="color: red;"><?php  echo $row['COUNT(*)'];?></i></p>
</a>
<?php } ?>
</div>
</div>
            <div class="box wow fadeInDown" style="background-color: #0c0514;">
        <div class="inner">
          <span class="fa fa-check-square-o fa-4x " aria-hidden="true"></span>
  <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM outdoor_order WHERE agent_id='$eid' && agent_read='read' ");
while ($row=mysqli_fetch_array($ret)) {
  $outdoor=$row['COUNT(*)'];
?>
<h2>COMPLETE</h2>
<a href="complete_outdoor_order.php">
<p>Outdoor Order <i style="color: red;"><?php  echo $row['COUNT(*)'];?></i></p>
</a>
<?php } ?>
</div>
</div>
 <div class="box wow fadeInDown" style="background-color: #0c0514;">
        <div class="inner">
          <span class="fa fa-plus fa-4x " aria-hidden="true"></span>
  <?php 
$sum=$dev+$normal+$outdoor;
?>
<h2>TOTAL</h2>
<p>Total Complete Orders <i style="color: red;"><?php  echo $sum;?></i></p>

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