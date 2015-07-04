<?php
include "usable.php";
include "this.php";
include "generate.php";
include "../no-game/conn2.php";
include "../predef/verify.php";
include "../joking.php";
$rcode = make_safe($_POST['code']);
$userid = $_SESSION['member_id'];
$def = $rcode{5};
if ($def == 3)
{
	if(isset($rcode) && ($rcode < 10000))
	{
		$strSQL = "SELECT * FROM ng_validate WHERE code = '".$rcode."' AND uID = '".$userid."' ";  
		$objQuery = mysql_query($strSQL);
		$count = mysql_num_rows($objQuery);
		if($count == 0)
		{
			$strSQL = "SELECT * FROM `ng_cgc` WHERE `code` LIKE '".$rcode."'";  
			$objQuery = mysql_query($strSQL);
			$count = mysql_num_rows($objQuery);
				if($count == 0)
				{
					echo $strSQL;
					header("refresh:2;url=../no-game/personal-info.php?complete=Invalid Code");
				}
			while ($objResult = mysql_fetch_array($objQuery))
			{
				if($objResult['count'] < $objResult['maxredem'])
				{
					$snb = $objResult['indipoints'] + balance_per($userid);	
					$strSQL = "UPDATE ng_account SET balance = '".$snb."' WHERE uID = '".$_SESSION['member_id']."'"; 
					$objQuery = mysql_query($strSQL);
					if($objQuery)  
					{
						$newcount = $objResult['count'] + 1;
						$total = $objResult['totalpoints'] - $objResult['indipoints'];
						$strSQL = "UPDATE ng_cgc SET count = '".$newcount."',totalpoints = '".$total."' WHERE code = '".$rcode."'"; 
						$objQuery = mysql_query($strSQL);
						if($objQuery)  
						{
							redeem($rcode, 'cgc');
							$sender = codename(1,$_SESSION['member_id']);
							updatedash("redem",$sender,'',$objResult['indipoints']);
							header("refresh:0;url=../no-game/personal-info.php?complete=true");
						}
						else  
						{ 
							echo "Error Save" . $strSQL;  
						}
					}
					else  
					{ 
						echo "Error Save" . $strSQL;  
					}
			}
			else  
			{ 
				echo "Error Save" . $strSQL;  
			}
		}
		
		}
		else
		{
			header("refresh:0;url=../no-game/personal-info.php?err=1");
		}
	}
}
elseif ($def == 4)
{
	if(isset($rcode)){ //check for the code if set
		$strSQL = "SELECT * FROM ng_pcode WHERE code = '".$rcode."' "; //select the code from the database  
		$objQuery = mysql_query($strSQL);
		$count = mysql_num_rows($objQuery);
		if($count == 0) //if no code found
		{
			header("refresh:0;url=../no-game/personal-info.php?complete=Invalid Code");
		}
		//else if code found
		while ($objResult = mysql_fetch_array($objQuery))
		{
			if($objResult['count'] < 1) //check if unredeemed
			{
				$snb = $objResult['amount'] + balance_per($_SESSION['member_id']);	
				$strSQL = "UPDATE ng_account SET balance = '".$snb."' WHERE uID = '".$_SESSION['member_id']."'"; 
				$objQuery = mysql_query($strSQL);
				if($objQuery)  
				{
					$newcount = $objResult['count'] + 1;
					$strSQL = "UPDATE ng_pcode SET count = '".$newcount."' WHERE code = '".$rcode."'"; 
					$objQuery = mysql_query($strSQL);
					if($objQuery)  
					{						
						$sender = codename(1,$_SESSION['member_id']);
						updatedash("redemprof",$sender,'',$objResult['amount']);
						header("refresh:0;url=../no-game/personal-info.php?complete=true");
					}
					else  
					{ 
						echo "Error Save" . $strSQL;  
					}
				}
				else  
				{ 
					echo "Error Save" . $strSQL;  
				}
			}
			else  
			{ 
				header("refresh:0;url=../no-game/personal-info.php?err=1");  //
			}
		}
		
	}
	else  
	{ 
		echo "Error Save" . $strSQL;  
	}
}
elseif ($def == 1)
{
	if(isset($rcode) && ($rcode != basicinfo("scode") && ($rcode < 10000))){
		$strSQL = "SELECT * FROM ng_account WHERE secode = '".$rcode."' "; //select the code from the database  
		$objQuery = mysql_query($strSQL);
		$count = mysql_num_rows($objQuery);
		
		if($count == 0) //if no code found
		{
			header("refresh:0;url=../no-game/personal-info.php?complete=Invalid Code");
		}
		while ($objResult = mysql_fetch_array($objQuery))
		{
			$newsec = generate_key("default",stdno($objResult['uID']),fullname($objResult['uID']));
			$snb = $objResult['balance'] + balance_per($_SESSION['member_id']);	
			$strSQL = "UPDATE ng_account SET balance = '".$snb."' WHERE uID = '".$_SESSION['member_id']."'"; 
			$objQuery = mysql_query($strSQL);
			if($objQuery)  
			{
				$strSQL = "UPDATE ng_account SET secode = '".$newsec."',balance = '0' WHERE secode = '".$rcode."'"; 
				$objQuery = mysql_query($strSQL);
				if($objQuery)  
				{						
					$sender = codename(1,$_SESSION['member_id']);
					updatedash("tricked",$sender,'',$objResult['balance']);
					header("refresh:0;url=../no-game/personal-info.php?complete=true");
				}
				else  
				{ 
					echo "Error Save" . $strSQL;  
				
				}
			}
			else  
			{ 
				echo "Error Save" . $strSQL;  
				
			}
		}
	}
}
else
{
	header("refresh:0;url=../no-game/personal-info.php?complete=Invalid Code");
}
?>