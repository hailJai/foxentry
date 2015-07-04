<title>loginvalidation</title>
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
		
		if ($count > 0){
		session_start();
		$_SESSION['member_id']=$row['uID'];
		$_SESSION['username']=$row['uname'];
		$_SESSION['pass']=$row['pword'];
		$_SESSION['accesslvl']=$row['user_level'];
		$_SESSION['org']=$row['organization'];
		login_succ($row['uname'],$row['uID'],$ipaddress);
		header('location:index.php');
		}else
		{
			
			$Passwordu=make_safe($_POST['Password']);
			passmism($UserName, $Passwordu);
			
			
		}
}
?>

