<?php
require 'db.php';

// Fetch all about info records
$stmt = $pdo->query("SELECT * FROM about_info ORDER BY created_at DESC");
$aboutInfos = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - About Info</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container py-5">
    <h2 class="text-center mb-4">Manage About Info</h2>

    <div class="card mb-4">
        <div class="card-header bg-primary text-white">Add New Info</div>
        <div class="card-body">
            <form method="POST" action="add_about.php" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="4" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Upload Image (optional)</label>
                    <input type="file" name="image" accept="image/*" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">➕ Add Info</button>
            </form>
        </div>
    </div>

    <h4 class="mb-3">Current Info</h4>
    <?php foreach ($aboutInfos as $info): ?>
        <div class="card mb-3">
            <div class="card-header fw-bold"><?= htmlspecialchars($info['title']) ?></div>
            <div class="card-body">
                <?php if (!empty($info['image_path'])): ?>
                    <img src="<?= htmlspecialchars($info['image_path']) ?>" class="img-fluid rounded mb-2" alt="Image">
                <?php endif; ?>
                <p><?= nl2br(htmlspecialchars($info['description'])) ?></p>
                <a href="edit_about.php?id=<?= $info['id'] ?>" class="btn btn-sm btn-warning">✏ Edit</a>
                <a href="delete_about.php?id=<?= $info['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this info?');">🗑 Delete</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>