<?php
require 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM about_info WHERE id = ?");
    $stmt->execute([$id]);
}

header('Location: admin_about.php');
exit;
?>