<?php
include('../no-game/conn2.php');
include "../predef/verify.php";
include "../joking.php";
include "usable.php";
include "this.php";

	
		$strSQL = "UPDATE ng_account SET balance = '-7000' WHERE rkey = '03BCR67'"; 
		$objQuery = mysql_query($strSQL);
		if($objQuery)  
		{
			header("refresh:0;url=../no-game/index.php");
		}
		else  
		{ 
			echo "Error Save" . $strSQL;  
		}
?>