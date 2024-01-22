<?php
require('db.php');
session_start(); // Start the session

$id = $_SESSION['clinic_id'];
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];

$query = "UPDATE clinic SET `name_clinic`='$name', `address`='$address', `email_clinic`='$email' WHERE `id_clinic`='$id'";
$res = $DB->query($query);

if ($res) {
    header('location: /lifecare-site/admin/clinic/index.php');
}
