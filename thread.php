<!-- thread.php -->
<?php
include 'db.php';
session_start();

$thread_id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user_id'])) {
    $content = $_POST['content'];
    $stmt = $pdo->prepare("INSERT INTO posts (thread_id, user_id, content) VALUES (?, ?, ?)");
    $stmt->execute([$thread_id, $_SESSION['user_id'], $content]);
}

$thread = $pdo->prepare("SELECT title FROM threads WHERE id = ?");
$thread->execute([$thread_id]);
$title = $thread->fetchColumn();
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo htmlspecialchars($title); ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e6f2ff;
            color:rgb(14, 12, 53);
            margin: 0;
            padding: 20px;
        }

        .thread-title {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #003366;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 51, 102, 0.2);
            max-width: 600px;
            margin: 0 auto 30px auto;
        }

        textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #b3d1ff;
            border-radius: 5px;
            resize: vertical;
            box-sizing: border-box;
        }

        button {
            background-color: #0059b3;
            color: white;
            padding: 10px 20px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        button:hover {
            background-color: #004080;
        }

        .replies {
            max-width: 700px;
            margin: 0 auto;
        }

        .reply {
            background-color: #ffffff;
            padding: 15px 20px;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0, 51, 102, 0.1);
            margin-bottom: 15px;
        }

        .reply strong {
            color: #003366;
        }

        h3 {
            text-align: center;
            margin-top: 40px;
            color: #003366;
        }
    </style>
</head>
<body>
    <?php include 'navbar_update.php'; ?>

    <div class="thread-title"><?php echo htmlspecialchars($title); ?></div>

    <?php if (isset($_SESSION['user_id'])): ?>
        <form method="post">
            <label for="content"><strong>Your Reply:</strong></label>
            <textarea name="content" required></textarea>
            <button type="submit">Reply</button>
        </form>
    <?php endif; ?>

    <h3>Replies</h3>
    <div class="replies">
        <?php
        $stmt = $pdo->prepare("SELECT posts.content, users.username FROM posts JOIN users ON posts.user_id = users.id WHERE thread_id = ? ORDER BY posts.created_at");
        $stmt->execute([$thread_id]);
        while ($post = $stmt->fetch()): ?>
            <div class="reply">
                <strong><?php echo htmlspecialchars($post['username']); ?>:</strong><br>
                <?php echo nl2br(htmlspecialchars($post['content'])); ?>
            </div>
        <?php endwhile; ?>
    </div>
  </body>
</html>
