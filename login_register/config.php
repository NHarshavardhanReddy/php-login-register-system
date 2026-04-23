<?php

$host ="localhost";
$user = "root";
$password = "Harsha@22sql";
$database = "user_db";


$conn = new mysqli($host, $user, $password, $database);

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);  
}


?>