<?php
require '../../process/db.php';

session_start();
$id = $_GET['id'];
// Store the ID in the session
$_SESSION['id_patient'] = $id;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Appointment</title>
</head>

<body>
    <!-- buat query select select clinic -->
    <?php
    $query = "SELECT * FROM appointment WHERE id_appointment= $id ";
    $res = $DB->query($query);
    $data = $res->fetch_object();
    ?>

    <?php
    $query_patient = "SELECT * FROM patient";
    $res_patient = $DB->query($query_patient);
    // $patient = $res->fetch_object();
    ?>

    <?php
    $query_clinic = "SELECT * FROM clinic ";
    $res_clinic = $DB->query($query_clinic);
    // $clinic = $res->fetch_object();
    ?>

    <form method="POST" action="/lifecare-site/process/update_appointment.php">
        <div>
            <label for="patient">Patient Name</label>
            <select name="patient" id="patient">

                <?php
                while ($patient = $res_patient->fetch_object()) {
                    $selected = ($data->id_patient == $patient->id_patient) ? 'selected' : '';
                    echo '<option value="' . $patient->id_patient . '" ' . $selected . '>' . $patient->name_patient . '</option>';
                }
                ?>

            </select>
        </div>
        <div>
            <label for="clinic">Clinic</label>
            <select name="clinic" id="clinic">

                <?php

                while ($clinic = $res_clinic->fetch_object()) {
                    $selected = ($data->id_user == $clinic->id_clinic) ? 'selected' : '';
                    echo '<option value="' . $clinic->id_clinic . '" ' . $selected . '>' . $clinic->name_clinic . '</option>';
                }
                ?>

            </select>
        </div>
        <div>
            <label for="status">Status</label>
            <input type="text" name="status" id="status" value="<?php echo $data->status; ?>">
        </div>
        <div>
            <label for="date">Date</label>
            <input type="text" name="date" id="date" value="<?php echo $data->date_and_time; ?>">
        </div>
        <button type="submit">Save</button>
    </form>
</body>

</html>