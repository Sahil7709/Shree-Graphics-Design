<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'logo');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if (isset($_POST['submit_client'])) {
    $client_name = $conn->real_escape_string($_POST['client_name']);
    $client_description = $conn->real_escape_string($_POST['client_description']);

    // Handle file upload
    if (isset($_FILES['client_image']) && $_FILES['client_image']['error'] == 0) {
        $image_name = $_FILES['client_image']['name'];
        $image_tmp = $_FILES['client_image']['tmp_name'];
        $image_size = $_FILES['client_image']['size'];
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
                $sql = "INSERT INTO clients (client_name, client_description, client_image) 
                        VALUES ('$client_name', '$client_description', '$new_image_name')";
                
                if ($conn->query($sql) === TRUE) {
                    echo "New client added successfully!";
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
