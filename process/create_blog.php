<?php
require('db.php');

$content = $_POST['content'];
$category = $_POST['category'];
$date = $_POST['date'];

$user = $_POST['user_id']; //ambil full_name dari form
//cari id_user di user berdasarkan full_name nya
$select_name = $DB->query("SELECT * FROM user WHERE LOWER(full_name) LIKE LOWER('%$user%') ORDER BY id_user DESC LIMIT 1 ");
$data = $select_name->fetch_object();
$user_id = $data->id_user;

$query = "INSERT INTO blog(content,category,date,user_id) VALUES ('" . $content . "','" . $category . "','" . $date . "','" . $user_id . "')";

$res = $DB->query($query);

if ($res) {
    $id = $DB->insert_id;
    header('location: /lifecare-site/admin/blog/show.php?id=' . $id);
}
