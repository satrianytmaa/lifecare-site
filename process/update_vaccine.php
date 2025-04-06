<?php
require('db.php');
session_start(); // Start the session

$id = $_SESSION['id_vaccine'];
$clinic = $_POST['clinic'];
$name = $_POST['name_vaccine'];
$manufacturer = $_POST['manufacturer'];
$dose = $_POST['dose_vaccine'];
$price = $_POST['price'];

$query = "UPDATE vaccine SET `name_vaccine`='$name', `manufacturer`='$manufacturer', `dose_vaccine`='$dose', `price`='$price', `id_clinic`='$clinic' WHERE `id_vaccine`='$id'";
$res = $DB->query($query);

if ($res) {
    header('location: /lifecare-site/admin/vaccine/show.php?id=' . $id);
}
