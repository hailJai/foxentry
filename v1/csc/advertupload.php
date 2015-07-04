<?php
		include('../predef/verify.php');
		val($_SESSION['accesslvl'],31,$_SERVER['PHP_SELF']);		
		error_reporting(E_ERROR);
        
        ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload Ad</title>
<style type="text/css">
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
}
.forms {
	float: left;
	height: 30px;
	width: 300px;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 14px;
}
.container {
	width:820px;
	border:solid 2px #FF9900;
	height:auto;
	background-color:#EEE;
}
.thumbnails {
	width:260px;
	height:175px;
	border:solid 1px #999999;
	margin: 2px;
	display:inline-block;
}
</style>
<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script type="text/javascript">
var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];

function Validate(oForm) {
    var arrInputs = oForm.getElementsByTagName("input");
    for (var i = 0; i < arrInputs.length; i++) {
        var oInput = arrInputs[i];
        if (oInput.type == "file") {
            var sFileName = oInput.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }

                if (!blnValid) {
                    alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                    return false;
                }
            }
        }
    }

    return true;
}
</script>
</head>
<?php
error_reporting(E_ERROR); 
session_start();
$accountID = $_SESSION['member_id'];
?>
<body>
<br />
<div style="width:840px; height:auto">
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">View Current Ads</li>
    <li class="TabbedPanelsTab" tabindex="0">Upload Advertisement</li>
</ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">
      <div class="container">
       <?php
		error_reporting(E_ERROR);
		include('../account/conn2.php');
		$result3 = mysqli_query($con,"SELECT * FROM fox_files WHERE type ='advert'");
		while($row3 = mysqli_fetch_array($result3))
  		{
		echo "
		 <div  class='thumbnails'>
          <center>";
 		echo '<img src="data:image/jpeg;base64,' . base64_encode($row3['data']) . '"  width="255" height="142">';
		echo "
		</center>
          <form action='delete_ad.php' method='post'>
            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type='hidden' name='txtadverID' value='".$row3['id']."' />
            <input name='delete' type='submit' value='delete' style='margin:3px;' />
          </form>
        </div>
		";
  		}    
	   ?>
      </div>
    </div>
    <div class="TabbedPanelsContent">
      <form action="photoupload_act.php" method="post" name="form1" enctype="multipart/form-data" onsubmit="return Validate(this);">
        <table width="620" border="0" bgcolor="#EEEEEE" cellpadding="5px"  style="margin-top:10px;" align="center">
          <tr>
            <td colspan="3">Please upload a photo atleast 1280X720pixels 2mb maximum size.</td>
          </tr>
          <tr bgcolor="#D7D7D7">
            <td colspan="2"><input type='file' name='uploaded_file1' id='uploaded_file1'  class='forms' />
              <input type="hidden" name="txtaID" value="0" />
              <input type="hidden" name="txtType" value="advert" />
              <input name='hdnLine' id='hdnLine' type='hidden' value='1' /></td>
            <td width="17"><input type="submit" name="upload2" value="Upload" class="forms" /></td>
          </tr>
          <tr>
            <td width="230">&nbsp;</td>
            <td colspan="2">&nbsp;</td>
          </tr>
        </table>
      </form>
    </div>
</div>
</div>
</div>
<p>&nbsp;</p>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
  </script>
</body>
</html>