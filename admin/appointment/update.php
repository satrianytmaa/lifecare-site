<?php
require '../../process/db.php';

session_start();
$id = $_GET['id'];
// Store the ID in the session
$_SESSION['id_appointment'] = $id;
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
    $query_patient = "SELECT * FROM user WHERE id_user= $data->id_user";
    $res_patient = $DB->query($query_patient);
    $patient = $res_patient->fetch_object();
    ?>

    <?php
    $query_clinic = "SELECT * FROM clinic ";
    $res_clinic = $DB->query($query_clinic);
    // $clinic = $res->fetch_object();
    ?>

    <form method="POST" action="/lifecare-site/process/update_appointment.php">
        <div>
            <div>
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" value="<?php echo $patient->full_name; ?>">
            </div>
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