<?php
include 'db.php'; // Ensure this file contains your database connection

$search_query = isset($_GET['query']) ? trim($_GET['query']) : '';

if ($search_query == '') {
    echo "<p>Please enter a search term.</p>";
    exit;
}

try {
    // Search across multiple tables
    $sql = "
        (SELECT 'product' AS type, id, name AS title, category AS category, price AS extra, image_default AS image FROM products WHERE name LIKE :search OR category LIKE :search)
        UNION
        (SELECT 'blog' AS type, id, title, '' AS category, '' AS extra, image AS image FROM blog_posts WHERE title LIKE :search OR content LIKE :search)
        UNION
        (SELECT 'category' AS type, id, name AS title, '' AS category, '' AS extra, '' AS image FROM categories WHERE name LIKE :search)
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([':search' => "%$search_query%"]);

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<h2>Search Results for: " . htmlspecialchars($search_query) . "</h2>";

    if (count($results) > 0) {
        foreach ($results as $row) {
            $image = !empty($row['image']) ? "admin/uploads/" . $row['image'] : 'default_image.jpg';
            $link = ($row['type'] == 'product') ? "product_details.php?id=" . $row['id'] :
                    (($row['type'] == 'blog') ? "blog_post.php?id=" . $row['id'] :
                    "category.php?id=" . $row['id']);

            echo '<div class="search-result">
                    <a href="' . $link . '">
                        <img src="' . $image . '" alt="' . htmlspecialchars($row['title']) . '" class="result-image">
                        <h3>' . htmlspecialchars($row['title']) . '</h3>
                        <p>Type: ' . ucfirst($row['type']) . '</p>
                    </a>
                </div>';
        }
    } else {
        echo "<p>No results found.</p>";
    }
} catch (PDOException $e) {
    echo "Error fetching search results: " . $e->getMessage();
}
?>
