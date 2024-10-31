<?php
// login.php

// Database connection settings
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password (empty)
$dbname = "NestleDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$formUsername = $_POST['username'];
$formPassword = $_POST['password'];

// Secure the inputs
$formUsername = mysqli_real_escape_string($conn, $formUsername);
$formPassword = mysqli_real_escape_string($conn, $formPassword);

// Hash the password (if stored hashed in the database)
$formPassword = md5($formPassword);

// Query the database
$sql = "SELECT * FROM users WHERE username='$formUsername' AND password='$formPassword'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Correct credentials, redirect to dashboard
    header("Location: home.php"); // You can redirect to any page
    exit();
} else {
    // Invalid credentials, show an error message
    
    echo "<script>alert('Invalid username or password');</script>";
}

$conn->close();
?>
