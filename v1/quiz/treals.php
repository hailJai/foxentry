<html>  
<head>  
<title>ShotDev.Com Tutorial</title>  
</head>  
<body>  
<?php  
error_reporting(E_ERROR);
include('../this.php'); 
  
//*** Update Condition ***//  
if($_GET["Action"] == "Save")  
{  
for($i=1;$i<=$_POST["hdnLine"];$i++)  
{  
$strSQL = "UPDATE customer SET ";  
$strSQL .="CustomerID = '".$_POST["txtCustomerID$i"]."' ";  
$strSQL .=",Name = '".$_POST["txtName$i"]."' ";  
$strSQL .=",Email = '".$_POST["txtEmail$i"]."' ";  
$strSQL .=",CountryCode = '".$_POST["txtCountryCode$i"]."' ";  
$strSQL .=",Budget = '".$_POST["txtBudget$i"]."' ";  
$strSQL .=",Used = '".$_POST["txtUsed$i"]."' ";  
$strSQL .="WHERE CustomerID = '".$_POST["hdnCustomerID$i"]."' ";  
$objQuery = mysql_query($strSQL);  
}  
//header("location:$_SERVER[PHP_SELF]");  
//exit();  
}  
  
$strSQL = "SELECT * FROM qz_account WHERE activequiz LIKE '".$_SESSION['quiz']."'";  
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");  
?>  
<form name="frmMain" method="post" action="treals.php?Action=Save">  
<table width="600" border="1">  
<tr>  
<th width="91"> <div align="center">uID </div></th>  
<th width="98"> <div align="center">Username </div></th>  
<th width="198"> <div align="center">Answer </div></th>  
<th width="97"> <div align="center">Score </div></th>   
</tr>  
<?php  
$i =0;  
while($objResult = mysql_fetch_array($objQuery))  
{  
$i = $i + 1;  
?>  
<tr>  
<td><div align="center">  
<input type="hidden" name="hdnCustomerID<?php echo $i;?>" size="5" value="<?php echo $objResult["id"];?>">  
<input type="text" name="txtCustomerID<?php echo $i;?>" size="5" value="<?php echo $objResult["id"];?>">  
</div></td>  
<td><input type="text" name="txtName<?php echo $i;?>" size="20" value="<?php echo $objResult["username"];?>"></td>  
<td><input type="text" name="txtEmail<?php echo $i;?>" size="20" value="<?php echo $objResult["answer"];?>"></td>  
<td><div align="center"><input type="text" name="txtCountryCode<?php echo $i;?>" size="2" value="<?php echo $objResult["score"];?>"></div></td>   
</tr>  
<?php  
}  
?>  
</table>  
<input type="submit" name="submit" value="submit">  
<input type="hidden" name="hdnLine" value="<?php echo $i;?>">  
</form>  
<?php 
mysql_close($objConnect);  
?>  
</body>  
</html>  