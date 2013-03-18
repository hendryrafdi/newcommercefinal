<?php
include 'config.php';

$id = $_POST[id_user];
$old = $_POST[oldpass];
$new = $_POST[newpass];
$confirm = $_POST[confirm];

$panggil = mysql_query("select *from user where id_user = '$id'");
$data = mysql_fetch_array($panggil);
if ($data[password] == $old){
    if($new == $confirm){
        $query = mysql_query("update user set password='$confirm' where id_user='$id'");
        if($query){
            echo "<script>alert('Change Password Success'); window.location=('../profile.php')</script>";
        } else {
            echo "<script>alert('Change Password Failed'); window.location=('../profile.php')</script>";
        }
    } else {
        echo "<script>alert('Password doesnt match'); window.location=('../profile.php')</script>";
    }
} else {
    echo "<script>alert('Old Password Invalid'); window.location=('../profile.php')</script>";
}

?>
