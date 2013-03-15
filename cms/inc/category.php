<?php
include 'config.php';

$input = $_GET['act'];

if ($input == 'save'){
    $nm = $_POST['nm_category'];
    
    $query = mysql_query("insert into category values(NULL,'$nm')");
    if($query){
        echo "<script>alert('kategory tersimpan'); window.location=('../category.php')</script>";
    } else {
        echo "<script>alert('kategory tidak tersimpan'); window.location=('../category.php')</script>";
    }
} else if ($input == 'edit'){
    $id = $_POST['id'];
    $nm1 = $_POST['nm_category'];
    
    $query1 = mysql_query("update category set nm_category = '$nm1' where id_category = '$id'");
    if($query1){
        echo "<script>alert('kategory berhasil diubah'); window.location=('../category.php')</script>";
    } else {
        echo "<script>alert('kategory gagal diubah'); window.location=('../category.php')</script>";
    }
}
?>
