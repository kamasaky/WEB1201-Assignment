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

$the_query = "CREATE TABLE product (
    product_id INT(15) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    prod_name VARCHAR(50) NOT NULL,
    price DECIMAL(5,2) NOT NULL,
    category VARCHAR(30)
)";

mysqli_query($handler, $the_query);

$sql_query = "INSERT INTO nice_coffee.product (
    prod_name, price, category
) VALUES
('Arabica Selection', '20.99', 'Coffee'),
('Brazil Cerrado', '20.99', 'Coffee'),
('Ethiopia', '20.99', 'Coffee'),
('Sumatra Timo', '20.99', 'Coffee'),
('Guatemala', '20.99', 'Coffee'),
('Colombia', '20.99', 'Coffee'),
('Nicaragua', '79', 'Coffee Bean'),
('Columbia', '79', 'Coffee Bean'),
('Peru', '69.99', 'Coffee Bean')";

if (mysqli_query($handler, $sql_query)) {
    echo " Data inserted successfully";
} else {
    echo " Error inserting data: ". mysqli_error($handler);
}
?>