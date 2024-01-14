<?php
require('db.php');
session_start(); // Start the session

$id = $_SESSION['id_patient'];
$patient = $_POST['patient'];
$clinic = $_POST['clinic'];
$status = $_POST['status'];
$date = $_POST['date'];

$query = "UPDATE appointment SET `id_patient`='$patient', `id_clinic`='$clinic', `status`='$status', `date_and_time`='$date'WHERE `id_appointment`='$id'";
$res = $DB->query($query);


if ($res) {
    header('location: /lifecare-site-main/admin/appointment/show.php?id=' . $id);
}
