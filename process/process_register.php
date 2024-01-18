<?php
require('db.php');

$full_name = $_POST['full_name'];
$phone_number = $_POST['phone_number'];
$role = $_POST['role'];
$password = $_POST['password'];

$query = "INSERT INTO user(full_name,phone_number,password,role) VALUES ('" . $full_name . "','" . $phone_number . "','" . $password . "', '" . $role . "')";

$res = $DB->query($query);

if ($res) {
    $id = $DB->insert_id;
    header('location: /lifecare-site/admin/user/show.php?id=' . $id);
}
