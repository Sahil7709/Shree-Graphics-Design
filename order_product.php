<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Product</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script>
        function calculateTotal() {
            const quantity = document.getElementById('quantity').value;
            const price = document.getElementById('price').value;
            const total = quantity * price;
            document.getElementById('total_price').value = total.toFixed(2);
        }
    </script>
</head>
<body>
<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'Logo');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get product ID from URL
$product_id = $_GET['id'];

// Fetch product details
$sql = "SELECT * FROM products WHERE id = $product_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
    // Display product details
    echo '<h1>' . htmlspecialchars($product['name']) . '</h1>';
    echo '<form action="process_order.php" method="POST">';
    echo '<label for="product_name">Product Name:</label>';
    echo '<input type="text" id="product_name" name="product_name" value="' . htmlspecialchars($product['name']) . '" readonly>';

    echo '<label for="price">Price:</label>';
    echo '<input type="number" id="price" name="price" value="' . htmlspecialchars($product['price']) . '" readonly>';

    echo '<label for="quantity">Quantity:</label>';
    echo '<input type="number" id="quantity" name="quantity" min="1" required oninput="calculateTotal()">';

    echo '<label for="total_price">Total Price:</label>';
    echo '<input type="number" id="total_price" name="total_price" readonly>';

    echo '<label for="user_name">Your Name:</label>';
    echo '<input type="text" id="user_name" name="user_name" required>';

    echo '<label for="user_email">Your Email:</label>';
    echo '<input type="email" id="user_email" name="user_email" required>';

    echo '<button type="submit">Place Order</button>';
    echo '</form>';
} else {
    echo 'Product not found.';
}

// Close the database connection
$conn->close();
?>
</body>
</html>
