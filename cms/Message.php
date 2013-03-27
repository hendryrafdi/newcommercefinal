<?php
session_start();
if ($_SESSION['email'] == NULL) {
    echo "<script>window.location=('../login.html')</script>";
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
    <body style="background-image: url(images/Beautiful.jpg);">
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
                </nav>
			 
            </center>
        </div>
        <div class="content">
            <div class="wrapper">
                <div class="main">
					<h1>All Message</h1>
                    <center>
					 <div class="pos-message">
					  <div class="box2">
							 <table>
                                <thead>
                                    <tr>
                                        <th>Name</th> 
                                        <th>Email</th> 
                                        <th>Content</th> 
                                        <th>Date Added</th>  
										<th colspan="2">Modify</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
										$query = mysql_query("select *from message");
										while ($tampil = mysql_fetch_array($query)){
									?>
                                        <tr>
                                            <td style="width: 80px;"><?php echo $tampil[name]?></td>
                                            <td><?php echo $tampil[email]?></td>
                                            <td style="width: 300px;"><?php echo $tampil[content]?></td>
                                            <td><?php echo $tampil[date_added]?></td>
											<td><a href="Message.php?edit=<?php echo $tampil[id_message]?>"><img src="../css/images/reply.png"/></a></td>
											<td><a href="../pages/proses_delete_user.php?del=<?php echo $tampil[id_user]?>"><img src="../css/images/sign_cross.png"/></a></td>
                                        </tr>
										<?php
											}
										?>
                                </tbody>
                            </table>
						  </div>
						 </div>
						 
						<?php
							$id	= $_GET['edit'];
							$query	= mysql_query("select *from message where id_message = '$id'");
							$tampil = mysql_fetch_array($query);
						?>
							
						<div class="pos2-message">
						<div class="box2">
						<form action="../../pages/proses_user.php" method="post">
						 <table>
								<tr>
									<td>
										<font face="rockwell">To</font>
									</td>
									<td>
										<font face="rockwell">:</font>									
									</td>
									<td>
										<input type="text" name="bales" value="<?php $tampil[email]?>" style="width: 370px;">
									</td>
								</tr>
								<tr>
									<td>
										<font face="rockwell">From</font>
									</td>
									<td>
										<font face="rockwell">:</font>									
									</td>
									<td>
										<input type="text" name="bales" style="width: 370px;">
									</td>
								</tr>
								<tr>
									<td colspan="3">
										<textarea cols="50" rows="10" placeholder="Message"></textarea>
									</td>
								</tr>
                         </table>
							</br>
											<input type="submit" name="button" value="Update"/>
											<a href="user.php" class="css3button">Clear</a>
							</form>
						  </div>
						</div>
						 
                    </center>
                </div>
            </div>
        </div>
    </body>
</html>
