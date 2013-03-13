<?php
include 'config.php';
$telp = $_POST[telp];
$alamat = $_POST[alamat];
$fax = $_POST[fax];
$email  = $_POST[email];

$sintax = mysql_query("update contact set telp='$telp', alamat='$alamat', fax='$fax', email='$email' where id_contact='1'");
if($sintax){
    echo "<script>alert('Contact has been changed'); window.location=('../setting/contact.php')</script>";
} else {
    echo "<script>alert('Failed to change'); window.location=('../setting/contact.php')</script>";
} 
?>
