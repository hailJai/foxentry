<?php
include('../no-game/conn2.php');
include "../predef/verify.php";
include "../joking.php";
include "usable.php";
include "this.php";
$amount = make_safe($_POST['amount']);
$rkey = make_safe($_POST['rkey']);
$snb = balance_per($_SESSION['member_id']) - $amount;
$rnb = balance_rec($rkey) + $amount;


	if((isset($_POST['amount'])) && ($snb > -1) && ($rkey != basicinfo("rkey")) && ($amount > 0) && ($amount > 0.99)){
		

		$strSQL = "UPDATE ng_account SET balance = '".$snb."' WHERE uID = '".$_SESSION['member_id']."'"; 
		$objQuery = mysql_query($strSQL);
		if($objQuery)  
		{
			$strSQL = "UPDATE ng_account SET balance = '".$rnb."' WHERE rkey = '".$rkey."'"; 
			$objQuery = mysql_query($strSQL);
			if($objQuery)  
			{
				$sender = codename(1,$_SESSION['member_id']);
				$receiver = codename(2,$rkey);
				//$update = $sender ." transferred ". $amount ." points to " . $receiver;	
				updatedash("trans",$sender,$receiver,$amount);
				header("refresh:0;url=../no-game/personal-info.php?complete=true");
			}
			else  
			{ 
				echo "Error Save" . $strSQL;  
			}
			
		}

	}
	else
	{
		header("refresh:0;url=../no-game/personal-info.php?err=3");	
	}
?>