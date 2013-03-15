<?php 
include 'config.php';
$del = mysql_query("delete from product where id_product = '$_GET[del]'");
if($del) {
	echo "<script>alert('Delete Success'); window.location=('../product.php')</script>";
} else {
	echo "<script>alert('Delete Failed'); window.location=('../product.php')</script>";
}
?>