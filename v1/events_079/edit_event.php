<?php
session_start();
$event = $_GET['id']; 
$member_id=$_SESSION['member_id'];
include('../this.php');


$edit = "SELECT * FROM fox_events WHERE id='".$event."'";
      $result = mysql_query($edit);
      $row = mysql_fetch_array($result);
	  
if(isset($_POST['Edit']))
{	
	$edit_name = $_POST['txteName'];
  $edit_sdesc = $_POST['txtsDesc'];
  $edit_ldesc = $_POST['txtLongdes'];
  $edit_type = $_POST['txtType'];
  $edit_date = $_POST['txtDate'];
  $edit_time = $_POST['txtTime'];
  $edit_max = $_POST['txtMax'];
  $edit_open = $_POST['txtOpen'];
 

	$edit= "UPDATE fox_events SET name='$edit_name', shortdescription='$edit_sdesc', 
  longdesc='$edit_ldesc', type='$edit_type', date='$edit_date', time='$edit_time', MAX='$edit_max', opento='$edit_open' WHERE id='".$event."'";

		mysql_query($edit);
		header("location:../account/dashboard.php");
}
	  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Event</title>
<script src="../scripts/tiny_mce/tiny_mce.js" type="text/javascript"></script>
<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2204022" binding="#txtLongdes" />
</oa:widgets>
-->
</script>
<style type="text/css">
body{
  background-color:#F0F0F0;
}
.forms1 { float: left;
  height: 30px;
  width: 300px;
  font-family: Tahoma, Geneva, sans-serif;
  font-size: 14px;
}
.forms1 { float: left;
  height: 30px;
  width: 300px;
  font-family: Tahoma, Geneva, sans-serif;
  font-size: 14px;
}
.forms1 { float: left;
  height: 30px;
  width: 300px;
  font-family: Tahoma, Geneva, sans-serif;
  font-size: 14px;
}
.forms1 { float: left;
  height: 30px;
  width: 300px;
  font-family: Tahoma, Geneva, sans-serif;
  font-size: 14px;
}
.forms1 { float: left;
  height: 30px;
  width: 300px;
  font-family: Tahoma, Geneva, sans-serif;
  font-size: 14px;
}
</style>
</head>
<style type="text/css">
body,td,th {
  font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.forms {
  float: left;
  height: 30px;
  width: 300px;
  font-family: Tahoma, Geneva, sans-serif;
  font-size: 14px;
}
.tarea {
  float: left;
  height: 100px;
  width: 300px;
  font-family: Tahoma, Geneva, sans-serif;
  font-size: 14px;
}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <!--Load Script and Stylesheet -->
<script type="text/javascript" src="jquery.simple-dtpicker.js"></script>
  <link type="text/css" href="jquery.simple-dtpicker.css" rel="stylesheet" />
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
    theme_advanced_buttons1 : "save,newdocument,print,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,bullist,numlist,undo,redo,|,link,unlink,anchor,|,",
    theme_advanced_buttons2 : "",
    theme_advanced_buttons3 : "",
    theme_advanced_buttons4 : "",
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
<body>
<table width="630" border="0" cellspacing="5" cellpadding="3">
<form method="post">  
  
  <tr>
    <td height="38" colspan="4"  bgcolor="#FAA32E" style="color:#FFF; font-size:20px"> Update Event</td>
    </tr>
  <tr>
    <td width="91" height="50">Event Name</td>
    <td width="300"><input name="txteName" type="text" class="forms1" id="txteName" size="100" value="<?php echo $row['name']?>" /></td>
    <td width="64">Date</td>
    <td width="326"><input name="txtDate" type="text" class="forms" id="txtDate" size="20" value="<?php echo $row['date']?>" />
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
     <td><input name="txtsDesc" type="text" class="forms" id="txtsDesc" size="20" maxlength="255" value="<?php echo $row['shortdescription']?>" /></td>
     <td>Time</td>
     <td><select name="txtTime" class="forms" id="txtType2" style="20">
       <option value="<?php echo $row['time']?>"><?php echo $row['time']?></option>
       <option value="-----">-----</option>
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
       <option value="<?php echo $row['opento']?>"><?php echo $row['opento']?></option>
       <option value="------------">-----------</option>
       <option value="ALL">ALL</option>
       <option value="CSO">CSO</option>
       <option value="CG">CG</option>
        <option value="LOOP">LOOP</option>
      
     </select></td>
<td width="91" height="50">Number of Participants(MAX 20)</td>
    <td width="300"><input name="txtMax" type="text" class="forms1" id="txtMax" size="100" value="<?php echo $row['MAX']?>" /></td>

  </tr>
  <tr>
    <td width="91" height="37">Organizer</td>
    <td width="300"><input name="txtOrganizer" type="text" class="forms" id="txtOrganizer" value="<?php echo $row['organizer'] ?>" size="20" readonly="readonly" />
    </td>
    <td width="64">Type</td>
    <td width="326"><select name="txtType" class="forms" id="txtType" style="20">
       <option value="<?php echo $row['type']?>"><?php echo $row['type']?></option>
      <option value="----------------">-----------------</option>
      <option value="College Days">College Days</option>
      <option value="Seminar">Seminar</option>
      <option value="CSC">CSC</option>
    </select></td>
    </tr>

    
   <tr>
     <td height="37" colspan="4">Long Description</td>
    </tr>
   <tr>
    <td height="37" colspan="4">
        <!-- Textarea gets replaced with TinyMCE, remember HTML in a textarea should be encoded -->
        <textarea id="txtLongdes" name="txtLongdes" rows="15" style="width:100%"><?php echo $row['longdesc']?></textarea></td>
    </tr>
  <tr>
    <td height="38">&nbsp;</td>
   
    <td><input type="submit" name="Edit" value="Edit"  class="forms"/></td>
  </tr>
  </form> 
</table>
<p>&nbsp;</p>
 
</body>
</html>