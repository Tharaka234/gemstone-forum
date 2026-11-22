<?php
session_start();
include 'db.php';

// Redirect if not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$success = false;

// Handle POST request when creating a thread
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);

    if (!empty($title)) {
        $stmt = $pdo->prepare("INSERT INTO threads (title, user_id) VALUES (?, ?)");
        $stmt->execute([$title, $_SESSION['user_id']]);
        $success = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Thread</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            background: #f0f8ff;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        nav.navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1030;
        }

        main {
            flex: 1;
            padding-top: 70px;
        }

        .thread-form {
            max-width: 500px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #003366;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>

    <?php include 'navbar.php'; ?>

    <main>
        <div class="container">
            <div class="thread-form">
                <h2 class="text-center mb-4 text-primary">Create New Thread</h2>

                <?php if ($success): ?>
                    <div class="alert alert-success">Thread posted successfully! <a href="forum.php">Go to Forum</a></div>
                <?php endif; ?>

                <form method="post">
                    <div class="mb-3">
                        <label for="title" class="form-label">Thread Title</label>
                        <input name="title" id="title" type="text" required class="form-control" placeholder="Enter your thread title">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Post Thread</button>
                </form>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

