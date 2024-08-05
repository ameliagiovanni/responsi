<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $produk = htmlspecialchars($_POST['produk']);
    $jumlah = htmlspecialchars($_POST['jumlah']);

    $order = [
        'Nama' => $nama,
        'Email' => $email,
        'Produk' => $produk,
        'Jumlah' => $jumlah
    ];

    $file = fopen("orders.txt", "a");
    fwrite($file, json_encode($order) . "\n");
    fclose($file);

    echo "Pesanan telah disimpan. <a href='buat_pesanan.html'>Kembali</a>";
}
?>