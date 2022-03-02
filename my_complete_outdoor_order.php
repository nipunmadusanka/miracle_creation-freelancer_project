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
  <title>My Outdoor Order || <?php  echo $row['name'];?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/home.css" >
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"></head>

<body id="top" style="background-color: gray;">
<?php } ?>
<?php 
include_once('include/customer_menubar.php');
 ?>
<div class="main">
  <div class="inner" style="padding-top: 10em;">
     <center><h2>My Outdoor Order</h2> </center> 
    <div class="thumbnails">
      <div class="content">
       <div class="thumbnails1" style="width: 70%;background-color: white;">

      <?php 
$ret=mysqli_query($con," SELECT * FROM  outdoor_order WHERE agent_read ='read' && user_id='$cid'");
while ($row=mysqli_fetch_array($ret)) {
?>
 <div class="box2 wow fadeInDown" style="background-color: #0c0514;text-align: none;">
        <div class="inner">
          <div class="content">
            <div class="leftt">
 <h4>Complete Order</h4>         
  
<p>
 Order ID :
<i style="color: white;"><?php  echo $row['ID'];?></i>
</p>
<p>
 Order Date :
<i style="color: white;"><?php  echo $row['created'];?></i>
</p>
<p>
  Required Date :
<i style="color: white;"><?php  echo $row['required_date'];?></i>
</p> 
<p>
  Payment Method :
<i style="color: white;"><?php  echo $row['payment'];?></i>
</p>
<p>
  Order Type :
<i style="color: white;"><?php  echo $row['order_type'];?></i>
</p>
<p>
  Order Description :
<i style="color: white;"><?php  echo $row['description'];?></i>
</p>
<p>
  Order Status :
<i style="color: white;"><?php  echo $row['status_of_the_project'];?></i>
</p>
<p>
  Phone Number :
<i style="color: white;"><?php  echo $row['telephone'];?></i>
</p>
<p>
Complete :
<?php  $x=$row['agent_read'];
    if ($x=='read') {
      echo "YES";
    }
    else{
      echo "NO";
    }
    ?>
</p>
</div>
<div class="rightt">
<p>
this order if you are any problem<br>
contact page admin :- <a href="tel:0786880038">0786880038</a>
</p>
<p>
  Agent Message :
<i style="color: white;"><?php  echo $row['agent_msg'];?></i><br>
<i>
 My Message :
<i style="color: white;"><?php  echo $row['msg'];?></i>
</i>
</p>
</div>  
</div>
</div>
</div>
<?php } ?>
  </div>
  <div class="rightt" style="background-color: black;">
<div class="box2" >
  <p>Send Message To Agent</p>
              <?php if(isset($_POST['submit'])){
 $msg=$_POST['msg'];
 $id=$_POST['id'];
$query=mysqli_query($con,"update outdoor_order set msg='$msg' where agent_read ='read' && user_id='$cid' && ID='$id'");
if($query){
echo "<script>alert('successfully changed');</script>";
} } ?>
<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
  <label>Your Order ID</label>
  <input type="text" name="id">
  <label>Your Message</label>
  <input type="text" name="msg">
  <button type="submit" name="submit" title="send">Send</button>
</form>
        <?php 
$ret=mysqli_query($con," SELECT * FROM outdoor_order WHERE agent_read ='read' && user_id='$cid' && ID='$id'");
if ($row=mysqli_fetch_array($ret)) {
?>
<i>Order Id:</i>
<i style="color: white;"><?php  echo $id?></i><br>
  <i>
 Agent Message :
<i style="color: white;"><?php  echo $row['agent_msg'];?></i>
</i><br>
<i>
 Your Message :
<i style="color: white;"><?php  echo $row['msg'];?></i>
</i> 
  <?php } ?>
<br><br><p>Show Message For Selected Id</p>
  <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
  <label>Enter Order ID</label>
  <input type="text" name="id1">
  <button type="submit" name="submit1" title="send">Show</button>
</form>
               <?php if(isset($_POST['submit1'])){
 $id1=$_POST['id1'];
$ret=mysqli_query($con," SELECT * FROM outdoor_order WHERE agent_read ='read' && user_id='$cid' && ID='$id1'");
if ($row=mysqli_fetch_array($ret)) {
?>
<i>Order Id:</i>
<i style="color: white;"><?php  echo $id1?></i><br>
  <i>
 Agent Message :
<i style="color: white;"><?php  echo $row['agent_msg'];?></i>
</i><br>
<i>
 Your Message :
<i style="color: white;"><?php  echo $row['msg'];?></i>
</i> 
<?php } } ?>
</div>
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
