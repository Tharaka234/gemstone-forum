 <?php
include 'db.php';
session_start();
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $msg = trim($_POST['message']);

    if ($name && $email && $phone && $msg) {
        $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, phone, message) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $email, $phone, $msg]);
        $message = "✅ Message sent successfully!";
    } else {
        $message = "❌ Please fill in all fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Contact Us</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #eef1f5;
      margin: 0;
      padding-top: 100px; /* Offset for fixed navbar */
    }

    .contact-container {
      max-width: 600px;
      margin: 40px auto;
      background: #fff;
      padding: 30px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      border-radius: 10px;
    }

    .contact-header {
      background: #0059b3;
      color: white;
      padding: 15px;
      text-align: center;
      font-size: 20px;
      font-weight: bold;
      border-radius: 10px 10px 0 0;
      margin: -30px -30px 30px -30px;
    }

    .form-label {
      font-weight: bold;
    }

    .btn-send {
      background-color: #0059b3;
      color: white;
      border: none;
    }

    .btn-send:hover {
      background-color: rgb(121, 204, 207);
    }

    .message-feedback {
      margin-top: 15px;
      font-weight: bold;
      text-align: center;
    }
  </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="contact-container">
  <div class="contact-header">Contact Us</div>

  <form method="POST">
    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Phone</label>
      <input type="text" name="phone" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Message</label>
      <textarea name="message" class="form-control" rows="4" required></textarea>
    </div>

    <button type="submit" class="btn btn-send w-100">SEND MESSAGE</button>

    <?php if ($message): ?>
      <div class="message-feedback"><?= htmlspecialchars($message) ?></div>
    <?php endif; ?>
  </form>
</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
