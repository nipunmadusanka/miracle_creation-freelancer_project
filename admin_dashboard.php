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
	<title>miracle creation || <?php  echo $row['Name'];?></title>
	<?php } ?>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/home.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
</head>
<body id="top" style="background-color: gray;">
<?php 
include_once('include/admin_menubar.php');
 ?>
<div class="main">
	<div class="innerr">
		
		<div class="thumbnails" style="padding-top: 5em;">
			<div class="box wow fadeInDown" style="width: 55%;">
				<div class="inner">
<h4>WELCOME ADMIN PANEL<i class="fa fa-dashboard fa-2x " aria-hidden="true"></i></h4>
<?php
 $eid=$_SESSION['adid'];
$ret=mysqli_query($con,"select * from admin where ID='$eid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
  <table border="1" class="mg-b-0">
                                            <tr>
    <th>User Name</th>
    <td><?php  echo $row['Name'];?></td>
  </tr>
   <tr>
    <th>Email</th>
    <td><?php  echo $row['Email'];?></td>
  </tr>
     <tr>
    <th>ID</th>
    <td><?php  echo $row['ID'];?></td>
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
  <h4>New Web Orders</h4>
			<?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM web_order WHERE order_read ='' ");
while ($row=mysqli_fetch_array($ret)) {
	?>
	<a href="unread_web_order.php">New Web Orders ::<i style="color: white;"><?php  echo $row['COUNT(*)'];?></i></a>
	
	<?php } ?>
</div>
</div>
<!-- Agent Request///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
 <div class="box wow fadeInDown" style="background-color: #0c0514;">
        <div class="inner">
          <span class="fa fa-hand-o-down fa-4x " aria-hidden="true"></span>
  <h4>Agent Request</h4>
			<?php
			$ret=mysqli_query($con," SELECT COUNT(*) FROM agents");
while ($row=mysqli_fetch_array($ret)) {
	?>
	<a href="request_agent.php">Agent Request<i style="color: white;">   <?php  echo $row['COUNT(*)'];?></i></a>
	
	<?php } ?>
</div>
</div>
<!-- Report///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
 <div class="box wow fadeInDown" style="background-color: #0c0514;">
        <div class="inner">
          <span class="fa fa-warning fa-4x " aria-hidden="true"></span>
  <h4>Report Agent</h4>
				<?php
			$ret=mysqli_query($con," SELECT COUNT(*) FROM report");
while ($row=mysqli_fetch_array($ret)) {
	?>
	<i><a href="agent_report.php">Report<i style="color: white;">   <?php  echo $row['COUNT(*)'];}?></i></a></i>
</div>
</div>
<!-- Complete Web Orders///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
 <div class="box wow fadeInDown" style="background-color: #0c0514;">
        <div class="inner">
          <span class="fa fa-check-square-o fa-4x " aria-hidden="true"></span>
  <h4>Complete Web Orders</h4>
			<?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM web_order WHERE order_read ='read' ");
while ($row=mysqli_fetch_array($ret)) {
	?>
	<a href="web_order_read.php">Complete Web Orders :: <i style="color: white;">   <?php  echo $row['COUNT(*)'];?></i></a>
	
	<?php } ?>
</div>
</div>
<!-- Complete Dev Orders///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
 <div class="box wow fadeInDown" style="background-color: #0c0514;">
        <div class="inner">
          <span class="fa fa-check-square-o fa-4x " aria-hidden="true"></span>
  <h4>Complete Dev Orders</h4>
			<?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM dev_order WHERE agent_read ='read' ");
while ($row=mysqli_fetch_array($ret)) {
	?>
	<p>Complete Dev Orders <i style="color: white;">   <?php  echo $row['COUNT(*)'];?></i></p>
	
	<?php } ?>
</div>
</div>
<!-- Complete Normal Orders///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
 <div class="box wow fadeInDown" style="background-color: #0c0514;">
        <div class="inner">
          <span class="fa fa-check-square-o fa-4x " aria-hidden="true"></span>
  <h4>Complete Normal Orders</h4>
			<?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM normal_order WHERE agent_read ='read' ");
while ($row=mysqli_fetch_array($ret)) {
	?>
	<p>Complete Normal Orders <i style="color: white;">   <?php  echo $row['COUNT(*)'];?></i></p>
	
	<?php } ?>
</div>
</div>
<!-- Complete outdoor Orders///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
 <div class="box wow fadeInDown" style="background-color: #0c0514;">
        <div class="inner">
          <span class="fa fa-check-square-o fa-4x " aria-hidden="true"></span>
  <h4>Complete Outdoor Orders</h4>
			<?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM outdoor_order WHERE agent_read ='read' ");
while ($row=mysqli_fetch_array($ret)) {
	?>
	<p>Complete Outdoor Orders <i style="color: white;">   <?php  echo $row['COUNT(*)'];?></i></p>
	
	<?php } ?>
</div>
</div>

<!-- All Agent///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
 <div class="box wow fadeInDown" style="background-color: #0c0514;">
        <div class="inner">
          <span class="fa fa-user fa-4x " aria-hidden="true"></span>
  <h4>All Agent</h4>
<?php
			$ret=mysqli_query($con," SELECT COUNT(*) FROM agent");
while ($row=mysqli_fetch_array($ret)) {
	?>
	<a href="view_all_agent.php">All Agent
	<i style="color: white;">   <?php  echo $row['COUNT(*)'];?></i>
	</a>
	<?php } ?>
</div>
</div>
<!-- customer account///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
 <div class="box wow fadeInDown" style="background-color: #0c0514;">
        <div class="inner">
          <span class="fa fa-user fa-4x " aria-hidden="true"></span>
  <h4>All User Account</h4>
				<?php
			$ret=mysqli_query($con," SELECT COUNT(*) FROM customer");
while ($row=mysqli_fetch_array($ret)) {
	?>
	<a href="view_all_customer.php">User Account
	<i style="color: white;">   <?php  echo $row['COUNT(*)'];?></i>
	</a>
	<?php } ?>
</div>
</div>
<!-- All orders///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
 <div class="box wow fadeInDown" style="background-color: #0c0514;">
        <div class="inner">
          <span class="fa fa-tasks fa-4x " aria-hidden="true"></span>
  <h4>All orders</h4>
<?php
$ret=mysqli_query($con," SELECT COUNT(*) FROM web_order");
while ($row=mysqli_fetch_array($ret)) {
	$web=$row['COUNT(*)'];
}?>
<?php
$ret=mysqli_query($con," SELECT COUNT(*) FROM dev_order");
while ($row=mysqli_fetch_array($ret)) {
	$dev=$row['COUNT(*)'];
}?>
<?php
$ret=mysqli_query($con," SELECT COUNT(*) FROM normal_order");
while ($row=mysqli_fetch_array($ret)) {
	$normal=$row['COUNT(*)'];
}?>
<?php
$ret=mysqli_query($con," SELECT COUNT(*) FROM outdoor_order");
while ($row=mysqli_fetch_array($ret)) {
	$outdoor=$row['COUNT(*)'];
}?>
<?php  
$total=$web+$dev+$normal+$outdoor;
?>
	<p>Total Orders
	<i style="color: white;">   <?php echo $total; ?></i>
	</p>
</div>
</div>


		</div>
	</div>
</div>

	<div class="cont">
    <div class="content">
    <div class="form  wow fadeInLeft">
  <!--   	<h2>Quick Link</h2>
    	<ul style="">   	
    	<li><a href="add_admin.php">Add New Admin</a></li>
    	<li><a href="remove_admin.php">Remove Admin</a></li>
      	<li><a href="admin_edit.php">Change My Details</a></li>
		</ul> -->
  </div>
<div class="info  wow fadeInRight">
	<table>
		<tr>
			<th><h4>Complete Orders</h4></th>
			<th><h4>New Orders</h4></th>

		</tr>
		<tr>

<td>
			<?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM web_order WHERE order_read ='read' ");
while ($row=mysqli_fetch_array($ret)) {
	?>
	Complete :: <a href="web_order_read.php">show</a>
	<p style="color: red;"><?php  echo $row['COUNT(*)'];?></p>
	<?php } ?>
</td>
		
			<td>
							<?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM web_order WHERE order_read ='' ");
while ($row=mysqli_fetch_array($ret)) {
	?>
	New Web Orders ::<a href="unread_web_order.php">show</a>
	<p style="color: red;"><?php  echo $row['COUNT(*)'];?></p>
	<?php } ?>
				
			</td>

</tr>
<tr>
			<th><h4>Agent Request</h4></th>
			<th><h4>All Agent</h4></th>


</tr>
<tr>
			
<td>
<?php
			$ret=mysqli_query($con," SELECT COUNT(*) FROM agents");
while ($row=mysqli_fetch_array($ret)) {
	?>
	<a href="request_agent.php">show</a>
	<p style="color: red;"><?php  echo $row['COUNT(*)'];?></p>
	<?php } ?>

</td>
<td>
				<?php
			$ret=mysqli_query($con," SELECT COUNT(*) FROM agent");
while ($row=mysqli_fetch_array($ret)) {
	?>
	<a href="view_all_agent.php">show</a>
	<p style="color: red;"><?php  echo $row['COUNT(*)'];?></p>
	<?php } ?>
</td>

</tr>
<tr>
		<th>
			<h4>customer account</h4>
				<?php
			$ret=mysqli_query($con," SELECT COUNT(*) FROM customer");
while ($row=mysqli_fetch_array($ret)) {
	?>
	<a href="view_all_customer.php">show</a>
	<p style="color: red;"><?php  echo $row['COUNT(*)'];?></p>
	<?php } ?>
		</th>
	<th>
		<h4>All orders</h4>
		<?php
			$ret=mysqli_query($con," SELECT COUNT(*) FROM web_order");
while ($row=mysqli_fetch_array($ret)) {
	?>
	<a href="">show</a>
	<p style="color: red;"><?php  echo $row['COUNT(*)'];?></p>
	<?php } ?>
	</th>
</tr>
<tr>
			<?php
			$ret=mysqli_query($con," SELECT COUNT(*) FROM report");
while ($row=mysqli_fetch_array($ret)) {
	?>
	<td><a href="agent_report.php">Report<p style="color: red;"><?php  echo $row['COUNT(*)'];}?></p></a></td>
</tr>
	</table>
    	<!-- <iframe src="open_web_order.php" width="100%" height="600px" style="scroll-behavior: none;"></iframe> -->
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