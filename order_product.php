<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
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
    // echo '<p>' . htmlspecialchars($product['description']) . '</p>';
    echo '<p>Price: $' . number_format($product['price'], 2) . '</p>';

    // Order Form
    echo '
    <form action="process_order.php" method="POST">
    <label for="product_name">Product Name:</label>
    <input type="text" id="product_name" name="product_name" required>

    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" required>

    <label for="user_name">Your Name:</label>
    <input type="text" id="user_name" name="user_name" required>

    <label for="user_email">Your Email:</label>
    <input type="email" id="user_email" name="user_email" required>

    <button type="submit">Place Order</button>
</form>
';
} else {
    echo 'Product not found.';
}

// Close the database connection
$conn->close();
?>

</body>
</html>