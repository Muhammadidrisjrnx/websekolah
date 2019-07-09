<?php
include "../config.php";
$id = $_GET['id_siswa'];

if($_POST['upload']){
    //file
    $name_files = $_FILES['file']['name'];
    $size_files = $_FILES['file']['size'];
    $type_files= $_FILES['file']['type'];
    $tmp_name = $_FILES['file']['tmp_name'];
    //image
    $images_files = $_FILES['images']['name'];
    $images_size = $_FILES['images']['size'];
    $images_type= $_FILES['images']['type'];
    $tmp_images_name = $_FILES['images']['tmp_name'];

    if($images_size<1044070){
        move_uploaded_file($tmp_images_name,'images/'.$images_files);
        $lokasi = 'images/'.$images_files;
        $sql = "insert into tb_upload values(NULL,'$images_files','$images_size','$images_type','$lokasi')";
        $query = mysqli_query($connect_database,$sql);
        if ($query) {
            $last_id = mysqli_insert_id($connect_database);
            $sql2 = "update tb_siswa set id_upload_foto='$last_id' where id_siswa='$id'";
            $query2 = mysqli_query($connect_database,$sql2);
            if($query2){
                echo "sukses ".$last_id;
            }else{
                echo "gagal";
            }
        }else{
            echo "gagal";
        }
    } 
    if($size_files<10044070){
        move_uploaded_file($tmp_name,'file/'.$name_files);
        $lokasi = 'file/'.$name_files;
        $sql = "insert into tb_upload_file values(NULL,'$name_files','$size_files','$type_files','$lokasi')";
        $query = mysqli_query($connect_database,$sql);
        if($query){
            $last_id = mysqli_insert_id($connect_database);
            $sql2 = "update tb_siswa set id_upload_dokumen='$last_id' where id_siswa='$id'";
            $query2 = mysqli_query($connect_database,$sql2);
            if($query2){
                echo "sukses ".$last_id;
            }else{
                echo "gagal";
            }            
        }else{
            echo "gagal";
        }
    }
}
?>