<?php

error_reporting(E_ERROR);
include('../account/conn2.php');
include('../predef/verify.php');
include('../predef/usable.php');
$mod = $FirstName . " " . $LastName;
val($_SESSION['accesslvl'],95,$_SERVER['PHP_SELF']);
seenp($_SESSION['member_id'], $mod, $_SERVER['PHP_SELF']);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MASTER LIST OF FIRST YEAR STUDENTS</title>
<style type="text/css">
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
</style>
</head>
<style type="text/css">
.paper{
	width:8.5in;
	background-color:#C6F3FF;
}
</style>
<body>
<div class="paper">
<p align="center">HOLY ANGEL UNIVERSITY<br />
  COLLEGE OF INFORMATION AND COMMUNICATIONS TECHNOLOGY<br />
  <span style="font-size:16px">COLLEGE STUDENT COUNCIL</span></p>
<p align="center">MASTER LIST OF FIRST YEAR STUDENTS</p>
<table width="100%" border="1">
  <tr>
  	<th>#</th>
    <th>Name</th>
    <th>Section</th>
    <th>Username</th>
    <th>Email Address</th>
  </tr>


        <?php

		$result3 = mysqli_query($con,"SELECT * FROM fox_users WHERE yearlevel = 'First' ORDER BY SECTION");
		$i = 0;
		while($row3 = mysqli_fetch_array($result3))
  		{
		$i++;
		echo "
		<tr>
		<td>".$i."</td>
    	<td>".$row3['fname']." ".$row3['lname']."</td>
    	<td>".$row3['section']."</td>
		<td>".$row3['uname']."</td>
    	<td>".$row3['email']."</td>
  		</tr>
		";
		}
?>  
</table>
<p>Printed on: <?php echo date("Y/m/d", time());?><br />
  By: <?php session_start(); echo $_SESSION['username']; ?>
</p>
</div>
</body>
</html>