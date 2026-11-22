<?php
session_start();

// Redirect if user is not logged in as admin
if (!isset($_SESSION['username']) || !isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
    header('Location: admin_login.php?login_required=1');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gemstone Forum Admin Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
    }

    .navbar {
      background-color: #2d1c4a;
      color: white;
      padding: 12px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 999;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }

    .navbar .logo {
      font-weight: bold;
      font-size: 18px;
    }

    .navbar nav a {
      color: white;
      margin: 0 10px;
      text-decoration: none;
      font-size: 14px;
    }

    .container {
      display: flex;
      margin-top: 60px; /* offset for fixed navbar */
      min-height: 100vh;
    }

    .sidebar {
      width: 200px;
      background-color: #e2e8f0;
      padding: 20px;
    }

    .sidebar h3 {
      margin-bottom: 20px;
      color: #2d1c4a;
    }

    .sidebar a {
      display: block;
      margin: 10px 0;
      text-decoration: none;
      color: #333;
    }

    .main {
      flex: 1;
      padding: 20px;
    }

    .card {
      background-color: white;
      padding: 20px;
      margin-bottom: 30px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
      border-radius: 8px;
    }

    .card h2 {
      margin-bottom: 15px;
      color: #4b0082;
    }

    .button-link {
      display: inline-block;
      padding: 10px 16px;
      background-color: #0059b3;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .button-link:hover {
      background-color: #0059b3;
    }

    footer {
      background-color: #d3d3d3;
      padding: 10px;
      text-align: center;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
      }

      .sidebar {
        width: 100%;
        text-align: center;
      }
    }
  </style>
</head>
<body>
 <nav>
    <?php include 'navbar.php'; ?>
  </nav>

  <div class="container">
    <div class="sidebar">
      <h3><i class="fas fa-user-cog"></i> Admin Panel</h3>
      <a href="admin_dashboard.php"><i class="fas fa-home"></i> Dashboard</a>
      <a href="admin_about.php"><i class="fas fa-info-circle"></i> About Info</a>
      <a href="forum.php"><i class="fas fa-th-list"></i> Forum</a>
      <a href="admin_analytics.php"><i class="fas fa-chart-bar"></i> Analytics</a>
    </div>

    <div class="main">
      <div class="card" style="margin-top: 20px;">
        <h2>Admin - Manage Ads</h2>
        <a href="buy_sell_admin.php" class="button-link">Go to Manage Ads</a>
      </div>

      <div class="card">
        <h2>Admin - News & Events Update</h2>
        <a href="admin_about.php" class="button-link">Go to News & Events</a>
      </div>

      <div class="card">
        <h2>Admin - Homepage Update</h2>
        <a href="save_latest_arrival.php" class="button-link">Go to Homepage</a>
      </div>
    </div>
  </div>

  <footer>
    <?php include 'footer.php'; ?>
  </footer>
</body>
</html>

