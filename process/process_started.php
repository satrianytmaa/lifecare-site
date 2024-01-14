<?php
require('db.php');

$nameErr = $phoneErr = $passwordErr = "";

$full_name = $_POST['full_name'];
$phone_number = $_POST['phone_number'];
// $role = $_POST['phone_number']; role pasti admin
$password = $_POST['password'];

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (empty($full_name)) {
//         $nameErr = "Full Name is required";
//     } else {
//         $full_name;
//     }

//     if (empty($phone_number)) {
//         $phoneErr = "Phone Number is required";
//     } else {
//         $phone_number;
//     }

//     if (empty($password)) {
//         $passwordErr = "Password is required";
//     } else {
//         $password;
//     }
// }
$query = "INSERT INTO user(full_name,phone_number,password,role) VALUES ('" . $full_name . "','" . $phone_number . "','" . $password . "','user')";

$res = $DB->query($query);

if ($res) {
    header('location: /lifecare-site-main/index.html');
}
