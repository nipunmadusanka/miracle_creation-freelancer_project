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
                 
    <div class="thumbnails" style="padding-top: 5em;">

          <?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
  ?>
  <div class="box">  
  <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4>
  </div>

                                      <?php
$ret=mysqli_query($con,"select *from agent where username like '$sdata%'||mobilenumber like '$sdata%'||livecity like '$sdata%' || ID like '$sdata%' || job_list like '%$sdata%'");
$num=mysqli_num_rows($ret);
if($num>0){
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>     
<div class="box" style="width: 85%;">

        <div class="inner">
     <table>
      <tr> <td><?php echo $cnt; ?></td></tr>
     
                         <tr>
            <th>User ID</th>
            <th>request_ID</th>
    <th>User Name</th>
    <th>Email</th>
    <th>Mobile Number</th>
    <th>Address</th>
    <th>Live City</th>
    <th>Studying</th>
    <th>Description</th>
    <th>Job List</th>
    <th>Profile Picture</th>

    <th></th>
     </tr>

     <tr>
      <div class="inner">
    <div class="box" style="width: 80px;"> <td> <?php echo $row['ID'];?></td></div>
    <div class="box" style="width: 80px;"> <td> <?php echo $row['request_ID'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['username'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['email'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['mobilenumber'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['address'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['livecity'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['studying'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['description'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['job_list'];?></td></div>
  </div>
    
    <td>
     <img src="uploads/agent profile/<?php echo $row['profile'];?>" height="110" width="150"/>
      <br>
      <img src="uploads/agent work/<?php echo $row['work'];?>" height="110" width="150"/>
    </td>
    <td> 
    <a href="delete_agent.php?agid=<?php echo $row['ID'];?>" title="Remove"><button>Remove</button></a>
</td>
    </tr>
     </div>
      </table>
       </div>
 </div>
                 <?php
                $cnt=$cnt+1;
} } else { ?>
     <table> 
                         <tr>
    <th> No record found against this search</th>
  </tr>
</table>

 

   
<?php } }?>
                                

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
 <?php } ?>                                   
