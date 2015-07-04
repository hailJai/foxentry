<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include('conn2.php');
$result3 = mysqli_query($con,"SELECT * FROM fox_dphotos WHERE aID ='".$row['aID']."'");
while($row3 = mysqli_fetch_array($result3))
  {
 echo '<img src="data:image/jpeg;base64,' . base64_encode($row3['image']) . '" width="54" height="54">';
  }
?>
</body>
</html>