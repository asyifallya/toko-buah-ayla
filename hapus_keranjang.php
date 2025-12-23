<?php
include 'config.php';
unset($_SESSION['keranjang'][$_GET['id']]);
header("Location: keranjang.php");
