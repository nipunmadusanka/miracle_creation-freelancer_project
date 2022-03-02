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
<?php

    if(isset($_POST['submit']))
  {
  	$fullname=$row['name'];;
  if(!empty($_FILES["workimg"]["name"])) { 
        // Get file info 
        $filename = basename($_FILES["workimg"]["name"]); 
        $fileType = pathinfo($filename, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','JPG','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
          $sql = 'select max(ID) as ID from agents';
            $result = mysqli_query($con, $sql);
            if (count($result) > 0)
            {
                $row = mysqli_fetch_array($result);
                $filename = ($row['ID']+1) . '-' . $fullname . '-' . $filename;
            }
            else
                $filename = '1' . '-' . $fullname . '-' . $filename;

          
            //set target directory
            $path = 'uploads/agent work/';
            move_uploaded_file($_FILES['workimg']['tmp_name'],($path . $filename)); 

              if(!empty($_FILES["profile"]["name"])) { 
        // Get file info 
        $fileName1 = basename($_FILES["profile"]["name"]); 
        $fileType1 = pathinfo($fileName1, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes1 = array('jpg','JPG','png','jpeg','gif'); 
        if(in_array($fileType1, $allowTypes1)){ 
          $sql1 = 'select max(ID) as ID from agents';
            $result1 = mysqli_query($con, $sql1);
            if (count($result1) > 0)
            {
                $row = mysqli_fetch_array($result1);
                $fileName1 = ($row['ID']+1) . '-' . $fullname . '-' . $fileName1;
            }
            else
                $fileName1 = '1' . '-' . $fullname . '-' . $fileName1;
            //set target directory
            $path1 = 'uploads/agent profile/';
            move_uploaded_file($_FILES['profile']['tmp_name'],($path1 . $fileName1)); 

 
 $email=$row['email'];
$mobnumber=$row['contact_number'];
$add=$row['address'];
$livecity=$row['city'];
$studying=$_POST['studying'];
$description=$_POST['description'];
$password=md5($_POST['password']);
$createdate = @date('Y-m-d H:i:s');
$tatc=$_POST['tatc'];
$for_query = '';
           if(!empty($_POST["language"]))
           {
            foreach($_POST["language"] as $language)
            {
             $for_query .= $language . ', ';
            }
            $for_query = substr($for_query, 0, -2);

 // $query=mysqli_query($con,"INSERT INTO agent(request_ID,username,email,mobilenumber,address,livecity,job_list,studying,description,password,profile,work,createdate,terms)
 //  SELECT ID,username,email,mobilenumber,address,livecity,job_list,studying,description,password,test,img,createdate,terms FROM agents");
   

 $query=mysqli_query($con,"insert into agents(username,email,mobilenumber,address,livecity,job_list,studying,description,password,profile,workimg,createdate,tatc) value('$fullname','$email','$mobnumber','$add','$livecity','$for_query','$studying','$description','$password','$fileName1','$filename','$createdate','$tatc&c')");

    if ($query) {
  echo "<script>alert('successfully');</script>";
  }
}
}
}
}
 } 
  else
    {
    	echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>miracle creation register agent || <?php  echo $row['name'];?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/home.css" >
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"></head>

<body id="top" style="background-image: url('images/technology-computer.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
<?php } ?>
<?php 
include_once('include/customer_menubar.php');
 ?>
<div class="main">
	<div class="innerr">
		
		<div class="thumbnails" style="padding-top: 5em;">
			<div class="box wow fadeInUp" style="width: 55%;">
				<div class="inner">                                                 
                 <?php
 $cid=$_SESSION['cuid'];
$ret=mysqli_query($con,"select * from  customer where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
					 <form action="" method="post" onsubmit="return Validate()" enctype="multipart/form-data" class="form-horizontal" name="Aform">
						<h3>Signup new agents</h3>



						<fieldset style="padding-top: 10px;">
						<div id="fullname_div">			
							<label style="float: left;">User Name </label>
							<div id="fullname_error"></div>
						</div>
						</fieldset>

						<fieldset>
							<?php  echo $row['name'];?>
						</fieldset>

						<fieldset style="padding-top: 10px;">
							<div id="email_div">
							<label style="float: left;">Email</label>
							<div id="email_error"></div>
						</div>
						</fieldset>

						<fieldset>
							<?php  echo $row['email'];?>
						</fieldset>

						<fieldset style="padding-top: 10px;">
							<div id="mobilenumber_div">
							<label style="float: left;">Mobile Number <i>(without +94)</i></label>
							<div id="mobilenumber_error"></div>
						</div>
						</fieldset>

						<fieldset>
							<?php  echo $row['contact_number'];?>
						</fieldset>

						<fieldset style="padding-top: 10px;">
							<div id="address_div">
							<label style="float: left;">Address</label>
							<div id="address_error"></div>
						</div>
						</fieldset>
						
						<fieldset>
							<?php  echo $row['address'];?>
						</fieldset>
						
						<fieldset style="padding-top: 10px;">
							<div id="livecity_div">
							<label style="float: left;">Live City</label>
							<div id="livecity_error"></div>
						</div>
						</fieldset>

						<fieldset>
							<?php  echo $row['city'];?>
						</fieldset>

						<fieldset style="padding-top: 10px;">
							<div id="studying_div">
							<label style="float: left;">Education</label>
							<div id="studying_error"></div>
						</div>
						</fieldset>

						<fieldset>
							<textarea type="text" name="studying" class="textInput" placeholder="XXX Dgree / XXX University / XXX Certificate "  title="Studying"></textarea>
						</fieldset>

						<fieldset style="padding-top: 10px;">
							<div id="job_div">
							<label style="float: left;">Select Job</label>
							<div id="job_error"></div>
						</div>
						</fieldset>

						<!-- <fieldset>
							<select name="selectjob" title="you like job" style="background-color: black;" multiple="multiple">
								<option value="Photo Editer">Photo Editer</option>
								<option value="Video Editer">Video Editer</option>
								<option value="Website Developer">Website Developer</option>
								<option value="Software Developer">Software Developer</option>
								<option value="Photographer">Photograper</option>
								<option value="Writing and Typing">Writing and Typing</option>
								<option value="Home Wiring">Home Wiring</option>
								<option value="CCTV Installation">CCTV Installation</option>
								
							</select>
						</fieldset> -->
						<fieldset>
		<div class="thumbnails">
		  
          
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
			

						<fieldset style="padding-top: 10px;">
							<div id="description_div">
							<label style="float: left;">About You</label>
							<div id="description_error"></div>
						</div>
						</fieldset>

						<fieldset>
							<textarea name="description" class="textInput" placeholder="My Description" cols="2" title=" your description"></textarea>
						</fieldset>

						<fieldset style="padding-top: 10px;">
							<div id="password_div">
							<label style="float: left;">Password</label>
							
						</div>
						</fieldset>

						<fieldset>
							<input type="Password" name="password" id="pass1" class="textInput" placeholder="My Password" title="Password">
						</fieldset>	
<i id="letter" class="invalid">A lowercase letter ||</i>
  <i id="capital" class="invalid">A capital (uppercase) letter ||</i>
  <i id="number" class="invalid">A number ||</i>
   <i id="length" class="invalid">Minimum 8 characters </i>
						<fieldset style="padding-top: 10px;">
							<div id="confirmpassword_div">
							<label style="float: left;">Confirm Password</label>
							<div id="password_error"></div>
						</div>
						</fieldset>

						<fieldset>
							<input type="Password" name="confirmpassword" class="textInput" placeholder="My Confirm Password" title="Password">
						</fieldset>	

						<fieldset style="padding-top: 10px;">
							
							<label style="float: left;">Upload Profile Picture</label>
							
						</fieldset>

						<fieldset>	
							<div id="profile_div">
							<input type="file" name="profile" id="profile" style="float: left;" title="your profile picture" onchange="validateImage()">
							<div id="profile_error"></div>
							</div>
						</fieldset>

                        <fieldset style="padding-top: 10px;">
                        	
                            <label style="float: left;">Upload Previously successful projects Picture Or Screenshot</label>

                        </fieldset>

                        <fieldset>
                        	<div id="workimg_div">
                            <input type="file" name="workimg" id="workimg" style="float: left;" title="Upload You Work Picture" onchange="validateworkImage()">
                            <div id="workimg_error"></div>
							</div>
                        </fieldset>

						<fieldset style="padding-top: 18px;">
							<input type="checkbox" name="tatc" value="agree terms & condition" style="float: left;"/>
							<div id="terms_div">
								<label style="float: left;"><a href="U_TC.php" target="_blank">agree terms and condition</a></label>
							<div id="terms_error"></div>
						</div>
						</fieldset>

								<div style="padding-top: 20px;">
						<fieldset>
						<button type="submit" name="submit" class="button" title="Register">Register</button>
						</fieldset>
						
								</div>	

					</form>
				</div>
		</div>
	</div>
</div>
			
 <?php } ?>		<!-- Footer -->
		<?php include_once('include/footer.php'); ?>
		<script src="assets/js/user_ag_validation.js"></script>
 <script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/custom.js"></script> 
<script src="assets/js/dropdown.js"></script> 
<script src="assets/js/timeout.js"></script> 
</body>
</html>
<!-- $checkbox = $_POST['check'];         
        for($i=0;$i<count($checkbox);$i++){
        $check_id = $checkbox[$i]; -->
<?php } ?>
