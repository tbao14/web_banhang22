<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "web_banhang";

$conn = new mysqli($host, $username, $password, $db_name);
 
//kiem tra ket noi
if ($conn->connect_error) {
    die("Failed to connect to database". $conn->connect_error);
}   



?>