<?php
include('../predef/verify.php');
val($_SESSION['accesslvl'],95,$_SERVER['PHP_SELF']);		
error_reporting(E_ERROR);
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
$mod = $FirstName . " " . $LastName;

if(isset($_POST["submit"]) && (($_SESSION['accesslvl'] == 1) || ($_SESSION['accesslvl'] == 2) || ($_SESSION['accesslvl'] == 4) || ($_SESSION['accesslvl'] == 16)))
{
	$strSQL = "UPDATE fox_users SET ";  
	$strSQL .="organization = '".make_safe($_POST["txtOrg"])."', payment = '".make_safe($_POST["txtPayment"])."',  amount = '".make_safe($_POST["txtAmount"])."',  position = '".make_safe($_POST["txtPosition"])."',  contact = '".make_safe($_POST["txtContact"])."' ,  section= '".make_safe($_POST["txtSection"])."', user_level = '".make_safe($_POST["txtType"])."'";  
	$strSQL .="WHERE uID = '".make_safe($_POST["txtID"])."' ";  
	$objQuery = mysql_query($strSQL); 
	
	if($objQuery)  
	{
	  
	usermod(make_safe($_POST["txtUname"]), "Updated the Info", $_SESSION['member_id'], $mod);
	echo "Information Updated";
	header("refresh:1;url=../account/accounts.php");  
	}  
	else  
	{ 
	sqlerror($_SERVER['PHP_SELF'], $strSQL, $_SESSION['member_id'], "UPDATE"); 
	echo "Error Save";  
	}
}
elseif(isset($_POST["resetpass"])&& (($_SESSION['accesslvl'] == 1) || ($_SESSION['accesslvl'] == 2) || ($_SESSION['accesslvl'] == 16)))
{
	$pass = make_safe($_POST["txtUname"]);
	$pass = md5($pass);
	
	$strSQL = "UPDATE fox_users SET ";  
	$strSQL .="pword = '".$pass."'";  
	$strSQL .="WHERE uID = '".make_safe($_POST["txtID"])."' ";  
	$objQuery = mysql_query($strSQL); 
	
	if($objQuery)  
	{
	usermod(make_safe($_POST["txtUname"]), "Changed to default the Password", $_SESSION['member_id'], $mod);  
	echo 'Password has been Reset!
	<br>
	<p>Copy and Paste the following as a reply on the email.</p>
	<br>
	<p  align="left">
	Hi '.user_info_client('fname',make_safe($_POST["txtID"])).',
	<br>
	<br>
	Your password has been reset. Your username is <span style="color:red">'.user_info_client('uname',make_safe($_POST["txtID"])).'</span>.
	<br>
	<br>
	<br>
	Regards,
	<br>
	Foxentry Developers
	
	
	<p>
	
	
	';
	header("refresh:10;url=../account/accounts.php");  
	}  
	else  
	{ 
	sqlerror($_SERVER['PHP_SELF'], $strSQL, $_SESSION['member_id'], "UPDATE"); 
	echo "Error Save";  
	}
}
else
{
	usermod(make_safe($_POST["txtUname"]), "Tried Changing the Info", $_SESSION['member_id'], $mod);  
	echo "Unauthorized Changes";
	header("refresh:2;url=../account/accounts.php");
}
  
?>  
</center>