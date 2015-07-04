<?php
include("../predef/usable.php");
include("../predef/filter.php");
if (isset($_POST['submit'])) {
$username=make_safe($_POST['username']);
$password=md5(make_safe($_POST['password']));
  if (login($username, $password) == 'false')
  {
	  $unhashedpass=make_safe($_POST['password']);
	  passmism($username, $unhashedpass);
  }
  else
  {
	  session_start();
	  $_SESSION['member_id'] = login($username, $password);
	  login_succ($username,$_SESSION['member_id'],$ipaddress);
	  header('location:../foxentry');
  }
}
?>