<?php
include('this.php');
include('joking.php');
include('predef/usable.php');
if (isset($_POST['submit'])) {
$UserName=make_safe($_POST['UserName']);
$Password=make_safe($_POST['Password']);
$Password = md5($Password);
$result=mysql_query("select * from fox_users where uname='$UserName' and pword='$Password'")or die (mysql_error()); 
		
$count=mysql_num_rows($result);
$row=mysql_fetch_array($result);
		
		if ($count > 0){
		session_start();
		$_SESSION['member_id']=$row['uID'];
		$_SESSION['username']=$row['uname'];
		$_SESSION['pass']=$row['pword'];
		$_SESSION['accesslvl']=$row['user_level'];
		$_SESSION['org']=$row['organization'];
		login_succ($row['uname'],$row['uID']);
		
		if (isset($_SESSION['member_id'])) {
    		error_reporting(E_ALL | E_WARNING | E_NOTICE);
			ini_set('display_errors', TRUE);

			flush();
			header("Location: /welcome/index.php");
			die('redirecting in a few');
		}
			
			
		}
		else
		{
			
			$Passwordu=make_safe($_POST['Password']);
			passmism($UserName, $Passwordu);

		}
}
?>