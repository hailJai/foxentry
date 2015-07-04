<?php error_reporting(E_ERROR); 

include('user_agent.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Entry Point | Fox</title>
<link href='http://fonts.googleapis.com/css?family=Duru+Sans' rel='stylesheet' type='text/css'>
<script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script></pre>
<link rel="shortcut icon" href="images/logo_fox.ico" />
<style type="text/css">
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
}

.form-container {
   border: 1px solid #d1dff0;
   background: #a3bcc7;
   background: -webkit-gradient(linear, left top, left bottom, from(#d3e4f0), to(#a3bcc7));
   background: -webkit-linear-gradient(top, #d3e4f0, #a3bcc7);
   background: -moz-linear-gradient(top, #d3e4f0, #a3bcc7);
   background: -ms-linear-gradient(top, #d3e4f0, #a3bcc7);
   background: -o-linear-gradient(top, #d3e4f0, #a3bcc7);
   background-image: -ms-linear-gradient(top, #d3e4f0 0%, #a3bcc7 100%);
   -webkit-border-radius: 8px;
   -moz-border-radius: 8px;
   border-radius: 8px;
   -webkit-box-shadow: rgba(000,000,000,0.9) 0 1px 2px, inset rgba(255,255,255,0.4) 0 0px 0;
   -moz-box-shadow: rgba(000,000,000,0.9) 0 1px 2px, inset rgba(255,255,255,0.4) 0 0px 0;
   box-shadow: rgba(000,000,000,0.9) 0 1px 2px, inset rgba(255,255,255,0.4) 0 0px 0;
   font-family: 'Helvetica Neue',Helvetica,sans-serif;
   text-decoration: none;
   vertical-align: middle;
   min-width:300px;
   padding:20px;
   width:300px;
   }
.form-field {
   border: 1px solid #a2b4c7;
   background: #c3dae3;
   -webkit-border-radius: 4px;
   -moz-border-radius: 4px;
   border-radius: 4px;
   color: #a2b4c7;
   -webkit-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(000,000,000,0.7) 0 0px 0px;
   -moz-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(000,000,000,0.7) 0 0px 0px;
   box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(000,000,000,0.7) 0 0px 0px;
   padding:8px;
   margin-bottom:20px;
   width:280px;
   }
.form-field:focus {
   background: #fff;
   color: #285170;
   }
.form-container h2 {
   text-shadow: #e5f1fc 0 1px 0;
   font-size:18px;
   margin: 0 0 10px 0;
   font-weight:bold;
   text-align:center;
    }
.form-title {
   margin-bottom:10px;
   color: #283a70;
   text-shadow: #e5f1fc 0 1px 0;
   }
.submit-container {
   margin:8px 0;
   text-align:right;
   }
.submit-button {
   border: 1px solid #447314;
   background: #6aa436;
   background: -webkit-gradient(linear, left top, left bottom, from(#8dc059), to(#6aa436));
   background: -webkit-linear-gradient(top, #8dc059, #6aa436);
   background: -moz-linear-gradient(top, #8dc059, #6aa436);
   background: -ms-linear-gradient(top, #8dc059, #6aa436);
   background: -o-linear-gradient(top, #8dc059, #6aa436);
   background-image: -ms-linear-gradient(top, #8dc059 0%, #6aa436 100%);
   -webkit-border-radius: 4px;
   -moz-border-radius: 4px;
   border-radius: 4px;
   -webkit-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
   -moz-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
   box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
   text-shadow: #addc7e 0 1px 0;
   color: #31540c;
   font-family: helvetica, serif;
   padding: 8.5px 18px;
   font-size: 14px;
   text-decoration: none;
   vertical-align: middle;
   }
.submit-button:hover {
   border: 1px solid #447314;
   text-shadow: #31540c 0 1px 0;
   background: #6aa436;
   background: -webkit-gradient(linear, left top, left bottom, from(#8dc059), to(#6aa436));
   background: -webkit-linear-gradient(top, #8dc059, #6aa436);
   background: -moz-linear-gradient(top, #8dc059, #6aa436);
   background: -ms-linear-gradient(top, #8dc059, #6aa436);
   background: -o-linear-gradient(top, #8dc059, #6aa436);
   background-image: -ms-linear-gradient(top, #8dc059 0%, #6aa436 100%);
   color: #fff;
   }
.submit-button:active {
   text-shadow: #31540c 0 1px 0;
   border: 1px solid #447314;
   background: #8dc059;
   background: -webkit-gradient(linear, left top, left bottom, from(#6aa436), to(#6aa436));
   background: -webkit-linear-gradient(top, #6aa436, #8dc059);
   background: -moz-linear-gradient(top, #6aa436, #8dc059);
   background: -ms-linear-gradient(top, #6aa436, #8dc059);
   background: -o-linear-gradient(top, #6aa436, #8dc059);
   background-image: -ms-linear-gradient(top, #6aa436 0%, #8dc059 100%);
   color: #fff;
   }
</style>
</head>
<style type="text/css">
	.login{
	width:800px;
	height:450px;
	position:absolute;
    left:50%;
    top:50%;
    margin:-225px 0 0 -400px;
	background: rgba(223, 223, 223, 0.6);
	border:solid 5px;
	border-color:#FFF;
	border-radius:10px;
	box-shadow: 0px 0px 25px #000000;
	padding:10px;
	}
	html { 
	background: url(images/loginbg0.jpg) no-repeat center center fixed; 
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;			
	}
	.left {
	width:48%;
	padding:5px;
	height:100%;
	float:left;
	text-align: center;
	vertical-align: middle; 
	}
	.right {
	width:49%;
	padding:5px;
	height:100%;
	float:left;
	border-left: solid 2px;
	border-color:#FFF;
	}

#crossfade > img { 
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0px;
    left: 0px;
    color: transparent;
    opacity: 0;
    z-index: 0;
    -webkit-backface-visibility: hidden;
    -webkit-animation: imageAnimation 30s linear infinite 0s;
    -moz-animation: imageAnimation 30s linear infinite 0s;
    -o-animation: imageAnimation 30s linear infinite 0s;
    -ms-animation: imageAnimation 30s linear infinite 0s;
    animation: imageAnimation 30s linear infinite 0s; 
}
#crossfade > img:nth-child(2)  { 
    background-image: url(images/loginbg.jpg);
    -webkit-animation-delay: 6s;
    -moz-animation-delay: 6s;
    -o-animation-delay: 6s;
    -ms-animation-delay: 6s;
    animation-delay: 6s; 
}
#crossfade > img:nth-child(3) { 
    background-image: url(images/img1.jpg);
    -webkit-animation-delay: 12s;
    -moz-animation-delay: 12s;
    -o-animation-delay: 12s;
    -ms-animation-delay: 12s;
    animation-delay: 12s; 
}
#crossfade > img:nth-child(4) { 
    background-image: url(images/img2.jpg);
    -webkit-animation-delay: 18s;
    -moz-animation-delay: 18s;
    -o-animation-delay: 18s;
    -ms-animation-delay: 18s;
    animation-delay: 18s; 
}
#crossfade > img:nth-child(5) { 
    background-image: url(images/img3.jpg);
    -webkit-animation-delay: 24s;
    -moz-animation-delay: 24s;
    -o-animation-delay: 24s;
    -ms-animation-delay: 24s;
    animation-delay: 24s; 
}

@-webkit-keyframes imageAnimation { 
    0% { opacity: 0;
    -webkit-animation-timing-function: ease-in; }
    8% { opacity: 1;
         -webkit-animation-timing-function: ease-out; }
    17% { opacity: 1 }
    25% { opacity: 0 }
    100% { opacity: 0 }
}
</style>
<body>
<div id= "crossfade">
     <img class = "img1" src = "images/loginbg.jpg" alt = "jpg">
     <img class = "img2" src = "images/img1.jpg" alt = "jpg">
     <img class = "img3" src = "images/img2.jpg" alt = "jpg">
     <img class = "img4" src = "images/img3.jpg" alt = "jpg">
  </div>
<div class="login">
  <div class="left">
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
	<font style="font-family: 'Duru Sans', sans-serif; font-size:18px; color:#333333">
	<?php
	date_default_timezone_set("Asia/Singapore");
	echo date("l, F jS", time()); 
	?>
    </font>
	<br />
    <font  style="font-family: 'Duru Sans', sans-serif; font-size:70px; color:#333333">
	<?php
	echo date("g:i A", time());
	?>
    </font>
    <p align="center" style="color:#F00"><?php  
	echo $_GET["Notif"];  
	?>&nbsp;</p>

	</div>
  <div class="right">
  	<center>
  	  <p><img src="images/logo_fox.png" alt="fox logo" width="97" height="96" align="middle" />
      </p>
  	  <form class="form-container" method="post" action="loginnow.php">
		<div class="form-title">
  		<h2>LOGIN</h2></div>
		<div class="form-title">Username</div>
		<input class="form-field" type="text" name="UserName" id="UserName" /><br />
		<div class="form-title">Password</div>
		<input class="form-field" type="password" name="Password" id="Password" /><br />
		<div class="submit-container">	
		<input class="submit-button" type="submit" value="LOGIN" name="submit"/>
		</div>
  	  	</form>
  	</center>
    </div>
</div>
<script  type='text/javascript'>

$(document).ready(function(){

$('body').css('backgroundImage','url(images/loginbg.jpg)');

});

</script>
</body>
</html>
