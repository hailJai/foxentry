<?php
include("../predef/usable.php");
//include("../predef/filter.php");
if (isset($_POST['submit'])) {
$username=$_POST['username'];
$password=md5($_POST['password']);
$unhashedpass=$_POST['password'];
  if (login($username, $password) == 'false')
  {
	  login($username, $password);  
	  passmism($username, $unhashedpass);
  }
  else
  {
	  session_start();
	  $_SESSION['member_id'] = login($username, $password);

	  if($unhashedpass == $username){
	  		header('location:checkpoint.php');
	  }
	  else{
		  	login_succ($username,$_SESSION['member_id'],$ipaddress);
		  	ticker('0', 'login', '0');
		  	#COMPATIBILITY VARIABLES FOR RELEASE 1
			$_SESSION['username']=user_info("uname");
			$_SESSION['pass']=user_info("pword");
			$_SESSION['accesslvl']=user_info("user_level");
			$_SESSION['org']=user_info("organization");
			header('location:/foxentry');
	  }
	 
	  

  }
}
if (isset($_POST['update'])) {
	$newpassword = md5($_POST['rpassword']);
	$studentNumber=$_POST['studentNumber'];
	if (updatePass($studentNumber, $newpassword) == 'true'){
		header('location:/foxentry/v1/welcome');
	}
	else{
		header('location:/foxentry/login/check.php?n=Some Credentials did not pass validation. Try logging in again. Password not updated.');
	}
}
?>