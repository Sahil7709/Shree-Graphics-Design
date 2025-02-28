<?php
// Include database connection
include 'db.php';

// Ensure $pdo is available before running the query
if (!isset($pdo)) {
    die("Database connection is not established.");
}

// Check if client ID is set in the URL
if (isset($_GET['id'])) {
    $client_id = $_GET['id'];

    try {
        // Fetch the client image path before deletion
        $stmt = $pdo->prepare("SELECT client_image FROM clients WHERE id = ?");
        $stmt->execute([$client_id]);
        $client = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($client) {
            // Delete the image file from the server if it exists
            if (!empty($client['client_image']) && file_exists($client['client_image'])) {
                unlink($client['client_image']);
            }

            // Delete the client record from the database
            $stmt = $pdo->prepare("DELETE FROM clients WHERE id = ?");
            $stmt->execute([$client_id]);
        }
    } catch (PDOException $e) {
        die("Error deleting client: " . $e->getMessage());
    }

    // Redirect back to the clients page
    header("Location: clients.php");
    exit();
} else {
    die("Invalid request.");
}
