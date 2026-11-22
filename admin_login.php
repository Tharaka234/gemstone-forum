<?php
session_start();
include 'db.php';

$error = '';

// Redirect if already logged in as admin
if (isset($_SESSION['username'], $_SESSION['is_admin']) && $_SESSION['is_admin']) {
    header('Location: admin_dashboard.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['admin_login'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Fetch user with admin check
    $stmt = $pdo->prepare("SELECT id, username, password, is_admin FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && $user['is_admin'] && password_verify($password, $user['password'])) {
        // Set admin session variables
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['is_admin'] = true;
        $_SESSION['login_time'] = date("Y-m-d H:i:s");

        // Record login time
        $logStmt = $pdo->prepare("INSERT INTO logins (user_id) VALUES (?)");
        $logStmt->execute([$user['id']]);

        header('Location: admin_dashboard.php');
        exit;
    } else {
        $error = "Invalid admin credentials.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            color: #003366;
            margin: 0;
            padding: 0;
        }

        form {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 51, 102, 0.2);
            width: 100%;
            max-width: 400px;
            margin: 80px auto;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #990000;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #990000;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #660000;
        }

        .error {
            background-color: #ffd6cc;
            color: #cc0000;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            text-align: center;
        }

        p {
            margin-top: 15px;
            text-align: center;
        }

        a {
            color: #990000;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php include 'navbar_update.php'; ?>

<form method="post">
    <h2>Admin Login</h2>

    <?php if (!empty($error)): ?>
        <div class="error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <label for="username">Admin Username:</label>
    <input name="username" type="text" required>

    <label for="password">Password:</label>
    <input name="password" type="password" required>

    <button type="submit" name="admin_login">Login as Admin</button>

    <p><a href="admin_register.php">Register as an Admin</a></p>
</form>

<?php include 'footer.php'; ?>

</body>
</html>