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
      background-color:rgb(246, 224, 250);
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
      color: rgb(104, 0, 130);
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
  <img src="images/Purple Sapphire.png" alt="Purple Sapphire" class="banner-img">
  
  <div class="banner-text" style="background-color: rgba(199, 172, 235, 0.7); border-radius: 10px; padding: 50px;">
    <h1>Purple Sapphire</h1>
    <p>
      Purple sapphire exists as a precious member of the corundum family because its color ranges from delicate lavender through captivating deep royal violet. A combination of vanadium or chromium trace elements within this gemstone creates its exceptional color which makes it unique among sapphires while granting it an iridescent royal appearance. Proceedings of purple sapphire discovery have increased due to its distinctive appearance and traditional connections with wisdom and spiritual clarity and intuitive insights.
      <br><br>
      The gemological sector of Sri Lanka produces exceptional purple sapphires which naturally contain superb clarity while exhibiting well-balanced vibrant tones despite lacking any treatment. The gem-rich mines of Ratnapura in particular yield some of the most beautiful examples. The mining activities in Madagascar have surged during the last years to become a major force in sapphire production while offering a broad range of purple hues shaped by either red or blue tones. The gemstone mining activities of Myanmar (Burma) together with Tanzania provide these stones but resulting minerals from these areas display unique rarity coupled with intense saturation.
      <br><br>
      On the Mohs scale, purple sapphires match the strength rating of 9 that sapphires possess thus allowing their use in any fine jewelry design. The combination of luxurious color and strength permits purple sapphires to work perfectly in distinctive jewelry pieces, notably for engagement rings and customized statement designs that convey unique personality. The combination of luxury feel together with scarcity along with internal strength sets purple sapphires apart as elegant stones that deliver subdued power and visual luxury.
    </p>
  </div>
</div>

<!-- Footer -->
<footer>
  <?php include 'footer.php'; ?>
</footer>

</body>
</html>