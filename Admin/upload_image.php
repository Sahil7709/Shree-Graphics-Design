<?php
// Database connection
$host = 'localhost';
$user = 'root';          // Default user for XAMPP
$password = '';          // Default password for XAMPP (empty by default)
$dbname = 'logo';        // Your database name

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle the image upload
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $targetDir = "uploads/";
    $fileName = basename($_FILES["image"]["name"]);
    $targetFile = $targetDir . $fileName;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the file already exists
    if (file_exists($targetFile)) {
        // Generate a unique name for the file (timestamp + original name)
        $fileName = time() . "_" . $fileName;
        $targetFile = $targetDir . $fileName;  // Update the target file path with the new name
    }

    // Validate file type (image validation)
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if there was an error uploading the file
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $image_url = $fileName;  // Store the new file name in the database
            $subtitle = $conn->real_escape_string($_POST['subtitle']);
            $title = $conn->real_escape_string($_POST['title']);
            $price = $conn->real_escape_string($_POST['price']);

            // Insert image data into the database
            $sql = "INSERT INTO slider_images (image_url, subtitle, title, price) 
                    VALUES ('$image_url', '$subtitle', '$title', '$price')";
            if ($conn->query($sql) === TRUE) {
                header("Location: slider.php?success=1");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

$conn->close();
?>
