<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "coffee_pos_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>