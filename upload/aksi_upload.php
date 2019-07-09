<?php
include "../config.php";
if($_POST['upload']){
    $nama = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $type= $_FILES['file']['type'];
    $tmp_name = $_FILES['file']['tmp_name'];
    date_default_timezone_set("Asia/Jakarta");
    $format_name = "".date("YmdHis").$nama;
        if($size <1044070){
            move_uploaded_file($tmp_name,'file/'.$format_name);
            $lokasi = 'file/'.$format_name;
            $query = mysqli_query($connect_database,"insert into tb_upload values(NULL,'$format_name','$size','$type','$lokasi')");
            if ($query) {
                echo "sukses";
            }else{
                echo "gagal";
            }
        }else{
            echo "ukuran terlalu besar";
        }
}
?>