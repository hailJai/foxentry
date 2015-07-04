<?php  
include('../this.php');
$strSQL = "INSERT INTO fox_events ";  
$strSQL .="(name,shortdescription,longdesc,type,date,time,organizer) ";  
$strSQL .="VALUES ";  
$strSQL .="('".$_POST["txteName"]."','".$_POST["txtsDesc"]."','".$_POST["txtLongdes"]."','".$_POST["txtType"]."','".$_POST["txtDate"]."','".$_POST["txtTime"]."' ";  
$strSQL .=",'".$_POST["txtOrganizer"]."') ";  
$objQuery = mysql_query($strSQL);
if($objQuery)  
{
	header( "refresh:0;url=events.php" );    
}  
else  
{  
echo "Error Save [".$strSQL."]";  
}  
?> 