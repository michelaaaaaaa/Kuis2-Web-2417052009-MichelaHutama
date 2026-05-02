<?php
$nama_toko = "Warung Digital Unila";

function hitungTotal($harga_barang) {
    global $nama_toko;
    echo "<h3>Selamat Datang di $nama_toko </h3>";

    static $jumlah_transaksi = 0;
    $jumlah_transaksi++;

    echo "Transaksi ke-$jumlah_transaksi <br>";
    echo "Harga Barang: Rp " . number_format($harga_barang, 0, ',', '.') . "<br>";
    echo "<hr>";
}

hitungTotal(15000);
hitungTotal(25000);
hitungTotal(50000);
?>