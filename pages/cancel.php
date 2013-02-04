<?php 
include 'config.php';

$del = mysql_query("TRUNCATE TABLE  `shoppingcart`");

if($del){
	header("location: ../shoppingcart.php");
}
?>