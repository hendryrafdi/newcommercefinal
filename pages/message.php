<?php 
include 'config.php';

$name = $_POST[name];
$email = $_POST[email];
$message = $_POST[message];

$save = mysql_query("insert into message values(NULL, '$name','$email','$message',now())");
if($save) {
	echo "<script>alert('Sent Success'); window.location=('../contact.php');</script>";
} else {
	echo "<script>alert('Sent Failed'); window.location=('../contact.php');</script>";
}
?>