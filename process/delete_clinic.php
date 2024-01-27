<?php
require('db.php');
$id = $_GET['id'];
$query = "DELETE from clinic where id_clinic='$id'";
$res = $DB->query($query);

if ($res) {
    header('location: /lifecare-site/admin/clinic/index.php');
}

if ($res) {
    // Data deleted successfully, show custom alert
    echo '<script>openCustomAlert("Data deleted successfully");</script>';
    header('location: /lifecare-site/admin/clinic/index.php');
    exit();
}


if ($res) {
    // Data added successfully, show custom alert
    echo '<script>openCustomAlert("Data added successfully");</script>';
    // Additional logic or redirection if needed
}
