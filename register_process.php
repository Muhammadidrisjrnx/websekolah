<?php
include "config.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$roll = 2;
$query = "insert into tb_users (username,password,roll) values ('$username','$password','$roll')";
$register = mysqli_query($connect_database,$query);
if ($register) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    $_SESSION['roll'] = $roll;
    echo '<script>location.href="user/index.php"</script>';
}else{
    echo '<script>location.href="index.php"</script>';
}
?>