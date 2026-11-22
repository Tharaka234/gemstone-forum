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
      background-color:rgb(233, 214, 166);
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
      background-color: rgba(230, 204, 173, 0.7); /* Light blue */
      border-radius: 10px;
      padding: 40px;
      text-align: justify;
    }

    .banner-text h1 {
      font-size: 28px;
      margin-bottom: 20px;
      color: rgb(236, 170, 27);
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
  <img src="images/Orange Sapphire.png" alt="Orange Sapphire" class="banner-img">

  <div class="banner-text" style="background-color: rgba(234, 189, 105, 0.7); border-radius: 10px; padding: 50px;">
    <h1>Orange Sapphire</h1>
    <p>
      Among corundum family crystals, orange sapphire stands as one of the rare initially beautiful gems because its color spectrum spans from flame-toned gold to dark orange. A special mineral composition of iron and chromium in the crystal produces its magnificent color.
      <br><br>
      Those who like artistic and unique beauty find the orange sapphire attractive despite lacking the popularity of blue or pink sapphires. Some stones show characteristics that exist near the exclusive padparadscha range which consists of rare orange and pink stone blends.
      <br><br>
      Sri Lankan sapphire production includes some of the best quality orange stones which emerge naturally without treatment while maintaining high level clarity standards and brilliance attributes. Ratnapura stones are particularly valued because they possess both the quality of warmth along with distinctive energy characteristics. Orange sapphires with excellent quality emerge from the mining operations in Madagascar and Tanzania where multiple saturation levels accompany multiple color tones. The global orange sapphire market receives support from Thai industry involvement which includes stock processing and market distribution activities.
      <br><br>
      The durability of orange sapphires reaches Mohs hardness level 9 which makes them daily wear appropriate. Notice the attractive glowing hues of orange sapphires which make them ideal for distinctive pieces such as rings and pendants for unique personal expressions. People who want a gemstone that embodies creative lively spirit and emotional abundance should choose orange sapphires because these symbolic elements match their personality type.
    </p>
  </div>
</div>




<!-- Footer -->
<footer>
  <?php include 'footer.php'; ?>
</footer>

</body>
</html>