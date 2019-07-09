<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel Dengan PHP - www.malasngoding.com</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Siswa.xls");
	?>
 
	<center>
		<h1>Export Data Ke Excel Dengan PHP <br/> www.malasngoding.com</h1>
	</center>
 
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No.Telp</th>
		</tr>
		<!-- <tr>
			<td>1</td>
			<td>Sulaiman</td>
			<td>Jakarta</td>
			<td>0829121223</td>
		</tr> -->
    <?php
    include '../config.php';
    $id = $_GET['id_siswa'];
    $i = 1;
    $sql = "select * from tb_siswa where id_siswa='$id'";
    $result = mysqli_query($connect_database,$sql);
    while ($row= mysqli_fetch_array($result)) {
        echo "
        <tr>
        <td>".$i."</td>
        <td>".$row['nama']."</td>
        <td>".$row['alamat']."</td>
        <td>".$row['no_hp']."</td>
        </tr>
        ";
    }
    ?>
	</table>
</body>
</html>

