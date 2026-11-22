<?php
require 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM about_info WHERE id = ?");
    $stmt->execute([$id]);
    $info = $stmt->fetch();

    if (!$info) {
        die("Info not found.");
    }
} else {
    header("Location: admin_about.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $stmt = $pdo->prepare("UPDATE about_info SET title = ?, description = ? WHERE id = ?");
    $stmt->execute([$title, $description, $id]);

    header("Location: admin_about.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit About Info</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container py-5">
    <h2>Edit About Info</h2>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($info['title']) ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="5" required><?= htmlspecialchars($info['description']) ?></textarea>
        </div>
        <button type="submit" class="btn btn-success">💾 Update Info</button>
        <a href="admin_about.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>