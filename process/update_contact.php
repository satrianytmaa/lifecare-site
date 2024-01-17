<?php
require('db.php');
session_start(); // Start the session

$id = $_SESSION['id_contact'];
$user = $_POST['user'];

$email = $_POST['email'];
$subject = $_POST['subject'];
$problem = $_POST['problem'];

$query = "UPDATE contact SET `email`='$email', `subject`='$subject', `problem`='$problem', `user_id`='$user'WHERE `id_contact`='$id'";
$res = $DB->query($query);


if ($res) {
    header('location: /lifecare-site/admin/contact/show.php?id=' . $id);
}
