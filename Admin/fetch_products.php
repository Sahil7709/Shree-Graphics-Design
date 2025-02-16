<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Showcase</title>
    <link rel="stylesheet" href="CSS/index.css">
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
<?php

// Database connection
include 'db.php';  // Include your PDO-based database connection

// Check if the database connection is successful
if (!$pdo) {
    die("Database connection failed.");
}

// Check if category filter is set
$category_filter = isset($category_filter) ? $category_filter : '';

// Prepare the SQL query based on the category filter
$query = "SELECT * FROM products";
if ($category_filter) {
    $query .= " WHERE category = :category";
}

try {
    // Prepare and execute the query
    $stmt = $pdo->prepare($query);

    // Bind category parameter if the filter is set
    if ($category_filter) {
        $stmt->bindParam(':category', $category_filter);
    }

    $stmt->execute();

    // Check if there are products
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            // Ensure the image paths are correctly formed
            $image_hover_path = "admin/uploads/" . basename($row['image_hover']);

            // Check if the hover image exists; if not, use a default image
            $image_path = file_exists($image_hover_path) ? $image_hover_path : 'default_image_path.jpg';  

            // Display product
            echo '
            <div class="showcase">
                <div class="showcase-banner">
                    <a href="order_product.php?id=' . $row['id'] . '"> <!-- Link to the order page -->
                        <img src="' . $image_path . '" alt="' . htmlspecialchars($row['name']) . '" class="product-img">
                        <p class="showcase-badge">' . ($row['discount_price'] ? round(100 - ($row['discount_price'] / $row['price']) * 100) . '%' : '') . '</p>
                    </a>
                </div>
                <div class="showcase-content">
                    <a href="order_product.php?id=' . $row['id'] . '" class="showcase-category">' . htmlspecialchars($row['category']) . '</a>
                    <a href="order_product.php?id=' . $row['id'] . '"><h3 class="showcase-title">' . htmlspecialchars($row['name']) . '</h3></a>
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
                        <p class="price">Rs.' . number_format($row['discount_price'], 2) . '</p>';

            // Only show original price if there is a discount
            if ($row['discount_price'] < $row['price']) {
                echo '<del>Rs.' . number_format($row['price'], 2) . '</del>';
            }

            echo '</div>
                </div>
            </div>';
        }
    } else {
        echo "No products found.";
    }
} catch (PDOException $e) {
    echo "Error fetching products: " . $e->getMessage();
}
?>

</body>
</html>
