<?php
require('db.php');

// $name = $_POST['name'];
// $role = $_POST['phone_number']; role pasti admin
$app = ['app'];
$select_appointmet = $DB->query("SELECT * FROM appointment WHERE LOWER(number) LIKE LOWER('%$app%')");
$data = $select_appointmet->fetch_object();
$appointment = $data->id_appointment;

$phone_number = $_POST['phone_number'];
$id_card = $_POST['id_card'];

$query = "INSERT INTO vaccine(id_appointment,name_vaccine,manufacturer,age,dose_vaccine) VALUES ('" . $full_name . "','" . $phone_number . "','" . $password . "','admin')";

$res = $DB->query($query);

if ($res) {
    header('location: /lifecare-site/index.html');
}
