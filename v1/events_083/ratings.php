<?php  
include('../predef/verify.php');
include('../this.php');

$strSQL = "SELECT * FROM fox_eventratings WHERE uID = '".$_POST["txtaid"]."' AND eID = '".$_POST["txteid"]."'";  
$objQuery = mysql_query($strSQL);  
$objResult = mysql_fetch_array($objQuery);   
if($objResult)  
{  
	$strSQL = "UPDATE fox_eventratings ";  
	$strSQL .="SET ratingvalue = '".$_POST["radiog_lite"]."' WHERE uID = '".$_POST["txtaid"]."' AND eID = '".$_POST["txteid"]."'";  
	$objQuery = mysql_query($strSQL);  
}
else  
{
	$strSQL = "INSERT INTO fox_eventratings ";  
	$strSQL .="(eID,uID,ratingvalue) ";  
	$strSQL .="VALUES ";  
	$strSQL .="('".$_POST["txteid"]."','".$_POST["txtaid"]."' ";  
	$strSQL .=",'".$_POST["radiog_lite"]."') ";  
	$objQuery = mysql_query($strSQL); 
}

if($objQuery)  
{
	header( "refresh:0;url=details.php?id=".$_POST["txteid"]."" );    
}  
else  
{  
echo "Error Save [".$strSQL."]";  
}  
?> 