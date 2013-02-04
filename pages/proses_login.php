<?php
	inldue 'pages/config.php';
	error_repporting(0);
	$pass = md5($_POST[password]);
	
	$login = mysql_query("select *from user where id_user='$_POST[username]' AND password='$pass'");
	$_ketemu = mysql_num_rows($login);
	$r = mysql_fetch_array($login);
	
	//kalo username ama password nya ada
	
	if($ketemu > 0){
		session_start();
		session_register("password");
		$_SESSION[password] = $r[password];
		header('location:index.php')
	}
	else{
		echo "<script>
				window.alert('Username And Password Anda Salah');
				window.location=('index.php')
			</script>";
	}
?>