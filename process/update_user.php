<?php
require('db.php');
session_start(); // Start the session

$id = $_SESSION['id_user'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$query = "UPDATE user SET `full_name`='$name', `phone_number`='$phone', `password`='$password' WHERE `id_user`='$id'";
$res = $DB->query($query);

if ($res) {
    header('location: /lifecare-site-main/admin/user/show.php?id=' . $id);
}
