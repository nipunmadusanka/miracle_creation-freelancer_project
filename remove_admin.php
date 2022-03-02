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
    <link rel="stylesheet" href="assets/css/home.css" >
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"></head>
<body id="top">
<?php }?>
<?php 
include_once('include/admin_menubar.php');
 ?>

<div class="main">
  <div class="innerr">
   
<div class="thumbnails" style="padding-top: 8em;">
          <div class="box wow fadeInUp" style="width: 85%;">
        <div class="inner">
        <?php

  $ret=mysqli_query($con,"select * from  admin");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?><table border="1" style="border-width: 10px; border-color: red;">
    <tr>
    <td>Admin <?php echo $cnt; ?> </td>
  </tr>
      <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
    <th></th>
     </tr>
     <tr>
      <div class="inner">
    <div class="box" style="width: 80px;"> <td> <?php echo $row['ID'];?></td></div>
    <div class="box" style="width: 80px;"> <td> <?php echo $row['Name'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['Email'];?></td></div>
  </div>
    
    
    <td> 
    <a href="delete_admin.php?readid=<?php echo $row['ID'];?>" title="view" target="_blank"><button>Remove</button></a>
       <?php
     if (isset($_GET['editid'])) {
      # code... $eid=$_GET['editid'];
$id=$_GET['editid'];
  $ret=mysqli_query($con,"DELETE FROM `miracle`.`admin` WHERE `admin`.`ID` = '$id' ");
if($query){
echo "<script>alert('Remove successfully');</script>";
} } ?>
</td>
    </tr>
 
</table>

<?php 
$cnt=$cnt+1;

}?>
    
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
