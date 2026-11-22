 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Pink Sapphire</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color:rgb(235, 186, 224);
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
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
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
      margin-top: 60px; /* Reduced margin to move image up */
      width: 100%;
      overflow: hidden;
      background-color: rgb(236, 213, 231);
      padding: 10px 0;
    }

    .banner-img {
      width: 100%;
      height: 480px; /* Slightly reduced height */
      object-fit: cover;
      border-radius: 5px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .banner-text {
      margin: 20px auto;
      max-width: 900px;
      background-color:rgb(223, 183, 196); /* Light pink background */
      border-radius: 10px;
      padding: 40px;
      text-align: justify;
    }

    .banner-text h1 {
      font-size: 28px;
      margin-bottom: 20px;
      color:rgb(130, 0, 113);
    }

    .banner-text p {
      font-size: 16px;
      line-height: 1.7;
      color: #333;
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
    <img src="images/Pink Sapphire.png" alt="Pink Sapphire" class="banner-img" />

    <div class="banner-text">
      <h1>Pink Sapphire</h1>
      <p>
        Pink sapphire functions as an appealing gemstone with growing popularity because it symbolizes compassionate affection while embodying emotional resilience. The gemstone emerges from the corundum family together with rubies and blue sapphires as a result of tiny chromium traces that provide its pink hue.
        <br /><br />
        Pink colors in sapphires vary between pale and intense hot shades. High-quality pink sapphires that are naturally free of treatment emerge from the gem-producing zone of Sri Lanka which is known as the "Island of Gems." Sri Lankan pink sapphires stand out for their quality because they originate from the nation while also coming from Madagascar, Myanmar, and Tanzania.
        <br /><br />
        Due to their 9 on the Mohs scale, pink sapphires remain durable enough for daily wear and excel as a special stone option instead of diamonds for engagement rings and elegant jewelry. Being popular for their romantic hue, pink sapphires are often chosen for engagement rings and luxury designs.
      </p>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <?php include 'footer.php'; ?>
  </footer>

</body>
</html>

