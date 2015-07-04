<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Event Details</title>
</head>
<link href='http://fonts.googleapis.com/css?family=Roboto:500' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:300italic' rel='stylesheet' type='text/css'>
<style type="text/css">
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
}
.container {
	width:830px;
	height:auto;
	margin-bottom:20px;
	display:inline-block;
	padding-right:15px;
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
	background-image:url(../images/header2.png);
	background-repeat:no-repeat;
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
	height:45px;
	margin-top:10px; 
	margin-right:10px; 
	float:left; font-family: 'Exo 2', sans-serif;
}
.descrip {
	width:210px; 
	height:70px; 
	margin-top:10px; 
	margin-right:10px; 
	float:left; font-family: 'Alegreya Sans', sans-serif;
}
.icon {
	margin-left:30px;
	height:176px;
	width:176px;
	margin-right:10px;
	float:left;
}
.nameplate{
	padding:5px;
	width:600px;
	background-image:url(../images/20.png);
	background-repeat:repeat;
	color:#333;
	float:left;
	font-size:36px;
	font-family: 'Roboto', sans-serif;
}
.details{
	padding:5px;
	width:600px;
	background-color:#FFF;
	color:#333;
	float:left;
	font-size:20px;
	font-family: 'Alegreya Sans', sans-serif;
}
.rate{
	padding:5px;
	width:600px;
	background-color:#FFF;
	color:#333;
	float:left;
	font-size:18px;
	float:left; font-family: 'Exo 2', sans-serif;
}
input[type=radio].css-checkbox {
	display:none;
}
input[type=radio].css-checkbox + label.css-label {
	padding-left:33px;
	height:28px; 
	display:inline-block;
	line-height:28px;
	background-repeat:no-repeat;
	background-position: 0 0;
	font-size:28px;
	vertical-align:middle;
	cursor:pointer;
}

input[type=radio].css-checkbox:checked + label.css-label {
	background-position: 0 -28px;
}
label.css-label {
	background-image:url(http://csscheckbox.com/checkboxes/u/csscheckbox_f8040a0fc242e4b4d0931182b00b95d8.png);
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
.longdesc{
	width:750px;
	height:auto;
	font-family:Verdana, Geneva, sans-serif;
	font-size:14px;
	color:#333;
	background-image:url(../images/20.png);
	background-repeat:repeat;
	margin-top:110px;
	padding-left:30px;
	padding-right:50px;
	padding-top:15px;
	padding-bottom:15px;
	margin-bottom:10px;
}
.button {
   border-top: 1px solid #96d1f8;
   background: #65a9d7;
   background: -webkit-gradient(linear, left top, left bottom, from(#62baf5), to(#65a9d7));
   background: -webkit-linear-gradient(top, #62baf5, #65a9d7);
   background: -moz-linear-gradient(top, #62baf5, #65a9d7);
   background: -ms-linear-gradient(top, #62baf5, #65a9d7);
   background: -o-linear-gradient(top, #62baf5, #65a9d7);
   padding: 8.5px 17px;
   -webkit-border-radius: 8px;
   -moz-border-radius: 8px;
   border-radius: 8px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: white;
   font-size: 17px;
   font-family: 'Lucida Grande', Helvetica, Arial, Sans-Serif;
   text-decoration: none;
   vertical-align: middle;
   }
.button:hover {
   border-top-color: #36749e;
   background: #36749e;
   color: #fcfcfc;
   }
.button:active {
   border-top-color: #337bab;
   background: #337bab;
   }
</style>
<script>
function autoSubmit()
{
    var formObject = document.forms['theForm'];
    formObject.submit();
}
</script>
<body>
<?php
include('../account/conn2.php');
include('../predef/usable.php');
$result = mysqli_query($con,"SELECT * FROM fox_events WHERE id='".$_GET["id"]."'");
while($row = mysqli_fetch_array($result))
  {
		
?>
<div class="container">
<div class="title">
	<div class="icon">
    <img src="<?php echo eventdp($_GET["id"]) ?>" width="176" height="176" />
    
    </div>
    <div class="nameplate">
    <?php echo  $row['name']; ?>

<!--
<form action="register.php" name="register" method="post">
 <input type="hidden" name="txtcount" id="txtcount" value="<?php echo $row['count'] ?>">
 <input type="hidden" name="txtaid" id="txtaid" value="<?php echo $_SESSION['member_id'] ?>">
  <input type="hidden" name="txteid" id="txteid" value="<?php echo $row['id'];$regID=$row['id'] ?>">
  <input type="submit" class="button" name="register" id="register" value="Register!" align="right"/>
 </form>
-->
 
    </div>
    <form action="ratings.php" method="post" id="theForm">
    <div class="details">
    <?php echo  $row['shortdescription']; ?><br />
	<span style="font-size:12px">Organized by: <?php echo  $row['organizer']; ?> (<?php echo  contact($row['aID']); ?>)</span> 
    </div>
    <div class="rate">How interested are you in this event?  
      
      <input type="radio" name="radiog_lite" id="radio5" class="css-checkbox" value="5" onChange="autoSubmit();" <?php echo checked($row['id'],$_SESSION['member_id'], 5) ?>/><label for="radio5" class="css-label">5</label>
      <input type="radio" name="radiog_lite" id="radio4" class="css-checkbox" value="4" onChange="autoSubmit();" <?php echo checked($row['id'],$_SESSION['member_id'], 4) ?>/><label for="radio4" class="css-label">4</label>
      <input type="radio" name="radiog_lite" id="radio3" class="css-checkbox" value="3" onChange="autoSubmit();" <?php echo checked($row['id'],$_SESSION['member_id'], 3) ?>/><label for="radio3" class="css-label">3</label>
      <input type="radio" name="radiog_lite" id="radio2" class="css-checkbox" value="2" onChange="autoSubmit();" <?php echo checked($row['id'],$_SESSION['member_id'], 2) ?>/><label for="radio2" class="css-label">2</label>
      <input type="radio" name="radiog_lite" id="radio1" class="css-checkbox" value="1" onChange="autoSubmit();" <?php echo checked($row['id'],$_SESSION['member_id'], 1) ?>/><label for="radio1" class="css-label">1</label>
      <input type="hidden" name="txtaid" id="txtaid" value="<?php echo $_SESSION['member_id'] ?>">
  	  <input type="hidden" name="txteid" id="txteid" value="<?php echo $row['id'];$regID=$row['id'] ?>">
      
    </div>
    </form>
  </div>
  <div class="longdesc">
  <?php echo  $row['longdesc']; ?>
  </div>

<p align="center">
  <?php

  }
?>
</p>
<p align="center">List of students who registered for this event.</p>
<table width="830" border="1" id="regs">
  <tr>
	<td><div align="center">#</div></td>
	<td><div align="center">Name</div></td>
	<td><div align="center">Section</div></td>
	<td><div align="center">Year Level</div></td>	
</tr>

<?php 
$x = 0;
$regis = mysqli_query($con,"SELECT * FROM fox_users INNER JOIN fox_registrants ON fox_users.uID = fox_registrants.aID WHERE eID='".$regID."' ");
while($reg = mysqli_fetch_array($regis))
{
	$x++;
	echo "
	<tr>
	<td>".$x."</td>
	<td>".$reg['fname']." ".$reg['lname']."</td>
	<td>".$reg['section']."</td>
	<td>".$reg['yearlevel']."</td>
	</tr>
	
	";
}

 ?>
</table>
</div>
</body>
</html>