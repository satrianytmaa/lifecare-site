<?php
require('db.php');


$user = $_POST['user'];
$select_name = $DB->query("SELECT full_name FROM user WHERE id_user= $user");
$data = $select_name->fetch_object();
$name = $data->full_name;
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];

$query = "INSERT INTO patient(id_user,name_patient,phone_number,email_patient,address) VALUES ('" . $user . "','" . $name . "','" . $phone . "', '" . $email . "', '" . $address . "')";

$res = $DB->query($query);

if ($res) {
    $id = $DB->insert_id;
    header('location: /lifecare-site/admin/patient/show.php?id=' . $id);
}
