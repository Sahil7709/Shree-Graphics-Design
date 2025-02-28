<?php
$conn = new mysqli('localhost', 'root', '', 'logo');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$sql = "SELECT * FROM clients WHERE id = $id";
$result = $conn->query($sql);
$client = $result->fetch_assoc();

if (isset($_POST['update_client'])) {
    $client_name = $conn->real_escape_string($_POST['client_name']);
    $client_description = $conn->real_escape_string($_POST['client_description']);
    $update_sql = "UPDATE clients SET client_name='$client_name', client_description='$client_description' WHERE id=$id";

    if (!empty($_FILES['client_image']['name'])) {
        $image_name = $_FILES['client_image']['name'];
        $image_tmp = $_FILES['client_image']['tmp_name'];
        $image_extension = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'webp'];

        if (in_array($image_extension, $allowed_extensions)) {
            $new_image_name = uniqid() . '.' . $image_extension;
            $upload_path = 'uploads/' . $new_image_name;

            if (move_uploaded_file($image_tmp, $upload_path)) {
                $update_sql = "UPDATE clients SET client_name='$client_name', client_description='$client_description', client_image='$new_image_name' WHERE id=$id";
            }
        }
    }

    if ($conn->query($update_sql) === TRUE) {
        header("Location: clients.php?msg=Client updated successfully");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Client</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Edit Client</h2>
    <form action="" method="POST" enctype="multipart/form-data" class="shadow p-4 rounded bg-light">
        <div class="mb-3">
            <label class="form-label">Client Name:</label>
            <input type="text" name="client_name" value="<?= htmlspecialchars($client['client_name']) ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Description:</label>
            <textarea name="client_description" class="form-control" rows="4" required><?= htmlspecialchars($client['client_description']) ?></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Current Image:</label><br>
            <img src="uploads/<?= htmlspecialchars($client['client_image']) ?>" width="100">
            <input type="file" name="client_image" class="form-control mt-2">
        </div>
        <button type="submit" name="update_client" class="btn btn-success w-100">Update Client</button>
    </form>
</div>
</body>
</html>
