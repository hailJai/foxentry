<?php
error_reporting(E_ERROR);
include("../this.php");
session_start();
$UID = $_SESSION['member_id'];
//NEW FUNCTIONS
function user_info($data)
{
	include("account/conn2.php");
	include("../account/conn2.php");
	$UID = $_SESSION['member_id'];
	$result1 = mysqli_query($con,"SELECT * FROM fox_users WHERE uID='".$UID."'");
  	while($row1 = mysqli_fetch_array($result1))
  	{
		$data =  $row1[$data];
  	}
	return $data;
}
//SPECIFIC
function user_info_client($data,$id)
{
	include("account/conn2.php");
	include("../account/conn2.php");
	$UID = $_SESSION['member_id'];
	$result1 = mysqli_query($con,"SELECT * FROM fox_users WHERE uID='".$id."'");
  	while($row1 = mysqli_fetch_array($result1))
  	{
		$data =  $row1[$data];
  	}
	return $data;
}
function validate_cert($event_id)
{
	include("account/conn2.php");
	include("../account/conn2.php");
	$UID = $_SESSION['member_id'];
	$result = mysqli_query($con,"SELECT * FROM fox_registrants WHERE aID='".$UID."' AND eID='".$event_id."'");
  	$count=mysqli_num_rows($result);
	$result0 = mysqli_query($con,"SELECT * FROM fox_events WHERE aID='".$UID."' AND id='".$event_id."'");
  	$count0=mysqli_num_rows($result0);
	if (($count > 0)||($count0 > 0))
	{
	while($row1 = mysqli_fetch_array($result))
  		{
			return $row1['rID'];
		}
	}
	else
	{
		return 'false';
	}
}

//OLD FUNCTIONS
function dp($user_id)
{
	include("../account/conn2.php");
	$result3 = mysqli_query($con,"SELECT * FROM fox_images WHERE aID ='".$user_id."' AND type ='dp' ORDER BY imgID DESC LIMIT 1");
	$countimg=mysqli_num_rows($result3);
	if ($countimg > 0)
	{
		while($row3 = mysqli_fetch_array($result3))
  		{
 		$imgdp = '<img src="'.$row3['url'].'" width="54" height="54" onerror="this.src=\'../images/user.png\';"/>';
  		}
	}
	else
	{
		$imgdp = '<img src="../images/user.png" width="54" height="54"/>';
	}
	return $imgdp;
}

function dpurl($accountid)
{
	include("account/conn2.php");
	$result3 = mysqli_query($con,"SELECT * FROM fox_images WHERE aID ='".$accountid."' AND type ='dp' ORDER BY imgID DESC LIMIT 1");
	$countimg=mysqli_num_rows($result3);
	if ($countimg > 0)
	{
		while($row3 = mysqli_fetch_array($result3))
  		{
 		$imgdp = $row3['url'];
  		}
	}
	else
	{
		$imgdp = 'images/user.png';
	}
	return $imgdp;
}

function devphoto($user_id)
{
	include("../account/conn2.php");
	$result3 = mysqli_query($con,"SELECT * FROM fox_images WHERE aID ='".$user_id."' AND type ='dp' ORDER BY imgID DESC LIMIT 1");
	$countimg=mysqli_num_rows($result3);
	if ($countimg > 0)
	{
		while($row3 = mysqli_fetch_array($result3))
  		{
 		$imgdp = "<img class='img-responsive img-circle' src='".$row3['url']."' data-toggle='tooltip' data-placement='top' title='Click me!'/>";
  		}
	}
	else
	{
		$imgdp = "<img class='img-responsive img-circle' src='assets/img/logo_fox.png' data-toggle='tooltip' data-placement='top' title='Click me!'/>";
	}
	return $imgdp;
}

function eventdp($event_id)
{
	include("../account/conn2.php");
	$result3 = mysqli_query($con,"SELECT * FROM fox_events WHERE id='".$event_id."'");

		while($row3 = mysqli_fetch_array($result3))
  		{
			if ($row3['display'] != "")
			{
				$imgdp = $row3['display'];
			}
			else
			{
				$imgdp = "../images/quditch.png";
			}
  		}
	return $imgdp;
}

function loginbg($type)
{
	
	if($type == "login")
	{
		include("account/conn2.php");
	}
	elseif($type == "dashad")
	{
		include("../account/conn2.php");
	}

	//$result3 = mysqli_query($con,"SELECT * FROM fox_images WHERE imgID >= (SELECT FLOOR( MAX(imgID) * RAND()) FROM fox_images ) AND type='".$type."' ORDER BY imgID LIMIT 1;");
	//$result3 = mysqli_query($con,"SELECT * FROM fox_images WHERE type='".$type."' ORDER BY imgID DESC LIMIT 1");
	$result3 = mysqli_query($con,"SELECT * FROM fox_images WHERE type='".$type."' ORDER BY RAND() LIMIT 0,1;");
	while($row3 = mysqli_fetch_array($result3))
  	{
 		$imgdp = $row3['url'];
  	}
	return $imgdp;
}

function caption($url)
{
	include("account/conn2.php");
	$result3 = mysqli_query($con,"SELECT * FROM fox_images WHERE url='".$url."'");
	while($row3 = mysqli_fetch_array($result3))
  	{
 		$caption = $row3['caption'] . "<br/>" .$row3['photog'];
  	}
	return $caption;
}
function linkad($url)
{
	include("../account/conn2.php");
	$result3 = mysqli_query($con,"SELECT * FROM fox_images WHERE url='".$url."'");
	while($row3 = mysqli_fetch_array($result3))
  	{
 		$caption = $row3['caption'];
  	}
	return $caption;
}

function orgname($org)
{
	switch($org){
		
		case "CSO";
		$orgname = "Cisco Student Organization";
		break;
		
		case "LOOP";
		$orgname = "League of Outstanding Programmers";
		break;
		
		case "CG";
		$orgname = "Code Geeks";
		break;
		
		default;
		$orgname = "No Registered Organization";
	}
	
	return $orgname;
}


function fullname($user_id)
{
	include("account/conn2.php");
	include("../account/conn2.php");
	$result1 = mysqli_query($con,"SELECT * FROM fox_users WHERE uID='".$user_id."'");
  	while($row1 = mysqli_fetch_array($result1))
  	{
		$name =  $row1['fname']. " ". $row1['lname'];
  	}
	return $name;
}
function userdata($field, $id)
{
	include("account/conn2.php");
	include("../account/conn2.php");
	$result1 = mysqli_query($con,"SELECT * FROM fox_users WHERE uID='".$id."'");
  	while($row1 = mysqli_fetch_array($result1))
  	{
		$value =  $row1[$field];
  	}
	return $value;
}
function certtext($eid)
{
	include("../account/conn2.php");
	$result1 = mysqli_query($con,"SELECT * FROM fox_events WHERE id='".$eid."'");
  	while($row1 = mysqli_fetch_array($result1))
  	{
		$text =  $row1['certparttext'];
  	}
	return $text;
}
function certtitle($eid)
{
	include("../account/conn2.php");
	$result1 = mysqli_query($con,"SELECT * FROM fox_events WHERE id='".$eid."'");
  	while($row1 = mysqli_fetch_array($result1))
  	{
		$text =  $row1['name'];
  	}
	return $text;
}
function certbg($eid)
{
	include("../account/conn2.php");
	$result1 = mysqli_query($con,"SELECT * FROM fox_events WHERE id='".$eid."'");
  	while($row1 = mysqli_fetch_array($result1))
  	{
		$text =  $row1['certofpart'];
  	}
	return $text;
}
function contact($user_id)
{
	include("../account/conn2.php");
	$result1 = mysqli_query($con,"SELECT * FROM fox_users WHERE uID='".$user_id."'");
  	while($row1 = mysqli_fetch_array($result1))
  	{
		$contact =  $row1['contact']. " - ". $row1['email'];
  	}
	return $contact;
}
function position($user_id)
{
	include("../account/conn2.php");
	$result1 = mysqli_query($con,"SELECT * FROM fox_users WHERE uID='".$user_id."'");
  	while($row1 = mysqli_fetch_array($result1))
  	{
		$post =  $row1['position'];
  	}
	return $post;
}
function pmcount($aid)
{
	include("../this.php");
	$result=mysql_query("SELECT * FROM fox_messages WHERE receiver ='".$aid."' AND status='unread'")or die (mysql_error());
	$count=mysql_num_rows($result);
	if ($count <> 0)
	{
		return "&nbsp<span style='color:white; background-color:#B4070C; padding:2px 5px 2px 5px;'>" . $count . "</span>";
	}
}
function cdaysecount()
{
	include("../this.php");
	$result=mysql_query("SELECT * FROM fox_events WHERE type ='College Days' AND status like 'active'")or die (mysql_error());
	$count=mysql_num_rows($result);
	if ($count <> 0)
	{
		return "&nbsp<span style='color:white; background-color:#B4070C; padding:2px 5px 2px 5px;'>" . $count . "</span>";
	}
}
function joinedecount()
{
	include("../this.php");
	$result=mysql_query("SELECT fox_events.id, fox_events.name, fox_events.shortdescription FROM fox_events INNER JOIN fox_registrants ON fox_events.id = fox_registrants.eID WHERE fox_registrants.aID = '".$_SESSION['member_id']."'")or die (mysql_error());
	$count=mysql_num_rows($result);
	if ($count <> 0)
	{
		return "&nbsp<span style='color:white; background-color:#B4070C; padding:2px 5px 2px 5px;'>" . $count . "</span>";
	}
}
function regevecount()
{
	include("../this.php");
	$result=mysql_query("SELECT * FROM fox_events WHERE type !='College Days' AND status like 'active' ")or die (mysql_error());
	$count=mysql_num_rows($result);
	if ($count <> 0)
	{
		return "&nbsp<span style='color:white; background-color:#B4070C; padding:2px 5px 2px 5px;'>" . $count . "</span>";
	}
}
function unreadbully()
{
	include("../this.php");
	$result=mysql_query("SELECT * FROM fox_messages WHERE type ='bully' AND status='unread'")or die (mysql_error());
	$count=mysql_num_rows($result);
	if ($count <> 0)
	{
		return "&nbsp<span style='color:white; background-color:#B4070C; padding:2px 5px 2px 5px;'>" . $count . "</span>";
	}
}
function unreadprof()
{
	include("../this.php");
	$result=mysql_query("SELECT * FROM fox_messages WHERE type ='prof' AND status='unread'")or die (mysql_error());
	$count=mysql_num_rows($result);
	if ($count <> 0)
	{
		return "&nbsp<span style='color:white; background-color:#B4070C; padding:2px 5px 2px 5px;'>" . $count . "</span>";
	}
}
function unreaddev()
{
	include("../this.php");
	$result=mysql_query("SELECT * FROM fox_messages WHERE type ='dev' AND status='unread'")or die (mysql_error());
	$count=mysql_num_rows($result);
	if ($count <> 0)
	{
		return "&nbsp<span style='color:white; background-color:#B4070C; padding:2px 5px 2px 5px;'>" . $count . "</span>";
	}
}


session_start();
$user_id = $_SESSION['member_id'];
$acclvl = $_SESSION['accesslvl'];

function notifcount2($user_id,$acclvl)
{
	include("../this.php");
	$count = 0;
	$result=mysql_query("SELECT * FROM fox_messages WHERE type ='bully' AND status='unread'")or die (mysql_error());
	$count0=mysql_num_rows($result);
	$result1=mysql_query("SELECT * FROM fox_messages WHERE type ='dev' AND status='unread'")or die (mysql_error());
	$count1=mysql_num_rows($result1);
	$result2=mysql_query("SELECT * FROM fox_messages WHERE type ='prof' AND status='unread'")or die (mysql_error());
	$count2=mysql_num_rows($result2);
	$result3=mysql_query("SELECT * FROM fox_messages WHERE receiver ='".$user_id."' AND status='unread'")or die (mysql_error());
	$count3=mysql_num_rows($result3);
	
	if(($acclvl == "2") || ($user_id == "1"))
	{
		$count = $count1 + $count0 + $count2 + $count3;
	}
	else
	{
		$count = $count3;
	}

	return "<span style='color:white; background-color:#B4070C; padding:2px 5px 2px 5px;'>" . $count . "</span>&nbsp";

}
function awesomecount($update)
{
	include("../account/conn2.php");
	$result2 = mysqli_query($con,"SELECT * FROM fox_awesome WHERE upID='".$update."'");
	$count=mysqli_num_rows($result2);
	return $count;
}
function checked($eid, $aid, $rate)
{
	include("../account/conn2.php");
	$result1 = mysqli_query($con,"SELECT * FROM fox_eventratings WHERE uID = '".$aid."' AND eID = '".$eid."'");
	while($row1 = mysqli_fetch_array($result1))
  	{
		if ($row1['ratingvalue'] == $rate){
			$checked = "checked='checked'";
		}
		else{
			$checked = "";
		}
		
  	}
	return $checked;
	
}

function stars($eid)
{
	include("../account/conn2.php");
	$result1 = mysqli_query($con,"SELECT AVG(ratingvalue) FROM fox_eventratings WHERE eID = '".$eid."'");
	while($row1 = mysqli_fetch_array($result1))
  	{
		$rating = $row1['AVG(ratingvalue)'];
		for ($x=1; $x<=$rating; $x++){
  			$checked = $checked . "<img src='../images/star-full-icon.png' alt='' width='16' height='16' /> ";
		} 	
  	}
	return $checked;
	
}

function awesomenames($update)
{
	include("../account/conn2.php");
	$result1 = mysqli_query($con,"SELECT fox_users.fname, fox_users.lname, fox_awesome.upID, fox_users.uID FROM fox_users INNER JOIN fox_awesome ON fox_users.uID = fox_awesome.uID WHERE fox_awesome.upID = '".$update."'");
	while($row1 = mysqli_fetch_array($result1))
  	{
		$names = $names .  "<a href=''>".$row1['fname']. " ". $row1['lname'] . "</a>";
  	}
	return $names;
}
$pid = 0;
function toc($name,$pid)
{
	$src = "";
	switch ($name){
		case "cdp":
		$src = "account/photolink.php";
		break;
		
		case "events";
		if ($pid == 0)
		{
			$src = "events/events.php";
		}
		else
		{
			$src = "events/details.php?id=".$pid;
		}
		break;
		
		case "dev";	
		$src = "csc/developer_application.php";
		break;
		
		case "staff";	
		$src = "csc/staff_application.php";
		break;
		
		case "bullying";	
		$src = "csc/report_bullying.php";
		break;
		
		case "prof";	
		$src = "csc/report_prof.php";
		break;
		
		case "accounts";	
		$src = "account/accounts.php";
		break;
		
		case "info";	
		$src = "account/update_account.php";
		break;
		
		case "msg";	
		$src = "account/messages.php";
		break;
		
		case "achat";	
		$src = "chat/index.php";
		break;
		
		case "suggest";	
		$src = "csc/send_suggestion.php";
		break;
		
		case "cde";	
		$src = "events/events_cdays.php";
		break;
		
		case "joined";	
		$src = "events/events_joined.php";
		break;
		
		case "nogame";	
		$src = "no-game-interface/";
		break;
		
		case "post";
		$src = "account/post.php?view=true&id=".$pid."";
		break;

		case "view";
		$src = "account/post.php?id=".$pid."";
		break;
						
		default:
		$src = "account/dashboard.php";
	}
	
	return $src;
}




//AUDITING LOGS



function passmism($unam, $pword){
	
	
	
	$ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';


	$report = "Wrong password input. ".$ipaddress." tried accessing " . $unam ." account using password:" . $pword;
	$strSQL = "INSERT INTO fox_auditing (report, aID, log_type) VALUES ('".$report."','0','Password Mismatch Login')"; 
	$objQuery = mysql_query($strSQL);
	if($objQuery)  
	{ 
		header('location:login.php?Notif=Invalid Login');
	}
	else
	{
		header('location:login.php?Notif=Something went wrong.');
	}
}
function login_succ($uname, $id, $ipaddress)
{
	$ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
		
	$report = "Successful Login of (". $ipaddress .") with user id " . $id;
	$strSQL = "INSERT INTO fox_auditing (report, aID, log_type) VALUES ('".$report."','".$id."','Login Success')"; 
	$objQuery = mysql_query($strSQL);
}
function usermod($uname, $event , $id, $user)
{
	include('../this.php');
	$report =  $user ." successfully " .$event. " of " . $uname;
	$strSQL = "INSERT INTO fox_auditing (report, aID, log_type) VALUES ('".$report."','".$id."','User Modification')"; 
	$objQuery = mysql_query($strSQL);
}
function seen($id, $user, $page, $uname)
{
	include('../this.php');
	$report =  $user ." checked the info of " .$uname. " in " . $page;
	$strSQL = "INSERT INTO fox_auditing (report, aID, log_type) VALUES ('".$report."','".$id."','View Info')"; 
	$objQuery = mysql_query($strSQL);
}
function seenp($id, $user, $page)
{
	include('../this.php');
	$report =  $user ." opened the page " . $page;
	$strSQL = "INSERT INTO fox_auditing (report, aID, log_type) VALUES ('".$report."','".$id."','View Info')"; 
	$objQuery = mysql_query($strSQL);
}
function unauth($id, $user, $page)
{
	include('../this.php');
	$ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
		
	
	$report =  $user ."(". $ipaddress .") tried accessing " .$page;
	$strSQL = "INSERT INTO fox_auditing (report, aID, log_type) VALUES ('".$report."','".$id."','Unauthorized Access')"; 
	$objQuery = mysql_query($strSQL);
}
function newaccount($who, $whom, $id)
{
	include("../account/conn2.php");
	include('../this.php');
	$report = $who ." successfully created an account of " . $whom ;
	$strSQL = "INSERT INTO fox_auditing (report, aID, log_type) VALUES ('".$report."','".$id."','Account Created')"; 
	$objQuery = mysql_query($strSQL);
}
function sqlerror($page, $error, $id, $sqlf)
{
	include('../this.php');
	$report = "Error " .$sqlf . " using " . $error . " in " .$page ;
	$strSQL = "INSERT INTO fox_auditing (report, aID, log_type) VALUES (`'".$report."'`,'".$id."','SQL Error')"; 
	$objQuery = mysql_query($strSQL);
}



//DASHBOARD CALCULATIONS
function textime($upTimeStamp)
{
$time = time(); //TIMESTAMP OF THE SERVER


    $stamp = $upTimeStamp;
    $diff = $time-$stamp; //DIFFERENCE OF POSTED TIMESTAMP & CURRENT TIMESTAMP
    
    //DIVIDES THE DIFFERENCS TO GET THE GREATEST UNIT OF TIME
    switch($diff){
        case ($diff<60):
            $count = $diff;
            $int = "seconds";
            if($count==1){
                $int = substr($int, 0, -1);
            }
        break;
        
        case ($diff>=60&&$diff<3600):
            $count = floor($diff/60);
            $int = "minutes";
            if($count==1){
                $int = substr($int, 0, -1);
            }
        break;
        
        case ($diff>=3600&&$diff<60*60*24):
            $count = floor($diff/3600);
            $int = "hours";
            if($count==1){
                $int = substr($int, 0, -1);
            }
        break;
        
        case ($diff>=60*60*24&&$diff<60*60*24*7):
            $count = floor($diff/(60*60*24));
            $int = "days";
            if($count==1){
                $int = substr($int, 0, -1);
            }
        break;
        
        case ($diff>=60*60*24*7&&$diff<60*60*24*30):
            $count = floor($diff/(60*60*24*7));
            $int = "weeks";
            if($count==1){
                $int = substr($int, 0, -1);
            }
        break;
        
        case ($diff>=60*60*24*30&&$diff<60*60*24*365):
            $count = floor($diff/(60*60*24*30));
            $int = "months";
            if($count==1){
                $int = substr($int, 0, -1);
            }
        break;
        
        case ($diff>=60*60*24*30*365&&$diff<60*60*24*365*100):
            $count = floor($diff/(60*60*24*7*30*365));
            $int = "years";
            if($count==1){
                $int = substr($int, 0, -1);
            }
        break;
    }
    
	$timetext = $count.' '.$int.' ago';
	
	return $timetext;

}
//NOTIFICATIONS
function notifcount($user_id,$acclvl)
{
	include("../this.php");
	$count = 0;
	$result=mysql_query("SELECT * FROM fox_messages WHERE type ='bully' AND status='unread'")or die (mysql_error());
	$count0=mysql_num_rows($result);
	$result1=mysql_query("SELECT * FROM fox_messages WHERE type ='dev' AND status='unread'")or die (mysql_error());
	$count1=mysql_num_rows($result1);
	$result2=mysql_query("SELECT * FROM fox_messages WHERE type ='prof' AND status='unread'")or die (mysql_error());
	$count2=mysql_num_rows($result2);
	$result3=mysql_query("SELECT * FROM fox_messages WHERE receiver ='".$user_id."' AND status='unread'")or die (mysql_error());
	$count3=mysql_num_rows($result3);
	$result4=mysql_query("SELECT * FROM fox_notifications WHERE receiver ='".$user_id."' AND status='unread'")or die (mysql_error());
	$count4=mysql_num_rows($result4);
	
	if(($acclvl == "2") || ($user_id == "1"))
	{
		$count = $count1 + $count0 + $count2 + $count3 + $count4;
	}
	else
	{
		$count = $count3 + $count4;
	}

	return "<span style='color:white; background-color:#B4070C; padding:2px 5px 2px 5px;'>" . $count . "</span>&nbsp";

}
function notifcations($type, $to, $from, $upid)
{
	include('../this.php');
	include('this.php');
	if ($to == $from)
	{
	}
	else
	{
	$t = time();
	if ($type == "comment")
	{
		$body = " commented on your post.";
	}
	elseif ($type == "like")
	{
		$body = " added an awesome point to your post.";
	}
	$strSQL = "INSERT INTO `fox_notifications`(`nID`, `type`, `sender`, `receiver`, `msg`, `status`, `time`, `upID`) VALUES (NULL,'".$type."','".$from."','".$to."','".$body."','unread','".$t."','".$upid."')"; 
	$objQuery = mysql_query($strSQL);
	}
}

function shownotifs($id){
	include("../account/conn2.php");
	include("account/conn2.php");
	$result1 = mysqli_query($con,"SELECT * FROM fox_notifications WHERE receiver = '".$id."' ORDER BY nID DESC");
  	while($row1 = mysqli_fetch_array($result1))
  	{
	echo '
	<li class=" notif '.$row1['status'].'">
          <a href="index.php?p=post&id='.$row1['upID'].'">
            <div class="imageblock">
              <img src="'.dpurl($row1['sender']).'" class="notifimage" onerror="this.src=\'images/user.png\';" />
            </div> 
            <div class="messageblock">
              <div class="message">
                <strong>'.fullname($row1['sender']).'</strong> '.$row1['msg'].'
              </div>
              <div class="messageinfo">
                <i class="icon-flag"></i>'.textime($row1['time']).'
              </div>
            </div>
          </a>
        </li>	
	';
	
	}
	
}

//NOGAME
function basicinfo($info)
{
	include("conn2.php");
	include("../no-game/conn2.php");
	$result3 = mysqli_query($con,"SELECT * FROM ng_account WHERE uID = '".$_SESSION['member_id']."'");
	while($rec = mysqli_fetch_array($result3))
	{
		$codename = $rec['codename'];
		$rkey = $rec['rkey'];
		$scode = $rec['secode'];
		$motto = $rec['motto'];
	}
	if($info == "codename")
	{
		return $codename;
	}
	elseif($info == "rkey")
	{
		return $rkey;
	}
	elseif($info == "scode")
	{
		return $scode;
	}
	elseif($info == "motto")
	{
		return $motto;
	}
}

?>