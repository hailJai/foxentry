<?php
include('predef/usable.php');
if(user_info('user_level') == '1'){
	echo "You're a developer";
}
else{
	echo "You're a user";
}


?>