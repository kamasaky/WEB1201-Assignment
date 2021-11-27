<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nice Coffee Website</title>
    <link rel="stylesheet" href="../../css/style.css">
    
</head>
<body>
    
<header class="header">
    <style>
        *{text-transform: none;}
        main{font-size: 20px; padding: 50px;}
        .text{font-size: 30px; font-weight: bold;}
        main button{font-size: 30px; background-color: #d3ad7f;}
    </style>

    <a href="../../index.php" class="icon">
        <img src=../../images/logo.png alt="Icon">
    </a>

    <nav class="navigation">
    <a href="../../index.php" class="icon">Main</a>
        <a href="../about us/aboutus.php">About Us</a>
        <a href="../../index.php">Products</a>
        <a href="../articles/articles.php">Articles</a>
        <?php
        if(!isset($_SESSION['login_user'])){
            echo "<a href='../../login.html'>LogIn</a>";
            echo "<a href='../../register_account.html'>SignUp</a>";
        }else{
            echo "<a href='../../logout.php'>Signout</a>";
        }  
        ?>
    </nav>
</header>

<main style="color: white; padding-top: 10px; margin: 100px; background-color: #13131a; padding-bottom: 95px;">
        <img src="../../images/main-4.png" style="float: left; height: 300px; padding: 50px 100px;">
        <div class="prodname">Sumatra Timo</div><br>
        <div class="prodDesc">Timo comes from the smallholder farming communities located in the the lofty volcanic slopes in the Aceh Gayo highlands. The volcanic fertile soils make this an ideal region for coffee production. The farmers who produce this coffee use shade trees that act like umbrellas. Shade trees allow more time for the coffee cherries to develop and produce its full nutritional potential.
            Indonesia has a particular method of processing coffee, known as Giling Basah or wet-hulling. The farmers remove the outer skin of the coffee cherries mechanically using a pulping machine. The beans, still coated with mucilage, are then stored for a day. The mucilage is washed off and the parchment coffee is partially dried, retaining about 30 – 50% of the moisture content.
            This method reduces acidity and increases body, resulting in a classic Indonesian cup profile.</div><br>
        <div style="font-size: 30px">RM20.99</div>
        <button type="submit"><a href="../../cart.php">Buy Now</a></button>

</main>

<section class="bottom" style="margin-top: 0px;">


<a href="../../index.php" class="icon">Main</a>
        <a href="../about us/aboutus.php">About Us</a>
        <a href="../../index.php">Products</a>
        <a href="../articles/articles.php">Articles</a>
    </div>

    <div class="author">Created By <span>Egor, Kambar, Kathiraj, Jason and Chong</span> | All rights reserved</div>
    <small style="color: #fff;"><i>Copyright &copy; 2021 Nice Coffee</i></small>
    </section>
</body>
</html>