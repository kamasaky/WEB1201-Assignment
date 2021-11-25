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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    

<header class="header">

    <a href="index.php" class="icon">
        <img src="images/logo.png" alt="Icon">
    </a>

    <nav class="navigation">
        <a href="#intro">Intro</a>
        <a href="#main">Products</a>
        <a href="#rating">Rating</a>
        <a href="#articles">Articles</a>
        <a href="aboutus.php">About Us</a>
        <?php
        if(!isset($_SESSION['login_user'])){
            echo "<a href='login.html'>LogIn</a>";
            echo "<a href='register_account.html'>SignUp</a>";
        }else{
            echo "<a href='logout.php'>Signout</a>";
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

    <div class="cart">
        <div class="cart-entity">
            <span class="fas fa-times"></span>
            <img src="images/cart-entity-1.png" alt="Mazero coffee">
            <div class="product">
                <h3>Mazero coffee</h3>
                <div class="cost">RM 39.99/-</div>
            </div>
        </div>
        <div class="cart-entity">
            <span class="fas fa-times"></span>
            <img src="images/cart-entity-2.png" alt="Early bird coffee">
            <div class="product">
                <h3>Early bird coffee</h3>
                <div class="cost">RM 39.99/-</div>
            </div>
        </div>
        <div class="cart-entity">
            <span class="fas fa-times"></span>
            <img src="images/cart-entity-3.png" alt="Ozone coffee">
            <div class="product">
                <h3>Ozone coffee/h3>
                <div class="cost">RM 39.99/-</div>
            </div>
        </div>
        <div class="cart-entity">
            <span class="fas fa-times"></span>
            <img src="images/cart-entity-4.png" alt="Starbuck coffee">
            <div class="product">
                <h3>Starbucks coffee</h3>
                <div class="cost">RM 39.99/-</div>
            </div>
        </div>
        <a href="#" class="button">Checkout</a>
    </div>

</header>


<section class="top" id="top">

    <div class="product">
        <h3>Start your day with high quality coffee!</h3>
        <p>Buy now and feel what its like to drink truly good beverage!</p>
        <a href="#" class="button">Order now</a>
    </div>

</section>


<section class="intro" id="intro">

    <h1 class="name"> <span style="color:white">Our coffee beans</span> are the best </h1>

    <div class="column">

        <div class="pic">
            <img src="images/intro-img.jpeg" alt="into image">
        </div>

        <div class="product">
            <h2><span class="name">Our coffee beans are made from gold</span></h2>
            <p>Everyone in the world loves it</p>
            <p>Order now and be special</p>
            <a href="#" class="button">See more</a>
        </div>

    </div>

</section>



<section class="main" id="main">

    <h1 class="name">Coffee</h1>

    <div class="item-container">

        <div class="item">
        <a href="prodcoffee1.php">
            <img src="images/main-1.png" alt="Arabica Selection">
            <h3>Arabica Selection</h3>
            <div class="cost">RM 20.99 <span>23.99</span></div>
            <a href="#" class="button">Purchase now</a>
        </a>
        </div>

        <div class="item">
        <a href="prodcoffee2.php">
            <img src="images/main-2.png" alt="Brazil Cerrado">
            <h3>Brazil Cerrado</h3>
            <div class="cost">RM 20.99 <span>23.99</span></div>
            <a href="#" class="button">Purchase now</a>
        </a>
        </div>

        <div class="item">
        <a href="prodcoffee3.php">
            <img src="images/main-3.png" alt="Ethiopia">
            <h3>Ethiopia</h3>
            <div class="cost">RM 20.99 <span>23.99</span></div>
            <a href="#" class="button">Purchase now</a>
        </a>
        </div>

        <div class="item">
        <a href="prodcoffee4.php">
            <img src="images/main-4.png" alt="Sumatra Timo">
            <h3>Sumatra Timo</h3>
            <div class="cost">RM 20.99 <span>23.99</span></div>
            <a href="#" class="button">Purchase now</a>
        </a>
        </div>

        <div class="item">
        <a href="prodcoffee5.php">
            <img src="images/main-5.png" alt="Guatemala">
            <h3>Guatemala</h3>
            <div class="cost">RM 20.99 <span>23.99</span></div>
            <a href="#" class="button">Purchase now</a>
        </a>
        </div>

        <div class="item">
        <a href="prodcoffee6.php">
            <img src="images/main-6.png" alt="Colombia">
            <h3>Colombia</h3>
            <div class="cost">RM 20.99 <span>23.99</span></div>
            <a href="#" class="button">Purchase now</a>
        </a>
        </div>
        

    </div>

</section>


<section class="items" id="items">
    <div style="font-size: 50px; font-family:'Courier New', Courier, monospace;">
                <p style="text-align: center">Product Featured</p>
    </div>
    <h1 class="name">Coffee Beans</h1>

    <div class="item-container">

    <a href="prodBean1.php">
        <div class="item">
            <div class="pic">
                <img src="images/coffee-1.png" alt="Nicaragua">
            </div>
            <div class="product">
                <h3>Nicaragua</h3>
                <div class="beans">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="cost">RM 79 <span>$20.99</span></div>
            </div>
        </div>
        </a>

        <a href="prodBean2.php">
        <div class="item">
            <div class="pic">
                <img src="images/coffee-2.png" alt="Columbia">
            </div>
            <div class="product">
                <h3>Columbia</h3>
                <div class="beans">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="cost">RM 79 <span>$20.99</span></div>
            </div>
        </div>
        </a>

        <a href="prodBean3.php">
        <div class="item">
            <div class="pic">
                <img src="images/coffee-3.png" alt="peru">
            </div>
            <div class="product">
                <h3>Peru</h3>
                <div class="beans">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="cost">RM 69.99 <span>$20.99</span></div>
            </div>
        </div>
        </a>

    </div>

</section>

<section class="rating" id="rating">

    <h1 class="name"> All <span style="color:white">ratings</span> </h1>

    <div class="item-container">

        <div class="item">
            <img src="images/rating.png" alt="rating" class="ratings">
            <p>Buy now and feel what its like to drink truly good beverage!</p>
            <img src="images/photo-1.png" class="customer" alt="Vladimit Putin">
            <h3>Vladimir Putin</h3>
            <div class="beans">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="item">
            <img src="images/rating.png" alt="rating" class="ratings">
            <p>Buy now and feel what its like to drink truly good beverage!</p>
            <img src="images/photo-2.png" class="customer" alt="Vladimir Putin">
            <h3>Vladimir Putin</h3>
            <div class="beans">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="item">
            <img src="images/rating.png" alt="rating" class="ratings">
            <p>Buy now and feel what its like to drink truly good beverage!</p>
            <img src="images/photo-3.png" class="customer" alt="Vladimir Putin">
            <h3>Vladimir Putin</h3>
            <div class="beans">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>

<section class="social" id="social">

    <h1 class="name"> <span style="color:white">Text</span> us </h1>

    <div class="column">

       <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1629452077891!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
        
       <form action="">
            <h3>Text us</h3>
            <div class="form">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="Name">
            </div>
            <div class="form">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="Email">
            </div>
            <div class="form">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="Number">
            </div>
            <input type="submit" value="social now" class="button">
        </form>
    </div>

</section>


<section class="articles" id="articles">

    <h1 class="name"> our <span style="color:white">articles</span> </h1>

    <div class="item-container">

        <div class="item">
            <div class="pic">
                <img src="images/shot-1.jpeg" alt="article preview">
            </div>
            <div class="product">
                <a href="#" class="name">How to choose your coffee</a>
                <span>by Coffee Expert</span>
                <p>We know how to choose the best coffee for you</p>
                <a href="/how-to-choose-coffee.html" class="button">see more...</a>
            </div>
        </div>

        <div class="item">
            <div class="pic">
                <img src="images/shot-2.jpeg" alt="article preview">
            </div>
            <div class="product">
                <a href="#" class="name">Best coffee in the world</a>
                <span>by Coffee Expert</span>
                <p>We love it so much</p>
                <a href="/best-coffee-in-the-world.html" class="button">see more...</a>
            </div>
        </div>

        <div class="item">
            <div class="pic">
                <img src="images/shot-3.jpeg" alt="article preview">
            </div>
            <div class="product">
                <a href="#" class="name">How to make delicious coffee</a>
                <span>by Coffee Expert</span>
                <p>We know how to make the best coffee</p>
                <a href="/how-to-make-delicious-coffee.html" class="button">see more...</a>
            </div>
        </div>

    </div>

</section>


<section class="bottom">

    <div class="send">
        <a href="#" class="facebook"></a>
        <a href="#" class="twitter"></a>
        <a href="#" class="instagram"></a>
        <a href="#" class="linkedin"></a>
        <a href="#" class="pinterest"></a>
    </div>

    <div class="ref">
        <a href="#intro">Intro</a>
        <a href="#main">Products</a>
        <a href="#rating">Rating</a>
        <a href="#articles">Articles</a>
        <a href="aboutus.php">About Us</a>
    </div>

    <div class="author">created by <span>Egor, Kambar, Kathiraj, Jason and Chong</span> | all rights reserved</div>
    <small style="color: #fff;"><i>Copyright &copy; 2021 Nice Coffee</i></small>
</section>

<a href="#top"><button class="topbtn" >&#65085</button></a>

<script src="js/script.js"></script>

</body>
</html>
