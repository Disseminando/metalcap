<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_con02 = "localhost";
$database_con02 = "metalcap";
$username_con02 = "root";
$password_con02 = "";
$con02 = mysql_pconnect($hostname_con02, $username_con02, $password_con02) or trigger_error(mysql_error(),E_USER_ERROR); 
?>