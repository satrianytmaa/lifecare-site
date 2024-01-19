<?php
require '../../process/db.php';

$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Vaccine</title>
</head>

<body>
    <?php
    $query = "SELECT * FROM vaccine WHERE id_vaccine= $id ";
    $res = $DB->query($query);
    $data = $res->fetch_object();
    ?>

    <?php
    $query = "SELECT * FROM appointment WHERE id_appointment= $data->id_appointment ";
    $res = $DB->query($query);
    $appointment = $res->fetch_object();
    ?>

    <p>Id : <?php echo $data->id_vaccine ?></p>
    <p>Appointment Number : <?php echo $appointment->number ?></p>
    <p>Vaccine Type : <?php echo $data->name_vaccine ?></p>
    <p>Age : <?php echo $data->age ?></p>

    <button><a href="update.php?id=<?php echo $data->id_vaccine ?>">Update Vaccine</a></button>
    <button><a href="/../lifecare-site/process/delete_vaccine.php?id<?php echo $data->id_vaccine ?>">Delete Vaccine</a></button>


</body>

</html>