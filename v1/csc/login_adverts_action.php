<?php
include('../predef/verify.php');
include('../predef/usable.php');
val($_SESSION['accesslvl'],19,$_SERVER['PHP_SELF']);	
?>
<?php  
include('../this.php');
include('../joking.php');



if(isset($_POST['Upload']))
{

$strSQL = "INSERT INTO fox_images ";  
$strSQL .="(aID, type, url, photog, caption) ";  
$strSQL .="VALUES ";  
$strSQL .="('0','".make_safe($_POST["txtType"])."','".($_POST["imgurl"])."'";  
$strSQL .=",'".make_safe($_POST["photog"])."','".$_POST["caption"]."')";  
$objQuery = mysql_query($strSQL);  

}

elseif(isset($_POST['delete']))
{
	$strSQL .="DELETE FROM fox_images WHERE imgID = '".make_safe($_POST["txtID"])."'";  
	$objQuery = mysql_query($strSQL); 
}
elseif(isset($_POST['Refresh']))
{
	header( "refresh:0;url=../csc/login_adverts.php" );
}


if($objQuery)  
	{  
	header( "refresh:0;url=../csc/login_adverts.php" );
	}  
else  
	{  
	echo "Error Save [".$strSQL."]";  
	} 


?> 