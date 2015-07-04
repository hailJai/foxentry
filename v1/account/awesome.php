<?php  
include('../this.php');
include('../joking.php');
include('../predef/verify.php');
include('../predef/usable.php');
include('conn2.php');
	
	$result2 = mysqli_query($con,"SELECT * FROM fox_awesome WHERE upID='".$_POST["txtupID"]."' AND uID='".$_POST["txtaID"]."'");
	$count=mysqli_num_rows($result2);
	
	$t = time();
	$to = make_safe($_POST["txtTo"]);
	$from = make_safe($_POST["txtaID"]);
	$upid = $_POST["txtupID"];

	if($count > 0)  
	{  
	header( "refresh:0;url=post.php?id=".$_POST["txtupID"]."" ); 
	}  
	else  
	{ 
  
	$strSQL = "INSERT INTO fox_awesome ";  
	$strSQL .="(upID,uID) ";  
	$strSQL .="VALUES ";  
	$strSQL .="('".$_POST["txtupID"]."'";  
	$strSQL .=",'".$_POST["txtaID"]."') ";  
	$objQuery = mysql_query($strSQL);  
	if($objQuery)  
	{
		notifcations('like',$to,$from,$upid);  	
		header( "refresh:0;url=dashboard.php?id=".$_POST["txtupID"]."" );
	}  
	else  
	{  
	echo "Error Save [".$strSQL."]";  
	}
	}

?>  
