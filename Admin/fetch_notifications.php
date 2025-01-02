<?php
session_start();

// Database connection
include 'db.php';  // Include your database connection

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch notifications from the database (latest first)
$sql = "SELECT * FROM notifications ORDER BY created_at DESC LIMIT 5";  // Get latest 5 notifications
$result = $conn->query($sql);

// Display notifications
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>" . $row['message'] . " - " . $row['created_at'] . "</p>";
    }
} else {
    echo "No new notifications.";
}

// Close the database connection
$conn->close();
?>