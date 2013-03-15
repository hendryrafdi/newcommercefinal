<?php
	include 'config.php';
	
	$id = $_GET['del'];
	
	$delete = mysql_query("delete from user where id_user = '$id'");
	if($delete){
		echo "<script>alert('Data Berhasil Di Hapus')</script>";
		echo "<script>window.location=('../cms/setting/user.php');</script>";
	}
	else{
		echo "<script>alert('Terjadi Kesalahan')</script>";
		echo "<script>window.location=('../cms/setting/user.php');</script>";
		}
?>