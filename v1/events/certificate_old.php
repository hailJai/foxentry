<?php
include('../predef/usable.php');
$id = $_POST["txtdln"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Digital Certificate - <?php echo certtitle($id); ?></title>
</head>
<style type="text/css">
.main {
	width: 11in;
	height: 8.5in;
}
.name {
	margin-top: -400px;
	width: 100%;
	z-index: 100;
	font-family: Century Gothic, Arial, Lucida Sans;
	font-size: 3.2em;
}
.name span {
	margin-top: -400px;
	width: 100%;
	z-index: 100;
	font-family: Century Gothic, Arial, Lucida Sans;
	font-size: .3em;
}
.textmid {
	margin-top:25px;
	width: 100%;
	z-index: 100;
	font-family: Century Gothic, Arial, Lucida Sans;
	font-size: 14px;
}
.textmid span{
	margin-top:25px;
	width: 100%;
	z-index: 100;
	font-family: Century Gothic, Arial, Lucida Sans;
	font-size: 14px;
}
</style>
<script>
function printnow()
{
window.print();
}
</script>
<body onload="printnow();">
<div class="main"> <img src="<?php echo certbg($id);?>" height="auto" width="100%" />
  <div class="name">
    <center>
      <?php echo fullname($_SESSION['member_id']);  ?><br />

      <span>(20179372)</span>

      <p class="textmid">
      <?php echo certtext($id); ?>
      </p>
    </center>
  </div>
</div>
</body>
</html>