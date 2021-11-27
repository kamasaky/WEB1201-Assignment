<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "nice_coffee";

$handler = mysqli_connect($servername, $username, $password, $dbname);

session_start();

$email = $_POST['email'];
$user_password = $_POST['user_password'];

$sql = "SELECT * FROM user_list WHERE email = '$email' and user_password = '$user_password'";
$result = mysqli_query($handler, $sql);
$row = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);

if($count == 1){
    
    $_SESSION['login_user'] = $email;
    echo "<script type='text/javascript'>alert('Login successful.');
    location='index.php';</script>";
}
else{
    echo "<script type='text/javascript'>alert('Login failed. Invalid password or email.');
    location='login.html';</script>";
}
?>