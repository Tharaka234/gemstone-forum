<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id']) || !isset($_GET['id'])) {
    header('Location: forum.php');
    exit;
}

$threadId = $_GET['id'];

// Check if the user owns the thread or is an admin
$stmt = $pdo->prepare("SELECT * FROM threads WHERE id = ?");
$stmt->execute([$threadId]);
$thread = $stmt->fetch();

if ($thread && ($_SESSION['user_id'] == $thread['user_id'] || !empty($_SESSION['is_admin']))) {
    $deleteStmt = $pdo->prepare("DELETE FROM threads WHERE id = ?");
    $deleteStmt->execute([$threadId]);
}

header('Location: forum.php');
exit;
?>
