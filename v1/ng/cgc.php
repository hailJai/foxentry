<?php
include('../no-game/conn2.php');
include "usable.php";
include "this.php";
include "../predef/verify.php";
$totalpoints = $_POST['tpoints'];
$maxreceiver = $_POST['maxr'];
$indipoints = $_POST['ipoints'];
$code = $_POST['code'];

	$rnb = balance_rec('0000000') - $totalpoints;

	if((isset($totalpoints)) && ($rnb > -1)){


		$strSQL = "INSERT INTO ng_cgc (`codeID`, `totalpoints`, `maxredem`, `code`, `count`,`indipoints`) VALUES (NULL,'".$totalpoints."','".$maxreceiver."','".$code."','0','".$indipoints."')"; 
		$objQuery = mysql_query($strSQL);
		if($objQuery)  
		{
			$strSQL = "UPDATE ng_account SET balance = '".$rnb."' WHERE rkey = '0000000'"; 
			$objQuery = mysql_query($strSQL);
			if($objQuery)  
			{
				updatedash("cgc",'','',$totalpoints);
				header("refresh:0;url=../no-game/council.php?complete=true");
			}
			else
			{
				echo "Error Save" . $strSQL;  
			}
		}

	}
?>