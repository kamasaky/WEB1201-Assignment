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
        <img src="../../images/coffee-1.png" style="float: left; height: 300px; padding: 100px;">
        <div class="prodname">NICARGUA</div><br>
        <div class="prodDesc">The Nicaragua Ceocafen Cooperative Organization from Matagalpa, Jinotega and surrounding areas, focuses on organic Nicaraguan Coffee production of the highest quality. This cooperative promotes and improves the lives of 2,600 active coffee farm members, many of whom are women. Our Ceocafen coffee is grown at high elevations of up to 5,000 feet above sea level. The green coffee beans are harvested from November to March, fully washed and and then sun-dried in preparation for the February through July export season. The resulting organic coffee is described as smooth, nutty with a real depth of flavor. Feedback on this fair trade coffee is that is rates right up there with highly expensive coffees. Let’s just say the Nicaraguan coffee flavor comes highly recommended! Order a 1 lb bag or the bulk 5 lb bag online today and we’ll roast your coffee beans and ship them to you on the same day, guaranteeing ultimate freshness.</div><br>
        <div style="font-size: 30px">RM79</div>
        <button type="submit"><a href="../../cart.php">Buy Now</a></button>

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