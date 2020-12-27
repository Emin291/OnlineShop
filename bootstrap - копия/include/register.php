<?php 
session_start();

$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'users';

$db = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);
$db->set_charset("utf8");

$firstname=$_POST['username'];
$password=$_POST['psw'];
$password_repeat = $_POST['psw-repeat'] ;
$email=$_POST['email'];
$phone = $_POST['phone'];

$_SESSION["username"]=$firstname;
$_SESSION["psw"]=$password;
$_SESSION["psw-repeat"]=$password_repeat;
$_SESSION["email"]=$email;
$_SESSION["phone"]=$phone;





if  (!empty($firstname) && strpos($email, '@')>0  && $password==$password_repeat ) {
$query = "INSERT INTO   `anunner`  (username,email,number1,password) VALUES ('$firstname','$email', '$phone',md5('$password'))";

	$_SESSION['exats']='exats';
header('Location:../log_out/index1.php');
mysqli_query($db,$query);


}	

elseif ($password_repeat != $password){
	header('Location:../include1/index.php');
	$_SESSION["message"]='paroli ne sovpadayut';
	
}



// else if (mysqli_num_rows(== $email)!=0){
// 	header('Location:../index.php');
// 	$_SESSION["message"]='email uje est';
// }


?>