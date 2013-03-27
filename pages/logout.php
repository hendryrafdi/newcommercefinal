<?php
	include 'config.php';
  session_start();
  session_destroy();
  
  $sql = mysql_query("truncate table shoppingcart");
  
  echo "<script>window.alert('Kamu telah berhasil keluar dari sistem administrator');
        window.location=('../index.php')</script>";
	
?>
