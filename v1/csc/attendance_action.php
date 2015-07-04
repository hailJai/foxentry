<?php
include('../predef/verify.php');
include('../predef/usable.php');
val($_SESSION['accesslvl'],19);	
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
date_default_timezone_set("Asia/Singapore");
$time = date("g:i A", time()); //regular time
$tims = time(); //time in seconds
$date = date("m/d/Y", time()); //date


if(isset($_POST['login']))
{

$strSQL = "INSERT INTO fox_cscattendance ";  
$strSQL .="(uID, date_now, in_time, in_seconds, type, status) ";  
$strSQL .="VALUES ";  
$strSQL .="('".make_safe($_POST["txtuID"])."','".$date."','".$time."','".$tims."'";  
$strSQL .=",'".make_safe($_POST["txtType"])."','unlogged sign out') ";  
$objQuery = mysql_query($strSQL);  



}
elseif(isset($_POST['logout']))
{


	$calculated = $tims - $_POST['txtIns'];
	$minutes = $calculated / 60;
	$hours = $minutes / 60;
	
	if ($_POST['txtType'] == "Duty Hours")
	{
	if (($hours >= 2) && ($hours < 15))
	{
		$stats = "Good";
	}
	elseif($hours > 14)
	{
		$stats = "Inconsistent";
	}
	elseif($hours < 2)
	{
		$stats = "Bad";
	}
	}
	else
	{
		$stats = "Awesome";
	}
	
 
	
	$strSQL = "UPDATE fox_cscattendance ";  
	$strSQL .="SET out_time = '".$time."', out_seconds = '".$tims."', status= '".$stats."', total = '".$minutes."' ";  
	$strSQL .="WHERE id = '".make_safe($_POST["txtID"])."'";  
	$objQuery = mysql_query($strSQL); 

}
elseif(isset($_POST['delete']))
{
	$strSQL .="DELETE FROM fox_cscattendance WHERE id = '".make_safe($_POST["txtID"])."'";  
	$objQuery = mysql_query($strSQL); 
}
elseif(isset($_POST['Refresh']))
{
	header("refresh:0;url=../csc/attendance.php" );
}
if($objQuery)  
	{  
	header("refresh:0;url=../csc/attendance.php" );
	}  
else  
	{  
	echo "Error Save [".$strSQL."]";  
	} 


?> 
</center> 
</body>  
</html>