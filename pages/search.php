<?php 
session_start();
include "config.php";
$key	=$_POST['keyword'];

if($key==NULL || $key==""){
	$_SESSION['search'] ="select * from product";
	header("location: ../product.php");
}
else{
$_SESSION['search'] ="select * from product where nm_product like '%".$key."%'";
header("location:../product.php");
}
?>