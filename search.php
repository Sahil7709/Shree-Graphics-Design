<?php
if (isset($_GET['query'])) {
    $query = $_GET['query'];
    
    // Database Connection
    $conn = new mysqli("localhost", "root", "", "logo");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = $conn->real_escape_string($query);
    $sql = "SELECT * FROM products WHERE name LIKE '%$query%'"; // Change 'name' to the correct column name

    $result = $conn->query($sql);
    
    if (!$result) {
        die("Query Failed: " . $conn->error); // Show exact SQL error
    }

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . htmlspecialchars($row['name']) . "</li>"; // Change 'name' if needed
        }
    } else {    
        echo "<li>No results found</li>";
    }

    $conn->close();
}
?>
