<?php
require '../../process/db.php';

$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show blog</title>
</head>

<body>
    <?php
    $query = "SELECT * FROM blog WHERE id_blog= $id ";
    $res = $DB->query($query);
    $data = $res->fetch_object();
    ?>

    <?php
    $query = "SELECT * FROM user WHERE id_user = $data->user_id ";
    $res = $DB->query($query);
    $user = $res->fetch_object();
    ?>

    <p>Id : <?php echo $data->id_blog ?></p>
    <p>Content : <?php echo $data->content ?></p>
    <p>Category : <?php echo $data->category ?></p>
    <p>Date : <?php echo $data->date ?></p>
    <p>User : <?php echo $user->full_name ?></p>




</body>

</html>