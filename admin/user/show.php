<?php
require '../../process/db.php';

$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show User</title>
</head>

<body>
    <?php
    $query = "SELECT * FROM user WHERE id_user= $id ";
    $res = $DB->query($query);
    $data = $res->fetch_object();
    ?>
    <p>Id : <?php echo $data->id_user ?></p>
    <p>Full Name : <?php echo $data->full_name ?></p>
    <p>Address : <?php echo $data->address ?></p>
    <p>Email : <?php echo $data->email ?></p>
    <p>Phone Number : <?php echo $data->phone_number ?></p>
    <p>Password : <?php echo $data->password ?></p>


</body>

</html>