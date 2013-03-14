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
                        <?php 
                        $qu = mysql_query("select *from contact where id_contact = '1'");
                        $m = mysql_fetch_array($qu);
                        ?>
                        <form method="post" action="../inc/editcontact.php">
                            <table>
                                <tr>
                                    <td>No. Telp</td>
                                    <td>:</td>
                                    <td><input type="text" value="<?php echo "+$m[telp]"?>" name="telp"/></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><textarea name="alamat"><?php echo $m[alamat]?></textarea></td>
                                </tr>
                                <tr>
                                    <td>Fax</td>
                                    <td>:</td>
                                    <td><input type="text" value="<?php echo "$m[fax]"?>" name="fax"/></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><input type="text" value="<?php echo "$m[email]"?>" name="email"/></td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td><input type="submit" value="Save"/></td>
                                </tr>
                            </table>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </body>
</html>
