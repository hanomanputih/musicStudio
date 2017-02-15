<?php
session_start();
$user = $_SESSION["username"];

if ($user != null) {

    include 'koneksi.php';

    $query = "select * from studio";
    $sql = mysql_query($query);
    ?>
<h3 align="center">KELOLA</h3>
<table border="1px" align="center" style="text-align: center">
    <tr style="text-transform: uppercase">
            <td>Nama Studio</td>
            <td>Info</td>
            <td>Lokasi</td>
            <td>Alamat</td>
            <td>Contact Person</td>
            <td>Aksi</td>
        </tr>

        <?php while ($data = mysql_fetch_array($sql)) { ?>
            <tr>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['info'] ?></td>
                <td><?php echo $data['lokasi'] ?></td>
                <td><?php echo $data['alamat'] ?></td>
                <td><?php echo $data['cp'] ?></td>
                <td> <a href="edit.php?id= <?php echo $data[idstudio]?>" onclick="confirm ('Apakah anda yakin untuk mengedit data ini?')">Edit</a> | <a href="hapus.php?id= <?php echo $data[idstudio]?>" onclick=" return confirm('Anda yakin??')">Hapus</a></td></tr>
                
            

        
        <?php
    } echo "</table>";
} else {
    echo "<meta http-equiv=refresh content=0;url=index.php>";
}
?>
