<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Developer Application</title>
<script src="../scripts/tiny_mce/tiny_mce.js" type="text/javascript"></script>
<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2204022" binding="#messagebody" />
</oa:widgets>
-->
</script>
</head>
<link type="text/css" href="../css/main-style.css" rel="stylesheet"/>
<body>
<div class="container-main">
<form action="send.php" name="frmAdd" method="post">
<table cellspacing="5px" cellpadding="3px">
  <tr>
    <td id="title" colspan="2">Be a developer now. Everyone is welcome!</td>
    </tr>
  <tr>
    <td colspan="2">Please indicate on the text area below why would you like to be developer, what are your interests and lastly, the things/knowledge you can contribute.</td>
    </tr>
  <tr>
    <td colspan="2"><!-- Textarea gets replaced with TinyMCE, remember HTML in a textarea should be encoded --> <script type="text/javascript">
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
      <textarea id="messagebody" name="messagebody" rows="16" style="width:100%"></textarea></td>
    </tr>
  <tr>
    <td colspan="2">Note: If you have your own web portfolio or any, you can link them also.</td>
    </tr>
  <tr>
    <td width="62%"><input name="txtuID" type="hidden" value="<?php session_start(); echo $_SESSION['member_id'];?>" />
      <input name="txtTid" type="hidden" id="txtTid" value="0" /></td>
    <td width="38%">&nbsp;</td>
  </tr>
  <tr>
    <td><input name="txtType" type="hidden" id="txtType" value="dev" />
      <input name="txtSub" type="hidden" id="txtSub" value="Developer Application" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <input name="txtConvo" type="hidden" id="txtConvo" value="0" /><td>
    <input name="txtDate" type="hidden" id="txtDate" value="<?php echo date("Y/m/d", time());?>" />
      <input name="txtTime" type="hidden" id="txtTime" value="<?php date_default_timezone_set("Asia/Singapore"); echo date("g:i A", time());?>" /></td>
    <td><input class="forms1" type="submit" name="send" id="send" value="Send" accesskey="s" /></td>
  </tr>
</table>
</form>
</div>
</body>
</html>