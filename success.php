<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_GET['id'];
        $confirm_query="update users_items set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
        
    }
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
        <link rel="stylesheet" href="css/a2.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <meta name="viewport" content= 
        "width=device-width, initial-scale=1.0"> 
        <title>Text Animation</title> 
        <link rel="stylesheet" href="a2.css"> 
        <html lang="en">

    </head> 

    <body>
        <br><br><br><br><br><br><br><br><br><br>
           <span class="text1"><center><font style="font-style:normal; font-size: 82px;color: black;font-family: serif">Your order is confirmed.</font><center></span> 
            <span class="text2"> <a href="bill.html"  class="btn btn-info">INVOICE</a> <font style="font-style:normal; font-size: 30px;color: white;font-family: serif">Click here to Check bill.</font></span> 

    </body>
</html>
