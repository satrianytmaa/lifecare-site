<?php
session_start();
require('db.php');

// $select_clinic = $DB->query("SELECT * FROM clinic WHERE LOWER(name_clinic) LIKE LOWER('%$name_clinic%')");
// $data = $select_clinic->fetch_object();
// $clinic = $data->id_clinic;
$clinic = $_POST['clinic'];
$name_vaccine = $_POST['name_vaccine'];
$manufacturer = $_POST['manufacturer'];
$dose_vaccine = $_POST['dose_vaccine'];

$query = "INSERT INTO vaccine(name_vaccine, manufacturer, dose_vaccine, id_clinic) VALUES ('" . $name_vaccine . "','" . $manufacturer . "','" . $dose_vaccine . "','" . $clinic . "')";

$res = $DB->query($query);

if ($res) {
    $id = $DB->insert_id;

    $user = $_SESSION['id_user'];
    $get_role = "SELECT * FROM user WHERE id_user = $user ";
    $res = $DB->query($get_role);
    $data = $res->fetch_object();

    if ($data->role === 'admin') {
        header('location: /lifecare-site/admin/vaccine/show.php?id=' . $id);
    } else {
        header('location: /lifecare-site/users/vaccine/show.php?id=' . $id);
    }
}

