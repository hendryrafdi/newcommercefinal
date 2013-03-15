<?php 
session_start();
if($_SESSION['email']==NULL){
    echo "<script>window.location=('login.html')</script>";
}
if($_SESSION['level'] == 'u'){
    echo "<script>window.location=('../index.php')</script>";
}
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
                    <div id="welc">
                        <h1>Welcome Administator</h1>
                        <p><?php echo "Admin name : <b>$_SESSION[f_name] $_SESSION[l_name]</b>"; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
