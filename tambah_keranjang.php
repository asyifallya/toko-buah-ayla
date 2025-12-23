<?php
include 'config.php';
$id = $_GET['id'];

if (isset($_SESSION['keranjang'][$id])) {
    $_SESSION['keranjang'][$id] += 1;
} else {
    $_SESSION['keranjang'][$id] = 1;
}

header("Location: keranjang.php");
