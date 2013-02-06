<?php
	include 'config.php';
	$password    = $_POST['password'];
	$pass_md5 = md5($password);
	
	$login = mysql_query("select *from user where email='$_POST[email]' AND password='$password'");
	$ketemu = mysql_num_rows($login);
	$r = mysql_fetch_array($login);
	
	//kalo username ama password nya ada
	
	if($ketemu > 0){
		session_start();
		$_SESSION[id_user] = $r[id_user];
		$_SESSION[f_name] = $r[f_name];
		$_SESSION[l_name] = $r[l_name];
		$_SESSION[gender] = $r[gender];
		$_SESSION[birthday_place] = $r[birthday_place];
		$_SESSION[birthday] = $r[birthday];
		$_SESSION[address] = $r[address];
		$_SESSION[telp] = $r[telp];
		$_SESSION[email] = $r[email];
		$_SESSION[password] = $r[password];
		$shop = mysql_query("select *from shoppingcart");
		$isi = mysql_num_rows($shop);
		if($isi > 0){
			header("location: ../confrim.php");
		}
		else{
			header('location:../index.php');
		}
	}
	else{
		echo "<script>
				window.alert('Email And Password Anda Salah');
				window.location=('../login.php')
			</script>";
	}
?>