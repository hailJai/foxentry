<?php
include('../predef/verify.php');
val($_SESSION['accesslvl'],7,$_SERVER['PHP_SELF']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Event</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<script src="../scripts/tiny_mce/tiny_mce.js" type="text/javascript"></script>
<script type="text/javascript" src="new_event.js"></script>
<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2204022" binding="#txtLongdes" />
  <oa:widget wid="2204022" binding="#postContent" />
</oa:widgets>
-->
</script>
<style type="text/css">
body {
  background-color: #F0F0F0;
}
.forms1 {
  float: left;
  height: 30px;
  width: 300px;
  font-family: Tahoma, Geneva, sans-serif;
  font-size: 14px;
}
body, td, th {
  font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
  padding:5px;
}
.forms {
  float: left;
  height: 30px;
  width: 300px;
  font-family: Tahoma, Geneva, sans-serif;
  font-size: 14px;
}
td {
  font-size: 12px;
}
</style>
<script type="text/javascript" src="p7ttm/p7TTMscripts.js"></script>
<link href="p7ttm/p7TTM02.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript">
<!--
P7_opTTM('id:p7Tooltip_1','att:title','p7TTM02',1,150,5,0,1,0,0,0,300,0,1,1);
//-->
</script>
</head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<!--Load Script and Stylesheet -->
<script type="text/javascript" src="jquery.simple-dtpicker.js"></script>
<link type="text/css" href="jquery.simple-dtpicker.css" rel="stylesheet" />
<body>
<div style="padding-right:15px; display:inline-block; padding-left:15px; padding-top:15px;">
  <table width="840px" border="0" cellspacing="5" cellpadding="5">
    <form action="new_event_action.php" name="frmAdd" method="post" onSubmit='return validate();'>
      <tr>
        <td height="38" colspan="4"  bgcolor="#FAA32E" style="color:#FFF; font-size:20px"> New Event</td>
      </tr>
      <tr>
        <td width="91" height="50">Event Name</td>
        <td width="300"><input name="txteName" type="text" class="forms1" id="txteName" size="100" /></td>
        <td width="91">Date</td>
        <td width="326"><input name="txtDate" type="text" class="forms" id="txtDate" size="20"  />
          <script type="text/javascript">
      $(function(){
        $('*[name=txtDate]').appendDtpicker({
          "inline": false,
          "dateOnly": true,
          "dateFormat": "MM-DD-YYYY"
        });
      });
  </script></td>
      </tr>
      <tr>
        <td height="50">Short Description</td>
        <td><input name="txtsDesc" type="text" class="forms" id="txtsDesc" size="20" maxlength="255" /></td>
        <td>Time</td>
        <td><select name="txtTime" class="forms" id="txtType2" style="20">
            <option value="8:00 AM">8:00 AM</option>
            <option value="9:00 AM">9:00 AM</option>
            <option value="10:00 AM">10:00 AM</option>
            <option value="11:00 AM">11:00 AM</option>
            <option value="12:00 PM">12:00 PM</option>
            <option value="1:00 PM">1:00 PM</option>
            <option value="2:00 PM">2:00 PM</option>
            <option value="3:00 PM">3:00 PM</option>
            <option value="4:00 PM">4:00 PM</option>
            <option value="5:00 PM">5:00 PM</option>
            <option value="6:00 PM">6:00 PM</option>
            <option value="7:00 PM">7:00 PM</option>
            <option value="8:00 PM">8:00 PM</option>
            <option value="9:00 PM">9:00 PM</option>
          </select></td>
      </tr>
      <tr>
        <td>Open to</td>
        <td><select name="txtOpen" class="forms" id="txtOpen" style="20">
            <option value="ALL">ALL CICT Students</option>
            <option value="AG">ALL + Guest</option>
            <option value="CSO">CSO</option>
            <option value="CG">CG</option>
            <option value="LOOP">LOOP</option>
            <option value="GUEST">GUEST Only</option>
          </select></td>
        <td width="91" height="50">Max Participants</td>
        <td width="326"><input name="txtMax" type="text" class="forms1" id="txtMax" size="100" /></td>
      </tr>
      <tr>
        <td width="91" height="37">Organizer</td>
        <td width="300"><input name="txtOrganizer" type="text" class="forms" id="txtOrganizer" value="<?php echo $FirstName . " " . $LastName ?>" size="20" readonly="readonly" /></td>
        <td width="91">Type</td>
        <td width="326"><select name="txtType" class="forms" id="txtType" style="20">
            <option value="College Days">College Days</option>
            <option value="Seminar">Seminar</option>
            <option value="CSC">CSC</option>
          </select></td>
      </tr>
      <tr>
        <td width="91" height="37" class="p7TTM_trg" id="p7Tooltip_1" title="Should be 176X176 Pixels">Display Photo</td>
        <td width="300"><input name="txtDp" type="text" class="forms" id="txtDp" size="20" /></td>
        <td width="91">Cover Photo</td>
        <td width="326"><input name="txtcover" type="text" class="forms" id="txtcover" size="20" /></td>
      </tr>
      <tr>
        <td>Registration</td>
        <td><select name="txtReg" class="forms" id="txtReg" style="20">
            <option value="Individual">Individual</option>
            <option value="Group">Group</option>
            <option value="Link">Link</option>
            <option value="None">None</option>
          </select></td>
        <td width="91" height="50">Payment</td>
        <td width="326"><select name="txtPayment" class="forms" id="txtPayment" style="20">
            <option value="Free">Free</option>
            <option value="Paid">Paid</option>
          </select></td>
      </tr>
      <tr>
        <td width="91" height="50">Amount</td>
        <td width="300"><input name="txtAmount" type="text" class="forms1" id="txtAmount" size="100" /></td>
        <td width="91" height="50">Status</td>
        <td width="326"><select name="txtStats" class="forms" id="txtStats" style="20">
          <option value="Active">Active</option>
          <option value="Inactive">Inactive</option>
        </select></td>
      </tr>
      <tr>
        <td height="37" colspan="4">Long Description</td>
      </tr>
      <tr>
        <td height="37" colspan="4"><!-- Textarea gets replaced with TinyMCE, remember HTML in a textarea should be encoded -->
          
          <script type="text/javascript">
// BeginOAWidget_Instance_2204022: #txtLongdes

	tinyMCE.init({
		// General options
		mode : "exact",
		elements : "txtLongdes",
		theme : "advanced",
		skin : "default",
		plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,print,bold,italic,underline,strikethrough,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect,",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,|,image,media,|,forecolor,backcolor,|,insertdate,inserttime,",
		theme_advanced_buttons3 : "hr,cite,abbr,acronym,del,ins,sub,sup,visualchars,nonbreaking,charmap,emotions,ltr,rtl,|,code,preview,fullscreen,help,cleanup,removeformat,|,styleprops,attribs,",
		theme_advanced_buttons4 : "tablecontrols,visualaid,|,insertlayer,moveforward,movebackward,absolute,visualaid,|,template,pagebreak,restoredraft,",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

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
          <textarea id="txtLongdes" name="txtLongdes" rows="15" style="width:100%"></textarea></td>
      </tr>
      <tr>
        <td height="37" colspan="4" bgcolor="#FAA32E"><div align="center">Certificate</div></td>
      </tr>
      <tr>
        <td height="37">Background Image</td>
        <td height="37"><input name="txtCertUrl" type="text" class="forms1" id="txtCertUrl" size="100" /></td>
        <td height="37">Certificate Availability</td>
        <td height="37"><select name="txtCertavail" class="forms" id="txtCertavail" style="20">
          <option value="Pending">Pending</option>
          <option value="Available">Available</option>
        </select></td>
      </tr>
      <tr>
        <td height="37">Body</td>
        <td height="37">&nbsp;</td>
        <td height="37">Preview Certificate</td>
        <td height="37">
               
        </td>
      </tr>
      <tr>
        <td height="37" colspan="4"><script type="text/javascript">
// BeginOAWidget_Instance_2204022: #postContent

	tinyMCE.init({
		// General options
		mode : "exact",
		elements : "postContent",
		theme : "advanced",
		skin : "default",
		plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,print,bold,italic,underline,strikethrough,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect,",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,|,image,media,|,forecolor,backcolor,|,insertdate,inserttime,",
		theme_advanced_buttons3 : "hr,cite,abbr,acronym,del,ins,sub,sup,visualchars,nonbreaking,charmap,emotions,ltr,rtl,|,code,preview,fullscreen,help,cleanup,removeformat,|,styleprops,attribs,",
		theme_advanced_buttons4 : "tablecontrols,visualaid,|,insertlayer,moveforward,movebackward,absolute,visualaid,|,template,pagebreak,restoredraft,",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

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
        <textarea id="postContent" name="postContent" rows="15" style="width:100%"></textarea></td>
      </tr>
      <tr>
        <td height="37">&nbsp;</td>
        <td height="37">&nbsp;</td>
        <td height="37">&nbsp;</td>
        <td height="37">&nbsp;</td>
      </tr>
      
      <tr>
        <input type="hidden" name="txtaid" id="txtaid" value="<?php echo $_SESSION['member_id'] ?>">
        <td height="38">&nbsp;</td>
        <td><input type="reset" name="Reset" value="CLEAR"  class="forms"/></td>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" value="CREATE"  class="forms"/></td>
      </tr>
    </form>
  </table>
  <p>&nbsp;</p>
</div>

</body>
</html>