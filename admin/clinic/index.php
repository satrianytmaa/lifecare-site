<?php
require('/laragon/www/lifecare-site-main/process/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $query = "SELECT * FROM clinic";
    $res = $DB->query($query);
    ?>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>address</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($data = $res->fetch_object()) { ?>
                <tr>
                    <td><?php echo $data->id_clinic ?></td>
                    <td><?php echo $data->name_clinic ?></td>
                    <td><?php echo $data->address ?></td>
                    <td><?php echo $data->email_clinic ?></td>
                    <td>
                        <a href="show.php?id=<?php echo $data->id_clinic; ?>">Show</a>
                        <a href="update.php?id=<?php echo $data->id_clinic; ?>">Edit</a>
                        <a href="/lifecare-site-main/process/delete_clinic.php?id=<?php echo $data->id_clinic; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>