<?php
session_start(); // Start the session

require('db.php');

$full_name = $_POST['full_name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$password = $_POST['password'];

$query = "INSERT INTO user(full_name,email,address,phone_number,password,role) VALUES ('" . $full_name . "','" . $email . "','" . $address . "','" . $phone_number . "','" . $password . "','user')";

$res = $DB->query($query);


if ($res) {
    // Store the full_name in the session
    $_SESSION['full_name'] = $full_name;

    // Redirect to index.php
    header('location: /lifecare-site/users/index.php');
    exit();
} else {
    // Handle the case where the insertion query failed
    echo 'Error inserting user: ' . $DB->error;
}

// Close the database connection
$DB->close();
