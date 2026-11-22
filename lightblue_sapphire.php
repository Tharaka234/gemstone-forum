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
      color: rgb(92, 132, 197);
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
  <img src="images/Latest arrival/light_blue.jpg" alt="Light Blue Sapphire" class="banner-img">
  
  <div class="banner-text" style="background-color: rgba(204, 222, 227, 0.7); border-radius: 10px; padding: 50px;">
    <h1>Light Blue Sapphire</h1>
    <p>
      Light blue sapphires gain their popularity because they display gentle hues which span between icy sky blue and silvery pastel colors. The lighter color palette of these sapphires presents sophisticated elegance in place of royal blue sapphires by giving a delicate attractive quality for those interested in refined beauty.
      <br><br>
      Light blue sapphires communicate peaceful emotions through their colors which help people express clarity while maintaining emotional stability, thus making them excellent choices for personal jewelry pieces.
      <br><br>
      Exceptional light blue sapphires are widely prized from Sri Lanka (formerly called Ceylon). These stones exhibit high clarity and brilliant luster along with subdued ethereal hues. These Ceylon sapphires gained centuries-old reverence because royalty and subsequent families wore them and kept them as precious family inheritance.
      <br><br>
      Blue sapphires of various light shades are found in Madagascar, which produces stones that present a crystalline appearance along with cool characteristics. The dual function of Thailand within the gemstone industry allows the country to produce and process sapphires for increased availability worldwide. Australian sapphire stones enter the market but their stones tend to display dark and somewhat inky tones that can be modified into pastel shades during cutting operations.
      <br><br>
      The Mohs scale value of 9 signifies the high durability of light blue sapphires that makes them appropriate for daily wear as earrings, pendants, and rings. Light blue sapphires function as a complementary color scheme that works with contemporary minimalistic and vintage complex designs. People use light blue sapphires either for engagement jewelry or personal talismans to receive endless beauty from their tranquil elegance and inner peace.
    </p>
  </div>
</div>

<!-- Footer -->
<footer>
  <?php include 'footer.php'; ?>
</footer>

</body>
</html>