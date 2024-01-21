<?php
session_start(); // Start the session

require('db.php');

$username = $_POST['username'];
$full_name = $_POST['full_name'];
$phone_number = $_POST['phone_number'];
$password = md5($_POST['password']); // Hash the password using MD5

$query = "INSERT INTO user(username, full_name, password, role) VALUES ('" . $username . "','" . $full_name . "','" . $password . "','user')";

$res = $DB->query($query);

if ($res) {
    // Store the full_name in the session
    $_SESSION['username'] = $username;

    // Redirect to index.php
    header('location: ../users/index.php');
    exit();
} else {
    // Handle the case where the insertion query failed
    echo 'Error inserting user: ' . $DB->error;
}

// Close the database connection
$DB->close();
