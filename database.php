<?php
// Database connection
$servername = "localhost";
$username = "root"; // Default for XAMPP/WAMP
$password = ""; // Default is empty for XAMPP/WAMP
$database = "your_database"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
