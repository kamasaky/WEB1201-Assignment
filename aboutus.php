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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<header class="header">
    <style>
        *{text-transform: none;}
        main{font-size: 20px;}
        .text{font-size: 30px; font-weight: bold;}
    </style>

    <a href="#" class="icon">
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
            echo "<div style='color: white;'>{$_SESSION['login_user']}</div>";
        }  
        ?>
    </nav>

    <div class="buttons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="main-btn"></div>
    </div>

    <div class="searching-form">
        <input type="search" id="searching-item" placeholder="type here...">
        <label for="searching-item" class="fas fa-search"></label>
    </div>

</header>

<main style="color: white; padding-top: 80px;">
    <div class="text">About Us</div>
          
    <div>Established in 2020, Nice Coffee Sdn Bhd specializes in coffee beans and coffee machine distribution. Nice Coffee SDN BHD is born with PASSION and to CREATE a whole new experience for our partners, channel resellers and end users in Malaysia.</div><br>

    <div class="text">E-mail:</div> NiceCoffee@gmail.com<br><br>

    <div class="text">Phone.No:</div> 03-42036698 <br> 012-2938735<br><br>
            
    <div class="text">Working Hour:</div> 7:00 - 20:00 (Weekday)<br> 8:00 - 18:00 (Weekend)<br><br>

    <div class="text">Office Address :</div>
                69, Jln Tun Emas,<br>
                Titiwangsa, <br>
                53600 Kuala Lumpur.<br><br>
            
            <div class="text">Warehouse Address :</div>
                Lot 48-1 jln sg.semyum ab 32/ab Bukit rimau<br>
                Seksyen 32,<br>
                58200 Kuala Lumpur.<br><br><br>

            <div>
            Do drop an E-mail or a call us for any inquiry.<br>
            Please be patient while waiting for our respond.<br>
            We will try to assist you as fast as possible.
            </div>
        </main>
</main>

<section class="bottom">

    <div class="send">
        <a href="#" class="facebook"></a>
        <a href="#" class="twitter"></a>
        <a href="#" class="instagram"></a>
        <a href="#" class="linkedin"></a>
        <a href="#" class="pinterest"></a>
    </div>

    <div class="ref">
        <a href="./index.php">Main</a>
        <a href="#">Products</a>
    </div>

    <div class="author">created by <span>Egor, Kambar, Kathiraj, Jason and Chong</span> | all rights reserved</div>

</section>


<script src="js/script.js"></script>

</body>
</html>