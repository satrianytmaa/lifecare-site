<?php
require('db.php');

$name_vaccine = $_POST['name_vaccine'];
$manufacturer = $_POST['manufacturer'];
$dose_vaccine = $_POST['dose_vaccine'];

$query = "INSERT INTO vaccine(name_vaccine, manufacturer, dose_vaccine) VALUES ('" . $name_vaccine . "','" . $manufacturer . "','" . $dose_vaccine . "')";

$res = $DB->query($query);

if ($res) {
    $id = $DB->insert_id;
    header('location: /lifecare-site/admin/vaccine/show.php?id=' . $id);
}
