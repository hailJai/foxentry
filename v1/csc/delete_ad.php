
<?php
include('../predef/verify.php');
val($_SESSION['accesslvl'],3);
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
<?php  
include('../account/conn2.php');  

		

		$strSQL = "DELETE FROM fox_files ";  
		$strSQL .="WHERE id = '".$_POST["txtadverID"]."' ";



  
$objQuery = mysql_query($strSQL);
?>
<img src="../images/Crown-icon.png" width="128" height="128" />
<br />
<?php  
if($objQuery)  
{
header( "refresh:1;url=advertupload.php" );   
echo "Ad deleted.";  
}  
else  
{  
echo "Error Delete [".$strSQL."]";  
}  
?> 
</center> 
</body>  
</html>