<?php
function generate_key($type, $stdno, $account)
{
	$length = 1;
	$user = "JAIRENZ";
	$account = str_replace(" ", "", $account);	
	
	$b = substr(str_shuffle($stdno), 0, $length);	
	$c = substr(str_shuffle($account), 0, $length);
	$d = substr(str_shuffle("ABCDEFGHIJKLNMOPQRSTUVWXYZ"), 0, $length);
	$e = substr(str_shuffle($user), 0, $length);
	
	
	switch ($b){
		case "0":
		$numray = 0123456789;
		break;
		
		case "1":
		$numray = 8;
		break;	
		
		case "2":
		$numray = 012345679;
		break;		
		
		case "3":
		$numray = 0;
		break;
		
		case "4":
		$numray = 012345978;
		break;
		
		case "5":
		$numray = 012349678;
		break;
		
		case "6":
		$numray = 012395678;
		break;
		
		case "7":
		$numray = 012945678;
		break;
		
		case "8":
		$numray = 019345678;
		break;
		
		case "9":
		$numray = 092345678;
		break;	
	}

	$a = substr(str_shuffle($numray), 0, $length);;
	
	if($type == "default"){
		$f = 1;
	}
	elseif($type == "transferred"){
		$f = 2;
	}
	elseif($type == "council"){
		$f = 3;
	}
	elseif($type == "prof"){
		$f = 4;
	}
	elseif($type == "send"){
		$f = 5;
	}
	elseif($type == "recv"){
		$f = 6;
	}
	else{
		$f = 0;
	}

	$g = 10 - (($a + $b)%10);
	
	$key = $a . $b . $c . $d . $e . $f . $g ;
	$key = strtoupper($key);
	//if(strlen($key) == 7){
		return  $key;
	//}
}
?>