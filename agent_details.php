<?php
session_start();
error_reporting(0);
include_once('include/connection.php');
error_reporting(0);
if (strlen($_SESSION['cvmsaid']==0)) {
  header('location:logout.php');
  } else{ 
?>
  <?php
 $eid=$_SESSION['cvmsaid'];
$ret=mysqli_query($con,"select * from  agent where ID='$eid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>miracle creation || <?php  echo $row['username'];?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/home.css" >
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"></head>

<body id="top">
<?php }?>
<?php 
include_once('include/agent_menubar.php');
 ?>
<div class="main">
  <div class="innerr">
    
    <div class="thumbnails" style="padding-top: 5em;">
      <div class="box wow fadeInUp" style="width: 55%;">
        <div class="inner">


  <?php
 $eid=$_SESSION['cvmsaid'];
$ret=mysqli_query($con,"select * from  agent where ID='$eid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?><table border="" class="mg-b-0">
                                            <tr>
    <th>User Name</th>
    <td><?php  echo $row['username'];?></td>
    <td>
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
      <input type="text" name="username"><button type="submit" name="submit1">Change User Name</button>
    </form>
         <?php if(isset($_POST['submit1'])){
 $username=$_POST['username'];
$query=mysqli_query($con,"update agent set username='$username' where  ID='$eid' ");
if($query){
echo "<script>alert('username successfully changed');</script>";
} } ?>
  </td>
  </tr>
   <tr>
    <th>Email</th>
    <td><?php  echo $row['email'];?></td>
       <td>
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
      <input type="text" name="email"><button type="submit" name="submit2">Change Email</button>
    </form>
    <?php if(isset($_POST['submit2'])){
 $email=$_POST['email'];
$query=mysqli_query($con,"update agent set email='$email' where  ID='$eid' ");
if($query){
echo "<script>alert('email successfully changed');</script>";
session_destroy();
} } ?>
  </td>
  </tr>

  <tr>
    <th>Mobile Number</th>
    <td><?php  echo $row['mobilenumber'];?></td>
           <td>
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
      <input type="text" name="mobilenumber"><button type="submit" name="submit3">Change Mobile Number</button>
    </form>
        <?php if(isset($_POST['submit3'])){
 $mobilenumber=$_POST['mobilenumber'];
$query=mysqli_query($con,"update agent set mobilenumber='$mobilenumber' where  ID='$eid' ");
if($query){
echo "<script>alert('mobilenumber successfully changed');</script>";
} } ?>
  </td>
  </tr>
  <tr>
    <th>Address</th>
    <td><?php  echo $row['address'];?></td>
           <td>
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
      <input type="text" name="address"><button type="submit" name="submit4">Change Address</button>
    </form>
            <?php if(isset($_POST['submit4'])){
 $address=$_POST['address'];
$query=mysqli_query($con,"update agent set address='$address' where  ID='$eid' ");
if($query){
echo "<script>alert('address successfully changed');</script>";
} } ?>
  </td>
  </tr>
  <tr>
    <th>Live City</th>
    <td><?php  echo $row['livecity'];?></td>
           <td>
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
      <input type="text" name="livecity"><button type="submit" name="submit5">Change Live City</button>
    </form>
                <?php if(isset($_POST['submit5'])){
 $livecity=$_POST['livecity'];
$query=mysqli_query($con,"update agent set livecity='$livecity' where  ID='$eid' ");
if($query){
echo "<script>alert('livecity successfully changed');</script>";
} } ?>
  </td>
  </tr>
  <tr>
    <th>Studying</th>
    <td><?php  echo $row['studying'];?></td>
           <td>
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
      <input type="text" name="studying"><button type="submit" name="submit6">Change Studying</button>
    </form>
                    <?php if(isset($_POST['submit6'])){
 $studying=$_POST['studying'];
$query=mysqli_query($con,"update agent set studying='$studying' where  ID='$eid' ");
if($query){
echo "<script>alert('studying successfully changed');</script>";
} } ?>
  </td>
  </tr>
  <tr>
    <th>Description</th>
    <td><?php  echo $row['description'];?></td>
           <td>
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
      <textarea type="text" name="description" class="2"></textarea><button type="submit" name="submit7">Change Description</button>
    </form>
                        <?php if(isset($_POST['submit7'])){
 $description=$_POST['description'];
$query=mysqli_query($con,"update agent set description='$description' where  ID='$eid' ");
if($query){
echo "<script>alert('description successfully changed');</script>";
} } ?>
  </td>
  </tr>

 <tr>
    <th>Selected Job</th>
    <td><?php  echo $row['job_list'];?></td>
           <td>
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
      <fieldset>
    <div class="thumbnails" style="width: 25em;">
          <div><input type="checkbox" name="language[]" value="Website Developer" /> <label>Website Developer</label></div>
          <div><input type="checkbox" name="language[]" value="Software Developer" onchange="soft_job()"/><label>Software Developer</label></div><br>
<div  id="soft_job" class="thumbnails" style="display: none;background-color: gray;">
<i>
<input type="checkbox" name="language[]" value="POS Billing System" /><label>POS Billing System</label> 
<input type="checkbox" name="language[]" value="private project" /><label>private project</label>  
</i>
</div>
                
          <div><input type="checkbox" name="language[]" value="Android/iOS App Developer" /><label>Android/iOS App Developer</label></div>
          
          <div><input type="checkbox" name="language[]" value="Typing" onchange="t_job()" /><label>Typing</label></div>
<div  id="t_job" class="thumbnails" style="display: none;background-color: gray;">
<i>
<input type="checkbox" name="language[]" value="Academic Writing" /><label>Academic Writing</label> 
<input type="checkbox" name="language[]" value="Content Writing" /><label>Content Writing</label>  
<input type="checkbox" name="language[]" value="Assignment Writing" /><label>Assignment Writing</label>  
<input type="checkbox" name="language[]" value="Journalism Writing" /><label>Journalism Writing</label>
<input type="checkbox" name="language[]" value="Blog and Article Writing" /><label>Blog & Article Writing</label> 
<input type="checkbox" name="language[]" value="Web Content Writers" /><label>Web Content Writers</label> 
<input type="checkbox" name="language[]" value="Technical Writers" /><label>Technical Writers</label> 
<input type="checkbox" name="language[]" value="Article Writing" /><label>Article Writing</label> 
<input type="checkbox" name="language[]" value="Data Entry" /><label>Data Entry</label>
</i>
</div>
         <div><input type="checkbox" name="language[]" value="Writing" onchange="w_job()"/><label>Writing</label></div>
         <div  id="w_job" class="thumbnails" style="display: none;background-color: gray;">
<i>
<input type="checkbox" name="language[]" value="Academic Writing" /><label>Copywriting</label> 
<input type="checkbox" name="language[]" value="Academic Writing" /><label>Academic Writing </label>
<input type="checkbox" name="language[]" value="Academic Writing" /><label>Content Writing </label>
<input type="checkbox" name="language[]" value="Academic Writing" /><label>Assignment Writing </label>
<input type="checkbox" name="language[]" value="Academic Writing" /><label>Creative Writing</label>
</i>
</div>

    <div><input type="checkbox" name="language[]" value="Electronic Project Developer" onchange="e_job()" /><label>Electronic Project Developer</label></div>
<div  id="e_job" class="thumbnails" style="display: none;background-color: gray;">
<i>
<input type="checkbox" name="language[]" value="Arduino Project" /><label>Arduino Project</label>
<input type="checkbox" name="language[]" value="Other Micro controller Project" /><label>Other Micro controller Project</label>
<input type="checkbox" name="language[]" value="Hobby Electronics project" /><label>Hobby Electronics project</label>
<input type="checkbox" name="language[]" value="School project" /><label>School project</label>
                                      
</i>
</div>
          <div><input type="checkbox" name="language[]" value="Home Wiring" /><label>Home Wiring</label></div>
          <div><input type="checkbox" name="language[]" value="CCTV Installation" /><label>CCTV Installation</label></div>
          <div><input type="checkbox" name="language[]" value="Photograper" onchange="p_job()"/><label>Photograper</label><br></div>

<div  id="p_job" class="thumbnails" style="display: none;background-color: gray;">
<i>
<input type="checkbox" name="language[]" value="Wedding Photography" /><label>Wedding Photography</label>
<input type="checkbox" name="language[]" value="Family Photography" /><label>Family Photography</label>
<input type="checkbox" name="language[]" value="Sports Photography" /><label>Sports Photography</label>
<input type="checkbox" name="language[]" value="Wildlife Photography" /><label>Wildlife Photography</label>
<input type="checkbox" name="language[]" value="Adventure Photography" /><label>Adventure Photography</label>
<input type="checkbox" name="language[]" value="Commercial Photography" /><label>Commercial Photography</label>
<input type="checkbox" name="language[]" value="Drone Photography" /><label>Drone Photography</label>
<input type="checkbox" name="language[]" value="Indoor Photography" /><label>Indoor Photography</label>
<input type="checkbox" name="language[]" value="Lifestyle Photography" /><label>Lifestyle Photography</label>
<input type="checkbox" name="language[]" value="Pet Photography" /><label>Pet Photography</label>
<input type="checkbox" name="language[]" value="Social Media Photography" /><label>Social Media Photography</label>
<input type="checkbox" name="language[]" value="Travel Photography" /><label>Travel Photography</label>
<input type="checkbox" name="language[]" value="Fashion Photography" /><label>Fashion Photography</label>
<input type="checkbox" name="language[]" value="Advertising Photography" /><label>Advertising Photography</label>
<input type="checkbox" name="language[]" value="Landscape Photography" /><label>Landscape Photography</label>
<input type="checkbox" name="language[]" value="Food Photography" /><label>Food Photography</label>
<input type="checkbox" name="language[]" value="Editorial Photography" /><label>Editorial Photography</label>
<input type="checkbox" name="language[]" value="Event Photography" /><label>Event Photography</label>
</i>
</div>
          <div><input type="checkbox" name="language[]" value="Video Editer" onchange="v_job()"/><label>Video Editer</label><br></div>

<div  id="v_job" class="thumbnails" style="display: none;background-color: gray;">
<i>
<input type="checkbox" name="language[]" value="Animation" /><label>Animation</label>
<input type="checkbox" name="language[]" value="Wedding Video Editing" /><label>Wedding Video Editing</label>
<input type="checkbox" name="language[]" value="Home and Family" /><label>Home & Family</label>
<input type="checkbox" name="language[]" value="Holiday Video Editing" /><label>Holiday Video Editing</label>
<input type="checkbox" name="language[]" value="Travel" /><label>Travel</label>
<input type="checkbox" name="language[]" value="Corporate" /><label>Corporate</label>
<input type="checkbox" name="language[]" value="Social Media" /><label>Social Media</label>
<input type="checkbox" name="language[]" value="Documentary Video Editing" /><label>Documentary Video Editing</label>
<input type="checkbox" name="language[]" value="Youtube Video Editing" /><label>Youtube Video Editing</label>
<input type="checkbox" name="language[]" value="Interview Video Editing" /><label>Interview Video Editing</label>
<input type="checkbox" name="language[]" value="Product Video Editing" /><label>Product Video Editing</label>
<input type="checkbox" name="language[]" value="Studied Video Editing" /><label>Studied Video Editing</label>
<input type="checkbox" name="language[]" value="Sports Video Editing" /><label>Sports Video Editing</label>
</i>
</div>
         <div><input type="checkbox" name="language[]" value="Graphic Designer" onchange="g_job()"/><label>Graphic Designer</label><br></div>

<div  id="g_job" class="thumbnails" style="display: none;background-color: gray;">
<i>
<input type="checkbox" name="language[]" value="Artwork" /><label>Artwork</label>
<input type="checkbox" name="language[]" value="Card" /><label>Card</label>
<input type="checkbox" name="language[]" value="Menu Card" /><label>Menu Card</label>
<input type="checkbox" name="language[]" value="Greeting Card " /><label>Greeting Card </label>
<input type="checkbox" name="language[]" value="Label Design" /><label>Label Design</label>
<input type="checkbox" name="language[]" value="Business Card" /><label>Business Card</label>
<input type="checkbox" name="language[]" value="Wedding Invitation" /><label>Wedding Invitation</label>
<input type="checkbox" name="language[]" value="Invitation" /><label>Invitation</label>
<input type="checkbox" name="language[]" value="Advertising social media Post" /><label>Advertising social media Post</label>
<input type="checkbox" name="language[]" value="social media" /><label>social media</label>
<input type="checkbox" name="language[]" value="logo Design" /><label>logo Design</label>
<input type="checkbox" name="language[]" value="Magazine" /><label>Magazine</label>
<input type="checkbox" name="language[]" value="Leaflet" /><label>PLeaflet</label>
<input type="checkbox" name="language[]" value="Poster Design" /><label>Poster Design</label>
<input type="checkbox" name="language[]" value="Template" /><label>Template</label>
<input type="checkbox" name="language[]" value="Album Cover" /><label>Album Cover</label>
<input type="checkbox" name="language[]" value="Business Illustration" /><label>Business Illustration</label>
<input type="checkbox" name="language[]" value="Website Illustration" /><label>Website Illustration</label>
<input type="checkbox" name="language[]" value="Other art or illustration" /><label>Other art or illustration</label>
</i>
</div>
     </div>
      </div>
</fieldset>
          <button type="submit" name="submit9">Change Selected Job</button>
    </form>
                                <?php if(isset($_POST['submit9'])){
$for_query = '';
           if(!empty($_POST["language"]))
           {
            foreach($_POST["language"] as $language)
            {
             $for_query .= $language . ', ';
            }
            $for_query = substr($for_query, 0, -2);
$query=mysqli_query($con,"update agent set job_list='$for_query' where  ID='$eid' ");
if($query){
echo "<script>alert('job successfully changed');</script>";
}} } ?>
  </td>
  </tr>
  <tr class="wow fadeInLeft">
    <td></td>
        <td><img src="uploads/agent profile/<?php echo $row['profile'];?>" height="110" width="150"/></td>
     <td><img src="uploads/agent work/<?php echo $row['work'];?>" height="110" width="150"/></td>
  </tr>
<!--    <tr class="wow fadeInLeft">
    <th>Work Picture Or Screenshot</th>
 
  </tr> -->

  
<?php } ?>

</table> 
        </div>
      </div>
    </div>
  </div>

      
      
    <!-- Footer -->
    <?php include_once('include/footer.php'); ?>
  <script src="assets/js/ag_validation.js"></script>
  <script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/dropdown.js"></script> 
<script src="assets/js/timeout.js"></script> 
</body>
</html>
<?php }  ?>

