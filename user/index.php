<?php
include '../config.php';
session_start();
if($_SESSION['roll']!=2){
    echo '<script>location.href="../index.php"</script>';
}
echo "Hai ".$_SESSION['username'];
?>
<a href = "logout.php">Logout</a>