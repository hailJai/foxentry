<?php  
include('../this.php');
$count = $_POST['txtcount']+1;
$strSQL="SELECT * FROM fox_registrants WHERE aID='".$_POST["txtaid"]."' AND eID='".$_POST['txteid']."' ";
$objQuery = mysql_query($strSQL);
$objResult=mysql_fetch_array($objQuery);
if($objResult)
{
	header( "refresh:0;url=details.php?id=".$_POST["txteid"]."" );
}
else
{
		
		
if($_POST["register"]){
$strSQL = "INSERT INTO fox_registrants";  
$strSQL .="(aID,eID) ";  
$strSQL .="VALUES ";  
$strSQL .="('".$_POST["txtaid"]."','".$_POST["txteid"]."')";  
$objQuery = mysql_query($strSQL);
}
if($objQuery)  
{
	$strSQL="UPDATE fox_events SET count=".$count." WHERE id='".$_POST["txteid"]."' ";
	$objQuery = mysql_query($strSQL);
	if($objQuery){
		header( "refresh:0;url=details.php?id=".$_POST["txteid"]."" );
		}
		else  {  
			echo "Error Save [".$strSQL."]";  
		}  

}  
else  
{  
echo "Error Save [".$strSQL."]";  
}  
}
?> 