<?php  
include('../this.php');
include('../joking.php');
include('../predef/verify.php');
include('../predef/usable.php');
$t = time();
if($_POST["postContent"] <> '')
{
$strSQL = "INSERT INTO fox_updates ";  
$strSQL .="(datetime,status,aID,ntime) ";  
$strSQL .="VALUES ";  
$strSQL .="(NOW(),'".$_POST["postContent"]."'";  
$strSQL .=",'".$_POST["txtaID"]."','".$t."') ";  
$objQuery = mysql_query($strSQL);  
if($objQuery)  
{  
header( "refresh:0;url=../index.php" );
}  
else  
{
	sqlerror($_SERVER['PHP_SELF'], $strSQL, $_SESSION['member_id'], "INSERT");  
	echo "Error Save";  
}
}
else{
	header( "refresh:0;url=../index.php" );
	}
?> 