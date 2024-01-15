<?php
require('db.php');


$user = $_POST['fullName'];
$select_name = $DB->query("SELECT * FROM user WHERE LOWER(full_name) LIKE LOWER('%$user%')");
$data = $select_name->fetch_object();
$name = $data->id_user;
$subject = $_POST['subject'];
$email = $_POST['email'];
$problem = $_POST['problem'];

$query = "INSERT INTO contact(email,subject,problem,user_id) VALUES ('" . $email . "','" . $subject . "','" . $problem . "', '" . $name . "')";

$res = $DB->query($query);

// if ($res) {
//     $id = $DB->insert_id;
//     header('location: /lifecare-site-main/admin/patient/show.php?id=' . $id);
// }
