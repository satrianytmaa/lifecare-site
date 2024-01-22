<?php
session_start();
require('db.php');

// $name = $_POST['name'];
// $role = $_POST['phone_number']; role pasti admin
$app = $_POST['appointment'];
$select_appointment = $DB->query("SELECT * FROM appointment WHERE LOWER(number) LIKE LOWER('%$app%') ORDER BY id_appointment DESC LIMIT 1 ");
// $select_appointmet = $DB->query("SELECT * FROM appointment WHERE LOWER(number) LIKE LOWER('AP001')");
$data = $select_appointment->fetch_object();
$appointment = $data->id_appointment;
$age = $_POST['number'];
$vaccine = $_POST['vaccine'];

$query = "INSERT INTO vaccine(id_appointment,name_vaccine,age) VALUES ('" . $appointment . "','" . $vaccine . "','" . $age . "')";

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
        header('location: /lifecare-site/Index/vaccine/show.php?id=' . $id);
    }
    // header('location: /lifecare-site/index.html');
}
