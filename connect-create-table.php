<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "mydb";

//create connection
// the connection is not working and i dont know why pls help me fixed it.
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);

}

//create table

$sql = "CREATE TABLE myDetails (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50)
    
)";

if($conn->query($sql)==TRUE){
    echo" Table created successfully";
}
else{
    echo" Error creating table" . $conn->error;
}

$conn->close();
?>
