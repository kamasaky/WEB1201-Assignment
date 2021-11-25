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
        main{font-size: 20px; padding: 50px;}
        .text{font-size: 30px; font-weight: bold;}
        main button{font-size: 30px; background-color: #d3ad7f;}
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
            //echo "<div style='color: white;'>{$_SESSION['login_user']}</div>";
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

<main style="color: white; padding-top: 10px; margin: 100px; background-color: #13131a; padding-bottom: 95px;">
        <img src="images/main-4.png" style="float: left; height: 300px; padding: 50px 100px;">
        <div class="prodname">Sumatra Timo</div><br>
        <div class="prodDesc">Timo comes from the smallholder farming communities located in the the lofty volcanic slopes in the Aceh Gayo highlands. The volcanic fertile soils make this an ideal region for coffee production. The farmers who produce this coffee use shade trees that act like umbrellas. Shade trees allow more time for the coffee cherries to develop and produce its full nutritional potential.
            Indonesia has a particular method of processing coffee, known as Giling Basah or wet-hulling. The farmers remove the outer skin of the coffee cherries mechanically using a pulping machine. The beans, still coated with mucilage, are then stored for a day. The mucilage is washed off and the parchment coffee is partially dried, retaining about 30 – 50% of the moisture content.
            This method reduces acidity and increases body, resulting in a classic Indonesian cup profile.</div><br>
        <div style="font-size: 60px">RM20.99</div>
        <button type="submit"><a href="index.php">Add To Cart</a></button>

</main>

<section class="bottom" style="margin-top: 0px;">

    <div class="send">
        <a href="#" class="facebook"></a>
        <a href="#" class="twitter"></a>
        <a href="#" class="instagram"></a>
        <a href="#" class="linkedin"></a>
        <a href="#" class="pinterest"></a>
    </div>

    <div class="ref">
        <a href="../index.html">Main</a>
        <a href="#">Products</a>
    </div>

    <div class="author">Created By <span>Egor, Kambar, Kathiraj, Jason and Chong</span> | All rights reserved</div>
    <small style="color: #fff;"><i>Copyright &copy; 2021 Nice Coffee</i></small>
</section>


<script src="js/script.js"></script>

</body>
</html>