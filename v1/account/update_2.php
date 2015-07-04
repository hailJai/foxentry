<?php  
include('../this.php');
include('../joking.php');
include('../predef/verify.php');

$action = $_POST['action'];


 if($action=="showcomment")
 {
	$strSQL = "SELECT * FROM fox_updates ORDER BY upID desc";
	$result = mysql_query($strSQL) or die ("Error Query [".$strSQL."]"); 
	while($row = mysql_fetch_array($result))
	{
		echo "<li><b>$row[aID]</b> : $row[status]</li>";
	}
 }

 else if($action=="addcomment"){

if($_POST["postContent"] <> '')
{
$strSQL = "INSERT INTO fox_updates ";  
$strSQL .="(datetime,status,aID) ";  
$strSQL .="VALUES ";  
$strSQL .="(NOW(),'".$_POST["postContent"]."'";  
$strSQL .=",'".$_POST["txtaID"]."') ";  
$objQuery = mysql_query($strSQL);  
if($objQuery)  
{  
echo "Updated";  
}  
else  
{  
echo "Error Save [".$strSQL."]";  
}
}
else{
	echo "No Post";  
	}
 }
?> 