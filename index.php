<?php ob_start(); ?>
<?php
include 'pages/config.php';
//memulai session
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
                        <form action="pages/search.php" method="post">
                            <input type="text" class="field" value="Quick search..." title="Quick search..." name="keyword" /><input type="hidden" value="Search" name="search" />
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
                                <li><a href="product.php" title="All" class="active"><span>All</span></a></li>
                                <li><a href="product.php?cat=3" title="Gadget"><span>Phone</span></a></li>
                                <li><a href="product.php?cat=2" title="Fashion"><span>Kamera</span></a></li>
                                <li><a href="product.php?cat=1" title="Computer"><span>Computer</span></a></li>
                            </ul>
                        </div>
                        <div class="cl">&nbsp;</div>
                    </div>
                    <!-- End Header -->
                    <!-- Slider -->
                    <div id="main-slider">
                        <div id="slider-holder">
                            <ul>
                                <?php
                                $que = mysql_query("select *from slideshow");
                                while ($r = mysql_fetch_array($que)) {
                                    ?>
                                    <li>
                                        <img id="slide" src="<?php echo "cms/setting/$r[link]"; ?>" alt="<?php echo $r[nm_slide]; ?>" />
                                        <div class="cnt">
                                            <div class="cl">&nbsp;</div>
                                        </div>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="nav">
                            <?php
                            $que = mysql_query("select *from slideshow");
                            while ($r = mysql_fetch_array($que)) {
                                ?>
                                <a href="#" title="<?php echo $r[nm_slide]; ?>">&nbsp;</a>
                                <?php
                            }
                            ?>
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
                                    <?php
                                    include 'pages/config.php';
                                    include 'pages/fungsi_paging.php';

                                    $p = new Paging;
                                    $batas = 20;
                                    $posisi = $p->cariPosisi($batas);


                                    $tampil = mysql_query("select *from product order by product_added desc limit 0,20 ");
                                    $no = $posisi + 1;
                                    while ($r = mysql_fetch_array($tampil)) {
                                        ?>
                                        <li style="height: 300px;">
                                            <a href="product.php?&act=product&detail=<?php echo $r[id_product]; ?>" class="product" title="<?php echo $r[nm_product]; ?>">
                                                <img class="size-img" src="cms/<?php echo $r[image]; ?>" alt="Product Image 1" />
                                                <span class="order model"><?php echo $r[nm_product]; ?></span>
                                                <span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">IDR</span><?php echo number_format($r[price]); ?><span class="sub-text">.00</span></span></span>
                                            </a>
                                        </li>
                                        <?php
                                    }
                                    $jmldata = mysql_num_rows(mysql_query("select *from product"));
                                    $jmlhalaman = $p->jumlahHalaman($jmldata, $batas);
                                    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);
                                    
                                    ?>
                                </ul>
                                <div class="cl">&nbsp;</div>
                            </div>
                            <!-- End Row -->

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
