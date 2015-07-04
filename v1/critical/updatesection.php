<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>update sections</title>
</head>
<script type="text/javascript">
function update(){
var oldsec = document.getElementById("origsection").value;
var secleng = oldsec.length;
var newsec;
var x = oldsec.charAt(0);
x = x.toUpperCase();
var y;
var z;
if (oldsec.charAt(1) != "-")
{
	if (oldsec.charAt(1) == " ")
	{
		y = "-";
		z = oldsec.charAt(2)+oldsec.charAt(3)+oldsec.charAt(4);	
	}
	else
	{
		y = "-";
		z = oldsec.charAt(1)+oldsec.charAt(2)+oldsec.charAt(3);
	}
}
else
{
	z = oldsec.charAt(1)+oldsec.charAt(2)+oldsec.charAt(3)+oldsec.charAt(4);
}
document.getElementById("newsection").value = x+y+z;
}
</script>

<body>
<input type="text" name="origsection" id="origsection" />
<input type="text" name="newsection" id="newsection"/>
<input type="submit" name="go" value="go" onclick="update();" />
</body>
</html>