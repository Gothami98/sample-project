<?php
$servername = "localhost";
$username = "root"; // your DB username
$password = "Root@1234";     // your DB password
$database = "user_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
