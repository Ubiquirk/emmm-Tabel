<?php
include "Koneksi.php";
$id = mysqli_real_escape_string($Koneksi, $_GET['id'] ?? '');

mysqli_query($Koneksi, "DELETE FROM barang WHERE id_barang='$id'");

header("location:Barang.php?pesan=Hapus");
exit;
?>