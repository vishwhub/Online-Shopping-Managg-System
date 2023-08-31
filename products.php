<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/22.png" />
        <title>Online Products Selling mang. System</title>
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
            <div class="container">
                <div class="jumbotron">
                    <h1><font style="font-style:normal; font-size: 53px;color: black;font-family: serif">Welcome To Products Gallery!</font></h1>
                    <p><font style="font-style:bold; font-size: 35px;color: dark-black;font-family: serif">We have the best products with best offer's.</font></p>
                    <br>
                        <form>
                            <center>
                                <tr>
                                    <td></td>
                                        <!-- <input type="text" name="name"> -->
                                        <input class="input" id="search" type="text" placeholder="Search here" size="55" maxwidth="7">    
                                    </tr>    
                                        <p><a href="12.php" role="button" class="btn btn-primary">Search</a></p>                           
                            <center>
                                <a href=12.php>
                        </form>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <div class="thumbnail">
                        
                            <a >
                                <img src="img/33.jpg" alt="Cannon">
                               
                            </a>
                        </div>
                    </div>                
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-2">
                        <div class="thumbnail">
                        
                            <a href="cart.php">
                                <img src="img/3.jpeg" alt="Cannon">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Cannon EOS</h3>
                                    <p>Price: Rs. 36000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-2">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/sony_dslr.jpeg" alt="Sony DSLR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Sony DSLR</h3>
                                    <p>Price: Rs. 39999.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-2">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/ios.jpg" alt="Iphone">
                                    </a>
                                    <center>
                                        <div class="caption">
                                            <h3>Iphone</h3>
                                            <p>Price:Rs.129000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <br><break>
                    <div class="col-md-3 col-sm-2">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/android.webp" alt="android">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Redmi Note 10</h3>
                                    <p>Price: Rs. 19999.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-3 col-sm-2">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/titan301.jpg" alt="Titan 301">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Titan Model #301</h3>
                                    <p>Price: Rs. 13000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/titan201.jpg" alt="Titan 201">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Titan Model #201</h3>
                                    <p>Price: Rs. 3000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div><br>
                    <break>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/16.JPG" alt="">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mac Book</h3>
                                    <p>Price: Rs. 150000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/oswindows.jpg" alt="oswindows">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Dell CORE i7</h3>
                                    <p>Price: Rs. 90000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <div class="thumbnail">
                        
                            <a >
                                <img src="img/34.jpg" alt="Cannon">
                               
                            </a>
                        </div>
                    </div>     
                <div class="row">
                    <div class="col-md-3 col-sm-2">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/02.jpeg" alt="17">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Track Pants</h3>
                                    <p>Price: Rs. 1999.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <br><br>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/pants.jpg" alt="pants">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Calvin Klein</h3>
                                    <p>Price: Rs. 1599.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/HXR.jpg" alt="HXR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Raymond</h3>
                                    <p>Price: Rs. 900.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/pink.jpg" alt="PINK">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Cambridge</h3>
                                    <p>Price: Rs. 1200.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col">
                <div class="col-md-3 col-sm-2">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/12.jpeg" alt="PINK">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Samsung</h3>
                                    <p>Price: Rs. 25999.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col">
                <div class="col-md-3 col-sm-2">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/13.png" alt="PINK">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>INTEX</h3>
                                    <p>Price: Rs. 29999.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col">
                <div class="col-md-3 col-sm-2">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/10.jpg" alt="PINK">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Super Mario Toy</h3>
                                    <p>Price: Rs. 299.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-2">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/9.jpg" alt="PINK">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Oggy Car Toy</h3>
                                    <p>Price: Rs. 149.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <div class="thumbnail">
                        
                            <a >
                                <img src="img/36.jpg" alt="Cannon">
                               
                            </a>
                        </div>
                    </div>                
  
            </div>
            <br>
            <footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
				
               
                   <!-- <p>www.onlineproductssellingmanagementsystem.com</p> -->
                   <h3 class="footer-title"><font style="font-style:double-struck-font; font-size: 20px;color: white;"><a  href="about.php">About Us</a></h3>
								
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
           </footer>
        </div>
    </body>
</html>
