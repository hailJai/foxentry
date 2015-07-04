<?php  
include('../this.php');
include('../joking.php');
for($i=0;$i<=$_POST["hdnCount"];$i++)
{
$strSQL = "UPDATE fox_users SET ";  
$strSQL .="pword = '".$_POST['txtpass'][$i]."' ";  
$strSQL .="WHERE uID='".$_POST['uid'][$i]."'";   
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