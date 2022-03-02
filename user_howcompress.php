<?php
session_start();
error_reporting(0);
include_once('include/connection.php');
error_reporting(0);
if (strlen($_SESSION['cuid']==0)) {
  header('location:logout.php');
  } else{ 
?>
  <?php
 $cid=$_SESSION['cuid'];
$ret=mysqli_query($con,"select * from  customer where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>miracle creation || <?php  echo $row['name'];?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/home.css" >
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"></head>
<body id="top">
	<?php } ?>

<div class="main">
	<div class="innerr" style="padding-top: 100px;">
		<center><h1>how to compressed my all file</h1></center>
		<div class="box">
			<h2>Step 01</h2>
			<p>Go to Your Folder</p>
			<img src="images/how compress/1.png" alt="" width="1000px" height="500px"/><br>
			<h2>Step 02</h2>
			<p>Select Your all Files</p>
			<img src="images/how compress/2.png" alt="" width="1000px" height="300px"/>
			<h2>Step 03</h2>
			<p>Right Click</p>
			<img src="images/how compress/3.png" alt="" width="1000px" height="700px"/>
			<h2>Step 04</h2>
			<p>Click to "Send To"<p>
			<img src="images/how compress/4.png" alt="" width="1000px" height="700px"/>
			<h2>Step 05</h2>
			<p>Then Click to "Compressed (zipped) folder"<p>
			<img src="images/how compress/5.png" alt="" width="1000px" height="700px"/>
			<h2>Step 06</h2>
			<p>Then Create New Zipped file. Rename It<p>
			<img src="images/how compress/6.png" alt="" width="1000px" height="700px"/>
			<h2>Step 07</h2>
			<p>After Rename<p>
			<img src="images/how compress/7.png" alt="" width="1000px" height="300px"/>
			<h2>Step 08</h2>
			<p>You Can Upload Now Only Zip file<p>
			<img src="images/how compress/8.png" alt="" width="1000px" height="400px"/>
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
</body>
</html>
	<?php } ?>