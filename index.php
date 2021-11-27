<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, Firefox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nice Coffee Website</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/store.js" async></script>

</head>
<body>
    

<header class="header">

<a href="./index.php" class="icon">
        <img src="images/logo.png" alt="Icon">
    </a>

    <nav class="navigation">
    <a href="./index.php" class="icon">Main</a>
    <a href="./pages/about us/aboutus.php">About Us</a>
    <a href="#main">Products</a>
    <a href="./pages/articles/articles.php">Articles</a>

        <?php
        if(!isset($_SESSION['login_user'])){
            echo "<a href='login.html'>LogIn</a>";
            echo "<a href='register_account.html'>SignUp</a>";
        }else{
            echo "<a href='logout.php'>Signout</a>";
        } 
        ?>
        <a href="cart.php">Cart</a>
    </nav>


   
</header>


<section class="top" id="top">

    <div class="product">
    <div class="product">
        <p><b>With a major portion of the workforce still working from home</b></p> 
        <p><b>due to the current health crisis,</b></p>
        <p>quality coffee has become a luxury to coffee enthusiasts</p> 
        <p>while before it was a necessity</p>
        <a href="cart.php" class="button">Order now</a>
    </div>

</section>


<section class="intro" id="intro">

    <h1 class="name"> <span style="color:white">Our coffee beans</span> are the best </h1>

    <div class="column">

        <div class="pic">
            <img src="images/intro-img.jpeg" alt="into image">
        </div>

        <div class="product">
        <h2><span class="name">Nice Coffee Sdn.Bhd. offer our services to provide qUality coffee from the comfort of your own home.</span></h2>
            <p>SAME DELICIOUS TASTE, STAY HEALTHY, ENERGETIC AND SAFE!</p>
            <p>Order now from our handpicked selections of coffee products..</p>
            <a href="#items" class="button">See more</a>
        </div>

    </div>

</section>



<section class="main" id="main">

    <h1 class="name">Coffee</h1>

    <div class="item-container">

        <div class="item">
            <a href="./pages/products/prodcoffee1.php"><img class="item-img" src="images/main-1.png" alt="Arabica Selection"></a>
            <div class="cost">RM 20.99</div>
            <h3 class="item-title">Arabica Selection</h3>
            <a href="cart.php"></a>
        </div>

        <div class="item">
            <a href="./pages/products/prodcoffee2.php"><img class="item-img" src="images/main-2.png" alt="Brazil Cerrado"></a>
            <h3 class="item-title">Brazil Cerrado</h3>
            <div class="cost">RM 20.99</div>
            <a href="cart.php"></a>
        </div>

        <div class="item">
            <a href="./pages/products/prodcoffee3.php"><img class="item-img" src="images/main-3.png" alt="Ethiopia"></a>
            <h3 class="item-title">Ethiopia</h3>
            <div class="cost">RM 20.99</div>
            <a href="cart.php"></a>
        </div>

        <div class="item">
            <a href="./pages/products/prodcoffee4.php"><img class="item-img" src="images/main-4.png" alt="Sumatra Timo"></a>
            <h3 class="item-title">Sumatra Timo</h3>
            <div class="cost">RM 20.99</div>
            <a href="cart.php"></a>
        </div>

        <div class="item">
            <a href="./pages/products/prodcoffee5.php"><img class="item-img" src="images/main-5.png" alt="Guatemala"></a>
            <h3 class="item-title">Guatemala</h3>
            <div class="cost">RM 20.99</div>
            <a href="cart.php"></a>
        </div>

        <div class="item">
            <a href="./pages/products/prodcoffee6.php"><img class="item-img" src="images/main-6.png" alt="Colombia"></a>
            <h3 class="item-title">Colombia</h3>
            <div class="cost">RM 20.99</div>
            <a href="cart.php"></a>
        </div>
        

    </div>

</section>


<section class="items" id="items">
    <div style="font-size: 50px; font-family:'Courier New', Courier, monospace;">
                <p style="text-align: center">Product Featured</p>
    </div>
    <h1 class="name">Coffee Beans</h1>

    <div class="item-container">

        <div class="item product-h">
            <div class="pic">
            <a href="./pages/products/prodBean1.php"><img src="images/coffee-1.png" alt="Nicaragua"></a>
            </div>
            <div class="product">
                <div class="nbtitle">Nicaragua</div>
                <div class="nbcost">RM 79 <span class="discount">RM 99</span></div>
                <a href="cart.php"></a>
            </div>
        </div>

        <div class="item product-h">
            <div class="pic ">
            <a href="./pages/products/prodBean2.php"><img src="images/coffee-2.png" alt="Columbia"></a>
            </div>
            <div class="product">
                <div class="nbtitle">Columbia</div>
                <div class="nbcost">RM 79 <span class="discount">RM 99</span></div>
                <a href="cart.php"></a>
            </div>
        </div>

        <div class="item product-h">
            <div class="pic">
            <a href="./pages/products/prodBean3.php"><img src="images/coffee-3.png" alt="peru"></a>
            </div>
            <div class="product">
                <div class="nbtitle">Peru</div>
                <div class="nbcost">RM 69 <span class="discount">RM 75</span></div>
                <a href="cart.php"></a>
            </div>
        </div>

    </div>

</section>

<section class="rating" id="rating">

    <h1 class="name"> All <span style="color:white">ratings</span> </h1>

    <div class="item-container">

        <div class="item">
            <img src="images/rating.png" alt="rating" class="ratings">
            <p>Excellent service, excellent selection!</p>
            <img src="images/photo-1.png" class="customer" alt="Adam White">
            <h3>Adam White, entrepreuner</h3>
        </div>

        <div class="item">
            <img src="images/rating.png" alt="rating" class="ratings">
            <p>Great selection, prompt delivery.</p>
            <img src="images/photo-2.png" class="customer" alt="Greta Utherberg">
            <h3>Greta Utherberg, student</h3>

        </div>
        
        <div class="item">
            <img src="images/rating.png" alt="rating" class="ratings">
            <p>Good coffee makes a good day!</p>
            <img src="images/photo-3.png" class="customer" alt="Indra Chandrasekar">
            <h3>Indra Chandrasekar, Architect</h3>
        </div>

    </div>

</section>

<section class="social" id="social">

    <h1 class="name"> <span style="color:white">Contact</span> us </h1>

    <div class="column">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12770.117768424225!2d101.69141729435519!3d3.148022871993337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc49d3e30988d7%3A0x464a4b7fda23c09a!2sKuala%20Lumpur%20City%20Centre%2C%20Kuala%20Lumpur%2C%20Federal%20Territory%20of%20Kuala%20Lumpur!5e0!3m2!1sen!2smy!4v1637896456539!5m2!1sen!2smy" width="580" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        
    <div class="contact_us"> 
    <h3>Office Address :</h3>
    <p>69, Jln Tun Emas,
Titiwangsa,
53600 Kuala Lumpur.</p>
<br>
<h3>Working Hour:</h3>
<br>
<p>7:00 - 20:00 (Weekday)
8:00 - 18:00 (Weekend)</p>
<br>
<h3>Phone.No:</h3>
<p>03-42036698
012-2938735</p>
</section>


<section class="articles" id="articles">

    <h1 class="name"> our <span style="color:white">articles</span> </h1>

    <div class="item-container">

        <div class="item">
            <div class="pic">
                <img src="images/shot-1.jpeg" alt="article preview">
            </div>
            <div class="product">
            <a href="./pages/articles/how-to-choose-coffee.php" class="name">How to choose a roast</a>
                <span>Alex Dunphy, world class barista</span>
                <p>Roasts are generally divided into 3 archetypes; light, medium and dark roasts. These basic varieties are also differentiated by notes, acidity, caffeine content and source region.</p>
                <a href="./pages/articles/how-to-choose-coffee.php" class="button">see more...</a>
            </div>
        </div>

        <div class="item">
            <div class="pic">
                <img src="images/shot-2.jpeg" alt="article preview">
            </div>
            <div class="product">
            <a href="./pages/articles/best-coffee-in-the-world.php" class="name">Beginners guide to becoming a home brewed coffee connoisseur </a>
                <span>Adam Driver, 2-time World Barristers Competition Winner </span>
                <p>First and foremost, novices require coffee beans! Instead of ground coffee, I advocate using whole beans </p>
                <a href="./pages/articles/best-coffee-in-the-world.php" class="button">see more...</a>
            </div>
        </div>

        <div class="item">
            <div class="pic">
                <img src="images/shot-3.jpeg" alt="article preview">
            </div>
            <div class="product">
                <a href="./pages/articles/best-coffee-in-the-world.php" class="name">What makes good coffee</a>
                <span>Keith David, Starbucks Coffee Design Lead</span>
                <p>First and foremost, do not purchase sad coffee beans.
Rep after me...</p>
                <a href="./pages/articles/how-to-make-delicious-coffee.php" class="button">see more...</a>
            </div>
        </div>

    </div>

</section>


<section class="bottom">


    <div class="ref">
    <a href="./index.php" class="icon">Main</a>
    <a href="./pages/articles/articles.php">About Us</a>
        <a href="#main">Products</a>
        <a href="./pages/articles/articles.php">Articles</a>
    </div>

    <div class="author">created by <span>Egor, Kambar, Kathiraj, Jason and Chong</span> | all rights reserved</div>
    <small style="color: #fff;"><i>Copyright &copy; 2021 Nice Coffee</i></small>
</section>

<script src="js/script.js"></script>

</body>
</html>
