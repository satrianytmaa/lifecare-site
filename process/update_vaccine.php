<?php
require('db.php');
session_start(); // Start the session

$id = $_SESSION['id_vaccine'];
$clinic = $_POST['clinic'];
$name = $_POST['name_vaccine'];
$manufacturer = $_POST['manufacturer'];
$dose = $_POST['dose_vaccine'];

$query = "UPDATE vaccine SET `name_vaccine`='$name', `manufacturer`='$manufacturer', `dose_vaccine`='$dose', `id_clinic`='$clinic' WHERE `id_vaccine`='$id'";
$res = $DB->query($query);

if ($res) {
    // $user = $_SESSION['id_user'];
    // $get_role = "SELECT * FROM user WHERE id_user = $user ";
    // $res = $DB->query($get_role);
    // $data = $res->fetch_object();

    // if ($data->role === 'admin') {
    //     header('location: /lifecare-site/admin/vaccine/show.php?id=' . $id);
    // } else {
    //     header('location: /lifecare-site/Index/vaccine/show.php?id=' . $id);
    // }
    header('location: /lifecare-site/admin/vaccine/show.php?id=' . $id);
}
