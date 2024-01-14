<?php
require('db.php');
$id = $_GET['id'];
$query = "DELETE from clinic where id_clinic='$id'";
$res = $DB->query($query);

if ($res) {
    header('location: /lifecare-site-main/admin/clinic/index.php');
}
