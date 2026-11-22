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
      background-color: #e0f7fa;
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
      background-color: rgba(173, 216, 230, 0.7); /* Light blue */
      border-radius: 10px;
      padding: 40px;
      text-align: justify;
    }

    .banner-text h1 {
      font-size: 28px;
      margin-bottom: 20px;
      color: rgb(0, 50, 130);
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
  <img src="images/Blue Sapphire123.png" alt="Blue Sapphire" class="banner-img" />
  <div class="banner-text">
    <h1>Blue Sapphire</h1>
    <p>
      Blue sapphire is a precious gemstone, a variety of the mineral corundum, consisting of aluminium oxide (α-Al2O3) with trace amounts of elements such as iron, titanium, cobalt, lead, chromium, vanadium, magnesium, boron, and silicon. It is typically blue, but natural "fancy" sapphires also occur in yellow, purple, orange, and green colors; "parti sapphires" show two or more colors.
      <br><br>
      Blue sapphires are evaluated based upon the purity of their blue hue. Violet and green are the most common secondary hues found in blue sapphires. The highest prices are paid for gems that are pure blue and of vivid saturation. The finest 'Kashmir Sapphires' exhibit velvety blue with subtle violet undertones due to titanium and iron traces. Ceylon (Sri Lankan) sapphires are prized for their lighter, brighter blue, while Madagascar produces vibrant mid-blue stones.
      <br><br>
      The color intensity of a blue sapphire is dependent on the presence of titanium and iron in the base mineral. The most sought-after color is the cornflower blue sapphire. The legendary Blue Sapphire, a variety of corundum, is revered for its celestial cornflower blue hue.
      <br><br>
      The moment you hold a fine Ceylon blue sapphire to the light, you understand why ancient traders risked lives for these stones. That velvety cornflower blue – caused by titanium and iron traces in corundum – seems to glow from within. Kashmir sapphires (now nearly extinct) show a sleepier, more mysterious blue, while Madagascan stones burst with electric vibrancy.
      <br><br>
      Gemologists debate whether heat treatment diminishes spiritual value, especially for Vedic astrology use. What’s your take – should all sapphires disclose treatments?
      <br><br>
      Walking through Ratnapura’s markets, you’ll hear dealers whisper ‘Pukhraj’ with reverence. These golden sapphires carry Jupiter’s blessing in Vedic tradition – but beware glass-filled fakes sold to tourists! Natural yellows (colored by iron) are increasingly rare, with most commercial stones baked in ovens to deepen their hue.
      <br><br>
      An old Sri Lankan cutter once told me untreated yellows have a ‘buttery’ glow no lab can replicate. Have you ever compared heated vs. natural side-by-side?
    </p>
    <ul>
      <li>"Astrology vs. science: Does untreated Pukhraj really work?"</li>
      <li>"Share your experience with Bangkok-treated yellows"</li>
    </ul>
  </div>
</div>

<!-- Footer -->
<footer>
  <?php include 'footer.php'; ?>
</footer>

</body>
</html>
