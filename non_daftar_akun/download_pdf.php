<?php
require "../fpdf.php";
include "../config.php";
$id = $_GET['id_siswa'];
$query = mysqli_query($connect_database, "select * from tb_siswa where id_siswa='$id'");
$row = mysqli_fetch_array($query);


$pdf = new FPDF('l','mm','A5');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,7,'Data Siswa SMK',0,1,'C');
$pdf->Cell(10,7,'',0,1);
//space baru 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,6,'Nama',0,0,'L');
$pdf->Cell(30,6,$row['nama'],0,0,'L');
$pdf->Cell(10,7,'',0,1);
//space baru
$pdf->Cell(50,6,'Alamat',0,0);
$pdf->Cell(30,6,$row['alamat'],0,0,'L');
$pdf->Cell(10,7,'',0,1);
//space baru
$pdf->Cell(50,6,'Tempat Lahir',0,0);
$pdf->Cell(30,6,$row['tempat_lahir'],0,0,'L');
$pdf->Cell(10,7,'',0,1);
//space baru
$pdf->Cell(50,6,'Tanggal Lahir',0,0);
$pdf->Cell(30,6,$row['tanggal_lahir'],0,0,'L');
$pdf->Cell(10,7,'',0,1);
//space baru
$pdf->Cell(50,6,'Agama',0,0);
$pdf->Cell(30,6,$row['agama'],0,0,'L');
$pdf->Cell(10,7,'',0,1);
//space baru
$pdf->Cell(50,6,'Jurusan',0,0);
$pdf->Cell(30,6,$row['jurusan'],0,0,'L');
$pdf->Cell(10,7,'',0,1);
//space baru
$pdf->Cell(50,6,'Asal Sekolah',0,0);
$pdf->Cell(30,6,$row['asal_sekolah'],0,0,'L');
$pdf->Cell(10,7,'',0,1);
//space baru
$pdf->Cell(50,6,'Umur',0,0);
$pdf->Cell(30,6,$row['umur'],0,0,'L');
$pdf->Cell(10,7,'',0,1);
//space baru
$pdf->Cell(50,6,'Jenis Kelamin',0,0);
$pdf->Cell(30,6,$row['jenis_kelamin'],0,0,'L');
$pdf->Cell(10,7,'',0,1);
//space baru
$pdf->Cell(50,6,'Nama Orang Tua',0,0);
$pdf->Cell(30,6,$row['nama_ortu'],0,0,'L');
$pdf->Cell(10,7,'',0,1);
//space baru
$pdf->Cell(50,6,'Alamat Orang Tua',0,0);
$pdf->Cell(30,6,$row['alamat_ortu'],0,0,'L');
$pdf->Cell(10,7,'',0,1);
//space baru
$pdf->Cell(50,6,'No Handphone',0,0);
$pdf->Cell(30,6,$row['no_hp'],0,0,'L');
$pdf->Cell(10,7,'',0,1);
//space baru
$pdf->Cell(50,6,'Prestasi',0,0);
$pdf->Cell(30,6,$row['prestasi'],0,0,'L');
$pdf->Cell(10,7,'',0,1);

 
$pdf->Output();
?>