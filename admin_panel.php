<?php
session_start();
if (!isset($_SESSION['is_admin'])) {
    header('Location: admin_login.php');
    exit;
}

include 'db.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $desc = $_POST['description'];

    $stmt = $pdo->prepare("UPDATE homepage_content SET title = ?, description = ? WHERE id = 1");
    $stmt->execute([$title, $desc]);
    $message = "✅ Content updated!";
}

$stmt = $pdo->query("SELECT * FROM homepage_content WHERE id = 1");
$data = $stmt->fetch();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - EduForum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e6f2ff;
            color: #003366;
            font-family: Arial, sans-serif;
            padding: 40px;
        }

        .form-control, .btn {
            margin-top: 15px;
        }

        .msg {
            margin-top: 15px;
            color: green;
        }
    </style>
</head>
<body>

    <h2>Admin Panel - Update Homepage</h2>

    <form method="POST">
        <label>Homepage Title</label>
        <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($data['title']) ?>" required>

        <label>Homepage Description</label>
        <textarea name="description" class="form-control" rows="5" required><?= htmlspecialchars($data['description']) ?></textarea>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>

    <?php if ($message): ?>
        <p class="msg"><?= $message ?></p>
    <?php endif; ?>

</body>
</html>
