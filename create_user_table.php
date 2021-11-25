<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "nice_coffee";

$handler = mysqli_connect($servername, $username, $password, $dbname);

if (!$handler) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

$the_query = "CREATE TABLE user_list (
    id INT(15) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    user_password VARCHAR(20) NOT NULL,
    phone CHAR(20) NOT NULL,
    user_address VARCHAR(100) NOT NULL,
    postcode VARCHAR(10) NOT NULL,
    country VARCHAR(30) NOT NULL
)";

if (mysqli_query($handler, $the_query)) {
    echo "<br>User List table created successfully.</br>";
} else {
    echo "<br>Error creating the table: ". mysqli_error($handler);
}
?>