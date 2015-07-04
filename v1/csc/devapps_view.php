<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Apply as Developer</title>
<script src="../scripts/tiny_mce/tiny_mce.js" type="text/javascript"></script>
<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2204022" binding="#postContent" />
</oa:widgets>
-->
</script>
<style type="text/css">
a:link {
	color: #FFF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFF;
}
a:hover {
	text-decoration: none;
	color: #CCC;
}
a:active {
	text-decoration: none;
	color: #FFF;
}
</style>
</head>
<link type="text/css" href="../css/main-style.css" rel="stylesheet"/>
<?php
error_reporting(E_ERROR);
	
include('../this.php');
include('../predef/verify.php');
include('../predef/usable.php');
include('../joking.php');
val($_SESSION['accesslvl'],1,$_SERVER['PHP_SELF']);	

$id = make_safe($_GET["id"]);



$strSQL = "UPDATE fox_messages SET ";  
$strSQL .="status = 'read' ";  
$strSQL .="WHERE mID = '".$id."' ";  
$objQuery = mysql_query($strSQL);  


		include('../account/conn2.php');
		$result3 = mysqli_query($con,"SELECT * FROM fox_messages WHERE type = 'dev' and mID = '".$id."'");
		while($row3 = mysqli_fetch_array($result3))
  		{
		$sender = $row3['sender'];
		$mId = $row3['mID'];

?>
<body>
<div class="container-main"  style="padding-right:15px">
<div class="title"><a href="developer_apps.php">Aspiring Developers</a></div>
<div class="from">


  <?php 
  
				echo "<div class='imgdp'>".dp($row3['sender'])."</div>";
  
  				$result1 = mysqli_query($con,"SELECT * FROM fox_users WHERE uID = '".$row3['sender']."' LIMIT 1");
				while($row1 = mysqli_fetch_array($result1))
  				{
					echo "<div class='nameplate'>&nbsp;&nbsp;".$row1['fname']." ".$row1['lname']."<br /><span>&nbsp;&nbsp;&nbsp;".$row3['date']." - ".$row3['time']."</span></div>";
				}
  
  
  ?>
</div>
<div class="messagebody"><?php echo $row3["body"]; ?></div>
<?php }?>

<!--- REPLY -->


<?php

include('../account/conn2.php');
$result0 = mysqli_query($con,"SELECT * FROM fox_messages WHERE type = 'reply' and convo = '".$mId."'");
while($row0 = mysqli_fetch_array($result0))
{

?>
<div style="border:1px solid #FAA32E; margin-top:5px; margin-bottom:5px;">
<div class="from">


<?php 
  				echo "<div class='imgdp'>".dp($row0['sender'])."</div>";
 
  				$result1 = mysqli_query($con,"SELECT * FROM fox_users WHERE uID = '".$row0['sender']."' LIMIT 1");
				while($row1 = mysqli_fetch_array($result1))
  				{
					echo "<div class='nameplate'>&nbsp;&nbsp;".$row1['fname']." ".$row1['lname']."<br /><span>&nbsp;&nbsp;&nbsp;".$row0['date']." - ".$row0['time']."</span></div>";
				}
  
  
  ?>
</div>
<div class="messagebody"><?php echo $row0["body"]; ?></div>
</div>
<?php }?>

<!--- REPLY -->

<form action="send.php" name="frmAdd" method="post" onSubmit='return validate();'>
<?php date_default_timezone_set("Asia/Singapore");  ?>
<!-- predef forms -->
<input name="txtType" type="hidden" id="txtType" value="reply" />
<input name="txtSub" type="hidden" id="txtSub" value="Developer" />
<input name="txtConvo" type="hidden" id="txtConvo" value="<?php echo $mId; ?>" />
<input name="txtuID" type="hidden" value="<?php session_start(); echo $_SESSION['member_id'];?>" />
<input name="txtTid" type="hidden" id="txtTid" value="<?php echo $sender; ?>" />
<input name="txtTime" type="hidden" id="txtTime" value="<?php echo date("g:i A", time());?>" />
<input name="txtDate" type="hidden" id="txtDate" value="<?php echo date("Y/m/d", time());?>" />

<textarea id="postContent" name="messagebody" rows="5" style="width:100%"></textarea>
<table width="100%" border="0">
  <tr>
    <td width="70%">&nbsp;</td>
    <td width="30%"><input type="button" value="Delete" name="delete" class="forms1" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="Reply" name="reply" class="forms1" /></td>
  </tr>
</table>
</form>


</div>
</body>
</html>
<script type="text/javascript">
// BeginOAWidget_Instance_2204022: #postContent

	tinyMCE.init({
		// General options
		mode : "exact",
		elements : "postContent",
		theme : "advanced",
		skin : "default",
		plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,justifyleft,justifycenter,justifyright,justifyfull,undo,redo,link,unlink,anchor,",
		theme_advanced_buttons2 : "",
		theme_advanced_buttons3 : "",
		theme_advanced_buttons4 : "",
		theme_advanced_toolbar_location : "bottom",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "none",
		theme_advanced_resizing : false,

		// Example content CSS (should be your site CSS)
		content_css : "/css/editor_styles.css",

		// Drop lists for link/image/media/template dialogs, You shouldn't need to touch this
		template_external_list_url : "/lists/template_list.js",
		external_link_list_url : "/lists/link_list.js",
		external_image_list_url : "/lists/image_list.js",
		media_external_list_url : "/lists/media_list.js",

		// Style formats: You must add here all the inline styles and css classes exposed to the end user in the styles menus
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		]
	});
		
// EndOAWidget_Instance_2204022
</script>