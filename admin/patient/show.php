<?php
require('/laragon/www/lifecare-site-main/process/db.php');
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Patient</title>
</head>

<body>
    <?php
    $query = "SELECT * FROM patient WHERE id_patient= $id ";
    $res = $DB->query($query);
    $data = $res->fetch_object();
    ?>
    <p>Id : <?php echo $data->id_patient ?></p>
    <p>Name : <?php echo $data->name_patient ?></p>
    <p>Phone Number : <?php echo $data->phone_number ?></p>
    <p>Email : <?php echo $data->email_patient ?></p>
    <p>Address : <?php echo $data->address ?></p>


</body>

</html>