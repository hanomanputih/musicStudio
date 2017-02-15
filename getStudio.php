<?php
$q = $_GET["q"];
$a = $_GET["a"];

include 'koneksi.php';
if (!$koneksi) {
    die('Could not connect: ' . mysql_error());
}

//mysql_select_db("studiomusik", $con);

$sql = "SELECT * FROM studio WHERE lokasi = '" . $q . "' OR nama = '" . $a . "'";

$result = mysql_query($sql);

//echo "<table border='1'>
//<tr>
//<th>Nama Studio</th>
//<th>Lokasi</th>
//<th>Alamat</th>
//<th>Info</th>
//<th>CP</th>
//<th>Penulis</th>
//</tr>";

while ($row = mysql_fetch_array($result)) {
    
    echo "<h2>" . $row['nama'] . "<br/></h2>";
    ?>
    <img src="image_studio/<?php echo $row['foto'] ?>"width="30%" height="30%">
    <?php
    echo "</br>Lokasi : " . $row['lokasi'] . "<br/>";
    echo "Alamat : " . $row['alamat'] . "<br/>";
    echo "Informasi : " . $row['info'] . "<br/>";
    echo "CP : " . $row['cp'] . "<br/>";
    echo "Penulis : " . $row['admin'] . "<br/>";
    echo "<hr/>";

//  echo "<tr>";
//  echo "<td>" . $row['nama'] . "</td>";
//  echo "<td>" . $row['lokasi'] . "</td>";
//  echo "<td>" . $row['alamat'] . "</td>";
//  echo "<td>" . $row['info'] . "</td>";
//  echo "<td>" . $row['cp'] . "</td>";
//  echo "<td>" . $row['admin'] . "</td>";
//  echo "</tr>";
}
//echo "</table>";
//mysql_close($con);
?>
