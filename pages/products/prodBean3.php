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

<main style="color: white; padding-top: 10px; margin: 100px; background-color: #13131a; padding-bottom: 150px;">
        <img src="../../images/coffee-3.png" style="float: left; height: 300px; padding: 100px;">
        <div class="prodname">Peru</div><br>
        <div class="prodDesc">While each growing region imparts its own unique flavor notes, Peruvian coffee is smooth and mellow with mild acidity and light body. Its exciting flavor profile ranges from vanilla-nut sweetness to nutty, chocolatey notes and subtle tones of citrus. The flavorful coffee is delightfully aromatic.</div><br><br><br><br>
        <div style="font-size: 30px">RM79</div>
        <button type="submit"><a href="cart.php">Buy Now</a></button>

</main>

<section class="bottom" style="margin-top: 0px;">

<div class="ref">
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