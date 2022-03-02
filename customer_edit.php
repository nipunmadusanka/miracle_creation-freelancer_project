

<?php
session_start();
error_reporting(0);
include_once('include/connection.php');
error_reporting(0);
if (strlen($_SESSION['cuid']==0)) {
  header('location:logout.php');
  } else{ 
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
include_once('include/customer_menubar.php');
 ?>
<div class="main">
  <div class="innerr">
    
    <div class="thumbnails" style="padding-top: 5em;">
      <div class="box" style="width: 55%;">
        <div class="inner">


  <?php
 $cid=$_SESSION['cuid'];
$ret=mysqli_query($con,"select * from  customer where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?><table border="1" class="table table-bordered mg-b-0">
                                            <tr>
    <th>User Name</th>
    <td><?php  echo $row['name'];?></td>
    <td>
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
      <input type="text" name="username"><button type="submit" name="submit1">Change User Name</button>
    </form>
         <?php if(isset($_POST['submit1'])){
 $username=$_POST['name'];
$query=mysqli_query($con,"update agents set name='$username' where  ID='$cid' ");
if($query){
echo "<script>alert('username successfully changed');</script>";
} } ?>

<tr>
    <th>Mobile Number</th>
    <td><?php  echo $row['contact_number  '];?></td>
           <td>
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
      <input type="text" name="mobilenumber"><button type="submit" name="submit3">Change Mobile Number</button>
    </form>
        <?php if(isset($_POST['submit3'])){
 $contact_number  =$_POST['contact_number '];
$query=mysqli_query($con,"update customer set contact_number='$contact_number' where  ID='$cid' ");
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
$query=mysqli_query($con,"update customer set address='$address' where  ID='$cid' ");
if($query){
echo "<script>alert('address successfully changed');</script>";
} } ?>

 <tr>
    <th>City</th>
    <td><?php  echo $row['city'];?></td>
           <td>
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
      <input type="text" name="city"><button type="submit" name="submit5">Change Live City</button>
    </form>
                <?php if(isset($_POST['submit5'])){
 $livecity=$_POST['livecity'];
$query=mysqli_query($con,"update agents set city='$livecity' where  ID='$cid' ");
if($query){
echo "<script>alert('city successfully changed');</script>";
} } ?>
  </td>
  </tr>

  </td>
  </tr>
   <tr>
    <th>Email or Feedback</th>
    <td><?php  echo $row['email_or_feedback'];?></td>
       <td>
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
      <input type="text" name="email"><button type="submit" name="submit2">Change Email</button>
    </form>
    <?php if(isset($_POST['submit2'])){
 $email=$_POST['email'];
$query=mysqli_query($con,"update customer set email_or_feedback='$email' where  ID='$cid' ");
if($query){
echo "<script>alert('email successfully changed');</script>";
} } ?>
  </td>
  </tr>


  <tr>
    <th>Password Change</th>
    <td> 
      <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
    <!--     <label>Old Password</label>
        <input type="Password" name="oldPassword"> -->
        <label>password</label>
      <input type="Password" name="newPassword"><button type="submit" name="submit10">Change Password</button>
                                      <?php if(isset($_POST['submit10'])){
 $newPassword=md5($_POST['newPassword']);
$query=mysqli_query($con,"update customer set password='$newPassword' where  ID='$cid' ");
if($query){
echo "<script>alert('password successfully changed');</script>";
session_destroy();} } ?>
    </form>
      </td>

  </tr>
   <tr>
    <th>Date</th>
    <td><?php  echo $row['date'];?></td>
           <td>
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
      <input type="Date" name="createdate" style="background-color: gray;"><button type="submit" name="submit8">Change Date</button>
    </form>
                            <?php if(isset($_POST['submit8'])){
 $createdate=$_POST['date'];
$query=mysqli_query($con,"update customer set date='$createdate' where  ID='$cid' ");
if($query){
echo "<script>alert('date successfully changed');</script>";
} } ?>
  </td>
  </tr>
 
  
<?php } ?>

</table> 
        </div>
      </div>
    </div>
  </div>

      
      
    <!-- Footer -->
    <?php include_once('include/footer.php'); ?>
 
</body>
</html>
<?php }  ?>

