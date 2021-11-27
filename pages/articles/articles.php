<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, Firefox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        <img src="../../images/barista1.jpeg">  
            <h2>Alex Dunphy, world class barista</h2>
      <br>
            <h3>How to choose a roast</h3>
            <br>
            <p>Roasts are generally divided into 3 archetypes; light, medium and dark roasts. These basic varieties are also differentiated by notes, acidity, caffeine content and source region.</p>
            <br>
            <p>Light roasts generally consist of lightly coloured, high acidity and bright flavour but mellow aftertaste. These beans are roasted lightly to preserve their characteristics in order to maintain their natural notes and aromas. These roasts are prized for their mellowness and low oil content. lightly roasted beans cook for a shorter time and at a lower temperature, they retain more caffeine from the original green coffee bean.</p>
            <br>
            <p>Medium roasts consist of thicker bodied coffees that gain a little taste from the roasting process. Bright, floral, and balanced taste as well as a medium amount of caffeine characterise this roast, as well as a higher intensity of flavour and lower acidity. Medium roast are usually marketed to working adults due to its strong flavour while still being gentler on the GI than dark roast</p>
            <br>
            <p>Dark roasts are dark in colour and clos to black. Prized by true coffee lovers , dark roast absorb much of their flavour from deep roasting at high temperatures. A common misconception is that dark roasts contain more caffeine than their counterparts, which is blatantly untrue. Dak roasts make up for this by being smokier and bolder tasting than lighter roasts. </p>
            <br>
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
