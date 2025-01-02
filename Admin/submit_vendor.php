<?php
// Database connection
$host = 'localhost'; // Change if necessary
$dbname = 'logo';
$username = 'root'; // Database username
$password = ''; // Database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Getting form data
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $quantity = $_POST['quantity'];

    // Handling file upload
    $logo = $_FILES['logo'];
    $targetDir = "uploads/"; // Make sure this directory exists and is writable
    $targetFile = $targetDir . basename($logo['name']);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the file is an image
    if (getimagesize($logo['tmp_name'])) {
        // Move the uploaded file to the target directory
        if (move_uploaded_file($logo['tmp_name'], $targetFile)) {
            // Store only the relative path in the database
            $logoPath = 'uploads/' . basename($logo['name']);
            
            // Insert data into the database
            $sql = "INSERT INTO vendors (name, contact, email, logo, quantity) 
                    VALUES (:name, :contact, :email, :logo, :quantity)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':name' => $name,
                ':contact' => $contact,
                ':email' => $email,
                ':logo' => $logoPath, // Save the relative path
                ':quantity' => $quantity
            ]);

            echo "Vendor added successfully!";
        } else {
            echo "Sorry, there was an error uploading your logo.";
        }
    } else {
        echo "File is not an image.";
    }
}
?>
