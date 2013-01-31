<?php
include "config.php";
class Paging{
    function cariPosisi($batas){
    if(empty($_GET[halaman])){
        $posisi = 0;
        $_GET[halaman] = 1;
    }
    else{
        $posisi = ($_GET[halaman]-1) * $batas;
    }
    return $posisi;
    }
    
    function jumlahHalaman($jmldata,$batas){
        $jmlhalaman = ceil($jmldata/$batas);
        return $jmlhalaman;
    }
    
    function navHalaman($halaman_aktif, $jmlhalaman){
        $link_halaman = "";
        
        for($i=1; $i<=$jmlhalaman; $i++){
            if($i == $halaman_aktif){
                $link_halaman .= "<b>$i</b> |";
            }
            else{
                $link_halaman .= "<a href=$_SERVER[PHP_SELF]?halaman=$i>$i</a> |";
            }
            $link_halaman .= "";
        }
        return $link_halaman;
    }
}
?>
