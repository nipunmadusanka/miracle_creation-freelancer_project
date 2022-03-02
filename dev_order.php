<?php
include_once('include/connection.php');
?>
<?php
if (isset($_POST['submit'])) 
{
  $a_id=$_GET['select'];
$name=$_POST['name'];
$number=$_POST['mobile'];
$email=$_POST['email'];
$city=$_POST['city'];
$type=$_POST['type_project'];
$reason=$_POST['reason'];
$description=$_POST['description'];
$status_of_the_project=$_POST['status_of_the_project'];
$r_date=$_POST['date'];
$payment=$_POST['payment'];
$created = @date('Y-m-d H:i:s');
$query=mysqli_query($con,  "insert into dev_order(agent_id,name,telephone,email,city,order_type,reasen,description,status_of_the_project,required_date,payment,created) value('$a_id','$name','$number','$email','$city','$type','$reason','$description','$status_of_the_project','$r_date','$payment','$created')");
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
	<title>miracle creation development order</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/home.css" >
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  </head>

<body id="top" style="background-image: url('images/coding.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
  <?php 
  $id=$_GET['select'];
$ret1=mysqli_query($con," SELECT COUNT(*) FROM dev_order WHERE agent_id='$id' && agent_read='read' ");
while ($row1=mysqli_fetch_array($ret1)) {
    $dev=$row1['COUNT(*)'];
}?>
<?php 
$id=$_GET['select'];
$ret2=mysqli_query($con," SELECT COUNT(*) FROM normal_order WHERE agent_id='$id' && agent_read='read' ");
while ($row2=mysqli_fetch_array($ret2)) {
  $normal=$row2['COUNT(*)'];
}?>

  <?php 
$sum=$dev+$normal;
?>
<?php 
include_once('include/menubar.php');
 ?>
  <?php
     if (isset($_GET['select'])) {
      # code... $eid=$_GET['editid'];
$id=$_GET['select'];
$ret=mysqli_query($con,"select * from  agent where ID='$id'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>
<div id="main">
  <div class="cont">
    <div class="content" style="padding-top: 12px;">
    <div class="form" style=" width: 30%; ">
      <h2>About The Agent</h2>
<div style="background-color: rgba(120, 120, 120, 0.7);">
<div style="display: flex;"><img src="uploads/agent profile/<?php echo $row['profile'];?>" height="130" width="170"/>
<h2 style="margin: 10px;"><?php echo $row['username'];?></h2>
</div>

<ul style="">
 
<p>This Agent Complete Jobs <button style="background-color: #f7f7f7;"><i style="color: red;">(<?php  echo $sum;?>)</i></button>
<?php 
if ($sum>='20') {
   $normal=mysqli_query($con,"update agent set rating='5' where  ID='$id' ");

  ?>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<?php
}elseif ($sum>='10' && $sum<'20') {
  $normal=mysqli_query($con,"update agent set rating='4' where  ID='$id' ");

  ?>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<?php
}elseif ($sum>='5' && $sum<'10') {
  $normal=mysqli_query($con,"update agent set rating='3' where  ID='$id' ");
  ?>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<?php
}elseif ($sum>='1' && $sum<'5') {
  $normal=mysqli_query($con,"update agent set rating='2' where  ID='$id' ");
  ?>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<?php
} else {
  $normal=mysqli_query($con,"update agent set rating='0' where  ID='$id' ");
  ?>
<i>no rating</i>
<?php
}
?>
</p>
  <br>
  <h3 style="color: black;">Contact Now:</h3>
  <li><?php echo $row['email'];?></li>
  <li><a href="tel:<?php echo $row['mobilenumber'];?>"><?php echo $row['mobilenumber'];?></a>
  <a href="tel:<?php echo $row['mobilenumber'];?>"><button><span class="fa fa-phone"></span>Call</button></a></li>
<br><br>
<h3 style="color: black;">About Me:</h3>

<li>I am From <?php  echo $row['livecity'];?></li>
<li><?php  echo $row['studying'];?></li>
 <li><?php  echo $row['description'];?></li>
 </ul>
 <p>Previously successful projects: <img src="uploads/agent work/<?php echo $row['work'];?>" height="130" width="170"/>
</p>
</div>
<a onclick="myFunction()" class="rebottn">Report Agent<i class="fa  fa-chevron-down"></i></a>
<div class="redown">
 <?php
 include_once('include/connection.php'); 
if (isset($_POST['report'])) {
  $id=$_GET['select'];
  $u_name=$_POST['u_name'];
  $u_telephone=$_POST['u_telephone'];
  $re_reasen=$_POST['re_reasen'];
    $date = @date('Y-m-d H:i:s');
  $uery=mysqli_query($con,"insert into report (agent_id,u_name,u_telephone,re_reasen,date) value('$id','$u_name','$u_telephone','$re_reasen','$date')");
  if ($uery) {
    echo "<script>alert('reaport successful');</script>";

    # code...
  }
  else
  {
    echo "<script>alert('something wrong');</script>";
  }
  # code...

include_once('include/remove_report_agent.php');
 } ?>
<div id="report" class="redown-content ">
 <form action="" method="post" enctype="multipart/form-data" onsubmit="return validatereport()" name="repo">
  <fieldset>
          <label style="color: black;">Your Name</label>
          <div id="re_name_error"></div>
</fieldset>
  <fieldset>
          <input type="text" name="u_name" class="textInput" placeholder="Your Name" title="your name" style="background-color: black;">
  </fieldset>
   <fieldset>
          <label style="color: black;">Your Telephone Number</label>
          <div id="re_telephone_error"></div>
 </fieldset>
  <fieldset>
          <input type="tel" name="u_telephone" class="textInput" placeholder="Your Telephone" title="your Telephone" style="background-color: black;">
  </fieldset>
  <fieldset>
          <label style="color: black;">Reasen</label>
          <div id="re_reasen_error"></div>
  </fieldset>
  <fieldset>
          <textarea type="text" name="re_reasen" class="textInput" cols="2" placeholder="Reasen" title="reasen" style="background-color: black;"></textarea>
          <button type="submit" name="report" class="button" title="Report" style="background-color: rgba(160, 90, 40, 0.9);">Report</button>
  </fieldset>
    </form>
  </div>
  </div>

</div>
<div class="info" style="width: 70%;">
    <div style="background-color: rgba(30, 30, 30, 0.9);">
      <div class="inner">
     <form action="" method="post" onsubmit="return Validate()" enctype="multipart/form-data" class="form-horizontal"name="dform">
      <center>If you are not already registered, make your work easy by registering today<br>
      <a href="create_account.php" title="ලියාපදිංචි වන්න /Register Now ">Register Now </a>
    </center>
    <h1>we will call you back!</h1>
      <fieldset>
               <div id="username_div">
                 <label>Name / නම </label>
                 <div id="name_error"></div>
            </div>
      </fieldset>
      <fieldset>
                    <input type="text" name="name" class="textInput" placeholder="My Name" title="input your name" >
      </fieldset>
      <fieldset> 
                <div id="mobile_div">
                    <label>Contact Number / දුරකථන අංකය </label>
                    <div id="mobile_error"></div>
                </div>
      </fieldset>
      <fieldset>
                <input type="tel" name="mobile" class="textInput" placeholder="07XXXXXXXX" title="your mobile number">
      </fieldset>

      <fieldset> 
              <div id="email_div">
                  <label>Email / විද්‍යුත් ලිපිනය </label>
                  <div id="email_error"></div>
                </div>
      </fieldset>
      <fieldset>
              <input type="text" name="email" class="textInput" placeholder="mymail@xxx.com" title="your email address">
      </fieldset>
      <fieldset> 
              <div id="city_div">
                <label>City / නගරය </label>
                <div id="city_error"></div>
              </div>
      </fieldset>
      <fieldset>
                <input type="text" name="city" class="textInput" placeholder="My City" title="input your city">
      </fieldset>
      <fieldset> 
              <div id="type_div">
                  <label>Type Of Project / </label>
                  <div id="type_error"></div>
              </div>
      </fieldset>
      <fieldset>
              <select name="type_project" class="textInput" title="type">
              <option value="1">Type Of Project / </option>
              <option value="Software Developer">Software Developer</option>
              <option value="Android/iOS App Developer">Android/iOS App Developer</option>
              <option value="Electronic Project Developer">Electronic Project Developer</option>
              
              </select>
      </fieldset>
      <fieldset> 
              <div id="reason_div">
                  <label>The reason for doing the project / ව්‍යාපෘතිය කිරීමට හේතුව </label>
                  <div id="reason_error"></div>
              </div>
      </fieldset>
      <fieldset>
        <textarea type="text" name="reason" class="textInput" cols="2" placeholder="Reason" title="your reasen"></textarea>
      </fieldset>
      <fieldset> 
              <div id="description_div">
                  <label>A description of your project / ඔබගේ වියාපෘතිය පිළිබද හැදින්වීමක් </label>
                  <div id="description_error"></div>
              </div>
      </fieldset>
      <fieldset>
        <textarea type="text" name="description" class="textInput" cols="2" rows="4" placeholder="Your Description" title="your description" ></textarea>
      </fieldset>
      <fieldset> 
              <div id="status_div">
                  <label>Status of the project / වියපෘතියේ තත්වය</label>
                  <div id="status_error"></div>
              </div>
      </fieldset>
      <fieldset>
              <select name="status_of_the_project" class="textInput" title="status">
              <option value="1">Status of the project / වියපෘතියේ තත්වය</option>
              <option value="Emergency_Order">Emergency Order / හදිසි</option>
              <option value="Normally_Order">Normally Order / සාමාන්ය</option>
              </select>
      </fieldset>
      <fieldset> 
              <label >Required Date / අවශ්‍ය දිනය </label>
      </fieldset>

      <fieldset>
              <div id="date_div">
                  <input type="date" name="date" class="textInput" placeholder="Required Date" style="color: black; float: left;background-color: gray;" title="required date">
                  <div id="date_error"></div>
              </div>
      </fieldset>

      <fieldset> 
              <div id="payment_div">
                    <label>Select Payment Method / ගෙවීම් ක්‍රමය තෝරන්න</label>
                    <div id="payment_error"></div>
              </div>
      </fieldset>
      <fieldset>
              <select name="payment" class="textInput" title="payment method">
              <option value="1">Payment Method</option>
              <option value="bank_payment">Bank Payment</option>
              <option value="money_tranfer">Money Tranfer</option>
              <option value="give_hand">Give Hand</option>
              <option value="ez_cash">eZ Cash</option>
              <option value="m_cash">M Cash</option>
       
              </select>
      </fieldset>


            <div style="padding-top: 20px;">
            <fieldset>
            <button type="submit" name="submit" class="button" title="Order" >Order Now</button>
            </fieldset>
                </div>  
                           <a href="T&C.php" target=_blank> Terms and Conditions</a><br>     
</form>

</div>
</div>
</div>
</div>
</div>
		
 		<!-- Footer -->
		<?php include_once('include/footer.php'); ?>
<script src="assets/js/report_valid.js"></script>
<script src="assets/js/dev_validation.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/custom.js"></script> 
<script src="assets/js/report.js"></script> 

</body>
</html>
  <?php 
}}
?>