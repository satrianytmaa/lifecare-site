<?php
require('db.php');
$id = $_GET['id'];
$query = "DELETE from contact where id_contact='$id'";
$res = $DB->query($query);

if ($res) {
    header('location: /lifecare-site-main/admin/contact/index.php');
}
