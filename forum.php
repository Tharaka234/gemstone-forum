<?php 
session_start(); 
include 'db.php'; 

// Redirect to login if not logged in
if (!isset($_SESSION['username']) || !isset($_SESSION['user_id'])) {
    header('Location: index.php?login_required=1');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>EduForum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e6f2ff;
            color: #003366;
            font-family: Arial, sans-serif;
            padding-top: 80px; /* offset for navbar height */
        }

        /* Fixed full-width navbar */
        .navbar-custom {
            background-color: #002b5c;
            padding: 0.75rem 1rem;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        .navbar-custom .nav-link,
        .navbar-custom .navbar-brand {
            color: white !important;
            font-weight: bold;
        }

        .navbar-custom .nav-link:hover {
            color: #b3d9ff !important;
        }

        /* Thread card styling */
        .card {
            border: 1px solid #b3d1ff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 51, 102, 0.1);
        }

        .card-title {
            color: #003366;
        }

        .btn-primary, .btn-success {
            background-color: #0059b3;
            border-color: #0059b3;
        }

        .btn-primary:hover, .btn-success:hover {
            background-color: #004080;
            border-color: #004080;
        }

        .action-buttons a {
            margin-right: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<!--Navbar -->
<nav> 
      <?php include 'navbar.php'; ?> 
</nav>

<!-- Main Content -->
<div class="container mt-4">
    <h3 class="mb-3">Latest Threads</h3>

    <?php if (isset($_SESSION['user_id'])): ?>
        <a href="create_thread.php" class="btn btn-success mb-3">+ Create Thread</a>
    <?php endif; ?>

    <?php
    $stmt = $pdo->query("SELECT threads.id, threads.title, threads.user_id, users.username 
                         FROM threads 
                         JOIN users ON threads.user_id = users.id 
                         ORDER BY threads.created_at DESC");

    while ($row = $stmt->fetch()): ?>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($row['title']); ?></h5>
                <p class="card-text">Posted by <strong><?php echo htmlspecialchars($row['username']); ?></strong></p>
                <a href="thread.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">View</a>

                <!-- Delete Button -->
                <?php if ($_SESSION['user_id'] == $row['user_id'] || !empty($_SESSION['is_admin'])): ?>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $row['id']; ?>">Delete</button>

                    <!-- Delete Modal -->
                    <div class="modal fade" id="deleteModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?php echo $row['id']; ?>" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel<?php echo $row['id']; ?>">Confirm Deletion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Are you sure you want to delete the thread "<strong><?php echo htmlspecialchars($row['title']); ?></strong>"?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <a href="delete_thread.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Yes, Delete</a>
                          </div>
                        </div>
                      </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endwhile; ?>
</div>

<?php include 'footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


