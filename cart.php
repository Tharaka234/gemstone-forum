 <?php
session_start();
require 'db.php';

$cart = $_SESSION['cart'] ?? [];

$ads = [];
if ($cart) {
    $ids = implode(",", array_map('intval', $cart));
    $stmt = $pdo->query("SELECT * FROM gem_ads WHERE id IN ($ids)");
    $ads = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crystal - Your Cart</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Arial', sans-serif;
      line-height: 1.6;
      color: #333;
      background-color: #f9fafb;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    header {
      background: white;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .main-content {
      flex: 1;
      padding: 40px 20px;
      max-width: 1000px;
      margin: 0 auto;
      width: 90%;
    }

    h2 {
      color: #0059b3;
      text-align: center;
      margin-top: 30px; /* Added margin to move it down */
      margin-bottom: 30px;
      position: relative;
      padding-bottom: 10px;
    }

    h2::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 100px;
      height: 3px;
      background: #0059b3;
    }

    .cart-items {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 20px;
      margin-bottom: 40px;
    }

    .cart-item {
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
      transition: transform 0.3s;
    }

    .cart-item:hover {
      transform: translateY(-5px);
    }

    .cart-item img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 8px;
      margin-bottom: 15px;
      border: 1px solid #eee;
    }

    .cart-item h3 {
      color:#0059b3;
      margin-bottom: 5px;
      font-size: 1.1rem;
    }

    .cart-item .price {
      color: #047857;
      font-weight: bold;
      font-size: 1.2rem;
    }

    .delete-btn {
      background: #dc2626;
      color: white;
      border: none;
      padding: 8px 12px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 0.9rem;
      margin-top: 10px;
      transition: background 0.3s;
    }

    .delete-btn:hover {
      background: #b91c1c;
    }

    .empty-cart {
      text-align: center;
      color: #666;
      font-size: 1.1rem;
      margin: 40px 0;
    }

    .ad-form {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
      max-width: 600px;
      margin: 0 auto;
    }

    .ad-form input,
    .ad-form textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 1rem;
    }

    .ad-form textarea {
      min-height: 100px;
      resize: vertical;
    }

    .image-preview {
      max-width: 100%;
      max-height: 200px;
      margin-bottom: 15px;
      display: none;
      border-radius: 6px;
      border: 1px solid #ddd;
    }

    .submit-btn {
      background: #0059b3;
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 6px;
      cursor: pointer;
      font-size: 1rem;
      width: 100%;
      transition: background 0.3s;
    }

    .submit-btn:hover {
      background: #0059b3;
    }

    @media (max-width: 768px) {
      .cart-items {
        grid-template-columns: 1fr;
      }

      .main-content {
        padding: 20px 15px;
      }

      h2 {
        font-size: 1.5rem;
      }
    }
  </style>
</head>
<body>

  <header>
    <?php include 'navbar.php'; ?>
  </header>

  <div class="main-content">
    <h2>Your Cart</h2>

    <?php if (empty($ads)): ?>
      <p class="empty-cart">Your cart is empty</p>
    <?php else: ?>
      <div class="cart-items">
        <?php foreach ($ads as $ad): ?>
          <div class="cart-item">
            <?php if (!empty($ad['image_path'])): ?>
              <img src="<?= htmlspecialchars($ad['image_path']) ?>" alt="<?= htmlspecialchars($ad['title']) ?>">
            <?php else: ?>
              <img src="placeholder.jpg" alt="No image">
            <?php endif; ?>
            <h3><?= htmlspecialchars($ad['title']) ?></h3>
            <p class="price">$<?= number_format($ad['price'], 2) ?></p>

            <form method="POST" action="delete_from_cart.php">
              <input type="hidden" name="id" value="<?= $ad['id'] ?>">
              <button type="submit" class="delete-btn">Remove</button>
            </form>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <h2>Post Your Ad</h2>
    <form class="ad-form" method="POST" action="upload_ad.php" enctype="multipart/form-data" id="adForm">
      <input type="text" name="title" placeholder="Gem Title (e.g. Blue Sapphire)" required>
      <textarea name="description" placeholder="Gem Description" required></textarea>
      <input type="number" step="0.01" name="price" placeholder="Price (e.g. 2500.00)" required>
      <input type="file" name="image" id="imageInput" accept="image/*" required>
      <img id="imagePreview" class="image-preview" src="#" alt="Preview">
      <button type="submit" class="submit-btn" name="submit_ad">Submit Gem Ad</button>
    </form>
  </div>

  <footer>
    <?php include 'footer.php'; ?>
  </footer>

  <script>
    document.getElementById('imageInput').addEventListener('change', function(e) {
      const preview = document.getElementById('imagePreview');
      const file = e.target.files[0];

      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          preview.src = e.target.result;
          preview.style.display = 'block';
        }
        reader.readAsDataURL(file);
      }
    });
  </script>
</body>
</html>
