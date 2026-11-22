<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>News & Events</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9f9f9;
      color: #333;
    }

    header {
      background-color: rgb(146, 200, 193);
      color: white;
      padding: 20px 0;
      text-align: center;
    }

    header h1 {
      margin: 0;
      font-size: 2.5rem;
    }

    .container {
      max-width: 1000px;
      margin: 30px auto;
      padding: 0 20px;
    }

    .news-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
    }

    .news-card {
      background: white;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      overflow: hidden;
      transition: transform 0.2s;
    }

    .news-card:hover {
      transform: scale(1.02);
    }

    .news-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      cursor: pointer;
    }

    .news-content {
      padding: 15px;
    }

    .news-content h3 {
      margin: 0 0 10px;
      color: #00796b;
    }

    .news-content p {
      font-size: 0.95rem;
      line-height: 1.5;
    }
  </style>
</head>
<body>

  <?php include 'navbar.php'; ?>

  <header>
    <h1> News & Events</h1>
  </header>

  <div class="container">
    <section class="news-grid">
      
      <div class="news-card">
        <a href="event_gem_expo_2025.php">
          <img src="images/Latest arrival/facets-brochure.jpg" alt="Gem Expo 2025">
        </a>
        <div class="news-content">
          <h3>FACETS Sri Lanka 2025</h3>
        <ul>
            <li><strong>Dates:</strong> January 4–6</li>
            <li><strong>Venue:</strong> Cinnamon Grand Hotel, Colombo</li>
            <li><strong>Organized by:</strong> National Gem and Jewellery Authority (NGJA)</li>
            <li><strong>Highlights:</strong>
        <ul>
      <li>Wide array of precious stones</li>
      <li>Industry specialists</li>
      <li>VIP events</li>
    </ul>
  </li>
  <li><strong>Purpose:</strong>
    <ul>
      <li>Showcase the beauty and brilliance of Sri Lankan gemstones</li>
      <li>Highlight the artistry of local jewelry</li>
      <li>Create business opportunities with traders, exporters, and industry professionals worldwide</li>
    </ul>
  </li>
</ul>

        </div>
      </div>

      <div class="news-card">
        <a href="gem_cutting.php">
          <img src="images/Latest arrival/Gem_cutting.jpg" alt="Gem Workshop">
        </a>
        <div class="news-content">
          <h3>Gem Cutting Courses</h3>
         <ul>
       <li>Basic Gemmology</li>
    <li>Gemmology</li>
    <li>Geuda Heat Treatment</li>
    <li>Gem Cutting & Polishing</li>
    <li>Gem Colour Grading and Marketing</li>
    <li>Gem Carving and Bead Jewellery Manufacturing</li>
    <li>Diploma in Gemmology</li>
    <li>Jewellery Designing</li>
    <li>Computer-Assisted Jewellery Designing</li>
    <li>Fashionable Jewellery Manufacturing</li>
    <li>Jewellery Manufacturing</li>
    <li>Stone Binding for Jewellery</li>
    <li>Casting & Electro Plating</li>
    <li>Diploma in Jewellery Manufacturing & Designing Technology</li>
</ul>
<p><strong>Application & Details:</strong> <a href="http://www.gjrti.gov.lk" target="_blank">http://www.gjrti.gov.lk</a></p>
        </div>
      </div>

      <div class="news-card">
        <a href="event_market_trends.php">
          <img src="images/Latest arrival/Flayer_-_Gem_Sri_Lanka_2025.jpg" alt="Gem Trends Talk">
        </a>
        <div class="news-content">
          <h3>Gem Sri Lanka 2025 Exhibition</h3>
         <ul>
  <li><strong>Dates:</strong> From 08 to 10 January 2025</li>
  <li><strong>Venue:</strong> Cinnamon, Bentota, Sri Lanka</li>
  <li>
    <strong>Event Overview:</strong> The Second Edition of the “Gem Sri Lanka 2025” Exhibition will be attended by industry professionals, international buyers, and sellers.
  </li>
  <li>
    <strong>Organizers:</strong> The Chinafort Gem and Jewellery Traders Association (CGJTA), supported by the National Gem and Jewellery Authority (NGJA) and the Export Development Board (EDB).
  </li>
  <li>
    <strong>Purpose:</strong> Highlights the rich legacy of Sri Lanka’s gem industry and provides a platform for professionals to connect and explore the world of gemstones.
  </li>
  <li>
    <strong>Exhibition Focus:</strong> Exhibitors showcase expertise in mining, cutting, polishing, and heat treatment.
  </li>
  <li>
    <strong>More Information:</strong> 
    <a href="https://drive.google.com/open?id=1G4TLb11VSh8XvpxhFZxfwOOIQx3mukXQ&usp=drive_fs" target="_blank">
      View promotional materials
    </a>
  </li>
</ul>

        </div>
      </div>

    </section>
  </div>

  <footer>
    <?php include 'footer.php'; ?>
  </footer>

</body>
</html>