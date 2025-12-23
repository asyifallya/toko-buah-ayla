<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "toko_buah");

if (!$conn) {
    die("Koneksi gagal");
}
?>
