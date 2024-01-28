<?php
require('db.php');
session_start(); // Start the session

$id = $_SESSION['id_appointment'];

$p = $_POST['name'];
$select_name = $DB->query("SELECT * FROM user WHERE LOWER(full_name) LIKE LOWER('%$p%') ORDER BY id_user DESC LIMIT 1 ");
$data = $select_name->fetch_object();
$patient = $data->id_user;

$clinic = $_POST['clinic'];
$status = $_POST['status'];
$date = $_POST['date'];

$query = "UPDATE appointment SET `id_user`='$patient', `id_clinic`='$clinic', `status`='$status', `date_and_time`='$date'WHERE `id_appointment`='$id'";
$res = $DB->query($query);


if ($res) {
    // ambil role dari session yang login
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
        header('location: /lifecare-site/admin/appointment/show.php?id=' . $id);
    } else {
        header('location: /lifecare-site/status/appointment/show.php?id=' . $id);
    }

    // header('location: /lifecare-site/admin/appointment/show.php?id=' . $id);
}
