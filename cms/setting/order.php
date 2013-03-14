<?php
session_start();
if ($_SESSION['email'] == NULL) {
    echo "<script>window.location=('../login.html')</script>";
}
include '../inc/config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="css/text" href="../css/setting.css"/>
    </head>
    <body style="background-image: url(../images/images.jpg);">
        <div class="menu">
            <center>
                <nav>
                    <ul>
                        <li><a href="banner.php">Banner</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="order.php">Order</a></li>
                        <li><a href="user.php">User</a></li>
                        <li><a href="..">Finish</a></li>
                    </ul>
                </nav>
            </center>
        </div>
        <div class="content">
            <div class="wrapper">
                <div class="main">
                    <center>
                        <table>
                            <tr>
                                <td>ID Order</td>
                                <td>ID User</td>
                                <td>ID Product</td>
                                <td>Name</td>
                                <td>Company</td>
                                <td>Address</td>
                                <td>City</td>
                                <td>Postcode</td>
                                <td>State</td>
                                <td>Country</td>
                                <td>Phone</td>
                                <td>Quantity</td>
                                <td>Payment</td>
                                <td>Status</td>
                                <td>Date Purchased</td>
                            </tr>
                        </table>
                    </center>
                </div>
            </div>
        </div>
    </body>
</html>
