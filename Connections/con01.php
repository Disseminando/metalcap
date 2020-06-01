<?php
/*
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_liga01 = "localhost:3306";
$database_liga01 = "metalcapnet_metalcap";
$username_liga01 = "metalcapnet";
$password_liga01 = "1404=A2b4m915";
$liga01 = mysql_pconnect($hostname_liga01, $username_liga01, $password_liga01) or trigger_error(mysql_error(),E_USER_ERROR); 
if(! $liga01 ) {
die('Could not connect: ' . mysql_error());
}
*/
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"

$hostname_con01 = "localhost";
$database_con01 = "metalcap";
$username_con01 = "root";
$password_con01 = "";
$con01 = mysql_pconnect($hostname_con01, $username_con01, $password_con01) or trigger_error(mysql_error(),E_USER_ERROR); 

?>