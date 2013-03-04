<?php
session_start();
if (empty($_SESSION[email]) AND empty($_SESSION[password])){
 echo "<center>Untuk mengakses halaman ini, Anda harus login terlebih dahulu<br>";
 echo "<a href=../login.html><b>Halaman Login</b></a></center>";
 }
else{
 include "config.php";
 if ($_SESSION['level']=='a'){
  $sql=mysql_query("SELECT * FROM user WHERE level='a'");
  $level=mysql_num_rows($sql);
  $r=mysql_fetch_array($sql);
   echo "Hi <b>$r[f_name] $r[l_name]</b><br><br>";
   echo "Andamasuk sebagai <b>Administrator</b><br>";
   echo "<script>window.location=('../index.php')</script>";
  }
  elseif ($_SESSION['level']=='u'){
    $sql=mysql_query("SELECT * FROM user WHERE level='u'");
    $level=mysql_num_rows($sql);
    $r=mysql_fetch_array($sql);
   echo "Anda tidak memiliki akses disini</b><br>";
   echo "<script>window.location=('../../index.php')</script>";
  }
 }
?>