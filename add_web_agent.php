<?php
session_start();
error_reporting(0);
include_once('include/connection.php');
error_reporting(0);
if (strlen($_SESSION['adid']==0)) {
  header('location:logout.php');
  } else{ 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>miracle creation</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/home.css" >
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"></head>

<body id="top">

<div class="main">
  <div class="innerr">
    
    <div class="thumbnails" style="padding-top: 5em;">
      <div class="box wow fadeInUp" style="width: 55%;">
        <div class="inner">
<p>Add New WEB Agent</p>
       <?php
     if (isset($_GET['reqid'])) {
      # code... $eid=$_GET['editid'];
$id=$_GET['reqid'];
$ret=mysqli_query($con,"select * from  agents where ID='$id'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?><table border="1" class="mg-b-0">
                                            <tr>
    <th>ID</th>
    <td><?php  echo $row['ID'];?></td>
  </tr>
                                            <tr>
    <th>User Name</th>
    <td><?php  echo $row['username'];?></td>
  </tr>
   <tr>
    <th>Email</th>
    <td><?php  echo $row['email'];?></td>
  </tr>

  <tr>
    <th>Mobile Number</th>
    <td><?php  echo $row['mobilenumber'];?></td>
  </tr>
  <tr>
    <th>Address</th>
    <td><?php  echo $row['address'];?></td>
  </tr>
  <tr>
    <th>Live City</th>
    <td><?php  echo $row['livecity'];?></td>
  </tr>
   <tr>
    <th>Selected Job</th>
    <td><?php  echo $row['job_list'];?></td>
  </tr>
  <tr>
    <th>Studying</th>
    <td><?php  echo $row['studying'];?></td>
  </tr>
  <tr>
    <th>Description</th>
    <td><?php  echo $row['description'];?></td>
  </tr>
  <tr>
    <th>Date</th>
    <td><?php  echo $row['createdate'];?></td> 
  </tr>
   <tr>
    <th>T&C</th>
    <td><?php  echo $row['tatc'];?></td> 
  </tr>

  <tr>
    <th>Profile Picture</th>
           <td>
      <img src="uploads/agent profile/<?php echo $row['profile'];?>" height="110" width="150"/>
    </td>
  </tr>
   <tr>
    <th>Work Picture Or Screenshot</th>
    <td>
      <img src="uploads/agent work/<?php echo $row['workimg'];?>" height="110" width="150"/>
    </td>
  </tr> 


</table>   
<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
            <button style="background-color: rgba(100, 30, 250, 0.7);width: 6em;" type="submit" name="submit" title="Add now">Add</button></form>
        </div>
      </div>
    </div>
  </div>     
   <?php } }?>   
    <!-- Footer -->
   
 
  <script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/dropdown.js"></script> 
<script src="assets/js/timeout.js"></script> 
</body>
</html>
<?php
    if(isset($_POST['submit']))
  {

$id=$_GET['reqid'];
 $query=mysqli_query($con,"INSERT INTO agent(request_ID,username,email,mobilenumber,address,livecity,job_list,web_devolp,studying,description,password,profile,work,createdate,terms)
  SELECT ID,username,email,mobilenumber,address,livecity,job_list,'yes',studying,description,password,profile,workimg,createdate,tatc FROM agents WHERE ID='$id' ");
    if ($query) {
  echo "<script>alert('add successfully agent');</script>";
   $delete=mysqli_query($con,"DELETE FROM `miracle`.`agents` WHERE `agents`.`ID` = '$id' ");
  // header('location:admin_dashboard.php');
  }


  else
    {
      echo "Oops";
    }


}
?>
       <?php
     if (isset($_GET['reqid'])) {
      # code... $eid=$_GET['editid'];
$id=$_GET['reqid'];
$ret=mysqli_query($con,"select * from  agent where request_ID='$id'");
$cnt=1;
if ($row=mysqli_fetch_array($ret)) {
$a_id=$row['ID'];
} }
$date=@date('Y-m-d H:i:s');
 $msg=mysqli_query($con,"insert into agent_inbox(agent_id,msg,date) value('$a_id','You Are Now New Web Developer','$date') ");
?>

<?php }  ?>

