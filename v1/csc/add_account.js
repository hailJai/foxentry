function validate() 
{
	var feed = document.getElementById("feedback").value;
	if(feed != "")
		{
		alert('Check Username!');
		document.frmAdd.txtPass.focus();
		return true;
		}
		
	if(document.frmAdd.txtfName.value == '')
		{
			alert('Please Enter First Name!');
			frmAdd.txtfName.focus(); 
			return false;

		}
	if(document.frmAdd.txtlName.value == '')
		{
			alert('Please Enter Last Name!');
			frmAdd.txtlName.focus(); 
			return false;
		}
	if(document.frmAdd.txtStudNum.value == '')
		{
			alert('Please Enter Student Number!');
			frmAdd.txtStudNum.focus(); 
			return false;
		}
	if(document.frmAdd.txtCourse.value=="")
		{
		alert('Please Enter Course!');
		document.frmAdd.txtCourse.focus();
		return false;
		}
	if(document.frmAdd.txtSection.value == '')
		{
			alert('Please Enter Section!');
			frmAdd.txtSection.focus(); 
			return false;

		}
	if(document.frmAdd.txtAmount.value == '')
		{
			alert('Please Enter Amount!');
			frmAdd.txtAmount.focus(); 
			return false;
		}
	if(document.frmAdd.txtContact.value == '')
		{
			alert('Please Enter Contact Number!');
			frmAdd.txtContact.focus(); 
			return false;
		}
	if(document.frmAdd.txtEmail.value=="")
		{
		alert('Please Enter Email Address!');
		document.frmAdd.txtEmail.focus();
		return false;
		}
	if(document.frmAdd.txtUname.value == '')
		{
			alert('Username Generated!');
			frmAdd.txtUname.focus(); 
			return false;
		}
	if(document.frmAdd.txtPass.value=="")
		{
		alert('Password Generated!');
		document.frmAdd.txtPass.focus();
		return true;
		}
		

		
	return true
}