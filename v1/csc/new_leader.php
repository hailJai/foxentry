<?php
include('../predef/verify.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create New Account</title>
<style type="text/css">
.forms1 {	float: left;
	height: 30px;
	width: 300px;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 14px;
}
.forms1 {	float: left;
	height: 30px;
	width: 300px;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 14px;
}
</style>
</head>
<script type="text/javascript" src="add_faculty.js"></script>
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
	td {
		font-size:12px;
	}
</style>
<script type="text/javascript">
function gpass(){
	var uname = document.getElementById("txtUname").value;
	document.getElementById("txtPass").value = uname;
}


</script>
<body>_
<table width="100%" border="0" cellspacing="5" cellpadding="3" bgcolor="#FFFFFF";>
<form action="add_account_action.php" name="frmAdd" method="post" onSubmit='return validate();'>  
  
  <tr>
    <td height="41" colspan="4"  bgcolor="#FAA32E" style="color:#FFF; font-size:20px">&nbsp;+ Create New Account</td>
    </tr>
  <tr>
    <td height="37" colspan="4" style="font-size:12px">Please input only correct information. Information entered will be secured and will only be used for announcements.</td>
    </tr>
  <tr>
    <td width="153" height="37" style="font-size:12px">First Name</td>
    <td width="300"  style="font-size:12px"><input name="txtfName" type="text" class="forms" id="txtfName" size="20" /></td>
    <td width="123" height="37">Last Name</td>
    <td width="387"><input name="txtlName" type="text" class="forms" id="txtlName" size="20" /></td>
  </tr>
   <tr>
     <td height="37">Student Number</td>
    <td width="300"><input type="text" name="txtStudNum" size="20" class="forms" /></td>
    <td width="123">Specialization</td>
    <td width="387"><select name="txtSpec" class="forms" style="20">
      <option value="Animation">Animation</option>
      <option value="Computer Science">Computer Science</option>
      <option value="Network Administration">Network Administration</option>
      <option value="Web Development">Web Development</option>
      <option value="Business Analytics">Business Analytics</option>
    </select></td>
  </tr>
  <tr>
    <td height="37">Course</td>
    <td><input type="text" name="txtCourse" size="20" class="forms" /></td>
    <td height="41"> Year Level</td>
    <td><select name="txtYear" class="forms" style="20">
      <option value="First">First Year</option>
      <option value="Second">Second Year</option>
      <option value="Third">Third Year</option>
      <option value="Fourth">Fourth Year</option>
      <option value="Fifth">Fifth Year</option>
      <option value="Irreg">Irregular</option>
    </select></td>
  </tr>
  <tr>
    <td height="38">Section</td>
    <td><input name="txtSection" type="text" class="forms1" id="txtSection" size="20" /></td>
    <td height="37">Organization</td>
    <td><select name="txtOrg" class="forms" id="txtOrg" style="20">
      <option value="CSO">CSO - Cisco Student Organization</option>
      <option value="CG">CG - Gode Geeks</option>
      <option value="LOOP">LOOP - League of Outstanding Programmers</option>
    </select></td>
  </tr>
  <tr>
    <td height="38">Contact Number</td>
    <td><input type="text" name="txtContact" size="20" class="forms" /></td>
    <td height="37">Email Address</td>
    <td><input type="text" name="txtEmail" size="20" class="forms" /></td>
  </tr>
    <tr>
    <td height="38">Username</td>
    <td><input name="txtUname" type="text" class="forms" id="txtUname" size="20" onkeypress="gpass()" /></td>
    <td>Password</td>
    <td><input name="txtPass" type="password" class="forms" id="txtPass" size="20" onclick="gpass()" /></td>
  </tr>
  <tr>
    <td height="37">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="ADD"  class="forms"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="reset" name="Reset" value="CLEAR"  class="forms"/></td>
  </tr>
  </form> 
</table>
<p>&nbsp;</p>
 
</body>
</html>