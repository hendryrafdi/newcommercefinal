<!DOCTYPE html>
<?php 
error_reporting(0);
session_start();
?>
<html>
<head>
	<title>Indosat M2 - Your Shopping Partner</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery-func.js" type="text/javascript" charset="utf-8"></script>	
</head>
<?php
include 'pages/config.php';
?>
<body>
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Header -->
		<div id="top">
			<!-- Shell -->
			<div class="shell">
			  <div class="top-nav">
				  <ul>
					    <li class="first nobg"><h1>Indosat M2 - Shopping Partner</h1></li>
					    <li><a href="login.php" title="Login">Login</a></li>
					    <li><a href="profile.php" title="My Account">My Account</a></li>
					    <li><a href="channel.php" title="My Wishlist">Channel</a></li>
					    <li class="nobg"><a href="#" class="bag" title="My Bag">My Bag</a></li>
					</ul>
				</div>
				<div id="search">
					<form action="" method="post">
						<input type="text" class="field" value="Quick search..." title="Quick search..." />
					</form>
				</div>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Shell -->
		</div>
		<!-- End Top -->
		<!-- Main -->
		<div id="main">
			<!-- Shell -->
			<div class="shell">
				<!-- Header -->
				<div id="header">
					<h1 class="h1"><a href="#" ><br>Shopping Cart</a></h1>
					
					<div class="cl">&nbsp;</div>
				</div>
				<!-- End Header -->
				<!-- Slider -->
				<div id="main-slider">
                
				<table class="TableCart" width="100%" cellspacing="0" cellpadding="0" border="2" style="border-top: 1px dotted #0; border-bottom: 1px dotted #0;">
							<tr><th>No</th>
								<th>Foto Produk</th>
								<th>Nama Produk</th>
								<th>Jumlah</th>
								<th>Harga</th>
								<th>Delete</th>
							</th>
               <?php
							$sid = session_id();
							$no = 1;
							$sql = mysql_query("SELECT * FROM shoppingcart, product WHERE id_session='$sid' AND shoppingcart.id_product=product.id_product");
							$hitung = mysql_num_rows($sql);
							if ($hitung < 1){
								echo"<script>window.alert('Cart is Empty....');
										window.location=('product.php')</script>";
								}
							else {
								while($tian=mysql_fetch_array($sql)){
									echo"<tr><td align='center'>$no</td>
										<td align='center'><img width=50 src=$tian[image]></td>
										<td align='center'>$tian[nm_product]</td>
										<td align='center'>$tian[qty]</td>
										<td align='center'>Rp. $tian[price]</td>
										<td align='center'><a href=input.php?input=delete&id=$tian[id_keranjang]>Hapus</a></td></tr>";
							$no++;
								}
							}
						?>
						</table>
						<a class="tombol" href="order.php">Selesai</a>
						<a class="tombol" href="product.php">Belanja Lagi..</a>
					
				</div>
				<!-- End Slider -->
				<!-- Content -->
				
				<!-- End Content -->
			</div>
			<!-- End Shell -->
		</div>
		<!-- End Main -->
		<div id="footer-push" class="cl">&nbsp;</div>
	</div>
	<!-- End Wrapper -->
	<!-- Footer -->
	<div id="footer">
		<!-- Shell -->
		<div class="shell">
			<!-- Cols -->
			<div class="cols">
				<ul>
				    <li class="col">
				    	<h4>About Jangkrik SQLI</h4>
				    	<p>Kami adalah sekolompok pelajar SMK yang diperbolehkan kerja praktek di <a href="indosatm2.com" title="indosatm2">Indosat M2</a> Kami ingin menimba ilmu sehingga nanti saat sudah masuk dunia usaha kami bisa berhasil.</p>
				    	<a href="#" class="more-link" title="Read More">Read More >></a>
				    </li>
				    <li class="col social">
				    	<h4>get social</h4>
				    	<ul>
				    	    <li><a href="https://facebook.com/justmedevil" class="fb-link" title="Facebook">facebook</a></li>
				    	    <li><a href="https://twitter.com/FRETSERC" class="twitter-link" title="Twitter">twitter</a></li>
				    	    <li><a href="#" class="behance-link" title="Behance">behance</a></li>
				    	    <li><a href="http://blogger.com/" class="blogger-link" title="Blogger">blogger</a></li>
				    	    <li><a href="http://digg.com" class="digg-link" title="Digg">digg</a></li>
				    	</ul>
				    </li>
				    <li class="col partners">
				    	<h4>partners</h4>
				    	<ul>
				    	    <li><a href="http://capricornboy.tk" title="capricornboy">Capricorn GoWeb</a></li>
				    	    <li><a href="http://libraboy.tk" title="libraboy">Libra Boy</a></li>
				    	    <li><a href="http://aquariusboy.tk" title="aquariusboy">Aquarius Boy</a></li>
				    	    <li><a href="http://twitter.com/softtranz" title="softranz">Software Transformator</a></li>
				    	    <li><a href="http://favoritegirl.tk" title="favoritegirl">Favorite Girl</a></li>
				    	</ul>
				    </li>
				    <li class="col contact">
				    	<h4>newsletter</h4>
				    	<p>Subscribe To Our News Later</p>
				    	<form action="" method="post">
				    		<div class="field-wrapper">
				    			<input type="text" class="field" value="Name" title="Name" />
				    		</div>
				    		<div class="field-wrapper">
				    			<input type="text" class="field" value="Email" title="Email" />
				    		</div>
				    		<input type="submit" value="Submit" class="submit-btn" title="Submit" />
				    		<div class="cl">&nbsp;</div>
				    	</form>
				    </li>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Cols -->
			<p class="copy">Copyright &copy; Indosat M2 2013. Design by <a href="http://twitter.com/softranz">Jangkrik SQLI</a></p>
			<div class="cl">&nbsp;</div>
		</div>
		<!-- End Shell -->
	</div>
	<!-- End Footer -->
</body>
</html>