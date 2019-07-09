<html>
<head>
<style>
#css_table {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#css_table td, #css_table th {
  border: 1px solid #ddd;
  padding: 8px;
}

#css_table tr:nth-child(even){background-color: #f2f2f2;}

#css_table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
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
h2{
  text-align: center;
}
</style>
</head>
<body>
<h2>Daftar Siswa Mendaftar</h2>
<table id="css_table">
    <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
    <th>Jurusan</th>
    <th>Asal Sekolah</th>
    <th>Info Lengkap</th>
    <th>Status Diterima/Tidak Diterima</th>
    </tr>
    <?php
    include '../config.php';
    session_start();
    if($_SESSION['roll']!=1){
    echo '<script>location.href="../index.php"</script>';
    }
    $sql = "SELECT tb_siswa.id_verifikasi,tb_verifikasi.nama_verifikasi,nama,alamat,tempat_lahir,tanggal_lahir,jurusan,asal_sekolah,id_siswa FROM tb_siswa inner join tb_verifikasi on tb_siswa.id_verifikasi = tb_verifikasi.id_verifikasi";
    $i = 1;
    $result = mysqli_query($connect_database,$sql);
    while($row=mysqli_fetch_array($result)){
      echo "
      <tr>
      <td>".$i++."</td>
      <td>".$row['nama']."</td>
      <td>".$row['alamat']."</td>
      <td>".$row['tempat_lahir']."</td>
      <td>".$row['tanggal_lahir']."</td>
      <td>".$row['jurusan']."</td>
      <td>".$row['asal_sekolah']."</td>
      <td>
      <a href='info_siswa.php?id_siswa=".$row['id_siswa']."'>
      <button>Info</button>
      </a>
      </td>
      <td>".$row['nama_verifikasi']."</td>
      </tr>
      ";
    }
    ?>
    </table>
</body>
</html>
