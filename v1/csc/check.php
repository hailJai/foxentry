<?php
include('../account/conn2.php');
	if(isset($_REQUEST['txtUname'])){
		$username = $_REQUEST['txtUname'];
		
		$query = mysqli_query($con, "SELECT uname FROM fox_users WHERE uname = '$username'");
		$num_rows = mysqli_num_rows($query);
		
		if($username == NULL)
			echo "";
		else if(strlen($username)<=3)
			echo "Username too short!";
		else{
			if ($num_rows == 0)
				echo "Username is Available!";
			else if ($num_rows == 1)
				echo "Username is not available!";
		}
	}
?>