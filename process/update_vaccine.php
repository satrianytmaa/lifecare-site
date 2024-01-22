<?php
require('db.php');
session_start(); // Start the session

$id = $_SESSION['id_vaccine'];
$app = $_POST['appointment'];
$select_appointment = $DB->query("SELECT * FROM appointment WHERE LOWER(number) LIKE LOWER('%$app%') ORDER BY id_appointment DESC LIMIT 1 ");
// $select_appointmet = $DB->query("SELECT * FROM appointment WHERE LOWER(number) LIKE LOWER('AP001')");
$data = $select_appointment->fetch_object();
$appointment = $data->id_appointment;
$age = $_POST['age'];
$vaccine = $_POST['vaccine'];

$query = "UPDATE vaccine SET `id_appointment`='$appointment', `name_vaccine`='$vaccine', `age`='$age' WHERE `id_vaccine`='$id'";
$res = $DB->query($query);


if ($res) {
    // cek role session user, jika rolenya admin location ke admin begitu juga user
    // if(user_role === 'admin'){
    // tambah location setelah update
    // }else {
    // tambah location setelah update

    // }
    $user = $_SESSION['id_user'];
    $get_role = "SELECT * FROM user WHERE id_user = $user ";
    $res = $DB->query($get_role);
    $data = $res->fetch_object();

    if ($data->role === 'admin') {
        header('location: /lifecare-site/admin/vaccine/show.php?id=' . $id);
    } else {
        header('location: /lifecare-site/Index/vaccine/show.php?id=' . $id);
    }
}
