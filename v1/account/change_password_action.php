<?php include('../predef/verify.php'); ?>
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
include('../joking.php'); 
include('../predef/usable.php'); 
perval(make_safe($_POST["txtID"]));

$pass = make_safe($_POST["txtCpass"]);

$strSQL = "SELECT * FROM fox_users WHERE uId = '".make_safe($_POST["txtID"])."' AND pword = '".md5(make_safe($_POST["txtPass2"]))."' ";  
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
		echo "Password Changed!";
		header( "refresh:2;url=update_account.php" );
	}  
	else  
	{  
		sqlerror($_SERVER['PHP_SELF'], $strSQL, $_SESSION['member_id'], "UPDATE");
		echo "Error Save";  
	}  
}  
else  
{ 
	echo "Password Not Changed!";
		header( "refresh:2;url=update_account.php" );
	
}
?>  
</center>