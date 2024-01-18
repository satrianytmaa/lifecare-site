<?php


session_start();
if ($_SESSION['role'] !== 'admin') {
    header("location: http://localhost/lifecare-site/users/index.php");
    exit();
}
?>

<div class="">
    <h1>halaman admin</h1>
</div>