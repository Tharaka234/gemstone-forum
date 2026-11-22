<?php
session_start();
include 'db.php';

$error = '';

// Redirect to account if already logged in
if (isset($_SESSION['username']) && isset($_SESSION['user_id'])) {
    header('Location: account.php');
    exit;
}

// Handle login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch user
    $stmt = $pdo->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['login_time'] = date("Y-m-d H:i:s");

        header('Location: account.php');
        exit;
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e6f2ff;
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
            color: #003366;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 20px;
            border: 1px solid #b3d1ff;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #0059b3;
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
            background-color: #004080;
        }

        .error {
            background-color: #ffd6cc;
            color: #cc0000;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            text-align: center;
        }

        .login-alert {
            background-color: #fff3cd;
            color: #856404;
            padding: 12px 20px;
            border: 1px solid #ffeeba;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 15px;
            text-align: center;
            box-shadow: 0 2px 6px rgba(255, 204, 0, 0.2);
        }

        p {
            margin-top: 15px;
            text-align: center;
        }

        a {
            color: #0059b3;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <?php include 'navbar_update.php'; ?>

    <form method="post">
        <?php if (isset($_GET['login_required']) && $_GET['login_required'] == 1): ?>
            <div class="login-alert">
                ⚠️ You must log in to access that page.
            </div>
        <?php endif; ?>

        <h2>Login</h2>

        <?php if (!empty($error)): ?>
            <div class="error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <label for="username">Username:</label>
        <input name="username" type="text" required>

        <label for="password">Password:</label>
        <input name="password" type="password" required>

        <button type="submit" name="login">Login</button>

        <p>
            Don't have an account? 
            <a href="register.php">Create Account</a>
        </p>
        
    </form>
   


    <?php include 'footer.php'; ?>

</body>
</html>
