<?php
error_reporting(E_ERROR);
include('../predef/verify.php');
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
include('../this.php');
include('../joking.php');

$strSQL = "INSERT INTO fox_images ";  
$strSQL .="(aID, type, url) ";  
$strSQL .="VALUES ";  
$strSQL .="('".make_safe($_POST["txtaID"])."'";  
$strSQL .=",'".make_safe($_POST["txtType"])."','".filterurl($_POST["uploaded_file1"])."') ";  
$objQuery = mysql_query($strSQL);  

if($objQuery)  
{  
echo "Display Photo Changed";
flush();
header( "refresh:0;url=dashboard.php" );
}  
else  
{  
echo "Error Save [".$strSQL."]";  
} 
?> 
</center> 
</body>  
</html>