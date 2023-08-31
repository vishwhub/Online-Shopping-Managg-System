<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/22.png" />
        <title>Online Products Selling Mang. System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <p>You have been logged out. <a href="login.php">Login again.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br>
            <footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
				
               
                   <!-- <p>www.onlineproductssellingmanagementsystem.com</p> -->
                   <h3 class="footer-title"><font style="font-style:double-struck-font; font-size: 20px;color: black;">About Us</h3>
								
								<ul class="footer-links">
									<li><a href="#"><font style="font-style:normal; font-size: 18px;color: aliceblue;font-family: serif">Address:Online Products selling Management System Private limited,Outer Ring road,Bengaluru,5432345,Karnatak,India</font></a></li>
									<li><a href="#"><font style="font-style:normal; font-size: 18px;color: aliceblue;font-family: serif">9846372444</a></li>
									<li><a href="#"><font style="font-style:normal; font-size: 18px;color: aliceblue;font-family: serif">abc@gmail.com</a></li>
                                    <li><a href="#"><font style="font-style:normal; font-size: 20px;color: aliceblue;font-family: serif">Help!</a></li>
								</ul>
                                <center>
                                <span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;2022 All rights reserved
							
							</span>
               </center>
        </div>
    </body>
</html>
