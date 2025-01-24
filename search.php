<?php
// Database connection
$servername = "localhost"; // your server name
$username = "root"; // your database username
$password = ""; // your database password (if any)
$dbname = "logo"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if a search term is provided
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $searchTerm = mysqli_real_escape_string($conn, $_GET['search']); // Prevent SQL injection

    // SQL query to search products (replace 'products' with your actual table name)
    $sql = "SELECT * FROM products WHERE product_name LIKE '%$searchTerm%'";
    $result = $conn->query($sql);

    // Check if any results are found
    if ($result->num_rows > 0) {
        echo "<h2>Search Results:</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            // Output the results (replace 'product_name' with actual column names)
            echo "<li>" . $row['product_name'] . " - " . $row['product_description'] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "No results found for '$searchTerm'.";
    }
} else {
    echo "Please enter a search term.";
}

// Close the connection
$conn->close();
?>