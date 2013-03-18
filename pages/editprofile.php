<?php
include 'config.php';

$id = $_POST[id_user];
$jk = $_POST[jk];
$f_name = $_POST[f_name];
$l_name = $_POST[l_name];

$query = mysql_query("update user set gender='$jk', f_name='$f_name', l_name='$l_name' where id_user = '$id'");
if($query) {
    echo "<script>alert('Data berhasil diubah'); window.location=('../profile.php')</script>";
} else {
    echo "<script>alert('Data gagal diubah'); window.location=('../profile.php')</script>";
}
?>
