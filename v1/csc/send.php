<?php
error_reporting(E_ERROR); 
include('../predef/verify.php');
include('../this.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<style type="text/css">
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 16px;
	color: #000;
}
</style>
<body>
<center>  
<img src="../images/Crown-icon.png" width="128" height="128" />
<br />
<?php  


if ($_POST["messagebody"] == ""){
echo "No Inputs";
}
else  
{ 


$strSQL = "INSERT INTO fox_messages ";  
$strSQL .="(type, subject, body, sender, receiver, date, time, convo) ";  
$strSQL .="VALUES ";  
$strSQL .="('".$_POST["txtType"]."','".$_POST["txtSub"]."','".$_POST["messagebody"]."'";  
$strSQL .=",'".$_POST["txtuID"]."','".$_POST["txtTid"]."','".$_POST["txtDate"]."','".$_POST["txtTime"]."','".$_POST["txtConvo"]."') ";  
$objQuery = mysql_query($strSQL);  

if($objQuery)  
{  
echo "Sent";
header( "refresh:0;url=../account/dashboard.php" );
}  
else  
{  
echo "Error Save [".$strSQL."]";  
} 
}
?> 
</center> 
</body>  
</html>