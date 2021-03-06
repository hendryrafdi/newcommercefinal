<?php session_start();
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
                    <div id="main-slider">
                        <div id="slider-holder">
                            <div class="judul-kiri">
                                <font face="Pristina" size="10" color="black">Isi Data</font>
                            </div>
                            <div class="con-kiri">
                                <form method="post" action="pages/proses_login.php">
                                    <table border="0">
                                        <tr>
                                            <td style="width: 100px;">
                                                <font face="Gill Sans MT Condensed" size="5" color="black">
                                                    Email
                                                </font>
                                            </td>
                                            <td style="width: 300px;">
                                                <input type="text" name="email" placeholder="Email" class="inputlogin">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <font face="Gill Sans MT Condensed" size="5" color="black">
                                                    Password
                                                </font>
                                            </td>
                                            <td style="width: 300px;">
                                                <input type="password" name="password" placeholder="Password" class="inputlogin">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="width: 180px;">
                                                <input type="image" value="login" src="css/images/button_login.png" style="height: 40px;"/>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                            <div class="garis2">
                                &nbsp;
                            </div>
                            <div class="judul-kanan">
                                <font face="Pristina" size="10" color="black">Register</font>
                            </div>
                            <div class="con2-kanan">
                                <form method="post" action="pages/saveuser.php">
                                    <table border="0">
                                        <tr>
                                            <td style="width: 180px;">
                                                <font face="Gill Sans MT Condensed" size="5" color="black">
                                                    Username
                                                </font>
                                            </td>
                                            <td style="width: 300px;">
                                                <input type="text" name="f_name" placeholder="First Name" style="width: 100px; height: 30px;" required>
                                                    <input type="text" name="l_name" placeholder="Last Name" style="width: 173px; height: 30px;">
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 180px;">
                                                                <font face="Gill Sans MT Condensed" size="5" color="black">
                                                                    Tempat, Tanggal Lahir
                                                                </font>
                                                            </td>
                                                            <td style="width: 300px;">
                                                                <input type="text" name="birthday_place" placeholder="Birthday_place" style="width: 130px; height: 30px;" required>
                                                                    <input type="date" name="birthday" style="height: 30px; width: 143px;">
                                                                        </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 180px;">
                                                                                <font face="Gill Sans MT Condensed" size="5" color="black">
                                                                                    Jenis Kelamin
                                                                                </font>
                                                                            </td>
                                                                            <td style="width: 300px;">
                                                                                <input type="radio" name="gender" value="l"><font color="black"> Laki-Laki </font>
																				<input type="radio" name="gender" value="p"><font color="black"> Perempuan</font>
																			</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 180px;">
                                                                                <font face="Gill Sans MT Condensed" size="5" color="black">
                                                                                    No. Telepon
                                                                                </font>
                                                                            </td>
                                                                            <td style="width: 300px;">
                                                                                <input type="text" name="telp" placeholder="Phone Number" class="inputlogin" required>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 180px;">
                                                                                <font face="Gill Sans MT Condensed" size="5" color="black">
                                                                                    Alamat
                                                                                </font>
                                                                            </td>
                                                                            <td style="width: 300px;">
                                                                                <input type="text" name="address" placeholder="Address" class="inputlogin" required>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 180px;">
                                                                                <font face="Gill Sans MT Condensed" size="5" color="black">
                                                                                    Email
                                                                                </font>
                                                                            </td>
                                                                            <td style="width: 300px;">
                                                                                <input type="email" name="email" placeholder="Email" class="inputlogin" required>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 180px;">
                                                                                <font face="Gill Sans MT Condensed" size="5" color="black">
                                                                                    Password
                                                                                </font>
                                                                            </td>
                                                                            <td style="width: 300px;">
                                                                                <input type="password" name="password" placeholder="Password" class="inputlogin" required>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td style="width: 180px;">
                                                                                <input type="image" value="Sign Up" src="css/images/button_signup.png" style="height: 40px;"/>
                                                                            </td>
                                                                        </tr>
                                                                        </table>
                                                                        </form>
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