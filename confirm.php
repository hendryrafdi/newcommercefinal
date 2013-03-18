<?php
session_start();
include 'pages/config.php';
if($_SESSION[email]==NULL){
    header("location: login.php");
}
else if(!$_SESSION[email]==NULL){
    $shop = mysql_query("select *from shoppingcart");
    $isi = mysql_num_rows($shop);
    if($isi < 1){
        header("location: product.php");
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
    <head>
        <title>Indosat Mega Media</title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" href="css/images/favicon.ico" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <!--[if IE 6]>
                <link rel="stylesheet" href="css/ie6.css" type="text/css" media="media" />
                <script src="js/png-fix.js" type="text/javascript" charset="utf-8"></script>
        <![endif]-->
        <script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/jquery-func.js" type="text/javascript" charset="utf-8"></script>	
		
		<script src="js/jquery.js"></script>
			<script src="js/jquery.validate.js"></script>
			<script>
			$(document).ready(function(){
			$("#formku").validate();
			});
		</script>

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
                    </div>				<div id="search">
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
                        <h1 id="logo"><a href="#" class="notext" title="Shopper Friend">Login From</a></h1>
                        <a><img src="css/images/judul.png" id="cot"/></a>
                        <div class="cl">&nbsp;</div>
                    </div>
                    <!-- End Header -->
                    <!-- Slider -->
                    <div id="main-slider" style="height: 600px;">
                        <div id="slider-holder" style="height: 550px;">
                            <div class="judul-kiri">
                                <font face="Pristina" size="10" color="black">Isi Data</font>
                            </div>
                            <div class="con-kiri">
                                <form id="formku" action="pages/input.php?input=inputform" method="post">
                                    <table border="0">
                                        <tr>
                                            <td style="width: 180px;">
                                                <font face="Gill Sans MT Condensed" size="5" color="black">
                                                    Name
                                                </font>
                                            </td>
                                            <td style="width: 300px;">
                                                <input type="text" name="f_name" placeholder="First Name" style="width: 100px; height: 30px;" value="<?php echo $_SESSION[f_name]?>" required>
                                                    <input type="text" name="l_name" placeholder="Last Name" style="width: 173px; height: 30px;" value="<?php echo $_SESSION[l_name]?>">
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 180px;">
                                                                <font face="Gill Sans MT Condensed" size="5" color="black">
                                                                    Company
                                                                </font>
                                                            </td>
                                                            <td style="width: 300px;">
                                                                <input type="text" name="company" placeholder="Company" style="width: 173px; height: 30px;">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 180px;">
                                                                <font face="Gill Sans MT Condensed" size="5" color="black">
                                                                    No. Telepon
                                                                </font>
                                                            </td>
                                                            <td style="width: 300px;">
                                                                <input type="text" name="telp" placeholder="Phone Number" class="inputlogin riquired number" value="<?php echo $_SESSION[telp]?>" required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 180px;">
                                                                <font face="Gill Sans MT Condensed" size="5" color="black">
                                                                    Alamat
                                                                </font>
                                                            </td>
                                                            <td style="width: 300px;">
                                                                <input type="text" name="address" placeholder="Addres" class="inputlogin"value="<?php echo $_SESSION[address]?>">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 180px;">
                                                                <font face="Gill Sans MT Condensed" size="5" color="black">
                                                                    City
                                                                </font>
                                                            </td>
                                                            <td style="width: 300px;">
                                                                <input type="text" name="city" placeholder="City" style="width: 280px; height: 30px;" required >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 180px;">
                                                                <font face="Gill Sans MT Condensed" size="5" color="black">
                                                                    State
                                                                </font>
                                                            </td>
                                                            <td style="width: 300px;">
                                                                <input type="text" name="state" placeholder="State" style="width: 280px; height: 30px;" required >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 180px;">
                                                                <font face="Gill Sans MT Condensed" size="5" color="black">
                                                                    Country
                                                                </font>
                                                            </td>
                                                            <td style="width: 300px;">
                                                                <input type="text" name="country" placeholder="Country" style="width: 280px; height: 30px;" required >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 180px;">
                                                                <font face="Gill Sans MT Condensed" size="5" color="black">
                                                                    Postcode
                                                                </font>
                                                            </td>
                                                            <td style="width: 300px;">
                                                                <input type="text" name="postcode" placeholder="Postcode" style="width: 130px; height: 30px;" class="riquired number" required >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 180px;">
                                                                <font face="Gill Sans MT Condensed" size="5" color="black">
                                                                    Email
                                                                </font>
                                                            </td>
                                                            <td style="width: 300px;">
                                                                <input type="text" name="email" placeholder="Email" class="inputlogin" value="<?php echo $_SESSION[email]?>" required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td style="width: 180px;">
                                                                <input type="submit" value="Submit"/>
                                                            </td>
                                                        </tr>
                                                        </table>

                                                        </div>
                                                        <div class="garis">
                                                            &nbsp;
                                                        </div>
                                                        <div class="judul-kanan">
                                                            <font face="Pristina" size="10" color="black">Payment Method</font>
                                                        </div>
                                                        <div class="con-kanan">
                                                            <fieldset style="height: 150px; width: 300px;">
                                                                <table border="0" style="height: 130px; width: 300px;">
                                                                    <tr>
                                                                        <td style="height: 3px;">
                                                                            <input type="radio" name="pembayaran" value="cod">
                                                                        </td>
                                                                        <td style="height: 3px;">
                                                                            <font face="rockwell" color="black" size="3">Bayar Ditempat (COD)</font>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="height: 5px;">

                                                                        </td>
                                                                        <td style="height: 5px;">
                                                                            <font face="rockwell" size="2" color="black"><br>Pembayaran Tunai Saat Barang Diterima.<br>Gratis Ongkos Pengantaran Barang<font>
                                                                                            </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td colspan="2" style="height: 3px;">
                                                                                                    <hr style="width: 280px;"></hr>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <input type="radio" name="pembayaran" value="tb" disabled>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <font face="rockwell" size="3" color="black">Transfer Bank</font>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td colspan="2" style="height: 3px;">
                                                                                                    <hr style="width: 280px;"></hr>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td style="height: 5px;">
                                                                                                    <input type="radio" name="pembayaran" value="kk" disabled>
                                                                                                </td>
                                                                                                <td style="height: 5px;">
                                                                                                    <font face="rockwell" size="3" color="black">Kartu Kredit</font>
                                                                                                </td>
                                                                                            </tr>
                                                                                            </table>
                                                                                            </fieldset>
                                                                                            </form>
                                                                                            <div class="bnext">
                                                                                                <img src="css/images/button_next.png" style="height: 40px;">
                                                                                            </div>
                                                                                            </div>
                                                                                            </div>

                                                                                            </div>
                                                                                            <!-- End Slider -->
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
                                                                                                                <h4>about wooden toy</h4>
                                                                                                                <p>Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. <a href="#" title="Duis autem">Duis autem</a> vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu</p>
                                                                                                                <a href="#" class="more-link" title="Read More">Read More >></a>
                                                                                                            </li>
                                                                                                            <li class="col social">
                                                                                                                <h4>get social</h4>
                                                                                                                <ul>
                                                                                                                    <li><a href="#" class="fb-link" title="Facebook">facebook</a></li>
                                                                                                                    <li><a href="#" class="twitter-link" title="Twitter">twitter</a></li>
                                                                                                                    <li><a href="#" class="behance-link" title="Behance">behance</a></li>
                                                                                                                    <li><a href="#" class="blogger-link" title="Blogger">blogger</a></li>
                                                                                                                    <li><a href="#" class="digg-link" title="Digg">digg</a></li>
                                                                                                                </ul>
                                                                                                            </li>
                                                                                                            <li class="col partners">
                                                                                                                <h4>partners</h4>
                                                                                                                <ul>
                                                                                                                    <li><a href="#" title="Lorem ipsum dolor">Lorem ipsum dolor</a></li>
                                                                                                                    <li><a href="#" title="Cras eu lorem id mauris">Cras eu lorem id mauris</a></li>
                                                                                                                    <li><a href="#" title="Proin et velit ut libero">Proin et velit ut libero</a></li>
                                                                                                                    <li><a href="#" title="Velit esse molestie consequat">Velit esse molestie consequat</a></li>
                                                                                                                    <li><a href="#" title="Vel illum dolore eu">Vel illum dolore eu</a></li>
                                                                                                                </ul>
                                                                                                            </li>
                                                                                                            <li class="col contact">
                                                                                                                <h4>newsletter</h4>
                                                                                                                <p>Etiam consectetur dui dignissim nulla</p>
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
                                                                                                    <p class="copy">&copy; Sitename.com. Design by <a href="http://css-free-templates.com/">CSS-FREE-TEMPLATES.COM</a></p>
                                                                                                    <a href="#" class="logo" title="Shopper Friend"><img src="css/images/footer-logo.png" alt="Shopper Friend" /></a>
                                                                                                    <div class="cl">&nbsp;</div>
                                                                                                </div>
                                                                                                <!-- End Shell -->
                                                                                            </div>
                                                                                            <!-- End Footer -->
                                                                                            </body>
                                                                                            </html>