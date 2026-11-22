<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>💎 Gemstone Types</title>
  <style>
    html, body {
      height: 100%;
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f4f4;
      color: #333;
      display: flex;
      flex-direction: column;
    }

    header {
      background-color: rgb(25, 83, 185);
      color: white;
      padding: 20px;
      text-align: center;
    }

    .container {
      max-width: 1100px;
      margin: 30px auto;
      padding: 0 20px;
      flex: 1; /* Pushes footer down */
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .card {
      background: white;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      text-align: center;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card img {
      width: 100px;
      height: 100px;
      object-fit: contain;
      margin-bottom: 15px;
    }

    .card h3 {
      color: #5b21b6;
      margin-bottom: 10px;
    }

    .back-link {
      display: block;
      text-align: center;
      margin-top: 40px;
      text-decoration: none;
      color: #5b21b6;
      font-weight: bold;
    }

    .back-link:hover {
      text-decoration: underline;
    }

    footer {
      background-color: #e5e7eb;
      padding: 15px;
      text-align: center;
    }
  </style>
</head>
<body>

  <header>
    <h1>💎 Gemstone Types</h1>
    <p>Discover different types of gemstones and their unique qualities</p>
  </header>

  <div class="container">
    <div class="grid">
      <a href="blue_sapphire.php" class="block hover:no-underline">
        <div class="card">
          <img src="images/Gem (1).png" alt="Blue Sapphire">
          <h3>Blue Sapphire</h3>
          <p>Known for its deep blue color, it symbolizes wisdom and royalty.</p>
        </div>
      </a>

      <a href="ruby.php" class="block hover:no-underline">
        <div class="card">
          <img src="images/ruby.png" alt="Ruby">
          <h3>Ruby</h3>
          <p>The stone of passion and protection, recognized by its red glow.</p>
        </div>
      </a>

      <a href="green_sapphire.php" class="block hover:no-underline">
        <div class="card">
          <img src="images/green_sapphire.webp" alt="Green Sapphire">
          <h3>Green Sapphire</h3>
          <p>Green sapphires symbolize tranquility and trust, often prized for their unique earthy hues.</p>
        </div>
      </a>

      <a href="lightblue_sapphire.php" class="block hover:no-underline">
        <div class="card">
          <img src="images/Latest arrival/light_blue.jpg" alt="Light Blue Sapphire">
          <h3>Light Blue Sapphire</h3>
          <p>Light Blue Sapphire is valued for its soft hue and symbolizes wisdom, clarity, and serenity.</p>
        </div>
      </a>

      <a href="orange_sapphire.php" class="block hover:no-underline">
        <div class="card">
          <img src="images/Orange Sapphire.png" alt="Orange Sapphire">
          <h3>Orange Sapphire</h3>
          <p>Orange sapphires are vibrant stones symbolizing creativity, joy, and enthusiasm.</p>
        </div>
      </a>

      <a href="pearl.php" class="block hover:no-underline">
        <div class="card">
          <img src="images/Pearl.png" alt="Pearl">
          <h3>Pearl</h3>
          <p>Pearls are organic gemstones symbolizing purity, wisdom, and serenity, formed inside mollusks.</p>
        </div>
      </a>

      <a href="pink_sapphire.php" class="block hover:no-underline">
        <div class="card">
          <img src="images/Pink Sapphire.png" alt="Pink Sapphire">
          <h3>Pink Sapphire</h3>
          <p>Pink sapphires represent love, compassion, and elegance, admired for their delicate rosy hue.</p>
        </div>
      </a>

      <a href="purple_sapphire.php" class="block hover:no-underline">
        <div class="card">
          <img src="images/Purple Sapphire.png" alt="Purple Sapphire">
          <h3>Purple Sapphire</h3>
          <p>Purple sapphires symbolize wisdom and spiritual insight, known for their royal and mystical hue.</p>
        </div>
      </a>

      <a href="white_sapphire.php" class="block hover:no-underline">
        <div class="card">
          <img src="images/White Sapphire.png" alt="White Sapphire">
          <h3>White Sapphire</h3>
          <p>White sapphires are valued for their brilliance and clarity, symbolizing purity and wisdom.</p>
        </div>
      </a>

      <a href="yellow_sapphire.php" class="block hover:no-underline">
        <div class="card">
          <img src="images/Yellow Sapphire.png" alt="Yellow Sapphire">
          <h3>Yellow Sapphire</h3>
          <p>Yellow sapphires are associated with wisdom, prosperity, and good fortune, admired for their bright golden hue.</p>
        </div>
      </a>
    </div>
  </div>

  <footer>
    <?php include 'footer.php'; ?>
  </footer>

</body>
</html>
