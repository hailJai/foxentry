<?php
include('../predef/usable.php');
$id = $_POST["txtdln"];
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
<body>
<div style="background-image:url('.certbg($id).'); background-repeat:no-repeat; background-size:cover; width:11in; height:8.5in; text-align:center">
<div style="padding-top:325px;">
	<p style="font-family:trebuchet; text-transform:uppercase; font-size:55px; text-align:center; margin-bottom:-10px">
		'.fullname($_SESSION['member_id']).'<br>
		<span style="font-size:10px">(20179372)</span>
	</p>
	<p style="font-family:trebuchet; font-size:14px; text-align:center; margin-top:-100px">
		<center>
		'.certtext($id).'
		</center>
	</p>
</div>
</div>
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