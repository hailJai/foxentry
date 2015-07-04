<?php
include('../no-game/conn2.php');
include "../predef/verify.php";
include "../joking.php";
include "usable.php";
include "this.php";

	if(isset($_POST['cname'])){
		$cname = make_safe($_POST['cname']);
		$motto = make_safe($_POST['motto']);

		$strSQL = "UPDATE ng_account SET codename = '".$cname."', motto = '".$motto."'  WHERE uID = '".$_SESSION['member_id']."'"; 
		$objQuery = mysql_query($strSQL);
		if($objQuery)  
		{
			header("refresh:0;url=../no-game/index.php");
		}
		else  
		{ 
			echo "Error Save" . $strSQL;  
		}
	}
	else{
		header("refresh:0;url=../no-game/index.php");
	}
?>