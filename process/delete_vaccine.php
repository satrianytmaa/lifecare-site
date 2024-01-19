<?php
require('db.php');
$id = $_GET['id'];
$query = "DELETE from vaccine where id_vaccine='$id'";
$res = $DB->query($query);

if ($res) {
    // cek role session user, jika rolenya admin location ke admin begitu juga user
    // if(user_role === 'admin'){
    // tambah location setelah update
    // }else {
    // tambah location setelah update

    // }

    header('location: /lifecare-site/admin/vaccine/index.php');
}
