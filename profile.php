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
					<h1 class="h1"><a href="#" ><br>My Account</a></h1>
					<div class="cl">&nbsp;</div>
				</div>
				<!-- End Header -->
				<!-- Slider -->
				<div id="main-slider">
					<div id="slider-holder">
					
						<div class="con2-kiri">
						<form method="post" action="pages/saveuser.php">
							<table border="0">
								<?php
                                    include "pages/config.php";

                                    $query = mysql_query("select *from user");
                                    $tampil = mysql_fetch_array($query)
                                        ?>
								<tr>
									<td style="width: 180px;">
										<font face="Gill Sans MT Condensed" size="5" color="black">
											Username
										</font>
									</td>
									<td style="width: 300px;">
										<input type="text" value="<?php echo"$tampil[f_name]"; ?>" style="width: 100px; height: 30px;">
										<input type="text" value="<?php echo"$tampil[l_name]"; ?>" style="width: 173px; height: 30px;">
									</td>
								</tr>
								<tr>
									<td style="width: 180px;">
										<font face="Gill Sans MT Condensed" size="5" color="black">
											Tempat, Tanggal Lahir
										</font>
									</td>
									<td style="width: 300px;">
										<input type="text" name="birthday_place" value="<?php echo"$tampil[birthday_place]"; ?>" style="width: 130px; height: 30px;">
										<input type="date" name="birthday" value="<?php echo"$tampil[birthday]"; ?>" style="height: 30px; width: 143px;">
									</td>
								</tr>
								<tr>
									<td style="width: 180px;">
										<font face="Gill Sans MT Condensed" size="5" color="black">
											Jenis Kelamin
										</font>
									</td>
									<td style="width: 300px;">
										<select class="inputlogin" name="gender" style="width: 284px;">
											<option value="<?php echo"$tampil[gender]"; ?>">Gender</option>
											<option value="l">Male</option>
											<option value="p">Female</option>
										</select>
									</td>
								</tr>
								<tr>
									<td style="width: 180px;">
										<font face="Gill Sans MT Condensed" size="5" color="black">
											No. Telepon
										</font>
									</td>
									<td style="width: 300px;">
										<input type="text" name="telp" value="<?php echo"$tampil[telp]"; ?>" class="inputlogin">
									</td>
								</tr>
								<tr>
									<td style="width: 180px;">
										<font face="Gill Sans MT Condensed" size="5" color="black">
											Alamat
										</font>
									</td>
									<td style="width: 300px;">
										<input type="text" name="addres" value="<?php echo"$tampil[address]"; ?>" class="inputlogin">
									</td>
								</tr>
								<tr>
									<td style="width: 180px;">
										<font face="Gill Sans MT Condensed" size="5" color="black">
											Email
										</font>
									</td>
									<td style="width: 300px;">
										<input type="text" name="email" value="<?php echo"$tampil[email]"?>" class="inputlogin">
									</td>
								</tr>
								<tr>
									<td style="width: 180px;">
										<font face="Gill Sans MT Condensed" size="5" color="black">
											Password
										</font>
									</td>
									<td style="width: 300px;">
										<input type="password" name="password" value="<?php echo"$tampil[password]";?>" class="inputlogin">
									</td>
								</tr>
								<tr>
									<td></td>
									<td style="width: 180px;">
										<input type="submit" value="Update"/>
									</td>
								</tr>
							</table>
                                     </fieldset>   
								 	
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