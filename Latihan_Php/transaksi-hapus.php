<?php
include "Koneksi.php";
$id = mysqli_real_escape_string($Koneksi, $_GET['id'] ?? '');

mysqli_query($Koneksi, "DELETE FROM transaksi WHERE Id_transaksi='$id'");

header("location:Transaksi.php?pesan=Hapus");
exit;
?>