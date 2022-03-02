<?php
session_start();
error_reporting(0);
include_once('include/connection.php');
error_reporting(0);
if (strlen($_SESSION['cvmsaid']==0)) {
  header('location:logout.php');
  } else{ 
?>
    <section class="navbar navbar-fixed-top custom-navbar" role="navigation">
  <div class="container">
    <div class="navbar-header">

     <span class="navbar-brand">
miracle creation
     </span>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="agent_dashboard.php"> Dashboard</a></li>
        
        <li>
          <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM dev_order WHERE agent_read ='' && agent_id='$eid' ");
while ($row=mysqli_fetch_array($ret)) {

 $dev_count=$row['COUNT(*)'];
} ?>
          <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM normal_order WHERE agent_read ='' && agent_id='$eid' ");
while ($row=mysqli_fetch_array($ret)) {

 $normal_count=$row['COUNT(*)'];
} ?>
          <?php 
$ret=mysqli_query($con," SELECT COUNT(*) FROM outdoor_order WHERE agent_read ='' && agent_id='$eid' ");
while ($row=mysqli_fetch_array($ret)) {

 $outdoor_count=$row['COUNT(*)'];
} ?>
<?php
 $agid=$_SESSION['cvmsaid'];
 $ret=mysqli_query($con, "select count(*) from agent_msg where msg_read='' and agent_id='$agid'");
while ($row=mysqli_fetch_array($ret)) {
  $msg_count=$row['count(*)'];
}
  ?>
    <?php
 $agid=$_SESSION['cvmsaid'];
 $ret=mysqli_query($con, "select count(*) from  agent_inbox where msg_read='' and agent_id='$agid'");
while ($row=mysqli_fetch_array($ret)) {
  $inbox=$row['count(*)'];
  }?>
<?php
$count=$msg_count+$dev_count+$normal_count+$outdoor_count+$inbox;
?>
<a onclick="notification_unction()" class="dropbtn">Notification<i class="fa  fa-bell"></i><?php echo $count;?></a>
<div class="dropdown" style="max-width: 40em;">
<div id="notification_myDropdown" class="dropdown-content  wow">
  <a>Notification Bar</a>
<?php
 $agid=$_SESSION['cvmsaid'];
 $ret=mysqli_query($con, "select count(*) from  agent_msg where msg_read='' and agent_id='$agid'");
while ($row=mysqli_fetch_array($ret)) {
  $msg=$row['count(*)'];
  }?>
  <?php
 $agid=$_SESSION['cvmsaid'];
 $ret=mysqli_query($con, "select count(*) from  agent_inbox where msg_read='' and agent_id='$agid'");
while ($row=mysqli_fetch_array($ret)) {
  $inbox=$row['count(*)'];
  }?>
<a href="agent_msg.php">Message Inbox<p style="font-style: normal;font-family: Source Sans Pro;"><?php echo $tmsg=$msg+$inbox; ?></p></a>
<a href="agent_dev_order.php">Development Order <?php echo $dev_count;?></a>
<a href="agent_normal_order.php">Normal Order <?php echo $normal_count;?></a>
<a href="agent_outdoor_order.php">Outdoor Order <?php echo $outdoor_count;?></a>
  </div>
</div>
          </li> 
<!--  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////       
        -->  
 <?php
 $agid=$_SESSION['cvmsaid'];
$ret=mysqli_query($con,"select * from  agent where ID='$agid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>
           <li><a onclick="myFunction()" class="dropbtn"><?php  echo $row['username'];?><i class="fa  fa-chevron-down"></i></a>
<div class="dropdown">
 <!--  <button >Dropdown</button>
  --> <div id="myDropdown" class="dropdown-content  wow fadeInDown">
   <!--  <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    -->
  <img src="uploads/agent profile/<?php echo $row['profile']; ?>" class="avaterimage"/>
     <a href="#"><?php  echo $row['username'];?></a>
    <a href="agent_details.php" class="fa fa-cogs">Update Details</a>
    <a href="agent_change_password.php" class="fa fa-gear">Change Password</a>
    <a href="logout.php" class="fa fa-power-off">Logout</a>
  </div>
</div>
        </li>   
        
         
        </ul>
    </div>
  </div>

</section>
<?php } } ?>
