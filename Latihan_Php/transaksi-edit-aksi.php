<?php
include 'Koneksi.php';
$Id_transaksi = $_POST['$Id_transaksi'];
$Id_barang = $_POST['$Id_barang'];
$Harga = $_POST['$Harga'];
$Quantity = $_POST['$Quantity'];
$Harga_total = $Harga * $Quantity;
$NIP = $_POST['$NIP'];

mysqli_query($Koneksi,"update transaksi set Id_barang = '$Id_barang',Harga = '$Harga',Quantity = '$Quantity',Harga_total = '$Harga_total',NIP = '$NIP' where Id_transaksi = '$Id_transaksi'");
header("location:Transaksi.php?pesan=update");
?>