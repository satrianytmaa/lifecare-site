<?php require('/laragon/www/lifecare-site-main/process/db.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create patient</title>
</head>

<body>
    <?php
    $query = "SELECT * FROM patient";
    $patient = $DB->query($query);
    ?>
    <?php
    $query = "SELECT * FROM clinic";
    $clinic = $DB->query($query);
    ?>
    <form method="POST" action="/lifecare-site-main/process/create_appointment.php">
        <div>
            <label for="patient">Patient</label>
            <select name="patient" id="patient">
                <?php while ($data = $patient->fetch_object()) {
                    echo '<option value="' . $data->id_patient . '">' . $data->name_patient . '</option>';
                } ?>
            </select>
        </div>
        <div>
            <label for="clinic">Clinic</label>
            <select name="clinic" id="clinic">
                <?php while ($data = $clinic->fetch_object()) {
                    echo '<option value="' . $data->id_clinic . '">' . $data->name_clinic . '</option>';
                } ?>
            </select>
        </div>
        <div>
            <label for="status">Status</label>
            <input type="text" name="status" id="status" placeholder="Enter status...">
        </div>
        <button type="submit">Save</button>
    </form>
</body>

</html>