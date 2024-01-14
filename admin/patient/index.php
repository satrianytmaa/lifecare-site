<?php
require('/laragon/www/lifecare-site-main/process/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient</title>

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this patient?");
        }
    </script>
</head>

<body>
    <button><a href="create.php">Create Patient</a></button>

    <?php
    $query = "SELECT * FROM patient";
    $res = $DB->query($query);
    ?>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>phone_number</th>
                <th>email</th>
                <th>address</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($data = $res->fetch_object()) { ?>
                <tr>
                    <td><?php echo $data->id_patient ?></td>
                    <td><?php echo $data->name_patient ?></td>
                    <td><?php echo $data->phone_number ?></td>
                    <td><?php echo $data->email_patient ?></td>
                    <td><?php echo $data->address ?></td>
                    <td>
                        <a href="show.php?id=<?php echo $data->id_patient; ?>">Show</a>
                        <a href="update.php?id=<?php echo $data->id_patient; ?>">Edit</a>
                        <button onclick="return confirmDelete()"><a href="/lifecare-site-main/process/delete_patient.php?id=<?php echo $data->id_patient; ?>">Delete</a></button>

                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>