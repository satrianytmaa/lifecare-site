<?php
require('db.php');
$id = $_GET['id'];
$query = "DELETE from patient where id_patient='$id'";
$res = $DB->query($query);

if ($res) {
    header('location: /lifecare-site-main/admin/patient/index.php');
}
