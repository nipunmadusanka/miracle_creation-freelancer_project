           
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
    if(isset($_POST['submit']))
  {
$ID=$row['ID'];
 $queri=mysqli_query($con,"INSERT INTO order(name,city,package)
  SELECT name,city,package FROM web_order WHERE  ID='$ID'");
    if ($queri) {
  echo "<script>alert('add successfully agent');</script>";
  }


  else
    {
      echo "Oops";
    }
    $que=mysqli_query($con,"update web_order set read='read' where  ID='$ID' ");
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
  <title>Readed Web Orders || <?php  echo $row['Name'];?></title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/home.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
</head>
<body id="top" style="">
<?php }?>
  <?php 
include_once('include/admin_menubar.php');
 ?>
 <div id="main">

          <div class="inner">
    <center><h2>Old Web Orders</h2></center>
  <div class="thumbnails wow fadeInUp" style="padding-top: 5em;background-color:rgba(14, 90, 78, 0.9);">


 
 <table border="1" class="mg-b-0" >
<th>ID</th>
<th>Name</th>
<th>C_number</th>
<th>City</th>
<th>Package</th>
<th>Why_Need_a_Website</th>
<th>Description</th>
<th>Payment</th>
<th></th>
<th>date</th>
    <?php
 // $eid=$_SESSION['adid'];

$ret=mysqli_query($con,"select * from  web_order where order_read ='read' order by ID DESC");
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
    <td><?php  echo $row['ID'];?></td>
    <td><?php  echo $row['name'];?></td>
    <td><?php  echo $row['mobile'];?></td>
    <td><?php  echo $row['city'];?></td>
    <td><?php  echo $row['package'];?></td>
    <td><?php  echo $row['why_need_a_website'];?></td>
    <td><?php  echo $row['brief_description'];?></td>
    <td><?php  echo $row['payment'];?></td>
    <td><?php  echo $row['order_read'];?></td>
    <td><?php  echo $row['date'];?></td>
  <td>     <!--  -->
<a href="web_order_read_view.php?id=<?php echo $row['ID'];?>" target=_blank><button style="background-color: rgba(90, 130, 50, 0.7);width: 6em;"title="View">View</button></a>
</td>
  <?php $cnt=$cnt+1; } ?>
  </table>

  

</div>
</div>
</div>
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