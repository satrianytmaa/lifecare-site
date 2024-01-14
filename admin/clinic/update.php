<?php
require('/laragon/www/lifecare-site-main/process/db.php');
session_start();
$id = $_GET['id'];
// Store the ID in the session
$_SESSION['clinic_id'] = $id;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Clinic</title>
</head>

<body>
    <!-- buat query select select clinic -->
    <?php
    $query = "SELECT * FROM clinic WHERE id_clinic= $id ";
    $res = $DB->query($query);
    $data = $res->fetch_object();
    ?>

    <form method="POST" action="/lifecare-site-main/process/update_clinic.php">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?php echo $data->name_clinic; ?>">
        </div>
        <div>
            <label for="address">Address</label>
            <input type="text" name="address" id="address" value="<?php echo $data->address; ?>">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?php echo $data->email_clinic; ?>">
        </div>
        <button type="submit">Save</button>
    </form>
</body>

</html>