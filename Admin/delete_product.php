<?php
include 'db.php';  // Include the database connection

// Get the product ID from the URL
$productId = $_GET['id'];

// Delete the product from the database
$query = "DELETE FROM products WHERE id = :id";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':id', $productId, PDO::PARAM_INT);
$stmt->execute();

// Redirect back to the Products page
header("Location: Products.php");
exit();
?>
