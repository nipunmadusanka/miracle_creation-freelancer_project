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

    <section class="navbar navbar-fixed-top custom-navbar" role="navigation">
  <div class="container">
    <div class="navbar-header">
    <!--  <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"> fdf</span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>  -->
     <span class="navbar-brand"><!-- MIRACLE CREATION -->
miracle creation
     </span>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="admin_dashboard.php"> Dashboard</a></li>
                <li><a onclick="myFunction()" class="dropbtn"><?php  echo $row['Name'];?><i class="fa  fa-chevron-down"></i></a>

<!--             <a href="#main" class="more smoothScroll" title="අපගේ සේවාවන් ">Our Services</a>
 --><div class="dropdown">
 <!--  <button >Dropdown</button>
  --> <div id="myDropdown" class="dropdown-content  wow fadeInDown">
<a href="#"><?php  echo $row['Name'];?></a>
<?php }?>
    <a href="add_admin.php" class="fa fa-user">Add New Admin</a>
    <a href="remove_admin.php" class="fa fa-trash-o">Remove Admin</a>
    <a href="admin_edit.php" class="fa fa-cogs">Change Details</a>
    <a href="admin_change_password.php" class="fa fa-gear">Change Password</a>
    <a href="logout.php" class="fa fa-power-off">Logout</a>
  </div>
</div>
</li>
</ul>
    </div>
  </div>
</section>
<?php }?>
