<?php 
session_start();

$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'users';

$db = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);
$db->set_charset("utf8");
$stugum=0;


$login = $_POST['login'];
$password = $_POST['password'];




$checkuser = mysqli_query($db , "SELECT * FROM  anunner WHERE `username` = '$login' or `email` = '$login'  AND password= md5('$password') ");
$data = mysqli_num_rows($checkuser); 

if ($data>0) {
	header('Location:../include1/index.php');

	 $_SESSION["stugum"]='stugum';
	 $_SESSION["login"]= $_POST['login'];
	 $_SESSION['password']=$_POST['password'];
}



elseif($data==0){
header('Location:../include1/index.php');
	$_SESSION["message1"]='ayspisi akk goyutyun chuni';
}
 ?>
