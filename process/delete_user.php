<?php
require('db.php');
$id = $_GET['id'];
$query = "DELETE from user where id_user='$id'";
$res = $DB->query($query);

if ($res) {
    header('location: /lifecare-site/admin/user/index.php');
}
