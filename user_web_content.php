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
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  </head>

<body id="top" style="background-image: url('images/web.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
<?php } ?>
<?php 
include_once('include/customer_menubar.php');
 ?>


<?php
$eid=$_GET['editid'];
// $test = array();
// $test[] = "Website Developer";
// $test[] = "Software Developer";
// $test[] = "Android/iOS App Developer";
// for ($i=0; $i < 3 ; $i++) { 

if('Website Developer'==$eid){
?>

  <!-- <div class="box" style="height: 50%; width: 10%; border-radius: 30px;">
                  <div class="thumbnails" style="padding-top: 5em;">
      <div class="box" style="width: 85%;"> -->
       <div class="thumbnails" style="padding-top: 5em;">
                <div class="inner wow fadeInDown" style="height: 50%;width: 20%;margin: -0.5em;z-index: -2;margin-right: 2px;">
                  <a href="#" class="image fit"><img src="images/plus.png" alt="" /></a>
           
              </div>
                 <div class="inner wow fadeInDown" style="height: 50%;width: 20%;margin: -0.5em;z-index: -2;margin-right: 2px;">
                  <a href="#" class="image fit"><img src="images/pr.png" alt="" /></a>

              </div>
                 <div class="inner wow fadeInDown" style="height: 50%;width: 20%;margin: -0.5em;z-index: -2;margin-right: 2px;">
                  <a href="#" class="image fit"><img src="images/basic.png" alt="" /></a>
           
              </div>

            </div>

             <div class="thumbnails wow bounceIn" style="">
            <div class="box" style="background-color: rgba(160, 20, 20, 0.8);">call now:
<a href="tel:0786880038"><span class="fa fa-phone"></span> 0786880038</a></a>

<a href="user_web_order.php">
<div class="inner" style="background-color: rgba(67, 89, 145, 0.9); border-radius: 8px;">
<p style="margin: 0 0 0 0;">Order Now</p>
</div>
</a>

            </div>
          </div>
             
<!-- <i>Why miracle creation Web Design Sri Lanka?</i>
<h2>WHY YOU MUST SELECT miracle creation WEB DEVELOPMENT IN SRI LANKA</h2>

<h1>WE LISTEN</h1>
<p>You know about your business better than us. So in the very first stage, we collect your exact requirement and we will do a research on our own way to collect more information. Then we select the best solution to satisfy your requirement.</p>

<h1>CREATIVE & TECHNICAL</h1>
<p>miracle creation web design Sri Lanka, we do simple, fresh and unique designs for you. So we will provide market driven, eye catching, and responsive web design for our clients. Static or fully customized CMS available for satisfy your requirement.
</p>
 -->
                 

   <div class="thumbnails wow fadeInUp" style="padding-top: 5em;">
<div style="background-color: rgba(100, 100, 100, 0.6);margin: 80px;"><p ><center style="font-size: 25px;"> You are warmly welcome to miracle creation.We delivering creative and innovative web experiences.</center><br><br>

<center style="font-size: 20px;margin-bottom: 50px;">With extensive experience in website designing and developing. miracle creation web development team, We offers top-quality professional best web designs and web programming services at globally affordable prices. We have one of the best web design team in Sri Lanka to design globally appealing & current technology web sites. We will work with you in creating the perfect atmosphere for your website. From color profile, layout and content, to graphics that appeal to your target market. organization's or personal website will be more Search Engine Friendly. And also unique and well organized. web design srilanka will make your web surfers to clearly.<br>

We offers best web design solutions for small & medium businesses and corporate as well . Web design sri lanka offers huge range of web design services it means website domains and everything in between.
</center> </p>

</div>
      <div class="box wow fadeInUp" style="width: 85%;background-color: rgba(100, 20, 90, 0.9);">
         <p style="font-size: 30px;">WEB DESIGNING TEAM</p>
        <div class="inner">
<table>
<?php
 $eid=$_GET['editid'];
$ret=mysqli_query($con,"select *from agent where web_devolp like 'yes'");
$num=mysqli_num_rows($ret);
if($num>0){
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

              
                <tr>
                  <td><?php echo $cnt;?></td>
            	<td><img src="uploads/agent profile/<?php echo $row['profile'];?>" height="75" width="100"/>
               </td>
                  <td><?php  echo $row['username'];?></td>
                 
                <td><?php  echo $row['studying'];?></td>
                <td><?php  echo $row['job_list'];?></td>
                
                </tr>
                 <?php
                $cnt=$cnt+1;
} } else { ?>
  <tr>
    <td colspan="8"> No record found against this search</td>

  </tr><?php } ?>
   </table>
</div>
</div>
</div>

<?php
               
} else {  }  ?>
			
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

