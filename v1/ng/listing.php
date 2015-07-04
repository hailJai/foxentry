<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>List Users</title>
</head>
<link rel="stylesheet" href="../account/default.css" type="text/css" />
<body>
<form name="frmMain" action="now_up.php" method="post"> 
<table width="100%" cellspacing="3" cellpadding="3" >
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Username</th>
    <th>Student Number</th>
    <th>Security Key</th>
    <th>Send Key</th>
    <th>Recieve Key</th>
    <th>Action</th>
  </tr>
  <tr style="border-bottom:1px solid">
    <td colspan="8"><hr /></td>
  </tr>
  <?php
		error_reporting(E_ERROR);
		include('../account/conn2.php');
		include('../ng/generate.php');
		
		
		$i = 0;
		$result3 = mysqli_query($con,"SELECT * FROM fox_users WHERE uID < 200");
		while($row3 = mysqli_fetch_array($result3))
  		{
		$i++;
		
		echo "
		
		<tr style='border-bottom:solid 1px #000000;'>
    	<td><input style='width:30px' type='text' name='none' value='".$i."'/> <input style='width:30px' name='uid[]' id='uid" . $i . "' type='text' value='".$row3["uID"]."' /></td>
    	<td>".$row3['fname']." ".$row3['lname']."</td>
    	<td>".$row3['uname']."</td>
		<td>".$row3['stdno']."</td>
    	<td style='font-family: Courier; font-size: 20px'><input style='font-family: Courier;' id='txtseckey" . $i . "' name='txtseckey[]' type='text'  value='".generate_key('default',$row3['stdno'],$row3['fname'].$row3['lname'])."' /></td>
		<td style='font-family: Courier; font-size: 20px'><input style='font-family: Courier;' id='txtsenkey" . $i . "' name='txtsenkey[]' type='text'  value='".generate_key('send',$row3['stdno'],$row3['fname'].$row3['lname'])."' /></td>
    	<td style='font-family: Courier; font-size: 20px'><input style='font-family: Courier;' id='txtreckey" . $i . "' name='txtreckey[]' type='text'  value='".generate_key('recv',$row3['stdno'],$row3['fname'].$row3['lname'])."' /></td>
		<td><center>[EDIT] [DELETE]</center></td>
  		</tr>

		
		";
		}
		
		echo  "<input type='text' name='hdnCount' value='".$i."'/>";
		echo "<input type='submit' name='btnDelete' value='Now'> "; 
	?>
</table>
</form>
</body>
</html>
