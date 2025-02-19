<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .showcase {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    height: 100%;
    position: relative;
}

.showcase-banner {
    width: 100%;
    height: 250px; /* Same height as products */
    display: flex;
    justify-content: center;
    overflow: hidden;
}

.showcase-content {
    text-align: center;
    padding: 10px;
}

.product-img {
    width: 100%;
    height: 250px; 
    object-fit: cover;
    border-radius: 10px;
}


</style>
<body>


<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'logo');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch clients from the database
$sql = "SELECT client_name, client_description, client_image FROM clients ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="showcase">
            <div class="showcase-banner">
                <img src="Admin/uploads/' . htmlspecialchars($row['client_image']) . '" alt="' . htmlspecialchars($row['client_name']) . '" class="product-img">
            </div>
            <div class="showcase-content">
                <h3 class="showcase-title">' . htmlspecialchars($row['client_name']) . '</h3>
                <p class="showcase-description">' . htmlspecialchars($row['client_description']) . '</p>
            </div>
        </div>';
    }
} else {
    echo "<p>No clients added yet.</p>";
}

$conn->close();
?>


    
</body>
</html>

