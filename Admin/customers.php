<?php
// Database connection
$host = 'localhost'; // Change if necessary
$dbname = 'logo';
$username = 'root'; // Database username
$password = ''; // Database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Fetch vendors data from the database
$sql = "SELECT * FROM vendors";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$vendors = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customers</title>
  <!-- Include Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Include Font Awesome for Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Include Custom CSS -->
  <link rel="stylesheet" href="CSS/index.css"> <!-- Ensure this CSS file exists or adjust the path -->
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
    <a href="services.php"><i class="fas fa-briefcase"></i> Services</a>
    <a href="slider.php"><i class="fas fa-images"></i> Slider</a>
    <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
  </div>

  <div class="main-content">
    <!-- Main Content -->
    <div class="container my-5">
      <h1 class="text-center mb-4">Customers</h1>
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Contact</th>
              <th>Email</th>
              <th>Logo</th>
              <th>Quantity</th>
            </tr>
          </thead>
          <tbody>
            <?php
            // Loop through each vendor and display their details in the table
            foreach ($vendors as $vendor) {
                echo "<tr>
                        <td>{$vendor['id']}</td>
                        <td>{$vendor['name']}</td>
                        <td>{$vendor['contact']}</td>
                        <td>{$vendor['email']}</td>
                        <td><img src='{$vendor['logo']}' alt='Logo' width='100'></td>
                        <td>{$vendor['quantity']}</td>
                      </tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Include Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
