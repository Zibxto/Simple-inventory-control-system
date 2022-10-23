<?php

$sname= "localhost";

$uname= "root";

$password = "";




$conn = new mysqli($sname, $uname, $password);

if (!$conn) {

    echo "Connection failed!";

}

$sql = "CREATE DATABASE inventory";

if  ($conn->query($sql) === FALSE) {
    
    echo "database creation failed!";

}

$db = mysqli_select_db($conn,'inventory') or die ('unable to connect to database');


?>