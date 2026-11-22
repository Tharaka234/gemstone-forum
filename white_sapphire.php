<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blue Sapphire</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      margin: 0;
      background-color: #f9f9f9;
    }

    header {
      background-color: #2c2c54;
      color: white;
      padding: 15px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000;
      box-shadow: 0 2px 8px rgba(0,0,0,0.2);
    }

    header h1 {
      font-size: 24px;
    }

    .nav-icons {
      display: flex;
      align-items: center;
    }

    .nav-icons a {
      color: white;
      margin-left: 20px;
      font-size: 18px;
      text-decoration: none;
      transition: color 0.3s;
    }

    .nav-icons a:hover {
      color: #f0c040;
    }

    .banner {
      margin-top: 60px; /* reduced margin for banner image to go up */
      width: 100%;
      overflow: hidden;
      background-color:rgb(232, 233, 238);
      padding: 10px 0;
    }

    .banner-img {
      width: 100%;
      height: 500px;
      object-fit: cover;
      border-radius: 5px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .banner-text {
      margin: 20px auto;
      max-width: 900px;
      background-color: rgba(201, 207, 197, 0.7); /* Light blue */
      border-radius: 10px;
      padding: 40px;
      text-align: justify;
    }

    .banner-text h1 {
      font-size: 28px;
      margin-bottom: 20px;
      color: rgb(182, 194, 191);
    }

    .banner-text p {
      font-size: 16px;
      line-height: 1.7;
      color: #333;
    }

    .banner-text ul {
      margin-top: 15px;
      padding-left: 20px;
      color: #333;
    }

    .banner-text ul li {
      margin-bottom: 8px;
    }

    @media (max-width: 768px) {
      header h1 {
        font-size: 18px;
      }

      .nav-icons a {
        font-size: 16px;
        margin-left: 10px;
      }

      .banner-img {
        height: 300px;
      }

      .banner-text {
        padding: 20px;
      }
    }
  </style>
</head>
<body>

<!-- Navigation Bar -->
<nav>
  <?php include 'navbar.php'; ?>
</nav>

<!-- Banner Section -->
<div class="banner">
  <img src="images/White Sapphire.png" alt="White Sapphire" class="banner-img">
  
  <div class="banner-text" style="background-color: rgba(255, 255, 255, 0.7); border-radius: 10px; padding: 50px;">
    <h1>White Sapphire</h1>
    <p>
      White sapphire is often considered a solid alternative to diamonds, especially for those leaning toward vintage-style or budget-conscious jewelry. Unlike its colored counterparts, white sapphire is pure corundum with no trace elements, which gives it a clean, icy look. It’s quite durable (Mohs 9), making it suitable for daily wear, though it doesn’t have the same brilliance as a diamond or moissanite due to its lower refractive index. That means less sparkle and fire, but some people actually prefer the softer, more understated appearance — especially in antique-inspired settings.
      <br><br>
      The majority of the white sapphires sold in the market are heat-treated to enhance their clarity and eliminate any slight color underpinnings. The treatment is permanent and satisfactory, but it will give you an idea if you desire something more natural. One of the best Ceylon Sri Lanka white sapphires sources; previously known as Ceylon, there are some high-quality whites. If you decide between moissanite and white sapphire, it is simply a matter of preference: moissanite is flashier but offers a more subtle elegance that may prove more durable over time without exhibiting the pronounced "rainbow" effect moissanite sometimes gives.
    </p>
  </div>
</div>

<!-- Footer -->
<footer>
  <?php include 'footer.php'; ?>
</footer>

</body>
</html>