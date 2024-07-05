<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produk = $_POST['produk'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $total = $harga * $jumlah;

    // Format data yang akan disimpan
    $data = "Produk: $produk, Harga: Rp. $harga, Jumlah: $jumlah, Total: Rp. $total\n";

    // Tentukan nama file tempat menyimpan data
    $file = 'pemesanan.txt';

    // Simpan data ke dalam file
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // Redirect kembali ke halaman utama dengan pesan sukses
    header("Location: index.html?status=sukses");
    exit();
} else {
    // Redirect ke halaman utama jika bukan request POST
    header("Location: index.html");
    exit();
}

