<?php
    session_start();
    //include("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" product="IE=edge">
    <meta name="viewport" product="width=device-width, initial-scale=1.0">
    <name>WEB FUNDAMENTALS ECOMMERCE WEBSITE</name>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    

<header class="header">

    <a href="#" class="icon">
        <img src="images/icon.png" alt="">
    </a>

    <nav class="navigation">
        <a href="#top">Top</a>
        <a href="#intro">Tntro</a>
        <a href="#main">Main</a>
        <a href="#products">Products</a>
        <a href="#rating">Rating</a>
        <a href="#social">Social</a>
        <a href="#articles">Articles</a>
        <?php
        if(!isset($_SESSION['login_user'])){
            echo "<a href='login.html'>LogIn</a>";
            echo "<a href='register_account.html'>SignUp</a>";
        }else{
            echo "{$_SESSION['login_user']}";
            echo "<a href='logout.php'>Signout</a>";
        }  
        ?>
    </nav>

    <div class="buttons">
        <div class="fas fa-search" id="search"></div>
        <div class="fas fa-shopping-cart" id="cart"></div>
        <div class="fas fa-bars" id="main"></div>
    </div>

    <div class="searching-from">
        <input type="search" id="searching-item" placeholder="type here...">
        <label for="searching-item" class="fas fa-search"></label>
    </div>

    <div class="cart">
        <div class="cart-entity">
            <span class="fas fa-times"></span>
            <img src="images/cart-entity-1.png" alt="">
            <div class="product">
                <h3>Mazero coffee</h3>
                <div class="cost">RM 39.99/-</div>
            </div>
        </div>
        <div class="cart-entity">
            <span class="fas fa-times"></span>
            <img src="images/cart-entity-2.png" alt="">
            <div class="product">
                <h3>Early bird coffee</h3>
                <div class="cost">RM 39.99/-</div>
            </div>
        </div>
        <div class="cart-entity">
            <span class="fas fa-times"></span>
            <img src="images/cart-entity-3.png" alt="">
            <div class="product">
                <h3>Ozone coffee/h3>
                <div class="cost">RM 39.99/-</div>
            </div>
        </div>
        <div class="cart-entity">
            <span class="fas fa-times"></span>
            <img src="images/cart-entity-4.png" alt="">
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

    <h1 class="name"> <span>Our coffee beans</span> are the best </h1>

    <div class="column">

        <div class="pic">
            <img src="images/intro-img.jpeg" alt="">
        </div>

        <div class="product">
            <h2>Our coffee beans are made from gold</h2>
            <p>Everyone in the world loves it</p>
            <p>Order now and be special</p>
            <a href="#" class="button">See more</a>
        </div>

    </div>

</section>



<section class="main" id="main">

    <h1 class="name"> our <span>main</span> </h1>

    <div class="item-container">

        <div class="item">
            <img src="images/main-1.png" alt="">
            <h3>Super delicious</h3>
            <div class="cost">RM 39.99 <span>20.99</span></div>
            <a href="#" class="button">Purchase now</a>
        </div>

        <div class="item">
            <img src="images/main-2.png" alt="">
            <h3>Super delicious</h3>
            <div class="cost">RM 39.99 <span>20.99</span></div>
            <a href="#" class="button">Purchase now</a>
        </div>

        <div class="item">
            <img src="images/main-3.png" alt="">
            <h3>Super delicious</h3>
            <div class="cost">RM 39.99 <span>20.99</span></div>
            <a href="#" class="button">Purchase now</a>
        </div>

        <div class="item">
            <img src="images/main-4.png" alt="">
            <h3>Super delicious</h3>
            <div class="cost">RM 39.99 <span>20.99</span></div>
            <a href="#" class="button">Purchase now</a>
        </div>

        <div class="item">
            <img src="images/main-5.png" alt="">
            <h3>Super delicious</h3>
            <div class="cost">RM 39.99 <span>20.99</span></div>
            <a href="#" class="button">Purchase now</a>
        </div>

        <div class="item">
            <img src="images/main-6.png" alt="">
            <h3>Super delicious</h3>
            <div class="cost">RM 39.99 <span>20.99</span></div>
            <a href="#" class="button">Purchase now</a>
        </div>

    </div>

</section>


<section class="items" id="items">

    <h1 class="name"> our <span>coffee beans</span> </h1>

    <div class="item-container">

        <div class="item">
            <div class="buttons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="pic">
                <img src="images/coffee-1.png" alt="">
            </div>
            <div class="product">
                <h3>Our best beans</h3>
                <div class="beans">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="cost">RM 39.99 <span>$20.99</span></div>
            </div>
        </div>

        <div class="item">
            <div class="buttons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="pic">
                <img src="images/coffee-2.png" alt="">
            </div>
            <div class="product">
                <h3>Our best beans</h3>
                <div class="beans">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="cost">RM 39.99 <span>$20.99</span></div>
            </div>
        </div>

        <div class="item">
            <div class="buttons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="pic">
                <img src="images/coffee-3.png" alt="">
            </div>
            <div class="product">
                <h3>Our best beans</h3>
                <div class="beans">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="cost">RM 39.99 <span>$20.99</span></div>
            </div>
        </div>

    </div>

</section>

<section class="rating" id="rating">

    <h1 class="name"> All <span>ratings</span> </h1>

    <div class="item-container">

        <div class="item">
            <img src="images/rating.png" alt="" class="ratings">
            <p>Buy now and feel what its like to drink truly good beverage!</p>
            <img src="images/photo-1.png" class="customer" alt="">
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
            <img src="images/rating.png" alt="" class="ratings">
            <p>Buy now and feel what its like to drink truly good beverage!</p>
            <img src="images/photo-2.png" class="customer" alt="">
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
            <img src="images/rating.png" alt="" class="ratings">
            <p>Buy now and feel what its like to drink truly good beverage!</p>
            <img src="images/photo-3.png" class="customer" alt="">
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

    <h1 class="name"> <span>Text</span> us </h1>

    <div class="column">

       <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1629452077891!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
        
       <form action="">
            <h3>Text us</h3>
            <div class="form">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="name">
            </div>
            <div class="form">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="email">
            </div>
            <div class="form">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="number">
            </div>
            <input type="submit" value="social now" class="button">
        </form>

    </div>
</section>


<section class="articles" id="articles">

    <h1 class="name"> our <span>articles</span> </h1>

    <div class="item-container">

        <div class="item">
            <div class="pic">
                <img src="images/shot-1.jpeg" alt="">
            </div>
            <div class="product">
                <a href="#" class="name">Best coffee in the world</a>
                <span>by Donald Trump</span>
                <p>We love it so much</p>
                <a href="#" class="button">see more...</a>
            </div>
        </div>

        <div class="item">
            <div class="pic">
                <img src="images/shot-2.jpeg" alt="">
            </div>
            <div class="product">
                <a href="#" class="name">Best coffee in the world</a>
                <span>by Donald Trump</span>
                <p>We love it so much</p>
                <a href="#" class="button">see more...</a>
            </div>
        </div>

        <div class="item">
            <div class="pic">
                <img src="images/shot-3.jpeg" alt="">
            </div>
            <div class="product">
                <a href="#" class="name">Best coffee in the world</a>
                <span>by Donald Trump</span>
                <p>We love it so much</p>
                <a href="#" class="button">see more...</a>
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
        <a href="#">top</a>
        <a href="#">intro</a>
        <a href="#">main</a>
        <a href="#">products</a>
        <a href="#">rating</a>
        <a href="#">social</a>
        <a href="#">articles</a>
    </div>

    <div class="author">created by <span>Egor, Kambar, Kathiraj, Jason and Chong</span> | all rights reserved</div>

</section>


<script src="js/script.js"></script>

</body>
</html>