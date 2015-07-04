<?php
include('../predef/verify.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Account</title>
<style type="text/css">
.forms1 {
	float: left;
	height: 30px;
	width: 300px;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 14px;
}
.forms1 {
	float: left;
	height: 30px;
	width: 300px;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 14px;
}

</style>
<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
</head>
<script type="text/javascript" src="../csc/add_account1.js"></script>
<style type="text/css">
body, td, th {
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
	font-size: 12px;
}
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

<?php
include('conn2.php');
error_reporting(E_ERROR); 
session_start();
$result = mysqli_query($con,"SELECT * FROM fox_users where uID='".$_SESSION['member_id']."'");
while($row = mysqli_fetch_array($result))
  {
?>
<body>
<div style="width:840px; display:inline-block; padding:5px; padding-right:15px;">
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">Update Account Information</li>
    <li class="TabbedPanelsTab" tabindex="0">Change Password</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">
    <table width="100%" border="0" cellspacing="5" cellpadding="3" bgcolor="#FFFFFF";>
  <form action="update_account_action.php" name="frmAdd" method="post" onSubmit='return validate();'>
    <tr>
      <td height="26" colspan="4" style="font-size:12px"><div align="center"><hr /><strong>Personal Information</strong><hr /></div></td>
    </tr>
    <tr>
      <td width="153" height="37" style="font-size:12px">First Name</td>
      <td width="300"  style="font-size:12px"><input name="txtfName" type="text" class="forms" id="txtfName" value="<?php echo $row['fname'];?>" size="20" /></td>
      <td width="123" height="37">Last Name</td>
      <td width="387"><input name="txtlName" type="text" class="forms" id="txtlName" value="<?php echo $row['lname'];?>" size="20" /></td>
    </tr>
    <tr>
      <td height="37">Student Number</td>
      <td width="300"><input name="txtStudNum" type="text" class="forms" value="<?php echo $row['stdno'];?>" size="20"/></td>
      <td width="123">Specialization</td>
      <td width="387"><select name="txtSpec" class="forms" style="20" id="txtSpec" onchange="tell()">
  <option value="<?php echo $row['specialization'];?>" selected="selected"><?php echo $row['specialization'];?></option>
  <option value="-------">--------</option>
  <option value="Animation">Animation</option>
  <option value="Computer Science">Computer Science</option>
  <option value="Network Administration">Network Administration</option>
  <option value="Web Development">Web Development</option>
  <option value="Business Analytics">Business Analytics</option>
</select></td>
    </tr>
    <tr>
      <td height="37">Course</td>
      <td><input name="txtCourse" type="text" class="forms1" id="txtCourse" onfocus="tell()"  onclick="tell()" value="<?php echo $row['course'];?>" size="20" /></td>
      <td height="41"> Year Level</td>
      <td>
      <select name="txtYrlvl" class="forms" style="20">
          <option value="<?php echo $row['yearlevel'];?>"><?php echo $row['yearlevel'];?></option>
          <option value="---------">--------</option>
          <option value="First" >First Year</option>
          <option value="Second">Second Year</option>
          <option value="Third">Third Year</option>
          <option value="Fourth">Fourth Year</option>
          <option value="Fifth">Fifth Year</option>
          <option value="Irreg">Irregular</option>
          
      </select>
    </td>
    </tr>
    <tr>
      <td height="38">Section</td>
      <td>
      <select name="txtSection" class="forms" id="txtSection" style="20">
        <option value="<?php echo $row['section'];?>"><?php echo $row['section'];?></option>
        <option value="F-101">F-101</option>
        <option value="F-102">F-102</option>
        <option value="F-103">F-103</option>
        <option value="F-104">F-104</option>
        <option value="F-105">F-105</option>
        <option value="F-106">F-106</option>
        <option value="F-107">F-107</option>
        <option value="F-108">F-108</option>
        <option value="F-109">F-109</option>
        <option value="N-202">N-201</option>
        <option value="N-202">N-202</option>
        <option value="N-203">N-203</option>
        <option value="N-204">N-204</option>
        <option value="N-205">N-205</option>
        <option value="N-206">N-206</option>
        <option value="W-201">W-201</option>
        <option value="W-202">W-202</option>
        <option value="W-203">W-203</option>
        <option value="W-204">W-204</option>
        <option value="W-205">W-205</option>
        <option value="A-201">A-201</option>
        <option value="A-202">A-202</option>
        <option value="A-203">A-203</option>
        <option value="C-201">C-201</option>
        <option value="C-202">C-202</option>
        <option value="N-301">N-301</option>
        <option value="N-302">N-302</option>
        <option value="N-304">N-304</option>
        <option value="N-305">N-305</option>
        <option value="W-301">W-301</option>
        <option value="W-302">W-302</option>
        <option value="W-303">W-303</option>
        <option value="A-301">A-301</option>
        <option value="A-302">A-302</option>
        <option value="A-303">A-303</option>
        <option value="C-301">C-301</option>
        <option value="C-302">C-302</option>
        <option value="C-303">C-303</option>
        <option value="N-401">N-401</option>
        <option value="N-402">N-402</option>
        <option value="N-403">N-403</option>
        <option value="N-404">N-404</option>
        <option value="N-405">N-405</option>
        <option value="W-401">W-401</option>
        <option value="W-402">W-402</option>
        <option value="W-403">W-403</option>
        <option value="A-401">A-401</option>
        <option value="A-402">A-402</option>
        <option value="A-403">A-403</option>
        <option value="C-401">C-401</option>
        <option value="C-402">C-402</option>
        <option value="C-403">C-403</option>
        <option value="IRREGULAR">IRREGULAR</option>
      </select>
      
      
      </td>
      <td height="37">Contact Number</td>
      <td><input name="txtContact" type="text" class="forms" id="txtContact" value="<?php echo $row['contact'];?>" size="20" maxlength="11" /></td>
    </tr>
    <tr>
      <td height="37">Username</td>
      <td><input name="txtUname" type="text" class="forms" id="txtUname" style="text-transform:lowercase" onfocus="genuname()" onclick="genuname()" value="<?php echo $row['uname'];?>" size="20" /></td>
      <td>Email Address</td>
      <td><input name="txtEmail" type="text" class="forms" id="txtEmail" value="<?php echo $row['email'];?>" size="20" /></td>
    </tr>
    <tr>
      <td height="26" colspan="4"><div align="center"><hr />
      <strong>Organization Membership Information</strong>
      <hr /></div></td>
    </tr>
    <tr>
      <td height="37">*Organization</td>
      <td><input name="txtUname2" type="text" disabled="disabled" class="forms" id="txtUname2" style="text-transform:lowercase" onfocus="genuname()" onclick="genuname()" value="<?php echo $row['organization'];?>" size="20" /></td>
      <td>*Payment Received</td>
      <td><input name="txtAmount" type="text" disabled="disabled" class="forms" id="txtAmount" onfocus="calcup()" onclick="calcup()" value="<?php echo $row['amount'];?>" size="20" /></td>
    </tr>
    <tr>
      <td height="26" colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td height="38" colspan="4">*Org information was inputted by Organization Officers. Should there be any discrepancy, please report immediately to any org officer.</td>
    </tr>
    <tr>
      <td height="38">&nbsp;</td>
      <td>&nbsp;</td>
      <td>Password</td>
      <td><input name="txtPass" type="password" class="forms" id="txtPass" style="text-transform:lowercase" onfocus="genuname()" onclick="genuname()" size="20" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="txtID" type="hidden" class="forms" id="txtID" value="<?php echo $row['uID'];?>" size="20" readonly="readonly" />
      </td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="UPDATE"  class="forms"/></td>
    </tr>
  </form>
</table>
    
    
    
    
    
    </div>
    <div class="TabbedPanelsContent">
    <table width="100%" border="0" cellspacing="5" cellpadding="3" bgcolor="#FFFFFF";>
  <form action="change_password_action.php" name="frmAdd2" method="post" onSubmit='return newpass();'>
    <tr>
      <td height="26" colspan="2" style="font-size:12px"><div align="center"><strong>Change Password</strong></div></td>
    </tr>
    <tr>
      <td width="153" height="37" style="font-size:12px">New Password</td>
      <td width="300"  style="font-size:12px"><input name="txtNpass" type="password" class="forms" id="txtfName" value="" size="20" /></td>
    </tr>
    <tr>
      <td height="37">Confirm Password</td>
      <td width="300"><input name="txtCpass" type="password" class="forms" value="" size="20"/></td>
    </tr>
    <tr>
      <td>Old Password</td>
      <td><input name="txtPass2" type="password" class="forms" id="txtPass2" style="text-transform:lowercase" onfocus="genuname()" onclick="genuname()" size="20" /></td>
    </tr>
    <tr>
      <td><input name="txtID" type="hidden" class="forms" id="txtID" value="<?php echo $row['uID'];?>" size="20" readonly="readonly" />
      <?php }?></td>
      <td><input type="submit" name="submit" value="CHANGE PASSWORD"  class="forms"/></td>
    </tr>
  </form>
</table>
    
    
    
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
</body>
</html>
<script type="text/javascript">
function validate(){
	var pass = document.getElementById("txtPass").value;
	if (pass == ''){
		alert('Please Enter Your Password!');
		frmAdd.txtPass.focus(); 
		return false;
		}
	return true
}
function newpass(){
	if(document.frmAdd2.txtNpass.value=="")
		{
			alert('Please Enter Your New Password!');
			document.frmAdd2.txtNpass.focus();
			return false;
		}
	if(document.frmAdd2.txtCpass.value == '')
		{
			alert('Please Re-type your password');
			frmAdd2.txtCpass.focus(); 
			return false;
		}
	if(document.frmAdd2.txtPass2.value=="")
		{
			alert('Please Enter Your Old Password');
			document.frmAdd2.txtPass2.focus();
			return false;
		}
	if(document.frmAdd2.txtNpass.value != document.frmAdd2.txtCpass.value)
		{
			alert('Password not Match');
			document.frmAdd2.txtCpass.focus();
			return false;
		}
		
	return true
}
</script>