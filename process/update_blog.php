<?php
require('db.php');
session_start(); // Start the session

$id = $_SESSION['id_blog'];
$content = $_POST['content'];
$category = $_POST['category'];
$date = $_POST['date'];
$user_id = $_POST['user_id'];

$query = "UPDATE blog SET `content`='$content', `category`='$category', `date`='$date', `user_id`='$user_id' WHERE `id_blog`='$id'";
$res = $DB->query($query);

if ($res) {
    header('location: /lifecare-site/admin/blog/show.php?id=' . $id);
}
