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
  <title>report || <?php  echo $row['Name'];?></title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/home.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
</head>
<body id="top">
  <?php 
include_once('include/admin_menubar.php');
 }?>
 <div id="main">

          <div class="inner">
    <center><h2>report</h2></center>
  <div class="thumbnails wow fadeInUp" style="padding-top: 5em;">

    <table>
      <tr>
        <th></th>
        <th>Rport Id</th>
        <th>Agent Id</th> 
        <th>User Name</th>
        <th>date</th>
        <th></th> 

      </tr>
      <?php
$eid=$_SESSION['adid'];
$ret=mysqli_query($con,"select * from  report order by ID DESC ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>
      <tr>
        <td>NO:- <?php  echo $cnt;?></td>
        <td><?php  echo $row['ID'];?></td>
        <td><a href="delete_agent.php?agid=<?php  echo $row['agent_id'];?>"><?php  echo $row['agent_id'];?></a></td>
        <td><?php  echo $row['u_name'];?></td>
        <td><?php  echo $row['date'];?></td>
        <td><a href="report_view.php?id=<?php  echo $row['ID'];?>">view</a></td>
      </tr>

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