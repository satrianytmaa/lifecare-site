<?php
require('db.php');

$content = $_POST['content'];
$category = $_POST['category'];
$date = $_POST['date'];
$user_id = $_POST['user_id'];

$query = "INSERT INTO blog(content,category,date,user_id) VALUES ('" . $content . "','" . $category . "','" . $date . "','" . $user_id . "')";

$res = $DB->query($query);

if ($res) {
    $id = $DB->insert_id;
    header('location: /lifecare-site/admin/blog/show.php?id=' . $id);
}
