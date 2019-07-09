<html>
<head>
<title></title>
</head>
<body>
<?php
include "../config.php";
$id = $_GET['id_siswa'];
$diterima = 2;
$query = "update tb_siswa set id_verifikasi='$diterima' where id_siswa='$id'";
$sql_query = mysqli_query($connect_database,$query);
if ($sql_query) {
    echo '<script>location.href="tampil_data.php"</script>';
}else{
    echo "gagal";
}
?>
</body>
</html>
