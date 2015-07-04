<?php  
include('../this.php');
$strSQL = "INSERT INTO fox_events ";  
$strSQL .="(name,shortdescription,longdesc,type,date,time,organizer,MAX,opento,aID,registration,payment,amount,cover,display,status,certavailability,certparttext,certofpart) ";  
$strSQL .="VALUES ";  
$strSQL .="('".$_POST["txteName"]."','".$_POST["txtsDesc"]."','".$_POST["txtLongdes"]."','".$_POST["txtType"]."','".$_POST["txtDate"]."','".$_POST["txtTime"]."' ";  
$strSQL .=",'".$_POST["txtOrganizer"]."','".$_POST["txtMax"]."','".$_POST["txtOpen"]."','".$_POST["txtaid"]."','".$_POST["txtReg"]."','".$_POST["txtPayment"]."' ";  
$strSQL .=",'".$_POST["txtAmount"]."','".$_POST["txtcover"]."','".$_POST["txtDp"]."','".$_POST["txtStats"]."','".$_POST["txtCertavail"]."','".$_POST["postContent"]."','".$_POST["txtCertUrl"]."')";
$objQuery = mysql_query($strSQL);
if($objQuery)  
{
	header( "refresh:0;url=my_events.php" );    
}  
else  
{  
echo "Error Save [".$strSQL."]";  
}  
?> 