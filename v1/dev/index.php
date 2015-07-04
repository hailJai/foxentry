<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="shortcut icon" href="assets/img/logo_fox.png">
 <title>FOXENTRY - Developers of Foxentry</title>
 <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="assets/css/main.css">
 <link rel="stylesheet" type="text/css" href="assets/css/font-awesome-4.1.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="assets/css/animate.css">
 <!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
  <!-- This is the image viewer -->
  <div id="overlay"></div>
  <div id="frame" class="">
    <span id="close" data-toggle="tooltip" data-placement="top" title="CLOSE">&times;</span>
    <img class="img-responsive" src="" />
  </div> <!-- End of image viewer -->


<div class="header">
  <div style="padding:4px; padding-bottom:0px; float:left; margin-top:-20px;"> <img src="../images/logo_fox.png" width="35" height="35" alt="LOGO" /> </div>
  <div style="padding:8px; padding-bottom:0px; float:left; margin-top:-20px;"> FOXENTRY <font style="font-size:9px">beta</font> | <font style="font-size:9px">Powered by CSC CICT | LOOP + Code Geeks</font> </div>
  <div style="padding:8px; padding-bottom:0px; padding-right:15px; margin-top:-23px;" align="right">Send us feedback! | <a href="logout.php">Sign In <img src="../images/LH2-Shutdown-icon.png" width="20" height="20" vspace="8" /></a> </div>
</div>


  <!-- This is the header -->
	<!--
    <div class="container-fluid header">
  	<div class="row">
      <ul class="branding">
        <li>
          <a href="index.html">
            <img class="img-responsive img-circle" src="assets/img/logo_fox.png"/>
          </a>
        </li>
      </ul>
      <p class="pow">POWERED BY | <span class="orgs">CSC / LOOP / CODE GEEKS</span></p>
    </div>
  </div>
  -->
  <!-- This is the main section -->
  <div class="container-fluid main">
    <div class="row">
      <!-- First row -->
    	<div class="col-sm-6 main-section-one">
    		<div class="section-one text-center">
	    		<div class="dev-head text-center">
	    			<h3><img src="../images/stickies-icon.png" width="43" height="43" alt="dev">  DEVELOPERS</h3>
	    		</div>
    			
        <?php
				
		error_reporting(E_ERROR);
		include('../account/conn2.php');
		include('../predef/usable.php');
		$result3 = mysqli_query($con,"SELECT * FROM fox_users WHERE user_level = 1 AND position != 'Chairperson' AND specialization != 'Web Development'");
		while($row3 = mysqli_fetch_array($result3))
  		{
		echo "
		
				<div class='developers clearfix'>
    				<div class='dev-img col-sm-6 col-md-4'>
    					".devphoto($row3['uID'])."
    				</div>

    				<div class='dev-details col-sm-6 col-md-8'>
    					<ul>
    						<li>Name: ".$row3['fname']." ".$row3['lname']."</li>
    						<li>Org.: ".orgname($row3['organization'])."</li>
    						<li>Email: ".$row3['email']."</li>
    						<li>Contact: ".$row3['contact']."</li>
    						<li>Course: ".$row3['course']." with specialization in ".$row3['specialization']."</li>
    					</ul>
    				</div>
    			</div>
          		<hr>
		
				";
				}

				
				
				?>
                
       	</div>
    	</div> <!-- End of first row -->

      <!-- Second row -->
    	<div class="col-sm-6 main-section-two">
  			<div class="section-two text-center">
	    		<div class="dev-head hidden-xs">
	    			<h3><img src="../images/stickies-icon.png" width="43" height="43" alt="dev">  DEVELOPERS</h3>
	    		</div>
    			
    			<?php
				
		$result1 = mysqli_query($con,"SELECT * FROM fox_users WHERE user_level = 1 AND position != 'Chairperson' AND specialization = 'Web Development'");
		while($row1 = mysqli_fetch_array($result1))
  		{
		echo "
		
				<div class='developers clearfix'>
    				<div class='dev-img col-sm-6 col-md-4'>
    					".devphoto($row1['uID'])."
    				</div>

    				<div class='dev-details col-sm-6 col-md-8'>
    					<ul>
    						<li>Name: ".$row1['fname']." ".$row1['lname']."</li>
    						<li>Org.: ".orgname($row1['organization'])."</li>
    						<li>Email: ".$row1['email']."</li>
    						<li>Contact: ".$row1['contact']."</li>
    						<li>Course: ".$row1['course']." with specialization in ".$row1['specialization']."</li>
    					</ul>
    				</div>
    			</div>
          		<hr>
		
				";
				}

				
				
				?>
    			
    			

  			</div>
    	</div> <!-- End of Second row -->
    </div>
  </div> <!-- End of main section -->

	<div class=" container-fluid footer">
    <div class="row">
      <div class="footer-logo col-sm-3 col-md-3">
        <img class="img-responsive" src="assets/img/logo_fox.png">
      </div>
      <div class="col-sm-3 col-md-3">
        <h3 class="text-info">LINKAGES</h3>
        <ul class="orgs-links">
          <li><a href="#">College Student Council</a></li>
          <li><a href="#">The Access Point</a></li>
          <li><a href="#">Cisco Student Organization</a></li>
          <li><a href="#">Code Geeks</a></li>
          <li><a href="#">League of Outstanding Programmers</a></li>
        </ul>
      </div>
      <div class="col-sm-3 col-md-3">
        <h3 class="text-info">FOXENTRY</h3>
        <ul class="about-links">
          <li><a href="http://csccicthau.com/foxentry">HOME</a></li>
          <li><a href="#">CONTACT US</a></li>
          <li><a href="../help.php">HELP</a></li>
          <li><a href="#">DEVELOPERS</a></li>
          <li><a href="#">FACULTY CONSULTATION HOURS</a></li>
          <li><a href="../index.php?p=suggest">SEND US FEEDBACK</a></li>
        </ul>
      </div>
      <div class="social col-sm-3 col-md-3">
        <h3 class="text-info">SOCIAL SITES</h3>
        <ul class="social-links">
          <li><a href="http://fb.com/csccicthau/"><i class="fa fa-facebook-square"></i></a></li>
          <li><a href="http://plus.google.com/haucsccict1415/"><i class="fa fa-google-plus-square"></i></a></li>
          <li><a href="http://twitter.com/csccicthau"><i class="fa fa-twitter-square"></i></a></li>
          <li><a href="http://instagram.com/csccicthau"><i class="fa fa-instagram"></i></a></li>
          <li><a href="http://insidecmt.tumblr.com/"><i class="fa fa-tumblr-square"></i></a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container-fluid footer-end text-center">
    <div class="row">
      <small>
         Copyright  2014 © CSC-CICT. All rights reserved.
      </small>
    </div>
  </div>

<!--
==============================================================================
All javascript are placed at the end of the document so the pages load faster.
==============================================================================
-->
  <script src="assets/js/jquery.js"></script>
	<script src="assets/js/jquery.fittext.js"></script>
  <script src="assets/js/modernizr.js" ></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
  
</body>
</html>