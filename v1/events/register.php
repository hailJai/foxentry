<?php
error_reporting();  
include('../this.php');
include('../joking.php');
include('../account/conn2.php');
include('../predef/verify.php');
if(isset($_POST["del"])){
	
  	$eID = make_safe($_POST["txteid"]);
	$regis = mysqli_query($con,"SELECT * FROM fox_events WHERE id='".$eID."' ");
	while($reg = mysqli_fetch_array($regis))
	{
		if($reg['aID'] == $_SESSION['member_id'])
		{
			$strSQL="DELETE FROM fox_registrants WHERE rID = '".make_safe($_POST["RID"])."'";
			$objQuery = mysql_query($strSQL);
			if($objQuery){
			header( "refresh:0;url=details.php?id=".$eID."" );
			}
			else  {  
			echo "Error Save [".$strSQL."]";  
			}  
		}
	}

}
else{
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
		
		
if(isset($_POST["register"])){
$strSQL = "INSERT INTO fox_registrants";  
$strSQL .="(aID,eID) ";  
$strSQL .="VALUES ";  
$strSQL .="('".$_POST["txtaid"]."','".$_POST["txteid"]."')";  
$objQuery = mysql_query($strSQL);

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

}

elseif (isset($_POST["grpReg"])) {
  	$strSQL = "INSERT INTO fox_registrants";  
	$strSQL .="(aID,eID,team,member) ";  
	$strSQL .="VALUES ";  
	$strSQL .="('".$_POST["txtaid"]."','".$_POST["txteid"]."','".$_POST["txtTeam"]."','".$_POST["txtMember"]."')";  
	$objQuery = mysql_query($strSQL);

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
}
else {  
	echo "Error Save [".$strSQL."]";  
}  
}
}
?> 