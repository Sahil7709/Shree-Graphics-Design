<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="CSS/index.css">
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<style>
    /* Modal styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 10;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        max-width: 90%;
        max-height: 90%;
        border-radius: 10px;
    }

    .close {
        position: absolute;
        top: 20px;
        right: 30px;
        font-size: 30px;
        color: white;
        cursor: pointer;
    }

    /* Service Card Styles */
    .service-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        padding: 20px;
    }

    .service-card {
        width: 300px;
        border-radius: 10px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        text-align: center;
        transition: transform 0.3s ease-in-out;
    }

    .service-card:hover {
        transform: scale(1.05);
    }

    .service-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .service-info {
        padding: 15px;
    }

    .service-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .service-price {
        color: green;
        font-size: 16px;
    }

    .service-desc {
        font-size: 14px;
        margin-top: 5px;
    }
</style>

<body>
<?php
// Database connection
include 'db.php'; // Ensure PDO-based database connection is included

// Check if the database connection is successful
if (!$pdo) {
    die("Database connection failed.");
}

// Check if category filter is set
$category_filter = isset($category_filter) ? $category_filter : '';

// Prepare the SQL query based on the category filter
$query = "SELECT * FROM products";
if (!empty($category_filter)) {
    $query .= " WHERE category = :category";
}

try {
    // Prepare and execute the query
    $stmt = $pdo->prepare($query);

    // Bind category parameter if the filter is set
    if (!empty($category_filter)) {
        $stmt->bindParam(':category', $category_filter);
    }

    $stmt->execute();

    // Check if there are products
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            // Ensure the image paths are correctly formed
            $image_path = "admin/uploads/" . $row['image_default'];
            $logo_path = "admin/uploads/" . $row['image_hover'];

            // Check if the images exist; if not, use a default image
            if (!file_exists($image_path) || empty($row['image_default'])) {
                $image_path = 'assets/default_image.jpg'; // Provide a default image
            }
            if (!file_exists($logo_path) || empty($row['image_hover'])) {
                $logo_path = 'assets/default_logo.png'; // Provide a default logo
            }

            // Debugging Output (Remove this after testing)
            echo "<!-- Debug: $image_path -->";
            echo "<!-- Debug: $logo_path -->";

            // Display product
            echo '
            <div class="showcase">
                <div class="showcase-banner">
                    <a href="#" class="openModal" data-img="' . htmlspecialchars($logo_path) . '">
                        <!-- Main product image -->
                        <img src="' . htmlspecialchars($image_path) . '" alt="' . htmlspecialchars($row['name']) . '" class="product-img">
                        <!-- Logo (hover image always visible) -->
                        <img src="' . htmlspecialchars($logo_path) . '" alt="Logo" class="product-logo">
                        <!-- Discount badge -->
                        <p class="showcase-badge">' . ($row['discount_price'] ? round(100 - ($row['discount_price'] / $row['price']) * 100) . '%' : '') . '</p>
                    </a>
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
        echo "<p style='color:red;'>No products found.</p>";
    }
} catch (PDOException $e) {
    echo "<p style='color:red;'>Error fetching products: " . $e->getMessage() . "</p>";
}
?>

</body>

</html>