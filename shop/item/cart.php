<?php
session_start();
include('../includes/config.php');

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_GET['id'])) {
    $item_id = (int)$_GET['id'];

    // Check if item already in cart
    if (isset($_SESSION['cart'][$item_id])) {
        $_SESSION['cart'][$item_id]++;
    } else {
        $_SESSION['cart'][$item_id] = 1;
    }

    $_SESSION['success'] = "Item added to cart!";
    header("Location: index.php");
    exit;
}
?>
