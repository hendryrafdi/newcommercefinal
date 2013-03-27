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
                    <center>
                        <?php
                        if (!isset($_GET['edt'])) {
                            ?>
                            <table border="2">
                                <?php
                                $q = mysql_query("select *from slideshow");
                                while ($t = mysql_fetch_array($q)) {
                                    ?>
                                    <tr>
                                        <td colspan="2">Slide <?php echo $t[id_slide] ?></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"><img src="<?php echo "$t[link]" ?>" id="thumb"/></td>
                                        <td valign="top"><textarea><?php echo $t[nm_slide] ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><a class="btn" href="banner.php?edt=<?php echo $t[id_slide] ?>">Edit</a></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </table>
                            <?php
                        } else {
                            $pr = $_GET['edt'];
                            if ($pr == '1') {
                                ?>
                                <form method="post" action="../inc/editslide.php" enctype="multipart/form-data">
                                    <table border="2">
                                        <?php
                                        $q = mysql_query("select *from slideshow where id_slide = $pr ");
                                        $t = mysql_fetch_array($q)
                                        ?>
                                        <tr><input type="hidden" name="id_slide" value="<?php echo $t[id_slide] ?>"/>
                                        <td colspan="2">Slide <?php echo $t[id_slide] ?></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"><img src="<?php echo "$t[link]" ?>" id="thumb" name="thumb"/></td>
                                            <td valign="top"><textarea name="desc"><?php echo $t[nm_slide] ?></textarea><br><input type="file" name="upload"/></td>
                                        </tr>
                                        <tr>
                                            <td><input type="submit" value="Save" class="btn"/><a href="banner.php" class="btn">Cancel</a></td>
                                        </tr>
                                    </table>
                                </form>
                                <?php
                            } else if ($pr == '2') {
                                ?>
                                <form method="post" action="../inc/editslide.php" enctype="multipart/form-data">
                                    <table border="2">
                                        <?php
                                        $q = mysql_query("select *from slideshow where id_slide = $pr ");
                                        $t = mysql_fetch_array($q)
                                        ?>
                                        <tr><input type="hidden" name="id_slide" value="<?php echo $t[id_slide] ?>"/>
                                        <td colspan="2">Slide <?php echo $t[id_slide] ?></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"><img src="<?php echo "$t[link]" ?>" id="thumb" name="thumb"/></td>
                                            <td valign="top"><textarea name="desc"><?php echo $t[nm_slide] ?></textarea><br><input type="file" name="upload"/></td>
                                        </tr>
                                        <tr>
                                            <td><input type="submit" value="Save" class="btn"/><a href="banner.php" class="btn">Cancel</a></td>
                                        </tr>
                                    </table>
                                </form>
                                <?php
                            } else if ($pr == '3') {
                                ?>
                                <form method="post" action="../inc/editslide.php" enctype="multipart/form-data">
                                    <table border="2">
                                        <?php
                                        $q = mysql_query("select *from slideshow where id_slide = $pr ");
                                        $t = mysql_fetch_array($q)
                                        ?>
                                        <tr><input type="hidden" name="id_slide" value="<?php echo $t[id_slide] ?>"/>
                                        <td colspan="2">Slide <?php echo $t[id_slide] ?></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"><img src="<?php echo "$t[link]" ?>" id="thumb" name="thumb"/></td>
                                            <td valign="top"><textarea name="desc"><?php echo $t[nm_slide] ?></textarea><br><input type="file" name="upload"/></td>
                                        </tr>
                                        <tr>
                                            <td><input type="submit" value="Save" class="btn"/><a href="banner.php" class="btn">Cancel</a></td>
                                        </tr>
                                    </table>
                                </form>
                                <?php
                            } else if ($pr == '4') {
                                ?>
                                <form method="post" action="../inc/editslide.php" enctype="multipart/form-data">
                                    <table border="2">
                                        <?php
                                        $q = mysql_query("select *from slideshow where id_slide = $pr ");
                                        $t = mysql_fetch_array($q)
                                        ?>
                                        <tr><input type="hidden" name="id_slide" value="<?php echo $t[id_slide] ?>"/>
                                        <td colspan="2">Slide <?php echo $t[id_slide] ?></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"><img src="<?php echo "$t[link]" ?>" id="thumb" name="thumb"/></td>
                                            <td valign="top"><textarea name="desc"><?php echo $t[nm_slide] ?></textarea><br><input type="file" name="upload"/></td>
                                        </tr>
                                        <tr>
                                            <td><input type="submit" value="Save" class="btn"/><a href="banner.php" class="btn">Cancel</a></td>
                                        </tr>
                                    </table>
                                </form>
                                <?php
                            }
                        }
                        ?>
                    </center>
                </div>
            </div>
        </div>
    </body>
</html>
