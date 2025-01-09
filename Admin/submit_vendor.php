<?php
// Database connection settings
$servername = "localhost"; // your server name
$username = "root"; // your database username
$password = ""; // your database password (if any)
$dbname = "logo"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted and handle the data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $customerName = $_POST['customerName'];
    $customerContact = $_POST['customerContact'];
    $customerEmail = $_POST['customerEmail'];
    $itemQuantity = $_POST['itemQuantity'];

    // Initialize logo file path
    $logoFilePath = "";

    // Handle file upload
    if (isset($_FILES['logoFile']) && $_FILES['logoFile']['error'] == 0) {
        $logoFile = $_FILES['logoFile'];
        
        // Correct the file path to point to the Admin/uploads folder
        $targetDir = "uploads/"; // Path to the Admin folder's uploads directory
        
        // Ensure the file is not too long and make it unique by appending timestamp
        $targetFile = $targetDir . time() . "_" . basename($logoFile["name"]);

        // Check if file is a valid image (optional check)
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
        if (in_array($imageFileType, $allowedTypes)) {
            // Move uploaded file to target directory
            if (move_uploaded_file($logoFile["tmp_name"], $targetFile)) {
                $logoFilePath = $targetFile; // Set the logo file path

                // Insert data into the 'vendors' table
                $sql = "INSERT INTO vendors (name, contact, email, quantity, logo) 
                        VALUES ('$customerName', '$customerContact', '$customerEmail', '$itemQuantity', '$logoFilePath')";
                
                if ($conn->query($sql) === TRUE) {
                    echo "<script>
                            alert('Vendor added successfully!');
                            window.location.href = 'vendor.php';
                          </script>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "Sorry, there was an error uploading your logo.";
            }
        } else {
            echo "Invalid file type. Only JPG, JPEG, PNG, and GIF are allowed.";
        }
    } else {
        echo "Please upload a valid logo.";
    }
}

// Close the connection
$conn->close();
?>