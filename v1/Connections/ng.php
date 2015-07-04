<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_ng = "localhost";
$database_ng = "a5584945_clients";
$username_ng = "root";
$password_ng = "claypass3*";
$ng = mysql_pconnect($hostname_ng, $username_ng, $password_ng) or trigger_error(mysql_error(),E_USER_ERROR); 
?>