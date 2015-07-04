<?php 
error_reporting(E_ERROR); 
session_start();
include("../predef/verify.php");
val($_SESSION['member_id'],0,$_SERVER['PHP_SELF']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logs and Errors</title>
<style type="text/css">
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
</style>
</head>

<body>
<br />
<form name="frmSearch" method="get" action="<?php $_SERVER['SCRIPT_NAME'] ?>">  
<table width="840px" border="1">  
<tr>  
<th>Keyword  
<input name="txtKeyword" type="text" id="txtKeyword" value="<?php $_GET["txtKeyword"] ?>">  
<input type="submit" value="Search"></th>  
</tr>  
</table>  
</form>  
<?php


if($_GET["txtKeyword"] != "")  
{  
	// Search By Name or Email  
	$strSQL = "SELECT * FROM fox_auditing WHERE (log_type LIKE '%".$_GET["txtKeyword"]."%' or report LIKE '%".$_GET["txtKeyword"]."%')";  
}
else
{
	$strSQL = "SELECT * FROM fox_auditing"; 
}
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");  
	$Num_Rows = mysql_num_rows($objQuery);  
  
	$Per_Page = 60;   // Per Page  
  
	$Page = $_GET["Page"];  
	if(!$_GET["Page"])  
	{  
		$Page=1;  
	}  
  
	$Prev_Page = $Page-1;  
	$Next_Page = $Page+1;  
  
	$Page_Start = (($Per_Page*$Page)-$Per_Page);  
	if($Num_Rows<=$Per_Page)  
	{  
		$Num_Pages =1;  
	}  
	else if(($Num_Rows % $Per_Page)==0)  
	{  
		$Num_Pages =($Num_Rows/$Per_Page) ;  
	}  
	else  
	{  
		$Num_Pages =($Num_Rows/$Per_Page)+1;  
		$Num_Pages = (int)$Num_Pages;  
	} 

  
	$strSQL .=" order  by timedate DESC LIMIT $Page_Start , $Per_Page";  
	$objQuery  = mysql_query($strSQL);  
  
?>  
<table width="840px" border="1">  
<tr>  
<th width=""> <div align="center">ID </div></th>  
<th width=""> <div align="center">aID </div></th>  
<th width=""> <div align="center">Log Type </div></th>  
<th width=""> <div align="center">Report </div></th>  
<th width=""> <div align="center">Timestamp </div></th>  
</tr>  
<?php  
while($objResult = mysql_fetch_array($objQuery))  

{  

  echo "<tr>";

  echo "<td>" . $objResult['id'] . "</td>";

  echo "<td>" . $objResult['aID'] . "</td>";

  echo "<td>" . $objResult['log_type'] . "</td>";

  echo "<td>" . $objResult['report'] . "</td>";

  echo "<td>" . $objResult['timedate'] . "</td>";

  echo "</tr>";

}   
?>  
</table>  
<br>  
Total <?php $Num_Rows;?> Record : <?php $Num_Pages;?> Page :  
<?php  
if($Prev_Page)  
{  
echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page&txtKeyword=$_GET[txtKeyword]'><< Back</a> ";  
}  
  
for($i=1; $i<=$Num_Pages; $i++){  
if($i != $Page)  
{  
echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i&txtKeyword=$_GET[txtKeyword]'>$i</a> ]";  
}  
else  
{  
echo "<b> $i </b>";  
}  
}  
if($Page!=$Num_Pages)  
{  
echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page&txtKeyword=$_GET[txtKeyword]'>Next>></a> ";  
}  
  
mysql_close($objConnect);  
  
?>
</body>
</html>