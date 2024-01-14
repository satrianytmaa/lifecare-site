<?php
require('db.php');


$patient = $_POST['patient'];
$clinic = $_POST['clinic'];
$status = $_POST['status'];
$dateTime = new DateTime();

$query = "INSERT INTO appointment(date_and_time,id_patient,id_clinic,status) VALUES ('" . $dateTime->format('Y-m-d H:i:s') . "','" . $patient . "','" . $clinic . "', '" . $status . "')";

$res = $DB->query($query);

if ($res) {
    $id = $DB->insert_id;
    header('location: /lifecare-site-main/admin/appointment/show.php?id=' . $id);
}
