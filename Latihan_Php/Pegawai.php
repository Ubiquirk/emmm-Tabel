<html>
    <head>
        <title>Tabel Pegawai</title>
        <link rel="stylesheet" href="../Biodata/tabel.css">
    </head>
    <body>
        <h2 align="center" class="k">TABEL PEGAWAI</h2>
        <table border="1" align="center">
            <tr>
                <td>NIP</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Username</td>
                <td>Password</td>
                <td>Edit</td>
                <td>Hapus</td>
            </tr>
            <?php
            include "Koneksi.php";
            $data = mysqli_query($Koneksi, "select * from pegawai");
            while ($tampil = mysqli_fetch_array($data))
                {
            ?>      
            <tr>
                <td><?php echo $tampil['NIP']; ?></td>
                <td><?php echo $tampil['Nama'];?></td>
                <td><?php echo $tampil['Alamat'];?></td>
                <td><?php echo $tampil['Username'];?></td>
                <td><?php echo $tampil['Password'];?></td>
                <td><a href="pegawai-edit.php?id=<?php echo $tampil['NIP'];?>">Edit</a></td>
                <td><a href="pegawai-hapus.php?id=<?php echo $tampil['NIP'];?>"onclick="return confirm('Yakin ingin menghapus barang ini?')">Hapus</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>