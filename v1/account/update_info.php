<?php
include('../predef/verify.php');
if (($acl == 3) || ($acl == 4) || ($acl == 5))
{
	header( "refresh:0;url=../unauthorized.php" );   
}
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
<script type="text/javascript" src="../csc/add_account.js"></script>
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
<?php
include('../predef/verify.php');
include('../account/conn2.php');
$result = mysqli_query($con,"SELECT * FROM fox_users where uID='".$_SESSION['member_id']."'");
 
while($row = mysqli_fetch_array($result))
  {
?>
<body>
<table width="840px" border="0" cellspacing="5" cellpadding="3" bgcolor="#FFFFFF";>
  <form action="../csc/add_account_action1.php" name="frmAdd" method="post" onSubmit='return validate();'>
    <tr>
      <td height="41" colspan="4"  bgcolor="#FAA32E" style="color:#FFF; font-size:20px">&nbsp;+ Update Existing Account</td>
    </tr>
    <tr>
      <td height="37" colspan="4" style="font-size:12px">Update existing information.</td>
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
      <td width="387"><input name="txtSpec" type="text" class="forms" id="txtSpec" value="<?php echo $row['specialization'];?>" size="20" /></td>
    </tr>
    <tr>
      <td height="37">Course</td>
      <td><input name="txtCourse" type="text" class="forms1" id="txtCourse" onfocus="tell()"  onclick="tell()" value="<?php echo $row['course'];?>" size="20" readonly="readonly" /></td>
      <td height="41"> Year Level</td>
      <td><input name="txtYrlvl" type="text" class="forms" id="txtYrlvl" value="<?php echo $row['yearlevel'];?>" size="20" /></td>
    </tr>
    <tr>
      <td height="38">Section</td>
      <td><input name="txtSection" type="text" class="forms1" id="txtSection" value="<?php echo $row['section'];?>" size="20" /></td>
      <td height="37">Organization</td>
      <td><select name="txtOrg" class="forms" id="txtOrg" style="20">
          <option value="CSO">CSO - Cisco Student Organization</option>
          <option value="CG">CG - Code Geeks</option>
          <option value="LOOP">LOOP - League of Outstanding Programmers</option>
          <option value="NA"> - No Org Yet -</option>
      </select></td>
    </tr>
    <tr>
      <td height="37">Payment</td>
      <td><select name="txtPayment" class="forms" id="txtPayment" style="20" onchange="calcup()">
        <option value="Full">Full</option>
        <option value="Partial">Partial</option>
        <option value="Unpaid">Unpaid</option>
      </select></td>
      <td>Amount</td>
      <td><input name="txtAmount" type="text" class="forms" id="txtAmount" onfocus="calcup()" onclick="calcup()" value="<?php echo $row['amount'];?>" size="20" /></td>
    </tr>
    <tr>
      <td height="38">Contact Number</td>
      <td><input name="txtContact" type="text" class="forms" id="txtContact" value="<?php echo $row['contact'];?>" size="20" maxlength="11" /></td>
      <td height="37">Email Address</td>
      <td><input name="txtEmail" type="text" class="forms" id="txtEmail" value="<?php echo $row['email'];?>" size="20" /></td>
    </tr>
    <tr>
      <td height="38">Username</td>
      <td><input name="txtUname" type="text" class="forms" id="txtUname" style="text-transform:lowercase" onfocus="genuname()" onclick="genuname()" value="<?php echo $row['uname'];?>" size="20" /></td>
      <td>Password</td>
      <td><input name="txtPass" type="password" class="forms" id="txtPass" onfocus="gpass()" onclick="gpass()" value="hello" size="20"/></td>
    </tr>
    <tr>
      <td>Added by</td>
      <td><input name="txtAdded" type="text" class="forms" id="txtAdded" size="20" readonly="readonly" value="<?php echo $FirstName . " " . $LastName ?>" /></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="UPDATE"  class="forms"/></td>
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
<?php }?>
</body>
</html>