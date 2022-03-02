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
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>miracle creation || <?php  echo $row['name'];?></title>
<meta charset="utf-8">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/home.css" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	</head>
	<body data-spy="scroll" id="top">
<?php } ?>
<?php 
include_once('include/customer_menubar.php');
 ?>

		<section id="banner">
					<div class="inner wow fadeInUp">
						<header>
							<h1 title="මිරකල් ක්‍රියේෂන් ">miracle creation</h1>
								<p>	Talent to suit the demand<br>
Get in touch with our talented representatives and get more efficient services.<br>
Tell us about your project. We connect you with our top talented agents.<br>
We provide the most efficient service for your business.<br>
							ඉල්ලුමට සරිලන දක්ෂතා<br/>
							විශේෂ කුසලතා දක්වන අප නියෝජිතයින් හා සම්බන්ධ වි ඉහළ කාර්යක්‍ෂම සේවාවක් ලබා ගන්න.<br/>
							ඔබේ ව්‍යාපෘතිය ගැන අපට කියන්න. අප ඔබව අපගේ සිටින ඉහළ දක්ෂ නියෝජිතයන් සමඟ සම්බන්ධ කරයි.<br>
							ඔබේ ව්‍යාපාරය සඳහා ද අප පරිපූර්ණ කාර්යක්‍ෂම සේවාවක් සපයයි.</p>
					
 </header>
						<a user_="#main" class="more smoothScroll" title="අපගේ සේවාවන් ">Our Services</a>
						
 	<h4><i ><a href="user_register_agent.php" title="ලියාපදිංචි වන්න /Register Now ">෴ ඔබත් අපගේ ක්ෂේත්‍ර පිළිබද හසල දැනුමක් ඇති අයෙක්ද එසේ නම් අදම අප හා එක් වන්න ෴</i><br/>
	<i>෴ If you are an expert in our field then join us today ෴</i><br />
	Register Now </a></h4><br>

  <small>Work with miracle creation with confidence<br>
Payment security is guaranteed.<br>
Once you are happy you can make payments.<br>
100% Sri Lankan<br>
</small>
					</div>
				</section>
<!--  href="visitor-detail.php?editid=1;?>" -->
			<!-- Main -->
				<div id="main" style="background-image: url('images/woman-raising-her-hands.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
					<div class="inner">

					<!-- Boxes -->
						<div class="thumbnails">

							<div class="fadebox box wow bounceIn">
								<a href="user_web_content.php?editid=Website Developer" class="image fit"><img src="images/1 (13).jpg" alt="" /></a>
								<div class="inner">
									<a href="user_web_content.php?editid=Website Developer"><h3>Web Development</h3>
									<p><i>
Website Design ||
Website Redesign ||
Website Hosting ||
Blog ||
WordPress ||
 Social media page</i><br>
										Our team at Miracle Creation Web Development is responsible for creating a creative and unique website that suits your needs.<br><br>
									<i>මිරකල් ක්‍රියේෂන් වෙබ් දියුණු කිරීම් අංශය මගින් සේවලාබි ඔබගේ අවශ්‍යතාවයට ගැලපෙන අකාරයේ නිර්මානාත්මක හා ඔබටම පමණක් අවේනික අයුරින් වෙබ් අඩවියක් නිර්මාණය කරදීමට අප කණ්ඩායම ඉතා වගකීමෙන් බැදී සිටිනු ලැබේ</i>
									</p>
									</a>
	
								
								</div>
							</div>

							<div class="fadebox box wow bounceIn">
								<a href="user_dev_content.php?editid=Software Developer" class="image fit"><img src="images/1 (20).jpg" alt="" /></a>
								<div class="inner">
									<a href="user_dev_content.php?editid=Software Developer" >
									<h3>Software Development</h3>
									<a href="user_dev_content.php?editid=POS Billing System" ><p>POS Billing System<br>
									<i>(වෙළද වියාපාර සදහා අවශ්‍ය මෘදුකාංග)</i></a><br>
									<a href="user_dev_content.php?editid=private project" >private project<br>
									<i>(පෞද්ගලික ව්‍යාපෘතිය)</i></a>
									 </p>
									</a>
								</div>
							</div>

					<div class="fadebox box wow bounceIn">
								<a href="user_dev_content.php?editid=Android/iOS App Developer" class="image fit"><img src="images/1 (1).jpg" alt="" /></a>
								<div class="inner">
									<a href="user_dev_content.php?editid=Android/iOS App Developer">
							<h3>Android/iOS App Development</h3>
									<p>Do you want to popularize your business through an app?<br>
										<i>ඔබගේ ව්යාපාරය ඇප් එකක් මාර්ගයෙන් ජනගත කිරීමට අවශ්‍යද</i><br>
										 Do you need an Android / iOS app for a personal project?<br>
										<i>පෞද්ගලික ව්‍යාපෘතියක් සදහා Android/iOS ඇප් එකක්  අවශ්‍යද</i>
										</p>
								</a>
								</div>
							</div>
							<div class="fadebox box wow bounceIn">
								<a href="user_dev_content.php?editid=Electronic Project Developer" class="image fit"><img src="images/1 (11).jpg" alt="" /></a>
								<div class="inner">
									<a href="user_dev_content.php?editid=Electronic Project Developer">
										<h3>Electronic Project Development</h3>
									<p><i>
										<a href="user_dev_content.php?editid=Arduino Project">Arduino Project</a> ||
										<a href="user_dev_content.php?editid=Other Micro controller Project">Other Micro controller Project</a> ||
										<a href="user_dev_content.php?editid=Hobby Electronics project">Hobby Electronics project</a> ||
										<a href="user_dev_content.php?editid=School project">School project</a>
									</i></p>
									</a>
								</div>
							</div>
							<div class="fadebox box wow bounceIn">
								<a href="user_content.php?editid=Video Editer" class="image fit"><img src="images/1 (7).jpg" alt="" /></a>
								<div class="inner">
									<a href="user_content.php?editid=Video Editer">
										<h3>Video Editing</h3>
									<p>
										<i>
										<a href="user_content.php?editid=Animation">Animation</a> || <a href="user_content.php?editid=Wedding Video Editing">Wedding Video Editing</a> || <a href="user_content.php?editid=Home and Family">Home & Family</a> || <a href="user_content.php?editid=Holiday Video Editing">Holiday Video Editing</a> || <a href="user_content.php?editid=Travel">Travel</a> || <a href="user_content.php?editid=Corporate">Corporate</a> || <a href="user_content.php?editid=Social Media">Social Media</a>|| <a href="user_content.php?editid=Documentary Video Editing">Documentary Video Editing</a> || <a href="user_content.php?editid=Youtube Video Editing">Youtube Video Editing</a> || <a href="user_content.php?editid=Interview Video Editing">Interview Video Editing</a> || <a href="user_content.php?editid=Product Video Editing">Product Video Editing</a> || <a href="user_content.php?editid=Studied Video Editing">Studied Video Editing</a> || <a href="user_content.php?editid=Sports Video Editing">Sports Video Editing</a> 
										<br>
									</i>

								</p>
									 </a>
								</div>
							</div>

							<div class="fadebox box wow bounceIn">
								<a href="user_content.php?editid=Graphic Designer" class="image fit"><img src="images/1 (15).jpg" alt="" /></a>
								<div class="inner">
									<a href="user_content.php?editid=Graphic Designer"><h3>Graphic Designer</h3>
									<i>	
										<ul>
										<a href="user_content.php?editid=Artwork">Artwork</a> 
										||  <a href="user_content.php?editid=Card">Card</a> 
										||  <a href="user_content.php?editid=Menu Card">Menu Card</a>  
										||  <a href="user_content.php?editid=Greeting Card">Greeting Card</a> 
										||  <a href="user_content.php?editid=Label Design">Label Design</a> 
										||  <a href="user_content.php?editid=Business Card">Business Card</a> 
										||  <a href="user_content.php?editid=Wedding Invitation">Wedding Invitation</a> 
										||  <a href="user_content.php?editid=Invitation">Invitation</a> 
										||  <a href="user_content.php?editid=Advertising social media Post">Advertising social media Post</a> 
										||  <a href="user_content.php?editid=social media">social media</a> 
										||  <a href="user_content.php?editid=logo Design">logo Design</a> 
										||  <a href="user_content.php?editid=Magazine">Magazine</a> 
										||  <a href="user_content.php?editid=Poster Design">Poster Design</a> 
										||  <a href="user_content.php?editid=Leaflet">Leaflet</a> 
										||  <a href="user_content.php?editid=Template">Template</a> 
										||  <a href="user_content.php?editid=Album Cover">Album Cover</a> 
										||  <a href="user_content.php?editid=Business Illustration">Business Illustration</a> 
										||  <a href="user_content.php?editid=Website Illustration">Website Illustration</a>  ||
										<a href="user_content.php?editid=Other art or illustration">Other art or illustration</a> 
										</ul>
										</i>
									</a>
								</div>
							</div>

							<div class="fadebox box wow bounceIn">
								<a href="user_outdoor_content.php?editid=Photograper" class="image fit"><img src="images/1 (18).jpg" alt="" /></a>
								<div class="inner">
								<a href="user_outdoor_content.php?editid=Photograper">
									<h3>Photograper</h3>
									<p><i>
<a href="user_outdoor_content.php?editid=Wedding Photography">Wedding Photography</a>
|| <a href="user_outdoor_content.php?editid=Family Photography">Family Photography</a>
|| <a href="user_outdoor_content.php?editid=Sports Photography">Sports Photography</a>
|| <a href="user_outdoor_content.php?editid=Wildlife Photography">Wildlife Photography</a>
|| <a href="user_outdoor_content.php?editid=Adventure Photography">Adventure Photography</a>
|| <a href="user_outdoor_content.php?editid=Commercial Photography">Commercial Photography</a>
|| <a href="user_outdoor_content.php?editid=Drone Photography">Drone Photography</a>
|| <a href="user_outdoor_content.php?editid=Indoor Photography">Indoor Photography</a>
|| <a href="user_outdoor_content.php?editid=Lifestyle Photography">Lifestyle Photography</a>
|| <a href="user_outdoor_content.php?editid=Pet Photography">Pet Photography</a>
|| <a href="user_outdoor_content.php?editid=Social Media Photography">Social Media Photography</a>
|| <a href="user_outdoor_content.php?editid=Travel Photography">Travel Photography</a>
|| <a href="user_outdoor_content.php?editid=Fashion Photography">Fashion Photography</a>
|| <a href="user_outdoor_content.php?editid=Advertising Photography">Advertising Photography</a>
|| <a href="user_outdoor_content.php?editid=Landscape Photography">Landscape Photography</a>
|| <a href="user_outdoor_content.php?editid=Food Photography">Food Photography</a>
|| <a href="user_outdoor_content.php?editid=Editorial Photography">Editorial Photography</a>
|| <a href="user_outdoor_content.php?editid=Event Photography">Event Photography</a>

</i>
</p>
									</a>
								</div>
							</div>

							<div class="fadebox box wow bounceIn">
								<a href="user_content.php?editid=Typing" class="image fit"><img src="images/1 (16).jpg" alt="" /></a>
								<div class="inner">
								<a href="user_content.php?editid=Typing">	
									<h3>Type Setting</h3>
									<p><i><a href="user_content.php?editid=Academic Writing">Academic Writing</a> || 
										<a href="user_content.php?editid=Content Writing">Content Writing</a> || 
										<a href="user_content.php?editid=Assignment Writing">Assignment Writing</a> || 
										<a href="user_content.php?editid=Journalism Writing">Journalism Writing</a> ||
									 <a href="user_content.php?editid=Blog and Article Writing">Blog & Article Writing</a> ||

<a href="user_content.php?editid=Web Content Writers">Web Content Writers</a> ||
<a href="user_content.php?editid=Technical Writers">Technical Writers</a> ||
<a href="user_content.php?editid=Article Writing">Article Writing</a> ||
<a href="user_content.php?editid=Data Entry">Data Entry</a>
</i></p>
									</a>
								</div>
							</div>
							<div class="fadebox box wow bounceIn">
								<a href="user_content.php?editid=Writing" class="image fit"><img src="images/1 (9).jpg" alt="" /></a>
								<div class="inner">
									<a href="user_content.php?editid=Writing" >
										<h3>Hand Writing</h3>
									<p><i><a href="user_content.php?editid=Copywriting">Copywriting</a> || <a href="user_content.php?editid=Academic Writing">Academic Writing</a> || <a href="user_content.php?editid=Content Writing">Content Writing</a> || <a href="user_content.php?editid=Assignment Writing">Assignment Writing</a> || <a href="user_content.php?editid=Creative Writing">Creative Writing</a> </i></p>
									</a>
								</div>
							</div>


							<div class="fadebox box wow bounceIn">
								<a href="user_outdoor_content.php?editid=Home Wiring" class="image fit"><img src="images/1 (2).jpg" alt="" /></a>
								<div class="inner">
									<a href="user_outdoor_content.php?editid=Home Wiring">
										<h3>Electrical Wiring</h3>
									<p>From your exterior walkway to your interior closet, your residential property revolves around electricity. That's why our wiring agents has a comprehensive experience that repairs existing wiring and installs brand new features<br>
Whether you're in need of circuit repairs or fixture installations, let our wiring electricians shed some light on your electrical problems.</p>
									</a>
								</div>
							</div>

							<div class="fadebox box wow bounceIn">
								<a href="user_outdoor_content.php?editid=CCTV Installation" class="image fit"><img src="images/1 (14).jpg" alt="" /></a>
								<div class="inner">
									<a href="user_outdoor_content.php?editid=CCTV Installation">
										<h3>CCTV Installation</h3>
									<p>With agent across the country we can help you get the right CCTV System to suit your needs and budget.
										<br>
Our agent engineers handle everything, from helping you select the right equipment, to ensuring wiring is hidden where possible and provide a truly professional service. If you choose an installation service from us, this will be handled by your local engineer, giving you the best level of local service.</p>
									</a>
								</div>
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
<script src="assets/js/dropdown.js"></script> 
<script src="assets/js/timeout.js"></script> 
	</body>
</html>
<?php } ?>