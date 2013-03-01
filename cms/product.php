<?php
session_start();
include 'inc/config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="css/text" href="css/style.css"/>
    </head>
    <body style="background-image: url(images/images.jpg);">
        <div class="menu">
            <center>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="product.php">Product</a></li>
                        <li><a href="#">Setting</a></li>
                        <li><a href="inc/logout.php">Logout</a></li>
                    </ul>
                </nav>
            </center>
        </div>
        <div class="content">
            <div class="wrapper">
                <div class="main">
                    <div class="box1">
                        <h3>Category</h3><hr>
                        <ul>
                            <li><a href="product.php">All</a></li>
                            <?php
                            $ct = mysql_query("select *from category");
                            while ($rct = mysql_fetch_array($ct)) {
                                ?>
                                <li><a href="product.php?id=<?php echo $rct[id_category]; ?>"><?php echo $rct[nm_category]; ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="sperator">&nbsp;</div>
                    <div class="box2">
                        <?php
                        if (!isset($_GET['id'])) {
                            ?>
                            <table>
                                <caption><h3>All Product</h3></caption>
                                <thead>
                                    <tr>
                                        <th>Product ID</th> 
                                        <th>Category ID</th> 
                                        <th>Product Name</th> 
                                        <th>Category Name</th> 
                                        <th>Image</th> 
                                        <th>Desc</th> 
                                        <th>Price</th> 
                                        <th>Added</th> 
                                        <th>Last Modify</th>
                                        <th colspan="2">Modify</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $all = mysql_query("select product.id_product, category.id_category, category.nm_category, product.nm_product, product.image, product.desc, product.price, product.product_added, product.product_last_modify from category inner join product on category.id_category=product.id_category");
                                    while ($row = mysql_fetch_array($all)) {
                                        ?>
                                        <tr>
                                            <td align="center"><?php echo $row[id_product]; ?></td>
                                            <td align="center"><?php echo $row[id_category]; ?></td>
                                            <td><?php echo $row[nm_product]; ?></td>
                                            <td><?php echo $row[nm_category]; ?></td>
                                            <td><img src="../<?php echo $row[image]; ?>"  style="height: 50px; width: 50px;"/></td>
                                            <td><?php echo $row[desc]; ?></td>
                                            <td><?php echo number_format($row[price]); ?></td>
                                            <td><?php echo $row[product_added]; ?></td>
                                            <td><?php echo $row[product_last_modify]; ?></td>
                                            <td align="center"><a href="product.php?edt=<?php echo $row[id_product] ?>"><img src="../css/images/reply.png"/></a></td>
                                            <td align="center"><a href="#"><img src="../css/images/sign_cross.png"/></a></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <?php
                        } else {
                            $param = abs((int) $_GET['id']);
                            if ($param == '1') {
                                ?>
                                <table>
                                    <caption><h3>Computer</h3></caption>
                                    <thead>
                                        <tr>
                                            <th>Product ID</th> 
                                            <th>Category ID</th> 
                                            <th>Product Name</th> 
                                            <th>Category Name</th> 
                                            <th>Image</th> 
                                            <th>Desc</th> 
                                            <th>Price</th> 
                                            <th>Added</th> 
                                            <th>Last Modify</th>
                                            <th colspan="2">Modify</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $c1 = mysql_query("select *from product, category where category.id_category=1&&product.id_category=1");
                                        while ($r1 = mysql_fetch_array($c1)) {
                                            ?>
                                            <tr>
                                                <td align="center"><?php echo $r1[id_product]; ?></td>
                                                <td align="center"><?php echo $r1[id_category]; ?></td>
                                                <td><?php echo $r1[nm_product]; ?></td>
                                                <td><?php echo $r1[nm_category]; ?></td>
                                                <td><img src="../<?php echo $r1[image]; ?>"  style="height: 50px; width: 50px;"/></td>
                                                <td><?php echo $r1[desc]; ?></td>
                                                <td><?php echo number_format($r1[price]); ?></td>
                                                <td><?php echo $r1[product_added]; ?></td>
                                                <td><?php echo $r1[product_last_modify]; ?></td>
                                                <td align="center"><a href="#"><img src="../css/images/reply.png"/></a></td>
                                                <td align="center"><a href="#"><img src="../css/images/sign_cross.png"/></a></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <?php
                            } else if ($param == '2') {
                                ?>
                                <table>
                                    <caption><h3>Fashion</h3></caption>
                                    <thead>
                                        <tr>
                                            <th>Product ID</th> 
                                            <th>Category ID</th> 
                                            <th>Product Name</th> 
                                            <th>Category Name</th> 
                                            <th>Image</th> 
                                            <th>Desc</th> 
                                            <th>Price</th> 
                                            <th>Added</th> 
                                            <th>Last Modify</th>
                                            <th colspan="2">Modify</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $c2 = mysql_query("select *from product, category where category.id_category=2&&product.id_category=2");
                                        while ($r2 = mysql_fetch_array($c2)) {
                                            ?>
                                            <tr>
                                                <td align="center"><?php echo $r2[id_product]; ?></td>
                                                <td align="center"><?php echo $r2[id_category]; ?></td>
                                                <td><?php echo $r2[nm_product]; ?></td>
                                                <td><?php echo $r2[nm_category]; ?></td>
                                                <td><img src="../<?php echo $r2[image]; ?>"  style="height: 50px; width: 50px;"/></td>
                                                <td><?php echo $r2[desc]; ?></td>
                                                <td><?php echo number_format($r2[price]); ?></td>
                                                <td><?php echo $r2[product_added]; ?></td>
                                                <td><?php echo $r2[product_last_modify]; ?></td>
                                                <td align="center"><a href="#"><img src="../css/images/reply.png"/></a></td>
                                                <td align="center"><a href="#"><img src="../css/images/sign_cross.png"/></a></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <?php
                            } else if ($param == '3') {
                                ?>
                                <table>
                                    <caption><h3>Gadget</h3></caption>
                                    <thead>
                                        <tr>
                                            <th>Product ID</th> 
                                            <th>Category ID</th> 
                                            <th>Product Name</th> 
                                            <th>Category Name</th> 
                                            <th>Image</th> 
                                            <th>Desc</th> 
                                            <th>Price</th> 
                                            <th>Added</th> 
                                            <th>Last Modify</th>
                                            <th colspan="2">Modify</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $c3 = mysql_query("select *from product, category where category.id_category=3&&product.id_category=3");
                                        while ($r3 = mysql_fetch_array($c3)) {
                                            ?>
                                            <tr>
                                                <td align="center"><?php echo $r3[id_product]; ?></td>
                                                <td align="center"><?php echo $r3[id_category]; ?></td>
                                                <td><?php echo $r3[nm_product]; ?></td>
                                                <td><?php echo $r3[nm_category]; ?></td>
                                                <td><img src="../<?php echo $r3[image]; ?>"  style="height: 50px; width: 50px;"/></td>
                                                <td><?php echo $r3[desc]; ?></td>
                                                <td><?php echo number_format($r3[price]); ?></td>
                                                <td><?php echo $r3[product_added]; ?></td>
                                                <td><?php echo $r3[product_last_modify]; ?></td>
                                                <td align="center"><a href="#"><img src="../css/images/reply.png"/></a></td>
                                                <td align="center"><a href="#"><img src="../css/images/sign_cross.png"/></a></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
