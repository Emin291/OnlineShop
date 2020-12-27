<?php 
$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'users';

$db = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);
$db->set_charset("utf8");
?>