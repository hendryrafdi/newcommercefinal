<?php
	include 'config.php';
	
	$id = $_POST[id_user];
	$fn = $_POST[f_name];
	$ln = $_POST[l_name];
	$gender = $_POST[gender];
	$bp = $_POST[birthday_place];
	$b = $_POST[birthday];
	$ad = $_POST[address];
	$telp = $_POST[telp];
	$em = $_POST[email];
	$pw = $_POST[password];
	$level = $_POST[level];
	
	$sql = mysql_query("update user set f_name='$fn', l_name='$ln', gender='$gender', birthday_place='$bp', birthday='$b', address='$ad', telp='$telp', email='$em', password='$pw', level='$level' where id_user = $id");
	
	if($sql){
		echo "<script>alert('Data Berhasil Di Update')</script>";
		echo "<script>window.location=('../cms/setting/user.php');</script>";
	}
	else{
		echo "<script>alert('Terjadi Kesalahan')</script>";

		}
?>