<?php
require '../../process/db.php';

$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Contact</title>
</head>

<body>
    <?php
    $query = "SELECT * FROM contact WHERE id_contact= $id ";
    $res = $DB->query($query);
    $data = $res->fetch_object();
    ?>

    <?php
    $query = "SELECT * FROM user WHERE id_user= $data->user_id ";
    $res = $DB->query($query);
    $user = $res->fetch_object();
    ?>

    <p>Id : <?php echo $data->id_contact ?></p>
    <p>Name : <?php echo $user->full_name ?></p>
    <p>Email : <?php echo $data->email ?></p>
    <p>Subject : <?php echo $data->subject ?></p>
    <p>Problem : <?php echo $data->problem ?></p>


</body>

</html>