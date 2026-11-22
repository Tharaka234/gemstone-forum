<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cut'])) {
    $cut = $_POST['cut'];
    $cut = $db->real_escape_string($cut);

    // Check if this cut type already exists
    $checkQuery = "SELECT * FROM cut_poll WHERE cut_type = '$cut'";
    $result = $db->query($checkQuery);

    if ($result && $result->num_rows > 0) {
        // Exists, update vote
        $db->query("UPDATE cut_poll SET votes = votes + 1 WHERE cut_type = '$cut'");
    } else {
        // Doesn't exist, insert new cut
        $db->query("INSERT INTO cut_poll (cut_type, votes) VALUES ('$cut', 1)");
    }
}

header('Location: gem_market.php');
exit();
?>
