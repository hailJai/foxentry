<?php  
include('../this.php');
$strSQL = "INSERT INTO fox_updates ";  
$strSQL .="(datetime,status,aID) ";  
$strSQL .="VALUES ";  
$strSQL .="(NOW(),'".$_POST["update"]."'";  
$strSQL .=",'".$_POST["txtaID"]."') ";  
$objQuery = mysql_query($strSQL);  
if($objQuery)  
{  
header( "refresh:0;url=index.php" );
}  
else  
{  
echo "Error Save [".$strSQL."]";  
}  
?> 