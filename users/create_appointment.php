<?php require_once '../process/db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create patient</title>
</head>

<body>
    <?php
    $query = "SELECT * FROM clinic";
    $clinic = $DB->query($query);
    ?>
    <?php
    $query = "SELECT * FROM vaccine";
    $vaccine = $DB->query($query);
    ?>
    <form method="POST" action="/lifecare-site/process/create_appointment.php">
        <!-- <div>
            <label for="full_name">Full Name</label>
            <input type="text" name="full_name" id="full_name" placeholder="Enter full_name...">
        </div> -->
        <div>
            <label for="clinic">Clinic</label>
            <select name="clinic" id="clinic">
                <?php while ($data = $clinic->fetch_object()) {
                    echo '<option value="' . $data->id_clinic . '">' . $data->name_clinic . '</option>';
                } ?>
            </select>
        </div>
        <div>
            <label for="vaccine">Vaccine</label>
            <select name="vaccine" id="vaccine">
                <?php while ($data = $vaccine->fetch_object()) {
                    echo '<option value="' . $data->id_vaccine . '">' . $data->name_vaccine . '</option>';
                } ?>
            </select>
        </div>
        <button type="submit">Save</button>
    </form>
</body>

</html>