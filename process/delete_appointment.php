<?php
session_start();
require('db.php');
$id = $_GET['id'];
$query = "DELETE from appointment where id_appointment='$id'";
$res = $DB->query($query);

if ($res) {
    // cek role session user, jika rolenya admin location ke admin begitu juga user
    // if(user_role === 'admin'){
    // tambah location setelah update
    // }else {
    // tambah location setelah update

    // }

    $user = $_SESSION['id_user'];
    $get_role = "SELECT * FROM user WHERE id_user = $user ";
    $res = $DB->query($get_role);
    $data = $res->fetch_object();

    if ($data->role === 'admin') {
        header('location: /lifecare-site/admin/appointment/index.php');
    } else {
        header('location: /lifecare-site/users/index.php');
    }
}
