<?php
session_start();
include 'db.php';  // Include the db.php file with PDO connection

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $category = $_POST["category"];
    $price = $_POST["price"];
    $discount_price = $_POST["discount_price"];
    $rating = $_POST["rating"];
    $stock = $_POST['stock']; // Get stock value from form

    // Directory for file uploads
    $upload_dir = "uploads/";

    // Check if directory exists
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // Default Image upload
    if (isset($_FILES["image_default"]) && $_FILES["image_default"]["error"] == 0) {
        $image_default = $_FILES["image_default"]["name"];
        $image_default_path = $upload_dir . basename($image_default);

        $allowed_types = ["image/jpeg", "image/png", "image/jpg"];
        $image_default_type = $_FILES["image_default"]["type"];

        if (!in_array($image_default_type, $allowed_types)) {
            $_SESSION['error'] = "Invalid file type for default image.";
            header('Location: Products.php');
            exit();
        }

        if ($_FILES["image_default"]["size"] > 5000000) { 
            $_SESSION['error'] = "Default image file is too large. Max size is 5MB.";
            header('Location: Products.php');
            exit();
        }

        if (!move_uploaded_file($_FILES["image_default"]["tmp_name"], $image_default_path)) {
            $_SESSION['error'] = "Error uploading default image.";
            header('Location: Products.php');
            exit();
        }
    } else {
        $_SESSION['error'] = "Please upload the default image.";
        header('Location: Products.php');
        exit();
    }

    // Hover Image upload
    if (isset($_FILES["image_hover"]) && $_FILES["image_hover"]["error"] == 0) {
        $image_hover = $_FILES["image_hover"]["name"];
        $image_hover_path = $upload_dir . basename($image_hover);

        $image_hover_type = $_FILES["image_hover"]["type"];

        if (!in_array($image_hover_type, $allowed_types)) {
            $_SESSION['error'] = "Invalid file type for hover image.";
            header('Location: Products.php');
            exit();
        }

        if ($_FILES["image_hover"]["size"] > 5000000) { 
            $_SESSION['error'] = "Hover image file is too large. Max size is 5MB.";
            header('Location: Products.php');
            exit();
        }

        if (!move_uploaded_file($_FILES["image_hover"]["tmp_name"], $image_hover_path)) {
            $_SESSION['error'] = "Error uploading hover image.";
            header('Location: Products.php');
            exit();
        }
    }

    // Insert product data into the database using PDO
    try {
        $sql = "INSERT INTO products (name, category, price, discount_price, image_default, image_hover, rating, stock)
                VALUES (:name, :category, :price, :discount_price, :image_default, :image_hover, :rating, :stock)";
        $stmt = $pdo->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':category', $category);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':discount_price', $discount_price);
        $stmt->bindParam(':image_default', $image_default);
        $stmt->bindParam(':image_hover', $image_hover);
        $stmt->bindParam(':rating', $rating);
        $stmt->bindParam(':stock', $stock); // Bind stock parameter

        // Execute the statement
        if ($stmt->execute()) {
            $_SESSION['success'] = "Product added successfully.";
        } else {
            $_SESSION['error'] = "Error inserting product data.";
        }
    } catch (PDOException $e) {
        $_SESSION['error'] = "Error: " . $e->getMessage();
    }

    header('Location: Products.php');
    exit();
}
?>
