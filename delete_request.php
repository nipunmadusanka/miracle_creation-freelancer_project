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
			<div class="box wow fadeInUp" style="width: 85%;">

				<div class="inner">


  <?php
     if (isset($_GET['rqid'])) {
      # code... $eid=$_GET['editid'];
$id=$_GET['rqid'];
$ret=mysqli_query($con,"select * from  agents where ID='$id'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?><table border="1" style="border-width: 10px; border-color: red;">
      <tr>
   <th>User ID</th>
    <th>User Name</th>
    <th>Email</th>
    <th>Mobile Number</th>
    <th>Address</th>
    <th>Live City</th>
    <th>Studying</th>
    <th>Description</th>
    <th>Job List</th>
    <th>Term & Condition</th>
    <th>Profile Picture</th>

    <th></th>
     </tr>
     <tr>
      <div class="inner">
    <div class="box" style="width: 80px;"> <td> <?php echo $row['ID'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['username'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['email'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['mobilenumber'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['address'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['livecity'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['studying'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['description'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['job_list'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['tatc'];?></td></div>
  </div>
    
    <td>
      <img src="uploads/agent profile/<?php echo $row['profile'];?>" height="110" width="150"/>
      <br>
      <img src="uploads/agent work/<?php echo $row['workimg'];?>" height="110" width="150"/>
    </td>
    <td> 
  <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
            <button style="background-color: red;width: auto;" type="submit" name="submit" title="Remove">Confirm Remove</button></form>
</td>
    </tr>
 
</table>
<?php
$cnt=$cnt+1; } }?>
</div>
</div>
</div>
</div>
</div>
		    
<?php
    if(isset($_POST['submit']))
  {


 $query=mysqli_query($con,"DELETE FROM `miracle`.`agents` WHERE `agents`.`ID` = '$id' ");
    if ($query) {
echo "<script>alert('Remove successfully');</script>";
  }


  else
    {
      echo "Oops";
    }
}
?>	
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