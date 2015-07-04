<?php
include('../predef/usable.php');
$id = $_POST["txtdln"];
if(validate_cert($id) == 'false')
{
	header("location:../err/unauthorized.php");
}
//==============================================================
$html = '
<html>
<head>
<title>Digital Certificate '.certtitle($id).'</title>
</head>
<style type="text/css">
body{
	font-family:Arial, Helvetica, sans-serif;
}
</style>
<script type="text/javascript">
	var my_image = new Image();
	my_image.src = \''.certbg($id).'\';
</script>
<body>
<div style="background-image:url('.certbg($id).'); background-repeat:no-repeat; background-size:cover; width:11in; height:8.5in; text-align:center">
<div style="padding-top:285px;">
	<p style="font-family:trebuchet; text-transform:uppercase; font-size:55px; text-align:center; margin-bottom:-10px">
		'.fullname($_SESSION['member_id']).'<br>
		<span style="font-size:10px">('.user_info('stdno').')</span>
	</p>
	<p style="font-family:trebuchet; font-size:14px; text-align:center; margin-top:-100px">
		<center>
		'.certtext($id).'
		</center>
	</p>
</div>
</div>
<htmlpagefooter name="myHTMLFooterOdd" style="display:none">
<div align="left" style="text-align:right; font-size: 10px;">
Registration Code: '.user_info('stdno').'-'.validate_cert($id).'<br />
Validate this certificate on 
http://csccicthau.com/foxentry/digicert.php?id='.validate_cert($id).' </div>
</htmlpagefooter>
<sethtmlpagefooter name="myHTMLFooterOdd" page="O" value="on" show-this-page="1" />
</body>
</html>
';
//==============================================================
//==============================================================
include("../mpdf/mpdf.php");

$mpdf=new mPDF('c','Letter-L','','',8,5,5,5,5,5); //LEFT,10,16,10,10,10
$mpdf->useOnlyCoreFonts = false;    // false is default
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
//==============================================================
//==============================================================


?>