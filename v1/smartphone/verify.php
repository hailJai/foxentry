<?php
include('this.php');
session_start();
if (!isset($_SESSION['member_id'])){
header('location:login.php');
}
$member_id=$_SESSION['member_id'];

$result=mysql_query("select * from fox_users where uID='$member_id'")or die(mysql_error);
$row=mysql_fetch_array($result);

$FirstName=$row['fname'];
$LastName=$row['lname'];
$position=$row['position'];

?>