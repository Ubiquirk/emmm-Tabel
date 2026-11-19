<?php
include 'Koneksi.php';
$NIP = $_POST['$NIP'];
$Nama = $_POST['$Nama'];
$Alamat = $_POST['$Alamat'];
$Username = $_POST['$Username'];
$Password = $_POST['$Password'];

mysqli_query($Koneksi,"update pegawai set NIP = '$NIP',Nama = '$Nama',Alamat = '$Alamat', Username = '$Username',Password = '$Password' where NIP = '$NIP'");
header("location:Pegawai.php?pesan=update");
?>