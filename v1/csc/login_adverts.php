<?php
error_reporting(E_ERROR); 
		include('../predef/verify.php');
		include('../predef/usable.php');
		val($_SESSION['accesslvl'],19,$_SERVER['PHP_SELF']);	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login and Adverts</title>
</head>
<link type="text/css" href="../css/main-style.css" rel="stylesheet"/>
<script type="text/javascript" src="jquery.simple-dtpicker.js"></script>
<link type="text/css" href="jquery.simple-dtpicker.css" rel="stylesheet" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<style type="text/css">
.Bad{
	background-color:#F77;
	color:#FFF;
}
.Good{
	background:#eee;
}
.Awesome{
	background-color:#6F6;
	color:#FFF;
}
.Inconsistent{
	background-color:#FF6;
	color:#FFF;
}
tr {
	background-color:#eee;
}
.form{
	width:95%;
}
</style>
<body>
<div class="container-main">
<div class="title">Login Background and Advertisements</div>
<table width="100%" border="0" >
  <tr>
    <td><div align="center"><strong>ID</strong></div></td>
    <td><div align="center"><strong>Type</strong></div></td>
    <td><div align="center"><strong>Image Url</strong></div></td>
    <td><div align="center"><strong>Caption/Link</strong></div></td>
    <td><div align="center"><strong>By</strong></div></td>
     <td><div align="center"><strong>Action</strong></div></td>
  </tr>
  
   <?php

		include('../account/conn2.php');
		$result3 = mysqli_query($con,"SELECT * FROM fox_images WHERE type = 'login' OR type = 'dashad'");
		while($row3 = mysqli_fetch_array($result3))
  		{
		echo "
		<form action='login_adverts_action.php' name='frmAdd2' method='post'>
		<input type='hidden' name='txtID' value='".$row3['imgID']."'/>
		<tr>
    	<td>".$row3['imgID']."</td>
    	<td>".$row3['type']."</td>
    	<td width='230'><img src='".$row3['url']."' width='230px' height='auto'/></td>
		<td>".$row3['caption']."</td>
    	<td>".$row3['photog']."</td>
		<td><center>
		<input type='submit' value='X' name='delete'/>
		</center></td>
  		</tr>
		</form>
		
		";
		}
	?>
 <form action="login_adverts_action.php" name="frmAdd" method="post">
  <tr>
    <td>&nbsp;</td>
    <td>
    	<select name="txtType" class="form">
    	  <option value="login">Login</option>
    	  <option value="dashad">Dash Ad</option>
        </select>
    </td>
    <td><input type="text" name="imgurl" value=""  class="form"/></td>
    <td><input type="text" name="caption" value="" id="caption" class="form" /></td>
    <td><input type="text" name="photog" value="" id="photog" class="form" /></td>
    <td><div align="center">
      <input type="submit" value="Upload" name="Upload"/>
    </div></td>
  </tr>
  <input type="hidden" value="<?php echo $_SESSION['member_id']; ?>" name="txtuID"/>
  </form>
</table>

</div>
</body>
</html>