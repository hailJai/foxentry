<?php
include('../predef/verify.php');
include('../predef/usable.php');
$mod = $FirstName . " " . $LastName;
val($_SESSION['accesslvl'],95,$_SERVER['PHP_SELF']);
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
</head>
<script type="text/javascript" src="add_account1.js"></script>
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
include('../account/conn2.php');
include('../joking.php');

$id = make_safe($_GET["id"]);

$result = mysqli_query($con,"SELECT * FROM fox_users where uID='".$id."'");
 
while($row = mysqli_fetch_array($result))
  {
	seen($_SESSION['member_id'], $mod, $_SERVER['PHP_SELF'], $row['uname']);

?>
<body>
<table width="840px" border="0" cellspacing="5" cellpadding="3" bgcolor="#FFFFFF";>
  <form action="update_account_action.php" name="frmAdd" method="post" onSubmit='return validate();'>
    <tr>
      <td height="41" colspan="4"  bgcolor="#FAA32E" style="color:#FFF; font-size:20px">&nbsp;+ <a href="../account/accounts.php">Accounts</a> &gt; Update Existing Account</td>
    </tr>
    <tr>
      <td height="37" colspan="4" style="font-size:12px">Update existing information. Pleas bear in mind that all actions are monitored and logged. Please do not use the information listed for your personal intentions.</td>
    </tr>
    <tr>
      <td width="153" height="37" style="font-size:12px">First Name</td>
      <td width="300"  style="font-size:12px"><input name="txtfName" type="text" disabled="disabled" class="forms" id="txtfName" value="<?php echo $row['fname'];?>" size="20" /></td>
      <td width="123" height="37">Last Name</td>
      <td width="387"><input name="txtlName" type="text" disabled="disabled" class="forms" id="txtlName" value="<?php echo $row['lname'];?>" size="20" /></td>
    </tr>
    <tr>
      <td height="37">Student Number</td>
      <td width="300"><input name="txtStudNum" type="text" disabled="disabled" class="forms" value="<?php echo $row['stdno'];?>" size="20"/></td>
      <td width="123">Specialization</td>
      <td width="387"><input name="txtSpec" type="text" disabled="disabled" class="forms" id="txtSpec" value="<?php echo $row['specialization'];?>" size="20" /></td>
    </tr>
    <tr>
      <td height="37">Course</td>
      <td><input name="txtCourse" type="text" disabled="disabled" class="forms1" id="txtCourse" onfocus="tell()"  onclick="tell()" value="<?php echo $row['course'];?>" size="20" /></td>
      <td height="41"> Year Level</td>
      <td><input name="txtYrlvl" type="text" disabled="disabled" class="forms" id="txtYrlvl" value="<?php echo $row['yearlevel'];?>" size="20" /></td>
    </tr>
    <tr>
      <td height="38">Section</td>
      <td><input name="txtSection" type="text" class="forms1" id="txtSection" value="<?php echo $row['section'];?>" size="20" /></td>
      <td height="37">Organization</td>
      <td><select name="txtOrg" class="forms" id="txtOrg" style="20">
      	<option value="<?php echo $row['organization'];?>"><?php echo $row['organization'];?></option>
        <option value="NA">----</option>
        <option value="CSO">CSO - Cisco Student Organization</option>
        <option value="CG">CG - Code Geeks</option>
        <option value="LOOP">LOOP - League of Outstanding Programmers</option>
        <option value="NA"> - No Org Yet -</option>
      </select></td>
    </tr>
    <tr>
      <td height="37">Payment</td>
      <td><select name="txtPayment" class="forms" id="txtPayment" style="20" onchange="calcup()">
        <option value="<?php echo $row['payment'];?>"><?php echo $row['payment'];?></option>
        <option value="Unpaid">----</option>
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
      <td><input name="txtEmail" type="text" disabled="disabled" class="forms" id="txtEmail" value="<?php echo $row['email'];?>" size="20" /></td>
    </tr>
    <tr>
      <td height="38">Type</td>
      <td>
      <select name="txtType" class="forms" id="txtType" style="20">
      	<option value="<?php echo $row['user_level'];?>">UNCHANGED</option>
        <option value="32">----</option>
        <option value="32">Student</option>
        <option value="2">Student Council</option>
        <option value="4">Organization Officer</option>
        <option value="16">Staff</option>
        <option value="64">Professor</option>
        <option value="64">Org Adviser</option>
        <option value="8">CSC Adviser</option>
        <?php 
		if ($_SESSION['member_id'] == 1)
		{
			echo ' <option value="1">Developer</option>';
		}
		
		?>
       
      </select>
      </td>
      <td>Position</td>
      <td><input name="txtPosition" type="text" class="forms" id="txtPosition" value="<?php echo $row['position'];?>" size="20"/></td>
    </tr>
    <tr>
      <td height="38">Username</td>
      <td><input name="txtUname" type="text" class="forms" id="txtUname" style="text-transform:lowercase" onfocus="genuname()"  readonly="readonly" onclick="genuname()" value="<?php echo $row['uname'];?>" size="20" /></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="UPDATE"  class="forms"/></td>
    </tr>
    <tr>
      <td>Added by</td>
      <td><input name="txtAdded" type="text" disabled="disabled" class="forms" id="txtAdded" value="<?php echo $row['leader'];?>" size="20" readonly="readonly" /></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="resetpass" value="RESET PASSWORD"  class="forms"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="txtID" type="hidden" class="forms" id="txtID" value="<?php echo $row['uID'];?>" size="20" readonly="readonly" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </form>
</table>
<p>&nbsp;</p>
<?php }?>
</body>
</html>