<?php
require '../../process/db.php';

session_start();
$id = $_GET['id'];
// Store the ID in the session
$_SESSION['id_vaccine'] = $id;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Vaccine</title>
</head>

<body>
    <!-- buat query select select clinic -->
    <?php
    $query = "SELECT * FROM vaccine WHERE id_vaccine= $id ";
    $res = $DB->query($query);
    $data = $res->fetch_object();
    ?>

    <?php
    $query_appointment = "SELECT * FROM appointment WHERE id_appointment= $data->id_appointment";
    $res_appointment = $DB->query($query_appointment);
    $appointment = $res_appointment->fetch_object();
    ?>

    <form method="POST" action="/lifecare-site-main/process/update_vaccine.php">
        <div>
            <label for="appointment">Appointment Number</label>
            <input type="text" name="appointment" id="appointment" value="<?php echo $appointment->number; ?>">
        </div>

        <div>
            <label for="vaccine">Vaccine Type</label>
            <input type="text" name="vaccine" id="vaccine" value="<?php echo $data->name_vaccine; ?>">
        </div>
        <div>
            <label for="age">Age</label>
            <input type="text" name="age" id="age" value="<?php echo $data->age; ?>">
        </div>
        <button type="submit">Save</button>
    </form>
</body>

</html>