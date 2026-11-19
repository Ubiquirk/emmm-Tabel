<?php
include "Koneksi.php";
$id = mysqli_real_escape_string($Koneksi, $_GET['id'] ?? '');

mysqli_query($Koneksi, "DELETE FROM Pegawai WHERE NIP='$id'");

header("location:Pegawai.php?pesan=Hapus");
exit;
?>