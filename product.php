<!DOCTYPE html>
<?php
error_reporting(0);
session_start();
?>
<html>
    <head>
        <title>Indosat M2 - Product</title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" href="css/images/favicon.ico" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

        <script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/jquery-func.js" type="text/javascript" charset="utf-8"></script>	
    </head>

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
                    <?php
                    if (!isset($_GET['act'])) {
                        echo"
							<div id='header'>
								<h1 class='h1'><a href='#' ><br>Shopping Partner</a></h1>
								<div id='navigation'>
									<ul>
									";

                        $active = $_GET['cat'];
                        if ($active == NULL) {

                            echo"
											<li><a href='product.php' title='All' class='active'><span>All</span></a></li>
											<li><a href='product.php?cat=3' title='Gadget'><span>Gadget</span></a></li>
											<li><a href='product.php?cat=2' title='Fashion'><span>Fashion</span></a></li>
											<li><a href='product.php?cat=1' title='Computer'><span>Computer</span></a></li>
											";
                        }
                        if ($active == '1') {
                            echo"
											<li><a href='product.php' title='All'><span>All</span></a></li>
											<li><a href='product.php?cat=3' title='Gadget'><span>Gadget</span></a></li>
											<li><a href='product.php?cat=2' title='Fashion'><span>Fashion</span></a></li>
											<li><a href='product.php?cat=1' title='Computer' class='active'><span>Computer</span></a></li>
											";
                        }
                        if ($active == '2') {
                            echo"
											<li><a href='product.php' title='All'><span>All</span></a></li>
											<li><a href='product.php?cat=3' title='Gadget'><span>Gadget</span></a></li>
											<li><a href='product.php?cat=2' title='Fashion' class='active'><span>Fashion</span></a></li>
											<li><a href='product.php?cat=1' title='Computer'><span>Computer</span></a></li>
											";
                        }
                        if ($active == '3') {
                            echo"
											<li><a href='product.php' title='All'><span>All</span></a></li>
											<li><a href='product.php?cat=3' title='Gadget' class='active'><span>Gadget</span></a></li>
											<li><a href='product.php?cat=2' title='Fashion'><span>Fashion</span></a></li>
											<li><a href='product.php?cat=1' title='Computer'><span>Computer</span></a></li>
											";
                        }

                        echo"
									</ul>
									
								</div>
									<div class='cl'>&nbsp;</div>
							</div>
							
							<!-- End Header -->
							<!-- Slider -->

							<div id='main-slider'>
								<div id='slider-holder'>
							
									<ul>";
                        $que = mysql_query("select *from slideshow");
                        while ($r = mysql_fetch_array($que)) {
                            echo "<li><img id='slide' src='cms/setting/$r[link]' alt='$r[nm_slide]'/>
                                        <div class='cnt'>
                                            <div class='cl'>&nbsp;</div>
                                        </div></li>";
                        }

                        echo"
									</ul>
							</div>
							<div class='nav'>";
                        $que = mysql_query("select *from slideshow");
                        while ($r = mysql_fetch_array($que)) {
                            echo"
								<a href='#' title='$r[nm_slide]'>&nbsp;</a>";}
                            echo"
							</div>
						</div>
						
						<!-- End Slider -->
						
						";
                        }
                        ?>

                        <!-- Content -->
                        <div id="content">
                            <!-- Case -->
                            <div class="case">
                                <h3>Product</h3>
                                <!-- Row -->
                                <div class="row">
                                    <ul>
                                        <?php
                                        include 'pages/config.php';
                                        include 'pages/fungsi_paging.php';

                                        $p = new Paging;
                                        $batas = 20;
                                        $posisi = $p->cariPosisi($batas);
                                        if (!isset($_SESSION['search'])) {
                                            if (!isset($_GET['cat']) || ($_GET['search'])) {
                                                switch ($_GET[act]) {
                                                    default:

                                                        $tampil = mysql_query("select *from product limit $posisi, $batas ");
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

                                                    case 'product':
                                                        include 'pages/config.php';
                                                        if (isset($_GET['detail'])) {
                                                            $productId = $_GET['detail'];
                                                            $detailproduct = mysql_query("SELECT * FROM product WHERE id_product='$productId' ORDER by id_product asc");
                                                            if ($tampildong = mysql_fetch_array($detailproduct)) {
                                                                ?>
                                                                <li style="margin-left: 10px; ">
                                                                    <a href="pages/input.php?input=add&id=<?php echo $tampildong[id_product]; ?>" class="product" title="<?php echo $tampildong[nm_product]; ?>">
                                                                        <img style="width: 100%; height: 80%;" src="cms/<?php echo $tampildong[image]; ?>" alt="Product Image 1" />
                                                                        <font face='rockwell' size='3' color='darkblue'><?php echo"$tampildong[nm_product]" ?></font>
                                                                    </a>
                                                                </li>
                                                                <div class="nambar">
                                                                    <table border="0">
                                                                        <tr>
                                                                            <td style="height: 30px; width: 120px;">
                                                                                <font face="rockwell" size="4" color="darkblue">Description</font>
                                                                            </td>
                                                                            <td style="width: 20px">
                                                                                <font face="rockwell" size="4" color="darkblue">:</font>
                                                                            </td>
                                                                            <td style="height: 30px; width: 500px;">
                                                                                <font face="rockwell" size="4" color="darkblue"><?php echo"$tampildong[description]" ?></font>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="height: 30px; width: 120px;">
                                                                                <font face="rockwell" size="4" color="darkblue">Price</font>
                                                                            </td>
                                                                            <td style="20px;">
                                                                                <font face="rockwell" size="4" color="darkblue">:</font>
                                                                            </td>
                                                                            <td style="height: 30px; width: 5;">
                                                                                <font face="rockwell" size="4" color="darkblue"><?php echo number_format($tampildong[price]); ?></font>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="height: 30px; width: 120px;">

                                                                            </td>
                                                                            <td style="width: 20px">

                                                                            </td>
                                                                            <td style="height: 30px; width: 500px;">

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="height: 30px; width: 120px;">

                                                                            </td>
                                                                            <td style="20px;">

                                                                            </td>
                                                                            <td style="height: 30px; width: 5;">
                                                                                <a href="pages/input.php?input=add&id=<?php echo $tampildong[id_product]; ?>" class="css3button">Buy Now</a>
                                                                                <a href="product.php" class="css3button">Back</a>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                                <?php
                                                            }
                                                        }
                                                }
                                            } else {
                                                $param = $_GET['cat'];
                                                if ($param == '1') {
                                                    switch ($_GET[act]) {
                                                        default:

                                                            $tampil = mysql_query("select *from product where id_category='$param' limit $posisi, $batas ");
                                                            $no = $posisi + 1;
                                                            while ($r = mysql_fetch_array($tampil)) {
                                                                ?>
                                                                <li style="height: 300px;">
                                                                    <a href="product.php?&act=product&detail=<?php echo $r[id_product]; ?>" class="product" title="<?php echo $r[nm_product]; ?>">
                                                                        <img src="cms/<?php echo $r[image]; ?>" alt="Product Image 1" />
                                                                        <span class="order model"><?php echo $r[nm_product]; ?></span>
                                                                        <span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">IDR</span><?php echo number_format($r[price]); ?><span class="sub-text">.00</span></span></span>
                                                                    </a>
                                                                </li>
                                                                <?php
                                                            }
                                                            $jmldata = mysql_num_rows(mysql_query("select *from product"));
                                                            $jmlhalaman = $p->jumlahHalaman($jmldata, $batas);
                                                            $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

                                                        case 'product':
                                                            include 'pages/config.php';
                                                            if (isset($_GET['detail'])) {
                                                                $productId = $_GET['detail'];
                                                                $detailproduct = mysql_query("SELECT * FROM product WHERE id_product='$productId' ORDER by id_product asc");
                                                                if ($tampildong = mysql_fetch_array($detailproduct)) {
                                                                    ?>
                                                                    <li style="margin-left: 350px; ">
                                                                        <a href="pages/input.php?input=add&id=<?php echo $tampildong[id_product]; ?>" class="product" title="<?php echo $tampildong[nm_product]; ?>">
                                                                            <img src="cms/<?php echo $tampildong[image]; ?>" alt="Product Image 1" />
                                                                            <span class="order model"><?php echo $tampildong[nm_product]; ?></span>
                                                                            <span class="number"><?php echo $tampildong[description]; ?></span>
                                                                            <span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">IDR</span><?php echo number_format($tampildong[price]); ?><span class="sub-text">.00</span></span></span>
                                                                        </a>
                                                                    </li>
                                                                    <div class="nambar">
                                                                        <table border="0">
                                                                            <tr>
                                                                                <td style="height: 30px; width: 120px;">
                                                                                    <font face="rockwell" size="4" color="darkblue">Description</font>
                                                                                </td>
                                                                                <td style="width: 20px">
                                                                                    <font face="rockwell" size="4" color="darkblue">:</font>
                                                                                </td>
                                                                                <td style="height: 30px; width: 500px;">
                                                                                    <font face="rockwell" size="4" color="darkblue"><?php echo"$tampildong[description]" ?></font>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td style="height: 30px; width: 120px;">
                                                                                    <font face="rockwell" size="4" color="darkblue">Price</font>
                                                                                </td>
                                                                                <td style="20px;">
                                                                                    <font face="rockwell" size="4" color="darkblue">:</font>
                                                                                </td>
                                                                                <td style="height: 30px; width: 5;">
                                                                                    <font face="rockwell" size="4" color="darkblue"><?php echo number_format($tampildong[price]); ?></font>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    <?php
                                                                }
                                                            }
                                                    }
                                                } else if ($param == '2') {
                                                    switch ($_GET[act]) {
                                                        default:

                                                            $tampil = mysql_query("select *from product where id_category='$param' limit $posisi, $batas ");
                                                            $no = $posisi + 1;
                                                            while ($r = mysql_fetch_array($tampil)) {
                                                                ?>
                                                                <li style="height: 300px;">
                                                                    <a href="product.php?&act=product&detail=<?php echo $r[id_product]; ?>" class="product" title="<?php echo $r[nm_product]; ?>">
                                                                        <img src="cms/<?php echo $r[image]; ?>" alt="Product Image 1" />
                                                                        <span class="order model"><?php echo $r[nm_product]; ?></span>
                                                                        <span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">IDR</span><?php echo number_format($r[price]); ?><span class="sub-text">.00</span></span></span>
                                                                    </a>
                                                                </li>
                                                                <?php
                                                            }
                                                            $jmldata = mysql_num_rows(mysql_query("select *from product"));
                                                            $jmlhalaman = $p->jumlahHalaman($jmldata, $batas);
                                                            $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

                                                        case 'product':
                                                            include 'pages/config.php';
                                                            if (isset($_GET['detail'])) {
                                                                $productId = $_GET['detail'];
                                                                $detailproduct = mysql_query("SELECT * FROM product WHERE id_product='$productId' ORDER by id_product asc");
                                                                if ($tampildong = mysql_fetch_array($detailproduct)) {
                                                                    ?>
                                                                    <li style="margin-left: 350px; ">
                                                                        <a href="pages/input.php?input=add&id=<?php echo $tampildong[id_product]; ?>" class="product" title="<?php echo $tampildong[nm_product]; ?>">
                                                                            <img src="cms/<?php echo $tampildong[image]; ?>" alt="Product Image 1" />
                                                                            <span class="order model"><?php echo $tampildong[nm_product]; ?></span>
                                                                            <span class="number"><?php echo $tampildong[description]; ?></span>
                                                                            <span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">IDR</span><?php echo number_format($tampildong[price]); ?><span class="sub-text">.00</span></span></span>
                                                                        </a>
                                                                    </li>
                                                                    <div class="nambar">
                                                                        <table border="0">
                                                                            <tr>
                                                                                <td style="height: 30px; width: 120px;">
                                                                                    <font face="rockwell" size="4" color="darkblue">Description</font>
                                                                                </td>
                                                                                <td style="width: 20px">
                                                                                    <font face="rockwell" size="4" color="darkblue">:</font>
                                                                                </td>
                                                                                <td style="height: 30px; width: 500px;">
                                                                                    <font face="rockwell" size="4" color="darkblue"><?php echo"$tampildong[description]" ?></font>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td style="height: 30px; width: 120px;">
                                                                                    <font face="rockwell" size="4" color="darkblue">Price</font>
                                                                                </td>
                                                                                <td style="20px;">
                                                                                    <font face="rockwell" size="4" color="darkblue">:</font>
                                                                                </td>
                                                                                <td style="height: 30px; width: 5;">
                                                                                    <font face="rockwell" size="4" color="darkblue"><?php echo" number_format($tampildong[price]);" ?></font>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    <?php
                                                                }
                                                            }
                                                    }
                                                } else if ($param == '3') {
                                                    switch ($_GET[act]) {
                                                        default:

                                                            $tampil = mysql_query("select *from product where id_category='$param' limit $posisi, $batas ");
                                                            $no = $posisi + 1;
                                                            while ($r = mysql_fetch_array($tampil)) {
                                                                ?>
                                                                <li style="height: 300px;">
                                                                    <a href="product.php?&act=product&detail=<?php echo $r[id_product]; ?>" class="product" title="<?php echo $r[nm_product]; ?>">
                                                                        <img src="cms/<?php echo $r[image]; ?>" alt="Product Image 1" />
                                                                        <span class="order model"><?php echo $r[nm_product]; ?></span>
                                                                        <span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">IDR</span><?php echo number_format($r[price]); ?><span class="sub-text">.00</span></span></span>
                                                                    </a>
                                                                </li>
                                                                <?php
                                                            }
                                                            $jmldata = mysql_num_rows(mysql_query("select *from product"));
                                                            $jmlhalaman = $p->jumlahHalaman($jmldata, $batas);
                                                            $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

                                                        case 'product':
                                                            include 'pages/config.php';
                                                            if (isset($_GET['detail'])) {
                                                                $productId = $_GET['detail'];
                                                                $detailproduct = mysql_query("SELECT * FROM product WHERE id_product='$productId' ORDER by id_product asc");
                                                                if ($tampildong = mysql_fetch_array($detailproduct)) {
                                                                    ?>
                                                                    <li style="margin-left: 350px; ">
                                                                        <a href="pages/input.php?input=add&id=<?php echo $tampildong[id_product]; ?>" class="product" title="<?php echo $tampildong[nm_product]; ?>">
                                                                            <img src="cms/<?php echo $tampildong[image]; ?>" alt="Product Image 1" />
                                                                            <span class="order model"><?php echo $tampildong[nm_product]; ?></span>
                                                                            <span class="number"><?php echo $tampildong[description]; ?></span>
                                                                            <span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">IDR</span><?php echo number_fromat($tampildong[price]); ?><span class="sub-text">.00</span></span></span>
                                                                        </a>
                                                                    </li>
                                                                    <div class="nambar">
                                                                        <table border="0">
                                                                            <tr>
                                                                                <td style="height: 30px; width: 120px;">
                                                                                    <font face="rockwell" size="4" color="darkblue">Description</font>
                                                                                </td>
                                                                                <td style="width: 20px">
                                                                                    <font face="rockwell" size="4" color="darkblue">:</font>
                                                                                </td>
                                                                                <td style="height: 30px; width: 500px;">
                                                                                    <font face="rockwell" size="4" color="darkblue"><?php echo"$tampildong[description]" ?></font>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td style="height: 30px; width: 120px;">
                                                                                    <font face="rockwell" size="4" color="darkblue">Price</font>
                                                                                </td>
                                                                                <td style="20px;">
                                                                                    <font face="rockwell" size="4" color="darkblue">:</font>
                                                                                </td>
                                                                                <td style="height: 30px; width: 5;">
                                                                                    <font face="rockwell" size="4" color="darkblue"><?php echo" number_format($tampildong[price]);" ?></font>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    <?php
                                                                }
                                                            }
                                                    }
                                                }
                                            }
                                            if ($_GET['src']) {
                                                switch ($_GET[act]) {
                                                    default:
                                                        $tampil = mysql_query("select *from product where nm_product = '$_POST[search]' limit $posisi, $batas");
                                                        $no = $posisi + 1;
                                                        while ($r = mysql_fetch_array($tampil)) {
                                                            ?>
                                                            <li style="height: 300px;">
                                                                <a href="product.php?&act=product&detail=<?php echo $r[id_product]; ?>" class="product" title="<?php echo $r[nm_product]; ?>">
                                                                    <img src="cms/<?php echo $r[image]; ?>" alt="Product Image 1" />
                                                                    <span class="order model"><?php echo $r[nm_product]; ?></span>
                                                                    <span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">IDR</span><?php echo number_format($r[price]); ?><span class="sub-text">.00</span></span></span>
                                                                </a>
                                                            </li>
                                                            <?php
                                                        }
                                                        $jmldata = mysql_num_rows(mysql_query("select *from product"));
                                                        $jmlhalaman = $p->jumlahHalaman($jmldata, $batas);
                                                        $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

                                                    case 'product':
                                                        include 'pages/config.php';
                                                        if (isset($_GET['detail'])) {
                                                            $productId = $_GET['detail'];
                                                            $detailproduct = mysql_query("SELECT * FROM product WHERE id_product='$productId' ORDER by id_product asc");
                                                            if ($tampildong = mysql_fetch_array($detailproduct)) {
                                                                ?>
                                                                <li style="margin-left: 350px; ">
                                                                    <a href="pages/input.php?input=add&id=<?php echo $tampildong[id_product]; ?>" class="product" title="<?php echo $tampildong[nm_product]; ?>">
                                                                        <img src="cms/<?php echo $tampildong[image]; ?>" alt="Product Image 1" />
                                                                        <span class="order model"><?php echo $tampildong[nm_product]; ?></span>
                                                                        <span class="number"><?php echo $tampildong[description]; ?></span>
                                                                        <span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">IDR</span><?php echo $tampildong[price]; ?><span class="sub-text">.00</span></span></span>
                                                                    </a>
                                                                </li>
                                                                <div class="nambar">
                                                                    <table border="0">
                                                                        <tr>
                                                                            <td style="height: 30px; width: 120px;">
                                                                                <font face="rockwell" size="4" color="darkblue">Description</font>
                                                                            </td>
                                                                            <td style="width: 20px">
                                                                                <font face="rockwell" size="4" color="darkblue">:</font>
                                                                            </td>
                                                                            <td style="height: 30px; width: 500px;">
                                                                                <font face="rockwell" size="4" color="darkblue"><?php echo"$tampildong[description]" ?></font>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="height: 30px; width: 120px;">
                                                                                <font face="rockwell" size="4" color="darkblue">Price</font>
                                                                            </td>
                                                                            <td style="20px;">
                                                                                <font face="rockwell" size="4" color="darkblue">:</font>
                                                                            </td>
                                                                            <td style="height: 30px; width: 5;">
                                                                                <font face="rockwell" size="4" color="darkblue"><?php echo" number_format($tampildong[price])" ?></font>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                                <?php
                                                            }
                                                        }
                                                }
                                            }
                                        } else {
                                            $tampil = $_SESSION['search'];
                                            unset($_SESSION['search']);
                                        }
                                        $query = mysql_query($tampil);
                                        while ($r = mysql_fetch_array($query)) {
                                            unset($_SESSION['search']);
                                            ?>
                                            <li style="height: 300px;">
                                                <a href="product.php?&act=product&detail=<?php echo $r[id_product]; ?>" class="product" title="<?php echo $r[nm_product]; ?>">
                                                    <img src="cms/<?php echo $r[image]; ?>" alt="Product Image 1" />
                                                    <span class="order model"><?php echo $r[nm_product]; ?></span>
                                                    <span class="order"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">IDR</span><?php echo $r[price]; ?><span class="sub-text">.00</span></span></span>
                                                </a>
                                            </li>
                                            <?php
                                        }
                                        echo "<div class='cl'>&nbsp;</div>";
                                        echo "<div class='pagination'><center>$linkHalaman</center></div>";
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