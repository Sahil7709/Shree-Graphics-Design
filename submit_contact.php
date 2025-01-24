<?php
// Database credentials
$servername = "localhost";  // Your server name (usually localhost)
$username = "root";         // Your database username (replace with your username)
$password = "";             // Your database password (replace with your password)
$dbname = "logo";           // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $verificationCode = $_POST['verificationCode'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO contact_form (name, email, message, verification_code) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $message, $verificationCode);

    // Execute the query
    if ($stmt->execute()) {
        echo "Data saved successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>