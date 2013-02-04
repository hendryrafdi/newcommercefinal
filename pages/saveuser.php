<?php
include"config.php";
$f_name = $_POST[f_name];
$l_name = $_POST[l_name];
$gender = $_POST[gender];
$birthday_p = $_POST[birthday_place];
$birthday = $_POST[birthday];
$adress = $_POST[adress];
$telp = $_POST[telp];
$email = $_POST[email];
$password = $_POST[password];

$save = mysql_query("insert into user values(null,'$f_name', '$l_name', '$gender', '$birthday_p', '$birthday', '$adress', '$telp', '$email', '$password')");
if ($save) {
    header("location:../login.php?link=succes");
} else {
    header("location:../login.php?link=failed");
}
?>