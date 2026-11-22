<?php
include 'db_connection.php';

$stmt = $pdo->query("SELECT 1");
echo "Connection successful. Result: " . $stmt->fetchColumn();
?>
