<?php
$servername = "localhost"; // Replace with your server name
$username = "your_username"; // Replace with your username
$password = "your_password"; // Replace with your password
$database = "your_database"; // Replace with your database name

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Close the connection
$conn = null;
?>
