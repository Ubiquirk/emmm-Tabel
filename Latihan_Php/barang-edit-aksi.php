<?php
include 'Barang.php';
$id_barang = $_POST['$id_barang'];
$nama_barang = $_POST['$nama_barang'];
$harga_barang = $_POST['$nama_barang'];
$stok = $_POST['$stok'];

mysqli_query($Koneksi,"update barang set Nama_barang = '$nama_barang',Harga_barang = '$harga_barang',Stok = '$stok'where Id_barang = '$id_barang'");
header("location:Barang.php?pesan=update");
?>