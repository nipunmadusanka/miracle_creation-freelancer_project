<?php 
if(isset($_POST['submit']))
  {

$username=$_POST['username'];
$email=$_POST['email'];
$mobilenumber=$_POST['mobilenumber'];
$address=$_POST['address'];
$livecity=$_POST['livecity'];
$for_query = '';
           if(!empty($_POST["job_list"]))
           {
            foreach($_POST["job_list"] as $language)
            {
             $for_query .= $language . ', ';
            }
            $for_query = substr($for_query, 0, -2);
$studying=$_POST['studying'];
$description=$_POST['description'];
$password=md5($_POST['password']);
if(!empty($_FILES["profilepicture"]["name"])) { 
        // Get file info 
        $fileName1 = basename($_FILES["profilepicture"]["name"]); 
        $fileType1 = pathinfo($fileName1, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes1 = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType1, $allowTypes1)){ 
            $image1 = $_FILES['profilepicture']['tmp_name']; 
            $profilepicture = addslashes(file_get_contents($image1)); 
if(!empty($_FILES["workimage"]["name"])) { 
        // Get file info 
        $fileName2 = basename($_FILES["workimage"]["name"]); 
        $fileType2 = pathinfo($fileName2, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes2 = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType2, $allowTypes2)){ 
            $image2 = $_FILES['workimage']['tmp_name']; 
            $workimage = addslashes(file_get_contents($image2));
            $date=$_POST['date'];
 $query=mysqli_query($con,"insert into agent(username,email,mobilenumber,address,livecity,job_list,studying,description,password,profilepicture,workimage,date) value('$username','$email','$mobilenumber','$address','$livecity','$for_query','$studying','$description','$password','$profilepicture','$workimage','$date')");

    if ($query) {
     echo '<script>alert("Successful Your Registration:::::Thankyou");</script>';
  }
}
  else
    {
     echo '<script>alert("fail Registration:::::Thankyou");</script>';
    }

  }
}
}
}
}
?>