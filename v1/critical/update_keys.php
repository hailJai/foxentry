<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>
<form name="frmMain" action="now.php" method="post"> 
<?php
include('../account/conn2.php');
$result = mysqli_query($con,"SELECT uID, pword, uname FROM fox_users WHERE uID > 899 AND uID < 1000");
$i = 0;
while($row = mysqli_fetch_array($result))
{
	$i++;
	echo "
		  <input type='text' name='none' value='".$i."'/>
		  <input name='uid[]' id='uid" . $i . "' type='text' value='".$row["uID"]."' />
		  <input id='txtuname" . $i . "' name='txtuname[]' type='text'  value='".$row["uname"]."' />
		  <input id='txtpass" . $i . "' name='txtpass[]' type='text'  value='".md5($row["pword"])."' />
		  <input id='txtmd" . $i . "' name='txtmd[]' type='text'  value='".$row["pword"]."'/><br>";
}
echo  "<input type='text' name='hdnCount' value='".$i."'/>";
echo "<input type='submit' name='btnDelete' value='Now'> ";   
?>

</form>
<p>&nbsp;</p>
<p>pls be careful with this page</p>
</body>
</html>