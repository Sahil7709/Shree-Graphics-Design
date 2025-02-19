<?php
include 'db.php';  // Include your database connection

// Fetch products from the database
$query = "SELECT * FROM products"; // Modify this based on your table name and columns
$stmt = $pdo->query($query);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products Dashboard</title>
  <!-- Include Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Include Font Awesome for Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Include Ionicons -->
  <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="CSS/index.css">
</head>
<body>
  
  <!-- Sidebar -->
  <div class="sidebar">
    <div class="text-center py-4">
      <h3>My Dashboard</h3>
    </div>
    <a href="index.php"><i class="fas fa-chart-line"></i> Overview</a>
    <a href="Products.php"><i class="fas fa-box-open"></i> Products</a>
    <a href="admin_orders.php"><i class="fas fa-shopping-cart"></i> Orders</a>
    <a href="customers.php"><i class="fas fa-users"></i> Customers</a>
    <a href="clients.php"><i class="fas fa-briefcase"></i> Clients</a>
    <a href="slider.php"><i class="fas fa-images"></i> Slider</a>
    <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <h1 class="mb-4">Product Management</h1>

    <!-- Add Product Button -->
    <div class="mb-3">
      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">Add New Product</button>
    </div>

    <!-- Product Table -->
    <table class="table table-striped">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Category</th>
          <th>Price</th>
          <th>Stock</th>
          <th>Discount</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($products as $product): ?>
        <tr>
          <td><?php echo htmlspecialchars($product['id']); ?></td>
          <td><?php echo htmlspecialchars($product['name']); ?></td>
          <td><?php echo htmlspecialchars($product['category']); ?></td>
          <td>Rs. <?php echo number_format($product['price'], 2); ?></td>
          <td><?php echo htmlspecialchars($product['stock']); ?></td>
          <td><?php echo htmlspecialchars($product['discount_price']); ?>%</td>
          <td>
            <a href="edit_product.php?id=<?php echo $product['id']; ?>" class="btn btn-sm btn-warning">
              <i class="fas fa-edit"></i> Edit
            </a>
            <a href="delete_product.php?id=<?php echo $product['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this product?');">
              <i class="fas fa-trash-alt"></i> Delete
            </a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

<!-- Add Product Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="add_product.php" method="POST" enctype="multipart/form-data" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addProductModalLabel">Add New Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Product Name -->
        <div class="mb-3">
          <label for="name" class="form-label">Product Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <!-- Category -->
      <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-control" id="category" name="category" required>
          <option value="">Select Product</option>
          <option value="round_neck_tshirt">Round Neck T-shirt</option>
          <option value="v_neck_tshirt">V Neck T-shirt</option>
          <option value="pool_tshir">Pool T-shirt</option>
          <option value="cutSew">Cut And Sew T-Shirt</option>
          <option value="basicpool">Basic Pool Tshirt</option>

          <option value="cap">Cap</option>
          <option value="jacket">Jacket</option>
          <option value="sweartshirt">Sweart Shirt</option>
          <option value="denimShirt">Denim Shirt</option>
          <option value="windcheaters">Wind Cheaters</option>
          <option value="ties">Tie</option>

          <option value="handbag">Handbag</option>
          <option value="strolleybag">Strolley Bag</option>
          <option value="travelbag">Travel Bag</option>
          <option value="backpacks">Back Packs</option>
          <option value="laptopbag">Laptop Bag</option>
          <option value="laptopcumbag">Laptop Cum Bag</option>
          <option value="trekkingbag">Trekking Bag</option>
          <option value="passport">Passport Holder</option>
          <option value="ipad">I Pad Pouch</option>
          <option value="laptophandbag">Laptop Hand Bag</option>
          <option value="laptopPouch">Laptop Pouch</option>


          <option value="leatherofficebag">leather Office Bag</option>
          <option value="leatherpassport">leather passport Holder</option>
          <option value="leatherwallets">leather Wallets</option>
          <option value="leatherorganizer">leather Oraganizer</option>
          <option value="leathergift">leather Gift Set</option>

          <option value="school">School Uniforms</option>
          <option value="corporate">Corporate Uniforms </option>
          <option value="security">Security Uniforms </option>
          <option value="hotal">Hotal & Restaurant Uniforms</option>
          <option value="medical">Medical & Hospital Uniforms</option>


        </select>
      </div>


        <!-- Price -->
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="number" step="0.01" class="form-control" id="price" name="price" required>
        </div>

        <!-- Discount Price -->
        <div class="mb-3">
          <label for="discount_price" class="form-label">Discount Price</label>
          <input type="number" step="0.01" class="form-control" id="discount_price" name="discount_price" required>
        </div>

        <!-- Rating -->
        <div class="mb-3">
          <label for="rating" class="form-label">Rating</label>
          <input type="number" class="form-control" id="rating" name="rating" min="0" max="5" step="0.1" required>
        </div>

        <!-- Stock -->
        <div class="mb-3">
          <label for="stock" class="form-label">Stock</label>
          <input type="number" class="form-control" id="stock" name="stock" required>
        </div>

        <!-- Default Image -->
        <div class="mb-3">
          <label for="image_default" class="form-label">Default Image</label>
          <input type="file" class="form-control" id="image_default" name="image_default" required>
        </div>

        <!-- Hover Image -->
        <div class="mb-3">
          <label for="image_hover" class="form-label">Hover Image</label>
          <input type="file" class="form-control" id="image_hover" name="image_hover" required>
        </div>
      </div>
      <div class="modal-footer">
       <button type="submit" class="btn btn-primary">Add Product</button>
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </form>
  </div>
</div>

  <!-- Include Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
