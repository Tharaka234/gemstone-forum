<?php
require 'db.php';

// Fetch about info
$stmt = $pdo->query("SELECT * FROM about_info ORDER BY created_at DESC");
$aboutInfos = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>About Us - News & Events</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Poppins', sans-serif;
      padding-top: 70px; /* prevent content from hiding under fixed navbar */
    }

    h1 {
      text-align: center;
      color: #0a2463;
      font-weight: 600;
      margin-bottom: 40px;
    }

    .events-wrapper {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }

    .about-card {
      width: 350px;
      background: #ffffff;
      box-shadow: 0 6px 12px rgba(0,0,0,0.1);
      border-radius: 15px;
      overflow: hidden;
      transition: transform 0.3s ease;
    }

    .about-card:hover {
      transform: translateY(-5px);
    }

    .about-card img,
    .about-card video {
      max-height: 200px;
      width: 100%;
      object-fit: cover;
      display: block;
    }

    .card-header {
      background-color: #0a2463;
      color: #fff;
      font-size: 1.1rem;
      font-weight: 600;
      padding: 12px 16px;
    }

    .card-body {
      padding: 15px;
      font-size: 0.95rem;
      color: #333;
    }

    .card-body p {
      margin-bottom: 15px;
    }

    @media (max-width: 768px) {
      .about-card {
        width: 100%;
      }
    }
  </style>
</head>
<body>

   <!-- Navbar Include -->
  <?php include 'navbar.php'; ?>
<!-- Fixed Navbar End -->

<div class="container py-5">
  <header>
    <h1>News & Events</h1>
  </header>

  <div class="events-wrapper">
    <?php foreach ($aboutInfos as $info): ?>
      <div class="about-card">
        <div class="card-header">
          <?= htmlspecialchars($info['title']) ?>
        </div>
        <div class="card-body">
          <?php if (!empty($info['image_path'])): ?>
            <img src="<?= htmlspecialchars($info['image_path']) ?>" alt="Event Image">
          <?php endif; ?>

          <p><?= nl2br(htmlspecialchars($info['description'])) ?></p>

          <?php if (!empty($info['video_path'])): ?>
            <video controls>
              <source src="<?= htmlspecialchars($info['video_path']) ?>" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          <?php endif; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<!-- Footer -->
<footer class="bg-light text-center py-4 mt-5 border-top">
  <?php include 'footer.php'; ?>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

