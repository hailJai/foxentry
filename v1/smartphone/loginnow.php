<title>loginvalidation</title>
<?php
include('this.php');

if (isset($_POST['submit'])) {
$UserName=$_POST['UserName'];
$Password=$_POST['Password'];
$result=mysql_query("select * from fox_users where uname='$UserName' and pword='$Password'")or die (mysql_error()); 
		
$count=mysql_num_rows($result);
$row=mysql_fetch_array($result);
		
		if ($count > 0){
		session_start();
		$_SESSION['member_id']=$row['uID'];
		$_SESSION['username']=$row['uname'];
		header('location:index.php');
		}else{
		header('location:login.php?Notif=Invalid Login');
		}
}
?>

