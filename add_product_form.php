
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Product & Logo</title>
</head>
<body>

<h2>Upload Product Image & Logo</h2>
<form action="add_product.php" method="POST" enctype="multipart/form-data">
    <label>Product Name:</label>
    <input type="text" name="name" required><br><br>

    <label>Category:</label>
    <input type="text" name="category" required><br><br>

    <label>Product Image:</label>
    <input type="file" name="product_image" accept="image/*" required><br><br>

    <label>Logo Image:</label>
    <input type="file" name="logo_image" accept="image/*" required><br><br>

    <button type="submit">Upload</button>
</form>

</body>
</html>
