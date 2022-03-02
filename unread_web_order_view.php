           
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
    if(isset($_GET['ok']))
  {
    $ID=$_GET['ok'];
 $que=mysqli_query($con,"update web_order set order_read='read' where  ID='$ID' ");
    if ($que) {
  echo "<script>alert('successfully action');</script>";
  }
  else
    {
      echo "Oops";
    }  
}
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
  <title>Unreaded Web Orders || <?php  echo $row['Name'];?></title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/home.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
</head>
<body id="top">
<?php }?>
  <?php 
include_once('include/admin_menubar.php');
 ?>
  
                <div class="main">
  <div class="inner" style="padding-top: 10em;">
     <center><h2>Unreaded Web Orders</h2> </center> 
    <div class="thumbnails">
      <div class="content">
       <div class="thumbnails1" style="width: 70%;">

                <table border="1" class="mg-b-0" style="background-color: gray;">
                   <?php
$id=$_GET['id'];
$ret=mysqli_query($con,"select * from web_order where ID='$id'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
  ?>
  <tr>
<th>ID</th>
<td><?php  echo $row['ID'];?></td>
</tr>
<tr>
<th>Name</th>
<td><?php  echo $row['name'];?></td>
</tr>
<tr>
<th>Email</th>
<td><?php  echo $row['email'];?></td>
</tr>
<tr>
<th>C_number</th>
<td><?php  echo $row['mobile'];?></td>
</tr>
<tr>
<th>City</th>
 <td><?php  echo $row['city'];?></td>
</tr>
<tr>
<th>Package</th>
<td><?php  echo $row['package'];?></td>
</tr>
<tr>
<th>Why_Need_a_Website</th>
 <td><?php  echo $row['why_need_a_website'];?></td>
</tr>
<tr>
<th>Description</th>
<td><?php  echo $row['brief_description'];?></td>
</tr>
<tr>
<th>Payment</th>
<td><?php  echo $row['payment'];?></td>
</tr>
<tr>
<th></th>
<td><?php  echo $row['order_read'];?></td>
</tr>
<tr>
<th>date</th>
<td><?php  echo $row['date'];?></td>
 </tr>  
   <tr>
 <td>     <!--  -->
<a href="unread_web_order.php?ok=<?php echo $row['ID'];?>"><button style="background-color: rgba(100, 30, 250, 0.7);width: 6em;"title="complete">Complete</button></a>
</td>
</tr>
<?php } ?>
</table>
</div>
  <div class="rightt" style="background-color: black;margin-bottom: 2em;">
<div class="box2" >
  <p>Send Message To User</p>
              <?php if(isset($_POST['submit'])){
 $msg=$_POST['msg'];
$id=$_GET['id'];
$query=mysqli_query($con,"update web_order set a_msg='$msg' where order_read ='' && ID='$id'");
if($query){
echo "<script>alert('ok');</script>";
} } ?>
<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
  <label>Your Message</label>
  <textarea type="text" name="msg"></textarea>
  <button type="submit" name="submit" title="send">Send</button>
</form>
        <?php 
$ret=mysqli_query($con," SELECT * FROM web_order WHERE order_read ='' && ID='$id'");
if ($row=mysqli_fetch_array($ret)) {
?>
<i>Order Id:</i>
<i style="color: white;"><?php  echo $id?></i><br>
  <i>
 Admin Message :
<i style="color: white;"><?php  echo $row['a_msg'];?></i>
</i><br>
<i>
 User Message :
<i style="color: white;"><?php  echo $row['u_msg'];?></i>
</i> 
  <?php } ?>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- </div> -->
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