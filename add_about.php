<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    // Handle image upload
    $imagePath = null;
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $imageDir = 'uploads/images/';
        if (!is_dir($imageDir)) {
            mkdir($imageDir, 0777, true);
        }

        $imageName = time() . "_" . basename($_FILES['image']['name']);
        $imagePath = $imageDir . $imageName;

        move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
    }

    // Insert into database
    $stmt = $pdo->prepare("INSERT INTO about_info (title, description, image_path) VALUES (?, ?, ?)");
    $stmt->execute([$title, $description, $imagePath]);

    header("Location: admin_about.php");
    exit;
}
?>