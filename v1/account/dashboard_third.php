<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="../scripts/jquery-1.6.1.min.js" type="text/javascript"></script>
<script src="../scripts/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="../scripts/jquery.dataTables.columnFilter.js" type="text/javascript"></script>
<script src="../scripts/jquery.dataTables.pagination.js" type="text/javascript"></script>
<link href="../css/demo_table_jui.css" rel="stylesheet" type="text/css" />
<style type="text/css">
/* BeginOAWidget_Instance_2586523: #dataTable */

	@import url("../css/custom/pepper-grinder/jquery.ui.all.css");
	#dataTable {padding: 0;margin:0;width:100%;}
	#dataTable_wrapper{width:100%;}
	#dataTable_wrapper th {cursor:pointer} 
	#dataTable_wrapper tr.odd {color:#000; background-color:#FFF}
	#dataTable_wrapper tr.odd:hover {color:#333; background-color:#CCC}
	#dataTable_wrapper tr.odd td.sorting_1 {color:#000000; background-color:#ffffff}
	#dataTable_wrapper tr.odd:hover td.sorting_1 {color:#000; background-color:#666666}
	#dataTable_wrapper tr.even {color:#FFF; background-color:#666}
	#dataTable_wrapper tr.even:hover, tr.even td.highlighted{color:#EEE; background-color:#333}
	#dataTable_wrapper tr.even td.sorting_1 {color:#000000; background-color:#ffffff}
	#dataTable_wrapper tr.even:hover td.sorting_1 {color:#FFF; background-color:#ffffff}
		
/* EndOAWidget_Instance_2586523 */
</style>
<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2586523" binding="#dataTable" />
</oa:widgets>
-->
</script>
</head>

<style type="text/css">
a {
	color: #F60;
}
a:visited {
	color: #F60;
	text-decoration: none;
}
a:hover {
	color: #F40;
	text-decoration: underline;
}
a:active {
	color: #F60;
	text-decoration: none;
}
a:link {
	text-decoration: none;
}
.dashpost{
	width:600px;
	border:0px solid;
	display:inline-block;
	margin-top:5px;
}
.imgdp{
	width:74px;
	margin-right:-4px;
	background-image:url(../images/dp-bg.png);
	background-repeat:no-repeat;
	display:inline-block;
}
.imgdp a.radius img{
	cursor: pointer;
	border-radius: 30em;
	-webkit-border-radius: 30em;
	-moz-border-radius: 30em;
	-o-border-radius: 30em;
	width: 54px;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
}
.imgdp a img:hover{
	opacity: 0.7;
}
.postcontainer{
	width:500px;
	display:inline-block;
	vertical-align:top;
	padding:5px;
	border:solid 1px #F9A32F;
	min-height:60px;
}
.postcontainer_com{
	width:316px;
	display:inline-block;
	vertical-align:top;
	padding:5px;
	border:solid 1px #F9A32F;
	min-height:40px;
}
.nameplate{
	font-family:Arial, Helvetica, sans-serif;
	color:#F60;
	font-size:14px;
	font-weight:bold;
}
.nameplate span {
	font-size:12px;
	color:#999;
	font-weight:normal;
}
.update{
	width:490px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:16px;
	color:#333;
	font-weight:normal;
	font-style:normal;
}
.pluspost{
	margin-top:5px;
	width:490px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	color:#999;
	font-weight:normal;
	font-style:normal;
}
.pluspost a{
	background-color:#2B3554;
	color:#F0F1F2;
	padding:3px;
	margin-right:1px;
	margin-left:1px;
	display:inline-block;
}
.pluspost a:hover{
	background-color:#425280;
	color:#F0F1F2;
	padding:3px;
}
.deletepost a{
	background-color:#D99066;
	color:#F0F1F2;
	padding:3px;
	margin-right:1px;
	margin-left:1px;
}
.deletepost a:hover{
	background-color:#ECC7B0;
	color:#F0F1F2;
	padding:3px;
}
.comment{
	margin-top:5px;
}
.postcomment{
	margin-top:5px;
	padding:3px;
	font-family:Arial, Helvetica, sans-serif;
	width:495px;
}
#txtKeyword {
	height: 25px;
	width: 435px;
	border: 1px solid #999;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	padding: 3px;
	float:left;
	padding-right:40px;
	border:#F9A32F solid 1px;
}
#searchSubmit{
    background: transparent url("../images/paperfly-icon-com.png") no-repeat;
    width: 22px;
    height: 22px;
    border: none;
    cursor: pointer;
    margin-left: -30px; /* image is 20x20px, so leave little extra */
	margin-top:8px;
	margin-right:12px;
}
#awesomepost{
    width: auto;
	height:25px;
	background-color:#A64F1C;
	color:#F0F1F2;
	font-size:12px;
	font-weight:bold;
	padding:3px;
	cursor:pointer;
	border:none;
	display:inline-block;
}
#awesomecom{
    background: transparent url("../images/Emoticons-Cool-icon-com.png") no-repeat;
    width: 85px;
    height: 20px;
    border: none;
    cursor: pointer;
	color:#ffa854;
}
.update img {
	width:500px;
	height:auto;
	margin-top:5px;
	margin-bottom:5px;
	min-width:500px;
	max-width:500px;
}
.update object {
	width:500px;
	height:auto;
	max-width:500px;
	min-width:500px;
}
.pluspost form{
	display:inline-block;
}
</style>
<body  style="background-color:#FFF">
<script type="text/javascript">
// BeginOAWidget_Instance_2586523: #dataTable

$(document).ready(function() {
	oTable = $('#dataTable').dataTable({
		"bJQueryUI": true,
		"bScrollCollapse": false,
		"sScrollY": "200px",
		"bAutoWidth": true,
		"bPaginate": true,
		"sPaginationType": "two_button", //full_numbers,two_button
		"bStateSave": true,
		"bInfo": false,
		"bFilter": false,
		"iDisplayLength": 25,
		"bLengthChange": false,
		"aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]]
	});
} );
		
// EndOAWidget_Instance_2586523
</script>
<table cellpadding="0" cellspacing="0" border="0" id="dataTable" height="800px">
<tbody>
<?php
include("../predef/usable.php");
session_start();
include('conn2.php');
$result = mysqli_query($con,"SELECT * FROM fox_updates ORDER By upID desc LIMIT 10");
while($row = mysqli_fetch_array($result))
{
	echo "
	<tr>
    <td>
	<div class='container-main'>
	<div class='dashpost'>
	<div class='imgdp'><a href='' class='radius'>".dp($row['aID'])."</a></div>
    <div class='postcontainer'>
    	<div class='nameplate'>" .fullname($row['aID']). "&nbsp<span>" .position($row['aID'])." (".$row['datetime'].")</span></div>
		<div class='update'>". $row['status']."<div>
		<div class='pluspost'>
		
		<form id='form1' name='form1' method='post' action='awesome.php'>
        <input type='submit' name='awesome' id='awesomepost' accesskey='a' tabindex='3' value='+".awesomecount($row['upID'])."' />
        <input type='hidden' name='txtaID' value='".$_SESSION['member_id']."'/>
		<input type='hidden' name='txtupID' value='".$row['upID']."'/>
        </form>
		
		";
		if($row['aID'] == $_SESSION['member_id'])
		{
			echo "<a  href=\"deletecomment.php?id=".$row['upID']."\">Delete Post</a>";	
		}		
		echo" <a href='#'>Jairenz Batu</a>	
		</div>
		<div class='comment'>
		
			<form method='post' action='comment.php'name='frmSearch'>
            <input type='hidden' name='txtaID' value='".$_SESSION['member_id']."'/>
			<input type='hidden' name='txtupID' value='".$row['upID']."'/>
            <input name='txtComment' maxlength='140' type='text' id='txtKeyword' tabindex='1' value='' onblur='if (this.value == '') {this.value = 'comment here';}' onfocus='if (this.value == 'comment here') {this.value = '';}'/>
        	<input name='btn_search' type='submit'  id='searchSubmit' value=''/>
            </form>
			
			
			
		</div>
    </div>
	</div>
	</div>
	</td>
    </tr>";
}
?>

</tbody>
</table>
</body>
</html>