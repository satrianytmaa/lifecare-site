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
    $query_clinic = "SELECT * FROM clinic";
    $res_clinic = $DB->query($query_clinic);
    $clinic = $res_clinic->fetch_object();
    ?>

    <form method="POST" action="/lifecare-site/process/update_vaccine.php">
        <div>
            <label for="name_vaccine">Name Vaccine</label>
            <input type="text" name="name_vaccine" id="name_vaccine" value="<?php echo $data->name_vaccine; ?>">
        </div>
        <div>
            <label for="clinic">Clinic</label>
            <select name="clinic" id="clinic">

                <?php

                while ($clinic = $res_clinic->fetch_object()) {
                    $selected = ($data->id_clinic == $clinic->id_clinic) ? 'selected' : '';
                    echo '<option value="' . $clinic->id_clinic . '" ' . $selected . '>' . $clinic->name_clinic . '</option>';
                }
                ?>

            </select>
        </div>

        <div>
            <label for="manufacturer">Manufacturer</label>
            <input type="text" name="manufacturer" id="manufacturer" value="<?php echo $data->manufacturer; ?>">
        </div>
        <div>
            <label for="dose_vaccine">Dose Vaccine</label>
            <input type="text" name="dose_vaccine" id="dose_vaccine" value="<?php echo $data->dose_vaccine; ?>">
        </div>
        <button type="submit">Save</button>
    </form>
</body>

</html>