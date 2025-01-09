<?php
// Database connection
$host = 'localhost';
$user = 'root';        // Default user for XAMPP
$password = '';        // Default empty password for XAMPP
$dbname = 'logo';      // Your database name

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the ID is set in the POST request
if (isset($_POST['id'])) {
    $id = intval($_POST['id']);

    // Retrieve the image URL from the database
    $sql = "SELECT image_url FROM slider_images WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $imagePath = 'uploads/' . $row['image_url'];

        // Delete the record from the database
        $deleteSql = "DELETE FROM slider_images WHERE id = ?";
        $deleteStmt = $conn->prepare($deleteSql);
        $deleteStmt->bind_param('i', $id);

        if ($deleteStmt->execute()) {
            // Check if the file exists and delete it from the server
            if (file_exists($imagePath)) {
                unlink($imagePath); // Delete the file
            }
            // Redirect back to the slider management page with a success message
            header("Location: slider.php?message=Image+deleted+successfully");
        } else {
            // Redirect back with an error message
            header("Location: slider.php?error=Failed+to+delete+image");
        }
    } else {
        // Redirect back with an error message if no image is found
        header("Location: slider.php?error=Image+not+found");
    }
} else {
    // Redirect back if no ID is provided
    header("Location: slider.php?error=Invalid+request");
}

// Close the database connection
$conn->close();
?>
