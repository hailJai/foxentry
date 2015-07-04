<?php  
error_reporting(E_ERROR);
include('../this.php');
include('../joking.php');
session_start();
$answer = make_safe($_POST["answer"]);
$strSQL = "UPDATE qz_account ";  
$strSQL .="SET answer = '".$answer."' WHERE username = '".$_SESSION['username']."'";   
$objQuery = mysql_query($strSQL);  

if($objQuery)  
{
	header( "refresh:0;url=home.php?n=true" );
}  
else  
{  
	header( "refresh:0;url=home.php?e=Error Save!" );  
} 
?> 