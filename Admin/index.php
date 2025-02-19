<?php
session_start();

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
  <title>E-Commerce Dashboard</title>
  <!-- Include Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Include Font Awesome for Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Custom CSS -->
    <link rel="stylesheet" href ="CSS/index.css">

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
    <!-- <a href="#settings"><i class="fas fa-cog"></i> Settings</a> -->
    <a href="clients.php"><i class="fas fa-briefcase"></i> Clients</a>
    <a href="slider.php"><i class="fas fa-images"></i> Slider</a>
    <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <h1 class="mb-4">Welcome to the Dashboard</h1>

    <!-- Overview Cards -->
 <div class="row">
  <div class="col-md-3">
    <a href="products.php">
      <div class="card text-white bg-primary small-card">
        <div class="card-body">
          <h5 class="card-title">Products</h5>
          <!-- <p class="card-text">$45,000</p> -->
        </div>
      </div>
    </a>
  </div>

  <div class="col-md-3">
    <a href="admin_orders.php">
      <div class="card text-white bg-success small-card">
        <div class="card-body">
          <h5 class="card-title">Orders</h5>
          <!-- <p class="card-text">1,200</p> -->
        </div>
      </div>
    </a>
  </div>

  <div class="col-md-3">
    <a href="clients.php">
      <div class="card text-white bg-warning small-card">
        <div class="card-body">
          <h5 class="card-title">Clients</h5>
          <!-- <p class="card-text">350</p> -->
        </div>
      </div>
    </a>
  </div>

  <div class="col-md-3">
    <a href="customers.php">
      <div class="card text-white bg-danger small-card">
        <div class="card-body">
          <h5 class="card-title">Customers</h5>
          <!-- <p class="card-text">12</p> -->
        </div>
      </div>
    </a>
  </div>
</div>


    <!-- Tables -->
    <h2 id="products" class="mt-5">Products</h2>
 
  <div class="table-responsive">
 <!-- Product Table -->
 <table class="table table-striped">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <!-- <th>Image</th> -->
          <th>Name</th>
          <th>Category</th>
          <th>Price</th>
          <th>Stock</th>
          <th>Discount</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($products as $index => $product): ?>
        <tr>
          <td><?php echo $index + 1; ?></td>
          <!-- <td>
          <?php 
          $imagePath = "./uploads" . $product['image_default'];
          if (file_exists($imagePath)) {
              echo '<img src="' . htmlspecialchars($imagePath) . '" alt="' . htmlspecialchars($product['name']) . '" width="50">';
          } else {
              echo '<img src="assets/images/default-placeholder.png" alt="Default Image" width="50">';
          }
          ?>
          </td> -->
          <td><?php echo $product['name']; ?></td>
          <td><?php echo $product['category']; ?></td>
          <td>Rs. <?php echo number_format($product['price'], 2); ?></td>
          <td><?php echo $product['stock']; ?></td>
          <td><?php echo $product['discount_price']; ?>%</td>
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

  <!-- Include Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>