<?php
include('../predef/verify.php');
include('../predef/usable.php');
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
$strSQL = "SELECT * FROM fox_users WHERE uname = '".$_POST["txtUname"]."' ";  
$objQuery = mysql_query($strSQL);  
$objResult = mysql_fetch_array($objQuery);   
$pass = make_safe($_POST["txtPass"]);
$uname = make_safe($_POST["txtUname"]);
$uname = strtolower($uname);
$pass = strtolower($pass);
if($objResult)  
{  
echo "Username Already Taken.";  
}
elseif ($_POST["txtfName"] == ""){
echo "No Inputs";
}
else  
{ 


$strSQL = "INSERT INTO fox_users ";  
$strSQL .="(user_level, fname, lname, uname, pword, uname1, position, stdno, specialization, course, yearlevel, section, organization, contact, email,payment,amount,datentime,leader) ";  
$strSQL .="VALUES ";  
$strSQL .="('32','".make_safe($_POST["txtfName"])."','".make_safe($_POST["txtlName"])."','".$uname."','".md5($pass)."','".make_safe($_POST["txtUname"])."','Citizen','".make_safe($_POST["txtStudNum"])."','".make_safe($_POST["txtSpec"])."','".make_safe($_POST["txtCourse"])."','".make_safe($_POST["txtYear"])."','".make_safe($_POST["txtSection"])."'";  
$strSQL .=",'".make_safe($_POST["txtOrg"])."','".make_safe($_POST["txtContact"])."','".make_safe($_POST["txtEmail"])."','".make_safe($_POST["txtPayment"])."','".make_safe($_POST["txtAmount"])."',NOW(),'".make_safe($_POST["txtAdded"])."') ";  
$objQuery = mysql_query($strSQL);  
?>
<?php

if($objQuery)  
{  
echo "Account Created<br>";
echo "<br>Copy and Paste the following as Email Reply";
echo '
<p align="left">
<br>
<br>
Hi '.make_safe($_POST["txtfName"]).',
<br>
<br>
Your account has been successfully created. Your username is <span style="color:red">'.$uname.'</span> and is similar with your password.
<br>
<br>
Welcome to Foxentry!
<br>
<br>
Regards,
Foxentry Developers
<br>
<br>
<span style="font-size:11px">
www.csccicthau.com<br>
www.csccicthau.com/foxentry<br>
(c) 2015 | College Student Council - College of Information and Communications Technology
<span>
</p>
';
newaccount(make_safe($_POST["txtAdded"]), make_safe($_POST["txtUname"]), $_SESSION['member_id']);
header( "refresh:10;url=add_account.php" );
}  
else  
{  
sqlerror($_SERVER['PHP_SELF'], $strSQL, $_SESSION['member_id'], "INSERT");
echo "Error Save";  
} 
}
?> 
</center> 
</body>  
</html>