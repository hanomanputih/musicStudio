<?php
include 'koneksi.php';

$id = $_GET['id'];
$query2 = "SELECT * FROM studio WHERE idstudio='$id'";
    $sql2 = mysql_query($query2);
    while ($data1 = mysql_fetch_array($sql2)) {
        $fotolama = $data1['foto'];
        $hapus = "image_studio/$fotolama";
        @$hapusfoto = unlink($hapus);
    }
echo $id;

$query = "delete from studio where idstudio = '$id'";
$sql = mysql_query($query);

echo "<meta http-equiv=refresh content=0;url=homeadmin.php?cat=kelola>";
?>
