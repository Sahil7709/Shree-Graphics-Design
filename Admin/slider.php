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
    <a href="#settings"><i class="fas fa-cog"></i> Settings</a>
    <a href="services.php"><i class="fas fa-briefcase"></i> Services</a>
    <a href="slider.php"><i class="fas fa-images"></i> Slider</a>
    <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
  </div>

  <!-- Main Content -->
  <div class="main-content p-4">
    <h2 class="mb-4">Upload Image</h2>

    <!-- Image Upload Form -->
    <form id="imageUploadForm" enctype="multipart/form-data" class="mb-3">
      <label for="image" class="form-label">Choose an Image:</label>
      <input type="file" id="image" name="image" accept="image/*" class="form-control mb-3" required>
      <button type="submit" class="btn btn-primary">Upload</button>
    </form>

    <!-- Image Preview -->
    <div id="imagePreview" class="mt-4">
      <p class="text-muted">Uploaded image will appear here.</p>
    </div>
  </div>

  <!-- Include Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Image Upload Script -->
  <script>
    document.getElementById('imageUploadForm').addEventListener('submit', function (e) {
      e.preventDefault(); // Prevent form submission

      const formData = new FormData(this);

      fetch('upload_image.php', {
          method: 'POST',
          body: formData
      })
      .then(response => response.json())
      .then(data => {
          if (data.success) {
              // Display the uploaded image
              const imagePreview = document.getElementById('imagePreview');
              imagePreview.innerHTML = `<img src="${data.imagePath}" alt="Uploaded Image" class="img-fluid rounded" style="max-width: 300px;"/>`;
          } else {
              alert('Image upload failed: ' + data.message);
          }
      })
      .catch(error => console.error('Error:', error));
    });
  </script>
</body>
</html>
