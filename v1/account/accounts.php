<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Account Links</title>
<script src="../scripts/jquery-1.6.1.min.js" type="text/javascript"></script>
<script src="../scripts/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="../scripts/jquery.dataTables.columnFilter.js" type="text/javascript"></script>
<script src="../scripts/jquery.dataTables.pagination.js" type="text/javascript"></script>
<link href="../css/demo_table_jui.css" rel="stylesheet" type="text/css" />
<style type="text/css">
/* BeginOAWidget_Instance_2586523: #dataTable */

	@import url("../css/custom/base/jquery.ui.all.css");
	#dataTable {padding: 0;margin:0;width:100%;}
	#dataTable_wrapper{width:100%;}
	#dataTable_wrapper th {cursor:pointer} 
	#dataTable_wrapper tr.odd {color:#000; background-color:#FFF}
	#dataTable_wrapper tr.odd:hover {color:#666666; background-color:#CCC}
	#dataTable_wrapper tr.odd td.sorting_1 {color:#000; background-color:#999}
	#dataTable_wrapper tr.odd:hover td.sorting_1 {color:#000; background-color:#999999}
	#dataTable_wrapper tr.even {color:#FFF; background-color:#666}
	#dataTable_wrapper tr.even:hover, tr.even td.highlighted{color:#EEE; background-color:#333}
	#dataTable_wrapper tr.even td.sorting_1 {color:#CCC; background-color:#333}
	#dataTable_wrapper tr.even:hover td.sorting_1 {color:#FFF; background-color:#000}
		
/* EndOAWidget_Instance_2586523 */
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size:12px;
}
</style>
<script type="text/xml">
<oa:widgets>
  <oa:widget wid="2586523" binding="#dataTable" />
</oa:widgets>
</script>
</head>
<link type="text/css" href="../css/main-style.css" />
<body>
<div class="container-main" style="width:840px; display:inline-block"><br />
  Note that all Actions are Logged and Monitored.<br />
  <br />
  <table cellpadding="3" cellspacing="0" border="0" id="dataTable" style="margin-top:5px; width:830px">
    <thead>
      <tr>
        <th>ID</th>
    	<th>Name</th>
    	<th>Username</th>
    	<th>Section</th>
    	<th>Organization</th>
        <th>Payment</th>
    	<th>Action</th>
      </tr>
    </thead>
    <tbody>
      <!--Loop start, you could use a repeat region here-->
        <?php
		error_reporting(E_ERROR);
		include('../predef/verify.php');
		include('../account/conn2.php');
		$result3 = mysqli_query($con,"SELECT * FROM fox_users");
		while($row3 = mysqli_fetch_array($result3))
  		{
		echo "
		
		<tr style='border-bottom:solid 1px #000000;'>
    	<td>".$row3['uID']."</td>
    	<td>".$row3['fname']." ".$row3['lname']."</td>
    	<td>".$row3['uname']."</td>
		<td>".$row3['section']."</td>
    	<td>".$row3['organization']."</td>
		<td>".$row3['payment']."</td>
    	<td><center><a href='../csc/update_account.php?id=".$row3['uID']."'><img src='../images/textedit-icon.png' width='16' height='16'></a></center></td>
  		</tr>
		";
		}
?>
      <!--Loop end-->
    </tbody>
  </table>
</div>

  <script type="text/javascript">
// BeginOAWidget_Instance_2586523: #dataTable

$(document).ready(function() {
	oTable = $('#dataTable').dataTable({
		"bJQueryUI": true,
		"bScrollCollapse": false,
		"sScrollY": "400px",
		"bAutoWidth": true,
		"bPaginate": true,
		"sPaginationType": "full_numbers", //full_numbers,two_button
		"bStateSave": true,
		"bInfo": true,
		"bFilter": true,
		"iDisplayLength": 25,
		"bLengthChange": true,
		"aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]]
	});
} );
		
// EndOAWidget_Instance_2586523
  </script>
</body>
</html>