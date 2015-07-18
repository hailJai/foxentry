<?php 
//environment used for manual refresh
#$ENV = 'csccicthau.com/foxentry';
$ENV = 'localhost/foxentry';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("usable.php");

if(isset($_POST['updateBtn'])){
	//echo "status posted";
	postUpdate($_POST['update']);
	echo '<meta http-equiv="refresh" content="0; url=http://'.$ENV.'/">';
}
if(isset($_POST['updateCover'])){
	//echo "cover updated";
	$userID = $_SESSION['member_id'];
	$url = $_POST['coverUrl'];
	insertData('fox_images','aid, type, url', "'$userID','cover','$url'");
	echo '<meta http-equiv="refresh" content="0; url=http://'.$ENV.'/">';
}

// if(isset($_POST['comment'])){
// 	echo "comment posted";
// 	postComment($_POST['content'], $_POST['updateID']);
// 	ticker(getWhoPosted($_POST['updateID']), 'comment', $_POST['updateID']);
// 	$postID = $_POST['updateID'];
// 	header('location:/foxentry?p=update&u='.$postID.'');
// }
// elseif(isset($_POST['awesome'])){
// 	echo "awesome added";
// 	$postID = $_POST['updateID'];
// 	if (plusAwesome($postID) == true){
// 		header('location:/foxentry?p=update&u='.$postID.'');
// 	}
// 	else{
// 		echo plusAwesome($postID);
// 	}
// }
if($_GET['f'] == "deletepost"){
	// echo "post deleted";
	$postID = $_GET['id'];
	if(getWhoPosted($postID) == $_SESSION['member_id']){
		deleteData('fox_updates', "upID LIKE $postID");
		deleteData('fox_comments', "upID LIKE $postID");
		deleteData('fox_awesome', "upID LIKE $postID");
		echo '<meta http-equiv="refresh" content="0; url=http://'.$ENV.'/">';
	}
}
if($_GET['f'] == "comment"){
	if(isset($_POST['awesome'])){
	//echo "awesome added";
	$postID = $_POST['updateID'];
		if (plusAwesome($postID) == true){
			echo '<meta http-equiv="refresh" content="0; url=http://'.$ENV.'/?p=update&u='.$postID.'">';
			//header('location:/foxentry?p=update&u='.$postID.'');
		}
		else{
			echo plusAwesome($postID);
		}
	}
	else{
		//echo "comment posted";
		postComment($_POST['content'], $_POST['updateID']);
		ticker(getWhoPosted($_POST['updateID']), 'comment', $_POST['updateID']);
		$postID = $_POST['updateID'];
		echo '<meta http-equiv="refresh" content="0; url=http://'.$ENV.'/?p=update&u='.$postID.'">';
		//header('location:/foxentry?p=update&u='.$postID.'');
	}
}



//INSERT ACTIONS
//SIGN UP
	if( (isset($_POST['signup'])) && ($_GET['action'] == "signup")){
	echo "hello";
	$firstName = make_safe($_POST['firstname']);
	$lastName = make_safe($_POST['lastname']);
	$userName = make_safe($_POST['username']);
	$password = md5(make_safe($_POST['password']));
	$studentNumber = make_safe($_POST['studentNumber']);
	$email = make_safe($_POST['email']);
	insertData(
		"
			fox_users
		",
		"	
			user_level,
			fname,
			lname,
			uname,
			pword,
			uname1,
			position,
			stdno,
			specialization,
			email,
			leader
		",
		'
			"32",
			"'.$firstName.'",
			"'.$lastName.'",
			"'.$userName.'",
			"'.$password.'",
			"'.$userName.'",
			"Citizen",
			"'.$studentNumber.'",
			"New",
			"'.$email.'",
			"Default"
		'
	);
	echo '<meta http-equiv="refresh" content="0; url=http://'.$ENV.'/login/check.php?n=Your request has been sent. Kindly wait for a confirmation email.">';
}
?>
<title>Foxentry | Updates</title>
</head>
<link rel="icon" href="../images/logo_fox.ico">
<style type="text/css">
html{
	color: white;
}
</style>
<body>
</body>
</html>