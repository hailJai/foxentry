<?php error_reporting(E_ERROR); 

include('user_agent.php');
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Foxentry | Mobile</title>
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
				<div class="logo"><img src="images/foxentry.png" alt="logo" /></div>
	  <!-- start h_menu --></div>
</div>
	<!---------banner------------->
	<div class="banner">
		<div class="wrap">
			<h2>Welcome Foxes!</h2>
		</div>
	</div>	
	<!---------about------------->
	<div class="about" id="about"></div>
<div class="contact" id="contact">
	<div class="wrap">
		<h3>Login</h3>
        <p align="center" style="color:#F00"><?php  
	echo $_GET["Notif"];  
	?>&nbsp;</p>
		<div class="contact_form">
			 	 	    <form method="post" action="loginnow.php">
						  <span><input name="UserName" id="UserName" type="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}"></span>
				    	  <span><input name="Password" id="Password" type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"></span>
				    	  <div class="clear"></div><br>
				    	  <input type="submit" class="" value="LOGIN" name="submit" id="submit">
					    </form>
		 </div>
	</div>
</div>
<div class="footer-bottom">
	<div class="wrap">
		<div class="copy-right">
			<p>© Copyright 2014  All Rights Reserved.<br>
			  Foxentry is Powered by CSC CICT
			</p>
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