<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Staff Application Form</title>
<script src="../scripts/tiny_mce/tiny_mce.js" type="text/javascript"></script>
<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2204022" binding="#messagebody" />
</oa:widgets>
-->
</script>
<?php
session_start();
include('../account/conn2.php');
include('reg_val.php');
$result3 = mysqli_query($con,"SELECT * FROM fox_users WHERE uID = '".$_SESSION['member_id']."' limit 1");
while($row3 = mysqli_fetch_array($result3))
  		{
		$name = $row3['fname']." ".$row3['lname'];
		$yearlevel = $row3['yearlevel'];
		$contact = $row3['contact'];
		$section = $row3['section'];
		}
?>
<style type="text/css">
.forms {	float: left;
	height: 30px;
	width: 300px;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 14px;
}
</style>
</head>
<link type="text/css" href="../css/main-style.css" rel="stylesheet"/>
<body>
<div class="container-main">
<form>
<table cellspacing="5px" cellpadding="3px">
  <tr>
    <td id="title" colspan="4">Help our College, Help the CSC!</td>
    </tr>
  <tr>
    <td colspan="4"><div align="center" style="background-color:#C9C9C9; padding-top:3px; padding-bottom:3px">Personal Information</div></td>
    </tr>
  <tr>
    <td>Name</td>
    <td><input name="txtAge10" type="text" class="forms1" value="<?php echo $name; ?>" readonly="readonly" /></td>
    <td>Year Level</td>
    <td><input name="txtAge11" type="text" class="forms1" value="<?php echo $yearlevel; ?>" readonly="readonly" /></td>
  </tr>
  <tr>
    <td>Age</td>
    <td><input type="text" name="txtAge" class="forms1" /></td>
    <td>Birthday</td>
    <td><input type="text" name="txtBday" class="forms1" id="txtBday" /></td>
  </tr>
  <tr>
    <td>Civil Status</td>
    <td><input type="text" name="txtAge2" class="forms1" /></td>
    <td>Contact Number</td>
    <td><input name="txtAge3" type="text" class="forms1" value="<?php echo $contact; ?>" readonly="readonly" /></td>
  </tr>
  <tr>
    <td>Parent/ Guardian</td>
    <td><input type="text" name="txtAge4" class="forms1" /></td>
    <td>Parent/ Guardian's #</td>
    <td><input type="text" name="txtAge5" class="forms1" /></td>
  </tr>
  <tr>
    <td>Home Address</td>
    <td colspan="3"><input type="text" name="txtAge6" class="forms1" style="width:100%" /></td>
    </tr>
  <tr>
    <td colspan="4"><div align="center" style="background-color:#C9C9C9; padding-top:3px; padding-bottom:3px">Academic Information</div></td>
    </tr>
  <tr>
    <td>Class Officer?</td>
    <td><select name="txtPayment" class="forms" id="txtPayment" style="20" onchange="calcup()">
      <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select></td>
    <td>Honor Student?</td>
    <td><select name="txtPayment2" class="forms" id="txtPayment2" style="20" onchange="calcup()">
      <option value="Yes">Yes</option>
      <option value="No">No</option>
      <option value="Unpaid">Unpaid</option>
    </select></td>
  </tr>
  <tr>
    <td>Section</td>
    <td><input name="txtAge7" type="text" class="forms1" value="<?php echo $section;?>" readonly="readonly" /></td>
    <td>Enrollment Status</td>
    <td><select name="txtPayment3" class="forms" id="txtPayment3" style="20" onchange="calcup()">
      <option value="Regular">Regular</option>
      <option value="Irregular">Irregular</option>
    </select></td>
  </tr>
  <tr>
    <td colspan="4"><!-- Textarea gets replaced with TinyMCE, remember HTML in a textarea should be encoded --> <!-- Textarea gets replaced with TinyMCE, remember HTML in a textarea should be encoded -->      </td>
    </tr>
  <tr>
    <td colspan="4"><div align="center" style="background-color:#C9C9C9; padding-top:3px; padding-bottom:3px">Other Information | Personal Essay</div></td>
    </tr>
  <tr>
    <td>Talents</td>
    <td colspan="3"><input name="txtAge9" type="text" class="forms1" style="width:100%" value="Please List all your Talents" /></td>
    </tr>
  <tr>
    <td>Essay</td>
    <td>Minimum of 150 words</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4"><script type="text/javascript">
// BeginOAWidget_Instance_2204022: #messagebody

	tinyMCE.init({
		// General options
		mode : "exact",
		elements : "messagebody",
		theme : "advanced",
		skin : "default",
		plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,print,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,bullist,numlist,link,unlink,anchor,|,image,media,",
		theme_advanced_buttons2 : "search,replace,|,undo,redo,|,visualchars,nonbreaking,charmap,emotions,|,code,preview,fullscreen,help,|,cleanup,removeformat,",
		theme_advanced_buttons3 : "",
		theme_advanced_buttons4 : "",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
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
      <!-- Textarea gets replaced with TinyMCE, remember HTML in a textarea should be encoded -->
      <textarea id="messagebody" name="messagebody" rows="16" style="width:100%">This is some example text that you can edit inside the &lt;strong&gt;TinyMCE editor&lt;/strong&gt;.</textarea></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="12%">&nbsp;</td> 
    <td width="37%"><input name="txtuID" type="hidden" value="<?php session_start(); echo $_SESSION['member_id'];?>" />
      <input name="txtTid" type="hidden" id="txtTid" value="0" /></td>
    <td width="14%">&nbsp;</td>
    <td width="37%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="txtType" type="hidden" id="txtType" value="staff" />
      <input name="txtSub" type="hidden" id="txtSub" value="Staff Application" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input class="forms1" type="submit" name="send" id="send" value="Send" accesskey="s" align="right"/></td>
  </tr>
</table>
</form>
</div>
</body>
</html>