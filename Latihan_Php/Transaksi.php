<html>
    <head>
        <title>Tabel Transaksi</title>
        <link rel="stylesheet" href="../Biodata/tabel.css">
    </head>
    <body>
        <h2 align="center" class="k">TABEL TRANSAKSI</h2>
        <table border="1" align="center">
            <tr>
                <td>Id_transaksi</td>
                <td>Id_barang</td>
                <td>Harga</td>
                <td>Quantity</td>
                <td>Harga_total</td>
                <td>NIP</td>
                <td>Edit</td>
                <td>Hapus</td>
            </tr>
            <?php
            include "Koneksi.php";
            $data = mysqli_query($Koneksi, "select * from transaksi");
            while ($tampil = mysqli_fetch_array($data))
                {
            ?>      
            <tr>
                <td><?php echo $tampil['Id_transaksi']; ?></td>
                <td><?php echo $tampil['Id_barang'];?></td>
                <td><?php echo $tampil['Harga'];?></td>
                <td><?php echo $tampil['Quantity'];?></td>
                <td><?php echo $tampil['Harga_total'];?></td>
                <td><?php echo $tampil['NIP'];?></td>
                <td><a href="transaksi-edit.php?id=<?php echo $tampil['Id_transaksi'];?>">Edit</a></td>
                <td><a href="transaksi-hapus.php?id=<?php echo $tampil['Id_transaksi'];?>"onclick="return confirm('Yakin ingin menghapus barang ini?')">Hapus</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>