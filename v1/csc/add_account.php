<?php
include('../predef/verify.php');
//val($_SESSION['accesslvl'],23,$_SERVER['PHP_SELF']);		
error_reporting(E_ERROR);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create New Account</title>
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
</head>
<script type="text/javascript" src="add_account.js"></script>
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
</style>
<script type="text/javascript">
function gpass(){
	var uname = document.getElementById("txtUname").value;
	document.getElementById("txtPass").value = uname;
}

function calcup(){
	var type = document.getElementById("txtPayment").value;
	if (type == "Full"){
		document.getElementById("txtAmount").value = 100;
	}
	else{
		document.getElementById("txtAmount").value = 0;
	}
}
function tell(){
	var x = document.getElementById("txtSpec");
	var spec = x.options[x.selectedIndex].value;
	if (spec == "Computer Science")
	{
		document.getElementById("txtCourse").value = "BS Computer Science";
	}
	else
	{
		document.getElementById("txtCourse").value = "BS Information Technology";
	}
}

function genuname(){
	var fname = document.getElementById("txtfName").value;
	var lname = document.getElementById("txtlName").value;
	var lengt = lname.length;
	var lastname = "";
	for (j=0; j < lengt; j++)
	{
		if (lname.charAt(j) != " ")
		{
			lastname = lastname + lname.charAt(j);
		}
	}
	document.getElementById("txtUname").value = fname.charAt(0) + lastname;
}

</script>
<script src="../chat/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#feedback').load('check.php').show();
		
		$('#txtUname').keyup(function(){
			$.post('check.php', { txtUname:frmAdd.txtUname.value },
			function(result){
				$('#feedback').html(result).show();
		});
		
		
		
	});
	
	
	
});


</script>
<body>
<table width="840px" border="0" cellspacing="5" cellpadding="3" bgcolor="#FFFFFF";>
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
      <td width="300"><input type="text" name="txtStudNum" size="20" class="forms"/></td>
      <td width="123">Specialization</td>
      <td width="387"><select name="txtSpec" class="forms" style="20" id="txtSpec" onchange="tell()">
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
      <td><input name="txtCourse" type="text" class="forms1" id="txtCourse" onfocus="tell()"  onclick="tell()" size="20" readonly="readonly" /></td>
      <td height="41"> Year Level</td>
      <td><select name="txtYear" class="forms" style="20">
          <option value="---------">--------</option>
          <option value="First" >First Year</option>
          <option value="Second">Second Year</option>
          <option value="Third">Third Year</option>
          <option value="Fourth">Fourth Year</option>
          <option value="Fifth">Fifth Year</option>
          <option value="Irreg">Irregular</option>
          
      </select></td>
    </tr>
    <tr>
      <td height="38">Section</td>
      <td>
      <select name="txtSection" class="forms" id="txtSection" style="20">
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
      </select></td>
      <td height="37">Organization</td>
      <td><select name="txtOrg" class="forms" id="txtOrg" style="20">
          <option value="NA">--------</option>
          <option value="CSO">CSO - Cisco Student Organization</option>
          <option value="CG">CG - Code Geeks</option>
          <option value="LOOP">LOOP - League of Outstanding Programmers</option>
          <option value="NA"> - No Org Yet -</option>
      </select></td>
    </tr>
    <tr>
      <td height="37">Payment</td>
      <td><select name="txtPayment" class="forms" id="txtPayment" style="20" onchange="calcup()">
		<option value="Unpaid">Unpaid</option>
        <option value="Full">Full</option>
        <option value="Partial">Partial</option>
        
      </select></td>
      <td>Amount</td>
      <td><input name="txtAmount" type="text" class="forms" id="txtAmount" size="20" onclick="calcup()" onfocus="calcup()" /></td>
    </tr>
    <tr>
      <td height="38">Contact Number</td>
      <td><input name="txtContact" type="text" class="forms" id="txtContact" size="20" maxlength="11" /></td>
      <td height="37">Email Address</td>
      <td><input name="txtEmail" type="text" class="forms" id="txtEmail" size="20" /></td>
    </tr>
    <tr>
      <td height="38">Username</td>
      <td><input name="txtUname" type="text" class="forms" id="txtUname" size="20" onclick="genuname()" onfocus="genuname()" /></td>
      <td>Password</td>
      <td><input name="txtPass" type="password" class="forms" id="txtPass" size="20" onclick="gpass()" onfocus="gpass()"/></td>
    </tr>
    <tr>
      <td></td>
      <td><span id="feedback" style="font-size:14px; color:#F00"></span>
        <input name="txtAdded" type="hidden" class="forms" id="txtAdded" size="20" readonly="readonly" value="<?php echo $FirstName . " " . $LastName ?>" /></td>
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