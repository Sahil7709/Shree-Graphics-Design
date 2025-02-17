<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Showcase</title>
    <link rel="stylesheet" href="CSS/index.css">
    <style>
        .showcase {
            position: relative;
            width: 300px;
            margin: 20px;
        }

        .showcase-banner {
            position: relative;
            width: 100%;
            height: auto;
        }

        .product-img {
            width: 100%;
            display: block;
        }

        .product-img.hover {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 80px; /* Adjust size as needed */
            height: auto;
            transform: translate(-50%, -50%);
            opacity: 0.8; /* Make it slightly transparent */
        }
    </style>
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
            $image_default_path = file_exists($image_default_path) ? $image_default_path : 'default_image_path.jpg';
            $image_hover_path = file_exists($image_hover_path) ? $image_hover_path : 'default_logo.png'; // Logo over main image
    
            // Display product in the specified card format
            echo '
        <div class="showcase">
            <div class="showcase-banner">
                <img src="' . $image_default_path . '" alt="' . htmlspecialchars($row['name']) . '" class="product-img default">
                <img src="' . $image_hover_path . '" alt="Logo" class="product-img hover">
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