<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<?php

include("usable.php");
//INSERT ACTIONS
//SIGN UP
echo $_POST['firstname'];

if(isset($_POST['signup'])){
	echo $_POST['firstname'];
}

// if($_GET['f'] == "signup"){
// 	echo "hello";
// 	$firstName = make_safe($_POST['firstname']);
// 	$lastName = make_safe($_POST['lastname']);
// 	$userName = make_safe($_POST['username']);
// 	$password = md5(make_safe($_POST['password']));
// 	$studentNumber = make_safe($_POST['studentNumber']);
// 	$email = make_safe($_POST['email']);
// 	insertData(
// 		"
// 			fox_users
// 		",
// 		"	
// 			user_level,
// 			fname,
// 			lname,
// 			uname,
// 			pword,
// 			uname1,
// 			position,
// 			stdno,
// 			specialization,
// 			email,
// 			leader
// 		",
// 		'
// 			"32",
// 			"$firstname",
// 			"$lastname",
// 			"$userName",
// 			"$password",
// 			"$userName",
// 			"Citizen",
// 			"$studentNumber",
// 			"New",
// 			"$email",
// 			"Default"
// 		'
// 	);
// 	echo '<meta http-equiv="refresh" content="0; url=http://'.$ENV.'/login/check.php?n=Your request has been sent. Kindly wait for a confirmation email.">';
// }
?>
<title>Foxentry | Actions</title>
</head>
<link rel="icon" href="../images/logo_fox.ico">
<style type="text/css">
</style>
<body>
	hello
	<?php echo "hello"?>
</body>
</html>