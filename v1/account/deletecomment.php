<?php

include('../joking.php');
include('../predef/verify.php');
include('../this.php');

$je = make_safe($_GET['id']); 		// this is used to simplify user id.
$member_id=$_SESSION['member_id'];

$post = "DELETE FROM fox_updates WHERE upID='".$je."'"; //this is the sql string

$result2 = mysql_query("SELECT * FROM fox_updates where upID='$je'"); 
$row2=mysql_fetch_array($result2);
if ($row2['aID'] == $member_id)
{
	mysql_query($post); // here is where you execute the sql string
	header( "refresh:0;url=dashboard.php" ); //echo $member_id.' Post '.$je.' is Deleted... <a href="dashboard.php">Go back....</a>';
}
?>