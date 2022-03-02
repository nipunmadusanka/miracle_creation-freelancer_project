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
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

	<title>miracle creation || <?php $job=$_GET['editid']; echo $job;?> || <?php  echo $row['name'];?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/home.css" >
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"></head>
<body id="top" style="background-image: url('images/content.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
<?php } ?>
<?php 
include_once('include/customer_menubar.php');
 ?>

<?php
$eid=$_GET['editid'];
if('Typing'==$eid || 'Writing'==$eid || 'Data Entry'==$eid || 'Video Editer'==$eid || 'Graphic Designer'==$eid || 'Animation'==$eid || 'Wedding Video Editing'==$eid || 'Home & Family'==$eid || 'Holiday Video Editing'==$eid || 'Travel'==$eid || 'Corporate'==$eid || 'Social Media'==$eid || 'Documentary Video Editing'==$eid || 'Youtube Video Editing'==$eid || 'Interview Video Editing'==$eid || 'Product Video Editing'==$eid || 'Studied Video Editing'==$eid || 'Sports Video Editing'==$eid || 'Artwork'==$eid || 'Card'==$eid || 'Menu Card'==$eid || 'Greeting Card'==$eid || 'Label Design'==$eid || 'Business Card'==$eid || 'Wedding Invitation'==$eid || 'Invitation'==$eid || 'Advertising social media Post'==$eid || 'social media'==$eid || 'logo Design'==$eid || 'Magazine'==$eid || 'Poster Design'==$eid || 'Leaflet'==$eid || 'Template'==$eid || 'Album Cover'==$eid || 'Business Illustration'==$eid || 'Website Illustration'==$eid || 'Other art or illustration'==$eid || 'Academic Writing'==$eid || 'Content Writing'==$eid || 'Assignment Writing'==$eid || 'Journalism Writing'==$eid || 'Blog and Article Writing'==$eid || 'Web Content Writers'==$eid || 'Technical Writers'==$eid || 'Article Writing'==$eid || 'Data Entry'==$eid || 'Copywriting'==$eid || 'Academic Writing'==$eid || 'Content Writing'==$eid || 'Assignment Writing'==$eid || 'Creative Writing'==$eid)
  { ?>
   <div class="thumbnails" style="padding-top: 5em;">

              <div class="box wow fadeInDown" style="background-color: rgba(255, 255, 255, 0.2);">
              <div class="inner">
              <form name="search" action="" method="post">
              <input type="text" name="searchdata" style="background-color: rgba(15, 15, 15, 0.4);" placeholder="Search by names, city, education..." />
              <button type="submit"name="search" class="button fit" title="search" style="opacity: 90%;">search</button>
              </form>
              </div>
              </div>
              <div class="thumbnails" style="background-color: rgba(15, 15, 50, 0.4);">
              <h3>Editing Service Process </h3>

                  <table>
                    <tr>
                  <th>Step 1</th>
                  <th>Step 2</th>
                  <th>Step 3</th>
                  <th>Step 4</th></tr>
<tr>
<td style="color: yellow;">Customer uploads the file & brief </td>
<td style="color: yellow;">The file is edited accordingly & uploaded </td>
<td style="color: yellow;">Customer reviews the file </td>
<td style="color: yellow;">The file is uploaded for easy download</td>
</tr>
<tr><th><i>Please note that you must pre-register for this</i></th></tr>

                  </table>

                </div>
      <div class="box wow fadeInDown" style="width: 85%;background-color: rgba(20, 20, 20, 0.9);">
        <h2>Hire the Best <?php echo $eid; ?></h2>
        <div class="inner">
          <?php
if(isset($_POST['search']))
{
  $sdata=$_POST['searchdata'];
          ?>
                                <div class="thumbnails">  
  <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4>
  </div>
          <table>
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

                <tr>
                  <td><?php echo $cnt;?></td>
              <td> <img src="uploads/agent profile/<?php echo $row['profile'];?>" height="75" width="100"/></td>
                  <td><?php  echo $row['username'];?></td>
                  <td><?php  echo $row['description'];?></td>
                <td><?php  echo $row['studying'];?></td>
                <td><?php  echo $row['job_list'];?></td>
                <td><?php 
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
<?php } ?></td>
                <td><a href="user_select_order.php?select=<?php echo $row['ID'];?>"><div class="inner" style="background-color: rgba(67, 89, 145, 0.9); border-radius: 8px;"><p style="    margin: 0 0 0 0;">select</p></div></a></td>
                 <!-- -->
                </tr>
                <tr>
    


                 <?php
                $cnt=$cnt+1;
} } else {
echo '<td colspan="8"> No record found again this search</td>';
 } }?>
  </tr>
   </table>
 <?php } else {?> 
<!--  ?????????????????///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 -->
 <table>
<?php
 $eid=$_GET['editid'];
$ret=mysqli_query($con,"select *from agent where job_list like '%$eid%' order by rating DESC");
$num=mysqli_num_rows($ret);
if($num>0){
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

              
                <tr>
                  <td><?php echo $cnt;?></td>
            	<td> <img src="uploads/agent profile/<?php echo $row['profile'];?>" height="75" width="100"/></td>
                  <td><?php  echo $row['username'];?></td>
                  <td><?php  echo $row['description'];?></td>
                <td><?php  echo $row['studying'];?></td>
                <td><?php  echo $row['job_list'];?></td>
                <td>
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
<?php } ?></td>
                <td><a href="user_select_order.php?select=<?php echo $row['ID'];?>"><div class="inner" style="background-color: rgba(67, 89, 145, 0.9); border-radius: 8px;"><p style="    margin: 0 0 0 0;">select</p></div></a></td>
                 <!-- -->
                </tr>
                 <?php
                $cnt=$cnt+1;
} } else { ?>
  <tr>
    <td colspan="8"> No record found against this search</td>

  </tr><?php } ?>
   </table>

<?php } ?>
</div>
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
<script src="assets/js/dropdown.js"></script> 
<script src="assets/js/timeout.js"></script> 
</body>
</html>
<?php } ?>