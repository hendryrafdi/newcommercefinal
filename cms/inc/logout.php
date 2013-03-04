<?php
session_start();
session_destroy();
echo "<script>window.alert=('Logout success'); window.location=('../login.html')</script>";
?>