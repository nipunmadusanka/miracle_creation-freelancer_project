<?php
include_once('include/connection.php');
    if(isset($_POST['submit']))
  {
$fullname=$_POST['name'];
$mobilenumber=$_POST['mobilenumber'];
$add=$_POST['address'];
$city=$_POST['city'];
$email=$_POST['email'];
$password=md5($_POST['password']);

  if(!empty($_FILES["profilepic"]["name"])) { 
        // Get file info 
        $filename = basename($_FILES["profilepic"]["name"]); 
        $fileType = pathinfo($filename, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','JPG','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
          $sql = 'select max(ID) as ID from customer';
            $result = mysqli_query($con, $sql);
            if (count($result) > 0)
            {
                $row = mysqli_fetch_array($result);
                $filename = ($row['ID']+1) . '-' . $fullname . '-' . $filename;
            }
            else
                $filename = '1' . '-' . $fullname . '-' . $filename;

          
            //set target directory
            $path = 'uploads/user/user profile/';
            move_uploaded_file($_FILES['profilepic']['tmp_name'],($path . $filename)); 
$terms=$_POST['terms'];
$today = @date('Y-m-d H:i:s');
 $query=mysqli_query($con,"insert into customer (name,contact_number,address,city,email,password,profilepic,terms,today) value('$fullname','$mobilenumber','$add','$city','$email','$password','$filename','$terms','$today')");

    if ($query) {
    header('location:customer_loging.php');
  }

}
  else
    {
        echo "<script>alert('try again');</script>";
    }
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>miracle creation create user account</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/home.css" >
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"></head>

<body id="top" style="background-image: url('images/multicolor-light.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
<?php 
include_once('include/menubar.php');
 ?>

<div class="main">
	<div class="innerr">
		
		<div class="thumbnails" style="padding-top: 5em;">
			<div class="box wow fadeInUp" id="wrapper" style="width: 55%;">
				<div class="inner">                                                 
                 
					 <form action="" method="post" onsubmit="return Validate()" enctype="multipart/form-data" class="form-horizontal"name="vform">
						<h3>create user account</h3>

						<fieldset style="padding-top: 10px;">	
							<div id="username_div">		
							<label style="float: left;">User Name</label>
								<div id="name_error"></div>
						</div>
						</fieldset>

						<fieldset>						
						<input type="text" name="name" class="textInput" placeholder="My Name" title="user name">
						</fieldset>

						<fieldset style="padding-top: 10px;">
							<div id="mobile_div">	
							<label style="float: left;">Mobile Number <i>(without +94)</i></label>
							<div id="mobile_error"></div>
						</div>
						</fieldset>

						<fieldset>
							<input type="tel" name="mobilenumber" class="textInput" placeholder="07XXXXXXXX" title="your mobile number">
						</fieldset>


						<fieldset style="padding-top: 10px;">
							<div id="address_div">
							<label style="float: left;">Address</label>
							<div id="address_error"></div>
						</div>
						</fieldset>
						
						<fieldset>
							<input type="text" name="address" class="textInput" placeholder="No XX,My Vilage/Street,My City" title="your address">
						</fieldset>
						
						<fieldset style="padding-top: 10px;">
							<div id="city_div">
							<label style="float: left;">City</label>
							<div id="city_error"></div>
						</div>
						</fieldset>

						<fieldset>
							<input type="text" name="city" class="textInput" placeholder="My City" title="live city">
						</fieldset>

						<fieldset style="padding-top: 10px;">
							<div id="email_div">
							<label style="float: left;">Email</label>
							<div id="email_error"></div>
						</div>
						</fieldset>

						<fieldset>
							<input type="text" name="email" class="textInput" placeholder="mymail@xxx.com" title="your email address">
						</fieldset>
                                      
						<fieldset style="padding-top: 10px;">
								<div id="password_div">
							<label style="float: left;">Password</label>
						</div>
						</fieldset>

						<fieldset>
							<input type="Password" name="password" class="textInput" id="pass1" placeholder="My Password" title="Password">
						</fieldset>	
<i id="letter" class="invalid">A lowercase letter ||</i>
  <i id="capital" class="invalid">A capital (uppercase) letter ||</i>
  <i id="number" class="invalid">A number ||</i>
   <i id="length" class="invalid">Minimum 8 characters </i>
						<fieldset style="padding-top: 10px;">
								<div id="pass_confirm_div">
							<label style="float: left;">Confirm Password</label>
							<div id="password_error"></div>
						</div>
						</fieldset>

						<fieldset>
							<input type="Password" name="confirmpassword" class="textInput" id="pass2" placeholder="My Confirm Password" title="Confirm Password">
						</fieldset>	

						<fieldset style="padding-top: 10px;">
							
							<label style="float: left;">Upload Profile Picture</label>
							
						</fieldset>

						<fieldset>
							<div id="profilepic_div">
							<input type="file" name="profilepic" id="profilepic" style="float: left;" title="your profile picture" onchange="validateImage()">
							<div id="profilepic_error">
						</div>
						</fieldset>

						<fieldset style="padding-top: 10px;">
							<div id="terms_div">
							<input style="float: left;" type="checkbox" name="terms" value="agree terms & condition">
							<a href="T&C.php" target="_blank" style="float: left;">agree terms and condition</a>
							<div id="terms_error">	
						</div>
						</fieldset>


								<div style="padding-top: 20px;">
						<fieldset>
						<button type="submit" name="submit" class="button" title="Register" >create account</button>
						</fieldset>
								</div>	


					</form>
				</div>
		</div>
	</div>
</div>
			
 		<!-- Footer -->
		<?php include_once('include/footer.php'); ?>
  <script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/validation.js"></script>
</body>
</html>
