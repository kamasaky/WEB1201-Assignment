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
    <img class="headimg" src="../../images/coffeetypes.jpeg" alt="coffee types"/><br />
    Every editorial product is independently selected, though we may be compensated or receive an affiliate commission if you buy something through our links. <br />
    Ratings and prices are accurate and items are in stock as of time of publication.
    We cover all the different types of coffee from lattes to red eyes. All of your burning coffee questions are <b>finally</b> answered.
    We’ve all been there, standing in line at a favorite coffeeshop, sweating because we’re not entirely sure of the difference between
    a cold brew vs. a classic iced coffee. Oh gosh, I know I have. Good news: we’re covering everything from the difference of Arabica
    and Robusta coffee beans to all the ways to brew your favorite cup of joe. Hold on tight. We’re diving deep into your morning go-to drink.<br /> <br />
    <h3>Different Types of Coffee Beans</h3>
    In Malaysia supermarkets, you’ll typically find two types of coffee beans for sale: Arabica and Robusta.
    You may be wondering, is there a difference between Arabica and Robusta? Oh, there definitely is. Let’s get right to it. <br /><br />
    <h3>Arabica</h3>
    Arabica is the most popular type of coffee, hands down. Depending on who you ask, many coffee enthusiasts prefer using Arabica beans due to its taste.
    Typically used for black coffee, Arabica beans have a sweeter, more complex flavor that you can drink straight. Funny thing is, even though it’s the most popular,
    it doesn’t have as much caffeine as Robusta.<br /><br />
    <h3>Robusta</h3>
    While Arabica is the most popular, Robusta is cheaper and stronger. Because of its bitter flavor, you’ll typically see Robusta used for espresso drinks and in instant coffee mixes.
    If your Monday morning is lagging, reach for a cup of coffee that uses Robusta beans. Their high caffeine content will wake you right up! <br /> <br />
    <h3>Types of Coffee Drinks</h3>
    Latte, americano, affogato…it’s crazy all that you can do with a few small beans. Whether you’re a coffee newbie or you consider yourself a coffee connoisseur,
    there are so many types of coffee drinks to discover. Here are some of the most popular types ordered by coffee lovers nationwide.</br> <br />
    <h3>Black</h3>
    Black coffee is as simple as it gets with ground coffee beans steeped in hot water, served warm. And if you want to sound fancy,
    you can call black coffee by its proper name: cafe noir. Since it isn’t doctored up with milk or sugar, the quality of coffee is especially important.
    Treat yourself to a coffee subscription box to find your favorite style.<br /> <br />
    <h3>Latte</h3>
    As the most popular coffee drink out there, the latte is comprised of a shot of espresso and steamed milk with just a touch of foam.
    It can be ordered plain or with a flavor shot of anything from vanilla to pumpkin spice. (Here’s how to make a copycat Starbucks pumpkin spice latte.) <br /><br />
    <h3>Cappuccino</h3>
    Cappuccino is a latte made with more foam than steamed milk, often with a sprinkle of cocoa powder or cinnamon on top.
    Sometimes you can find variations that use cream instead of milk or ones that throw in flavor shot, as well. <br /> <br />
    <h3>Americano</h3>
    With a similar flavor to black coffee, the americano consists of an espresso shot diluted in hot water. Pro tip: if you’re making your own,
    pour the espresso first, then add the hot water.<br /> <br />
    <h3>Espresso</h3>
    An espresso shot can be served solo or used as the foundation of most coffee drinks, like lattes and macchiatos. <br /> <br />
    <h3>Doppio</h3>
    A double shot of espresso, the doppio is perfect for putting extra pep in your step. <br /> <br />
    <h3>Cortado</h3>
    Like yin and yang, a cortado is the perfect balance of espresso and warm steamed milk. The milk is used to cut back on the espresso’s acidity.
    <hr class="visual-divider" />
    <img class="headimg" src="../../images/coldcoffeetypes.jpeg" alt="cold coffee types"/><br />
    <h3>Types of Iced Coffee</h3>
    What’s more refreshing than cool iced coffee in the summertime? Or maybe you enjoy these chilled drinks all year long.
    (We do!) Here are some of the best iced coffee drinks you can sip on.<br /> <br />
    <h3>Iced Coffee</h3>
    A coffee with ice, typically served with a dash of milk, cream or sweetener—iced coffee is really as simple as that.<br /> <br />
    <h3>Iced Espresso</h3>
    Like an iced coffee, iced espresso can be served straight or with a dash of milk, cream or sweetener. You can also ice speciality
    espresso-based drinks like americanos, mochas, macchiatos, lattes and flat whites. <br /> <br />
    <h3>Cold Brew</h3>
    The trendiest of the iced coffee bunch, cold brew coffees are made by steeping coffee beans from anywhere between 6-36 hours,
    depending on how strong you would like your cold brew. Once the beans are done steeping, add cold milk or cream. Here are a few of our best cold brew coffee tips.<br /> <br />
    <h3>Frappuccino</h3>
    Made famous by Starbucks, the Frappuccino is a blended iced coffee drink that’s topped with whipped cream and syrup. But not all Frapps are made the same:
    watch out for coffee-free versions. Unless you’re into that sorta thing.<br /> <br />
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
