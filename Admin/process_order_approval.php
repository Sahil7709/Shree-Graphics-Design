<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'Logo');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['order_id'], $_POST['status'])) {
    $order_id = $_POST['order_id'];
    $status = $_POST['status'];

    // Validate status value
    if ($status != 1 && $status != 2) {
        die("Invalid status.");
    }

    // Update the order status in the database
    $sql = "UPDATE orders SET status = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $status, $order_id);

    if ($stmt->execute()) {
        // Redirect to the orders page with a success message
        header("Location: admin_orders.php?status=success");
    } else {
        // Redirect to the orders page with an error message
        header("Location: admin_orders.php?status=error");
    }

    $stmt->close();
}

// Close the database connection
$conn->close();
?>
