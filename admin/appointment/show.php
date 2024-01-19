<?php
require '../../process/db.php';

$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Patient</title>
</head>

<body>
    <?php
    $query = "SELECT * FROM appointment WHERE id_appointment= $id ";
    $res = $DB->query($query);
    $data = $res->fetch_object();
    ?>

    <?php
    $query = "SELECT * FROM user WHERE id_user = $data->id_user ";
    $res = $DB->query($query);
    $patient = $res->fetch_object();
    ?>

    <?php
    $query = "SELECT * FROM clinic WHERE id_clinic= $data->id_clinic ";
    $res = $DB->query($query);
    $clinic = $res->fetch_object();
    ?>
    <p>Id : <?php echo $data->id_appointment ?></p>
    <p>Full Name : <?php echo $patient->full_name ?></p>
    <p>Status : <?php echo $data->number ?></p>
    <p>Clinic : <?php echo $clinic->name_clinic ?></p>
    <p>Status : <?php echo $data->status ?></p>
    <p>Date : <?php echo $data->date_and_time ?></p>


</body>

</html>