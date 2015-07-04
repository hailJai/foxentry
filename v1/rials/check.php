<?php
include('../account/conn2.php');
	if(isset($_REQUEST['txtUname'])){
		$username = $_REQUEST['txtUname'];
		
		$query = mysqli_query($con, "SELECT * FROM fox_users WHERE stdno = '$username'");
		$num_rows = mysqli_num_rows($query);
		while($row3 = mysqli_fetch_array($query))
  		{
			$studno = $row3['uname'];
		}
		
		if($username == NULL){
			echo "";
		}
		elseif(strlen($username) < 9)
		{
			if($num_rows == 0){
				echo "No Record Found!";
			}
			else{
				echo $studno;
			}	
		}
	}
?>