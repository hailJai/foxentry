<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script src="../chat/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$('#feedback').load('check.php').show();
		
		$('#txtUname').keyup(function()
		{
			$.post('check.php', { txtUname:frmAdd.txtUname.value },
			function(result)
			{
				$('#feedback').html(result).show();
				if ((result) == 'No Record Found!')
				{
					frmAdd.reg.disabled = '';
				}
			}
			);			
		}
		);
	
});

</script>
<script type="text/javascript">
function(){
	frmAdd.reg.disabled = 'true';
}
</script>
<body>
<form action="add_account_action.php" name="frmAdd" method="post" onSubmit='return validate();'>
	<input name="txtUname" type="text" class="forms" id="txtUname" size="20" onclick="genuname()" onfocus="genuname()" /><span id="feedback" style="font-size:14px; color:#F00"></span>
    <input type="submit" name="reg" value="Register" disabled="disabled" />
</form>
</body>
</html>