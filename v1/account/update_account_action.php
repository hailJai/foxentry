<?php
include('../predef/verify.php'); 

?>

<style type="text/css">
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 16px;
	color: #000;
}
</style>
<center>
<img src="../images/Crown-icon.png" width="128" height="128" />
<br />
<?php  

include('../this.php');
include('../joking.php');
include('../predef/usable.php'); 
perval(make_safe($_POST["txtID"]));
$pass = md5(make_safe($_POST["txtPass"]));

$strSQL = "SELECT * FROM fox_users WHERE uID = '".make_safe($_POST["txtID"])."' AND pword='".$pass."' ";  
$objQuery = mysql_query($strSQL);  
$objResult = mysql_fetch_array($objQuery);   
if($objResult)  
{  
	$strSQL = "UPDATE fox_users SET ";  
	$strSQL .="fname = '".make_safe($_POST["txtfName"])."', lname = '".make_safe($_POST["txtlName"])."',  stdno = '".make_safe($_POST["txtStudNum"])."',  specialization = '".make_safe($_POST["txtSpec"])."',  course = '".make_safe($_POST["txtCourse"])."', ";  
	$strSQL .="yearlevel = '".make_safe($_POST["txtYrlvl"])."', section = '".make_safe($_POST["txtSection"])."', contact = '".make_safe($_POST["txtContact"])."', email = '".make_safe($_POST["txtEmail"])."', uname = '".make_safe($_POST["txtUname"])."' WHERE uID = '".make_safe($_POST["txtID"])."' ";  
	$objQuery = mysql_query($strSQL);  

	if($objQuery)  
	{  
		echo "Information Updated";
		header("refresh:1;url=update_account.php");  
	}  
	else  
	{ 
		sqlerror($_SERVER['PHP_SELF'], $strSQL, $_SESSION['member_id'], "UPDATE"); 
		echo "Error Save";  
	}
}
else
{
	echo "Password Not Correct";
	header("refresh:2;url=update_account.php");  
}
?>  
</center>