<?php
include('../predef/verify.php');
val("1","3",$_SERVER['PHP_SELF']);		
error_reporting(E_ERROR);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Organization Reports</title>
</head>
<link type="text/css" href="../css/main-style.css" rel="stylesheet"/>
<body>
<div class="container-main">
	<div class="title">Organization Reports</div>
	<div  id="messages">
    <ul>
  		<li><a href="cso_report.php" target="new">CSO - MASTER LIST OF MEMBERS</a></li>
        <li><a href="loop_report.php" target="new">LOOP - MASTER LIST OF MEMBERS</a></li>
        <li><a href="presidents_report.php" target="new">PRESIDENT - MASTER LIST</a></li>
        <li><a href="Vpresidents_report.php" target="new">CLASS VICE PRESIDENT - MASTER LIST</a></li>
        <li><a href="cmt_report.php" target="new">CMT - MASTER LIST</a></li>
        <li><a href="first_year.php" target="_blank">First Year - MASTER LIST</a></li>
        <li><a href="second_year.php" target="_blank">Second Year - MASTER LIST</a></li>
        <li><a href="third_year.php" target="_blank">Third Year - MASTER LIST</a></li>
        <li><a href="fourth_year.php" target="_blank">Fourth Year - MASTER LIST</a></li>
    </ul>
    </div>
</div>
</body>
</html>