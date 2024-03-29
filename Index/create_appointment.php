<?php require_once '../process/db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create appointment</title>
</head>

<body>
    <?php
    $query = "SELECT * FROM clinic";
    $clinic = $DB->query($query);
    ?>
    <form method="POST" action="/lifecare-site/process/create_appointment.php">
        <div>
            <label for="name">Full Name</label>
            <input type="text" name="name" id="name" placeholder="Enter full_name...">
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