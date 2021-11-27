<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <name>WEB FUNDAMENTALS ECOMMERCE WEBSITE</name>
    <title>Coffee Beans | Home</title>


    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<header class="header">
    <style>
        *{text-transform: none;}
        main{font-size: 20px;}
        .text{font-size: 30px; font-weight: bold;}
        main table td{
            padding-right: 100px;
        }
    </style>

    <a href="index.php" class="icon">
        <img src=images/logo.png alt="Icon">
    </a>

    <nav class="navigation">
        <a href="./index.php">Main</a>
        <a href="./index.php">Products</a>
        <?php
        if(!isset($_SESSION['login_user'])){
            echo "<a href='login.html'>LogIn</a>";
            echo "<a href='register_account.html'>SignUp</a>";
        }else{
            echo "<a href='logout.php'>Signout</a>";
        }  
        ?>
    </nav>
    
    <div class="button">
        <a href="cart.php"><div class="fas fa-shopping-cart" style="color:white" id="cart-btn"></div></a>
        <div class="fas fa-bars" id="main-btn"></div>
    </div>

</header>

<script>
    var itemquantity;
    var coffee1amount, coffee1totalamount;
    var coffee2amount, coffee2totalamount;
    var coffee3amount, coffee3totalamount;
    var coffee4amount, coffee4totalamount;
    var coffee5amount, coffee5totalamount;
    var coffee6amount, coffee6totalamount;
    var bean1amount, bean1totalamount;
    var bean2amount, bean2totalamount;
    var bean3amount, bean3totalamount;
    var gtotal, gtotals;

    function coffee1() {
    var itemquantity = document.getElementById("coffee1");
    var coffee1amount = document.getElementById("coffee1total");
    var coffee1totalamount = itemquantity.value * 20.99;
    coffee1amount.value = coffee1totalamount;
    grandtotal();
    }

    function coffee2() {
    var itemquantity = document.getElementById("coffee2");
    var coffee2amount = document.getElementById("coffee2total");
    var coffee2totalamount = itemquantity.value * 20.99;
    coffee2amount.value = coffee2totalamount;
    grandtotal();
    }

    function coffee3() {
    var itemquantity = document.getElementById("coffee3");
    var coffee3amount = document.getElementById("coffee3total");
    var coffee3totalamount = itemquantity.value * 20.99;
    coffee3amount.value = coffee3totalamount;
    grandtotal();
    }

    function coffee4() {
    var itemquantity = document.getElementById("coffee4");
    var coffee4amount = document.getElementById("coffee4total");
    var coffee4totalamount = itemquantity.value * 20.99;
    coffee4amount.value = coffee4totalamount;
    grandtotal();
    }

    function coffee5() {
    var itemquantity = document.getElementById("coffee5");
    var coffee5amount = document.getElementById("coffee5total");
    var coffee5totalamount = itemquantity.value * 20.99;
    coffee5amount.value = coffee5totalamount;
    grandtotal();
    }

    function coffee6() {
    var itemquantity = document.getElementById("coffee6");
    var coffee6amount = document.getElementById("coffee6total");
    var coffee6totalamount = itemquantity.value * 20.99;
    coffee6amount.value = coffee6totalamount;
    grandtotal();
    }

    function bean1() {
    var itemquantity = document.getElementById("bean1");
    var bean1amount = document.getElementById("bean1total");
    var bean1totalamount = itemquantity.value * 79;
    bean1amount.value = bean1totalamount;
    grandtotal();
    }

    function bean2() {
    var itemquantity = document.getElementById("bean2");
    var bean2amount = document.getElementById("bean2total");
    var bean2totalamount = itemquantity.value * 79;
    bean2amount.value = bean2totalamount;
    grandtotal();
    }

    function bean3() {
    var itemquantity = document.getElementById("bean3");
    var bean3amount = document.getElementById("bean3total");
    var bean3totalamount = itemquantity.value * 69;
    bean3amount.value = bean3totalamount;
    grandtotal();
    }

    /**
    function grandtotal() {
    var gtotal = document.getElementById("grandtotals");
    var gtotals = coffee1totalamount + coffee2totalamount + coffee3totalamount + coffee4totalamount + coffee5totalamount + coffee6totalamount + bean1totalamount + bean2totalamount + bean3totalamount;
    gtotal.value = gtotals;
    } */
    
    
</script>

<main style="color: white; padding-top: 30px; padding-bottom: 30px;">
        <table style="margin-left: auto; margin-right: auto; border: 1px solid white; margin-top: 80px;">
            <tr>
            <td><img src="./images/main-1.png"></td>
            <td>Arabica Selection</td>
            <td>RM20.99</td>
            <td>Quantity: 
                <select id="coffee1" onChange="coffee1()"> 
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>
            </td>
            <td>RM<output id="coffee1total"></output></td>
            </tr>

            <tr>
            <td><img src="./images/main-2.png"></td>
            <td>Brazil Cerrado</td>
            <td>RM 20.99</td>
            <td>Quantity: 
                <select id="coffee2" onChange="coffee2()"> 
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>
            </td>
            <td>RM<output id="coffee2total"></output></td>
            </tr>

            <tr>
            <td><img src="./images/main-3.png"></td>
            <td>Ethiopia</td>
            <td>RM 20.99</td>
            <td>Quantity: 
                <select id="coffee3" onChange="coffee3()"> 
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>
            </td>
            <td>RM<output id="coffee3total"></output></td>
            </tr>

            <tr>
            <td><img src="./images/main-4.png"></td>
            <td>Sumatra Timo</td>
            <td>RM 20.99</td>
            <td>Quantity: 
                <select id="coffee4" onChange="coffee4()"> 
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>
            </td>
            <td>RM<output id="coffee4total"></output></td>
            </tr>

            <tr>
            <td><img src="./images/main-5.png"></td>
            <td>Guatemala</td>
            <td>RM 20.99</td>
            <td>Quantity: 
                <select id="coffee5" onChange="coffee5()"> 
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>
            </td>
            <td>RM<output id="coffee5total"></output></td>
            </tr>

            <tr>
            <td><img src="./images/main-6.png"></td>
            <td>Colombia</td>
            <td>RM 20.99</td>
            <td>Quantity: 
                <select id="coffee6" onChange="coffee6()"> 
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>
            </td>
            <td>RM<output id="coffee6total"></output></td>
            </tr>

            <tr>
            <td><img src="./images/coffee-1.png" height="100px" width="80px"></td>
            <td>Nicaragua</td>
            <td>RM 79</td>
            <td>Quantity: 
                <select id="bean1" onChange="bean1()">  
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>
            </td>
            <td>RM<output id="bean1total"></output></td>
            </tr>
            <tr>
            <td><img src="./images/coffee-2.png" height="100px" width="80px"></td>
            <td>Columbia</td>
            <td>RM 79</td>
            <td>Quantity: 
                <select id="bean2" onChange="bean2()"> 
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>
            </td>
            <td>RM<output id="bean2total"></output></td>
            </tr>

            <tr>
            <td><img src="./images/coffee-3.png" height="100px" width="80px"></td>
            <td>Peru</td>
            <td>RM 69.99</td>
            <<td>Quantity: 
                <select id="bean3" onChange="bean3()"> 
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>
            </td>
            <td>RM<output id="bean3total"></output></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><a href="payment.php"><button style="font-size: 30px; background-color: green;">Checkout</button></a></td>
                <td></td>
                <td><output id="grandtotals"></output></td>
            </tr>
        </table>
</main>

<section class="bottom">

    <div class="ref">
        <a href="./index.php">Main</a>
        <a href="./index.php">Products</a>
    </div>

    <div class="author">created by <span>Egor, Kambar, Kathiraj, Jason and Chong</span> | all rights reserved</div>

</section>


<script src="js/script.js"></script>

</body>
</html>