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
    <title>Update Patient</title>
</head>

<body>
    <!-- buat query select select clinic -->
    <?php
    $query = "SELECT * FROM patient WHERE id_patient= $id ";
    $res = $DB->query($query);
    $data = $res->fetch_object();
    ?>

    <?php
    $query = "SELECT * FROM user";
    $res_user = $DB->query($query);
    ?>

    <form method="POST" action="/lifecare-site/process/update_patient.php">
        <div>
            <label for="user">Name</label>
            <select name="user" id="user">

                <?php

                while ($user = $res_user->fetch_object()) {
                    $selected = ($data->id_user == $user->id_user) ? 'selected' : '';
                    echo '<option value="' . $user->id_user . '" ' . $selected . '>' . $user->full_name . '</option>';
                }
                ?>

            </select>
        </div>
        <div>
            <label for="phone">Phone Number</label>
            <input type="text" name="phone" id="phone" value="<?php echo $data->phone_number; ?>">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?php echo $data->email_patient; ?>">
        </div>
        <div>
            <label for="address">address</label>
            <input type="text" name="address" id="address" value="<?php echo $data->address; ?>">
        </div>
        <button type="submit">Save</button>
    </form>
</body>

</html>