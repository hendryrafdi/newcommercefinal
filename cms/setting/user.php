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
        <link rel="stylesheet" type="css/text" href="../css/style.css"/>
    </head>
    <body style="background-image: url(../images/images.jpg);">
        <div class="menu">
            <center>
			  <div class="apaan">
                <nav>
                    <ul>
                        <li><a href="banner.php">Banner</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="order.php">Order</a></li>
                        <li><a href="user.php">User</a></li>
                        <li><a href="..">Finish</a></li>
                    </ul>
                </nav>
			  </div>
            </center>
        </div>
        <div class="content">
            <div class="wrapper">
                <div class="main">
					<h1>Setting Users</h1>
                    <center>
					 <div class="pos">
					  <div class="box2">
							 <table>
                                <caption><h3>All Member</h3></caption>
                                <thead>
                                    <tr>
                                        <th>Id User</th> 
                                        <th>F Name</th> 
                                        <th>L Name</th> 
                                        <th>Gander</th> 
                                        <th>Birthday Place</th> 
                                        <th>Birthday</th>
										<th>Address</th>
										<th>Telp</th> 
										<th>Email</th> 
										<th>Password</th>
										<th>Level</th> 
										<th colspan="2">Modify</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
										$query = mysql_query("select *from user");
										while ($tampil = mysql_fetch_array($query)){
									?>
                                        <tr>
                                            <td><?php echo $tampil[id_user]?></td>
                                            <td><?php echo $tampil[f_name]?></td>
                                            <td><?php echo $tampil[l_name]?></td>
                                            <td><?php echo $tampil[gender]?></td>
                                            <td><?php echo $tampil[birthday_place]?></td>
                                            <td><?php echo $tampil[birthday]?></td>
											<td><?php echo $tampil[address]?></td>
											<td><?php echo $tampil[telp]?></td>
											<td><?php echo $tampil[email]?></td>
											<td><?php echo $tampil[password]?></td>
											<td><?php echo $tampil[level]?></td>
											<td><a href="user.php?edit=<?php echo $tampil[id_user]?>"><img src="../../css/images/reply.png"/></td>
											<td><a href="../../pages/proses_delete_user.php?del=<?php echo $tampil[id_user]?>"><img src="../../css/images/sign_cross.png"/></td>
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
							$query	= mysql_query("select *from user where id_user = '$id'");
							$tampil = mysql_fetch_array($query);
						?>
						
						<div class="pos2">
						<div class="box2">
						<form action="../../pages/proses_user.php" method="post">
						 <table>
                                <caption><h3>Edit Form</h3></caption>
                                <thead>
                                    <tr> 
                                        <th>F Name</th> 
                                        <th>L Name</th> 
                                        <th>Gender</th> 
                                        <th>Place</th> 
                                        <th>Birthday</th>
										<th>Address</th> 
										<th>Telp</th>
										<th>Email</th>
										<th>password</th>
										<th>Level</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
											<input type="hidden" name="id_user" value="<?php echo $tampil[id_user]?>" style="width: 100px;">
                                            <td><input type="text" name="f_name" value="<?php echo $tampil[f_name]?>" style="width: 100px;"></td>
                                            <td><input type="text" name="l_name" value="<?php echo $tampil[l_name]?>" style="width: 100px;"></td>
                                            <td><input type="text" name="gender" value="<?php echo $tampil[gender]?>" style="width: 60px;"></td>
                                            <td><input type="text" name="birthday_place" value="<?php echo $tampil[birthday_place]?>" style="width: 100px;"></td>
                                            <td><input type="text" name="birthday" value="<?php echo $tampil[birthday]?>" style="width: 100px;"></td>
											<td><input type="text" name="address" value="<?php echo $tampil[address]?>" style="width: 100px;"></td>
											<td><input type="text" name="telp" value="<?php echo $tampil[telp]?>" style="width: 100px;"></td>
											<td><input type="text" name="email" value="<?php echo $tampil[email]?>" style="width: 150px;"></td>
											<td><input type="text" name="password" value="<?php echo $tampil[password]?>" style="width: 100px;"></td>
											<td><input type="text" name="level" value="<?php echo $tampil[level]?>" style="width: 50px;"></td>
                                        </tr>
                                </tbody>
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
