<?php
include("../this.php");
error_reporting(E_ERROR); 
function checkAccount()
{
	include("generate.php");
	include("this.php");
	include("../no-game/conn2.php");
	$result = mysqli_query($con,"SELECT * FROM `ng_account` WHERE `uID` = '".$_SESSION['member_id']."'");
	$count=mysqli_num_rows($result);
	if ($count < 1)
	{	
		
		$result3 = mysqli_query($con,"SELECT fname, lname, stdno FROM fox_users WHERE uID = '".$_SESSION['member_id']."'");
		while($rec = mysqli_fetch_array($result3))
		{
			$name = $rec['fname'] . $rec['lname'];
			$stdo = $rec['stdno'];
		}
		$pkey =  generate_key("default", $stdo, $name);
		$rkey =  generate_key("recv", $stdo, $name);
		$skey =  generate_key("send", $stdo, $name);
		
		if (isset($_SESSION['member_id']))
		{
		$strSQL = "INSERT INTO `ng_account`(`accountID`, `uID`, `secode`, `rkey`, `skey`, `balance`) VALUES (NULL,'".$_SESSION['member_id']."','".$pkey."','".$rkey."','".$skey."','30')";
		$objQuery = mysql_query($strSQL);
		if($objQuery)  
		{
			header("refresh:0;url=../no-game/index.php?n=done");
		}
		else  
		{ 
			echo "Error Save" . $strSQL;  
		}
		}
		header("refresh:0;url=../no-game/index.php?n=notset");
		
	}
}
function dp($user_id)
{
	include("../no-game/conn2.php");
	$result3 = mysqli_query($con,"SELECT * FROM fox_images WHERE aID ='".$user_id."' AND type ='dp' ORDER BY imgID DESC LIMIT 1");
	$countimg=mysqli_num_rows($result3);
	if ($countimg > 0)
	{
		while($row3 = mysqli_fetch_array($result3))
  		{
 		$imgdp = '<img src="'.$row3['url'].'" width="54" height="54"/>';
  		}
	}
	else
	{
		$imgdp = '<img src="../images/user.png" width="54" height="54"/>';
	}
	return $imgdp;
}
function basicinfo($info)
{
	include("../no-game/conn2.php");
	$result3 = mysqli_query($con,"SELECT * FROM ng_account WHERE uID = '".$_SESSION['member_id']."'");
	while($rec = mysqli_fetch_array($result3))
	{
		$codename = $rec['codename'];
		$rkey = $rec['rkey'];
		$scode = $rec['secode'];
		$motto = $rec['motto'];
	}
	if($info == "codename")
	{
		return $codename;
	}
	elseif($info == "rkey")
	{
		return $rkey;
	}
	elseif($info == "scode")
	{
		return $scode;
	}
	elseif($info == "motto")
	{
		return $motto;
	}
}
function checkinfo()
{
	include("../no-game/conn2.php");
	$result3 = mysqli_query($con,"SELECT * FROM ng_account WHERE uID ='".$_SESSION['member_id']."'");
	
	while($row3 = mysqli_fetch_array($result3))
	{
		if ($row3['codename'] == ""){
		
	echo '
	 <script type="text/javascript">
	$(document).ready()
	{
		$(\'#basicModal\').modal(\'show\')
	}
    </script>
	
		';
		}
	}
}
function balance()
{
	include("../no-game/conn2.php");
	$result3 = mysqli_query($con,"SELECT * FROM ng_account WHERE uID ='-1'");
	while($row3 = mysqli_fetch_array($result3))
    {
 		$bal = $row3['balance'];
  	}
	return $bal;
	
}
function balance_per($id)
{
	include("../no-game/conn2.php");
	$result3 = mysqli_query($con,"SELECT balance FROM ng_account WHERE uID ='".$id."'");
	while($row3 = mysqli_fetch_array($result3))
    {
 		$bal = $row3['balance'];
  	}	
	return $bal;
}
function stdno($id)
{
	include("../no-game/conn2.php");
	$result3 = mysqli_query($con,"SELECT stdno FROM fox_users WHERE uID ='".$id."'");
	while($row3 = mysqli_fetch_array($result3))
    {
 		$no = $row3['stdno'];
  	}
	return $no;	
}
function fullname($id)
{
	include("../no-game/conn2.php");
	$result3 = mysqli_query($con,"SELECT fname, lname FROM fox_users WHERE uID ='".$id."'");
	while($row3 = mysqli_fetch_array($result3))
    {
 		$fullname = $row3['fname']." ".$row3['lname'];
  	}
	return $fullname;	
}
function balance_rec($rk)
{
	include("../no-game/conn2.php");
	$result3 = mysqli_query($con,"SELECT balance FROM ng_account WHERE rkey ='$rk'");
	while($row3 = mysqli_fetch_array($result3))
    {
 		$bal = $row3['balance'];
  	}
	return $bal;
	
}
function codename($type, $id)
{
	include("../no-game/conn2.php");
	if($type == 1){
		$result3 = mysqli_query($con,"SELECT codename FROM ng_account WHERE uID ='".$id."'");
	}
	elseif($type == 2){
		$result3 = mysqli_query($con,"SELECT codename FROM ng_account WHERE rkey ='".$id."'");
	}
	
	while($row3 = mysqli_fetch_array($result3))
    {
 		$codename = $row3['codename'];
  	}
	return $codename;
	
}
function leaderboard()
{
	$i = "1";
	include("../no-game/conn2.php");
	$result3 = mysqli_query($con,"SELECT codename, balance, motto, uID, rkey FROM ng_account WHERE accountID != '-1' ORDER BY balance DESC, uID DESC LIMIT 10");
	while($row3 = mysqli_fetch_array($result3))
    {
		
 		echo "
		<tr>
          <td>".$i."</td>
          <td>".fullname($row3['uID']). " (". $row3['codename'] .")" . $row3['rk1ey'] . "</td>
          <td>".$row3['balance']."</td>
          <td>".$row3['motto']."</td>
        </tr>	
		";
		$i++;
  	}
}
function leaderboard2()
{
	$i = "1";
	include("../no-game/conn2.php");
	$result3 = mysqli_query($con,"SELECT codename, balance, motto, uID, rkey FROM ng_account WHERE accountID != '-1' ORDER BY balance DESC, uID DESC LIMIT 10");
	while($row3 = mysqli_fetch_array($result3))
    {
		
 		echo "
		<tr>
          <td>".$i."</td>
          <td>".fullname($row3['uID']). " (". $row3['codename'] .") - " . $row3['rkey'] . "</td>
          <td>".$row3['balance']."</td>
          <td>".$row3['motto']."</td>
        </tr>	
		";
		$i++;
  	}
}
function year($uid)
{
	include("../no-game/conn2.php");
	$result1 = mysqli_query($con,"SELECT * FROM fox_users WHERE uID='".$uid."'");
  	while($row1 = mysqli_fetch_array($result1))
  	{
		$year =  $row1['yearlevel'];
  	}
	return $year;
}

function top()
{
	$i = "1";
	include("../no-game/conn2.php");
	$result3 = mysqli_query($con,"SELECT codename, balance, uID, motto FROM ng_account WHERE accountID != '-1' ORDER BY balance DESC, uID DESC LIMIT 3");
	while($row3 = mysqli_fetch_array($result3))
    {
		echo '
		<li>
        <div class="ch-item ch-img-1">        
          <div class="ch-info-wrap">
            <div class="ch-info">
              <div class="ch-info-front ch-img-'.year($row3['uID']).'"></div>
              <div class="ch-info-back">
                <h3>'.$i.'</h3>
                <p>'.$row3['codename'].'<br><span style="font-size:30px">'.$row3['balance'].'</span></p>
              </div>  
            </div>
          </div>
        </div>
      </li>
		';
		$i++;
  	}
}
function dashboard()
{
	$i = "1";
	include("../no-game/conn2.php");
	$result3 = mysqli_query($con,"SELECT * FROM ng_updates ORDER BY upID DESC LIMIT 20");
	while($row3 = mysqli_fetch_array($result3))
    {
		
 		echo "
		<tr>
			<td>".$i."</td>
          <td align='left'>".$row3['update']."</td>
          <td>".textime($row3['time'])."</td>
        </tr>	
		";
		$i++;
  	}
}
function cgc()
{
	$i = "1";
	include("../no-game/conn2.php");
	$result3 = mysqli_query($con,"SELECT * FROM ng_cgc ORDER BY codeID DESC");
	while($row3 = mysqli_fetch_array($result3))
    {
		
 		echo "
		<tr>
		  <td>".$i."</td>
          <td>".$row3['count']."/".$row3['maxredem']."</td>
		  <td>".$row3['totalpoints']."</td>
		  <td>".$row3['indipoints']."</td>
		  <td>".$row3['code']."</td>
        </tr>	
		";
		$i++;
  	}
}
function profcodes($pID)
{
	$i = "1";
	include("../no-game/conn2.php");
	$result3 = mysqli_query($con,"SELECT * FROM ng_pcode WHERE profID = '".$pID."' ORDER BY pcID, count");
	while($row3 = mysqli_fetch_array($result3))
    {
		
 		echo "
		<tr>
		  <td>".$i."</td>
          <td>".$row3['count']."/1</td>
		  <td>".$row3['amount']."</td>
		  <td>".$row3['code']."</td>
        </tr>	
		";
		$i++;
  	}
}
function updatedash($type, $sender, $receiver, $amount)
{
	include("this.php");
	include("../this.php");
	$t = time();
	if ($type == 'trans'){
		$update = $sender ." transferred ". $amount ." points to " . $receiver;	
	}
	elseif ($type == 'cgc'){
		$update = "The Council Generated a redeemable code. Total amount of ". $amount;	
	}
	elseif ($type == 'redem'){
		$update = $sender . " just redeemed ". $amount . " points from the council.";
	}
	elseif ($type == 'redemprof'){
		$update = $sender . " just redeemed ". $amount . " points from a professor.";
	}
	elseif ($type == 'tricked'){
		$update = $sender . " just got ". $amount . " points from tricking a friend.";
	}
	elseif ($type == 'new'){
		$update = $sender . " just created an account and has 30 points.";
	}
	$strSQL = "INSERT INTO `ng_updates` (`upID`, `time`, `update`, `uID`) VALUES (NULL, '".$t."', '".$update."', '".$_SESSION['member_id']."')";
	$objQuery = mysql_query($strSQL);
}
function redeem($code, $type)
{
	include("this.php");
	include("../this.php");
	$strSQL = "INSERT INTO `ng_validate`(`vID`, `uID`, `code`, `type`) VALUES (NULL,'".$_SESSION['member_id']."','".$code."','".$type."')";
	$objQuery = mysql_query($strSQL);
}
function textime($upTimeStamp)
{
$time = time(); //TIMESTAMP OF THE SERVER


    $stamp = $upTimeStamp;
    $diff = $time-$stamp; //DIFFERENCE OF POSTED TIMESTAMP & CURRENT TIMESTAMP
    
    //DIVIDES THE DIFFERENCS TO GET THE GREATEST UNIT OF TIME
    switch($diff){
        case ($diff<60):
            $count = $diff;
            $int = "seconds";
            if($count==1){
                $int = substr($int, 0, -1);
            }
        break;
        
        case ($diff>=60&&$diff<3600):
            $count = floor($diff/60);
            $int = "minutes";
            if($count==1){
                $int = substr($int, 0, -1);
            }
        break;
        
        case ($diff>=3600&&$diff<60*60*24):
            $count = floor($diff/3600);
            $int = "hours";
            if($count==1){
                $int = substr($int, 0, -1);
            }
        break;
        
        case ($diff>=60*60*24&&$diff<60*60*24*7):
            $count = floor($diff/(60*60*24));
            $int = "days";
            if($count==1){
                $int = substr($int, 0, -1);
            }
        break;
        
        case ($diff>=60*60*24*7&&$diff<60*60*24*30):
            $count = floor($diff/(60*60*24*7));
            $int = "weeks";
            if($count==1){
                $int = substr($int, 0, -1);
            }
        break;
        
        case ($diff>=60*60*24*30&&$diff<60*60*24*365):
            $count = floor($diff/(60*60*24*30));
            $int = "months";
            if($count==1){
                $int = substr($int, 0, -1);
            }
        break;
        
        case ($diff>=60*60*24*30*365&&$diff<60*60*24*365*100):
            $count = floor($diff/(60*60*24*7*30*365));
            $int = "years";
            if($count==1){
                $int = substr($int, 0, -1);
            }
        break;
    }
    
	$timetext = $count.' '.$int.' ago';
	
	return $timetext;

}
?>