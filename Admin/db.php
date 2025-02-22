<?php
// Database connection settings
$host = "localhost";      // Server hostname
$dbname = "logo";         // Database name
$username = "root";       // Database username (default: "root" for XAMPP)
$password = "";           // Database password (default: blank for XAMPP)

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // Set error handling mode
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Set default fetch mode to associative array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Uncomment this line for debugging
    // echo "Database connection successful!";

} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
