<?php
require('db.php');

$full_name = $_POST['full_name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
// $role = $_POST['phone_number']; role pasti admin
$password = $_POST['password'];

$query = "INSERT INTO user(full_name,email,address,phone_number,password,role) VALUES ('" . $full_name . "','" . $email . "','" . $address . "','" . $phone_number . "','" . $password . "','user')";

$res = $DB->query($query);


if ($res) {
    header('location: /lifecare-site-main/index.html');
}
