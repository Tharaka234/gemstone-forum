 <?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit;
}

$username = $_SESSION['username'];
$login_time = $_SESSION['login_time'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e6f2ff;
            color: #003366;
            margin: 0;
        }

        .container {
            max-width: 600px;
            margin: 120px auto; /* Increased to move the box further down */
            background: #ffffff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 51, 102, 0.2);
            text-align: center;
        }

        h2 {
            color: #0059b3;
            margin-bottom: 20px;
        }

        .button-group {
            margin: 20px 0;
        }

        .button-group a {
            display: inline-block;
            background-color: #0059b3;
            color: white;
            padding: 10px 20px;
            margin: 0 10px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .button-group a:hover {
            background-color: #004080;
        }

        .info {
            font-size: 18px;
            margin-top: 30px;
            text-align: left;
        }

        .label {
            font-weight: bold;
        }

        nav {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 999;
        }

        footer {
            margin-top: 60px;
        }
    </style>
</head>
<body>
    <nav>
        <?php include 'navbar.php'; ?>
    </nav>

    <div class="container">
        <h2>My Account</h2>

        <div class="button-group">
            <a href="?logout=true">Log Out</a>
        </div>

        <div class="info">
            <p><span class="label">Username:</span> <?= htmlspecialchars($username) ?></p>
            <p><span class="label">Logged In At:</span> <?= htmlspecialchars($login_time) ?></p>
        </div>

        <div class="button-group">
            <a href="addresses.php">View Addresses</a>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


