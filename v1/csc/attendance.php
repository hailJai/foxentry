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
<title>Duty Hours</title>
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
	width:100%;
}
</style>
<body>
<div class="container-main">
<div class="title">Attendance | Duty Hours <?php echo "- ".fullname($_GET["txtName"]); ?></div>
<form name="frmSearch" method="get" action="<?php $_SERVER['SCRIPT_NAME'] ?>">  
<table width="100%" border="0">  
<tr>  
<td><div align="center">Filter  
	<input name="txtDate" type="text" id="txtDate" size="20"  />
    <script type="text/javascript">
			$(function(){
				$('*[name=txtDate]').appendDtpicker({
					"inline": false,
					"dateOnly": true,
					"dateFormat": "MM-DD-YYYY"
				});
			});
	</script>
 
   <?php
   include('../account/conn2.php');
   			if($_SESSION['accesslvl'] == 1)
			{
			
			
			echo "
			<select name='txtName' onchange='this.form.submit()' class='forms'>	
			
			";
			$resultn = mysqli_query($con,"SELECT * FROM fox_users WHERE user_level = '1' OR user_level = '2' OR user_level = '16'");
			echo " <option>All</option>";
			while($rown = mysqli_fetch_array($resultn))
  			{
 
  			echo "<option value='" . $rown['uID'] . "'>".$rown['fname']." ".$rown['lname']."</option>
				
			
			" ;  
  			}
			}
   
   ?>
</div></td>  
</tr>  
</table>  
</form>  
<table width="100%" border="0" >
  <tr>
    <td><div align="center"><strong>Date</strong></div></td>
    <td><div align="center"><strong>Type</strong></div></td>
    <td><div align="center"><strong>Time In</strong></div></td>
    <td><div align="center"><strong>Time Out</strong></div></td>
    <td><div align="center"><strong>Total Minutes</strong></div></td>
    <td><div align="center"><strong>Remarks</strong></div></td>
    <td><div align="center"><strong>Action</strong></div></td>
  </tr>
  
   <?php
		
		if ($_GET["txtName"] != "")
		{
			$result3 = mysqli_query($con,"SELECT * FROM fox_cscattendance WHERE uID = '".$_GET["txtName"]."'");
		}
		else
		{		
			$result3 = mysqli_query($con,"SELECT * FROM fox_cscattendance WHERE uID = '".$_SESSION['member_id']."'");
		}
		while($row3 = mysqli_fetch_array($result3))
  		{
		echo "
		<form action='attendance_action.php' name='frmAdd2' method='post'>
		<input type='hidden' name='txtType' value='".$row3['type']."'/>
		<input type='hidden' name='txtuID' value='".$row3['uID']."'/>
		<input type='hidden' name='txtID' value='".$row3['id']."'/>
		<input type='hidden' name='txtIns' value='".$row3['in_seconds']."'/>
		<tr class='".$row3['status']."'>
    	<td>".$row3['date_now']."</td>
    	<td>".$row3['type']."</td>
    	<td>".$row3['in_time']."</td>
		<td>".$row3['out_time']."</td>
    	<td>".$row3['total']."</td>
    	<td>".$row3['status']."</td>
		<td><center>
		";
		
		if ($row3['out_time'] != 0)
		{
		echo "<input type='submit' value='Refresh' name='Refresh'/>";
		if ($_SESSION['accesslvl'] == 1)
			{
				echo "<input type='submit' value='X' name='delete'/>";
			}
		}
		else
		{
		echo "<input type='submit' value='Logout' name='logout'/>";	
		if ($_SESSION['accesslvl'] == 1)
			{
				echo "<input type='submit' value='X' name='delete'/>";
			}
		}
		
		echo "
		</center></td>
  		</tr>
		</form>
		
		";
		}
	?>
 <form action="attendance_action.php" name="frmAdd" method="post">
  <tr>
    <td><?php date_default_timezone_set("Asia/Singapore"); echo date("m/d/Y", time());?></td>
    <td>
    	<select name="txtType" class="form">
       		<option value="Duty Hours">Duty Hours</option>
            <option value="Overtime">Overtime</option>
    	</select>
    </td>
    <td><?php echo date("g:i A", time());?></td>
    <td>--------</td>
    <td>--------</td>
    <td>&nbsp;</td>
    <td><div align="center">
      <input type="submit" value="Login" name="login"/>
    </div></td>
  </tr>
  <input type="hidden" value="<?php echo $_SESSION['member_id']; ?>" name="txtuID"/>
  </form>
</table>

</div>
</body>
</html>