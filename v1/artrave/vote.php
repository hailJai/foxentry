<?php  
include('../this.php');
include('../joking.php');
include('../predef/verify.php');
include('../predef/usable.php');
include('../account/conn2.php');
$upID = make_safe($_POST["btn_vote"]);
$uID = $_SESSION['member_id'];
		
	$result2 = mysqli_query($con,"SELECT * FROM fox_awesome WHERE upID='".$upID."' AND uID='".$uID."'");
	$count=mysqli_num_rows($result2);
	if($count > 0)  
	{  
		$strSQL = "DELETE FROM fox_awesome WHERE upID = '".$upID."' AND uID = '".$uID."'"; 
		$objQuery = mysql_query($strSQL);  
		if($objQuery)  
		{	
			header("refresh:0;url=index.php");
		}  
		else  
		{  
			echo "Error Save [".$strSQL."]";  
		}
	}  
	else  
	{ 
  
	$strSQL = "INSERT INTO fox_awesome ";  
	$strSQL .="(upID,uID) ";  
	$strSQL .="VALUES ";  
	$strSQL .="('".$upID."'";  
	$strSQL .=",'".$uID."') ";  
	$objQuery = mysql_query($strSQL); 
	if($objQuery)  
	{	
		header("refresh:0;url=index.php");
	}  
	else  
	{  
		echo "Error Save [".$strSQL."]";  
	}
	}

?>  
