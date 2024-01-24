<?php
require('db.php');

$select_clinic = $DB->query("SELECT * FROM clinic WHERE LOWER(name_clinic) LIKE LOWER('%$name_clinic%')");
$data = $select_clinic->fetch_object();
$clinic = $data->id_clinic;

$name_vaccine = $_POST['name_vaccine'];
$manufacturer = $_POST['manufacturer'];
$dose_vaccine = $_POST['dose_vaccine'];

$query = "INSERT INTO vaccine(name_vaccine, manufacturer, dose_vaccine, id_clinic) VALUES ('" . $name_vaccine . "','" . $manufacturer . "','" . $dose_vaccine . "','" . $clinic . "')";

$res = $DB->query($query);

if ($res) {
    $id = $DB->insert_id;
    header('location: /lifecare-site/admin/vaccine/show.php?id=' . $id);
}

// <?php
// require('db.php');


// $user = $_POST['fullName'];
// $select_name = $DB->query("SELECT * FROM user WHERE LOWER(full_name) LIKE LOWER('%$user%')");
// $data = $select_name->fetch_object();
// $name = $data->id_user;
// $subject = $_POST['subject'];
// $email = $_POST['email'];
// $problem = $_POST['problem'];

// $query = "INSERT INTO contact(email,subject,problem,user_id) VALUES ('" . $email . "','" . $subject . "','" . $problem . "', '" . $name . "')";

// $res = $DB->query($query);

// // if ($res) {
// //     $id = $DB->insert_id;
// //     header('location: /lifecare-site/admin/patient/show.php?id=' . $id);
// // }
