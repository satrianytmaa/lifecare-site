<?php
require('db.php');
session_start(); // Start the session

$id = $_SESSION['id_user'];
// $username = $_SESSION['username'];
$uname = $_POST['username'];
$fullname = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone_number'];
$role = $_POST['role'];
$password = md5($_POST['password']);


$query = "UPDATE user SET `username`='$uname', `full_name`='$fullname', `email`='$email',`address`='$address', `phone_number`='$phone', `password`='$password', `role`='$role' WHERE `id_user`='$id'";
$res = $DB->query($query);

if ($res) {
    // klo login udh bisa ini ganti sama role dari session yg sedang login 
    // if(user_role === 'admin'){
    // tambah location setelah update
    // }else {
    // tambah location setelah update

    // }


    $get_role = "SELECT * FROM user WHERE id_user = $id";
    $res = $DB->query($get_role);
    $data = $res->fetch_object();

    if ($data->role === 'admin') {
        header('location: /lifecare-site/admin/user/show.php?id=' . $id);
    } else {
        header('location: /lifecare-site/admin/user/show.php?id=' . $id);
    }
}
