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
  <title>Change My Details || <?php  echo $row['name'];?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/home.css" >
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"></head>
<body id="top">
<?php }?>
<?php 
include_once('include/customer_menubar.php');
 ?>
<div class="main">

  <div class="thumbnails  wow fadeInUp" style="padding-top: 5em;">
      <div class="box" style="width: 70%;">
        <p>Change My Details</p>
        <div class="inner">


  <?php
 $cid=$_SESSION['cuid'];
$ret=mysqli_query($con,"select * from  customer where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?><table class="mg-b-0">
                                            <tr>
    <th>User Name</th>
    <td><?php  echo $row['name'];?></td>
    <td>
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
      <input type="text" name="username"><button type="submit" name="submit1">Change User Name</button>
    </form>
         <?php if(isset($_POST['submit1'])){
 $username=$_POST['username'];
$query=mysqli_query($con,"update customer set name='$username' where  ID='$cid' ");
if($query){
echo "<script>alert('username successfully changed');</script>";
} } ?>

<tr>
    <th>Mobile Number</th>
    <td><?php  echo $row['contact_number'];?></td>
           <td>
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
      <input type="text" name="mobilenumber"><button type="submit" name="submit3">Change Mobile Number</button>
    </form>
        <?php if(isset($_POST['submit3'])){
 $contact_number  =$_POST['mobilenumber'];
$query=mysqli_query($con,"update customer set contact_number='$contact_number' where  ID='$cid' ");
if($query){
echo "<script>alert('mobilenumber successfully changed');</script>";
} } ?>
  </td>
  </tr>

  <tr>
    <th>Address</th>
    <td><?php  echo $row['address'];?></td>
           <td>
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
      <input type="text" name="address"><button type="submit" name="submit4">Change Address</button>
    </form>
            <?php if(isset($_POST['submit4'])){
 $address=$_POST['address'];
$query=mysqli_query($con,"update customer set address='$address' where  ID='$cid' ");
if($query){
echo "<script>alert('address successfully changed');</script>";
} } ?>

 <tr>
    <th>City</th>
    <td><?php  echo $row['city'];?></td>
           <td>
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
      <input type="text" name="city"><button type="submit" name="submit5">Change Live City</button>
    </form>
                <?php if(isset($_POST['submit5'])){
 $livecity=$_POST['city'];
$query=mysqli_query($con,"update customer set city='$livecity' where  ID='$cid' ");
if($query){
echo "<script>alert('city successfully changed');</script>";
} } ?>
  </td>
  </tr>

  </td>
  </tr>
   <tr>
    <th>Email</th>
    <td><?php  echo $row['email'];?></td>
       <td>
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
      <input type="text" name="email"><button type="submit" name="submit2">Change Email</button>
    </form>
    <?php if(isset($_POST['submit2'])){
 $email=$_POST['email'];
$query=mysqli_query($con,"update customer set email='$email' where  ID='$cid' ");
if($query){
echo "<script>alert('email successfully changed');</script>";
session_destroy();
} } ?>
  </td>
  </tr>



<!--  -->
  
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