<?php
include 'config.php';

$input = $_GET['stats'];
$id = $_GET['id'];

if($input == 'active'){
    $query = mysql_query("update orders set status='active' where id_order='$id'");
    $test = mysql_query("select *from orders where id_order='$id'");
    $pan = mysql_fetch_array($test);
    $id_user = $pan[id_user];
    $brg = mysql_query("select *from product where id_product = '$pan[id_product]'");
    $b1 = mysql_fetch_array($brg);
    if($query){
        $qirim = mysql_query("select *from user where id_user = '$id_user'");
        $muncul = mysql_fetch_array($qirim);
        $subject = "Pesanan diterima";
        $message = "Hallo $muncul[f_name] $muncul[l_name], Pesanan anda $b1[nm_product] sebanyak $pan[qty] akan segera kami kirim ke:\n$pan[address] $pan[city] $pan[state] $pan[postcode]\n\nTerima kasih sudah berbelanja di Shopping Partner Online Store";
        mail($muncul[email], $subject, $message, "From: customer@shoppingpartner.com");
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
