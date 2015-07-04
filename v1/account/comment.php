<?php  
include('../this.php');
include('../joking.php');
include('../predef/verify.php');
include('../predef/usable.php');
$t = time();
$to = make_safe($_POST["txtTo"]);
$from = make_safe($_POST["txtaID"]);
$upid = $_POST["txtupID"];
if (make_safe($_POST["txtComment"]) <> ''){
	$strSQL = "INSERT INTO fox_comments ";  
	$strSQL .="(datetime,comment,upID,aID,nTime) ";  
	$strSQL .="VALUES ";  
	$strSQL .="(NOW(),'".make_safe($_POST["txtComment"])."','".$_POST["txtupID"]."'";  
	$strSQL .=",'".make_safe($_POST["txtaID"])."','".make_safe($t)."') ";  
	$objQuery = mysql_query($strSQL);  
	if($objQuery)  
	{ 
	notifcations('comment',$to,$from,$upid);
	header( "refresh:0;url=post.php?id=".$_POST["txtupID"]."" );
	}  
	else  
	{  
	sqlerror($_SERVER['PHP_SELF'], $strSQL, $_SESSION['member_id'], "INSERT");
	echo "Error Save";  
	}
	
}
else
{
	header( "refresh:0;url=post.php?id=".$_POST["txtupID"]."" );
}
?>  
