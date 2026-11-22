<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $idToRemove = (int)$_POST['id'];

    if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
        $_SESSION['cart'] = array_filter($_SESSION['cart'], function($id) use ($idToRemove) {
            return $id != $idToRemove;
        });
    }
}

header("Location: cart.php");
exit;
