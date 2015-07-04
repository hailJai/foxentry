<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>newsfeed updates</title>
</head>
<style type="text/css">
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
	}
#txtKeyword {
	height: 25px;
	width: 570px;
	border: 1px solid #999;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	padding: 3px;
	float:left;
	padding-right:40px;
}
#searchSubmit{
    background: transparent url("../images/paperfly-icon-com.png") no-repeat;
    width: 22px;
    height: 22px;
    border: none;
    cursor: pointer;
    margin-left: -40px; /* image is 20x20px, so leave little extra */
	margin-top:8px;
}
#awesomepost{
    background: transparent url("../images/Emoticons-Cool-icon2.png") no-repeat;
    width: 85px;
    height: 24px;
    border: none;
    cursor: pointer;
	color:#ffa854;
}
#awesomecom{
    background: transparent url("../images/Emoticons-Cool-icon-com.png") no-repeat;
    width: 85px;
    height: 20px;
    border: none;
    cursor: pointer;
	color:#ffa854;
}

</style>
<body>
<?php
error_reporting(E_ERROR);
include('conn2.php');
$result = mysqli_query($con,"SELECT * FROM fox_updates ORDER By upID desc");
while($row = mysqli_fetch_array($result))
  {
	echo "
	  	
		<table width='610' border='0'>
  		<tr>
    	<td width='4%' rowspan='2'>";
	$result3 = mysqli_query($con,"SELECT * FROM fox_files WHERE aID ='".$row['aID']."' AND type ='dp' ORDER BY id DESC LIMIT 1");
	$countimg=mysqli_num_rows($result3);
	if ($countimg > 0)
	{
		while($row3 = mysqli_fetch_array($result3))
  		{
 		echo '<img src="data:image/jpeg;base64,' . base64_encode($row3['data']) . '" width="54" height="54">';
  		}
	}
	else
	{
		echo "<img src='../images/user.png' width='54' height='54' />";
	}
	echo "
		</td>
    	<td width='96%' height='27'><strong>";
	$result1 = mysqli_query($con,"SELECT * FROM fox_users WHERE uID='".$row['aID']."'");
  	while($row1 = mysqli_fetch_array($result1))
  	{
	echo  $row1['fname']. " ". $row1['lname'] . "</strong><font style='font-size:10px;'> (" .$row1['position']. ")</font>" ;
  	}
	
	$result2 = mysqli_query($con,"SELECT * FROM fox_awesome WHERE upID='".$row['upID']."'");
	$count=mysqli_num_rows($result2);
	
	echo "
	</td>
    </tr>
  	<tr>
    <td style='font-size:12px'>";
	
	echo  $row['status'];
	
	echo "
	<div align='left' style='margin-top:2px; margin-bottom:2px;'>
    <form id='form1' name='form1' method='post' action='awesome.php'>
	<input type='hidden' name='txtaID' value='".$_SESSION['member_id']."'/>
	<input type='hidden' name='txtupID' value='".$row['upID']."'/>
	<input type='submit' name='awesome' id='awesomepost' accesskey='a' tabindex='3' value='+". $count ."' />
	</form>
	</div>
    </td>
    </tr>
  	<tr>
    <td height='49' colspan='2'>
    <div style='background-color:#d8d8d8; width:620px; padding-top:5px; padding-bottom:5px;'>
    <table width='614' border='0'>
	
	";
	
	$result4 = mysqli_query($con,"SELECT * FROM fox_comments WHERE upID='".$row['upID']."' ORDER By cID asc");
	while($row4 = mysqli_fetch_array($result4))
  	{
		echo "
		<tr>
		<td width='32' rowspan='2'>";
		
		$result5 = mysqli_query($con,"SELECT * FROM fox_files WHERE aID ='".$row4['aID']."' AND type ='dp' ORDER BY id DESC LIMIT 1");
		$countimg=mysqli_num_rows($result5);
		if ($countimg > 0)
		{
			while($row5 = mysqli_fetch_array($result5))
  			{
 			echo '<img src="data:image/jpeg;base64,' . base64_encode($row5['data']) . '" width="35" height="35">';
  			}
		}
		else
		{
			echo "<img src='../images/user.png' width='35' height='35' />";
		}
		echo "
		</td>
		<td colspan='2' style='font-size:12px'><strong>";
		
		$result7 = mysqli_query($con,"SELECT * FROM fox_users WHERE uID='".$row4['aID']."'");
  		while($row7 = mysqli_fetch_array($result7))
  		{
		echo  $row7['fname']. " ". $row7['lname'] . "</strong><font style='font-size:10px;'> (" .$row7['position']. ")</font>" ;
  		}
		
		echo "
		</td>
    	</tr>
  		<tr>
  	  	<td colspan='2' style='font-size:10px'>";
		
		echo  $row4['comment'];
		
		
		$result8 = mysqli_query($con,"SELECT * FROM fox_awesome WHERE upID='".$row4['cID']."'");
		$count3=mysqli_num_rows($result8);
		echo "
		
      	</td>
   	 	</tr>";
	//<div align='left'  style='margin-top:2px; margin-bottom:2px;'>
    //	<form id='form1' name='form1' method='post' action='awesome.php'>
	//	<input type='hidden' name='txtaID' value='".$_SESSION['member_id']."'/>
	//	<input type='hidden' name='txtupID' value='".$row4['cID']."'/>
    //	<input type='submit' name='awesome' id='awesomecom' accesskey='a' tabindex='3' value='".$count3."' />
  	// 	</form>
    //	</div>
		
  	}
	echo "
		<tr>
    	<td colspan='3'> <form method='post' action='comment.php'name='frmSearch'>
    	<input name='txtComment' maxlength='140' type='text' id='txtKeyword' tabindex='1' value='' onblur='if (this.value == '') {this.value = 'comment here';}'
 		onfocus='if (this.value == 'comment here') {this.value = '';}'/>
		<input type='hidden' name='txtaID' value='".$_SESSION['member_id']."'/>
		<input type='hidden' name='txtupID' value='".$row['upID']."'/>
    	<input name='btn_search' type='submit'  id='searchSubmit' value=''/>
    	</form>
		</td>
    	</tr>
	</table>
	</div>
	</td>
    </tr>
	</table>
	";
	
  }
?>
</body>
</html>