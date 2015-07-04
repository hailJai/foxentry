<?php
session_start();
include('../this.php');
include('../joking.php');
$event = make_safe($_GET['id']);
$member_id=$_SESSION['member_id'];
$post = "DELETE FROM fox_events WHERE id='".$event."'"; 
$result = mysql_query("SELECT * FROM fox_events where id='$event'");
$row=mysql_fetch_array($result); 
if ($row['aID'] == $member_id) {
mysql_query($post);
header( "refresh:0;url=my_events.php" );
}
?>