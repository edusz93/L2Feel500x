<?php 
$hostname_acis = "192.99.181.42";
$username_acis = "root";
$password_acis = "kwixawppkl12";
$database_acis = "L2JBrazuca";
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$acis = mysqli_connect($hostname_acis, $username_acis, $password_acis, $database_acis);
?>