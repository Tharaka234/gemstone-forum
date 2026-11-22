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
      background-color:rgb(224, 250, 233);
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
      background-color: rgba(173, 230, 186, 0.7); /* Light blue */
      border-radius: 10px;
      padding: 40px;
      text-align: justify;
    }

    .banner-text h1 {
      font-size: 28px;
      margin-bottom: 20px;
      color: rgb(0, 130, 59);
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
  <img src="images/green_sapphire.webp" alt="Green Sapphire" class="banner-img">
  <div class="banner-text" style="background-color: rgba(181, 235, 181, 0.7); border-radius: 10px; padding: 50px;">
    <h1>Green Sapphire</h1>
    <p>
      Green Sapphire is a rare and sought-after gemstone belonging to the corundum family, distinguishable by its unique green color resulting from the incorporation of trace elements such as iron. Generally, green sapphires are less frequently found compared to more common blue sapphires, thus making them unique and desirable in fine jewelry.
      <br><br>
      Green sapphires are Earth’s palette – from Australian eucalyptus tones to Montana’s minty shades. Their color comes from iron playing with chromium, often creating mesmerizing blue-green teals. What fascinates me is how they change personality under different lights.
      <br><br>
      Sri Lanka, also known as the “Gem Island,” is famous for gemstones, including some of the world’s best sapphires, including green varieties. Notably, these gemstones are extensively extracted from the local mines, particularly at Ratnapura, a mine-rich area.
      <br><br>
      Sri Lankan green sapphires, highly valued for their clarity, natural color and brilliance, have demand in global markets. Their beauty, combined with their symbolism of wisdom, calmness, and trust, makes them a cherished choice for both collectors and gem enthusiasts around the world.
    </p>
  </div>
</div>

<!-- Footer -->
<footer>
  <?php include 'footer.php'; ?>
</footer>

</body>
</html>