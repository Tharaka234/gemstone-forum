<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gemstone Community</title>

  <!-- Font Awesome for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f3f4f6;
      color: #333;
    }

    .nav-header {
      background-color: #198AA1;
      padding: 20px 0;
      color: white;
      text-align: center;
      font-size: 28px;
      font-weight: bold;
      letter-spacing: 1px;
    }

    .hero-section {
      text-align: center;
      padding: 60px 20px 40px;
      background-color: #e0f7fa;
    }
    .btn-primary {
    display: inline-block;
    padding: 10px 20px;
    background-color: #0a2463;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background 0.3s;
    }

    .hero-title {
      font-size: 42px;
      margin-bottom: 10px;
      color: #00796b;
    }

    .hero-subtitle {
      font-size: 20px;
      color: #555;
    }

    .categories-section {
      padding: 40px 20px;
    }

    .categories-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 25px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .category-card {
      background-color: white;
      padding: 25px 20px;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
      transition: transform 0.3s ease;
      text-align: center;
    }

    .category-card:hover {
      transform: translateY(-5px);
    }

    .category-icon {
      font-size: 40px;
      color: #198AA1;
      margin-bottom: 15px;
    }

    .category-title {
      font-size: 22px;
      color: #198AA1;
      margin-bottom: 10px;
      font-weight: bold;
    }

    .category-description {
      font-size: 16px;
      color: #555;
      margin-bottom: 15px;
    }

    .btn {
      padding: 8px 16px;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
    }

    .btn-add {
      background-color: #198AA1;
      color: white;
      margin-right: 10px;
    }

    .btn-delete {
      background-color: #e74c3c;
      color: white;
    }
  </style>
</head>
<body>

<?php include 'navbar.php'; ?>
  
<section class="hero-section">
    <h1 class="hero-title">Browse Categories</h1>
    <p class="hero-subtitle">Look for your gemstone community.</p>
  </section>

  <section class="categories-section">
    <div class="categories-grid">

      <!-- Gem Identification -->
      <section class="category-section">
      <div class="category-card">
        <div class="category-icon"><i class="fas fa-gem"></i></div>
        <h3 class="category-title">Gem Identification</h3>
        <p class="category-description">Identify unknown gemstones by sharing a photo or a description of it.</p>
        <a href="gem_identification.php" class="btn btn-primary"></a>
        <!-- <button class="btn btn-add">Add Thread</button>
        <button class="btn btn-delete">Delete</button> -->
      </div>
      </section> 



      
      <!-- Market Trends -->
      <section class="category-section">
      <div class="category-card">
        <div class="category-icon"><i class="fas fa-chart-line"></i></div>
        <h3 class="category-title">Market Trends</h3>
        <p class="category-description">Discuss market prices and trends.</p>
        <a href="gem_market.php" class="btn btn-primary"></a>
        <!-- <button class="btn btn-add">Add Thread</button>
        <button class="btn btn-delete">Delete</button> -->
      </div>
      </section> 


      <!-- Gemology -->
      <section class="category-section">
      <div class="category-card">
        <div class="category-icon"><i class="fas fa-flask"></i></div>
        <h3 class="category-title">Gemology</h3>
        <p class="category-description">Scientific discussion and research.</p>
        <a href="gemology.php" class="btn btn-primary"></a>
        <!-- <button class="btn btn-add">Add Thread</button>
        <button class="btn btn-delete">Delete</button> -->
      </div>
      </section>

      <!-- Buying & Selling -->
      
        <div class="category-card">
        <div class="category-icon"><i class="fas fa-handshake"></i></div>
        <h3 class="category-title">Buying & Selling</h3>
        <p class="category-description">Trade and Exchange gemstones</p>
        <a href="cart.php" class="btn btn-primary"></a>
        <!-- <button class="btn btn-add">Add Thread</button>
        <button class="btn btn-delete">Delete</button> -->
      </div>

    </div>
  </section>

  <footer>
    <!-- &copy; 2025 Gemstone Community. All rights reserved. -->
    <?php include 'footer.php'; ?>
  </footer>

</body>
</html>
