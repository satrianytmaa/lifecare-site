<?php

require '../../process/db.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccine</title>

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this vaccine?");
        }
    </script>
</head>

<body>

    <?php
    $query = "SELECT * FROM vaccine";
    $res = $DB->query($query);
    ?>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Appointment Number</th>
                <th>vaccine Type</th>
                <th>Age</th>

            </tr>
        </thead>
        <tbody>
            <?php while ($data = $res->fetch_object()) { ?>
                <?php
                $query_app = "SELECT * FROM appointment WHERE id_appointment = $data->id_appointment";
                $res_app = $DB->query($query_app);
                $appointment = $res_app->fetch_object();
                ?>
                <tr>
                    <td><?php echo $data->id_vaccine ?></td>
                    <td><?php echo $appointment->number ?></td>
                    <td><?php echo $data->name_vaccine ?></td>
                    <td><?php echo $data->age ?></td>
                    <td>
                        <a href="show.php?id=<?php echo $data->id_vaccine; ?>">Show</a>
                        <a href="update.php?id=<?php echo $data->id_vaccine; ?>">Edit</a>
                        <button onclick="return confirmDelete()"><a href="/lifecare-site-main/process/delete_vaccine.php?id=<?php echo $data->id_vaccine; ?>">Delete</a></button>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</body>

</html>