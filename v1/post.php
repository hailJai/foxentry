<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>updatepost</title>
<script src="scripts/tiny_mce/tiny_mce.js" type="text/javascript"></script>
<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2204022" binding="#postContent" />
</oa:widgets>
-->
</script>
</head>

<body>
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
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,link,unlink,anchor,image,media,",
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
<script type="text/javascript">
function hello(){
	alert("hello");
	}
</script>
<!-- Textarea gets replaced with TinyMCE, remember HTML in a textarea should be encoded -->
<textarea onclick="hello()" onfocus="hello()" id="postContent" name="postContent" rows="4" style="width:243px">This is some example text that you can edit inside the &lt;strong&gt;TinyMCE editor&lt;/strong&gt;.</textarea>
<input type="text" value="hello" onclick="hello()" />
</body>
</html>