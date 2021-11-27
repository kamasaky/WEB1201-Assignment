<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <name>WEB FUNDAMENTALS ECOMMERCE WEBSITE</name>
    <title>Coffee Beans | Home</title>


    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<header class="header">
    <style>
        *{text-transform: none;}
        main{font-size: 20px;}
        .text{font-size: 30px; font-weight: bold; text-align: center;}
        .container {
            height: 200px;
            position: relative;
            border: 3px solid green;
        }
        .center {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        }
    </style>

    <a href="index.php" class="icon">
        <img src=images/logo.png alt="Icon">
    </a>

    <nav class="navigation">
        <a href="index.php">Main</a>
        <a href="#products">Products</a>
        <?php
        if(!isset($_SESSION['login_user'])){
            echo "<a href='login.html'>LogIn</a>";
            echo "<a href='register_account.html'>SignUp</a>";
        }else{
            echo "<a href='logout.php'>Signout</a>";
        }  
        ?>
    </nav>

    <div class="button">
        <a href="cart.php"><div class="fas fa-shopping-cart" style="color:white" id="cart-btn"></div></a>
        <div class="fas fa-bars" id="main-btn"></div>
    </div>

</header>

<main style="color: white; padding: 100px 100px 280px;">
    <div class="text" style="color: #C2B280;">Thank You for your Payment!</div>
    <div class="text" style="color: #C2B280;">Your item will be shipped as soon as possible!</div><br>
    <div class="text">For any Enquiry, Please do not hesitate to contact us<br>
    E-mail: NiceCoffee@gmail.com<br>
    Phone.No:
    03-42036698
    012-2938735<br><br>
    <a href="index.php"><button style="background-color: #C2B280; font-size: 30px;">Back to home</button></a>
    </div>
</main>

<section class="bottom">

    <div class="ref">
        <a href="./index.php">Main</a>
        <a href="./index.php">Products</a>
    </div>

    <div class="author">created by <span>Egor, Kambar, Kathiraj, Jason and Chong</span> | all rights reserved</div>

</section>


<script src="js/script.js"></script>

</body>
</html>