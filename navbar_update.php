<!-- navbar.php -->
<style>
    .navbar {
        background-color: #003366;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-family: Arial, sans-serif;
        color: white;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        position: relative;
    }

    .navbar .logo {
        height: 60px;
    }

    .navbar .left-section,
    .navbar .center-section,
    .navbar .right-section {
        display: flex;
        align-items: center;
    }

    .navbar .left-section {
        flex: 1;
    }

    .navbar .center-section {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
    }

    .navbar .nav-links a {
        color: white;
        text-decoration: none;
        margin: 0 12px;
        font-size: 16px;
        transition: color 0.3s ease;
    }

    .navbar .nav-links a:hover {
        color: #b3d1ff;
    }

    .navbar .right-section a {
        color: white;
        margin-left: 15px;
        font-size: 20px;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .navbar .right-section a:hover {
        color: #b3d1ff;
    }
</style>

<!-- Load Font Awesome for icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<div class="navbar">
    <div class="left-section">
        <img src="images\Latest arrival\logo.png" alt="EduForum Logo" class="logo">
    </div>

    <div class="center-section nav-links">
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
</div>