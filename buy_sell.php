 <?php
session_start();
require 'db.php';

// Fetch ads with newest first
$stmt = $pdo->query("SELECT * FROM gem_ads ORDER BY id DESC");
$ads = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Initialize cart session if not already
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

// Handle add to cart
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_cart'])) {
    $adId = (int) $_POST['ad_id'];
    if (!in_array($adId, $_SESSION['cart'])) {
        $_SESSION['cart'][] = $adId;
    }
    header("Location: buy_sell.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crystal - Buying & Selling</title>
    
    <style>
        /* ===== Global Styles ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        /* ===== Main Content Styles ===== */
        main {
            flex: 1;
            padding: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
        }
        
        h2 {
            text-align: center;
            margin-top: 3rem; /* Added margin to push heading down */
            margin-bottom: 2rem;
            color: #0A2463;
            font-size: 2rem;
            position: relative;
            padding-bottom: 0.5rem;
        }
        
        h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: rgb(37, 60, 189);
        }
        
        .ads-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
            padding: 20px;
        }
        
        .ad-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: center;
            border: 1px solid #eee;
        }
        
        .ad-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
        }
        
        .ad-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 1px solid #eee;
        }
        
        .ad-card-content {
            padding: 1.5rem;
        }
        
        .ad-card h3 {
            color: #0A2463;
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
        }
        
        .ad-card p {
            color: #666;
            margin-bottom: 1rem;
            font-size: 0.9rem;
            min-height: 40px;
        }
        
        .ad-card .price {
            color: #047857;
            font-weight: bold;
            font-size: 1.3rem;
            margin: 1rem 0;
            display: block;
        }
        
        .ad-card button {
            background: rgb(52, 76, 210);
            color: white;
            border: none;
            padding: 0.7rem 1.5rem;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
            transition: background 0.3s;
        }
        
        .ad-card button:hover {
            background: rgb(26, 155, 206);
        }
        
        .cart-link {
            display: inline-block;
            margin: 2rem auto 0;
            padding: 0.8rem 2rem;
            background: #0A2463;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            text-align: center;
            transition: background 0.3s;
            font-weight: bold;
        }
        
        .cart-link:hover {
            background: #08214e;
        }
        
        /* ===== Responsive Styles ===== */
        @media (max-width: 768px) {
            .ads-grid {
                grid-template-columns: 1fr;
            }
            
            h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <?php include 'navbar.php'; ?>
    </header>

    <!-- Main Content -->
    <main>
        <h2>Buying & Selling</h2>
        
        <div class="ads-grid">
            <?php foreach ($ads as $ad): ?>
                <div class="ad-card">
                    <?php if (!empty($ad['image_path'])): ?>
                        <img src="<?= htmlspecialchars($ad['image_path']) ?>" alt="<?= htmlspecialchars($ad['title']) ?>">
                    <?php else: ?>
                        <img src="placeholder.jpg" alt="No image">
                    <?php endif; ?>
                    <div class="ad-card-content">
                        <h3><?= htmlspecialchars($ad['title']) ?></h3>
                        <p><?= htmlspecialchars($ad['description']) ?></p>
                        <span class="price">$<?= number_format($ad['price'], 2) ?></span>
                        <form method="POST">
                            <input type="hidden" name="ad_id" value="<?= $ad['id'] ?>">
                            <button type="submit" name="add_to_cart">Add to Cart</button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <a href="cart.php" class="cart-link">🛒 View Cart (<?= count($_SESSION['cart']) ?>)</a>
    </main>

    <!-- Footer Section -->
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>
