<?php  
include('../this.php');
if($_POST["register"]){
$strSQL = "INSERT INTO fox_registrants";  
$strSQL .="(aID,eID) ";  
$strSQL .="VALUES ";  
$strSQL .="('".$_POST["txtaid"]."','".$_POST["txteid"]."')";  
$objQuery = mysql_query($strSQL);
}
if($objQuery)  
{
	header( "refresh:0;url=events.php" );    
}  
else  
{  
echo "Error Save [".$strSQL."]";  
}  
?> 