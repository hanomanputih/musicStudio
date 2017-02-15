<?php

include "koneksi.php";
$lokasi = $_SESSION["lokasi"];
$namastudio = $_SESSION["namastudio"];

if ($namastudio == NULL) {
 $sql = mysql_query("select * from studio where lokasi = '$lokasi'");
$data = mysql_fetch_array($sql);
echo $data["nama"] . "<br/>";
echo "Info : ".$data["info"] . "<br/>";
echo "Alamat : ".$data["alamat"] . "<br/>";
echo "CP : ".$data["cp"] . "<br/>";
  
}
?> 