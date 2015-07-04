<?php
session_start();
include('this.php');
if (!isset($_SESSION['member_id']))
{
	header('location:../login.php');
}
$member_id=$_SESSION['member_id'];
$result=mysql_query("select * from fox_users where uID='$member_id'")or die(mysql_error);
$row=mysql_fetch_array($result);
$FirstName=$row['fname'];
$LastName=$row['lname'];
$position=$row['position'];
$acl=$row['user_level'];


function val($x, $y, $page)
{
	switch ($y){
		
		case "100":
		if ($x != $_SESSION['member_id'])
		{
			header("location:../err/unauthorized.php?p=" . $page);
		}
		
		case "001":
		if ($acl != '1')
		{
			header("location:../err/unauthorized.php?p=" . $page);
		}
		break;
		
		
		case "1":
		if ($x != 1)
		{
			header("location:../err/unauthorized.php?p=" . $page);
		}
		break;
		
		case "3":
		if (($x != 1) && ($x != 2))
		{
			header("location:../err/unauthorized.php?p=" . $page);
		}
		break;
		
		case "7":
		if (($x != 1) && ($x != 2) && ($x != 4))
		{
			header("location:../err/unauthorized.php?p=" . $page);
		}
		break;
		
		case "15":
		if (($x != 1) && ($x != 2) && ($x != 8))
		{
			header("location:../err/unauthorized.php?p=" . $page);
		}
		break;
		
		case "19":
		if (($x != 1) && ($x != 2) && ($x != 16))
		{
			header("location:../err/unauthorized.php?p=" . $page);
		}
		break;
		
		case "23":
		if (($x != 1) && ($x != 2) && ($x != 4) && ($x != 16))
		{
			header("location:../err/unauthorized.php?p=" . $page);
		}
		break;
		
		case "31":
		if (($x != 1) && ($x != 2) && ($x != 4) && ($x != 8) && ($x != 16))
		{
			header("location:../err/unauthorized.php?p=" . $page);
		}
		break;
		
		case "95":
		if (($x != 1) || ($x != 2) || ($x != 4) || ($x != 8) || ($x != 16) || ($x != 64))
		{
			header("location:../err/unauthorized.php?p=" . $page);
		}
		break;
		
		case "11":
		if (($x != 1) && ($x != 2) && ($x != 8))
		{
			header("location:../err/unauthorized.php?p=" . $page);
		}
		break;
		
		case "4":
		if ($x <> $y)
		{
			header("location:../err/unauthorized.php?p=" . $page);
		}
		break;
		
		case "0":
		if (($x != 1) && ($x != 922) && ($x != 2))
		{
			header("location:../err/unauthorized.php?p=" . $page);
		}
		break;
		
		case "101":
		if (($x != 1) && ($x != 922) && ($x != 2))
		{
			header("location:../err/unauthorized.php?p=" . $page);
		}
		break;

	}
}
function perval($x){
	if ($x <> $_SESSION['member_id']){
		header("location:../err/unauthorized.php?p=" . $page);
	}
}
?>