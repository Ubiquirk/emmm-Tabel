<?php
    include "../Latihan_php/Koneksi.php";
    $NIP = $_POST["NIP"];
    $Nama = $_POST["Nama"];
    $Alamat = $_POST["Alamat"];
    $Username = $_POST["Username"];
    $Password = $_POST["Password"];
    $query = "insert into pegawai values($NIP,'$Nama','$Alamat','$Username','$Password')";
    echo "NIP: $NIP <br>";
    echo "Nama: $Nama <br>";
    echo "Alamat: $Alamat <br>";
    echo "Username: $Username <br>";
    echo "Password: $Password <br>";
    if (mysqli_query($Koneksi, $query)) 
    {
    echo "Data berhasil ditambahkan";
    echo "<iframe src='http://localhost/Aziz/Latihan_Php/pegawai.php' width='100%' height='300px'></iframe>";
    } 
    else 
    {
    echo "Error";
    }
?>