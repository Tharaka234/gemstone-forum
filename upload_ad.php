<?php
session_start();
require 'db.php';

if (isset($_POST['submit_ad'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image_path = "";

    // Handle image upload
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
        $target_dir = "uploads/";

        // Ensure uploads/ exists
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0755, true);
        }

        // Sanitize and create unique filename
        $file_name = basename($_FILES["image"]["name"]);
        $file_name = preg_replace("/[^a-zA-Z0-9\._-]/", "_", $file_name);
        $unique_file_name = uniqid() . "_" . $file_name;
        $target_file = $target_dir . $unique_file_name;

        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

        if (!in_array($imageFileType, $allowedTypes)) {
            echo "❌ Only JPG, JPEG, PNG & GIF files are allowed.";
            exit;
        }

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $image_path = $target_file;
        } else {
            echo "❌ Error uploading file. Make sure the 'uploads' directory is writable.";
            exit;
        }
    } else {
        echo "❌ No image uploaded or an error occurred.";
        exit;
    }

    // Insert ad into database
    $stmt = $pdo->prepare("INSERT INTO gem_ads (title, description, price, image_path) VALUES (?, ?, ?, ?)");
    if ($stmt->execute([$title, $description, $price, $image_path])) {
        $lastId = $pdo->lastInsertId();

        // Add to cart
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        $_SESSION['cart'][] = $lastId;

        // Redirect to cart
        header("Location: cart.php");
        exit;
    } else {
        echo "❌ Failed to post ad.";
    }
}
?>
