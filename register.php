<?php
include 'db.php';
session_start();

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Check if username already exists
    $check = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $check->execute([$username]);
    
    if ($check->rowCount() > 0) {
        $error = "Username already taken. Please choose another.";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->execute([$username, $hashedPassword]);
        header('Location: index.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e6f2ff;
            color: #003366;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 51, 102, 0.2);
            width: 100%;
            max-width: 400px;
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
            margin-bottom: 15px;
            font-size: 14px;
        }

        .error {
            color: #cc0000;
            background-color: #ffd6cc;
            padding: 10px;
            border-radius: 5px;
        }

        .success {
            color: #006600;
            background-color: #ccffcc;
            padding: 10px;
            border-radius: 5px;
        }

        .link {
            text-align: center;
            margin-top: 10px;
        }

        .link a {
            color: #0059b3;
            text-decoration: none;
            font-weight: bold;
        }

        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <?php include 'navbar_update.php'; ?>

    <div class="container">
        <form method="post">
            <h2>Register</h2>

            <?php if (!empty($error)): ?>
                <div class="message error"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <label for="username">Username:</label>
            <input name="username" type="text" required>

            <label for="password">Password:</label>
            <input name="password" type="password" required>

            <button type="submit">Register</button>

            <div class="link">
                Already have an account? <a href="index.php">Login here</a>
            </div>
        </form>
    </div>

    <?php include 'footer.php'; ?>

</body>
</html>
