<?php require '../../process/db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create patient</title>
</head>

<body>
    <?php
    $query = "SELECT * FROM user";
    $res = $DB->query($query);
    ?>
    <form method="POST" action="/lifecare-site/process/create_patient.php">
        <div>
            <label for="user">Name</label>
            <select name="user" id="user">
                <?php while ($data = $res->fetch_object()) {
                    echo '<option value="' . $data->id_user . '">' . $data->full_name . '</option>';
                } ?>
            </select>
        </div>
        <div>
            <label for="phone">Phone Number</label>
            <input type="text" name="phone" id="phone" placeholder="Enter Phone Number...">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Enter Email...">
        </div>
        <div>
            <label for="address">address</label>
            <input type="text" name="address" id="address" placeholder="Enter Email...">
        </div>
        <button type="submit">Save</button>
    </form>
</body>

</html>