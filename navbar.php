<!-- navbar.php -->

<style>
:root {
  --nav-bg: #003366;
}

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

.navbar .logo {
  height: 50px;
  transition: all 0.3s ease;
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

/* Responsive navbar */
@media (max-width: 992px) {
  .navbar {
    flex-direction: column;
    padding: 15px 5%;
  }

  .navbar .nav-links {
    margin: 10px 0;
    flex-wrap: wrap;
    justify-content: center;
    gap: 15px 20px;
  }

  .navbar .right-section {
    margin-top: 10px;
  }
}

 
</style>
<!-- Navbar HTML -->
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


