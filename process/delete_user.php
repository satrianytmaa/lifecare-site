<?php
session_start();
require('db.php');
$id = $_GET['id'];
$query = "DELETE from user where id_user='$id'";
$res = $DB->query($query);

if ($res) {
    // klo login udh bisa ini ganti sama role dari session yg sedang login 

    // $get_role = "SELECT * FROM user WHERE id_user = id session";
    // $res = $DB->query($get_role);
    // $data = $res->fetch_object();

    // if (session role === 'admin') {
    //     header('location: /lifecare-site/admin/user/index.php');
    // } else {
    //     header('location: /lifecare-site/index.html');
    // }

    $user = $_SESSION['id_user'];
    $get_role = "SELECT * FROM user WHERE id_user = $user ";
    $res = $DB->query($get_role);
    $data = $res->fetch_object();

    if ($data->role === 'admin') {
        header('location: /lifecare-site/admin/user/index.php');
    } else {
        header('location: /lifecare-site/users/index.php');
    }
}
