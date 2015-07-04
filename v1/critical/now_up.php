<?php  
include('../this.php');
include('../joking.php');
for($i=0;$i<=$_POST["hdnCount"];$i++)
{
$strSQL = "INSERT INTO ng_account (uID, secode, rkey, skey) VALUES ";  
$strSQL .="('".$_POST['uid'][$i]."','".$_POST['txtseckey'][$i]."','".$_POST['txtreckey'][$i]."','".$_POST['txtsenkey'][$i]."' )";  
$objQuery = mysql_query($strSQL);  
if($objQuery)  
	{  
		echo "Done Update";
	}  
else  
	{  
		echo "Error Save [".$strSQL."]";  
	}
}
?> 