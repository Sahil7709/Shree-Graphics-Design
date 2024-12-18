<?php
include 'db.php';

// Fetch the product ID from the URL
$productId = $_GET['id'];

// Fetch the product details from the database
$query = "SELECT * FROM products WHERE id = :id";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':id', $productId, PDO::PARAM_INT);
$stmt->execute();
$product = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle form submission to update the product
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $discountPrice = $_POST['discount_price'];
    $rating = $_POST['rating'];
    $stock = $_POST['stock'];

    // Update the product in the database
    $updateQuery = "UPDATE products SET name = :name, category = :category, price = :price, discount_price = :discount_price, rating = :rating, stock = :stock WHERE id = :id";
    $updateStmt = $pdo->prepare($updateQuery);
    $updateStmt->bindParam(':name', $name);
    $updateStmt->bindParam(':category', $category);
    $updateStmt->bindParam(':price', $price);
    $updateStmt->bindParam(':discount_price', $discountPrice);
    $updateStmt->bindParam(':rating', $rating);
    $updateStmt->bindParam(':stock', $stock);
    $updateStmt->bindParam(':id', $productId);
    $updateStmt->execute();

    // Redirect back to the Products page
    header("Location: Products.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #343a40;
        }
        .form-label {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2>Edit Product</h2>

    <form action="edit_product.php?id=<?php echo $productId; ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="productName" name="name" value="<?php echo $product['name']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" id="category" name="category" value="<?php echo $product['category']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="<?php echo $product['price']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="discount_price" class="form-label">Discount Price</label>
            <input type="number" step="0.01" class="form-control" id="discount_price" name="discount_price" value="<?php echo $product['discount_price']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <input type="number" step="0.1" class="form-control" id="rating" name="rating" min="0" max="5" value="<?php echo $product['rating']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" value="<?php echo $product['stock']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="default_image" class="form-label">Default Image</label>
            <input type="file" class="form-control" id="default_image" name="default_image">
        </div>
        <div class="mb-3">
            <label for="hover_image" class="form-label">Hover Image</label>
            <input type="file" class="form-control" id="hover_image" name="hover_image">
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
