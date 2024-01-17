<?php
require('db.php');
$id = $_GET['id'];
$query = "DELETE from vaccine where id_vaccine='$id'";
$res = $DB->query($query);

if ($res) {
    header('location: /lifecare-site-main/admin/vaccine/index.php');
}
