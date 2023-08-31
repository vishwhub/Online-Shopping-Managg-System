<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
    $user_id=$_SESSION['id'];
    $user_products_query="select it.id,it.name,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id'";
    $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $sum=0;
    if($no_of_user_products==0){
        //echo "Add items to cart first.";
    ?>
        <script>
        window.alert("No items in the cart!!");
        </script>
    <?php
    }else{
        while($row=mysqli_fetch_array($user_products_result)){
            $sum=$sum+$row['price']; 
       }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/22.png" />
        <title>Onliine Products Selling Mang. System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style3.css" type="text/css">
    </head>
    <body>
        <div>
            <?php 
               require 'header.php';
            ?>
            <br>
            <div class="table">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Item Number</th><th>Item Name</th><th>Price</th><th></th>
                        </tr>
                       <?php 
                        $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($user_products_result)){
                           
                         ?>
                        <tr>
                            <th><?php echo $counter ?></th><th><?php echo  $row['name']?></th><th><?php echo $row['price']?></th>
                            <th><a href='cart_remove.php?id=<?php echo $row['id'] ?>'>Remove</a></th>
                        </tr>
                       <?php $counter=$counter+1;}?>
                        <tr>
                        <th><span class="glyphicon"></span> Cash On Delivery<input type="radio" id="html" name="COD" value="HTML"><br><th>Total</th><th>Rs <?php echo $sum;?>/-</th><th><a href="success.php?id=<?php echo $user_id?>" class="btn btn-primary">Confirm Order</a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
            <footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
				
               
                   <!-- <p>www.onlineproductssellingmanagementsystem.com</p> -->
                   <h3 class="footer-title"><font style=" font-size: 20px;color: black;"><a  href="about.php">About Us</a></h3>
								
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
