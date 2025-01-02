<?php
session_start();

// Database connection
include 'db.php';  // Include your database connection

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $category = $_POST["category"];
    $price = $_POST["price"];
    $discount_price = $_POST["discount_price"];
    $rating = $_POST["rating"];

    // Directory for file uploads
    $upload_dir = "uploads/";

    // Check if the directory exists, create it if not
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // Validate and handle default image upload
    $image_default = $_FILES["image_default"]["name"];
    $image_default_path = $upload_dir . basename($image_default);

    // Validate image type and size for default image
    $allowed_types = ["image/jpeg", "image/png", "image/jpg"];
    $image_default_type = $_FILES["image_default"]["type"];
    if (!in_array($image_default_type, $allowed_types)) {
        die("Invalid file type for default image. Only JPEG, JPG, and PNG are allowed.");
    }
    if ($_FILES["image_default"]["size"] > 5000000) { // Max size 5MB
        die("Default image file is too large. Max size is 5MB.");
    }

    if (!move_uploaded_file($_FILES["image_default"]["tmp_name"], $image_default_path)) {
        die("Error uploading default image. Please ensure the uploads/ directory exists and is writable.");
    }

    // Validate and handle hover image upload
    $image_hover = $_FILES["image_hover"]["name"];
    $image_hover_path = $upload_dir . basename($image_hover);

    // Validate image type and size for hover image
    $image_hover_type = $_FILES["image_hover"]["type"];
    if (!in_array($image_hover_type, $allowed_types)) {
        die("Invalid file type for hover image. Only JPEG, JPG, and PNG are allowed.");
    }
    if ($_FILES["image_hover"]["size"] > 5000000) { // Max size 5MB
        die("Hover image file is too large. Max size is 5MB.");
    }

    if (!move_uploaded_file($_FILES["image_hover"]["tmp_name"], $image_hover_path)) {
        die("Error uploading hover image. Please ensure the uploads/ directory exists and is writable.");
    }

    // Insert product data into the database
    $sql = "INSERT INTO products (name, category, price, discount_price, image_default, image_hover, rating)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssddssi", $name, $category, $price, $discount_price, $image_default_path, $image_hover_path, $rating);

    if ($stmt->execute()) {
        echo "Product added successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
