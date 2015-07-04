<?php
include('this.php');
session_start();
if (!isset($_SESSION['member_id'])){
header('location:login.php');
}
$member_id=$_SESSION['member_id'];

$result=mysql_query("select * from fox_users where uID='$member_id'")or die(mysql_error);
$row=mysql_fetch_array($result);

$FirstName=$row['fname'];
$LastName=$row['lname'];
$position=$row['position'];

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Foxentry Mobile</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="SUBSCRIBE iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- start portfolios -->
<link href="css/portfolio.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="js/fliplightbox.min.js"></script>
		<script type="text/javascript">
			$('body').flipLightBox()
		</script>
		<script type="text/javascript" src="js/jquery.easing.min.js"></script>
		<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
		<script type="text/javascript">
			$(function() {

				var filterList = {

					init : function() {

						// MixItUp plugin
						// http://mixitup.io
						$('#portfoliolist').mixitup({
							targetSelector : '.portfolio',
							filterSelector : '.filter',
							effects : ['fade'],
							easing : 'snap',
							// call the hover effect
							onMixEnd : filterList.hoverEffect()
						});

					},

					hoverEffect : function() {

						// Simple parallax effect
						$('#portfoliolist .portfolio').hover(function() {
							$(this).find('.label').stop().animate({
								bottom : 0
							}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({
								top : 0
							}, 500, 'easeOutQuad');
						}, function() {
							$(this).find('.label').stop().animate({
								bottom : -40
							}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({
								top : 0
							}, 300, 'easeOutQuad');
						});

					}
				};

				// Run the show!
				filterList.init();

			});
		</script>
		 <!-- scroll -->
		 <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		 <!-- //scroll -->
 <!-- start header_style3 -->
			<script type="text/javascript"  src="js/menu.js"></script>
<!-- popup -->
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
				<script>
					$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
					});
				});
				</script>
<script type="text/javascript" src="js/jquery.lightbox.js"></script>
<link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen" />
  <script type="text/javascript">
    $(function() {
        $('#portfoliolist a').lightBox();
    });
   </script>

</head>
<body>
	<div class="header" id="home">
		   <div class="wrap">
				<div class="logo"><a href="index.html"><img src="images/foxentry.png" alt="logo" /></a></div>
				<!-- start h_menu -->
			<div id="topnav"><!--start topnav --->
	        <nav>
	        		 <ul>
                     	 <li class="active"><a href="#home" class="scroll"><?php echo $FirstName." ".$LastName; ?></a></li>
						 <li class="active"><a href="#home" class="scroll">Dashboard</a></li>
					     <li><a href="#about" class="scroll">About</a></li>
					     <li><a href="#team" class="scroll">Team</a> </li>	
					     <li><a href="#portfolio" class="scroll">Portfolio</a> </li>			            
					     <li><a href="#contact" class="scroll">Contact</a></li>
                         <li><a href="logout.php" class="scroll">Log Out</a></li>
						<div class="clear"> </div>
					</ul>
	        </nav>
	        <a href="#" id="navbtn">Nav Menu</a>
	        <div class="clear"></div>
	      </div>					
	</div>
</div>
	<!---------banner------------->
<div class="banner">
<form method="post" action="update.php "name="frmSearch" >
		<div class="wrap">
			<h2>Dashboard 
			  
    <input type="hidden" name="txtaID" value="<?php echo $member_id; ?>"/>
      <input name="update" maxlength="140" type="text" id="txtKeyword" tabindex="1" value="write post here" onblur="if (this.value == '') {this.value = 'write post here';}"
 onfocus="if (this.value == 'write post here') {this.value = '';}"/>
      <input name="btn_search" type="submit"  id="searchSubmit" value=""/>
  	
			</h2>
		</div>
        </form>
	</div>
	<!---------about------------->
<div class="about" id="about"></div>
	<div class="team" id="team">
	<div class="wrap">
		<div class="team-grids">

<?php
error_reporting(E_ERROR);
include('conn2.php');
$result = mysqli_query($con,"SELECT * FROM fox_updates ORDER By upID desc");
while($row = mysqli_fetch_array($result))
  {
	echo "  	
	<div class='images_1_of_4'>
	<div style='width:20%; height:60px; float:left;'>
    <a href='#' class='radius'>";
	$result3 = mysqli_query($con,"SELECT * FROM fox_files WHERE aID ='".$row['aID']."' AND type ='dp' ORDER BY id DESC LIMIT 1");
	$countimg=mysqli_num_rows($result3);
	if ($countimg > 0)
	{
		while($row3 = mysqli_fetch_array($result3))
  		{
 		echo '<img src="data:image/jpeg;base64,' . base64_encode($row3['data']) . '" width="54" height="54">';
  		}
	}
	else
	{
		echo "<img src='../images/user.png' width='54' height='54' />";
	}
	echo "
		</a>
        </div>
        <div style='width:75%; height:60px; float:left;' >
        <h3 align='left'>";
	$result1 = mysqli_query($con,"SELECT * FROM fox_users WHERE uID='".$row['aID']."'");
  	while($row1 = mysqli_fetch_array($result1))
  	{
	echo  $row1['fname']. " ". $row1['lname'] ;
  	}
	
	$result2 = mysqli_query($con,"SELECT * FROM fox_awesome WHERE upID='".$row['upID']."'");
	$count=mysqli_num_rows($result2);
	
	echo "
	</h3>
    </div>
	<p>";
	
	echo  $row['status'];
	
	
	echo "
	</p>
	<a href='#contact' class='likes'>
	<button style='background-image:url(images/awesome.png); width:91px; height:48px; border:0; padding-left:20px; color:#FFF; background-color:transparent'>+ ".$count."</button></a> 
	<a href='#contact' class='likes' >
	<button style='background-image:url(images/comment.png); width:91px; height:48px; border:0; padding-left:20px; color:#FFF; background-color:transparent'>&nbsp;</button>
	</a>	
	</div>
	
	<div class='clear'> </div>
	";
  }
?>
						
						<div class="clear"> </div>
	  </div>
</div>
</div>
<div class="footer-bottom">
	<div class="wrap">
		<div class="copy-right">
			<p>© Copyright 2014  All Rights Reserved.<br>
			  Foxentry is Powered by CSC CICT</p>
			 <!-- scroll_top_btn -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		</div>
	</div>
    
</div>	
</body>
</html>