<?php
$sname= "localhost";

$uname= "root";

$password = "";

$dbname = "inventory";



$conn = new mysqli($sname, $uname, $password, $dbname);

if (!$conn) {

    echo "Connection failed!";

} 


$sql= "CREATE TABLE restaurant (
 id int(6) AUTO_INCREMENT primary key, 
 comp_name VARCHAR(50) NOT NULL,
 comp_mail VARCHAR(50) NOT NULL,
comp_phone VARCHAR(15),
comp_address VARCHAR(100),
comp_desc VARCHAR(200),
password VARCHAR(20)
)";

if (mysqli_query($conn, $sql) === FALSE) {
   
    echo "Error";
}


$sql= "CREATE TABLE recipes (
    recipe_id int(6) AUTO_INCREMENT primary key, 
    recipe_name VARCHAR(50) NOT NULL,
    recipe_ingredients VARCHAR(200),
   recipe_desc VARCHAR(200)
   )";
   
   if (mysqli_query($conn, $sql) === FALSE) {
   
    echo "Error";
}

   
$sql= "CREATE TABLE menu (
    meal_id int(6) AUTO_INCREMENT primary key, 
    meal_name VARCHAR(50) NOT NULL,
    cost VARCHAR(20) NOT NULL,
    meal_desc Varchar(200)
   )";
   
   if (mysqli_query($conn, $sql) === FALSE) {
   
    echo "Error";
}

   
$sql= "CREATE TABLE ingredients (
    ingredient_id int(6) AUTO_INCREMENT primary key, 
    ingredient_name VARCHAR(50) NOT NULL,
   quantity int(15),
   cost VARCHAR(20) NOT NULL
   )";
   
   if (mysqli_query($conn, $sql) === FALSE) {
   
    echo "Error";
}

   
$sql= "CREATE TABLE orders (
    order_id int(6) AUTO_INCREMENT primary key, 
    meal_name VARCHAR(50) NOT NULL,
   quantity VARCHAR(20),
   cost VARCHAR(20) NOT NULL
   )";
   
   if (mysqli_query($conn, $sql) === FALSE) {
   
       echo "Error";
   }
   
$sql= "CREATE TABLE customers (
    customer_id int(6) AUTO_INCREMENT primary key, 
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    sex VARCHAR (50),
    email VARCHAR(50) NOT NULL,
   phonenum VARCHAR(15),
   adress VARCHAR(100)
   )";
   
   if (mysqli_query($conn, $sql) === FALSE) {
   
    echo "Error";
}
mysqli_close($conn);

?>
