<?php
session_start();

// Database connection
include 'db.php';  // Ensure db.php defines the $pdo variable

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customerName = $_POST['customerName'];
    $customerContact = $_POST['customerContact'];
    $customerEmail = $_POST['customerEmail'];
    $itemQuantity = $_POST['itemQuantity'];

    // Handle file upload
    if (isset($_FILES['logoFile']) && $_FILES['logoFile']['error'] === 0) {
        $logoFileName = $_FILES['logoFile']['name'];
        $logoTmpName = $_FILES['logoFile']['tmp_name'];
        $uploadDir = 'uploads/';
        $filePath = $uploadDir . basename($logoFileName);

        if (move_uploaded_file($logoTmpName, $filePath)) {
            try {
                // Insert into the database using PDO
                $stmt = $pdo->prepare("INSERT INTO vendors (name, contact, email, logo, quantity) VALUES (?, ?, ?, ?, ?)");
                $stmt->execute([$customerName, $customerContact, $customerEmail, $filePath, $itemQuantity]);

                echo "Order placed successfully!";
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        } else {
            echo "Failed to upload logo.";
        }
    } else {
        echo "Invalid file upload.";
    }
}
?>
