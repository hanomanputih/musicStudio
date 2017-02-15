<?php

session_start();
include 'koneksi.php';
$user = $_SESSION["username"];
$nama = $_POST['nama'];
$info = $_POST['info'];
$lokasi = $_POST['lokasi'];
$alamat = $_POST['alamat'];
$cp = $_POST['cp'];
//========================================
$lokasi_file = $_FILES['gambar']['tmp_name'];
$tipe_file = $_FILES['gambar']['type'];
$nama_file = $_FILES['gambar']['name'];
$direktori = "image_studio/$nama_file";

move_uploaded_file($lokasi_file,$direktori); 
//=========================================

$query1 = "insert into studio (nama,info,lokasi,alamat,cp,admin,foto) value ('$nama','$info','$lokasi','$alamat','$cp','$user','$nama_file')";
$sql = mysql_query($query1);
echo "<meta http-equiv=refresh content=0;url=homeadmin.php?cat=input>";


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
