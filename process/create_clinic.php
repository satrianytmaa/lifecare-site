<?php
require('db.php');

$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];

function incrementNumber($number)
{
    return substr($number, 0, 5) . sprintf('%01d', intval(substr($number, 5)) + 1);
}

$clinic = $DB->query("SELECT * FROM clinic ORDER BY id_clinic DESC LIMIT 1 ");
$clinic_data = $clinic->fetch_object();
if ($clinic_data === null || $clinic_data->tag === null || $clinic_data->tag === '') {
    $newNumber = incrementNumber('CLNC-0');
} else {
    $newNumber = incrementNumber($clinic_data->tag);
}
$query = "INSERT INTO clinic(name_clinic,address,email_clinic,tag) VALUES ('" . $name . "','" . $address . "','" . $email . "','" . $newNumber . "')";

$res = $DB->query($query);

if ($res) {
    $id = $DB->insert_id;
    header('location: /lifecare-site/admin/clinic/show.php?id=' . $id);
}
