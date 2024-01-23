<?php
require('db.php');
session_start(); // Start the session

$id = $_SESSION['id_vaccine'];
$name = $_POST['name_vaccine'];
$manufacturer = $_POST['manufacturer'];
$dose = $_POST['dose_vaccine'];

$query = "UPDATE vaccine SET `name_vaccine`='$name', `manufacturer`='$manufacturer', `dose_vaccine`='$dose' WHERE `id_vaccine`='$id'";
$res = $DB->query($query);

if ($res) {
    header('location: /lifecare-site/admin/vaccine/index.php');
}
