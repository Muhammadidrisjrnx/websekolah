<!DOCTYPE html>
<html>
<style>
input[type=text],input[type=date], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
button {
    cursor: pointer;
    background: #3498db;
    color: #fff;
    border:0;
    padding:10px 30px;
    text-align: center;
    opacity: 0.8;
}
button:hover{
    opacity: 1;
}

</style>
<body>
<?php
    include "../config.php";
    $id = $_GET['id_siswa'];
    $query = "SELECT tb_siswa.id_verifikasi,tb_verifikasi.nama_verifikasi,tb_siswa.id_upload_foto,tb_upload.lokasi_gambar,tb_siswa.id_upload_dokumen,tb_upload_file.lokasi_file,nama,alamat,tempat_lahir,tanggal_lahir,jurusan,asal_sekolah,id_siswa,agama,umur,jenis_kelamin,nama_ortu,alamat_ortu,no_hp,prestasi FROM (((tb_siswa inner join tb_verifikasi on tb_siswa.id_verifikasi = tb_verifikasi.id_verifikasi)inner join tb_upload on tb_siswa.id_upload_foto = tb_upload.id_gambar)inner join tb_upload_file on tb_siswa.id_upload_dokumen = tb_upload_file.id_file) where id_siswa='$id'";
    $sql_query = mysqli_query($connect_database,$query);
    $row = mysqli_fetch_array($sql_query);
?>
<div>
    <label for="fname">Nama</label>
    <input type="text" id="nama" name="nama" placeholder="<?php echo "".$row['nama']."";?>">
    
    <label for="lname">Alamat</label>
    <input type="text" id="alamat" name="alamat" placeholder="<?php echo "".$row['alamat']."";?>">

    <label for="lname">Tempat Lahir</label>
    <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="<?php echo "".$row['tempat_lahir']."";?>">

    <label for="lname">Tanggal Lahir</label>
    <input type="text" id="tanggal_lahir" name="tanggal_lahir" placeholder="<?php echo "".$row['tanggal_lahir']."";?>">

    <label for="lname">Agama</label>
    <input type="text" id="tanggal_lahir" name="tanggal_lahir" placeholder="<?php echo "".$row['agama']."";?>">
        
    <label for="lname">Jurusan</label>
    <input type="text" id="tanggal_lahir" name="tanggal_lahir" placeholder="<?php echo "".$row['jurusan']."";?>">

    <label for="lname">Asal Sekolah</label>
    <input type="text" id="asal_sekolah" name="asal_sekolah" placeholder="<?php echo "".$row['asal_sekolah']."";?>">

    <label for="lname">Umur</label>
    <input type="text" id="umur" name="umur" placeholder="<?php echo "".$row['umur']."";?>">

    <label for="lname">Jenis Kelamin</label>
    <input type="text" id="tanggal_lahir" name="tanggal_lahir" placeholder="<?php echo "".$row['jenis_kelamin']."";?>">
        
    <label for="lname">Nama Orang Tua</label>
    <input type="text" id="ortu" name="ortu" placeholder="<?php echo "".$row['nama_ortu']."";?>">

    <label for="lname">Alamat Orang Tua</label>
    <input type="text" id="alamat_ortu" name="alamat_ortu" placeholder="<?php echo "".$row['alamat_ortu']."";?>">

    <label for="lname">No Handphone</label>
    <input type="text" id="hp" name="hp" placeholder="<?php echo "".$row['no_hp']."";?>">

    <label for="lname">Prestasi</label>
    <input type="text" id="prestasi" name="prestasi" placeholder="<?php echo "".$row['prestasi']."";?>">
    
    <label for="lname">Status Diterima / Tidak Diterima</label>
    <input type="text" id="prestasi" name="prestasi" placeholder="<?php echo "".$row['nama_verifikasi']."";?>">
    
    <?php
    $id_verifikasi = $row['id_verifikasi'];
    $id_siswa = $row['id_siswa'];
    if($id_verifikasi == 1){
        echo "
        <a href='diterima_siswa.php?id_siswa=".$row['id_siswa']."'>
        <button>Diterima</button>
        </a>
        ";
        echo "
        <a href='ditolak_siswa.php?id_siswa=".$row['id_siswa']."'>
        <button>Ditolak</button>
        </a>
        ";

    }else if($id_verifikasi==2){
      $id_foto = $row['lokasi_gambar'];
      $lokasi_foto = "http://localhost/websekolah/ngawur_tampilan/".$id_foto;
      $id_file = $row['lokasi_file'];
      $lokasi_file = "http://localhost/websekolah/ngawur_tampilan/".$id_file;
      echo "
        <label for='lname'>Foto</label>
        </br>
        </br>
        <img src=".$lokasi_foto." height=50 width=50>
        </br>
        </br>
        <label for='lname'>File</label>
        </br>
        </br>
        <a href=".$lokasi_file.">
        <button>Download Dokumen</button>
        </a>
        ";
    }else if($id_verifikasi==3){
        
    }else{

    }
    ?>

</div>
</body>
</html>
