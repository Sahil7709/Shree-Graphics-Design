<?php
// Include database connection
include 'db.php';

// Ensure $pdo is available before running the query
if (!isset($pdo)) {
    die("Database connection is not established.");
}

// Handle form submission for adding a client
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_client'])) {
    $client_name = $_POST['client_name'];
    $client_description = $_POST['client_description'];

    // Handle file upload
    $target_file = "";
    if (!empty($_FILES['client_image']['name'])) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["client_image"]["name"]);
        move_uploaded_file($_FILES["client_image"]["tmp_name"], $target_file);
    }

    // Insert into database
    try {
        $stmt = $pdo->prepare("INSERT INTO clients (name, description, image) VALUES (?, ?, ?)");
        $stmt->execute([$client_name, $client_description, $target_file]);
    } catch (PDOException $e) {
        die("Error inserting client: " . $e->getMessage());
    }

    // Redirect to refresh page and prevent form resubmission
    header("Location: clients.php");
    exit();
}

// Fetch clients from the database
try {
    $stmt = $pdo->query("SELECT * FROM clients");
    $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clients</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
      <h2 class="text-center mb-4">Clients</h2>

      <!-- Add Client Button -->
      <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addClientModal">
        <i class="fas fa-plus"></i> Add Client
      </button>

      <!-- Clients Table -->
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Client Name</th>
            <th>Description</th>
            <th>Logo</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($clients as $client): ?>
          <tr>
            <td><?= htmlspecialchars($client['id']) ?></td>
            <td><?= htmlspecialchars($client['client_name']) ?></td>
            <td><?= htmlspecialchars($client['client_description']) ?></td>
            <td>
              <?php if (!empty($client['image'])): ?>
                <img src="<?= htmlspecialchars($client['client_image']) ?>" width="50" height="50" alt="Client Logo">
              <?php else: ?>
                No Image
              <?php endif; ?>
            </td>
            <td>
              <a href="edit_client.php?id=<?= $client['id'] ?>" class="btn btn-warning btn-sm">
                <i class="fas fa-edit"></i> Edit
              </a>
              <a href="delete_client.php?id=<?= $client['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this client?');">
                <i class="fas fa-trash"></i> Delete
              </a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Add Client Modal -->
  <div class="modal fade" id="addClientModal" tabindex="-1" aria-labelledby="addClientLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add a New Client</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="clients.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="client_name" class="form-label">Client Name:</label>
              <input type="text" name="client_name" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="client_description" class="form-label">Description:</label>
              <textarea name="client_description" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
              <label for="client_image" class="form-label">Client Logo:</label>
              <input type="file" name="client_image" class="form-control">
            </div>
            <button type="submit" name="submit_client" class="btn btn-primary w-100">Add Client</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
