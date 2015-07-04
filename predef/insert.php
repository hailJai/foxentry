<?php
include ("usable.php");
$action = $_GET["f"];
switch($action){
		
		case "comment";
		if(isset($_POST['comment'])){ 
		postComment($_POST['id'], $_POST['content']);}
		break;
		
		case "LOOP";
		$orgname = "League of Outstanding Programmers";
		break;
		
		case "CG";
		$orgname = "Code Geeks";
		break;
		
		default;
		$orgname = "No Registered Organization";

}
?>