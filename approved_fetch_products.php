<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Showcase</title>
    <link rel="stylesheet" href="CSS/index.css">
</head>
<body>
    
<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'Logo');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Check if there are products
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        // Ensure the image paths are correctly formed
        $image_default_path = "admin/uploads/" . basename($row['image_default']);
        $image_hover_path = "admin/uploads/" . basename($row['image_hover']);

        // Check if images exist before displaying
        $image_default_path = file_exists($image_default_path) ? $image_default_path : 'default_image_path.jpg';  // Replace with a default image if not found
        $image_hover_path = file_exists($image_hover_path) ? $image_hover_path : 'default_image_path.jpg';  // Replace with a default image if not found

        // Display product in the specified card format
        echo '
        <div class="showcase">
            <div class="showcase-banner">
                <img src="' . $image_default_path . '" alt="' . htmlspecialchars($row['name']) . '" width="300" class="product-img default">
                <img src="' . $image_hover_path . '" alt="' . htmlspecialchars($row['name']) . '" width="300" class="product-img hover">
                <p class="showcase-badge">' . ($row['discount_price'] ? round(100 - ($row['discount_price'] / $row['price']) * 100) . '%' : '') . '</p>
                <div class="showcase-actions">
                    <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                    </button>
                    <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                    </button>
                    <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                    </button>
                    <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                </div>
            </div>
            <div class="showcase-content">
                <a href="order_product.php?id=' . $row['id'] . '" class="showcase-category">' . htmlspecialchars($row['category']) . '</a>
                <a href="order_product.php?id=' . $row['id'] . '">
                    <h3 class="showcase-title">' . htmlspecialchars($row['name']) . '</h3>
                </a>
                <div class="showcase-rating">';

        // Rating stars display
        for ($i = 0; $i < $row['rating']; $i++) {
            echo '<ion-icon name="star"></ion-icon>';
        }
        for ($i = $row['rating']; $i < 5; $i++) {
            echo '<ion-icon name="star-outline"></ion-icon>';
        }

        echo '</div>
                <div class="price-box">
                    <p class="price">$' . number_format($row['discount_price'], 2) . '</p>';
                    
        // Only show original price if there is a discount
        if ($row['discount_price'] < $row['price']) {
            echo '<del>$' . number_format($row['price'], 2) . '</del>';
        }

        echo '</div>
            </div>
        </div>';
    }
} else {
    echo "No products found.";
}

// Close the database connection
$conn->close();
?>

</body>
</html>
