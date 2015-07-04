<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard</title>
<link href="../css/dash.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div style="width:610px; display:inline-block; padding-left:3px;">
<?php
include("../predef/usable.php");
session_start();
include('conn2.php');
include("../this.php");

$result = mysqli_query($con,"SELECT * FROM fox_updates ORDER By upID desc LIMIT 2");
while($row = mysqli_fetch_array($result))
{
	echo "
	<div class='container-main'>
	<div class='dashpost'>
	<div class='imgdp'><a href='' class='radius'>".dp($row['aID'])."</a></div>
    <div class='postcontainer'>
    	<div class='nameplate'>" .fullname($row['aID']). "&nbsp<span>" .position($row['aID'])." (".$row['datetime'].")</span></div>
		<div class='update'>". $row['status']."</div>
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
				
		echo awesomenames($row['upID'])."	
		</div>
		<div class='comment'>
		
			<form method='post' action='comment.php'name='frmSearch'>
            <input type='hidden' name='txtaID' value='".$_SESSION['member_id']."'/>
			<input type='hidden' name='txtupID' value='".$row['upID']."'/>
            <input name='txtComment' maxlength='140' type='text' id='txtKeyword' tabindex='1' value='' onblur='if (this.value == '') {this.value = 'comment here';}' onfocus='if (this.value == 'comment here') {this.value = '';}'/>
        	<input name='btn_search' type='submit'  id='searchSubmit' value=''/>
            </form>
			
			";
			
			
			$result4 = mysqli_query($con,"SELECT * FROM fox_comments WHERE upID='".$row['upID']."' ORDER By cID asc");
			while($row4 = mysqli_fetch_array($result4))
  			{
				echo "
				<div class='postcomment'>
				<div class='imgdp'><a href='' class='radius'>".dp($row4['aID'])."</a></div>
				<div class='postcontainer_com'>
            	<div class='nameplate'>".fullname($row4['aID'])."<span> " .position($row4['aID'])." (".$row4['datetime'].")</span></div>
            	".$row4['comment']."
        		</div>
            	</div>				
				";
			}
		echo "
		</div>
    </div>
	</div>
	</div>";
}
?>
</div>
<div style="width:170px; display: inline-block; background-color:#999; vertical-align:top; margin-top:10px"> <img src="../images/ad sample.jpg" width="189" height="417" />
</div>
</body>
</html>