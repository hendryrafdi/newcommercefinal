<?php
include"config.php";
session_start();
$f_name = $_POST[f_name];
$l_name = $_POST[l_name];
$gender = $_POST[gender];
$birthday_p = $_POST[birthday_place];
$birthday = $_POST[birthday];
$address = $_POST[address];
$telp = $_POST[telp];
$level = $_POST[level];
$email = $_POST[email];
$password = md5($_POST[password]);

$save = mysql_query("insert into user values(null,'$f_name', '$l_name', '$gender', '$birthday_p', '$birthday', '$address', '$telp', '$email', '$password','u')");
if ($save) {
	$_SESSION[email] = $email;
	$_SESSION[f_name] = $f_name;
	$_SESSION[l_name] = $l_name;
	$_SESSION[level] = $lavel;
	$_SESSION[telp] = $telp;
	$_SESSION[address] = $address;
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