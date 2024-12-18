<?php
$host = 'localhost'; // Your database host
$username = 'root';  // Your database username
$password = '';      // Your database password
$dbname = 'logo'; // Your database name

// Create a PDO instance to interact with the database
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode to exception
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
