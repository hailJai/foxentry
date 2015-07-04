<?php  
include('../this.php');
$strSQL = "INSERT INTO fox_events ";  
$strSQL .="(name,shortdescription,longdesc,type,date,time,organizer,MAX,opento,aID) ";  
$strSQL .="VALUES ";  
$strSQL .="('".$_POST["txteName"]."','".$_POST["txtsDesc"]."','".$_POST["txtLongdes"]."','".$_POST["txtType"]."','".$_POST["txtDate"]."','".$_POST["txtTime"]."' ";  
$strSQL .=",'".$_POST["txtOrganizer"]."','".$_POST["txtMax"]."','".$_POST["txtOpen"]."','".$_POST["txtaid"]."') ";  
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