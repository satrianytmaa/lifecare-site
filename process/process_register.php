<?php
require('db.php');

$full_name = $_POST['full_name'];
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$role = $_POST['role'];
$password = md5($_POST['password']);

$query = "INSERT INTO user(full_name,username,address,email,phone_number,password,role) VALUES ('" . $full_name . "','" . $name . "','" . $address . "','" . $email . "','" . $phone_number . "','" . $password . "', '" . $role . "')";
$res = $DB->query($query);

if ($res) {
    $id = $DB->insert_id;
    header('location: /lifecare-site/Index/login.php');
}
