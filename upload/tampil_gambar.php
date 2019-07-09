<?php
include "../config.php";
$sql = mysqli_query($connect_database,"select * from tb_upload");
while ($data = mysqli_fetch_array($sql)) {
    $gambar = $data['lokasi_file'];
    $lokasi_gambar = "http://192.168.1.195/websekolah/upload/".$gambar;
    echo "<img src=".$lokasi_gambar." height=42 width=42>";
}
?>