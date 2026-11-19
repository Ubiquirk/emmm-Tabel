<?php
    include "../Latihan_php/Koneksi.php";
    $Id_barang = $_POST["Id_barang"];
    $Harga = (int) $_POST["Harga"];
    $Quantity = (int) $_POST["Quantity"];
    $Harga_total = $Harga * $Quantity;
    $NIP = $_POST["NIP"];
    $query = "insert into transaksi values('','$Id_barang','$Harga','$Quantity','$Harga_total','$NIP')";
    echo "Id_barang: $Id_barang <br>";
    echo "Harga: $Harga <br>";
    echo "Quantity: $Quantity <br>";
    echo "Harga_total: $Harga_total <br>";
    echo "NIP: $NIP <br>";
    if (mysqli_query($Koneksi, $query)) 
    {
    echo "Data berhasil ditambahkan";
    echo "<iframe src='http://localhost/Aziz/Latihan_Php/transaksi.php' width='100%' height='300px'></iframe>";
    } 
    else 
    {
    echo "Error";
    }
?>