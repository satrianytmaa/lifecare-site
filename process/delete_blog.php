<?php
require('db.php');
$id = $_GET['id_blog'];
$query = "DELETE from blog where id_blog='$id'";
$res = $DB->query($query);

if ($res) {
    header('location: /lifecare-site/admin/blog/index.php');
}
