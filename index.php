<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Toko Buah</title>
</head>
<body>

<h2>🍎 Daftar Buah</h2>
<a href="keranjang.php">🛒 Lihat Keranjang</a>
<hr>

<table border="1" cellpadding="10">
<tr>
    <th>Nama</th>
    <th>Harga</th>
    <th>Aksi</th>
</tr>

<?php
$data = mysqli_query($conn, "SELECT * FROM buah");
while ($b = mysqli_fetch_assoc($data)) {
?>
<tr>
    <td><?= $b['nama']; ?></td>
    <td>Rp <?= number_format($b['harga']); ?></td>
    <td>
        <a href="tambah_keranjang.php?id=<?= $b['id']; ?>">Tambah</a>
    </td>
</tr>
<?php } ?>
</table>

</body>
</html>
