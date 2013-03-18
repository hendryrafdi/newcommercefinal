<?php
include 'config.php';

$id = $_POST[id_user];
$email = $_POST[email];

$update = mysql_query("update user set email='$email' where id_user = '$id'");
if ($update) {
    echo "<script>alert('email berhasil diubah'); window.location=('../profile.php')</script>";
} else {
    echo "<script>alert('email gagal diubah'); window.location=('../profile.php')</script>";
}
?>
