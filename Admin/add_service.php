<?php
// admin_add_service.php

// Database connection
$conn = new mysqli('localhost', 'root', '', 'logo');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if (isset($_POST['submit_service'])) {
    $service_name = $_POST['service_name'];
    $service_description = $_POST['service_description'];
    $service_price = $_POST['service_price'];

    // Handle file upload
    if (isset($_FILES['service_image']) && $_FILES['service_image']['error'] == 0) {
        $image_name = $_FILES['service_image']['name'];
        $image_tmp = $_FILES['service_image']['tmp_name'];
        $image_size = $_FILES['service_image']['size'];
        $image_extension = pathinfo($image_name, PATHINFO_EXTENSION);
        $allowed_extensions = ['jpg', 'jpeg', 'png'];

        // Check file type
        if (in_array(strtolower($image_extension), $allowed_extensions)) {
            // Generate a unique name for the image
            $new_image_name = uniqid() . '.' . $image_extension;
            $upload_path = 'uploads/' . $new_image_name;

            // Move the uploaded image to the "uploads" folder
            if (move_uploaded_file($image_tmp, $upload_path)) {
                // Insert data into the database
                $sql = "INSERT INTO services (service_name, service_description, service_price, service_image) VALUES ('$service_name', '$service_description', '$service_price', '$new_image_name')";
                if ($conn->query($sql) === TRUE) {
                    echo "New service added successfully!";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "Failed to upload image.";
            }
        } else {
            echo "Only JPG, JPEG, and PNG images are allowed.";
        }
    } else {
        echo "Please upload an image.";
    }
}

$conn->close();
?>
