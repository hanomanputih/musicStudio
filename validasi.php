<?php

include "koneksi.php";
$username = $_POST["username"];
$password = $_POST["password"];
$query = "select * from admin where username='$username' and password='$password'";
$tampil = mysql_query($query);
$jumlah = mysql_num_rows($tampil);

if ($jumlah > 0) {
    session_start();
    $_SESSION ["username"] = $data ["username"];
    echo "<meta http-equiv=refresh content=0;url=homeadmin.php>";
} 
?>