<?php
session_start();
include 'db.php';
$stmt = $pdo->query("SELECT * FROM latest_arrivals");
$stmt2 = $pdo->query("SELECT * FROM events ORDER BY id DESC LIMIT 1");
$event = $stmt2->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gem Store - Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    /* Base Reset & Fonts */
    :root {
      --primary-color: rgba(10, 36, 99, 1);
      --header-bg: rgba(14, 12, 53, 0.9);
      --text-light: #ffffff;
      --nav-bg: #003366;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    html, body {
      width: 100%;
      overflow-x: hidden;
      font-family: 'Poppins', -apple-system, Roboto, Helvetica, sans-serif;
      scroll-behavior: smooth;
    }
    
    /* Navbar Styles */
    .navbar {
      background-color: var(--nav-bg);
      padding: 10px 5%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      color: white;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000;
      transition: all 0.3s ease;
    }

    .navbar.scrolled {
      padding: 5px 5%;
      background-color: rgba(0, 51, 102, 0.95);
    }

    .navbar .logo {
      height: 50px;
      transition: all 0.3s ease;
    }

    .navbar.scrolled .logo {
      height: 40px;
    }

    .navbar .nav-links {
      display: flex;
      gap: 25px;
    }

    .navbar .nav-links a {
      color: white;
      text-decoration: none;
      font-size: 16px;
      transition: color 0.3s ease;
      position: relative;
    }

    .navbar .nav-links a:hover {
      color: #b3d1ff;
    }

    .navbar .nav-links a::after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 0;
      height: 2px;
      background: #b3d1ff;
      transition: width 0.3s ease;
    }

    .navbar .nav-links a:hover::after {
      width: 100%;
    }

    .navbar .right-section {
      display: flex;
      gap: 20px;
    }

    .navbar .right-section a {
      color: white;
      font-size: 18px;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .navbar .right-section a:hover {
      color: #b3d1ff;
      transform: scale(1.1);
    }
    
    /* Hero Carousel */
    .hero-section {
      width: 100%;
      height: 100vh;
      min-height: 600px;
      max-height: 800px;
      position: relative;
      overflow: hidden;
      margin-top: 70px; /* Account for fixed navbar */
    }
    
    .hero-image {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0;
      transition: opacity 1.5s ease-in-out;
    }
    
    .hero-image.active {
      opacity: 1;
    }
    
    .hero-overlay {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      z-index: 2;
      width: 90%;
      max-width: 1200px;
    }
    
    .hero-heading {
      font-size: clamp(2.5rem, 5vw, 5rem);
      font-weight: 700;
      letter-spacing: 2px;
      margin-bottom: 20px;
      background: linear-gradient(to right, #e0e0e0, #a8c0ff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
      animation: fadeInUp 1.5s ease-out;
    }
    
    @keyframes fadeInUp {
      0% { opacity: 0; transform: translate(-50%, 20%); }
      100% { opacity: 1; transform: translate(-50%, -50%); }
    }
    
    /* Feature Section */
    .feature-section {
      padding: 80px 5%;
      background: #f9f9f9;
    }
    
    .feature-title {
      font-size: clamp(1.8rem, 3vw, 2.5rem);
      color: var(--primary-color);
      text-align: center;
      margin-bottom: 50px;
      position: relative;
    }
    
    .feature-title::after {
      content: '';
      display: block;
      width: 100px;
      height: 3px;
      background: var(--primary-color);
      margin: 15px auto 0;
    }
    
    .feature-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      max-width: 1400px;
      margin: 0 auto;
    }
    
    .feature-grid a {
      display: block;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      position: relative;
      aspect-ratio: 1/1;
    }
    
    .feature-grid a:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }
    
    .feature-bg {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    
    .feature-grid a:hover .feature-bg {
      transform: scale(1.1);
    }
    
    /* Products Section */
    .products-section {
      padding: 80px 5%;
      background: #fff;
      text-align: center;
    }
    
    .section-title {
      font-size: clamp(1.8rem, 3vw, 2.5rem);
      color: #2c2c2c;
      margin-bottom: 50px;
    }
    
    .swiper {
      width: 100%;
      max-width: 1400px;
      padding: 20px 0 60px;
      margin: 0 auto;
    }
    
    .swiper-slide {
      background: #fff;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }
    
    .swiper-slide:hover {
      transform: translateY(-10px);
    }
    
    .product-image {
      width: 100%;
      height: 200px;
      object-fit: contain;
      margin-bottom: 15px;
    }
    
    .product-name {
      font-size: 18px;
      color: #333;
      font-weight: 500;
    }
    
    .swiper-button-next,
    .swiper-button-prev {
      color: var(--primary-color);
      width: 50px;
      height: 50px;
      background: rgba(255, 255, 255, 0.8);
      border-radius: 50%;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    
    .swiper-button-next::after,
    .swiper-button-prev::after {
      font-size: 24px;
    }
    
    /* Responsive Adjustments */
    @media (max-width: 1200px) {
      .navbar .nav-links {
        gap: 15px;
      }
    }
    
    @media (max-width: 992px) {
      .navbar {
        flex-direction: column;
        padding: 15px 5%;
      }
      
      .navbar .nav-links {
        margin: 15px 0;
        gap: 20px;
      }
      
      .navbar .right-section {
        margin-top: 10px;
      }
      
      .hero-section {
        margin-top: 120px;
        min-height: 500px;
      }
      
      .hero-heading {
        font-size: clamp(2rem, 6vw, 3.5rem);
      }
    }
    
    @media (max-width: 768px) {
      .navbar .nav-links {
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px 20px;
      }
      
      .navbar .nav-links a {
        font-size: 14px;
      }
      
      .feature-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
      }
    }
    
    @media (max-width: 576px) {
      .navbar {
        padding: 10px 5%;
      }
      
      .navbar .logo {
        height: 40px;
      }
      
      .hero-section {
        min-height: 400px;
        margin-top: 150px;
      }
      
      .feature-grid {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 15px;
      }
      
      .swiper-slide {
        padding: 15px;
      }
      
      .product-image {
        height: 150px;
      }
    }
    /* Events/Articles Section */
.events-section {
  padding: 80px 5%;
  background: #f0f8ff;
  text-align: center;
}

.articles-title {
  font-size: 2rem;
  color: #0a2463;
  margin-bottom: 20px;
}

.events-title {
  font-size: 1.5rem;
  color: #0a2463;
  margin-bottom: 30px;
}

.event-image {
  width: 100%;
  max-width: 600px;
  height: auto;
  border-radius: 12px;
  box-shadow: 0 5px 20px rgba(0,0,0,0.1);
  margin-bottom: 25px;
}

.button-wrapper {
  margin-top: 20px;
}

.view-all-btn {
  display: inline-block;
  background-color: #0a2463;
  color: white;
  padding: 12px 25px;
  border-radius: 25px;
  text-decoration: none;
  font-weight: 500;
  transition: background 0.3s ease;
}

.view-all-btn:hover {
  background-color: #003366;
}

/* Location Section */
.location-section {
  padding: 80px 5%;
  background: #ffffff;
  text-align: center;
}

.location-title {
  font-size: 2rem;
  color: #0a2463;
  margin-bottom: 15px;
}

.location-description {
  font-size: 1rem;
  color: #444;
  margin-bottom: 25px;
}

.location-image {
  width: 100%;
  max-width: 600px;
  height: auto;
  border-radius: 12px;
  box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}
</style>
</head>
<body>
   <!-- Navbar -->
  <nav class="navbar">
    <img src="images/Latest arrival/logo.png" alt="Crystalisles Logo" class="logo">
    <div class="nav-links">
      <a href="home.php">Home</a>
      <a href="category.php">Category</a>
      <a href="account.php">My Profile</a>
      <a href="forum.php">Forum</a>
      <a href="contact_us.php">Contact Us</a>
    </div>
    <div class="right-section">
      <a href="search_results.php"><i class="fas fa-search"></i></a>
      <a href="index.php"><i class="fas fa-user"></i></a>
      <a href="buy_sell.php"><i class="fas fa-shopping-cart"></i></a>
    </div>
  </nav>

 <!-- Hero Carousel -->
  <section class="hero-section">
    <div class="hero-overlay">
      <h1 class="hero-heading">CRYSTALISLES</h1>
    </div>
    <img src="images/Hero Section/Gemlist(1).jpg" alt="Blue Sapphire Collection" class="hero-image active">
    <img src="images/Hero Section/Gemlist(2).jpg" alt="Ruby Collection" class="hero-image">
    <img src="images/Hero Section/Gemlist(3).jpg" alt="Emerald Collection" class="hero-image">
    <img src="images/Hero Section/Gemlist(4).jpg" alt="Diamond Collection" class="hero-image">
    <img src="images/Hero Section/Gemlist(5).jpg" alt="Sapphire Collection" class="hero-image">
  </section>
  <!-- Gem Collection Grid -->
  <section class="feature-section">
    <h2 class="feature-title">FROM SRI LANKA TO THE WORLD!</h2>
    <div class="feature-grid">
      <a href="blue_sapphire.php?gem=1">
        <img src="images/Gem (1).png" alt="Blue Sapphire" class="feature-bg">
      </a>
      <a href="green_sapphire.php?gem=2">
        <img src="images/Gem (2).png" alt="Green Sapphire" class="feature-bg">
      </a>
      <a href="yellow_sapphire.php?gem=3">
        <img src="images/Gem (3).png" alt="Yellow Sapphire" class="feature-bg">
      </a>
      <a href="white_sapphire.php?gem=4">
        <img src="images/Gem(4).jpg" alt="White Sapphire" class="feature-bg">
      </a>
      <a href="pearl.php?gem=5">
        <img src="images/Gem (5).png" alt="Pearl" class="feature-bg">
      </a>
      <a href="pink_sapphire.php?gem=6">
        <img src="images/Gem (6).png" alt="Pink Sapphire" class="feature-bg">
      </a>
      <a href="cat's_eye.php?gem=7">
        <img src="images/Gem(7).png" alt="Cat's Eye" class="feature-bg">
      </a>
      <a href="diamond.php?gem=8">
        <img src="images/Gem (8).png" alt="Diamond" class="feature-bg">
      </a>
      <a href="ruby.php?gem=9">
        <img src="images/Gem (9).png" alt="Ruby" class="feature-bg">
      </a>
      <a href="orange_sapphire.php?gem=10">
        <img src="images/Gem(10).png" alt="Orange Sapphire" class="feature-bg">
      </a>
      <a href="lightblue_sapphire.php?gem=11">
        <img src="images/Gem (11).png" alt="Light Blue Sapphire" class="feature-bg">
      </a>
      <a href="purple_sapphire.php?gem=12">
        <img src="images/Gem (12).png" alt="Purple Sapphire" class="feature-bg">
      </a>
    </div>
  </section>

  <!-- Latest Arrivals (Swiper Carousel) -->
  <section class="products-section">
     <h2 class="section-title">LATEST ARRIVALS</h2>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <?php while ($row = $stmt->fetch()): ?>
          <div class="swiper-slide">
            <img src="data:image/jpeg;base64,<?= base64_encode($row['gem_image']) ?>" alt="<?= htmlspecialchars($row['gem_name']) ?>" class="product-image">
            <p class="product-name"><?= htmlspecialchars($row['gem_name']) ?></p>
          </div>
        <?php endwhile; ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </section>

 <!-- Articles/News (Events) Section -->
<section class="events-section">
  <div class="events-container">
    <h2 class="articles-title">Articles/News</h2>
    <h3 class="events-title"><?= htmlspecialchars($event['title']) ?></h3>
    <img src="data:image/jpeg;base64,<?= base64_encode($event['event_image']) ?>" alt="Event Image" class="event-image" />
    <div class="button-wrapper">
      <a href="about_user.php" class="view-all-btn">VIEW ALL</a>
    </div>
  </div>
</section>


  <!-- Location Section -->
  <section class="location-section">
    <div class="location-container">
      <h2 class="location-title">Our Location</h2>
      <p class="location-description">
        Our Gems Location in Ratnapura.....
      </p>
      <a href="https://g.co/kgs/Sxa5wYf" target="_blank">
        <img src="images/Latest arrival/Map.png" alt="Map Location" class="location-image" />
      </a>
     </div>
  </section>

  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });

    // Hero Carousel Animation
    const heroImages = document.querySelectorAll('.hero-image');
    let currentImage = 0;
    
    function rotateHeroImages() {
      heroImages[currentImage].classList.remove('active');
      currentImage = (currentImage + 1) % heroImages.length;
      heroImages[currentImage].classList.add('active');
    }
    
    // Initialize auto-rotation every 4 seconds
    setInterval(rotateHeroImages, 4000);
    
    // Initialize Swiper
    const swiper = new Swiper('.mySwiper', {
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      slidesPerView: 1,
      spaceBetween: 20,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        640: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
        1400: { slidesPerView: 4 }
      }
    });
  </script>
   <footer>
    <?php include 'footer.php'; ?>
  </footer>
</body>
</body>
</html>
