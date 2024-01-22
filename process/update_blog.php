<?php
require('db.php');
session_start(); // Start the session

$id = $_SESSION['id_blog'];
$content = $_POST['content'];
$category = $_POST['category'];
$date = $_POST['date'];

$user = $_POST['user_id']; //ambil full_name dari form
//cari id_user di user berdasarkan full_name nya
$select_name = $DB->query("SELECT * FROM user WHERE LOWER(full_name) LIKE LOWER('%$user%') ORDER BY id_user DESC LIMIT 1 ");
$data = $select_name->fetch_object();
$user_id = $data->id_user;

$query = "UPDATE blog SET `content`='$content', `category`='$category', `date`='$date', `user_id`='$user_id' WHERE `id_blog`='$id'";
$res = $DB->query($query);

if ($res) {
    header('location: /lifecare-site/admin/blog/show.php?id=' . $id);
}
