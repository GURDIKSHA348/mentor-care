<?php
$servername = "localhost";
$username = "root";  // Default username in XAMPP
$password = "";      // Default password is empty in XAMPP
$dbname = "register";  // The name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
