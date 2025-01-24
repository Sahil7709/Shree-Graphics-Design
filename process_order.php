<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'Logo');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming you receive POST data for the order (e.g., product name, quantity, user details)
$product_name = $_POST['product_name'];
$quantity = $_POST['quantity'];
$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];

// Step 1: Insert the order into the database
$sql = "INSERT INTO orders (product_name, quantity, user_name, user_email)
        VALUES ('$product_name', '$quantity', '$user_name', '$user_email')";

// Check if the order was inserted successfully
if ($conn->query($sql) === TRUE) {
    // Step 2: Insert a notification for the admin into the notifications table
    $notification_sql = "INSERT INTO notifications (message) 
                         VALUES ('New order received for product: $product_name by $user_name')";
    $conn->query($notification_sql); // Insert notification into the database

    // Success message and redirect to index.php
    $message = "Order placed successfully!";
    $redirect_url = "index.php"; // The page to redirect to
} else {
    // Failure message and redirect to index.php
    $message = "Error placing order. Please try again.";
    $redirect_url = "index.php"; // The page to redirect to
}

// Step 3: Close the database connection
$conn->close();
?>

<script>
    // Display the popup message
    alert("<?php echo $message; ?>");

    // Redirect to the index.php page
    window.location.href = "<?php echo $redirect_url; ?>";
</script>