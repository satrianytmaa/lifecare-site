<?php
require('db.php');
session_start(); // Start the session

$id = $_SESSION['id_user'];
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone_number'];
$password = $_POST['password'];

$query = "UPDATE user SET `full_name`='$name', `email`='$email',`address`='$address', `phone_number`='$phone', `password`='$password' WHERE `id_user`='$id'";
$res = $DB->query($query);

if ($res) {
    // klo login udh bisa ini ganti sama role dari session yg sedang login 

    $get_role = "SELECT * FROM user WHERE id_user = $id";
    $res = $DB->query($get_role);
    $data = $res->fetch_object();

    if ($data->role === 'admin') {
        header('location: /lifecare-site/admin/user/show.php?id=' . $id);
    } else {
        header('location: /lifecare-site/Index/user/show.php?id=' . $id);
    }
}
