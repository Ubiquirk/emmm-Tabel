<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <div class="judul">
        <h1>Edit Data Barang</h1>
    </div>
    <br/>
    <a href="Transaksi.php">Lihat Semua Data</a>
    <br/>
    <?php
    include "Koneksi.php";
    $id = $_GET['id'];
    $data = mysqli_query($Koneksi, "select * from transaksi where Id_transaksi ='$id'");
    while ($tampil = mysqli_fetch_array($data)){
    ?>
    <form action="transaksi-edit-aksi.php" method="POST">
        <table>
            <tr>
                <td>Id_barang</td>
                <td>
                    <input type="text" name="Id_barang" value="<?php echo $tampil['Id_barang'];?>">
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>
                    <input type="number" name="Harga" value="<?php echo $tampil['Harga'];?>">
                </td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td>
                    <input type="number" name="Quantity" value="<?php echo $tampil['Quantity'];?>">
                </td>
            </tr>
            <tr>
                <td>NIP</td>
                <td>
                    <input type="text" name="NIP" value="<?php echo $tampil['NIP'];?>">
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