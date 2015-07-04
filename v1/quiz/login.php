<?php  
include('../this.php');
include('../joking.php');

$active = make_safe($_POST["activequiz"]);
$uname = make_safe($_POST["username"]);

$strSQL = "SELECT * FROM qz_account WHERE username = '".$uname."'";  
$objQuery = mysql_query($strSQL);  
$objResult = mysql_fetch_array($objQuery);   
if($objResult)  
{
	$strSQL = "SELECT * FROM qz_account WHERE username = '".$uname."' AND activequiz = '".$active."' ";  
	$objQuery = mysql_query($strSQL);  
	$objResult = mysql_fetch_array($objQuery);   
	if($objResult)  
	{  
		session_start();
		$_SESSION['username']=$uname;
		$_SESSION['activeex']=$active;
		header( "refresh:0;url=home.php" ); 
	}
	else{  
		header( "refresh:0;url=index.php?n=Oops! Username Taken" ); 
	}
}
else  
{ 

$strSQL = "SELECT * FROM qz_account WHERE username = '".$uname."' AND activequiz = '".$active."' ";  
$objQuery = mysql_query($strSQL);  
$objResult = mysql_fetch_array($objQuery);   
if($objResult)  
{  
header( "refresh:0;url=home.php" ); 
}
else  
{ 

$strSQL = "INSERT INTO qz_account ";  
$strSQL .="(activequiz, username) ";  
$strSQL .="VALUES ";  
$strSQL .="('".$active."',";  
$strSQL .="'".$uname."') ";  
$objQuery = mysql_query($strSQL);  

if($objQuery)  
{
	session_start();
	$_SESSION['username']=$uname;
	$_SESSION['activeex']=$active;
	header( "refresh:0;url=home.php" );
}  
else  
{  
	header( "refresh:0;url=index.php?n=Error Save! '".$strSQL."'" );  
} 
}
}
?> 