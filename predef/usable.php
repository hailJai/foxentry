<?php
error_reporting(E_ERROR);
session_start();

$_SESSION['env'] = "localhost/foxentry";

include("filter.php");
include("connection_mysql.php");
include("connection_mysqli.php");	

function initialSetup(){
	//GET connection_mysql if has data
	//else, redirect to install php
	//get Database credentials
	//import database
	//get Admin users
	//

}

//NEW FUNCTIONS
//LOGIN
$t = time();
include("connection_mysqli.php");
function login($username, $password)
{
	$username = make_safe($username);
	$password = make_safe($password);
	include("connection_mysqli.php");	
	$result = mysqli_query($con,"SELECT uname, pword, uID, leader, email FROM fox_users WHERE (uname='".$username."' OR email='".$username."' ) AND pword='".$password."' LIMIT 1");
  	$count=mysqli_num_rows($result);
	if ($count > 0)
	{
	while($row1 = mysqli_fetch_array($result))
  		{
			if($row1['leader'] != "Default"){
			return $row1['uID'];}
			else{return 'false';}
		}
	}
	else
	{
		return 'false';
	}
}
//UPDATE PASSWORD CHECKPOINT
function updatePass($studentNumber, $newPass){
	$studentNumber = make_safe($studentNumber);
	$newPass = make_safe($newPass);
	include("connection_mysqli.php");
	$result = mysqli_query($con,"SELECT * FROM fox_users WHERE stdno='".$studentNumber."' AND uID='".$_SESSION['member_id']."' LIMIT 1");
	$count=mysqli_num_rows($result);
	if ($count > 0){
		$result = mysqli_query($con,"UPDATE fox_users SET pword='".$newPass."' WHERE stdno='".$studentNumber."' AND uID='".$_SESSION['member_id']."'");
		return true;
	}
	else{
		return false;
	}

}
//MULTIFUNCTIONAL FUNCTIONS

//NEW SITE NAVIGATION
function includePage($url){
	switch ($url) {
		case 'admin':
			include("admin/admin.inc");
			break;
		
		case 'singup-requests':
			include("admin/approval.inc");
			break;

		default:
			include("dashboard/main.inc");
			break;
	}

}
//NOTIFICATION FUNCTIONS

//THIS FUNCTIONS HAS BEEN REPLACED
// function countMessage(){
// 	include("connection_mysqli.php");
// 	$result = mysqli_query($con,"SELECT * FROM fox_messages WHERE receiver ='".$_SESSION['member_id']."' AND status='unread'");
//   	$count=mysqli_num_rows($result);
//   	return $count;
// }
function getNotifications(){
	include("connection_mysqli.php");
	$result = mysqli_query($con,"SELECT * FROM fox_notifications WHERE (msg = 'awesome' OR msg = 'comment') AND status = 'unread' AND receiver = '".$_SESSION['member_id']."' ORDER BY nID DESC");
  	while($row = mysqli_fetch_array($result))
  	{
  		echo '

  						<li>
                            <a href="predef/update.php?action=activityfeed&u='.$row["upID"].'">
                              <div class="notifimage">
                              <img src="'.user_photo("dp", $row["sender"]).'" width="35px" height="35px" onerror="this.src=\'images/user.png\';">
                              </div>
                              <div class="notiftext">
                              
                              <b>'.user_info("fname",$row["sender"]) .' '. user_info("lname",$row["sender"]).'</b> '.notificationType($row["msg"], user_info("fname",$row["receiver"])).' <br>
                              <small>'.textime($row["time"]).'</small>
                              
                              </div> 
                            </a>
                        </li>
  		';
  	}
}
function notificationType($type, $name){
	if ($type == 'comment'){
		$text = "commented <br> on ".$name."'s post.";
	}
	elseif($type == 'awesome'){
		$text = "added an awesome <br> point on ".$name."'s post.";
	}
	return $text;
}
//UPDATES - NOTIFICATIONS - ERRORS
function ticker($receiver, $msg, $updateID){
	$updateID = make_safe($updateID);
	$t = time();
	include("connection_mysqli.php");
	if ($_SESSION['member_id'] != $receiver){
	$result = mysqli_query($con,"INSERT INTO fox_notifications (type, sender, receiver, msg, status, time, upID) VALUES ('ticker','".$_SESSION['member_id']."','".$receiver."','".$msg."','unread','".$t."','".$updateID."')");
	}
}

//COMPATIBILIY SITE NAVIGATION 
function showPage($url)
{
	$src = "";
	switch ($url){
		
		case "events";
			if ($_GET['id'] == 0){
				$src = "v1/events/events.php";
			}
			else{
				$src = "v1/events/details.php?id=".$_GET['id'];
			}
		break;

			
		case "dev";	
		$src = "v1/csc/developer_application.php";
		break;

		case "newevent";	
		$src = "v1/events/new_event.php";
		break;

		case "cdp";	
		$src = "v1/account/photolink.php";
		break;
		
		case "staff";	
		$src = "v1/csc/staff_application.php";
		break;
		
		case "bullying";	
		$src = "v1/csc/report_bullying.php";
		break;
		
		case "prof";	
		$src = "v1/csc/report_prof.php";
		break;

		case "myevents";	
		$src = "v1/events/my_events.php";
		break;
		
		case "accounts";	
		$src = "v1/account/accounts.php";
		break;

		case "new";	
		$src = "v1/csc/add_account.php";
		break;

		case "logs";	
		$src = "v1/csc/logs_error.php";
		break;

		case "ads";	
		$src = "v1/csc/advertupload.php";
		break;

		case "dashads";	
		$src = "v1/csc/login_adverts.php";
		break;

		case "attendance";	
		$src = "v1/csc/attendance.php";
		break;
		
		case "info";	
		$src = "v1/account/update_account.php";
		break;
		
		case "msg";	
		$src = "v1/account/messages.php";
		break;
		
		case "achat";	
		$src = "v1/chat/index.php";
		break;
		
		case "suggest";	
		$src = "v1/csc/send_suggestion.php";
		break;
		
		case "cde";	
		$src = "v1/events/events_cdays.php";
		break;
		
		case "joined";	
		$src = "v1/events/events_joined.php";
		break;
		
		case "nogame";	
		$src = "v1/no-game-interface/";
		break;
		
		case "post";
		$src = "v1/account/post.php?view=true&id=".$pid."";
		break;

		case "view";
		$src = "v1/account/post.php?id=".$pid."";
		break;

		//ADMIN NAVIGATIONS
		case "org_reports";
		$src = "reports/";
		break;


		//GAME NAVIGATIONS
		case "kukukube";
		$src = "http://106.186.25.143/kuku-kube/en-3/";
		break;

		case "galacticinbox";
		$src = "http://www.monocubed.com/doodles/processingjs/gmail/26/";
		break;

		case "hextris";
		$src = "http://hextris.github.io/hextris/";
		break;

		case "3dbricks";
		$src = "http://holoduke.nl/3dbricks/";
		break;

		case "io";
		$src = "https://developers.google.com/events/io/2012/input-output/";
		break;




		
						
		default:
		$src = "v1/err/404.php";
	}
	
	return $src;
}
//AUTHENTICATION VERIFICATIONS
function authenticate(){
	if(!isset($_SESSION['member_id']))
	{
		header('location:login/');
	}
}
function page_acl($acl,$page){
	$member_id = $_SESSION['member_id'];
	$acclvl = selectData("fox_users", "user_level", "WHERE uID = '".$member_id."' LIMIT 1");
	$ENV = 'localhost/foxentry';
	switch ($acl){
		
		case "5";
			if (($acclvl == "1") || ($acclvl == "2")){}
			else{header("location:http://".$ENV."/error/unauthorized.php?p=" . $page);}
		break;
	}
}
//SELECTING USER INFO
function user_info($data,$UID)
{
	include("connection_mysqli.php");
	if($UID == ""){
	$UID = $_SESSION['member_id'];}
	$result1 = mysqli_query($con,"SELECT * FROM fox_users WHERE uID='".$UID."'");
  	while($row1 = mysqli_fetch_array($result1))
  	{
		$data =  $row1[$data];
  	}
	return $data;
}
//GET USER PHOTO
function user_photo($type, $UID){
	include("connection_mysqli.php");
	if($UID == ""){
	$UID = $_SESSION['member_id'];}
	$result1 = mysqli_query($con,"SELECT url FROM fox_images WHERE type='".$type."' AND aID='".$UID."' ORDER BY imgID DESC LIMIT 1");
  	while($row1 = mysqli_fetch_array($result1))
  	{
		$data =  $row1['url'];
  	}
	return $data;	
}
//GET RANDOM AD OR LOGIN BACKGROUND
function randomize_image($type){
	include("connection_mysqli.php");
	$result3 = mysqli_query($con,"SELECT * FROM fox_images WHERE type='".$type."' ORDER BY RAND() LIMIT 0,1;");
	while($row3 = mysqli_fetch_array($result3))
  	{
 		$img = $row3['imgID'];
  	}
	return $img;
}
//GET IMAGE DATA FROM IMAGES DATABASE
function image_data($id,$data){
	include("connection_mysqli.php");
	$result1 = mysqli_query($con,"SELECT * FROM fox_images WHERE imgID='".$id."' LIMIT 1");
  	while($row1 = mysqli_fetch_array($result1))
  	{
		$data =  $row1[$data];
  	}
	return $data;	
}
//GET TICKER
function getTicker(){
	include("connection_mysqli.php");
	$result = mysqli_query($con,"SELECT * FROM `fox_notifications` WHERE type='ticker' ORDER BY nID DESC LIMIT 15");
	while($row = mysqli_fetch_array($result)){
		if($row["msg"] == "login"){
			echo '<li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> <small>('.textime($row["time"]).')</small> '.user_info("fname",$row["sender"]).' '.user_info("lname",$row["sender"]).' is now online...</a></li>';
		}
		elseif ($row["msg"] == "comment") {
			if ($row["receiver"] == $row["sender"]){
				echo '<li class="list-group-item"><a href="?p=update&u='.$row["upID"].'"><i class="glyphicon glyphicon-comment"></i> <small>('.textime($row["time"]).')</small> '.user_info("fname",$row["sender"]).' '.user_info("lname",$row["sender"]).' commented on a status.</a></li>';
			}
			else{
				echo '<li class="list-group-item"><a href="?p=update&u='.$row["upID"].'"><i class="glyphicon glyphicon-comment"></i> <small>('.textime($row["time"]).')</small> '.user_info("fname",$row["sender"]).' '.user_info("lname",$row["sender"]).' commented on '.user_info("fname",$row["receiver"]).' '.user_info("lname",$row["receiver"]).'\'s status.</a></li>';
			}
		}
		elseif ($row["msg"] == "awesome") {
			echo '<li class="list-group-item"><a href="?p=update&u='.$row["upID"].'"><i class="glyphicon glyphicon-heart"></i> <small>('.textime($row["time"]).')</small> '.user_info("fname",$row["sender"]).' '.user_info("lname",$row["sender"]).' added an awesome point on '.user_info("fname",$row["receiver"]).' '.user_info("lname",$row["receiver"]).'\'s status.</a></li>';
		}
	}
}
//GET WHO POSTED POST
function getWhoPosted($postID){
	include("connection_mysqli.php");
	$result1 = mysqli_query($con,"SELECT * FROM fox_updates WHERE upID='".$postID."' LIMIT 1");
  	while($row1 = mysqli_fetch_array($result1))
  	{
		$data =  $row1['aID'];
  	}
	return $data;	
}
//GET UPDATES AND COMMENTS
function getUpdates($id,$type){
	include("connection_mysqli.php");
	if($id == ""){
		$result1 = mysqli_query($con,"SELECT * FROM `fox_updates` ORDER BY upID DESC LIMIT 20");
	}
	else{
		if ($type == 'user') {
			$result1 = mysqli_query($con,"SELECT * FROM `fox_updates` WHERE aID = '".$id."' ORDER BY upID DESC LIMIT 20");
		}
		elseif($type == 'specific'){
			$result1 = mysqli_query($con,"SELECT * FROM `fox_updates` WHERE upID = '".$id."'");
		}
	}	
	while($row1 = mysqli_fetch_array($result1))
  	{
		echo '
		
								 <div class="panel panel-default">
                                 <div class="panel-heading">'.deletePost($row1["upID"]).'<a href="?profile='.$row1["aID"].'"><img  onerror="this.src=\'images/user.png\';" src="'.user_photo("dp", $row1["aID"]).'" class="img-circle pull-left" style="margin-top:-1px; margin-right:5px;"><h4 style="margin-top:18px; margin-left:18px;">&nbsp;'. user_info("fname", $row1["aID"])." ".  user_info("lname", $row1["aID"]) .'</a><span style="font-size:12px"> - '. user_info("position", $row1["aID"]).' ('. textime($row1["nTime"]) . ')</span></h4></div>
                                  <div class="panel-body compatibility">
                                                                      
                                    <p>'.$row1["status"].'</p>
                                    
                                   
                                    <hr>
                                    	
                                    	';
										
										$result2 = mysqli_query($con,"SELECT * FROM fox_comments WHERE upID = '".$row1["upID"]."'");
  										while($row2 = mysqli_fetch_array($result2))
  										{
										echo '
		
										<div class="panel-heading"><a href="?profile='.$row2["aID"].'"><img src="'.user_photo("dp", $row2["aID"]).'"  onerror="this.src=\'images/user.png\';" class="img-circle pull-left" style="margin-top:-1px; margin-right:5px;"><h4 style="margin-top:18px; margin-left:18px;">&nbsp;'. user_info("fname", $row2["aID"])." ".  user_info("lname", $row2["aID"]) .'<span style="font-size:12px"> - '. user_info("position", $row2["aID"]).' ('.textime($row2["nTime"]).')</span></h4></a></div>
                                        <div class="panel-body">
                                        '.$row2["comment"].'
										</div>
		
		
		

										';
  										}	
										
										
							echo	'
                               
                                    <form action="predef/update.php?f=comment" method="post">
                                    <div class="input-group">
                                      <div class="input-group-btn">
                                      <button class="btn btn-default" name="comment" id="comment" type="submit"><i class="glyphicon glyphicon-send"></i></button>
                                      <button class="btn btn-default" name="awesome" id="awesome" data-toggle="tooltip" title="Who Added." data-original-title="3 New Messages" type="submit">+'. awesomeCount($row1["upID"]) .'</button>
                                      </div>
                                      <input type="hidden" name="updateID" id="updateID" value="'.$row1["upID"].'"?>
                                      <input type="text" class="form-control" placeholder="Add a comment.." id="content" name="content">
                                    </div>
                                    </form>     
                                    	
                                       
                                  </div>
                                 
                               </div>
		
												
		
		';
  	}	
}	
//GET PENDING SIGN UPS
function getPendingAccounts(){
	include("connection_mysqli.php");
	$result1 = mysqli_query($con,"SELECT * FROM `fox_users` WHERE leader = 'Default'");
	while($row1 = mysqli_fetch_array($result1))
  	{
  		echo '
					<tr>
                        <td>'.$row1["fname"].' '.$row1["lname"].'</td>
                        <td>'.$row1["stdno"].'</td>
                        <td>'.$row1["email"].'</td>
                        <td>'.$row1["datentime"].'</td>
                        <td>Approve | Decline</td>
                    </tr>


  		';
  	}

}
//POSTING
function postUpdate($text){
	$text = make_safe($text);
	$t = time();
	if($text <> ""){
	include("connection_mysqli.php");	
	$result = mysqli_query($con,"INSERT INTO fox_updates (status, aID, nTime) VALUES ('".$text."','".$_SESSION['member_id']."','".$t."') ");
	}
}
function postComment($text, $updateID){
	$text = make_safe($text);
	$updateID = make_safe($updateID);
	$t = time();
	if($text !== ""){
	include("connection_mysqli.php");	
	$result = mysqli_query($con,"INSERT INTO fox_comments (comment, aID, upID, nTime) VALUES ('".$text."','".$_SESSION['member_id']."','".$updateID."','".$t."') ");
	}
}
function plusAwesome($updateID){
	$updateID = make_safe($updateID);
	include("connection_mysqli.php");
	$result = mysqli_query($con,"SELECT * FROM fox_awesome WHERE uID ='".$_SESSION['member_id']."' AND upID='".$updateID."'");
  	$count=mysqli_num_rows($result);
  	$userID = $_SESSION['member_id'];
  	if($count > 0){
  		$response = deleteData('fox_awesome', "upID = $updateID AND uID = $userID");
  	}
  	else{
  		ticker(getWhoPosted($updateID), 'awesome', $updateID);
  		$response = insertData('fox_awesome', 'upID, uID', "'$updateID','$userID'");
  	}
  	return $response;
}

//TEMPORARY

function total_post_count($id){
	if ($id == "")
	{
		$id =  $_SESSION['member_id'];
	}
	include("connection_mysqli.php");	
	$result = mysqli_query($con,"SELECT * FROM fox_updates WHERE aID='".$id."'");
  	$count=mysqli_num_rows($result);
	return $count;
}
function follower_count($id){
	if ($id == "")
	{
		$id =  $_SESSION['member_id'];
	}
	include("connection_mysqli.php");	
	$result = mysqli_query($con,"SELECT * FROM fox_followers WHERE account_id='".$id."'");
  	$count=mysqli_num_rows($result);
	return $count;
}
function awesomeCount($id){
	include("connection_mysqli.php");	
	$result = mysqli_query($con,"SELECT * FROM fox_awesome WHERE upID='".$id."'");
  	$count=mysqli_num_rows($result);
	return $count;
}
function follower_preview($id){
	if ($id == "")
	{
		$id =  $_SESSION['member_id'];
	}
	include("connection_mysqli.php");	
	$result1 = mysqli_query($con,"SELECT follower_id FROM fox_followers WHERE account_id='".$id."' ORDER BY timestamp DESC LIMIT 10");
  	while($row1 = mysqli_fetch_array($result1))
  	{
		echo '<a href="?profile='.$row1['follower_id'].'"><img src="'.user_photo("dp", $row1['follower_id']).'" width="28px" height="28px" onerror="this.src=\'images/user.png\';"></a>&nbsp';
  	}
}
//REDIRECT FUNCTIONS
function redirectUrl($url, $permanent = false)
{
    if (headers_sent() === false)
    {
    	header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}
//DELETE FUNCTIONS
function deleteData($table, $where){
	//echo "DELETE FROM ".$table." WHERE ".$where."";
	include("connection_mysqli.php");
	$result = mysqli_query($con,"DELETE FROM ".$table." WHERE ".$where."");
	if($result){
		return true;
	}
	else{
		return mysqli_error($con);
	}
}
function deletePost($postID){
	if (getWhoPosted($postID) == $_SESSION['member_id']){
		echo '<a href="predef/update.php?f=deletepost&id='.$postID.'" class="pull-right" style="margin-right: 10px;">x</a>';
	}
}
//INSERT FUNCTIONS
function insertData($table, $columns, $values){
	include("connection_mysqli.php");
	$result = mysqli_query($con,"INSERT INTO ".$table." (".$columns.") VALUES (".$values.")");
	if($result){
		return true;
	}
	else{
		return mysqli_error($con);
	}
}
//SELECT FUNCTIONS
//SINGLE SELECTION
function selectData($table, $data, $condition)
{
	include("connection_mysqli.php");
	$result1 = mysqli_query($con,"SELECT ".$data." FROM ".$table." ".$condition."");
  	while($row1 = mysqli_fetch_array($result1))
  	{
		$data =  $row1[$data];
  	}
	return $data;
}
//COUNT SELECT
function selectCount($table, $data, $condition)
{
	include("connection_mysqli.php");
	$result = mysqli_query($con,"SELECT ".$data." FROM ".$table." ".$condition."");
  	$count=mysqli_num_rows($result);
	return $count;
}
// function selectCount($data,$table,$where,$limit){
// 	include("connection_mysqli.php");
// 	$result = mysqli_query($con,"SELECT ".$data." FROM ".$table." WHERE ".$where." ".$limit."");
//   	$count=mysqli_num_rows($result);
//   	return $count;
// }


//UPDATE FUNCTIONS
function updateData($table,$data,$condition){
	include("connection_mysqli.php");
	$result = mysqli_query($con,"UPDATE ".$table." SET ".$data." ".$condition."");
	if($result){
		return true;
	}
	else{
		return mysqli_error($con);
	}
}




function validate_cert($event_id)
{
	include("connection_mysqli.php");
	
	$UID = $_SESSION['member_id'];
	$result = mysqli_query($con,"SELECT * FROM fox_registrants WHERE aID='".$UID."' AND eID='".$event_id."'");
  	$count=mysqli_num_rows($result);
	if ($count > 0)
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
function caption($url)
{
	include("connection_mysqli.php");
	$result3 = mysqli_query($con,"SELECT * FROM fox_images WHERE url='".$url."'");
	while($row3 = mysqli_fetch_array($result3))
  	{
 		$caption = '"'. $row3["caption"] . '" by ' .$row3["photog"];
  	}
	return $caption;
}
function client_ip()
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
		
	return $ipaddress;
}



























//OLD FUNCTIONS
function dp($user_id)
{
	
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
	include("connection_mysqli.php");
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
		include("connection_mysqli.php");
	}
	elseif($type == "dashad")
	{
		
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


function linkad($url)
{
	
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
	include("connection_mysqli.php");
	
	$result1 = mysqli_query($con,"SELECT * FROM fox_users WHERE uID='".$user_id."'");
  	while($row1 = mysqli_fetch_array($result1))
  	{
		$name =  $row1['fname']. " ". $row1['lname'];
  	}
	return $name;
}
function userdata($field, $id)
{
	include("connection_mysqli.php");
	
	$result1 = mysqli_query($con,"SELECT * FROM fox_users WHERE uID='".$id."'");
  	while($row1 = mysqli_fetch_array($result1))
  	{
		$value =  $row1[$field];
  	}
	return $value;
}
function certtext($eid)
{
	
	$result1 = mysqli_query($con,"SELECT * FROM fox_events WHERE id='".$eid."'");
  	while($row1 = mysqli_fetch_array($result1))
  	{
		$text =  $row1['certparttext'];
  	}
	return $text;
}
function certtitle($eid)
{
	
	$result1 = mysqli_query($con,"SELECT * FROM fox_events WHERE id='".$eid."'");
  	while($row1 = mysqli_fetch_array($result1))
  	{
		$text =  $row1['name'];
  	}
	return $text;
}
function certbg($eid)
{
	
	$result1 = mysqli_query($con,"SELECT * FROM fox_events WHERE id='".$eid."'");
  	while($row1 = mysqli_fetch_array($result1))
  	{
		$text =  $row1['certofpart'];
  	}
	return $text;
}
function contact($user_id)
{
	
	$result1 = mysqli_query($con,"SELECT * FROM fox_users WHERE uID='".$user_id."'");
  	while($row1 = mysqli_fetch_array($result1))
  	{
		$contact =  $row1['contact']. " - ". $row1['email'];
  	}
	return $contact;
}
function position($user_id)
{
	
	$result1 = mysqli_query($con,"SELECT * FROM fox_users WHERE uID='".$user_id."'");
  	while($row1 = mysqli_fetch_array($result1))
  	{
		$post =  $row1['position'];
  	}
	return $post;
}
function pmcount()
{
	include("connection_mysql.php");
	$result=mysql_query("SELECT * FROM fox_messages WHERE receiver ='".$_SESSION['member_id']."' AND status='unread'")or die (mysql_error());
	$count=mysql_num_rows($result);
	if ($count <> 0)
	{
		return "&nbsp<span style='color:white; background-color:#B4070C; padding:2px 5px 2px 5px;'>" . $count . "</span>";
	}
}
function cdaysecount()
{
	include("connection_mysql.php");
	$result=mysql_query("SELECT * FROM fox_events WHERE type ='College Days' AND status like 'active'")or die (mysql_error());
	$count=mysql_num_rows($result);
	if ($count <> 0)
	{
		return "&nbsp<span style='color:white; background-color:#B4070C; padding:2px 5px 2px 5px;'>" . $count . "</span>";
	}
}
function joinedecount()
{
	include("connection_mysql.php");
	$result=mysql_query("SELECT fox_events.id, fox_events.name, fox_events.shortdescription FROM fox_events INNER JOIN fox_registrants ON fox_events.id = fox_registrants.eID WHERE fox_registrants.aID = '".$_SESSION['member_id']."'")or die (mysql_error());
	$count=mysql_num_rows($result);
	if ($count <> 0)
	{
		return "&nbsp<span style='color:white; background-color:#B4070C; padding:2px 5px 2px 5px;'>" . $count . "</span>";
	}
}
function regevecount()
{
	include("connection_mysql.php");
	$result=mysql_query("SELECT * FROM fox_events WHERE type !='College Days' AND status like 'active' ")or die (mysql_error());
	$count=mysql_num_rows($result);
	if ($count <> 0)
	{
		return "&nbsp<span style='color:white; background-color:#B4070C; padding:2px 5px 2px 5px;'>" . $count . "</span>";
	}
}
function unreadbully()
{
	include("connection_mysql.php");
	$result=mysql_query("SELECT * FROM fox_messages WHERE type ='bully' AND status='unread'")or die (mysql_error());
	$count=mysql_num_rows($result);
	if ($count <> 0)
	{
		return "&nbsp<span style='color:white; background-color:#B4070C; padding:2px 5px 2px 5px;'>" . $count . "</span>";
	}
}
function unreadprof()
{
	include("connection_mysql.php");
	$result=mysql_query("SELECT * FROM fox_messages WHERE type ='prof' AND status='unread'")or die (mysql_error());
	$count=mysql_num_rows($result);
	if ($count <> 0)
	{
		return "&nbsp<span style='color:white; background-color:#B4070C; padding:2px 5px 2px 5px;'>" . $count . "</span>";
	}
}
function unreaddev()
{
	include("connection_mysql.php");
	$result=mysql_query("SELECT * FROM fox_messages WHERE type ='dev' AND status='unread'")or die (mysql_error());
	$count=mysql_num_rows($result);
	if ($count <> 0)
	{
		return "&nbsp<span style='color:white; background-color:#B4070C; padding:2px 5px 2px 5px;'>" . $count . "</span>";
	}
}



function notifcount2($user_id,$acclvl)
{
	include("connection_mysql.php");
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
function checked($eid, $aid, $rate)
{
	
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
	$strSQL = 'INSERT INTO fox_auditing (report, aID, log_type) VALUES ("'.$report.'","0","Password Mismatch Login")'; 
	$objQuery = mysql_query($strSQL);
	if($objQuery)  
	{ 
		header('location:check.php?n=Invalid Login. Either your username or password is incorrect.');
	}
	else
	{
		header('location:check.php?n=Something Went Wrong. Try logging in again. ');;
	}
}
function login_succ($uname, $id, $ipaddress)
{	
	$report = "Successful Login of ".$uname." (". $ipaddress .") with user id " . $id;
	$strSQL = "INSERT INTO fox_auditing (report, aID, log_type) VALUES ('".$report."','".$id."','Login Success')"; 
	$objQuery = mysql_query($strSQL);
}
function usermod($uname, $event , $id, $user)
{
	include('connection_mysql.php');
	$report =  $user ." successfully " .$event. " of " . $uname;
	$strSQL = "INSERT INTO fox_auditing (report, aID, log_type) VALUES ('".$report."','".$id."','User Modification')"; 
	$objQuery = mysql_query($strSQL);
}
function seen($id, $user, $page, $uname)
{
	include('connection_mysql.php');
	$report =  $user ." checked the info of " .$uname. " in " . $page;
	$strSQL = "INSERT INTO fox_auditing (report, aID, log_type) VALUES ('".$report."','".$id."','View Info')"; 
	$objQuery = mysql_query($strSQL);
}
function seenp($id, $user, $page)
{
	include('connection_mysql.php');
	$report =  $user ." opened the page " . $page;
	$strSQL = "INSERT INTO fox_auditing (report, aID, log_type) VALUES ('".$report."','".$id."','View Info')"; 
	$objQuery = mysql_query($strSQL);
}
function unauth($id, $user, $page)
{
	include('connection_mysql.php');
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
	
	include('connection_mysql.php');
	$report = $who ." successfully created an account of " . $whom ;
	$strSQL = "INSERT INTO fox_auditing (report, aID, log_type) VALUES ('".$report."','".$id."','Account Created')"; 
	$objQuery = mysql_query($strSQL);
}
function sqlerror($page, $error, $id, $sqlf)
{
	include('connection_mysql.php');
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
	include("connection_mysql.php");
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
function notifcount_temp($user_id,$acclvl)
{
	include("connection_mysql.php");
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

	return $count;

}
function notifcations($type, $to, $from, $upid)
{
	include('connection_mysql.php');
	include('connection_mysql.php');
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
	
	include("connection_mysqli.php");
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


//RANDOM CODE GENERATOR

function generate_key($type, $stdno, $account)
{
	$length = 1;
	$user = "JAIRENZ";
	$account = str_replace(" ", "", $account);	
	
	$b = substr(str_shuffle($stdno), 0, $length);	
	$c = substr(str_shuffle($account), 0, $length);
	$d = substr(str_shuffle("ABCDEFGHIJKLNMOPQRSTUVWXYZ"), 0, $length);
	$e = substr(str_shuffle($user), 0, $length);
	
	
	switch ($b){
		case "0":
		$numray = 0123456789;
		break;
		
		case "1":
		$numray = 8;
		break;	
		
		case "2":
		$numray = 012345679;
		break;		
		
		case "3":
		$numray = 0;
		break;
		
		case "4":
		$numray = 012345978;
		break;
		
		case "5":
		$numray = 012349678;
		break;
		
		case "6":
		$numray = 012395678;
		break;
		
		case "7":
		$numray = 012945678;
		break;
		
		case "8":
		$numray = 019345678;
		break;
		
		case "9":
		$numray = 092345678;
		break;	
	}

	$a = substr(str_shuffle($numray), 0, $length);;
	
	if($type == "default"){
		$f = 1;
	}
	elseif($type == "transferred"){
		$f = 2;
	}
	elseif($type == "council"){
		$f = 3;
	}
	elseif($type == "prof"){
		$f = 4;
	}
	elseif($type == "send"){
		$f = 5;
	}
	elseif($type == "recv"){
		$f = 6;
	}
	else{
		$f = 0;
	}

	$g = 10 - (($a + $b)%10);
	
	$key = $a . $b . $c . $d . $e . $f . $g ;
	$key = strtoupper($key);
	//if(strlen($key) == 7){
		return  $key;
	//}
}
?>