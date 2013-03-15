<?php
	include 'config.php';
	
	$alamat		= "../images/product/";
	$namafolder	= $alamat;
	$pi = $_POST[product_id];
	$ci = $_POST[category_id];
	$pn = $_POST[product_name];
	$cn = $_POST[cateory_name];
	$des = $_POST[description];
	$price = $_POST[price];
	
	
	if(!empty($_FILES["upload"]["tmp_name"])){
			
			$jenis_gambar = $_FILES['upload']['type'];
			
		if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png"){
				$image = $namafolder . basename($_FILES['upload']['name']);  
					$string = "insert into product values (null, '$ci', '$pn', '$image', '$des', '$price', now(), null)";
					$sql = mysql_query($string) or die(mysql_error(0));
					if($sql){
						echo "<script>alert('Data Berhasil Disimpan'); window.location=('../cms/product.php')</script>";
					}
					else{
						echo " <script>alert('Data Gagal Disimpan'); window.location=('../cms/product.php')</script>";
					}
				if (move_uploaded_file($_FILES['upload']['tmp_name'], $image)) {
				
				echo "Gambar berhasil dikirim ke folder ".$image;
				} 
				else {
				echo "Gambar gagal dikirim";
			}
		} 
		else {
        echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
		}
	}
	else{
			echo "Anda Belum Memilih Gambar";
	}
?>