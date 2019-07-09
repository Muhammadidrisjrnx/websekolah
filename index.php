<?php
error_reporting(0);
include "config.php"; 
session_start();
    if($_SESSION['roll']==1 && $_SESSION['status'] == "login"){
        echo '<script>location.href="admin/index.php"</script>';
    }else if($_SESSION['roll']==2 && $_SESSION['status'] == "login"){
        echo '<script>location.href="user/index.php"</script>';
    }else{
        echo '<script>location.href="login.php"</script>';
    }
?>