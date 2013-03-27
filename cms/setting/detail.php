<?php 
session_start();
if($_SESSION['email']==NULL){
    echo "<script>window.location=('login.html')</script>";
}
if($_SESSION['level'] == 'u'){
    echo "<script>window.location=('../index.php')</script>";
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
    <body style="background-image: url(../images/Beautiful.jpg);">
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
                    <?php
                    if(!isset($_GET[oid])){
                        echo "<script>window.location=('order.php')</script>";
                    } else {
                        $qorder = mysql_query("SELECT orders.id_order, orders.id_user, orders.id_product, orders. customer_name, orders.customer_company, orders. address, orders.city, orders.state, orders.country, orders.postcode, orders.telp, product.nm_product, orders.qty, orders.payment_method, orders.status, orders.date_purchased FROM product, orders 
WHERE product.id_product=orders.id_product and orders.id_order='$_GET[oid]'");
                        $row = mysql_fetch_array($qorder)
                    ?>
                    <table>
                        <tr>
                            <td>ID Order</td>
                            <td>: <?php echo $row[id_order] ?></td>
                        </tr>
                        <tr>
                            <td>ID Product</td>
                            <td>: <?php echo $row[id_product] ?></td>
                        </tr>
                        <tr>
                            <td>ID User</td>
                            <td>: <?php echo $row[id_user] ?></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>: <?php echo $row[customer_name] ?></td>
                        </tr>
                        <tr>
                            <td>Company</td>
                            <td>: <?php echo $row[customer_company] ?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>: <?php echo $row[address] ?></td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td>: <?php echo $row[city] ?></td>
                        </tr>
                        <tr>
                            <td>State</td>
                            <td>: <?php echo $row[state] ?></td>
                        </tr>
                        <tr>
                            <td>Country</td>
                            <td>: <?php echo $row[country] ?></td>
                        </tr>
                        <tr>
                            <td>Postcode</td>
                            <td>: <?php echo $row[postcode] ?></td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>: <?php echo $row[telp] ?></td>
                        </tr>
                        <tr>
                            <td>Product</td>
                            <td>: <?php echo $row[nm_product] ?></td>
                        </tr>
                        <tr>
                            <td>Qty</td>
                            <td>: <?php echo $row[qty] ?></td>
                        </tr>
                        <tr>
                            <td>Date purchased</td>
                            <td>: <?php echo $row[date_purchased] ?></td>
                        </tr>
                        <tr>
                            <td>Payment method</td>
                            <td>: <?php echo $row[payment_method] ?></td>
                        </tr>
                        <tr>
                            <td>Status order</td>
                            <td>: <?php echo $row[status] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
