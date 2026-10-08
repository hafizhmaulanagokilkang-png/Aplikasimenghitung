<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi HPP Produk</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>APLIKASI HPP</h1>
    <p class="subtitle">Harga Pokok Penjualan Produk</p>

    <form action="proses.php" method="POST">

        <label for="produk">Nama Produk</label>
        <input
            type="text"
            id="produk"
            name="produk"
            placeholder="Contoh: Kopi Robusta"
            required
        >

        <label for="awal">Persediaan Awal</label>
        <input
            type="number"
            id="awal"
            name="awal"
            placeholder="Masukkan persediaan awal"
            min="0"
            required
        >

        <label for="pembelian">Pembelian Bersih</label>
        <input
            type="number"
            id="pembelian"
            name="pembelian"
            placeholder="Masukkan pembelian bersih"
            min="0"
            required
        >

        <label for="akhir">Persediaan Akhir</label>
        <input
            type="number"
            id="akhir"
            name="akhir"
            placeholder="Masukkan persediaan akhir"
            min="0"
            required
        >

        <button type="submit">HITUNG HPP</button>

    </form>

</div>

<footer>
    Copyright &copy; Muhammad Hafizh Maulana
</footer>

</body>
</html>