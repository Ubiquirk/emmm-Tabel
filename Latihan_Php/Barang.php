
<html>
    <head>
        <title>Tabel Barang</title>
        <link rel="stylesheet" href="../Biodata/tabel.css">
    </head>
    <body>
        <h2 align="center" class="k">TABEL BARANG</h2>
        <table border="1" align="center">
            <tr>
                <td>Id barang</td>
                <td>Nama barang</td>
                <td>Harga</td>
                <td>Stok</td>
                <td>Edit</td>
                <td>Hapus</td>
            </tr>
            <?php
            include "Koneksi.php";
            $data = mysqli_query($Koneksi, "select * from barang");
            while ($tampil = mysqli_fetch_array($data))
                {
            ?>      
            <tr>
                <td><?php echo $tampil['Id_barang']; ?></td>
                <td><?php echo $tampil['Nama_barang'];?></td>
                <td><?php echo $tampil['Harga'];?></td>
                <td><?php echo $tampil['Stok'];?></td>
                <td><a href="barang-edit.php?id=<?php echo $tampil['Id_barang'];?>">Edit</a></td>
                <td><a href="barang-hapus.php?id=<?php echo $tampil['Id_barang'];?>"onclick="return confirm('Yakin ingin menghapus barang ini?')">Hapus</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>
