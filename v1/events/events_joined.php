<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Events</title>
</head>
<link href='http://fonts.googleapis.com/css?family=Roboto:500' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:300italic' rel='stylesheet' type='text/css'>
<style type="text/css">
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
}
.forms {
	float: left;
	height: 30px;
	width: 300px;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 14px;
}
.container {
	width:840px;
	height:auto;
}
.thumbnails {
	width:400px;
	height:175px;
	border:solid 1px #999999;
	margin: 5px;
	display:inline-block;
	background-image:url(../images/thmbnail.jpg);
	background-position:center center;
	background-repeat:no-repeat;
}
.title {
	background-image:url(../images/header.png);
	background-repeat:repeat;
	width:100%;
	height:60px;
	margin-top:20px;
	margin-bottom:15px;
	padding-bottom:25px;
	padding-top:25px;
	color:#FFF;
	font-family: 'Roboto', sans-serif;
}
.eventname {
	width:210px;
	height:auto;
	min-height:45px;
	margin-top:0px; 
	margin-right:10px; 
	float:left; font-family: 'Exo 2', sans-serif;
}
.descrip {
	width:210px; 
	height:70px; 
	margin-top:0px; 
	margin-right:10px; 
	float:left; font-family: 'Alegreya Sans', sans-serif;
}
</style>
<body>
<div class="container">
	<div class="title">
    <p style="background-color:#FF9900; padding:10px; font-family: 'Roboto', sans-serif; font-size:24px ">
    <img src="../images/Calendar-icon.png" width="19" height="19" /> Events you are registered</p>
    </div>
   
        <?php
        
		error_reporting(E_ERROR);
		include('../account/conn2.php');
		include('../predef/verify.php');
		include('../predef/usable.php');
		$result3 = mysqli_query($con,"SELECT fox_events.id, fox_events.name, fox_events.type, fox_events.certavailability, fox_events.shortdescription FROM fox_events INNER JOIN fox_registrants ON fox_events.id = fox_registrants.eID WHERE fox_registrants.aID = '".$_SESSION['member_id']."' ORDER BY fox_registrants.rID DESC");
		while($row3 = mysqli_fetch_array($result3))
  		{


		echo "<div class='thumbnails'>
    	<div style='float:left; height:155px; width:155px; margin:10px'>

		<a href='../index.php?p=events&id=".$row3['id']."' target='_parent' >
  		<img src='".eventdp($row3['id'])."' width='155' height='155' />

    	</a>
		</div>
    	<div class='eventname'>    
    	<h3>
		";

		echo "";

 		echo $row3['name'];
		echo "</h3>
    </div>
    <div style='width:210px; height:10px;margin-right:10px; float:left'>    
    ".stars($row3['id'])."
    </div>
    <div class='descrip'>
    <p>
		";

		echo $row3['shortdescription'];
		echo "
		</p>
		<div style='float:right'>";
		
		if ($row3['certavailability'] == 'Available')
		{
		if ($row3['type'] == 'College Days')
		{
		echo "
		<form action='certificate_cictdays.php' method='post' target='blank'>
		<input type='hidden' name='txtdln' id='txtdln' value='".$row3['id']."'>
		<input type='submit' name='download' value='Download Certificate'>
		</form>";	
		}
		else
		{
		echo "
		<form action='certificate.php' method='post' target='blank'>
		<input type='hidden' name='txtdln' id='txtdln' value='".$row3['id']."'>
		<input type='submit' name='download' value='Download Certificate'>
		</form>";
		}
		}
		
	echo "	
		</div>  
    </div>
    </div>
		
		";

		
  		}    
	   ?>
   
</div>
</body>
</html>