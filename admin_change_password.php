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
 $aid=$_SESSION['adid'];
$ret=mysqli_query($con,"select * from  admin where ID='$aid'");
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
    <link rel="stylesheet" href="assets/css/home.css" >
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"></head>
<body id="top">
<?php }?>
<?php 
include_once('include/admin_menubar.php');
 ?>
<div class="main">

  <div class="thumbnails  wow fadeInUp" style="padding-top: 5em;">
      <div class="box">
      
        <div class="inner">
          <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
  <?php
 $aid=$_SESSION['adid'];
$ret=mysqli_query($con,"select * from  admin where ID='$aid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
  $psw=$row['Password'];

?>  
    <!--     <label>Old Password</label>
        <input type="Password" name="oldPassword"> -->
    <label>Old password</label>
      <input type="Password" name="oldpsw" id="oldPassword" required><br><br>
           
  <label>New password</label>
      <input type="Password" name="newPassword" id="txtPassword" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
      <label>Comfirm password</label>
       <input type="Password" name="confirmPassword" id="txtConfirmPassword" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

       <p id="length" class="invalidstar"></p>
     
      <button type="submit" name="submit10" id="btnSubmit" onclick="return Validate()">Change</button>
</form>
     <h3>Password contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
   <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                                      <?php if(isset($_POST['submit10'])){

 $newPassword=md5($_POST['newPassword']);
$oldPassword=md5($_POST['oldpsw']);
if ($psw==$oldPassword) {
$query=mysqli_query($con,"update admin set Password='$newPassword' where  ID='$aid' ");
if($query){
echo "<script>alert('password successfully changed');</script>";
session_destroy();} }
else{
  echo "<script>alert('old Password not match.');</script>";

} 
}?>
    
 <!--    <div id="message">
</div> -->
  

 
</div>
</div>
</div>
</div>
<script type="text/javascript">
    function Validate() {
        var oldpassword = document.getElementById("oldPassword").value;
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
          alert('password do not match');
            return false;
        }
        return true;

        if (oldpassword  == "") {
          alert('empty');
          
          return false;
        }
        return true;
    }

    var myInput = document.getElementById("txtPassword");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

</script>
<?php }?>
   <?php include_once('include/footer.php'); ?>
 <script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/custom.js"></script> 
<script src="assets/js/dropdown.js"></script>
<script src="assets/js/timeout.js"></script> 
<!-- <script src="assets/js/custom_psw_change.js"></script>  -->
</body>
</html>
  <?php } ?>