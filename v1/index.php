<?php
include('this.php');
include('predef/usable.php');
include('joking.php');
session_start();
if (!isset($_SESSION['member_id'])){
header('location:login.php');
}
$member_id=$_SESSION['member_id'];
$access = user_info('user_level');
error_reporting(E_ERROR); 
if (user_info('pword') == md5(user_info('uname')))
{
	header('location:checkpoint.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome&nbsp<?php echo user_info('position'); ?> </title>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="scripts/tiny_mce/tiny_mce.js" type="text/javascript"></script>
<script src="js/textbox_index.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2204022" binding="#postContent" />
</oa:widgets>
-->
</script>
</head>
<link href="default.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="images/logo_fox.ico" />
<style type="text/css">
body, td, th {
	font-family: Verdana, Geneva, sans-serif;
}
a {
	color: #FFF;
}
a:visited {
	color: #FFF;
	text-decoration: none;
}
a:hover {
	color: #CCC;
	text-decoration: underline;
}
a:active {
	color: #FFF;
	text-decoration: none;
}
a:link {
	text-decoration: none;
}
</style>
<link rel="stylesheet" type="text/css" href="css/main-notif.css">
<script language="JavaScript">

function autoResize(id){
    var newheight;
    var newwidth;
    if(document.getElementById){
        newheight=document.getElementById(id).contentWindow.document .body.scrollHeight;
        newwidth=document.getElementById(id).contentWindow.document .body.scrollWidth;
    }
    document.getElementById(id).height= (newheight+20) + "px";
    document.getElementById(id).width= (newwidth) + "px";
}
</script>
<body>
<!--
<div style="float: right; color: #ccc; font-size: 9px; width: 200px; ; padding: 3px; z-index: 1000; position: absolute; left: 45px; top: 137px;">
Developer's Preview<br />
Build R1-C71514-DB71514
</div> -->
<div class="header">
 <a href="index.php">
  <div style="padding:4px; padding-bottom:0px; float:left;"><img src="images/logo_fox.png" width="35" height="35" alt="LOGO" /> </div>
  <div style="padding:8px; padding-bottom:0px; float:left;"> FOXENTRY <font style="font-size:9px">beta</font> | <font style="font-size:9px">Powered by CSC CICT | LOOP + Code Geeks</font> </div>
  </a>
  <div style="padding:8px; padding-bottom:0px; padding-right:15px; float:right;"> <a href="index.php?p=info"><?php echo user_info('fname')." ".user_info('lname'); ?></a>
  
  
    <a href="#" class="button notificationicon on"><?php echo notifcount($member_id,user_info('user_level')); ?></a>
  	
  
  
  | <a href="logout.php">Log Out <img src="images/LH2-Shutdown-icon.png" width="20" height="20" vspace="8" /></a> </div>
	
</div>

<!-- space -->

<div style="float:right; margin-right:420px; margin-top:-12px">
	<div class="contain">
    <ul id="notificationMenu" class="notifications">
      <li class="titlebar">
        <span class="title">Notifications</span>
        <span class="settings">
        </span>
      </li>
      <div class="notifbox">
        <?php echo shownotifs($member_id); ?>
      </div>
      <li class="seeall">
        <a href="#">See All</a>
      </li>
    </ul>
  </div>
  </div>

<div style="width:100%; height:60px;"> </div>
<div class="main">
  <div class="sidebar">
    <div style="width:100%; height:130px;">
      <form method="post" action="account/update.php" name="frmSearch">
        <textarea id="postContent" name="postContent" rows="4" style="width:288px; margin-bottom:-10px" onfocus="empty()" onclick="empty()"></textarea>
        <input type="hidden" name="txtaID" value="<?php echo $member_id; ?>"/>
        <input name="btn_search" type="submit"  id="searchSubmit" value=""/>
      </form>
    </div>
    <div id="TabbedPanels1" class="TabbedPanels">
      <ul class="TabbedPanelsTabGroup">
        <li class="TabbedPanelsTab" tabindex="0">Council & Orgs</li>
        <li class="TabbedPanelsTab" tabindex="0">College Days</li>
        <li class="TabbedPanelsTab" tabindex="0">Personal</li>
      </ul>
      <div class="TabbedPanelsContentGroup">
        <div class="TabbedPanelsContent">
          <ul id="MenuBar1" class="MenuBarVertical">
          <?php 
		  if ($access == 1){
		  echo "
		  <li><a href='csc/add_account.php' target='forms'><img src='images/T-Shirt-icon.png' width='16' height='16' /> Create Regular Account</a></li>
		  <li><a href='index.php?p=accounts'><img src='images/file-icon.png' width='16' height='16' /> Accounts</a></li>
          <li><a href='csc/org_reports.php' target='forms'><img src='images/reminders-icon.png' width='16' height='16' /> Reports</a></li>
		  <li><a href='csc/bullying_reports.php' target='forms'><img src='images/iBooks-icon.png' width='16' height='16' /> Bullying Reports".unreadbully()."</a></li>
		  <li><a href='csc/prof_reports.php' target='forms'><img src='images/stickies-icon.png' width='16' height='16' /> Prof Reports".unreadprof()."</a></li>
		  <li><a href='csc/developer_apps.php' target='forms'><img src='images/Tree-icon.png' width='16' height='16' /> Developer Applications".unreaddev()."</a></li>
		  <li><a href='csc/attendance.php' target='forms'><img src='images/T-Shirt-icon.png' width='16' height='16' /> Duty Hours</a></li>
		  <li><a href='csc/login_adverts.php' target='forms'><img src='images/automator-icon.png' width='16' height='16' /> Login & Dash Ads</a></li>
		  <li><a href='csc/advertupload.php' target='forms'><img src='images/flaticonmaker-icon.png' width='17' height='16' /> Advertisements</a></li>
          <li><a href='advertisement.php' target='new'><img src='images/startup-icon.png' width='16' height='16' /> Open Ads Page</a></li>
		  <li><a href='csc/logs_error.php' target='forms'><img src='images/settings-icon.png' width='16' height='16' /> Logs and Errors</a></li>		
		  <li><a href='csc/suggestions.php' target='forms'><img src='images/rainbow-apple-logo-icon.png' width='16' height='16' /> Suggestions to Council</a></li>		  
		  ";
		  }
		  elseif($access == 8){
		  echo "
		  
		  <li><a href='index.php?p=accounts'><img src='images/file-icon.png' width='16' height='16' /> Accounts</a></li>
          <li><a href='csc/org_reports.php' target='forms'><img src='images/reminders-icon.png' width='16' height='16' /> Reports</a></li>
		  <li><a href='csc/bullying_reports.php' target='forms'><img src='images/iBooks-icon.png' width='16' height='16' /> Bullying Reports".unreadbully()."</a></li>
		  <li><a href='csc/prof_reports.php' target='forms'><img src='images/stickies-icon.png' width='16' height='16' /> Prof Reports".unreadprof()."</a></li>
		  <li><a href='csc/advertupload.php' target='forms'><img src='images/flaticonmaker-icon.png' width='17' height='16' /> Advertisements</a></li>
          <li><a href='advertisement.php' target='new'><img src='images/startup-icon.png' width='16' height='16' /> Open Ads Page</a></li>		  
		  
		  ";  
		  }
		  elseif($access == 64){
		  echo "
		  
		  <li><a href='index.php?p=accounts'><img src='images/file-icon.png' width='16' height='16' /> Accounts</a></li>
          <li><a href='csc/org_reports.php' target='forms'><img src='images/reminders-icon.png' width='16' height='16' /> Reports</a></li>
          <li><a href='advertisement.php' target='new'><img src='images/startup-icon.png' width='16' height='16' /> Open Ads Page</a></li>		  
		  
		  ";  
		  }
		  elseif($access == 2){
		  echo "
		  <li><a href='csc/add_account.php' target='forms'><img src='images/T-Shirt-icon.png' width='16' height='16' /> Create Regular Account</a></li>
		  <li><a href='index.php?p=accounts'><img src='images/file-icon.png' width='16' height='16' /> Accounts</a></li>
          <li><a href='csc/org_reports.php' target='forms'><img src='images/reminders-icon.png' width='16' height='16' /> Reports</a></li>
		  <li><a href='csc/prof_reports.php' target='forms'><img src='images/stickies-icon.png' width='16' height='16' /> Prof Reports".unreadprof()."</a></li>
		  <li><a href='csc/attendance.php' target='forms'><img src='images/T-Shirt-icon.png' width='16' height='16' /> Duty Hours</a></li>
		  <li><a href='csc/login_adverts.php' target='forms'><img src='images/automator-icon.png' width='16' height='16' /> Login & Dash Ads</a></li>
		  <li><a href='csc/advertupload.php' target='forms'><img src='images/flaticonmaker-icon.png' width='17' height='16' /> Advertisements</a></li>
          <li><a href='advertisement.php' target='new'><img src='images/startup-icon.png' width='16' height='16' /> Open Ads Page</a></li>
		  <li><a href='csc/suggestions.php' target='forms'><img src='images/rainbow-apple-logo-icon.png' width='16' height='16' /> Suggestions to Council</a></li>		  
		 
		  ";  
		  }
		  elseif($access == 16){
		  echo "
		  <li><a href='csc/add_account.php' target='forms'><img src='images/T-Shirt-icon.png' width='16' height='16' /> Create Regular Account</a></li>
		  <li><a href='index.php?p=accounts'><img src='images/file-icon.png' width='16' height='16' /> Accounts</a></li>
          <li><a href='csc/org_reports.php' target='forms'><img src='images/reminders-icon.png' width='16' height='16' /> Reports</a></li>
		  <li><a href='csc/attendance.php' target='forms'><img src='images/T-Shirt-icon.png' width='16' height='16' /> Duty Hours</a></li>
		  <li><a href='csc/login_adverts.php' target='forms'><img src='images/automator-icon.png' width='16' height='16' /> Login & Dash Ads</a></li>
		  <li><a href='csc/advertupload.php' target='forms'><img src='images/flaticonmaker-icon.png' width='17' height='16' /> Advertisements</a></li>
          <li><a href='advertisement.php' target='new'><img src='images/startup-icon.png' width='16' height='16' /> Open Ads Page</a></li>
		  ";  
		  }
		  elseif($access == 4){
		  echo "
		  <li><a href='csc/add_account.php' target='forms'><img src='images/T-Shirt-icon.png' width='16' height='16' /> Create Regular Account</a></li>
		  <li><a href='index.php?p=accounts'><img src='images/file-icon.png' width='16' height='16' /> Accounts</a></li>
          <li><a href='csc/org_reports.php' target='forms'><img src='images/reminders-icon.png' width='16' height='16' /> Reports</a></li>
		  <li><a href='csc/advertupload.php' target='forms'><img src='images/flaticonmaker-icon.png' width='17' height='16' /> Advertisements</a></li>
          <li><a href='advertisement.php' target='new'><img src='images/startup-icon.png' width='16' height='16' /> Open Ads Page</a></li>
		   ";  
		  }
		  ?>
            <li><a href="index.php?p=suggest"><img src="images/Arrow-Bulls-Eye-icon.png" width="16" height="16" /> Send Suggestion</a></li>
          </ul>
        </div>
        <div class="TabbedPanelsContent">
          <ul id="MenuBar1" class="MenuBarVertical">
            <?php
			if (($access == 1)||($access == 2)||($access == 4)){
		  	echo "
			<li><a href='events/new_event.php' target='forms'><img src='images/Calendar-icon.png' width='16' height='16' /> New Event</a></li>
            <li><a href='events/my_events.php' target='forms'><img src='images/flag-icon.png' width='17' height='17' /> My Events</a></li>	
			";
			}
			?>
            <li><a href="index.php?p=cde"><img src="images/iMovie-icon.png" width="17" height="17" /> Events <?php echo cdaysecount()?></a></li>
            <li><a href="account/activity_card_udays.php" target="_new"><img src="images/dictionary-icon.png" width="17" height="17" /> UDAYS Activity Card</a></li>
          </ul>
        </div>
        <div class="TabbedPanelsContent">
          <ul id="MenuBar1" class="MenuBarVertical">
            <li><a href="index.php?p=dash"><img src="images/house-icon.png" width="16" height="16" /> Dashboard</a></li>
            <li><a href="index.php?p=msg"><img src="images/messages-icon.png" width="16" height="16" /> Messages <?php echo pmcount($member_id);?></a></li>
            <li><a href="index.php?p=cdp"><img src="images/imagecapture-icon.png" width="16" height="16" /> Change Display Photo</a></li>
            <?php 
		  	if (($access == 1)||($access == 2)||($access == 4)||($access == 16)||($access == 32)){
		  	echo "
			<li><a href='index.php?p=achat'><img src='images/Chat-icon.png' width='16' height='16' /> Anon Chat</a></li>
			";
		  	}
			
		  	?>
            
            <li><a href="index.php?p=events"><img src="images/calendar-icon2.png" width="16" height="16" /> Events <?php echo regevecount(); ?></a></li>
            <li><a href="index.php?p=joined"><img src="images/Calendar-icon.png" width="16" height="16" /> Events Registered <?php echo joinedecount(); ?></a></li>
            <li><a href="index.php?p=dev"><img src="images/Tree-icon.png" width="16" height="16" /> Apply as Developer</a></li>
            <li><a href="http://goo.gl/hrv2pq" target="new"><img src="images/mission-icon.png" width="16" height="16" /> Apply as Council Staff</a></li>
            <li><a href="index.php?p=bullying"><img src="images/file-icon.png" width="16" height="16" /> Report Bullying</a></li>
            <li><a href="index.php?p=prof"><img src="images/iBooks-icon.png" width="16" height="16" /> Report a Prof</a></li>
            <li><a href="help.php" target="new"><img src="images/automator-icon.png" width="16" height="16" /> Help Page</a></li>
            <li><a href="dev/" target="new"><img src="images/Tree-icon.png" width="16" height="16" /> Developers</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="taskpane">
    <iframe src="<?php echo toc(make_safe($_GET["p"]),make_safe($_GET["id"]));?>" width="880px" height="400px" id="iframe1" marginheight="0" frameborder="0" onload="autoResize('iframe1');" name="forms" scrolling="no"></iframe>
  </div>
</div>
<pre>
<?php
echo  $_SESSION['username'] . $_SESSION['pass'] . $_SESSION['accesslvl'] . $_SESSION['org'];
?>
</pre>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1", {defaultTab:2});
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
<script type="text/javascript">
jQuery(function($){
  setInterval(function(){
    $.get( 'predef/usable.php', function(notifcount2){
      $('#notif').html( notifcount2 );
    });
  },5000); // 5000ms == 5 seconds
});
</script>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>  
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>

<!--
<script type="text/javascript">
window.onload(alert("Welcome to Foxentry! This is a developer's preview. \nBuild R1 | Compressed on 71514 | DB File 71514\nThis version still have a lot of bugs, please don't forget to comment errors."));

</script>

-->