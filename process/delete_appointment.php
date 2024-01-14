<?php
require('db.php');
$id = $_GET['id'];
$query = "DELETE from appointment where id_appointment='$id'";
$res = $DB->query($query);

if ($res) {
    header('location: /lifecare-site-main/admin/appointment/index.php');
}
