<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "nice_coffee";

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$user_password = $_POST["user_password"];
$phone = $_POST["phone"];
$user_address = $_POST["user_address"];
$postcode = $_POST["postcode"];
$country = $_POST["country"];

$handler = mysqli_connect($servername, $username, $password, $dbname);

if (!$handler) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

$sql_query = "INSERT INTO user_list (firstname, lastname, email, user_password, phone, user_address, postcode, country)
VALUES ('$firstname', '$lastname', '$email', '$user_password', '$phone', '$user_address', '$postcode', '$country')";

if (mysqli_query($handler, $sql_query)) {
    echo "<script type='text/javascript'>alert('Congratulations! You have successfully created an account. Click OK to proceed to login.');
    location='login.html';
    </script>";
    
} else {
    echo "<script type='text/javascript'>alert('Oops! Something went wrong. Please try again.');location='register_account.html';
    </script>". mysqli_error($handler);
}

exit;
?>