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
</header>

<section class="blogpost">
    <div class="article-content">
               <div class="item">
                <div class="pic">
                    <img src="../../images/barista3.jpeg" alt="article preview">
            <br>
            <h2>Keith David, Starbucks Coffee Design Lead</h2>
            <br>
            <h3>What makes good coffee</h3>
            <br>
            <p>First and foremost, do not purchase sad coffee beans.</p>
            <br>
            <p>Rep after me...</p>
            <br>
            <h3>The foundation of good coffee is always good coffee beans.</h3>
            <br>
            <p>They aren't mass-produced. They don't all have the same flavour profile. Because they're agricultural goods, the flavour variety is entirely natural. As a result, some beans are excellent, while others are not (sad). Allow the low-quality beans to be used in instant coffee. You want om-nom-nom-nom-nom-nom-nom-nom-nom-nom-nom. It's formally known as "specialty-grade coffee," or simply "specialty coffee."</p>
            <h3>Coffee that is always unique</h3>
            <br>
            <p>It's the highest quality coffee you can get, assessed by certified "Quality Graders" with incredibly exact taste senses. You know, the kind that says, "Oh yes, I'm getting a note of raw chocolate from southern Madagascar”. Natural sugars, crisp acidity, and a plethora of wild flavours characterise these coffees. Strawberry, cinnamon, pine, and mango are just a few of the notes to consider. It can become quite exotic.</p>
            <br>
            <p>If you only remember one item from this article, let it be this:</p>
            <br>
            <p>Coffee is 98% water, so don’t you think your water should taste good too?</p>
            <br>
            <p>A small amount of minerals in your water helps bring out the flavour, but too much, and you’ll end up with a dull, lifeless brew. If your local water supply is “hard” (has lots of calcium or magnesium hardness), you’ll want to filter your water. This is the problem most people have who buy beans from a coffee shop, then realize they don’t taste the same at home. Cafes use special filtered water, but most people just use tap water. Here are a few ways you can fix your water supply:</p>
            <br>
            <p>Britta pitcher / carbon filter, it helps some</p>
            <p>Home reverse osmosis system, wow that’s expensive</p>
            <p>Third Wave Water mineral packets, oooh just right</p>
            <p>Mix a packet of Third Wave Water minerals in a jug of distilled water and you’ll instantly have the exact water that the Specialty Coffee Association recommends. It’s by far the easiest way to optimize your water so it doesn’t kill your coffee’s flavor.</p>
            <br><br>
            <p>That’s all, thank you.</p>
        </p>
        </section>
    <footer>
        <p>Thank you for reading article!</p>
    </footer>
</div>
</section>


<section class="bottom">

    <div class="ref">
        <a href="../../index.php" class="icon">Main</a>
        <a href="../about us/aboutus.php">About Us</a>
        <a href="../../index.php">Products</a>
        <a href="#">Articles</a>

    </div>

    <div class="author">created by <span>Egor, Kambar, Kathiraj, Jason and Chong</span> | all rights reserved</div>

</section>


<script src="../../js/script.js"></script>

</body>
</html>
