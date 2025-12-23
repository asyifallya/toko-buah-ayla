<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Keranjang</title>
</head>
<body>

<h2>🛒 Keranjang Belanja</h2>
<a href="index.php">⬅️ Kembali</a>
<hr>

<table border="1" cellpadding="10">
<tr>
    <th>Nama</th>
    <th>Harga</th>
    <th>Jumlah</th>
    <th>Total</th>
    <th>Aksi</th>
</tr>

<?php
$total_bayar = 0;
if (!empty($_SESSION['keranjang'])) {
    foreach ($_SESSION['keranjang'] as $id => $jumlah) {
        $data = mysqli_query($conn, "SELECT * FROM buah WHERE id=$id");
        $b = mysqli_fetch_assoc($data);
        $total = $b['harga'] * $jumlah;
        $total_bayar += $total;
?>
<tr>
    <td><?= $b['nama']; ?></td>
    <td>Rp <?= number_format($b['harga']); ?></td>
    <td>
        <form action="update_keranjang.php" method="post">
            <input type="hidden" name="id" value="<?= $id; ?>">
            <input type="number" name="jumlah" value="<?= $jumlah; ?>" min="1">
            <button>Update</button>
        </form>
    </td>
    <td>Rp <?= number_format($total); ?></td>
    <td>
        <a href="hapus_keranjang.php?id=<?= $id; ?>">Hapus</a>
    </td>
</tr>
<?php }} ?>

<tr>
    <th colspan="3">Total Bayar</th>
    <th colspan="2">Rp <?= number_format($total_bayar); ?></th>
</tr>
</table>

<br>
<a href="checkout.php">💳 Checkout</a>

</body>
</html>
