<?php
session_start();
$event = $_GET['id'];
$member_id=$_SESSION['member_id'];
include('../this.php');
$post = "DELETE FROM fox_events WHERE aID='".$event."'"; 
$result = mysql_query("SELECT * FROM fox_events where aID='$event'");
$row=mysql_fetch_array($result); 
if ($row['aID'] == $member_id) {
mysql_query($post);
header( "refresh:0;url=my_events.php" );
}
?>