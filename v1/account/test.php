<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
include('conn2.php');
include("../predef/usable.php");
$result = mysqli_query($con,"SELECT * FROM fox_updates ORDER By upID desc");
while($row = mysqli_fetch_array($result))
{
	echo fullname($row["aID"]);
}
?>
</body>
</html>