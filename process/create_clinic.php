<?php
require('db.php');

$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];

$query = "INSERT INTO clinic(name_clinic,address,email_clinic) VALUES ('" . $name . "','" . $address . "','" . $email . "')";

$res = $DB->query($query);

if ($res) {
    $id = $DB->insert_id;
    header('location: /lifecare-site-main/admin/clinic/show.php?id=' . $id);
}
