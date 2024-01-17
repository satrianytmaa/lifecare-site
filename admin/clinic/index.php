<?php
require '../../process/db.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic</title>

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this clinic?");
        }
    </script>
</head>

<body>
    <button><a href="create.php">Create Clinic</a></button>

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
                        <button onclick="return confirmDelete()"><a href="/lifecare-site/process/delete_clinic.php?id=<?php echo $data->id_clinic; ?>">Delete</a></button>

                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>