<?php

include 'config.php';

$login = mysql_query("SELECT * FROM user WHERE email='$_POST[email]' AND password='$_POST[password]'");
$hasil = mysql_num_rows($login);
$r = mysql_fetch_array($login);

if ($hasil > 0) {
    session_start();
    session_register("user_id");
    session_register("email");
    session_register("password");
    session_register("level");
    $_SESSION[user_id] = $r[user_id];
    $_SESSION[email] = $r[email];
    $_SESSION[f_name] = $r[f_name];
    $_SESSION[l_name] = $r[l_name];
    $_SESSION[password] = $r[password];
    $_SESSION[level] = $r[level];
    header('location:cek_admin.php');
} else {
    echo "LOGIN GAGAL! <br> <a href='../login.html'><< Kembali</a>";
}
?>
