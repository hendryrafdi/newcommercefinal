<?php
include 'config.php';

$input = $_GET['stats'];
$id = $_GET['id'];

if($input == 'active'){
    $query = mysql_query("update orders set status='active' where id_order='$id'");
    if($query){
        echo "<script>alert('Order active'); window.location=('../setting/order.php');</script>";
    } else {
        echo "<script>alert('Failed to active'); window.location=('../setting/order.php');</script>";
    }
} else if ($input == 'deactive'){
    $query = mysql_query("update orders set status='deactive' where id_order='$id'");
    if($query){
        echo "<script>alert('Order deactive'); window.location=('../setting/order.php');</script>";
    } else {
        echo "<script>alert('Failed to deactive'); window.location=('../setting/order.php');</script>";
    }
}
?>
