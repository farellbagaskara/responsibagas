<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $produk = $_POST['produk'];
  $harga = $_POST['harga'];
  $jumlah = $_POST['jumlah'];
  $totalHarga = $harga * $jumlah;

 // Bismillahh
  $data = "Produk: $produk\nJumlah: $jumlah\nTotal Harga: Rp $totalHarga\n\n";
  file_put_contents('pemesanan.txt', $data, FILE_APPEND);

  
  header("Location: index.html");
  exit();
} else {
  echo "<p>Tidak ada data pemesanan yang dikirimkan.</p>";
}
?>
