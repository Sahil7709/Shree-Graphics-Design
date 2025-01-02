<?php
// Define database connection variables
$host = "localhost";      // Hostname (e.g., "localhost")
$dbname = "logo";         // Database name
$username = "root";       // Database username (e.g., "root" for XAMPP)
$password = "";           // Database password (leave blank for XAMPP)

// Create a PDO instance to interact with the database
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode to exception
    // echo "Database connection successful!";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>