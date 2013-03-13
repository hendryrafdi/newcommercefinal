<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="css/text" href="../css/style.css"/>
    </head>
    <body style="background-image: url(../images/images.jpg);">
		<?php
			include '../../pages/config.php';
			
			$get = $_GET[edt];
			$query = mysql_query("select *from product where id_product = '$get'");
			$tampil = mysql_fetch_array($query);
		?>
        <div class="menu">
            <center>
                <nav>
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="../product.php">Product</a></li>
                        <li><a href="#">Setting</a></li>
                        <li><a href="../inc/logout.php">Logout</a></li>
                    </ul>
                </nav>
            </center>
        </div>
        <div class="content">
            <div class="wrapper">
                <div class="main">
                    <form action="../../pages/proses_edit.php" method="post" enctype="multipart/form-data">
                        <table>
                                <td>Product ID</td>
                                <td>:</td>
                                <td><input type="text" name="id_product" value="<?php echo $tampil[id_product]?>" readonly/></td>
                            </tr>
                            <tr>
                                <td>Id Category</td>
                                <td>:</td>
                                <td><input type="text" name="id_category" value="<?php echo $tampil[id_category]?>"/></td>
                            </tr>
                            <tr>
                                <td>Product Name</td>
                                <td>:</td>
                                <td><input type="text" name="nm_product" value="<?php echo $tampil[nm_product]?>"/></td>
                            </tr>
                            <tr>
                                <td>Desc</td>
                                <td>:</td>
                                <td><input type="text" name="desc" value="<?php echo $tampil[desc]?>"/></td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>:</td>
                                <td>Rp. <input type="text" name="price" value="<?php echo $tampil[price]?>"/></td>
                            </tr>
							<tr>
                                <td><label for="upload">Image</label></td>
                                <td>:</td>
                                <td><input type="file" name="upload" value="<?php echo $tampil[image]?>"></td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td><input type="submit" name="submit" value="Save"/></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
