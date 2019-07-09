<?php
include "config.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$query = "select * from tb_users where username='$username' and password='$password'";
$login = mysqli_query($connect_database,$query);
$cek = mysqli_num_rows($login);
if ($cek>0) {
    $data = mysqli_fetch_assoc($login);
    if($data['roll']==1){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        $_SESSION['roll'] = 1;
        echo '<script>location.href="admin/index.php"</script>';
    }else if($data['roll']==2){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        $_SESSION['roll'] = 2;
        echo '<script>location.href="user/index.php"</script>';
    }else{
        echo '<script>location.href="index.php"</script>';
    } 
}else{
    echo '<script>location.href="index.php"</script>';
}
?>