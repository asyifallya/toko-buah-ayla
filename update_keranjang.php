<?php
include 'config.php';
$_SESSION['keranjang'][$_POST['id']] = $_POST['jumlah'];
header("Location: keranjang.php");
