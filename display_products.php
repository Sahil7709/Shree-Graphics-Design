<?php
// Set upload directory
$uploadDir = "uploads/";

// Check if the directory exists
if (!is_dir($uploadDir)) {
    die("No uploaded images found.");
}

// Get all final product images
$files = glob($uploadDir . "final_*.jpg");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Products</title>
    <style>
        .product-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product-item {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        img {
            max-width: 200px;
            height: auto;
        }
    </style>
</head>
<body>
    <h2>Uploaded Products</h2>
    <div class="product-grid">
        <?php foreach ($files as $file): ?>
            <div class="product-item">
                <img src="<?php echo $file; ?>" alt="Product Image">
                <br>
                <a href="<?php echo $file; ?>" download>Download</a>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
