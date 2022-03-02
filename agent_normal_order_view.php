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
if(isset($_GET['ok']))
  {
$ID=$_GET['ok'];
$que=mysqli_query($con,"update normal_order set agent_read='read' where ID='$ID' ");
if ($que) {
echo "<script>alert('successfully action');</script>";
  }
else
    {
echo "Oops";
    }  
}
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
    <div id="main">

          <div class="inner">
              <center><h2>Uncomplete Normal Orders</h2></center>
              <div class="box wow fadeInUp" style="padding-top: 5em;">
            <table border="1" class="mg-b-0" style="background-color: gray;">
            	    <?php
 // $eid=$_SESSION['adid'];
$ID=$_GET['id'];
$ret=mysqli_query($con,"select * from  normal_order where ID ='$ID' && agent_id='$eid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
	?>
<tr>
<th>Order Type</th> 
    <td><?php  echo $row['order_type'];?></td>
</tr> 
<tr>
	<th>ID</th>
    <td><?php  echo $row['ID'];?></td>
</tr>
<tr>
  <th>User Id</th>
    <td><?php  echo $row['user_id'];?></td>
</tr>
<tr>
	<th>Name</th>
	<td><?php  echo $row['name'];?></td>
</tr>
<tr>
	<th>Telephone</th>
	<td><?php  echo $row['phone_number'];?></td>
</tr>
<tr>
	<th>Whatsapp number</th>
	<td><?php  echo $row['whatsapp_number'];?></td>
</tr>
<tr>
	<th>Email</th>
	<td><?php  echo $row['email'];?></td>
</tr>
<tr>
	<th>City</th>
	<td><?php  echo $row['city'];?></td>
</tr>
<tr>
	<th>Description</th>
	 <td><?php  echo $row['description'];?></td>
</tr>
<tr>
	<th>Status_of_the_project</th>
	 <td><?php  echo $row['status_of_project'];?></td>
</tr>
<tr>
	<th>Required_date</th>
	<td><?php  echo $row['required_date'];?></td>
</tr>
<tr>
	<th>Payment</th>
	<td><?php  echo $row['payment'];?></td>
</tr>
<tr>
	<th>Creat Date</th>
	<td><?php  echo $row['created'];?></td>
</tr>
<tr>
	<th>user msg</th>
	 <td><?php  echo $row['u_msg'];?></td>
</tr>
<tr>
	<th>File Name</th>
	<td><?php echo $row['file']; ?></td>                
</tr>
<tr>
	<th></th>
	<td><a href="uploads/normal order/<?php echo $row['file']; ?>" target="_blank">View</a></td>
  
</tr>
<tr>
	<th></th>
    <td><a href="uploads/normal order/<?php echo $row['file']; ?>" download>Download</td>
</tr>
<tr>
	<th>Upload Finished Work File</th>
    <td>
    	<?php
if (isset($_POST['submit'])) 
{
$id=$row['ID'];
$name=$row['name'];
$created = @date('Y-m-d');
if(!empty($_FILES["file"]["name"])) { 
        // Get file info 
        $filename = basename($_FILES["file"]["name"]); 
        $fileType = pathinfo($filename, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('pdf', 'txt', 'doc', 'docx','zip', 'rar', 'png', 'jpg', 'JPG', 'jpeg', 'gif', 'mp4', 'pptx'); 
        if(in_array($fileType, $allowTypes)){ 
        
                $filename = $id . '-' . $name . '-' . $created. '-' . 'complete' . '-' . $filename;
          
            //set target directory
            $path = 'uploads/agent complete/normal/';
            move_uploaded_file($_FILES['file']['tmp_name'],($path . $filename));
 
$query=mysqli_query($con,  "update normal_order set agent_file_upload='$filename' where  ID='$id' ");
if ($query) {
    # code...
  echo "<script> alert('succusfuly'); </script>";
  } 
}
  else{
    
    echo "<script>alert('something wrong');</script>";
  } # code...
}
}
?>
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
      <input type="file" name="file">
       </td>
       <td>
      <button type="submit" name="submit">Change</button>
    </form>
    </td>
</tr>
 <tr>
 	<th></th>
 <td>     <!--  -->
<a href="agent_normal_order_view.php?ok=<?php echo $row['ID'];?>"><button style="background-color: rgba(100, 30, 250, 0.7);width: 7em;"title="complete">Complete</button></a>
</td>
</tr>
<?php  } ?>
</table>
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
<script src="assets/js/dropdown.js"></script> 
<script src="assets/js/timeout.js"></script> 
</body>
</html>
  
<?php  } ?>