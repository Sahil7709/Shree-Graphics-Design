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
    <a href="#customers"><i class="fas fa-users"></i> Customers</a>
    <a href="#settings"><i class="fas fa-cog"></i> Settings</a>
    <a href="#logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>
<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'Logo');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch orders from the database
$sql = "SELECT * FROM orders ORDER BY order_date DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='table-container'>";
    echo "<h2>Pending Orders</h2>";
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>Order Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Fetch the current order status
        $status = isset($row['status']) ? $row['status'] : 0;

        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['product_name'] . "</td>
                <td>" . $row['quantity'] . "</td>
                <td>" . $row['user_name'] . "</td>
                <td>" . $row['user_email'] . "</td>
                <td>" . $row['order_date'] . "</td>
                <td>" . ($status == 1 ? 'Accepted' : ($status == 0 ? 'Pending' : 'Rejected')) . "</td>
                <td>
                    <form action='process_order_approval.php' method='POST'>
                        <input type='hidden' name='order_id' value='" . $row['id'] . "'>
                        <button type='submit' name='status' value='1' class='accept'>Accept</button>
                        <button type='submit' name='status' value='2' class='reject'>Reject</button>
                    </form>
                </td>
              </tr>";
    }
    echo "</table>";
    echo "</div>";
} else {
    echo "<p>No orders found.</p>";
}

// Close the database connection
$conn->close();
?>
  
  <!-- Include Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
