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
      <div class="box" style="width: 85%;">
        <div class="inner">

          <?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
  ?>
  <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4>
                                      <?php
$ret=mysqli_query($con,"select *from customer where name like '$sdata%'||contact_number like '$sdata%' || city like '$sdata%' || ID like '$sdata%'");
$num=mysqli_num_rows($ret);
if($num>0){
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?><table border="1" style="border-width: 10px; border-color: red;">
  <tr> <td><?php echo $cnt; ?></td></tr>
      <tr>
    <th>User ID</th>
    <th>User Name</th>
    <th>Mobile Number</th>
    <th>Address</th>
    <th>Live City</th>
    <th>Email or Description</th>
    <th>Term & Condition</th>
    <th>R_date</th>

    <th></th>
     </tr>
     <tr>
      <div class="inner">
    <div class="box" style="width: 80px;"> <td> <?php echo $row['ID'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['name'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['contact_number'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['address'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['city'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['email_or_feedback'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['terms'];?></td></div>
    <div class="box" style="width: 80px;"><td><?php  echo $row['today'];?></td></div>
  </div>

    <td> 
    <a href="delete_customer.php?cusid=<?php echo $row['ID'];?>" title="Remove"><button>Remove</button></a>

</td>
    </tr>
 
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
 <?php } ?>                                   
