<style type="text/css">
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 16px;
	color: #000;
}
</style>
<center>
<br />
<?php  

include('../this.php');
include('../predef/verify.php'); 
include('../joking.php'); 

$pass = make_safe($_POST["txtCnfirmPass"]);

$strSQL = "SELECT * FROM fox_users WHERE uId = '".make_safe($_POST["txtID"])."' AND pword = '".make_safe($_POST["oldapss"])."' AND stdno =  '".make_safe($_POST["txtStudentNumber"])."'";  
$objQuery = mysql_query($strSQL);  
$objResult = mysql_fetch_array($objQuery);

if($objResult)  
{  
   
$strSQL = "UPDATE fox_users SET ";  
$strSQL .="pword = '".md5($pass)."' ";  
$strSQL .="WHERE uId = '".make_safe($_POST["txtID"])."' ";  
$objQuery = mysql_query($strSQL);  

	if($objQuery)  
	{  
		header( "refresh:0;url=../welcome/" );
	}  
	else  
	{  
		echo "Error Save [".$strSQL."]";  
	}  
}  
else  
{ 
	header('location:../login.php?Notif=Password not Changed. Invalid Inputs');
	
}
?>  
</center>