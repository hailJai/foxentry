<?php
date_default_timezone_set("Asia/Singapore"); 
include('../predef/verify.php');
include('../predef/usable.php');
$userid = $_SESSION['member_id'];
$mod = $FirstName . " " . $LastName;
seenp($_SESSION['member_id'], $mod, $_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Activity Card | College Days 2014</title>
</head>
<style type="text/css">
@media print
{
    * {-webkit-print-color-adjust:exact;}
}

</style>
<link rel="shortcut icon" href="../images/logo_fox.ico" />
<body style="font-family:Arial, Helvetica, sans-serif; font-size:16px;" onLoad="window.print();">
<table width="7in" height="9in">
<tr>
<td>
<div style="width:3.24in; height:9in; background-image:url(../images/ac.jpg); background-size:contain; float:left;  display:inline-block">
	<div style="padding-top:100px; padding-left:80px;"><span style="background-color:#FFF; padding:3px;"><?php echo userdata('fname', $userid) . " " . userdata('lname', $userid); ?></span></div>
    <div style="padding-top:10px; padding-left:160px; float:left"><span style="background-color:#FFF; padding:3px;"><?php echo userdata('stdno', $userid);?></span></div>
    <div style="padding-top:10px; padding-left:165px; float:left"><span style="background-color:#FFF; padding:3px;"><?php echo userdata('contact', $userid);?></span></div>
    <div style="padding-top:7px; padding-left:155px; float:left"><span style="background-color:#FFF; padding:3px;"><?php echo userdata('yearlevel', $userid) . "/" . userdata('section', $userid);?></span></div>
    <div style="padding-top:550px; float:left">
    <div style="float:left">
    <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?php echo basicinfo("scode"); ?>" width="80px" height="80px" style="margin-top:10px">
    </div>
    <div style="float:left">
    <p align="left">Personal Key: <?php echo basicinfo("scode"); ?><br>Receiver Key: <?php echo basicinfo("rkey"); ?><br>

    <?php echo date("g:i A", time());?><br>
	<?php echo date("Y/m/d", time());?><br>
	<span style="font-size:11px; color:red">This activity card serves as your attendance.</span>
    </p>
    </div>
    </div>
</div>
</td>
<td>
<div style="width:4in; height:9in; border-left:1px dashed #000; float:left; margin-left:5px; padding:10px; display:inline-block"> Events you've joined.
<br>
<hr>
<table width="100%" border="1" style="font-size:13px" cellspacing="0" cellpadding="0">
  <tr>
    <th width="42%">Event</th>
    <th width="58%">Organizer/Contact #</th>
    </tr>
  	<?php
        
		error_reporting(E_ERROR);
		include('../account/conn2.php');
		$result3 = mysqli_query($con,"SELECT fox_events.id, fox_events.aID, fox_events.name, fox_events.certavailability, fox_events.shortdescription FROM fox_events INNER JOIN fox_registrants ON fox_events.id = fox_registrants.eID WHERE fox_registrants.aID = '".$_SESSION['member_id']."' AND fox_events.type LIKE 'College Days' ORDER BY fox_registrants.rID DESC");
		while($row3 = mysqli_fetch_array($result3))
  		{

		$userid =  $row3['aID'];
		echo '
		<tr>
		<td>'.$row3['name'].'</td>
		<td>'.userdata('fname', $userid) . " " . userdata('lname', $userid) . '/' . userdata('contact',$userid).'</td>
		</tr>
		';

		
  		}    
	?>
</table>
<p>College Days Schedule<hr>
<table cellspacing="0" cellpadding="0" style="font-size:11px" border="1">
  <col width="187">
  <col width="95">
  <col width="102">
  <tr>
    <td colspan="3"><div align="center"><strong>First    Day (Sept. 26 - Friday)</strong></div></td>
  </tr>
  <tr>
    <th width="185">EVENT</th>
    <th width="82">TIME</th>
    <th width="115">VENUE</th>
  </tr>
  <tr>
    <td>Subnet Me</td>
    <td>8:15    - 10:15</td>
    <td>SJH    - 703</td>
  </tr>
  <tr>
    <td>Offer IT Up:Holy Mass</td>
    <td>9:30    - 11:45</td>
    <td>HAU    Chapel</td>
  </tr>
  <tr>
    <td>Sportsfest</td>
    <td>8:00    – 11:00</td>
    <td>GYM</td>
  </tr>
  <tr>
    <td>Boodle Feast Fight</td>
    <td>12:00    - 1:00</td>
    <td>SJH    Hallways</td>
  </tr>
  <tr>
    <td>SuperScript! - WWW</td>
    <td>3:30    - 5:00</td>
    <td>SJH    - 706</td>
  </tr>
  <tr>
    <td>SubsCript! - WWW</td>
    <td>2:00    - 4:00</td>
    <td>SJH    - 707</td>
  </tr>
  <tr>
    <td>iTube:2D HS Animation</td>
    <td>12:30    - 5:30</td>
    <td>SJH    Acad Hall</td>
  </tr>
  <tr>
    <td>Talk </td>
    <td>12:30    - 5:30</td>
    <td>SJH    Acad Hall</td>
  </tr>
  <tr>
    <td>HS Short Courses Graduation</td>
    <td>12:30    - 5:30</td>
    <td>SJH    Acad Hall</td>
  </tr>
  <tr>
    <td>High School Quizbee</td>
    <td>12:30    - 5:30</td>
    <td>SJH    Acad Hall</td>
  </tr>
  <tr>
    <td>College Quizbee</td>
    <td>12:30    - 5:30</td>
    <td>SJH    Acad Hall</td>
  </tr>
  <tr>
    <td>Geo Hunting</td>
    <td>1:30    - 3:30</td>
    <td>Whole    Campus</td>
  </tr>
  <tr>
    <td>Firewall</td>
    <td>1:30    - 3:30</td>
    <td>NEAR    GYM</td>
  </tr>
  <tr>
    <td>Parade</td>
    <td>4:00    – 5:00</td>
    <td>HAU </td>
  </tr>
  <tr>
    <td>Opening Night</td>
    <td>5:30    - 7:00</td>
    <td>GYM</td>
  </tr>
  <tr>
    <td>Step Up: All In</td>
    <td>8:15    - 9:15</td>
    <td>GYM</td>
  </tr>
  <tr>
    <td>Diversity X – Exhibit</td>
    <td>10:00    - 4:00</td>
    <td>Student    Center</td>
  </tr>
  <tr>
    <td>Gig Hub</td>
    <td>1:00    - 4:00 </td>
    <td>Student    Center</td>
  </tr>
  <tr>
    <td>Drum Jam Battle</td>
    <td>7:15    - 8:00</td>
    <td>GYM</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"><strong>Second    Day (Sept. 27 - Saturday)</strong></div></td>
  </tr>
  <tr>
    <td>Web iSign</td>
    <td>10:00 - 12:00</td>
    <td>SJH 704</td>
  </tr>
  <tr>
    <td>GMG!</td>
    <td>10:00 - 12:00</td>
    <td>SJH 703</td>
  </tr>
  <tr>
    <td>Cisco Skills</td>
    <td>10:00 - 12:00</td>
    <td>SJH 702</td>
  </tr>
  <tr>
    <td>War of the    Pro</td>
    <td>12:30 - 3:30</td>
    <td>SJH 706</td>
  </tr>
  <tr>
    <td>2X2    Photography Challenge</td>
    <td>1:00 - 4:00</td>
    <td>Campus</td>
  </tr>
  <tr>
    <td>Inter Org    Quidditch</td>
    <td>2:30 - 4:30</td>
    <td>Side GYM</td>
  </tr>
  <tr>
    <td>The CICT    Idol</td>
    <td>5:30 - 6:30</td>
    <td>GYM</td>
  </tr>
  <tr>
    <td>ART RAVE:    Mr. &amp; Ms. CICT</td>
    <td>6:45 - 8:45</td>
    <td>GYM</td>
  </tr>
  <tr>
    <td>iTube</td>
    <td>6:30 - 8:45</td>
    <td>GYM</td>
  </tr>
  <tr>
    <td>Awards Night</td>
    <td>8:45 - 9:15</td>
    <td>GYM</td>
  </tr>
  <tr>
    <td>Diversity X    - Exhibit</td>
    <td>10:00 - 4:00</td>
    <td>Student Center</td>
  </tr>
  <tr>
    <td>DRUM JAM    BATTLE</td>
    <td>3:00 - 5:00</td>
    <td>GYM</td>
  </tr>
</table>
<p>&nbsp;</p>
</div>
</td>
</tr>
</table>
</body>
</html>