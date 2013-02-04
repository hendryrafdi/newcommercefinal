<?php ob_start(); ?>
<?php
include 'pages/config.php';
//memulai session
session_start();	
//cek adanya session
if (ISSET($_SESSION[email])){
echo "Anda Login Sebagai ";
echo $_SESSION[email];
echo "<br><a href='pages/logout.php'>logout</a>";
//jika tidak ada session
}else{
header("location: login.php");
}
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
					    <li class="first nobg"><h1>Indosat M2 - Shopping Partner</h1></li>
					    <li><a href="login.php" title="Login">Login</a></li>
					    <li><a href="profile.php" title="My Account">My Account</a></li>
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
					<h1 class="h1"><a href="#" ><br>Shopping Partner</a></h1>
					<div id="navigation">
						<ul>
						    <li><a href="#" class="active" title="Gadget"><span>Gadget</span></a></li>
						    <li><a href="#" title="Fashion"><span>Fashion</span></a></li>
						    <li><a href="#" title="Computer"><span>Computer</span></a></li>
						</ul>
					</div>
					<div class="cl">&nbsp;</div>
				</div>
				<!-- End Header -->
				<!-- Slider -->
				<div id="main-slider">
					<div id="slider-holder">
						<ul>
						    <li>
						    	<img src="css/images/slider-image-1.jpg" alt="Slider Image 1" />
						    	<div class="cnt">
						    		<div class="cl">&nbsp;</div>
						    	</div>
						    </li>
						    <li>
						    	<img style="width:1200px;" src="css/images/Apple Macbook Air.jpg" alt="Slider Image 2" />
						    	<div class="cnt">
						    		<div class="cl">&nbsp;</div>
						    	</div>
						    </li>
						    <li>
						    	<img style="width:1000px; height:500px;"src="css/images/iphone.jpg" alt="Slider Image 3" />
						    	<div class="cnt">
						    		<div class="cl">&nbsp;</div>
						    	</div>
						    </li>
							<li>
						    	<img style="width:1000px; height:500px;"src="css/images/iphone5.jpg" alt="Slider Image 4" />
						    	<div class="cnt">
						    		<div class="cl">&nbsp;</div>
						    	</div>
						    </li>
							<li>
						    	<img style="width:1000px; height:450px;"src="css/images/iphone-5.jpg" alt="Slider Image 5" />
						    	<div class="cnt">
						    		<div class="cl">&nbsp;</div>
						    	</div>
						    </li>
						</ul>
					</div>
					<div class="nav">
						<a href="#" title="First Slide">&nbsp;</a>
						<a href="#" title="Second Slide">&nbsp;</a>
						<a href="#" title="Third Slide">&nbsp;</a>
						<a href="#" title="Fourth Slide">&nbsp;</a>
						<a href="#" title="Fifth Slide">&nbsp;</a>
					</div>
				</div>
				<!-- End Slider -->
				<!-- Content -->
				<div id="content">
					<!-- Case -->
					<div class="case">
						<h3>Latest</h3>
						<!-- Row -->
						<div class="row">
							<ul>
							    <li>
									<a href="#" class="product" title="Product 1">
										<img src="css/images/product-1.jpg" alt="Product Image 1" />
										<span class="order model">IPhone 3G</span>
										<span class="order">catalog number: <span class="number">1</span></span>
										<span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">$</span>599<span class="sub-text">.99</span></span></span>
									</a>
							    </li>
							    <li>
									<a href="#" class="product" title="Product 2">
										<img src="css/images/product-2.jpg" alt="Product Image 2" />
										<span class="order model">Mac Book</span>
										<span class="order">catalog number: <span class="number">2</span></span>
										<span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">$</span>1999<span class="sub-text">.99</span></span></span>
									</a>	
							    </li>
							    <li>
									<a href="#" class="product" title="Product 3">
										<img src="css/images/product-3.jpg" alt="Product Image 3" />
										<span class="order model">IPhone 4s</span>
										<span class="order">catalog number: <span class="number">3</span></span>
										<span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">$</span>15<span class="sub-text">.99</span></span></span>
									</a>	
							    </li>
							    <li>
									<a href="#" class="product" title="Product 4">
										<img src="css/images/product-4.jpg" alt="Product Image 4" />
										<span class="order model">Mac OS</span>
										<span class="order">catalog number: <span class="number">4</span></span>
										<span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">$</span>1999<span class="sub-text">.99</span></span></span>
									</a>	
							    </li>
							</ul>
							<div class="cl">&nbsp;</div>
						</div>
						<!-- End Row -->
						<!-- Row -->
						<div class="row last-row">
							<ul>
							    <li>
									<a href="#" class="product" title="Product 5">
										<img src="css/images/product-5.jpg" alt="Product Image 5" />
										<span class="order model">IPhone 5</span>
										<span class="order">catalog number: <span class="number">5</span></span>
										<span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">$</span>874<span class="sub-text">.99</span></span></span>
									</a>
							    </li>
							    <li>
									<a href="#" class="product" title="Product 6">
										<img src="css/images/product-6.jpg" alt="Product Image 6" />
										<span class="order model">Mac Book Pro</span>
										<span class="order">catalog number: <span class="number">6</span></span>
										<span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">$</span>1199<span class="sub-text">.99</span></span></span>
									</a>	
							    </li>
							    <li>
									<a href="#" class="product" title="Product 7">
										<img src="css/images/product-7.jpg" alt="Product Image 7" />
										<span class="order model">IPhone Casing/span>
										<span class="order">catalog number: <span class="number">7</span></span>
										<span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">$</span>27<span class="sub-text">.99</span></span></span>
									</a>	
							    </li>
							    <li>
									<a href="#" class="product" title="Product 8">
										<img src="css/images/product-8.jpg" alt="Product Image 8" />
										<span class="order model">Handphone Stuff</span>
										<span class="order">catalog number: <span class="number">8</span></span>
										<span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">$</span>4<span class="sub-text">.99</span></span></span>
									</a>	
							    </li>
							</ul>
							<div class="cl">&nbsp;</div>
						</div>
						<!-- End Row -->
					</div>
					<!-- End Case -->
					<!-- Case -->
					<div class="case">
						<h3>Bestsellers</h3>
						<!-- Products Slider -->
						<div class="products-slider">
							<div class="slider-holder">
								<ul>
								    <li>
								    	<a class="product" title="Product 9">
											<img src="css/images/product-9.jpg" alt="Product Image 9" />
											<span class="order model">Model Name</span>
										<span class="order">catalog number: <span class="number">347</span></span>
											<span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">$</span>14<span class="sub-text">.99</span></span></span>
										</a>
								    </li>
								    <li>
								    	<a class="product" title="Product 10">
											<img src="css/images/product-10.jpg" alt="Product Image 10" />
											<span class="order model">Model Name</span>
										<span class="order">catalog number: <span class="number">537</span></span>
											<span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">$</span>24<span class="sub-text">.99</span></span></span>
										</a>
								    </li>
								    <li>
								    	<a class="product" title="Product 11">
											<img src="css/images/product-11.jpg" alt="Product Image 11" />
											<span class="order model">Model Name</span>
											<span class="order">catalog number: <span class="number">710</span></span>
											<span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">$</span>4<span class="sub-text">.99</span></span></span>
										</a>
								    </li>
								    <li>
								    	<a class="product" title="Product 12">
											<img src="css/images/product-12.jpg" alt="Product Image 12" />
											<span class="order model">Model Name</span>
											<span class="order">catalog number: <span class="number">32</span></span>
											<span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">$</span>7<span class="sub-text">.99</span></span></span>
										</a>
								    </li>
								     <li>
								    	<a class="product" title="Product 9">
											<img src="css/images/product-9.jpg" alt="Product Image 9" />
											<span class="order model">Model Name</span>
										<span class="order">catalog number: <span class="number">347</span></span>
											<span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">$</span>14<span class="sub-text">.99</span></span></span>
										</a>
								    </li>
								    <li>
								    	<a class="product" title="Product 10">
											<img src="css/images/product-10.jpg" alt="Product Image 10" />
											<span class="order model">Model Name</span>
										<span class="order">catalog number: <span class="number">537</span></span>
											<span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">$</span>24<span class="sub-text">.99</span></span></span>
										</a>
								    </li>
								    <li>
								    	<a class="product" title="Product 11">
											<img src="css/images/product-11.jpg" alt="Product Image 11" />
											<span class="order model">Model Name</span>
											<span class="order">catalog number: <span class="number">710</span></span>
											<span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">$</span>4<span class="sub-text">.99</span></span></span>
										</a>
								    </li>
								    <li>
								    	<a class="product" title="Product 12">
											<img src="css/images/product-12.jpg" alt="Product Image 12" />
											<span class="order model">Model Name</span>
											<span class="order">catalog number: <span class="number">32</span></span>
											<span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">$</span>7<span class="sub-text">.99</span></span></span>
										</a>
								    </li>
								</ul>
							</div>
							<div class="nav">
								<a href="#" class="prev" title="Previous">Prev</a>
								<a href="#" class="next" title="Next">Next</a>
								<div class="cl">&nbsp;</div>
							</div>
						</div>
						<!-- End Products Slider -->
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
<?php ob_flush(); ?>