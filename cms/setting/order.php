<?php
session_start();
if ($_SESSION['email'] == NULL) {
    echo "<script>window.location=('../login.html')</script>";
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
                        <table border="1">
                            <tr align="center">
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
                                <td>Date Purchased</td>
                                <td>Status</td>
                                <td colspan="2">Modify</td>
                            </tr>

                            <?php
                            $qorder = mysql_query("select *from orders");
                            while ($row = mysql_fetch_array($qorder)) {
                                ?>
                                <tr>
                                    <td align="center"><?php echo $row[id_order] ?></td>
                                    <td align="center"><?php echo $row[id_user] ?></td>
                                    <td align="center"><?php echo $row[id_product] ?></td>
                                    <td><?php echo $row[customer_name] ?></td>
                                    <td><?php echo $row[customer_company] ?></td>
                                    <td><?php echo $row[address] ?></td>
                                    <td><?php echo $row[city] ?></td>
                                    <td><?php echo $row[postcode] ?></td>
                                    <td><?php echo $row[state] ?></td>
                                    <td><?php echo $row[country] ?></td>
                                    <td><?php echo $row[telp] ?></td>
                                    <td align="center"><?php echo $row[qty] ?></td>
                                    <td><?php echo $row[payment_method] ?></td>
                                    <td><?php echo $row[date_purchased] ?></td>
                                    <td><?php echo $row[status] ?></td>
                                    <td><a href="../inc/status.php?stats=active&id=<?php echo $row[id_order]?>"><img src="../../css/images/checklist.png" style="width: 25px; height: 25px;"/></a></td>
                                    <td><a href="../inc/status.php?stats=deactive&id=<?php echo $row[id_order]?>"><img src="../../css/images/sign_cross.png" style="width: 25px; height: 25px;"/></a></td>
                                </tr>

                                <?php
                            }
                            ?>
                        </table>
                    </center>
                </div>
            </div>
        </div>
    </body>
</html>
