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
      background-color:rgb(255, 229, 229);
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
      color: rgb(255, 255, 255);
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
  <img src="images/Ruby.png" alt="Ruby" class="banner-img">
  
  <div class="banner-text" style="background-color: rgba(250, 140, 140, 0.7); border-radius: 10px; padding: 50px;">
    <h1>Ruby</h1>
    <p>
      People have valued ruby for centuries since it emerged as the red corundum variety that symbolizes both love and power and represents passionate emotions. A ruby proudly displays its red color because chromium exists within its structure but the most luxurious rubies show a pigmented blood tone known as "pigeon blood."
      <br><br>
      Myanmar (Burma) produces the gems of most historical significance by extracting exceptional rubies from Mogok where rich colors and high fluorescence exist. The gem wealth of Sri Lanka includes a collection of attractive rubies which demonstrate light transparency with occasional purplish or pinkish hues. Rare gemstones that form naturally in the City of Gems Ratnapura, Sri Lanka are widely acclaimed for their transparent appearance.
      <br><br>
      Mozambique has become a prominent mineral producer that delivers gems with intense color intensity along with minimal flaws thus expanding international ruby supply. Chanthaburi region of Thailand serves as a world center for ruby heat treatment and cutting alongside its role as a ruby mining site. Vietnam and Tanzania also produce rubies of notable quality, often with unique hues and characteristics.
      <br><br>
      Rubies reach a Mohs hardness level of 9 which makes them stand alongside sapphires as highly resistant to damage therefore suitable for everyday jewelry use. Throughout history the legendary nature of rubies was established by their role in representing royalty and performing as warriors besides protecting against evil forces. People seek rubies today as some of the most valuable colored gems because they have maintained their status as highly desired gems since ancient times.
    </p>
  </div>
</div>




<!-- Footer -->
<footer>
  <?php include 'footer.php'; ?>
</footer>

</body>
</html>