<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Indosat M2 - Your Shopping Partner</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
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
					    <li class="first nobg"><h1><a href="index.php">Shopping Partner</a></h1></li>
						<?php if($_SESSION[email]==NULL){?>
					    <li><a href="login.php" title="Login">Login</a></li>
					    <?php } else{ ?>
						<li><a href="pages/logout.php" title="Logout">Logout</a></li>
						<?php }?>
						<li><a href="product.php" title="Product">Product</a></li>
						<li><a href="contact.php" title="Contact us">Contact Us</a></li>
						<li><a href="profile.php" title="My Account">My Account</a></li>
					    <li class="nobg"><a href="shoppingcart.php" class="bag" title="My Bag">My Bag
							 <?php
include "pages/config.php";
	$sid = session_id();
	$sql = mysql_query("SELECT * FROM shoppingcart");
	$row = mysql_num_rows($sql);
	$jml = mysql_fetch_array($sql);
	
	echo "<span class='KetCart'>$row item</span>";
		?>
						</a></li>
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
					<h1 class="h1"><a href="#" ><br>My Account</a></h1>
					<div class="cl">&nbsp;</div>
				</div>
				<!-- End Header -->
				<!-- Slider -->
				<div id="main-slider">
					<div id="slider-holder">
						<div class="gariskiri">
						&nbsp;
						</div>
						<div>
							<font face="rockwell" size="6" color="darkblue" style="position: absolute; margin-left: 400px; margin-top: 30px;">Member</font>
						</div>
						<div class="garisV" style="">
						&nbsp;
						</div>
						<div class="con2-kiri">
								<div>
									<font face="rockwell" size="4" color="black">Hallo <?php echo"<u><font face='rockwell' size='3' color='black'>$_SESSION[f_name] </font></u>";?></font>
								</div>
								<?php
									include 'pages/config.php';
										
									$id = $_SESSION[id_user];
									$tampil = mysql_query("select *from user where id_user='$id'");
									$manggil = mysql_fetch_array($tampil);
								?>
								<div class="isitable">
									<table border="0" style="width: 500px; height: 300px;">
										<tr>
											<td class="td1">
												<font face="rockwell" size="3" color="black">First Name</font>
											</td>
											<td class="">
												<font face="rockwell" size="3" color="black">:</font>
											</td>
											<td class="td2">
												<?php echo"<u><font face='rockwell' size='3' color='black'>$_SESSION[f_name] </font></u>";?>
											</td>
											<td class="td3">
												<img src="css/images/reply.png" title="change">
											</td>
										</tr>
										<tr>
											<td class="td1">
												<font face="rockwell" size="3" color="black">Last Name</font>
											</td>
											<td class="">
												<font face="rockwell" size="3" color="black">:</font>
											</td>
											<td class="td2">
												<?php echo"<u><font face='rockwell' size='3' color='black'>$_SESSION[l_name] </font></u>";?>
											</td>
											<td class="td3">
												<img src="css/images/reply.png" title="change">
											</td>
										</tr>
										<tr>
											<td class="td1">
												<font face="rockwell" size="3" color="black">Gender</font>
											</td>
											<td class="">
												<font face="rockwell" size="3" color="black">:</font>
											</td>
											<td class="td2">
												<?php echo"<u><font face='rockwell' size='3' color='black'>$_SESSION[gender]</font></u>";?>
											</td>
											<td class="td1">
												<img src="css/images/reply.png" title="change">
											</td>
										</tr>
										<tr>
											<td class="td1">
												<font face="rockwell" size="3" color="black">Birthday Place</font>
											</td>
											<td class="">
												<font face="rockwell" size="3" color="black">:</font>
											</td>
											<td class="td2">
												<?php echo"<u><font face='rockwell' size='3' color='black'>$_SESSION[birthday_place] </font></u>";?>
											</td>
											<td class="td3">
												<img src="css/images/reply.png" title="change">
											</td>
										</tr>
										<tr>
											<td class="td1">
												<font face="rockwell" size="3" color="black">Birthday</font>
											</td>
											<td class="">
												<font face="rockwell" size="3" color="black">:</font>
											</td>
											<td class="td2">
												<?php echo"<u><font face='rockwell' size='3' color='black'>$_SESSION[birthday] </font></u>";?>
											</td>
											<td class="td3">
												<img src="css/images/reply.png" title="change">
											</td>
										</tr>
										<tr>
											<td class="td1">
												<font face="rockwell" size="3" color="black">Addres</font>
											</td>
											<td class="">
												<font face="rockwell" size="3" color="black">:</font>
											</td>
											<td class="td2">
												<?php echo"<u><font face='rockwell' size='3' color='black'>$_SESSION[address] </font></u>";?>
											</td>
											<td class="td3">
												<img src="css/images/reply.png" title="change">
											</td>
										</tr>
										<tr>
											<td class="td1">
												<font face="rockwell" size="3" color="black">Telp</font>
											</td>
											<td class="">
												<font face="rockwell" size="3" color="black">:</font>
											</td>
											<td class="td2">
												<?php echo"<u><font face='rockwell' size='3' color='black'>$_SESSION[telp] </font></u>";?>
											</td>
											<td class="td3">
												<img src="css/images/reply.png" title="change">
											</td>
										</tr>
										<tr>
											<td class="td1">
												<font face="rockwell" size="3" color="black">Email</font>
											</td>
											<td class="">
												<font face="rockwell" size="3" color="black">:</font>
											</td>
											<td class="td2">
												<?php echo"<u><font face='rockwell' size='3' color='black'>$_SESSION[email] </font></u>";?>
											</td>
											<td class="td3">
												<img src="css/images/reply.png" title="change">
											</td>
										</tr>
										<tr>
											<td class="td1">
												<font face="rockwell" size="3" color="black">Password</font>
											</td>
											<td class="">
												<font face="rockwell" size="3" color="black">:</font>
											</td>
											<td class="td2">
												<?php echo"<u><font face='rockwell' size='3' color='black'>$_SESSION[password] </font></u>";?>
											</td>
											<td class="td3">
												<img src="css/images/reply.png" title="change">
											</td>
										</tr>
									</table>
								</div>	
							</div>
							<div class="gariskanan">
							&nbsp;
						</div>
					</div>
				</div>
					<!-- End Case -->
				</div>
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