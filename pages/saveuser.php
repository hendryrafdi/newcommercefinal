<?php
include"config.php";
session_start();
$f_name = $_POST[f_name];
$l_name = $_POST[l_name];
$gender = $_POST[gender];
$birthday_p = $_POST[birthday_place];
$birthday = $_POST[birthday];
$adress = $_POST[addres];
$telp = $_POST[telp];
$email = $_POST[email];
$password = $_POST[password];

$save = mysql_query("insert into user values(null,'$f_name', '$l_name', '$gender', '$birthday_p', '$birthday', '$adress', '$telp', '$email', '$password')");
if ($save) {
	$_SESSION[email] = $email;
    $shop = mysql_query("select *from shoppingcart");
		$isi = mysql_num_rows($shop);
		if($isi > 0){
			echo "<script>alert('Register success'); window.location=('../confirm.php')</script>";
		}
		else{
			echo "<script>alert('Register success'); window.location=('../index.php')</script>";
		}
} else {
    echo "<script>alert('Register failed'); window.location=('../login.php')</script>";
}
?>