<?php
session_start();
require 'db.php';

// For testing without login, you can temporarily set:
if (!isset($_SESSION['user_id'])) {
    $_SESSION['user_id'] = 1; // Simulated user ID
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $target = 'uploads/' . basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    $stmt = $pdo->prepare("INSERT INTO gem_identification (user_id, image_path, description) VALUES (?, ?, ?)");
    $stmt->execute([$_SESSION['user_id'], $target, $description]);
    header('Location: gem_identification.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Gem Identification</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f3f4f6;
      margin: 0;
      padding: 20px;
    }

    h2, h3 {
      color: #0059b3;
    }

    .upload-container {
      background: white;
      padding: 20px;
      border-radius: 12px;
      margin-bottom: 30px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    .upload-container input[type="file"],
    .upload-container textarea {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      border-radius: 8px;
      border: 1px solid #ccc;
    }

    .upload-container button {
      margin-top: 15px;
      padding: 10px 20px;
      background-color: #0059b3;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-weight: bold;
    }

    .upload-container button:hover {
      background-color: #0059b3;
    }

    .cards-container {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .card {
      background: #ffffff;
      border: 1px solid #ddd;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    .card img {
      width: 100%;
      max-width: 400px;
      height: 250px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 10px;
    }

    .card p {
      margin-bottom: 10px;
      font-size: 15px;
    }

    .card form textarea {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      border-radius: 8px;
      border: 1px solid #ccc;
    }

    .card form button {
      margin-top: 10px;
      background-color: #2563eb;
      color: white;
      padding: 8px 15px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }

    .card form button:hover {
      background-color: #1d4ed8;
    }

    .reply {
      background: #f0f9ff;
      padding: 10px;
      border-left: 4px solid #0ea5e9;
      border-radius: 8px;
      margin-top: 10px;
      font-size: 14px;
    }
  </style>
</head>
<body>

<!-- Upload Form -->
<div class="upload-container">
  <h2>Identify a Gemstone</h2>
  <form method="POST" enctype="multipart/form-data">
    <input type="file" name="image" required>
    <textarea name="description" placeholder="Describe the gemstone..." required></textarea>
    <button type="submit">📤 Submit for Identification</button>
  </form>
</div>

<!-- Cards Display Section -->
<div class="cards-container">
  <h3>Community Identifications</h3>
  <?php
  $stmt = $pdo->query("SELECT * FROM gem_identification ORDER BY created_at DESC");
  while ($row = $stmt->fetch()) {
  ?>
    <div class="card">
      <img src="<?= htmlspecialchars($row['image_path']) ?>" alt="Gem Image">
      <p><?= htmlspecialchars($row['description']) ?></p>

      <!-- Reply form -->
      <form method="POST" action="reply.php">
        <input type="hidden" name="gem_id" value="<?= $row['id'] ?>">
        <textarea name="reply_text" placeholder="Reply to this post..." required></textarea>
        <button type="submit">💬 Reply</button>
      </form>

      <!-- Replies -->
      <?php
        $replies = $pdo->prepare("SELECT * FROM gem_replies WHERE gem_id = ?");
        $replies->execute([$row['id']]);
        foreach ($replies as $reply) {
            echo "<div class='reply'>" . htmlspecialchars($reply['reply_text']) . "</div>";
        }
      ?>
    </div>
  <?php } ?>
</div>

</body>
</html>
