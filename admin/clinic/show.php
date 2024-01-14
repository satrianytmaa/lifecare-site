<?php
require('/laragon/www/lifecare-site-main/process/db.php');
session_start();
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Clinic</title>
</head>

<body>
    <?php
    $query = "SELECT * FROM clinic WHERE id_clinic= $id ";
    $res = $DB->query($query);
    $data = $res->fetch_object();
    ?>
    <p>Id : <?php echo $data->id_clinic ?></p>
    <p>Name : <?php echo $data->name_clinic ?></p>
    <p>Address : <?php echo $data->address ?></p>
    <p>Email : <?php echo $data->email_clinic ?></p>


</body>

</html>