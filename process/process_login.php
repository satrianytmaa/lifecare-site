<?php
session_start();

require 'db.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($DB, "select * from user where username = '$username' and password = '$password'");

if (mysqli_num_rows($query) != 0) {
    $row = mysqli_fetch_assoc($query);

    // create data session
    $dateTime = new DateTime();
    $query = "INSERT INTO session(register_at,id_user) VALUES ('" . $dateTime->format('Y-m-d H:i:s') . "','" . $row['id_user'] . "')";
    $res = $DB->query($query);

    // session_start();
    $_SESSION['id_user'] = $row['id_user'];
    $_SESSION['full_name'] = $row['full_name'];
    $_SESSION['phone_number'] = $row['phone_number'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['role'] = $row['role'];



    if ($row['role'] == 'admin') {
        header("location: ../admin/dashboard.php");
    } else if ($row['role'] == 'user') {
        header("location: ../users/index.php");
    }
} else {
    header("location: http://localhost/lifecare-site/index/login.php");
}
