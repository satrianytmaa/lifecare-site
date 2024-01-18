<?php
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
    header('location: /lifecare-site/index.html');
}
