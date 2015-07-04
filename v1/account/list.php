<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>List Users</title>
</head>
<link rel="stylesheet" href="default.css" type="text/css" />
<body>
<table width="95%" cellspacing="3" cellpadding="3" >
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Username</th>
    <th>Section</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
  <tr style="border-bottom:1px solid">
    <td colspan="6"><hr /></td>
  </tr>
  <?php
		error_reporting(E_ERROR);
		include('../account/conn2.php');
		$result3 = mysqli_query($con,"SELECT * FROM fox_users");
		while($row3 = mysqli_fetch_array($result3))
  		{
		echo "
		<tr style='border-bottom:solid 1px #000000;'>
    	<td>".$row3['uID']."</td>
    	<td>".$row3['fname']." ".$row3['lname']."</td>
    	<td>".$row3['uname']."</td>
		<td>".$row3['section']."</td>
    	<td>".$row3['organization']."</td>
    	<td><center>[EDIT] [DELETE]</center></td>
  		</tr>

		
		";
		}
	?>
</table>

</body>
</html>
