<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Clients</title>
  <!-- Include Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Include Font Awesome for Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
    <div class="container mt-5">
      <h2 class="text-center mb-4">Add a New Client</h2>
      <form action="add_client.php" method="POST" enctype="multipart/form-data" class="shadow p-4 rounded bg-light">
        <div class="mb-3">
          <label for="client_name" class="form-label">Client Name:</label>
          <input type="text" name="client_name" id="client_name" class="form-control" placeholder="Enter client's name" required>
        </div>
        <div class="mb-3">
          <label for="client_description" class="form-label">Description:</label>
          <textarea name="client_description" id="client_description" class="form-control" rows="4" placeholder="Enter client description" required></textarea>
        </div>
        <div class="mb-3">
          <label for="client_image" class="form-label">Client Logo:</label>
          <input type="file" name="client_image" id="client_image" class="form-control" accept="image/*" required>
        </div>
        <button type="submit" name="submit_client" class="btn btn-primary w-100">Add Client</button>
      </form>
    </div>
  </div>

  <!-- Include Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
