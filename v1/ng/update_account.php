<?php
include('../no-game/conn2.php');
include "../predef/verify.php";
include "../joking.php";
include "usable.php";
include "this.php";

	if(isset($_POST['cname']))
	{
		$cname = make_safe($_POST['cname']);
		$motto = make_safe($_POST['motto']);


		$result = mysqli_query($con,"SELECT * FROM `ng_account` WHERE `uID` = '".$_SESSION['member_id']."'");
		$count=mysqli_num_rows($result);
		if ($count > 1)
		{
			header("refresh:0;url=../no-game/index.php");
		}
		else
		{	
			$strSQL = "UPDATE ng_account SET codename = '".$cname."', motto = '".$motto."'  WHERE uID = '".$_SESSION['member_id']."'"; 
			$objQuery = mysql_query($strSQL);
			if($objQuery)  
			{
				updatedash("new",$cname);
				header("refresh:0;url=../no-game/index.php");
			}
			else  
			{ 
				echo "Error Save" . $strSQL;  
			}
		}
		
	}
	else{
	header("refresh:0;url=../no-game/index.php");
	}
?>