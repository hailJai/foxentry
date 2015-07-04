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
<title>Activity Card | University Days 2015</title>
</head>
<style type="text/css">
@media print
{
    * {-webkit-print-color-adjust:exact;}
}
.table{
	font-size:10px;
	font-family:Verdana, Geneva, sans-serif;
}
</style>
<link rel="shortcut icon" href="../images/logo_fox.ico" />
<body style="font-family:Arial, Helvetica, sans-serif; font-size:16px;" onLoad="window1.print();">
<table width="7in" height="9in">
<tr>
<td>
<div style="width:3.24in; height:9in; background-image:url(/foxentry_r2/images/acud.png); background-size:contain; float:left;  display:inline-block; background-repeat:no-repeat">
	<div style="padding-top:96px; padding-left:80px;"><span style="background-color:#FFF; padding:3px;"><?php echo userdata('fname', $userid) . " " . userdata('lname', $userid); ?></span></div>
    <div style="padding-top:8px; padding-left:160px; float:left"><span style="background-color:#FFF; padding:3px;"><?php echo userdata('stdno', $userid);?></span></div>
    <div style="padding-top:7px; padding-left:165px; float:left"><span style="background-color:#FFF; padding:3px;"><?php echo userdata('contact', $userid);?></span></div>
</div>
</td>
<td>
<div style="width:4in; height:9in; border-left:1px dashed #000; float:left; margin-left:5px; padding:10px; display:inline-block">
  <p align="center"><strong>University Days 2015 Schedule</strong>
  <hr>

<table cellspacing="0" cellpadding="0" border="1" class="table">
  <col width="185">
  <col width="107">
  <col width="122">
  <tr>
    <td width="185"><div align="center"><strong>EVENT </strong></div></td>
    <td width="97"><div align="center"><strong>TIME </strong></div></td>
    <td width="132"><div align="center"><strong>VENUE  </strong></div></td>
  </tr>
  <tr>
    <td colspan="3" width="414"><div align="center"><strong>DAY    0 - FEBRUARY 10, 2015</strong></div></td>
  </tr>
  <tr>
    <td width="185">Photo Contest </td>
    <td width="97">8:00am-5:00pm </td>
    <td width="132">Student    Center </td>
  </tr>
  <tr>
    <td width="185">Canvass Painting </td>
    <td width="97">8:00am-5:00pm </td>
    <td width="132">Student    Center </td>
  </tr>
  <tr>
    <td width="185">Jigsaw Puzzle Making </td>
    <td width="97">8:00am-5:00pm </td>
    <td width="132">MGN    Lobby </td>
  </tr>
  <tr>
    <td width="185">Sports Fest </td>
    <td width="97">8:00am-5:00pm </td>
    <td width="132">IH    GYM </td>
  </tr>
  <tr>
    <td width="185">Dating Games </td>
    <td width="97">  </td>
    <td width="132">  </td>
  </tr>
  <tr>
    <td colspan="3" width="414"><div align="center"><strong>DAY    1 - FEBRUARY 11, 2015</strong></div></td>
  </tr>
  <tr>
    <td width="185">Zumba </td>
    <td width="97">7:00am-8:00am </td>
    <td width="132">PIAZZA </td>
  </tr>
  <tr>
    <td width="185">Pamicalugud </td>
    <td width="97">8:00am-5:00pm </td>
    <td width="132">PGN    AUDITORIUM </td>
  </tr>
  <tr>
    <td width="185">Sports Fest </td>
    <td width="97">8:00am-12:00nn </td>
    <td width="132">IH    GYM </td>
  </tr>
  <tr>
    <td width="185">Rides </td>
    <td width="97">8:00am-9:00pm </td>
    <td width="132">HAU    GROUNDS </td>
  </tr>
  <tr>
    <td width="185">Theme Park </td>
    <td width="97">8:00am-9:00pm </td>
    <td width="132">HAU    GROUNDS </td>
  </tr>
  <tr>
    <td width="185">Interschool Quiz Bee </td>
    <td width="97">1:00pm-4:00pm </td>
    <td width="132">ACAD    HALL </td>
  </tr>
  <tr>
    <td width="185">Float Parade &amp; Street Dancing </td>
    <td width="97">2:30pm-4:00pm </td>
    <td width="132">ANGELES    CITY WIDE </td>
  </tr>
  <tr>
    <td width="185">Holy Mass </td>
    <td width="97">4:00pm-5:00pm </td>
    <td width="132">PIAZZA </td>
  </tr>
  <tr>
    <td width="185">Opening </td>
    <td width="97">5:00pm-6:00pm </td>
    <td width="132">PIAZZA </td>
  </tr>
  <tr>
    <td width="185">Mass Dance </td>
    <td width="97">6:00pm-9:00pm </td>
    <td width="132">PIAZZA </td>
  </tr>
  <tr>
    <td colspan="3" width="414"><div align="center"><strong>DAY 2 - FEBRUARY 12, 2015</strong></div></td>
  </tr>
  <tr>
    <td width="185">Press Conference </td>
    <td width="97">8:00am-5:00pm </td>
    <td width="132">PGN    CASEROOM </td>
  </tr>
  <tr>
    <td width="185">Sports Fest </td>
    <td width="97">8:00am-12:00nn </td>
    <td width="132">IH    GYM </td>
  </tr>
  <tr>
    <td width="185">Theme Park </td>
    <td width="97">8:00am-9:00pm </td>
    <td width="132">HAU    GROUNDS </td>
  </tr>
  <tr>
    <td width="185">Rides </td>
    <td width="97">8:00am-9:00pm </td>
    <td width="132">HAU    GROUNDS </td>
  </tr>
  <tr>
    <td width="185">Extreme Challenge </td>
    <td width="97">8:00am-5:00pm </td>
    <td width="132">ANGELES    CITY WIDE </td>
  </tr>
  <tr>
    <td width="185">Cheerdance </td>
    <td width="97">2:00pm-5:00pm </td>
    <td width="132">IH    GYM </td>
  </tr>
  <tr>
    <td width="185">Duet Singing Competition </td>
    <td width="97">6:00pm-9:00pm </td>
    <td width="132">PIAZZA </td>
  </tr>
  <tr>
    <td width="185">Prof Got Talent </td>
    <td width="97">6:00pm-9:00pm </td>
    <td width="132">PIAZZA </td>
  </tr>
  <tr>
    <td width="185">Best Dance Crew </td>
    <td width="97">6:00pm-9:00pm </td>
    <td width="132">PIAZZA </td>
  </tr>
  <tr>
    <td colspan="3" width="414"><div align="center"><strong>DAY 3 - FEBRUARY 13, 2015</strong></div></td>
  </tr>
  <tr>
    <td width="185">Individual Quiz Bee </td>
    <td width="97">9:00am-12:00nn </td>
    <td width="132">PLAZA    SAN JOSE </td>
  </tr>
  <tr>
    <td width="185">Intercollege Quiz Bee </td>
    <td width="97">1:30pm-4:30pm </td>
    <td width="132">PLAZA    SAN JOSE </td>
  </tr>
  <tr>
    <td width="185">Sports Fest </td>
    <td width="97">8:00am-12:00nn </td>
    <td width="132">IH    GYM </td>
  </tr>
  <tr>
    <td width="185">Theme Park </td>
    <td width="97">9:00am-9:00pm </td>
    <td width="132">HAU    GROUNDS </td>
  </tr>
  <tr>
    <td width="185">Rides </td>
    <td width="97">9:00am-9:00pm </td>
    <td width="132">HAU    GROUNDS </td>
  </tr>
  <tr>
    <td width="185">Cooking Showdown </td>
    <td width="97">9:00am-4:30pm </td>
    <td width="132">CASA    NENA </td>
  </tr>
  <tr>
    <td width="185">Carshow </td>
    <td width="97">9:00am-9:00pm </td>
    <td width="132">STL    PARKING LOT </td>
  </tr>
  <tr>
    <td width="185">Mr. &amp; Ms. HAU 2015 </td>
    <td width="97">6:00pm-9:00pm </td>
    <td width="132">PIAZZA </td>
  </tr>
  <tr>
    <td colspan="3" width="414"><div align="center"><strong>DAY    4 FEBRUARY 14, 2015 </strong></div></td>
  </tr>
  <tr>
    <td width="185">Debate </td>
    <td width="97">8:00am-5:00pm </td>
    <td width="132">SJH    201 </td>
  </tr>
  <tr>
    <td width="185">Extemporaneous </td>
    <td width="97">8:00am-5:00pm </td>
    <td width="132">SJH    201 </td>
  </tr>
  <tr>
    <td width="185">Sports Fest </td>
    <td width="97">8:00am-12:00nn </td>
    <td width="132">IH    GYM </td>
  </tr>
  <tr>
    <td width="185">Theme Park </td>
    <td width="97">9:00am-9:00pm </td>
    <td width="132">HAU    GROUNDS </td>
  </tr>
  <tr>
    <td width="185">Carshow </td>
    <td width="97">9:00am-9:00pm </td>
    <td width="132">HAU    GROUNDS </td>
  </tr>
  <tr>
    <td width="185">League of Legends </td>
    <td width="97">8:00am-5:00pm </td>
    <td width="132">ANGELES    CITY WIDE </td>
  </tr>
  <tr>
    <td width="185">Battle of the Bands </td>
    <td width="97">1:00pm-4:00pm </td>
    <td width="132">PLAZA    SAN JOSE </td>
  </tr>
  <tr>
    <td width="185">Debate </td>
    <td width="97">5:00-6:00pm </td>
    <td width="132">PIAZZA </td>
  </tr>
  <tr>
    <td width="185">Kanto Boys </td>
    <td width="97">6:00pm-9:00pm </td>
    <td width="132">PIAZZA </td>
  </tr>
  <tr>
    <td width="185">HAUtaw </td>
    <td width="97">6:00pm-9:00pm </td>
    <td width="132">PIAZZA </td>
  </tr>
  <tr>
    <td width="185">Velentine's Dinner </td>
    <td width="97">6:00pm-9:00pm </td>
    <td width="132">EPIPHANY </td>
  </tr>
  <tr>
    <td width="185">Awarding  </td>
    <td width="97">6:00pm-9:00pm </td>
    <td width="132">PIAZZA </td>
  </tr>
</table>
<p style="font-size:11px">This Activity Card is generated electronically on Foxentry powered by the College Student Council of Information and Communications Technology. Each Activity Card has unique identifiers therefore must not be photocopied.<br>
<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?php echo basicinfo("scode"); ?>" width="50px" height="50px" style="margin-top:10px; margin-right:10px" align="left"><br>
<span style="font-size:12px">http://www.csccicthau.com <br> Printed on:
    <?php echo date("Y/m/d", time());?> - <?php echo date("g:i A", time());?><br>
	<span style="font-size:11px; color:red">This serves as your attendance.</span></span></p>
</div>
</td>
</tr>
</table>
</body>
</html>