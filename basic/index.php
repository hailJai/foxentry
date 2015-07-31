<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Foxentry | Basic Tutorial</title>
</head>
<?php 
	include("../predef/usable.php"); 
	$ID = $_SESSION['member_id'];
?>
<body>
	Hello World </br>
	I am <?php echo user_info('fname',$ID) ?>
</body>
</html>