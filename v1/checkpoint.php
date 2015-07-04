<?php 
session_start();
error_reporting(E_ERROR); 
include('user_agent.php');
if($_SESSION['username'] == '')
{
	header('location:logout.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Foxentry | First Login</title>
<link href='http://fonts.googleapis.com/css?family=Duru+Sans' rel='stylesheet' type='text/css'>
<script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
</pre>
<link rel="shortcut icon" href="images/logo_fox.ico" />
<style type="text/css">
a {
	color: #FFF;
}
a:visited {
	color: #FFF;
	text-decoration: none;
}
a:hover {
	color: #CCC;
	text-decoration: underline;
}
a:active {
	color: #FFF;
	text-decoration: none;
}
a:link {
	text-decoration: none;
}
.header {
	background-color: #333333;
	height: 40px;
	width: 100%;
	min-width: 350px;
	position: fixed;
	z-index: 100;
	box-shadow: 0px 0px 25px #888888;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 18px;
	color: #FFF;
}
html, body, div, span, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, abbr, address, cite, code, del, dfn, em, img, ins, kbd, q, samp, small, strong, sub, sup, var, b, i, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, figcaption, figure, footer, header, hgroup, menu, nav, section, summary, time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	outline: 0;
	font-size: 100%;
	vertical-align: baseline;
	background: transparent;
}
body, td, th {
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
	font-family: 'Helvetica Neue', Helvetica, sans-serif;
	text-decoration: none;
	vertical-align: middle;
	min-width: 300px;
	padding: 20px;
	width: 300px;
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
	padding: 8px;
	margin-bottom: 20px;
	width: 280px;
}
.form-field:focus {
	background: #fff;
	color: #285170;
}
.form-container h2 {
	text-shadow: #e5f1fc 0 1px 0;
	font-size: 18px;
	margin: 0 0 10px 0;
	font-weight: bold;
	text-align: center;
}
.form-title {
	margin-bottom: 10px;
	color: #283a70;
	text-shadow: #e5f1fc 0 1px 0;
}
.submit-container {
	margin: 8px 0;
	text-align: right;
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
.login {
	width: 800px;
	height: 450px;
	position: absolute;
	left: 50%;
	top: 50%;
	margin: -225px 0 0 -400px;
	background-color:#F9F9F9;
	border: solid 5px;
	border-color: #FFF;
	border-radius: 10px;
	box-shadow: 0px 0px 25px #000000;
	padding: 10px;
}
html {
	background: url(images/loginb.jpg) no-repeat center center fixed;
	background-color:#fff;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}
.left {
	width: 48%;
	padding: 5px;
	height: 100%;
	float: left;
	text-align: center;
	vertical-align: middle;
}
.right {
	width: 49%;
	padding: 5px;
	height: 100%;
	float: left;
	border-left: solid 0px;
	border-color: #FFF;
}
</style>
<script type="text/javascript">
function checkpass()
{
	if(document.frmAdd.txtNewpass.value == '')
		{
			alert('Please Enter Your New Password!');
			frmAdd.txtNewpass.focus(); 
			return false;

		}
	if(document.frmAdd.txtCnfirmPass.value == '')
		{
			alert('Please Confirm Your Password!');
			frmAdd.txtCnfirmPass.focus(); 
			return false;
		}
	if(document.frmAdd.txtCnfirmPass.value != document.frmAdd.txtNewpass.value)
		{
			alert('Password Not Match!');
			frmAdd.txtCnfirmPass.focus(); 
			return false;
		}
	if(document.frmAdd.txtStudentNumber.value == '')
		{
			alert('Please Enter your Student Number!');
			frmAdd.txtStudentNumber.focus(); 
			return false;
		}
	return true
}
</script>
<body>
<div class="header">
  <div style="padding:4px; padding-bottom:0px; float:left;"> <img src="images/logo_fox.png" width="35" height="35" alt="LOGO" /> </div>
  <div style="padding:8px; padding-bottom:0px; float:left;"> FOXENTRY <font style="font-size:9px">beta</font> | <font style="font-size:9px">Powered by CSC CICT & LOOP</font> </div>
  <div style="padding:8px; padding-bottom:0px; padding-right:15px;" align="right">First Login Checkpoint | <a href="logout.php">Sign In <img src="images/LH2-Shutdown-icon.png" width="20" height="20" vspace="8" /></a> </div>
</div>
<div class="login">
  <div class="left"> 
    <p><br />
      </p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><img src="images/logo_fox.png" alt="fox logo" width="127" height="125" align="middle" /><br />
      <br />
      <br />
      <br />
      <span style="font-size:24px; transform-style:flat;">Hi <?php  echo "<span style='color:blue;'>" . $_SESSION['username'] . " </span>";?>please change your password.</span></p>
    <p>&nbsp;</p>
    <p align="center" style="color:#F00"><?php  
	echo $_GET["Notif"];  
	?>&nbsp;</p>
    <p></p>
  </div>
  <div class="right">
    <center>
      <form class="form-container" method="post" action="account/change_password.php" onsubmit="return checkpass();" name="frmAdd">
        <div class="form-title">
        <h2>&nbsp;</h2>
        <h2>CHANGE PASSWORD</h2>
        </div>
        <div class="form-title">
          <p>&nbsp;</p>
          <p>New Password</p>
        </div>
        <input class="form-field" type="password" name="txtNewpass" id="txtNewpass" />
        <br />
        <div class="form-title">Confirm Password</div>
        <input class="form-field" type="password" name="txtCnfirmPass" id="txtCnfirmPass" />
         <br />
        <div class="form-title">Student Number</div>
        <input class="form-field" type="text" name="txtStudentNumber" id="txtStudentNumber" />
        <input type="hidden" name="txtID" id="txtID" value="<?php  echo $_SESSION['member_id']; ?>" />
        <input type="hidden" name="oldapss" id="oldpass" value="<?php echo $_SESSION['pass']; ?>" />
        <br />
        <div class="submit-container">
          <input class="submit-button" type="submit" value="CHANGE" name="submit"/>
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
