<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//connection

$conn = new mysqli($servername, $username, $password, $dbname);

//check connection

if($conn->connect_error){
    die(" Error connecting to database: " . $conn->connect_error);

}
?>