<?php
	include 'config.php';
	$get = $_GET[edt];
	
	$alamat		= "../images/product/";
	$namafolder	= $alamat;
	
	if(!empty($_FILES["upload"]["tmp_name"])){
			
			$jenis_gambar = $_FILES['upload']['type'];
			$ip = $_POST[id_product];
			$ic = $_POST[id_category];
			$np = $_POST[nm_product];
			$d = $_POST[desc];
			$p = $_POST[price];
		
			
		if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png"){
				$image = $namafolder . basename($_FILES['upload']['name']);       
				if (move_uploaded_file($_FILES['upload']['tmp_name'], $image)) {
				echo "Gambar berhasil dikirim ".$image;
				$sql="update product set (id_product,id_category,nm_product,desc,price,image) values ('$ip','$ic','$np','$d','$p','$image')";
				$res=mysql_query($sql) or die (mysql_error());
				} else {
				echo "Gambar gagal dikirim";
			}
		} else {
        echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
		}
		}
		else{
			echo "Anda Belum Memilih Gambar";
		}
	
?>
