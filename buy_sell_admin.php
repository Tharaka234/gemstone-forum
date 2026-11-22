<?php
session_start();
require 'db.php';

// Check if user is an admin (you can customize this logic)
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
    die("Access denied. Admins only.");
}

// Handle delete from database
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_ad'])) {
    $deleteId = (int) $_POST['ad_id'];

    // Optionally delete image file if needed
    $stmt = $pdo->prepare("SELECT image_path FROM gem_ads WHERE id = ?");
    $stmt->execute([$deleteId]);
    $ad = $stmt->fetch();
    if ($ad && !empty($ad['image_path']) && file_exists($ad['image_path'])) {
        unlink($ad['image_path']); // Delete image from server
    }

    // Delete the ad from database
    $stmt = $pdo->prepare("DELETE FROM gem_ads WHERE id = ?");
    $stmt->execute([$deleteId]);

    header("Location: buy_sell_admin.php");
    exit;
}

// Fetch all ads
$stmt = $pdo->query("SELECT * FROM gem_ads ORDER BY id DESC");
$ads = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Crystal Admin - Manage Listings</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f3f4f6;
      margin: 0;
      padding: 0;
    }

    main {
      max-width: 1200px;
      margin: 0 auto;
      padding: 40px 20px;
    }

    h2 {
      text-align: center;
      color: #1f2937;
      margin-bottom: 30px;
    }

    .ads-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
      gap: 20px;
    }

    .ad-card {
      background: white;
      padding: 16px;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      text-align: center;
      position: relative;
    }

    .ad-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 8px;
      border: 1px solid #ddd;
    }

    .ad-card h3 {
      margin-top: 12px;
      color: #111827;
    }

    .ad-card .price {
      color: #10b981;
      font-weight: bold;
      margin: 8px 0;
    }

    .delete-btn {
      background: none;
      border: none;
      color: #ef4444;
      cursor: pointer;
      font-size: 1.2rem;
      position: absolute;
      top: 10px;
      right: 10px;
      transition: color 0.3s;
    }

    .delete-btn:hover {
      color: #b91c1c;
    }
  </style>
</head>
<body>
  <main>
    <h2>Admin - Manage Ads</h2>

    <div class="ads-grid">
      <?php foreach ($ads as $ad): ?>
        <div class="ad-card">
          <?php if (!empty($ad['image_path'])): ?>
            <img src="<?= htmlspecialchars($ad['image_path']) ?>" alt="<?= htmlspecialchars($ad['title']) ?>">
          <?php else: ?>
            <img src="placeholder.jpg" alt="No image">
          <?php endif; ?>

          <h3><?= htmlspecialchars($ad['title']) ?></h3>
          <p class="price">$<?= number_format($ad['price'], 2) ?></p>

          <!-- Delete ad form -->
          <form method="POST" onsubmit="return confirm('Are you sure you want to delete this ad?');">
            <input type="hidden" name="ad_id" value="<?= $ad['id'] ?>">
            <button type="submit" name="delete_ad" class="delete-btn" title="Delete Ad">🗑️</button>
          </form>
        </div>
      <?php endforeach; ?>
    </div>
  </main>
</body>
</html>
