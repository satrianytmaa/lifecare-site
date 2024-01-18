<?php

require 'db.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($DB, "select * from user where username = '$username' and password = '$password'");

if (mysqli_num_rows($query) != 0) {
    $row = mysqli_fetch_assoc($query);

    session_start();
    $_SESSION['id_user'] = $row['id_user'];
    $_SESSION['role'] = $row['role'];

    if ($row['role'] == 'admin') {
        header("location: http://localhost/lifecare-site/admin/dashboard.php");
    } else if ($row['role'] == 'user') {
        header("location: http://localhost/lifecare-site/users/index.php");
    }
} else {
    header("location: http://localhost/lifecare-site/index/login.php");
}
