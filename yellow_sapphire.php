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
      background-color:rgb(236, 234, 194);
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
      background-color: rgba(218, 226, 127, 0.7); /* Light blue */
      border-radius: 10px;
      padding: 40px;
      text-align: justify;
    }

    .banner-text h1 {
      font-size: 28px;
      margin-bottom: 20px;
      color: rgb(208, 227, 0);
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
  <img src="images/Yellow Sapphire.png" alt="Yellow Sapphire" class="banner-img">
  
  <div class="banner-text" style="background-color: rgba(236, 236, 117, 0.7); border-radius: 10px; padding: 50px;">
    <h1>Yellow Sapphire</h1>
    <p>
      Yellow sapphires are bright and vibrant gemstones that have a gold tone and belong to the corundum family, including blue sapphire and green sapphire. Their color is due to tiny amounts of iron in the crystal structure. The ways of making these gems have become quite popular in jewelry like rings, earrings, and pendants because they are very hard, second only to diamonds on the Mohs hardness scale.
      <br><br>
      Yellow sapphires originate from different places, including Sri Lanka, Madagascar, Thailand, India, Tanzania, Australia, and Kenya. Since these gemstones are often associated with prosperity, wisdom, and good fortune, many people choose them to wear not only for beauty, but also meaning in their jewelry. Color strength, purity, cut, carat weight, and origin impact the quality and price of a yellow sapphire. Among them, the best yellow sapphires come from Kenya and Sri Lanka, and they can be less expensive than yellow diamonds.
      <br><br>
      <strong>Yellow sapphires in Sri Lanka:</strong><br>
      Yellow sapphires are referred to in Sri Lanka as "Pukhraj" and fall under the category of precious gemstones. Ceylon, now known as Sri Lanka, is one of the best producers in the world of superior-quality yellow sapphires. Such stones are processed usually in gem-producing regions, which Ratnapura is often dubbed the "City of Gems."
      <br><br>
      Sri Lankan yellow sapphires are famous for their beautiful golden to lemon-yellow colors and high clarity and brilliance. Besides being treasured in jewelry, they also play an important role in astrology, especially within the Vedic system where they are linked to Jupiter and thought to bestow wisdom, wealth, and good fortune on individuals.
    </p>
  </div>
</div>

<!-- Footer -->
<footer>
  <?php include 'footer.php'; ?>
</footer>

</body>
</html>
