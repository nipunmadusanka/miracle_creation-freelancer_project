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
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/home.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"></head>
<body id="top">
<?php } ?>
<?php 
include_once('include/admin_menubar.php');
 ?>
<div class="main">
	<div class="innerr">
		
		<div class="thumbnails" style="padding-top: 5em;">
      <div class="box wow fadeInDown">
        <div class="inner">
                <form name="search" action="search_customer.php" method="post">
                                <input type="text" name="searchdata" placeholder="Search by names, mobile number, city, id..." />
                                <button type="submit"name="search" class="button fit" title="Register">search</button>
                              </form>
        </div>
      </div>
			<div class="box wow fadeInUp" style="width: 85%;">

				<div class="inner">


  <?php

	$ret=mysqli_query($con,"select * from  customer");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?><table border="1" style="border-width: 10px; border-color: red;">
      <tr>
    <td>User <?php echo $cnt; ?> </td>
  </tr>
      <tr>
    <th>User ID</th>
    <th>User Name</th>
    <th>Mobile Number</th>
    <th>Address</th>
    <th>Live City</th>
    <th>Email or Description</th>
    <th>Date</th>
    <th>Term & Condition</th>

    <th></th>
     </tr>
     <tr>
      <div class="inner">
    <div class="box" style="width: 80px;"> <td> <?php echo $row['ID'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['name'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['contact_number'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['address'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['city'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['email'];?></td></div>
      <div class="box" style="width: 80px;"><td><?php  echo $row['today'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['terms'];?></td></div>
  </div>

    <td> 
    <a href="delete_customer.php?cusid=<?php echo $row['ID'];?>" title="Remove" target="_blank"><button>Remove</button></a>

</td>
    </tr>
 
</table>
<?php $cnt=$cnt+1;}?>
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