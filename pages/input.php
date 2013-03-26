<?php

session_start();
include "config.php";
include "tanggal.php";

$input = $_GET[input];
$edit = $_GET[edit];
$sid = session_id();

$inputform = $_GET[inputform];

if ($input == 'add') {

    $sql = mysql_query("SELECT id_product FROM shoppingcart WHERE id_product='$_GET[id]' AND id_session='$sid'");
    $num = mysql_num_rows($sql);
    if ($num == 0) {
        $sql = mysql_query("select *from product where id_product = '$_GET[id]'");
        $pancing = mysql_fetch_array($sql);
        mysql_query("INSERT INTO shoppingcart(id_product,id_session,shopping_date,qty,total)VALUES('$_GET[id]','$sid','$tgl_sekarang','1','$pancing[price]')");
    } else {
        $sql = mysql_query("select *from product where id_product = '$_GET[id]'");
        $pancing = mysql_fetch_array($sql);
        $harga = $pancing[price];
        $total = $harga + $harga;
        mysql_query("UPDATE shoppingcart SET qty = qty + 1, total='$total' WHERE id_session = '$sid' AND id_product='$_GET[id]'");
    }
    deletecart();
    header('location:../shoppingcart.php');
} elseif ($input == 'delete') {
    mysql_query("DELETE FROM shoppingcart WHERE id_shopping='$_GET[id]'");
    header('location:../shoppingcart.php');
}
else if($input == 'edit'){
        $sql = mysql_query("select *from product where id_product = '$_POST[id_product]'");
        $pancing = mysql_fetch_array($sql);
	$update = $_POST[qtyupd];
        $total = $update * $pancing[price];
	mysql_query("UPDATE shoppingcart SET  qty = '$update', total = '$total' WHERE  id_shopping = '$_GET[id]'");
	mysql_query("UPDATE `commerce_final`.`shoppingcart` SET  `qty` = '$update' WHERE  `shoppingcart`.`id_shopping` = '$_GET[id]';");
	$cir = mysql_query("select *from product");
	$harga = mysql_fetch_array($cir);
	$car = mysql_query("select *from shoppingcart");
	$qty = mysql_fetch_array($car);
	
	$hasil = $qty[qty] * $harga[price];
	header('location:../shoppingcart.php');
	
} elseif ($input == 'inputform') {

    function cart_content() {
        $ct_content = array();
        $sid = session_id();
        $sql = mysql_query("SELECT * FROM shoppingcart WHERE id_session='$sid'");

        while ($r = mysql_fetch_array($sql)) {
            $ct_content[] = $r;
        }
        return $ct_content;
    }

    $ct_content = cart_content();
    $jml = count($ct_content);
    $now = date("Ymd");
    for ($i = 0; $i < $jml; $i++) {
        mysql_query("INSERT INTO orders(id_order,id_user,id_product,customer_name,customer_company,address,city,postcode,state,country,telp,qty,payment_method,status,date_purchased,last_modify) 
				VALUES (NULL,'$_SESSION[id_user]',{$ct_content[$i]['id_product']},'$_POST[f_name] $_POST[l_name]','$_POST[company]','$_POST[address]','$_POST[city]','$_POST[postcode]','$_POST[state]','$_POST[country]','$_POST[telp]',{$ct_content[$i]['qty']},'$_POST[pembayaran]','pending','$now',NULL)");
    }
    for ($i = 0; $i < $jml; $i++) {
        mysql_query("DELETE FROM shoppingcart WHERE id_shopping = {$ct_content[$i]['id_shopping']}");
    }
    echo "<script>window.alert('Terima Kasih Pesanan Anda Sedang Kami Proses');
        window.location=('../index.php')</script>";
}

function deletecart() {
    $del = date('Y-m-d', mktime(0, 0, 0, date('m'), date('d') - 1, date('Y')));
    mysql_query("DELETE FROM shoppingcart WHERE shopping_date < '$del'");
}

