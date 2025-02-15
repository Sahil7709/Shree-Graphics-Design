<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if GD library is enabled
    if (!function_exists('imagecreatefromjpeg')) {
        die("Error: GD Library is not enabled in PHP.");
    }

    // Set upload directory
    $uploadDir = "uploads/";

    // Ensure the uploads directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Upload product image
    $productImageName = time() . "_" . $_FILES['product_image']['name'];
    $productImagePath = $uploadDir . $productImageName;
    move_uploaded_file($_FILES['product_image']['tmp_name'], $productImagePath);

    // Upload logo image
    $logoImageName = time() . "_" . $_FILES['logo_image']['name'];
    $logoImagePath = $uploadDir . $logoImageName;
    move_uploaded_file($_FILES['logo_image']['tmp_name'], $logoImagePath);

    // Get image extensions
    $productExt = strtolower(pathinfo($productImagePath, PATHINFO_EXTENSION));
    $logoExt = strtolower(pathinfo($logoImagePath, PATHINFO_EXTENSION));

    // Create images from file based on type
    if ($productExt == "jpg" || $productExt == "jpeg") {
        $productImg = imagecreatefromjpeg($productImagePath);
    } elseif ($productExt == "png") {
        $productImg = imagecreatefrompng($productImagePath);
    } else {
        die("Error: Unsupported product image format (use JPG or PNG).");
    }

    if ($logoExt == "jpg" || $logoExt == "jpeg") {
        $logoImg = imagecreatefromjpeg($logoImagePath);
    } elseif ($logoExt == "png") {
        $logoImg = imagecreatefrompng($logoImagePath);
    } else {
        die("Error: Unsupported logo image format (use JPG or PNG).");
    }

    // Resize product image to 600x400
    $productWidth = 500;
    $productHeight = 300;
    $resizedProductImg = imagecreatetruecolor($productWidth, $productHeight);
    imagecopyresampled($resizedProductImg, $productImg, 0, 0, 0, 0, $productWidth, $productHeight, imagesx($productImg), imagesy($productImg));

    // Resize logo image to 150x150
    $logoWidth = 90;
    $logoHeight = 80;
    $resizedLogoImg = imagecreatetruecolor($logoWidth, $logoHeight);
    imagecopyresampled($resizedLogoImg, $logoImg, 0, 0, 0, 0, $logoWidth, $logoHeight, imagesx($logoImg), imagesy($logoImg));

    // Calculate center position for the logo
    $xPos = ($productWidth - $logoWidth) / 3;  // Center X
    $yPos = ($productHeight - $logoHeight) / 2; // Center Y

    // Merge logo onto product image at center
    imagecopy($resizedProductImg, $resizedLogoImg, $xPos, $yPos, 0, 0, $logoWidth, $logoHeight);

    // Save final image
    $finalImagePath = $uploadDir . "final_" . time() . ".jpg";
    imagejpeg($resizedProductImg, $finalImagePath, 100); // High quality

    // Free memory
    imagedestroy($productImg);
    imagedestroy($logoImg);
    imagedestroy($resizedProductImg);
    imagedestroy($resizedLogoImg);

    echo "<h2>Product Image with Logo</h2>";
    echo "<img src='$finalImagePath' style='width:300px;'><br>";
    echo "<a href='$finalImagePath' download>Download Image</a>";
}
?>
