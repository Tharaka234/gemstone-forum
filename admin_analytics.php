<?php
session_start();
include 'db_connection.php';

// Admin check
if (!isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
    header("Location: admin_login.php");
    exit;
}

// Analytics queries
$totalUsers = $pdo->query("SELECT COUNT(*) FROM users")->fetchColumn();

// Ensure events table exists and count
try {
    $totalEvents = $pdo->query("SELECT COUNT(*) FROM events")->fetchColumn();
} catch (PDOException $e) {
    $totalEvents = "Error";
}

// Ensure logins table exists and count today's logins
try {
    $activeToday = $pdo->query("
        SELECT COUNT(DISTINCT user_id) 
        FROM logins 
        WHERE DATE(login_time) = CURDATE()
    ")->fetchColumn();
} catch (PDOException $e) {
    $activeToday = "Error";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Analytics - Gemstone Forum</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background-color: #f4f7f9;
      color: #333;
    }
    header {
      background-color: #1239a3;
      color: white;
      padding: 20px;
      text-align: center;
    }
    .dashboard {
      max-width: 1000px;
      margin: 30px auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      padding: 0 20px;
    }
    .card {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      padding: 30px 20px;
      text-align: center;
      transition: 0.3s ease;
    }
    .card:hover {
      transform: scale(1.02);
    }
    .card h2 {
      font-size: 2.4rem;
      margin: 0;
      color: #00796b;
    }
    .card p {
      margin-top: 12px;
      font-size: 1.2rem;
      color: #555;
    }
    footer {
      text-align: center;
      padding: 15px;
      background-color: #ddd;
      margin-top: 40px;
    }
  </style>
</head>
<body>

<header>
  <h1>Admin Analytics Dashboard</h1>
</header>

<div class="dashboard">
  <div class="card">
    <h2><?= $totalUsers ?></h2>
    <p>Total Registered Users</p>
  </div>
  <div class="card">
  <h2><?= $totalEvents ?></h2>
  <p>Total News & Events</p>
</div>
<div class="card">
  <h2><?= $activeToday ?></h2>
  <p>Active Users Today</p>
</div>

</div>

<footer>
  &copy; <?= date("Y") ?> Gemstone Forum Admin Panel
</footer>

</body>
</html>
