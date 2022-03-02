<?php
$con=mysqli_connect("localhost","root","","dbms") or die("Database not connected");
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

<div class="main">
	<div class="innerr">
		
		<div class="thumbnails" style="padding-top: 5em;">
			<div class="box" style="width: 55%;">
				<div class="inner">
					  <form id="contact" action="" method="POST" enctype="multipart/form-data">
   <center><h3>Registration Form</h3> 
    <h4>fill in th all rows</h4></center>
    
   <fieldset>
      <input placeholder="Your name" type="text" name="name" tabindex="1" required autofocus>
     
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" name="telephone" tabindex="2" >
    </fieldset>
    <fieldset>
      <input placeholder="Your address" type="text" name="address" tabindex="1" required autofocus>
      </textarea>
    </fieldset>
        <fieldset>
      <input placeholder="Your Email Address" type="email" name="email" tabindex="4" required>
    </fieldset>
        <fieldset>
      <input placeholder="Your Location Link (use for google map)(optional)" type="text" name="location" tabindex="5" >
    </fieldset>
    <fieldset>
      <select name="city">
        <option value="0">Select City</option>
        <option value="Ampara">Ampara</option>
        <option value="Oluvil">Oluvil</option>
        <option value="Akkaraipattu">Akkaraipattu</option>
        <option value="Kalmunei">Kalmunei</option>
        <option value="Batticaloa">Batticaloa</option>
        <option value="Mahiyanganaya">Mahiyanganaya</option>
        <option value="Polonnaruwa">Polonnaruwa</option>
        <option value="Monaragala">Monaragala</option>
        
      </select>
    </fieldset>
        <fieldset>
      <select name="service">
        <option value="1">Select Your Service</option>
        <option value="Garage">Garage</option>
        <option value="Tire_shop">Tire shop</option>
        <option value="Breackdown_service">Breackdown service</option>
        <option value="Emergency(fire..etc)">Emergency(fire..etc)</option>
        <option value="Ambulance">Ambulance</option>
      </select>
    </fieldset>
      <fieldset>
      <input placeholder="Your Webesite (example:https://www.example.com)(optional)"  type="url" name="url" tabindex="6" >
    </fieldset>
<fieldset>
      <label>Select Image File:</label>
    <input type="file" name="image">
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
				</div>
		</div>
	</div>
</div>
			
 		<!-- Footer -->

 
</body>
</html>

<?php 
if(isset($_POST['submit'])){
  
  $name=$_POST['name'];
  $telephone=$_POST['telephone'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $location=$_POST['location'];
  $city=$_POST['city'];
  $service1=$_POST['service'];
  $url=$_POST['url'];
  if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 

  $sql="INSERT INTO table1(name,telephone,address,email,location,city,service,url,image)VALUES('$name','$telephone','$address','$email','$location','$city','$service1','$url','$imgContent')";
  $query=mysqli_query($con,$sql);
  if ($query) {
    // $print="Successful Registration";
    echo '<script>alert("Successful Your Registration:::::Thankyou");</script>';
  }
  else{
    echo '<script>alert("Something Wrong:::::Try Again");</script>';
  }
}
}
}
?>
