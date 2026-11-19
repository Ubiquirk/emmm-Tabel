<?php
    include "../Latihan_php/Koneksi.php";
    $Nama_barang = $_POST["Nama_barang"];
    $Harga = $_POST["Harga"];
    $Stok = $_POST["Stok"];
    $query = "insert into barang values('','$Nama_barang','$Harga','$Stok')";
    echo "Nama: $Nama_barang <br>";
    echo "Harga: $Harga <br>";
    echo "Stok: $Stok <br>";
    if (mysqli_query($Koneksi, $query)) 
    {
    echo "Data berhasil ditambahkan";
    echo "<iframe src='http://localhost/Aziz/Latihan_Php/Barang.php' width='100%' height='300px'></iframe>";
    } 
    else 
    {
    echo "Error";
    }
?>