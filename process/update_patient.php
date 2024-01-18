<?php
require('db.php');
session_start(); // Start the session

$id = $_SESSION['id_patient'];
$user = $_POST['user'];
$select_name = $DB->query("SELECT full_name FROM user WHERE id_user= $user");
$data = $select_name->fetch_object();
$name = $data->full_name;
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];

$query = "UPDATE patient SET `id_user`='$user', `name_patient`='$name', `phone_number`='$phone', `email_patient`='$email', `address`='$address' WHERE `id_patient`='$id'";
$res = $DB->query($query);


if ($res) {
    header('location: /lifecare-site/admin/patient/show.php?id=' . $id);
}
