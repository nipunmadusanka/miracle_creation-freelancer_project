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
?>
<?php
if (isset($_POST['submit'])) 
{
      $user_id=$row['ID'];
$name=$row['name'];
$email=$row['email'];
$number=$row['contact_number'];
$city=$row['city'];
$package=$_POST['package'];
$why_website=$_POST['why_website'];
$description=$_POST['brief_description'];
$payment=$_POST['payment'];
$date=@date('Y-m-d H:i:s');
$query=mysqli_query($con,  "insert into web_order(user_id,name,email,mobile,city,package,why_need_a_website,brief_description,payment,date) value('$user_id','$name','$email','$number','$city','$package','$why_website','$description','$payment','$date')");
if ($query) {
    # code...
  echo "<script> alert('succusfuly'); </script>";
  } 
  else{
    
    echo "<script>alert('something wrong');</script>";
  } # code...
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>miracle creation web order|| <?php  echo $row['name'];?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/home.css" >
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"></head>
<body id="top" style="background-image: url('images/weborder.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
<script type="text/javascript">
  function  e() { 
window.open('message'); }
</script>
<?php } ?>
<?php 
include_once('include/customer_menubar.php');
 ?>


       <div class="thumbnails" style="padding-top: 5em;">
                <div class="inner" style="height: 50%;width: 20%;margin: -0.5em;z-index: -2;margin-right: 2px;">
                  <a href="#" class="image fit"><img src="images/plus.png" alt="" /></a>
           
              </div>
                 <div class="inner" style="height: 50%;width: 20%;margin: -0.5em;z-index: -2;margin-right: 2px;">
                  <a href="content.php" class="image fit"><img src="images/pr.png" alt="" /></a>

              </div>
                 <div class="inner" style="height: 50%;width: 20%;margin: -0.5em;z-index: -2;margin-right: 2px;">
                  <a href="#" class="image fit"><img src="images/basic.png" alt="" /></a>
           
              </div>

            </div>

             <div class="thumbnails" style="">
            <div class="box" style="background-color: rgba(160, 20, 20, 0.8);">call now:
<a href="tel:0786880038"><span class="fa fa-phone"></span> 0786880038</a></a>



            </div>
          </div>
             

<div id="main">
  <div class="cont">
    <div class="content">
    <div class="form" style="background-color: rgba(10, 10, 10, 0.7);">
      <h1>we will call you back!</h1>
        <?php
 $cid=$_SESSION['cuid'];
$ret=mysqli_query($con,"select * from  customer where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>

              <form action="" method="post" onsubmit="return web_Validate()" enctype="multipart/form-data" class="form-horizontal"  name="webform">
                <fieldset>
                <div id="name_div">
                    <label>Name / නම : </label>
                    <div id="name_error"></div>
                </div>
                </fieldset>

                <fieldset>
                    <?php  echo $row['name'];?>
                </fieldset>
                
                <fieldset>
                <div id="email_div">
                    <label>Email / විද්‍යුත් ලිපිනය :</label>
                    <div id="email_error"></div>
                </div>
                </fieldset>

                <fieldset>
                    <?php  echo $row['email'];?>
                </fieldset>

                <fieldset>
                <div id="mobile_div">
                    <label>Contact Number / දුරකථන අංකය :</label>
                    <div id="mobile_error"></div>
                </div>
                </fieldset>
                
                <fieldset>
                    <?php  echo $row['contact_number'];?>
                </fieldset>
              
                <fieldset>
                <div id="city_div">
                    <label>City / නගරය :</label>
                    <div id="city_error"></div>
                </div>
                </fieldset>
              
                <fieldset>
                  <?php  echo $row['city'];?>
                </fieldset>
              
                <fieldset>
                <div id="package_div">
                    <label>Select Package / පැකේජය තෝරන්න :</label>
                    <div id="package_error"></div>
                </div>
                </fieldset>
              
                <fieldset>
                    <select name="package" required="">
                    <option value="1">Select Package</option>
                    <option value="plus">Plus</option>
                    <option value="pro">Pro</option>
                    <option value="basic">Basic</option>
                    </select>
                </fieldset>
                </fieldset>
      
                <fieldset>
                <div id="why_website_div">
                    <label>Why Do You Need a Website? / වෙබ් අඩවියක් ඔබට අවශ්‍ය වන්නේ කුමක් සදහාද? :</label>
                    <div id="why_website_error"></div>
                </div>
                </fieldset>
            
                <fieldset>
                    <textarea type="text" name="why_website" class="textInput" cols="2" placeholder="reason" title="reason" ></textarea>
                </fieldset>
      
                <fieldset>
                <div id="brief_description_div">
                    <label>A brief description of the required website / අවශ්‍ය වෙබ් අඩවිය පිළිබද කෙටි හැදින්වීමක් :</label>
                    <div id="brief_description_error"></div>
                </div>
                </fieldset>

                <fieldset>
                    <textarea type="text" name="brief_description" cols="2" rows="" placeholder="description" title="description" ></textarea>

                <fieldset>
                <div id="payment_div">
                    <label>Payment Method / ගෙවීම් ක්‍රමය තෝරන්න :</label>
                    <div id="payment_error"></div>
                </div>
                </fieldset>

                <fieldset>
                    <select name="payment" >
                    <option value="1">Payment Method</option>
                    <option value="bank payment">Bank Payment</option>
                    <option value="money tranfer">Money Tranfer</option>
                    <option value="give hand">Give Hand</option>
                    <option value="ez cash">eZ Cash</option>
                    <option value="m cash">M Cash</option>
       
                    </select>
                </fieldset>

                <div style="padding-top: 20px;">
       
                    <button type="submit" name="submit" class="button fit" title="Submit">Submit New Order Request</button>
            
                </div>
                           <a href="U_TC.php" target=_blank> Terms and Conditions</a><br>   
              </form>
</div>
<div class="info">
  <div style="background-color: rgba(100, 100, 100, 0.6);padding: 10px;">
  <p><center style="font-size: 25px;"> You are warmly welcome to miracle creation</center><br><br>

<center style="font-size: 20px;margin-bottom: 50px;">miracle web development division approachable and high performing Website Designing company in Sri Lanka, with a passion for making websites work for businesses and organizations. We are committed to providing search engine optimization (SEO) services, as well as a multitude of website development to our clients worldwide. At miracle web development, we are focused on results. While providing you top-notch SEO and web development services, we strive to guarantee your 100 percent satisfaction in terms of quality and timeline as per the decided deliverable.<br></p>
<h1>CREATIVE & TECHNICAL</h1>
<p>miracle creation web design Sri Lanka, we do simple, fresh and unique designs for you. So we will provide market driven, eye catching, and responsive web design for our clients. Static or fully customized CMS available for satisfy your requirement.
</p>
</center> 
</div>
</div>
</div>
</div>
</div>
 	<?php } ?>	<!-- Footer -->
		<?php include_once('include/footer.php'); ?>
 <script src="assets/js/jquery.js"></script>
<script src="assets/js/user_web_validation.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/custom.js"></script> 
<script src="assets/js/dropdown.js"></script> 
<script src="assets/js/timeout.js"></script> 
</body>
</html>
<?php } ?>