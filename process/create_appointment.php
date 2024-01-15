<?php
require('db.php');


$name = $_POST['full_name'];
$select_name = $DB->query("SELECT * FROM patient WHERE LOWER(name_patient) LIKE LOWER('%$name%') ORDER BY id_patient DESC LIMIT 1 ");
$data = $select_name->fetch_object();
$patient = $data->id_patient;
// $patient = $_POST['patient'];
$clinic = $_POST['clinic'];
$status = $_POST['status'];
$dateTime = new DateTime();

function incrementNumber($number)
{
    return substr($number, 0, 2) . sprintf('%03d', intval(substr($number, 2)) + 1);
}

$appointment = $DB->query("SELECT * FROM appointment ORDER BY id_patient DESC LIMIT 1 ");
$data = $appointment->fetch_object();

if ($data->number === null || $data->number === '') {
    $newNumber = incrementNumber('AP000');
} else {
    $newNumber = incrementNumber($data->number);
}

$query = "INSERT INTO appointment(date_and_time,id_patient,id_clinic,status,number) VALUES ('" . $dateTime->format('Y-m-d H:i:s') . "','" . $patient . "','" . $clinic . "', '" . $status . "', '" . $newNumber . "')";
$res = $DB->query($query);

if ($res) {
    $id = $DB->insert_id;
    header('location: /lifecare-site-main/admin/appointment/show.php?id=' . $id);
}
