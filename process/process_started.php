<?php
require('db.php');

$nameErr = $phoneErr = $passwordErr = "";

$full_name = $_POST['full_name'];
$phone_number = $_POST['phone_number'];
// $role = $_POST['phone_number']; role pasti admin
$password = $_POST['password'];

$query = "INSERT INTO user(full_name,phone_number,password,role) VALUES ('" . $full_name . "','" . $phone_number . "','" . $password . "','user')";

$res = $DB->query($query);

if ($res) {
    header('location: /lifecare-site/index.html');
}
