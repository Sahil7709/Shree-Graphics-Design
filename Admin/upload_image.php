<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uploadDir = 'uploads/'; // Directory to save uploaded images
    $uploadFile = $uploadDir . basename($_FILES['image']['name']);

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true); // Create the directory if it doesn't exist
    }

    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
        echo json_encode(['success' => true, 'imagePath' => $uploadFile]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Image upload failed']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>