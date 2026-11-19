<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <div class="judul">
        <h1>Edit Data Pegawai</h1>
    </div>
    <br/>
    <a href="Pegawai.php">Lihat Semua Data</a>
    <br/>
    <?php
    include "Koneksi.php";
    $NIP = $_GET['id'];
    $data = mysqli_query($Koneksi, "select * from pegawai where NIP ='$NIP'");
    while ($tampil = mysqli_fetch_array($data)){
    ?>
    <form action="pegawai-edit-aksi.php" method="POST">
        <table>
            <tr>
                <td>NIP</td>
                <td>
                    <input type="text" name="NIP" value="<?php echo $tampil['NIP'];?>">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="Nama" value="<?php echo $tampil['Nama'];?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="Alamat" value="<?php echo $tampil['Alamat'];?>">
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" name="Username" value="<?php echo $tampil['Username'];?>">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="Password" value="<?php echo $tampil['Password'];?>">
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