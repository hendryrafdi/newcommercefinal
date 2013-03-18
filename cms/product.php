<?php
session_start();
if($_SESSION['email']==NULL){
    echo "<script>window.location=('login.html')</script>";
}
if($_SESSION['level'] == 'u'){
    echo "<script>window.location=('../index.php')</script>";
}
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
                        <li><a href="setting">Setting</a></li>
						<li><a href="Message.php">Message</a></li>
						<li><a href="category.php">Category</a></li>
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
                            <li>
                                <a href="product.php?id=new">New Product</a>
                            </li>
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
                                    $all = mysql_query("select product.id_product, category.id_category, category.nm_category, product.nm_product, product.image, product.description, product.price, product.product_added, product.product_last_modify from category inner join product on category.id_category=product.id_category");
                                    while ($row = mysql_fetch_array($all)) {
                                        ?>
                                        <tr>
                                            <td align="center"><?php echo $row[id_product]; ?></td>
                                            <td align="center"><?php echo $row[id_category]; ?></td>
                                            <td><?php echo $row[nm_product]; ?></td>
                                            <td><?php echo $row[nm_category]; ?></td>
                                            <td><img src="<?php echo $row[image]; ?>"  style="height: 50px; width: 50px;"/></td>
                                            <td><?php echo $row[description]; ?></td>
                                            <td><?php echo number_format($row[price]); ?></td>
                                            <td><?php echo $row[product_added]; ?></td>
                                            <td><?php echo $row[product_last_modify]; ?></td>
                                            <td align="center"><a href="lib/edit.php?edt=<?php echo $row[id_product] ?>"><img src="../css/images/reply.png"/></a></td>
                                            <td align="center"><a href="inc/delete_product.php?del=<?php echo $row[id_product] ?>"><img src="../css/images/sign_cross.png"/></a></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <?php
                        } else if ($_GET[id] == 'new') {
                            ?>
                            <form action="../pages/proses_save.php" method="post"  enctype="multipart/form-data">
                                <table>
                                    <caption><h3>Add New Product</h3></caption>
                                    <thead>
                                        <tr>
                                            <th>Category ID</th> 
                                            <th>Product Name</th> 
                                            <th>Image</th> 
                                            <th>Desc</th> 
                                            <th>Price</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" name="category_id" style="width: 90px;"></td>
                                            <td><input type="text" name="product_name"></td>
                                            <td><input type="file" name="upload"></td>
                                            <td><input type="text" name="description"></td>
                                            <td><input type="text" name="price"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <input type="submit" name="button" value="save">
                                <?php
                            } else {
                                $param = abs((int) $_GET['id']);
                                $query = mysql_query("select *from product, category where category.id_category=$param&&product.id_category=$param");
                                $r = mysql_fetch_array($query);
                                ?>
                                <table>
                                <caption><h3><?php echo $r[nm_category]?></h3></caption>
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
                                    $all = mysql_query("select *from product, category where category.id_category=$param&&product.id_category=$param");
                                    while ($row = mysql_fetch_array($all)) {
                                        ?>
                                        <tr>
                                            <td align="center"><?php echo $row[id_product]; ?></td>
                                            <td align="center"><?php echo $row[id_category]; ?></td>
                                            <td><?php echo $row[nm_product]; ?></td>
                                            <td><?php echo $row[nm_category]; ?></td>
                                            <td><img src="<?php echo $row[image]; ?>"  style="height: 50px; width: 50px;"/></td>
                                            <td><?php echo $row[description]; ?></td>
                                            <td><?php echo number_format($row[price]); ?></td>
                                            <td><?php echo $row[product_added]; ?></td>
                                            <td><?php echo $row[product_last_modify]; ?></td>
                                            <td align="center"><a href="lib/edit.php?edt=<?php echo $row[id_product] ?>"><img src="../css/images/reply.png"/></a></td>
                                            <td align="center"><a href="inc/delete_product.php?del=<?php echo $row[id_product] ?>"><img src="../css/images/sign_cross.png"/></a></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                                <?php
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
