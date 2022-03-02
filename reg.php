<?php 
include_once('include/connection.php');
    if(isset($_POST['submit']))
  {
  if(!empty($_FILES["img"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["img"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $img = $_FILES['img']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($img)); 

              if(!empty($_FILES["test"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["test"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $test = $_FILES['test']['tmp_name']; 
            $imgContent1 = addslashes(file_get_contents($test)); 


 $fullname=$_POST['fullname'];
 $email=$_POST['email'];
$mobnumber=$_POST['mobilenumber'];
$add=$_POST['address'];
$livecity=$_POST['livecity'];
$studying=$_POST['studying'];
$description=$_POST['description'];
$password=md5($_POST['password']);
$createdate=$_POST['createdate'];
$for_query = '';
           if(!empty($_POST["language"]))
           {
            foreach($_POST["language"] as $language)
            {
             $for_query .= $language . ', ';
            }
            $for_query = substr($for_query, 0, -2);

 $query=mysqli_query($con,"insert into agents(username,email,mobilenumber,address,livecity,studying,description,password,job_list,test,img,createdate) value('$fullname','$email','$mobnumber','$add','$livecity','$studying','$description','$password','$for_query','$imgContent1','$imgContent','$createdate')");

    if ($query) {
    $msg="Visitors Detail has been added.";
  }
}

  else
    {
      $msg="Something Went Wrong. Please try again";
    }
}
}
}
 } 
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>miracle creation</title>
			<link rel="stylesheet" href="assets/css/home.css" />
				<link rel="stylesheet" href="assets/css/menubar.css" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
</head>
<body id="top">
<?php 
include_once('include/menubar.php');
 ?>

<div class="main">
	<div class="innerr">
		
		<div class="thumbnails" style="padding-top: 5em;">
			<div class="box" style="width: 55%;">
				<div class="inner">
					 <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
						<h3>register with new agent</h3>
						<fieldset style="padding-top: 10px;">			
							<label style="float: left;">User Name</label>
						</fieldset>

						<fieldset>
							<input type="text" name="fullname" placeholder="enter User Name" title="user name">
						</fieldset>

						<fieldset style="padding-top: 10px;">
							<label style="float: left;">Email</label>
						</fieldset>

						<fieldset>
							<input type="Email" name="email" placeholder="enter Email" title="your email address">
						</fieldset>

						<fieldset style="padding-top: 10px;">
							<label style="float: left;">Mobile Number</label>
						</fieldset>

						<fieldset>
							<input type="tel" name="mobilenumber" placeholder="enter Mobile Number" title="your mobile number">
						</fieldset>


						<fieldset style="padding-top: 10px;">
							<label style="float: left;">Address</label>
						</fieldset>
						
						<fieldset>
							<input type="text" name="address" placeholder="enter address" title="your address">
						</fieldset>
						
						<fieldset style="padding-top: 10px;">
							<label style="float: left;">Live City</label>
						</fieldset>

						<fieldset>
							<input type="text" name="livecity" placeholder="enter Live City" title="live city">
						</fieldset>

						<fieldset style="padding-top: 10px;">
							<label style="float: left;">Studying</label>
						</fieldset>

						<fieldset>
							<input type="text" name="studying" placeholder="studying" title="state of your knowladge">
						</fieldset>

						<fieldset style="padding-top: 10px;">
							<label style="float: left;">Select Job</label>
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
		  <div><input type="checkbox" name="language[]" value="Photo Editer" /><label>Photo Editer</label></div>
          <div><input type="checkbox" name="language[]" value="Video Editer" /><label>Video Editer</label></div>
          <div><input type="checkbox" name="language[]" value="Website Developer" /> <label>Website Developer</label></div>
          <div><input type="checkbox" name="language[]" value="Software Developer" /><label>Software Developer</label></div><br>
          <div><input type="checkbox" name="language[]" value="Photograper" /><label>Photograper</label></div>
          <div><input type="checkbox" name="language[]" value="Writing and Typing" /><label>Writing and Typing</label></div>
          <div><input type="checkbox" name="language[]" value="Home Wiring" /><label>Home Wiring</label></div>
          <div><input type="checkbox" name="language[]" value="CCTV Installation" /><label>CCTV Installation</label></div>
      </div>
</fieldset>
			

						<fieldset style="padding-top: 10px;">
							<label style="float: left;">Description</label>
						</fieldset>

						<fieldset>
							<textarea name="description" placeholder="enter Description" cols="2" title=" your description"></textarea>
						</fieldset>

						<fieldset style="padding-top: 10px;">
							<label style="float: left;">Password</label>
						</fieldset>

						<fieldset>
							<input type="Password" name="password" placeholder="enter Password" title="Password">
						</fieldset>	


						<fieldset style="padding-top: 10px;">
							<label style="float: left;">Upload Profile Picture</label>
						</fieldset>

						<fieldset>
							<input type="file" name="test" style="float: left;" title="your profile picture">
						</fieldset>

                        <fieldset style="padding-top: 10px;">
                            <label style="float: left;">Upload You Work Picture Or Screenshot</label>
                        </fieldset>

                        <fieldset>
                            <input type="file" name="img" style="float: left;" title="Upload You Work Picture">
                        </fieldset>
						<fieldset style="padding-top: 10px;">
							<label style="float: left;">Date</label>
						</fieldset>

						

						<fieldset>
							<input type="date" name="createdate" placeholder="enter Date" style="color: black; float: left;background-color: gray;" title="date">
						</fieldset>

								<div style="padding-top: 20px;">
						<fieldset>
						<button type="submit" name="submit" class="button fit" title="Register">Register</button>
						</fieldset>
								</div>	

					</form>
				</div>
		</div>
	</div>
</div>
			
 		<!-- Footer -->
		<?php include_once('include/footer.php'); ?>
 
</body>
</html>
