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
    <section class="navbar navbar-fixed-top custom-navbar" role="navigation">
  <div class="container">
    <div class="navbar-header">

     <span class="navbar-brand"><!-- MIRACLE CREATION -->
miracle creation
     </span>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
          <li><a href="user_index.php"> Home</a></li>
          <li><a href="customer_dashboard.php" class="fa fa-bookmark">Dashboard</a></li>
        <li>
          <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM dev_order WHERE agent_read ='' && user_id='$cid' ");
while ($row=mysqli_fetch_array($ret)) {

 $dev_count=$row['COUNT(*)'];
} ?>
          <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM normal_order WHERE agent_read ='' && user_id='$cid' ");
while ($row=mysqli_fetch_array($ret)) {

 $normal_count=$row['COUNT(*)'];
} ?>
          <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM outdoor_order WHERE agent_read ='' && user_id='$cid' ");
while ($row=mysqli_fetch_array($ret)) {

 $outdoor_count=$row['COUNT(*)'];
} ?>
          <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM web_order WHERE  order_read ='' && user_id='$cid' ");
while ($row=mysqli_fetch_array($ret)) {

 $web_count=$row['COUNT(*)'];
} ?>

<?php
$pending_count=$dev_count+$normal_count+$outdoor_count+$web_count;
?>
          <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM dev_order WHERE agent_read ='read' && user_id='$cid' ");
while ($row=mysqli_fetch_array($ret)) {

 $c_dev_count=$row['COUNT(*)'];
} ?>
          <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM normal_order WHERE agent_read ='read' && user_id='$cid' ");
while ($row=mysqli_fetch_array($ret)) {

 $c_normal_count=$row['COUNT(*)'];
} ?>
          <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM outdoor_order WHERE agent_read ='read' && user_id='$cid' ");
while ($row=mysqli_fetch_array($ret)) {

 $c_outdoor_count=$row['COUNT(*)'];
} ?>
          <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM web_order WHERE agent_read ='read' && user_id='$cid' ");
while ($row=mysqli_fetch_array($ret)) {

 $c_web_count=$row['COUNT(*)'];
} ?>

<?php
$Complete_count=$c_dev_count+$c_normal_count+$c_outdoor_count+$c_web_count;
$count=$Complete_count+$pending_count;
?>
<a onclick="user_order()" class="dropbtn fa fa-user">My Orders<?php echo $count;?></a>
<div class="dropdown" style="max-width: 40em;">
<div id="user_order" class="dropdown-content  wow">

<a href="my_order.php">Pending Complete <?php echo $pending_count;?></a>
<a href="complete_my_order.php">Complete Order <?php echo $Complete_count;?></a>
  </div>
</div>
          </li>

<!--  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////       
        --> 
         <?php
 $cid=$_SESSION['cuid'];
$ret=mysqli_query($con,"select * from  customer where ID='$cid'");
while ($row=mysqli_fetch_array($ret)) {
?>
          <li><a onclick="myFunction()" class="dropbtn"><?php  echo $row['name'];?><i class="fa  fa-chevron-down"></i></a>

<!--             <a href="#main" class="more smoothScroll" title="අපගේ සේවාවන් ">Our Services</a>
 --><div class="dropdown">
 <!--  <button >Dropdown</button>
  --> <div id="myDropdown" class="dropdown-content  wow fadeInDown">
   <!--  <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    -->
    <img src="uploads/user/user profile/<?php echo $row['profilepic']; ?>" class="avaterimage"/>
     <a href="#"><?php  echo $row['name'];?></a>
     
     
    <a href="customer_change_info.php" class="fa fa-cogs">Update Details</a>
    <a href="customer_change_password.php" class="fa fa-gear">Change Password</a>
    <a  href="logout.php" class="fa fa-power-off">Logout</a>
  </div>
</div>
        </li>

        </ul>
    </div>
  </div>

</section>
<?php } } } ?>

