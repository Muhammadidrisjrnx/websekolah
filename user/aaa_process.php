<?php
include "../config.php";

$nama= $_POST['nama'];
$alamat= $_POST['alamat'];
$tempat_lahir= $_POST['tempat_lahir'];
$tanggal_lahir= $_POST['tanggal_lahir'];
$agama= $_POST['agama'];
$jurusan= $_POST['jurusan'];
$asal_sekolah= $_POST['asal_sekolah'];
$umur= $_POST['umur'];
$jenis_kelamin= $_POST['jenis_kelamin'];
$ortu= $_POST['ortu'];
$alamat_ortu= $_POST['alamat_ortu'];
$hp= $_POST['hp'];
$prestasi= $_POST['prestasi'];
$id_foto = 1;
$id_dokumen =1;
$id_verifikasi = 1;
$query = "insert into tb_siswa (nama,alamat,tempat_lahir,tanggal_lahir,agama,jurusan,asal_sekolah,umur,jenis_kelamin,nama_ortu,alamat_ortu,no_hp,prestasi,id_verifikasi,id_upload_foto,id_upload_dokumen) values('$nama','$alamat','$tempat_lahir','$tanggal_lahir','$agama','$jurusan','$asal_sekolah','$umur','$jenis_kelamin','$ortu','$alamat_ortu','$hp','$prestasi','$id_verifikasi','$id_foto','$id_dokumen')";
$ppdb  = mysqli_query($connect_database,$query);
if($ppdb){
    echo "Berhasil";
}else{
    echo "Gagal";
}

?>