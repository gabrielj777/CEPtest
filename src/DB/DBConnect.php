<?php
function connectMySQL() {
	$host = "localhost";
	$db   = "cep";
	$user = "root";
	$pass = "";

	$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR);
	return $con;
} 
?>