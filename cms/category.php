<?php
session_start();
if ($_SESSION['email'] == NULL) {
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
						<li><a href="message.php">Message</a></li>
						<li><a href="category.php">Category</a></li>
						<li><a href="inc/logout.php">Logout</a></li>
                    </ul>
                </nav>
            </center>
        </div>
        <div class="content">
            <div class="wrapper">
                <div class="main">
                    <center>
                        <div style ="position: relative; top: 250px; left: -150px; margin-bottom: 20px">
                            <div class="box2">
                                <?php
                                if (!isset($_GET['act'])) {
                                    ?>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>ID Category</th>
                                                <th>Category Name</th>
                                                <th colspan="2">Modify</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = mysql_query("select *from category");
                                            while ($row = mysql_fetch_array($query)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row[id_category]; ?></td>
                                                    <td><?php echo $row[nm_category]; ?></td>
                                                    <td align="center"><a href="category.php?act=edit&id=<?php echo $row[id_category] ?>"><img src="../css/images/reply.png"/></a></td>
                                                    <td align="center"><a href="category.php?act=del&id=<?php echo $row[id_category] ?>"><img src="../css/images/sign_cross.png"/></a></td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <br><br>
                                    <form method="post" action="inc/category.php?act=save">
                                        <table>
                                            <caption>New Category</caption>
                                            <thead>
                                                <tr>
                                                    <th>Category Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="text" name="nm_category" required /></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="submit" value="Save"/></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                    <?php
                                } else if ($_GET['act'] == "edit") {
                                    ?>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>ID Category</th>
                                                <th>Category Name</th>
                                                <th colspan="2">Modify</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = mysql_query("select *from category");
                                            while ($row = mysql_fetch_array($query)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row[id_category]; ?></td>
                                                    <td><?php echo $row[nm_category]; ?></td>
                                                    <td align="center"><a href="category.php?act=edit&id=<?php echo $row[id_category] ?>"><img src="../css/images/reply.png"/></a></td>
                                                    <td align="center"><a href="category.php?act=del&id=<?php echo $row[id_category] ?>"><img src="../css/images/sign_cross.png"/></a></td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <br><br>
                                    <form method="post" action="inc/category.php?act=edit">
                                        <table>
                                            <caption>Ubah Category</caption>
                                            <thead>
                                                <tr>
                                                    <th>Category Name</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $q1 = mysql_query("select *from category where id_category = '$_GET[id]'");
                                            $show = mysql_fetch_array($q1);
                                            ?>
                                            <tbody>
                                                <tr><input type="hidden" value="<?php echo $show[id_category]?>" name="id"/>
                                                    <td><input type="text" value="<?php echo $show[nm_category] ?>" name="nm_category" required /></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="submit" value="Edit" /></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                    <?php
                                } else if ($_GET['act'] == "del") {
                                    $del = mysql_query("delete from category where id_category = '$_GET[id]'");
                                    if ($del) {
                                        echo "<script>alert('delete success'); window.location=('category.php');</script>";
                                    } else {
                                        echo "<script>alert('delete failed'); window.location=('category.php');</script>";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </body>
</html>
