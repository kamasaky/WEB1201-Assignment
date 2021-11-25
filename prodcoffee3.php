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
        <img src="images/main-3.png" style="float: left; height: 300px; padding: 50px 100px;">
        <div class="prodname">Ethiopia</div><br>
        <div class="prodDesc">This wonderful coffee comes all the way from the birth place of coffee itself. I last visited Ethiopia 8 years ago when I was looking to start a vegetable farm there! As I traveled around this rugged yet beautiful country, I couldn’t help but realise how engrained coffee is in the lives and culture of Ethiopians. Almost every restaurant and village I visited I was treated to the wonderful experience of the traditional coffee ceremony. The host, an Ethiopian woman, would roast the green coffee beans in a pan over hot coals. These freshly roasted beans were then ground in a traditional wooden mortar and pestle before being boiled in a clay pot and served to each guest. The aroma and intense, strong flavour of this traditional way of making Ethiopian coffee is truly special.
            Located in Southern Ethiopia, Yirgacheffe is part of the Sidamo region. Because it is infamous to coffee hunters globally, these delicious beans have been sub-divided into their own micro-region. They are grown in steep, fertile, green lands at an elevation of 2,000m and above. Naturally processed, you can look forward to floral notes with hints of peach and wild berry.</div><br>
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