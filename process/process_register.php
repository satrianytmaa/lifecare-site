<?php
require('db.php');

$username = $_POST['username'];
$full_name = $_POST['full_name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$password = md5($_POST['password']);
$role = $_POST['role'];

$query = "INSERT INTO user(username, full_name, address, email, phone_number, password, role) VALUES ('" . $username . "','" . $full_name . "','" . $address . "','" . $email . "','" . $phone_number . "','" . $password . "', '" . $role . "')";
$res = $DB->query($query);

if ($res) {
    $id = $DB->insert_id;
    header('location: /lifecare-site/admin/user/show.php?id=' . $id);
}
