<?php
include('../no-game/conn2.php');
include "usable.php";
include "this.php";
include "joking.php";
include "../predef/verify.php";
include "../ng/generate.php";
$amount = make_safe($_POST['pamount']);
$icount = make_safe($_POST['item']);
$snb = balance_per($_SESSION['member_id']) - ($amount * $icount);

	if(isset($amount) && ($snb > -1)){
	$strSQL = "UPDATE ng_account SET balance = '".$snb."' WHERE uID = '".$_SESSION['member_id']."'"; 
	$objQuery = mysql_query($strSQL);
	if($objQuery)  
	{	
	
		
		for($x=0; $x < $icount; $x++)
		{
		$gencode = generate_key('prof','1234567890','ABCDEFGHIJKLMNOPQRSTUVWXYZ');
		$strSQL = "INSERT INTO `ng_pcode`(`pcID`, `code`, `count`, `profID`, `amount`) VALUES (NULL,'".$gencode."','0','".$_SESSION['member_id']."','".$amount."')"; 
		$objQuery = mysql_query($strSQL);
		}
		if($objQuery)  
		{
			header("refresh:0;url=../no-game/prof.php");
		}
		else
		{
			echo "Error Save" . $strSQL; 
		}
	
	}
	}
?>