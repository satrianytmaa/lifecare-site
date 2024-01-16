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
    $query = "SELECT * FROM patient WHERE id_patient= $data->id_patient ";
    $res = $DB->query($query);
    $patient = $res->fetch_object();
    ?>

    <?php
    $query = "SELECT * FROM clinic WHERE id_clinic= $data->id_clinic ";
    $res = $DB->query($query);
    $clinic = $res->fetch_object();
    ?>
    <p>Id : <?php echo $data->id_patient ?></p>
    <p>Patient Name : <?php echo $patient->name_patient ?></p>
    <p>Status : <?php echo $data->number ?></p>
    <p>Clinic : <?php echo $clinic->name_clinic ?></p>
    <p>Status : <?php echo $data->status ?></p>
    <p>Date : <?php echo $data->date_and_time ?></p>


</body>

</html>