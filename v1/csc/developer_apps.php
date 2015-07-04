<?php
	error_reporting(E_ERROR);
	include('../predef/verify.php');
	val($_SESSION['accesslvl'],0,$_SERVER['PHP_SELF']);	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Developer Applications</title>
</head>
<link type="text/css" href="../css/main-style.css" rel="stylesheet"/>
<body>
<div class="container-main">
<div class="title">Aspiring Developers</div>
	<div  id="messages">
    <ul>
  		<?php 		
		include('../account/conn2.php');
		include('../predef/usable.php');
		$result3 = mysqli_query($con,"SELECT * FROM fox_messages WHERE type = 'dev' ORDER BY date DESC");
		while($row3 = mysqli_fetch_array($result3))
  		{
		echo "
		<li>
        <a href='devapps_view.php?id=".$row3['mID']."'>";
   				
				$result2 = mysqli_query($con,"SELECT * FROM fox_files WHERE aID ='".$row3['sender']."' AND type ='dp' ORDER BY id DESC LIMIT 1");
				while($row2 = mysqli_fetch_array($result2))
  				{
					echo "<div class='imgdp'>".dp($row3['sender'])."</div>";
				}
				
            	
        		
				$result1 = mysqli_query($con,"SELECT * FROM fox_users WHERE uID = '".$row3['sender']."' LIMIT 1");
				while($row1 = mysqli_fetch_array($result1))
  				{
					echo "<div class='nameplate'>&nbsp;&nbsp;".$row1['fname']." ".$row1['lname']."<br /><span>&nbsp;&nbsp;&nbsp;".$row3['date']." - ".$row3['time']."</span></div>";
				}
		echo "		
                <div class='stats'><img src='../images/".$row3['status'].".png' width='28' height='28' /></div>
        </a>
		";
		}
		
		?>
    </ul>
</div>
</body>
</html>