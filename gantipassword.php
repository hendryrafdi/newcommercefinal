<?php
session_start();
if($_SESSION[email]==NULL){
    echo "<script>window.location=('login.php');</script>";
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
                            <li class="first nobg"><h1><a href="index.php">Shopping Partner</a></h1></li>
                            <?php if ($_SESSION[email] == NULL) { ?>
                                <li><a href="login.php" title="Login">Login</a></li>
                            <?php } else { ?>
                                <li><a href="pages/logout.php" title="Logout">Logout</a></li>
                            <?php } ?>
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
                            <div class="con2-kiri">
                                <div>
                                    
                                <?php
                                include 'pages/config.php';

                                $id = $_SESSION[id_user];
                                $tampil = mysql_query("select *from user where id_user='$id'");
                                $manggil = mysql_fetch_array($tampil);
                                ?>
                                    <font face="rockwell" size="4" color="black">Hallo <?php echo"<u><font face='rockwell' size='3' color='black'>$manggil[f_name] </font></u>"; ?></font>
                                </div>
                                
                            </div>
							
						

  <div style="margin-left:290px;"class="box">
	<h3>Ubah Kata Sandi</h3>
	<hr></hr>
	<div>Kata Sandi <input style="margin-left:100px; width:200px;" type="text" /></div>
	<div>Ketik Ulang Kata Sandi	   <input style="margin-left:30px; width:200px;" type="text" /></div>
	<input style="float:right; margin-right:10px; margin-top:50px;" type="submit" />
	
	
	</div>
        <div id="footer-push" class="cl">&nbsp;</div>
    </div>
    <div style="margin-top:-200px;" id="footer">
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