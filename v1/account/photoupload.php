<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile Upload</title>
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
</style>
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
session_start();
$accountID = $_SESSION['member_id'];
?>
<body>
<form action="photoupload_act.php" method="post" name="form1" enctype="multipart/form-data" onsubmit="return Validate(this);"> 
  <table width="630" border="0" bgcolor="#EEEEEE" cellpadding="5px"  style="margin-top:10px;" align="center">
    <tr>
      <td colspan="3">Please upload a square phto</td>
    </tr>
    <tr bgcolor="#D7D7D7">
      <td colspan="2"><input type='file' name='uploaded_file1' id='uploaded_file1'  class='forms'>
      <input type="hidden" name="txtaID" value="<?php echo $accountID?>" />
      <input type="hidden" name="txtType" value="dp" />     
      <input name='hdnLine' id='hdnLine' type='hidden' value='1'>
      </td>
      <td width="17"><input type="submit" name="upload2" value="Upload" class="forms" /></td>
    </tr>
    <tr>
      <td width="230">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
  </table>
</form> 
</body>
</html>