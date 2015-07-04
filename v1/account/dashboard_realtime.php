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
include('../predef/verify.php');
include('conn2.php');
include("../this.php");

$strSQL = "SELECT * FROM fox_updates ";
$result = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");  
$Num_Rows = mysql_num_rows($result);    

$Per_Page = 20;   // Per Page  
      
    $Page = $_GET["Page"];  
    if(!$_GET["Page"])  
    {  
    $Page=1;  
    }  
      
    $Prev_Page = $Page-1;  
    $Next_Page = $Page+1;  
      
    $Page_Start = (($Per_Page*$Page)-$Per_Page);  
    if($Num_Rows<=$Per_Page)  
    {  
    $Num_Pages =1;  
    }  
    else if(($Num_Rows % $Per_Page)==0)  
    {  
    $Num_Pages =($Num_Rows/$Per_Page) ;  
    }  
    else  
    {  
    $Num_Pages =($Num_Rows/$Per_Page)+1;  
    $Num_Pages = (int)$Num_Pages;  
    }
	
	
$strSQL .="  ORDER By upID desc LIMIT $Page_Start , $Per_Page";  
$result  = mysql_query($strSQL);

while($row = mysql_fetch_array($result))
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
            <input name='txtComment' maxlength='140' type='text' autocomplete='off' id='txtKeyword' tabindex='1' value='' onblur='if (this.value == '') {this.value = 'comment here';}' onfocus='if (this.value == 'comment here') {this.value = '';}'/>
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
<br>  
<br>  
<br>  
    Page :  
    <?php  
    if($Prev_Page)  
    {  
    echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page'><< Back</a> ";  
    }  
      
    for($i=1; $i<=$Num_Pages; $i++){  
    if($i != $Page)  
    {  
    echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> ]";  
    }  
    else  
    {  
    echo "<b> $i </b>";  
    }  
    }  
    if($Page!=$Num_Pages)  
    {  
    echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page'>Next>></a> ";  
    }  ?>
</div>
<div style="width:170px; display: inline-block; background-color:#999; vertical-align:top; margin-top:10px" id="crossfadegt">
	<img src="../images/ad sample.jpg" class = "img1" width="189" height="417" />
	<img src="../images/acq_ad.png" class = "img2" width="189" height="417" />
	<img src="../images/ad sample.jpg" class = "img3" width="189" height="417" />
	<img src="../images/acq_ad.png" class = "img4" width="189" height="417" />
</div>
</body>
</html>