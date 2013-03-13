<?php
	include 'config.php';
	
	$alamat		= "../../images/slideshow/";
	$namafolder	= $alamat;
	$id = $_POST[id_slide];
	$desc = $_POST[desc];
	
	if(!empty($_FILES["upload"]["tmp_name"])){
			
			$jenis_gambar = $_FILES['upload']['type'];
			
		if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png"){
				$image = $namafolder . basename($_FILES['upload']['name']);  
					$string = "update slideshow set nm_slide='$desc', link='$image' where id_slide='$id' ";
                                        echo $string;
					$sql = mysql_query($string);
					if($sql){
						echo "<script>alert('Data Berhasil Diubah'); window.location:'../cms/product.php'</script>";
					}
					else{
						echo " Tapi Data Kabur2an";
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
