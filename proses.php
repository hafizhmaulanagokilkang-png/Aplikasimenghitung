<?php

$produk = $_POST['produk'];
$awal = $_POST['awal'];
$pembelian = $_POST['pembelian'];
$akhir = $_POST['akhir'];

// Rumus HPP
$hpp = $awal + $pembelian - $akhir;

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan HPP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>HASIL HPP</h1>
    <p class="subtitle">Harga Pokok Penjualan</p>

    <div class="hasil">

        <p>
            <strong>Nama Produk</strong><br>
            <?php echo htmlspecialchars($produk); ?>
        </p>

        <p>
            <strong>Persediaan Awal</strong><br>
            Rp <?php echo number_format($awal, 0, ',', '.'); ?>
        </p>

        <p>
            <strong>Pembelian Bersih</strong><br>
            Rp <?php echo number_format($pembelian, 0, ',', '.'); ?>
        </p>

        <p>
            <strong>Persediaan Akhir</strong><br>
            Rp <?php echo number_format($akhir, 0, ',', '.'); ?>
        </p>

        <hr>

        <p class="total">
            HARGA POKOK PENJUALAN
        </p>

        <p class="harga">
            Rp <?php echo number_format($hpp, 0, ',', '.'); ?>
        </p>

    </div>

    <a href="index.php">
        <button type="button">HITUNG LAGI</button>
    </a>

</div>

<footer>
    Copyright &copy; Muhammad Hafizh Maulana
</footer>

</body>
</html>