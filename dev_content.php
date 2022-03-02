<?php
include_once('include/connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>miracle creation || <?php $job=$_GET['editid']; echo $job;?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/home.css" >
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"></head>
<body id="top" style="background-image: url('images/dev.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
<?php 
include_once('include/menubar.php');
 ?>


<?php
$eid=$_GET['editid'];
if('Software Developer'==$eid || 'Android/iOS App Developer'==$eid || 'Electronic Project Developer'==$eid || 'POS Billing System'==$eid || 'private project'==$eid || 'Arduino Project'==$eid || 'Other Micro controller Project'==$eid || 'Hobby Electronics project'==$eid || 'School project'==$eid){
?>
   <div class="thumbnails" style="padding-top: 5em;">
              <div class="box wow fadeInDown" style="background-color: rgba(255, 255, 255, 0.2);">
              <div class="inner">
              <form name="search" action="" method="post">
              <input type="text" name="searchdata" style="background-color: rgba(15, 15, 15, 0.4);" placeholder="Search by names, city, education..." />
              <button type="submit"name="search" class="button fit" title="search" style="opacity: 90%;">search</button>
              </form>
              </div>
              </div>
            </div>
      
        <div class="inner">
          <div class="thumbnails"><h2>Hire the Best <?php echo $eid; ?></h2></div>
           <div class="thumbnails">
          
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

$ret=mysqli_query($con,"select *from agent where job_list like '%$eid%' and (username like '$sdata%'||studying like '$sdata%'||livecity like '$sdata%') order by rating DESC");
$num=mysqli_num_rows($ret);
if($num>0){
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
 <div class="agent_box">
    <div class="cont">
    <div class="content" style="padding-top: 12px;">
    <div class="form" style=" width: 30%;">
    <div class="inner">
                
               <img src="uploads/agent profile/<?php echo $row['profile'];?>" height="85" width="120"/> 
             </div>
              </div>
                <div class="info"  style=" width: 70%;">
                <table>
                <tr><th>Name    </th><td><i><?php  echo $row['username'];?></i></td></tr> 
                <tr><th>About Me  </th><td><i><?php  echo $row['description'];?></i></td></tr>
                <tr><th>Education  </th><td><i><?php  echo $row['studying'];?></i></td></tr>
                <tr><th>Job List  </th><td><i><?php  echo $row['job_list'];?></i></td></tr>
                <tr><th>Rating </th><td>
                  <?php 
$sum=$row['rating'];
if ($sum=='5') {
  ?>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<?php
}elseif ($sum=='4') {
  ?>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<?php
}elseif ($sum=='3') {
  ?>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<?php
}elseif ($sum=='2') {
  ?>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<?php
} else {
  ?>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<?php } ?>
                </td></tr>
                </table>
                <tr><th>Intrested In </th><a href="dev_order.php?select=<?php echo $row['ID'];?>"><td><button class="button" style="background-color: rgba(67, 89, 145, 0.9);">Yes</button></a></td></tr>
                 <!-- -->
                 
               </div>
              </div>
            </div>
          </div>

                 <?php
                $cnt=$cnt+1;
} } else {
echo '<div class="box"><p> No record found again this search</p></div>';
 } }?>
 <?php } else {?> 
<!--  ?????????????????///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 -->

<?php
 $eid=$_GET['editid'];
$ret=mysqli_query($con,"select *from agent where job_list like '%$eid%' order by rating DESC");
$num=mysqli_num_rows($ret);
if($num>0){
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

              
    <div class="agent_box">
    <div class="cont">
    <div class="content" style="padding-top: 12px;">
    <div class="form" style=" width: 30%;">
    <div class="inner">
                
            	<img src="uploads/agent profile/<?php echo $row['profile'];?>" height="85" width="120"/>
                 </div>
                </div>

                <div class="info"  style=" width: 70%;">
                <table>
                <tr><th>Name    </th><td><i><?php  echo $row['username'];?></i></td></tr> 
                <tr><th>About Me  </th><td><i><?php  echo $row['description'];?></i></td></tr>
                <tr><th>Education  </th><td><i><?php  echo $row['studying'];?></i></td></tr>
                <tr><th>Job List  </th><td><i><?php  echo $row['job_list'];?></i></td></tr>
                <tr><th>Rating </th><td>
                  <?php 
$sum=$row['rating'];
if ($sum=='5') {
  ?>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<?php
}elseif ($sum=='4') {
  ?>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<?php
}elseif ($sum=='3') {
  ?>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<?php
}elseif ($sum=='2') {
  ?>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<?php
} else {
  ?>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<?php } ?>
                </td></tr>
                </table>
                <tr><th>Intrested In </th><a href="dev_order.php?select=<?php echo $row['ID'];?>"><td><button class="button" style="background-color: rgba(67, 89, 145, 0.9);">Yes</button></a></td></tr>
                 <!-- -->
                 
               </div>
              </div>
            </div>
          </div>

                 <?php
                $cnt=$cnt+1;
} } else { ?>
   <p> No record found again this search</p>
 <?php } ?>

   <?php } ?>
</div>
</div>

<?php } else { } ?>

			
 		<!-- Footer -->
		<?php include_once('include/footer.php'); ?>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>
