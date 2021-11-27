<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, Firefox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <name>WEB FUNDAMENTALS ECOMMERCE WEBSITE</name>
    <title>Coffee Beans | Home</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/articles.css">
    <script src="../../js/store.js" async></script>

</head>
<body>
    
<header class="header">
<a href="../../index.php" class="icon">
        <img src="../../images/logo.png" alt="Icon">
    </a>

    <nav class="navigation">
    <a href="../../index.php" class="icon">Main</a>
        <a href="../about us/aboutus.php">About Us</a>
        <a href="../../index.php">Products</a>
        <a href="#">Articles</a>

        <?php
        if(!isset($_SESSION['login_user'])){
            echo "<a href='../../login.html'>LogIn</a>";
            echo "<a href='../../register_account.html'>SignUp</a>";
        }else{
            echo "<a href='../../logout.php'>Signout</a>";
        } 
        ?>
        <a href="../../cart.php">Cart</a>
    </nav>



</header>

    <section class="blogpost">
        <div class="article-content">
                <div class="item">
                    <div class="pic">
                        <img src="../../images/barista2.jpeg" alt="article preview">
                <h2>Adam Driver, 2-time World Barristers Competition Winner </h2>
                <br>
                <h3>Beginners guide to becoming a home brewed coffee connoisseur</h3>
                <br>
                <p>So, you enjoy your favourite coffee shop's coffee and want to replicate the same level of excellence at home. Many newcomers are intimidated by this, but I have good news: while preparing specialty-grade espresso-based drinks at home is an expensive investment, manual brewing is considerably less so. First and foremost, novices require coffee beans! Instead of ground coffee, I advocate using whole beans (more on why in a bit). However, other than that, it’s all down to your personal tastes. Perhaps you like your coffee floral and fruity. Or maybe you’d prefer something a little nuttier with chocolate notes? Not a problem: just ask the barista at your coffee shop for a recommendation. They probably sell the beans you’ve been drinking there, too!</p>
                <br>
                <p>There are many more types of brewing devices! You’ll find innovative refinements on the traditional pour over methods, brewers designed specifically for use on the go, batch brewers, and more. And of course, there’s also the syphon and the ibrik – complex, traditional brewing methods which are not recommended for beginners. Trust us, you’ll understand why when you see them. You should also take into account your serving vessel and filters. Different filters will catch more or less of the oils in coffee (and, of course, will also have an impact on the environment).</p>
                <br>
                <p>There are two types of grinders: burr and blade. Burr grinders are generally considered superior to blade ones. This is because the coffee will be more evenly ground, which leads to better consistency. (When you make a great coffee, you want to be able to make it again, right?) On the other hand, blade grinders are usually much more affordable. Beginners may want to start with a handheld burr grinder, which can offer good quality at a reasonable price.</p>
                <br>
            </p>
            </section>


<section class="bottom">

    <div class="ref">
    <div class="ref">
        <a href="../../index.php">Main</a>
        <a href="../about us/aboutus.php">About Us</a>
        <a href="../../index.php">Products</a>
        <a href="#">Articles</a>
    </div>

    <div class="author">created by <span>Egor, Kambar, Kathiraj, Jason and Chong</span> | all rights reserved</div>

</section>


<script src="../../js/script.js"></script>

</body>
</html>
