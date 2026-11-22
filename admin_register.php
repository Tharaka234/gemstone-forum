<?php
session_start();
include 'db.php';

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if (empty($username) || empty($password) || empty($confirm)) {
        $error = "All fields are required.";
    } elseif ($password !== $confirm) {
        $error = "Passwords do not match.";
    } else {
        // Check if username already exists
        $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ?");
        $stmt->execute([$username]);
        if ($stmt->fetch()) {
            $error = "Username already taken.";
        } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO users (username, password, is_admin) VALUES (?, ?, 1)");
            if ($stmt->execute([$username, $hashedPassword])) {
                $success = "Admin registered successfully. <a href='admin_login.php'>Login here</a>.";
            } else {
                $error = "Something went wrong. Try again.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Register</title>
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

        .message {
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .error {
            background-color: #ffd6cc;
            color: #cc0000;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
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

    <?php include 'navbar.php'; ?>

    <form method="post">
        <h2>Register as Admin</h2>

        <?php if (!empty($error)): ?>
            <div class="message error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <?php if (!empty($success)): ?>
            <div class="message success"><?php echo $success; ?></div>
        <?php endif; ?>

        <label for="username">Username:</label>
        <input name="username" type="text" required>

        <label for="password">Password:</label>
        <input name="password" type="password" required>

        <label for="confirm">Confirm Password:</label>
        <input name="confirm" type="password" required>

        <button type="submit" name="register">Register as Admin</button>

        <p>Already an admin? <a href="admin_login.php">Login here</a></p>
    </form>

    <?php include 'footer.php'; ?>

</body>
</html>
