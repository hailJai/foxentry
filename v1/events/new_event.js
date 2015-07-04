function validate() 
{
	
	if(document.frmAdd.txteName.value == '')
		{
			alert('Please Enter Event Name!');
			frmAdd.txteName.focus(); 
			return false;

		}
	if(document.frmAdd.txtsDesc.value == '')
		{
			alert('Input a Short Description!');
			frmAdd.txtsDesc.focus(); 
			return false;
		}
	
	return true
}