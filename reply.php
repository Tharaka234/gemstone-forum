<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $gem_id = $_POST['gem_id'];
    $reply = $_POST['reply_text'];

    $stmt = $pdo->prepare("INSERT INTO gem_replies (gem_id, user_id, reply_text) VALUES (?, ?, ?)");
    $stmt->execute([$gem_id, $_SESSION['user_id'], $reply]);

    header('Location: gem_identification.php');
    exit;
}
?>