<?php
require('db.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id_appointment'];

    $query = "UPDATE appointment SET status = 'Paid' WHERE id_appointment = $id";
    $res = $DB->query($query);

    if ($res) {
        header("Location: /lifecare-site/users/appointment/paid.php?id=$id");
        exit;
    } else {
        echo "Failed to update status.";
    }
}
