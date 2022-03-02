           
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
     <div class="thumbnails" style="padding-top: 5em;">
              <div class="box wow fadeInDown" style="background-color: rgba(255, 255, 255, 0.2);">
              <div class="inner">
              <form name="search" action="" method="post">
              <input type="text" name="searchdata" style="background-color: rgba(15, 15, 15, 0.4);" placeholder="Search by names, city, ID, email..." />
              <button type="submit"name="search" class="button fit" title="search" style="opacity: 90%;">search</button>
              </form>
              </div>
              </div>
            </div>
    <div id="main">

          <div class="inner">
              <center><h2>Unreaded Web Orders</h2></center>
              <div class="thumbnails wow fadeInUp" style="padding-top: 5em;">
                <table border="1" class="mg-b-0" style="background-color: gray;">
<th>ID</th>
<th>User ID</th>
<th>Name</th>
<th>Email</th>
<th>C_number</th>
<th>City</th>
<th>Package</th>
<th>Why_Need_a_Website</th>
<th>Description</th>
<th>Payment</th>
<th></th>
<th>date</th>
 <?php
if(isset($_POST['search']))
{
  $sdata=$_POST['searchdata'];
          ?>
   <div class="box">  
  <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4>
  </div>
          <?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];

$ret=mysqli_query($con,"select * from  web_order where order_read ='' and (email like '$sdata%'||ID like '$sdata%'||name like '$sdata%'||city like '$sdata%')");
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
    <td><?php  echo $row['user_id'];?></td>
    <td><?php  echo $row['name'];?></td>
    <td><?php  echo $row['email'];?></td>
    <td><?php  echo $row['mobile'];?></td>
    <td><?php  echo $row['city'];?></td>
    <td><?php  echo $row['package'];?></td>
    <td><?php  echo $row['why_need_a_website'];?></td>
    <td><?php  echo $row['brief_description'];?></td>
    <td><?php  echo $row['payment'];?></td>
    <td><?php  echo $row['order_read'];?></td>
    <td><?php  echo $row['date'];?></td>
 <td>     <!--  -->
<a href="unread_web_order.php?ok=<?php echo $row['ID'];?>"><button style="background-color: rgba(100, 30, 250, 0.7);width: 6em;"title="complete">Complete</button></a><br>
<a href="unread_web_order_view.php?id=<?php echo $row['ID'];?>" target=_blank><button style="background-color: rgba(90, 130, 50, 0.7);width: 6em;"title="View">View</button></a>
</td>
</tr>
<?php $cnt=$cnt+1;?>
<?php } } } else { ?>
    <?php
 // $eid=$_SESSION['adid'];

$ret=mysqli_query($con,"select * from  web_order where order_read =''");
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
    <td><?php  echo $row['user_id'];?></td>
    <td><?php  echo $row['name'];?></td>
    <td><?php  echo $row['email'];?></td>
    <td><?php  echo $row['mobile'];?></td>
    <td><?php  echo $row['city'];?></td>
    <td><?php  echo $row['package'];?></td>
    <td><?php  echo $row['why_need_a_website'];?></td>
    <td><?php  echo $row['brief_description'];?></td>
    <td><?php  echo $row['payment'];?></td>
    <td><?php  echo $row['order_read'];?></td>
    <td><?php  echo $row['date'];?></td>
 <td>     <!--  -->
<a href="unread_web_order.php?ok=<?php echo $row['ID'];?>"><button style="background-color: rgba(100, 30, 250, 0.7);width: 6em;"title="complete">Complete</button></a><br>
<a href="unread_web_order_view.php?id=<?php echo $row['ID'];?>" target=_blank><button style="background-color: rgba(90, 130, 50, 0.7);width: 6em;"title="complete">View</button></a>
</td>
</tr>
<?php $cnt=$cnt+1; } }?>
</table>
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