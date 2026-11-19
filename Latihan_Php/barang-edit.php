<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <div class="judul">
        <h1>Edit Data Barang</h1>
    </div>
    <br/>
    <a href="Barang.php">Lihat Semua Data</a>
    <br/>
    <?php
    include "Koneksi.php";
    $id = $_GET['id'];
    $data = mysqli_query($Koneksi, "select * from barang where Id_barang ='$id'");
    while ($tampil = mysqli_fetch_array($data)){
    ?>
    <form action="barang-edit-aksi.php" method="POST">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td>
                    <input type="hidden" name="id_barang" value="<?php echo $tampil['Id_barang'];?>">
                    <input type="text" name="nama_barang" value="<?php echo $tampil['Nama_barang'];?>">
                </td>
            </tr>
            <tr>
                <td>Harga Barang</td>
                <td>
                    <input type="text" name="harga" value="<?php echo $tampil['Harga'];?>">
                </td>
            </tr>
            <tr>
                <td>Stok Barang</td>
                <td>
                    <input type="number" name="stok" value="<?php echo $tampil['Stok'];?>">
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php
    }
    ?>
    
</body>
</html>