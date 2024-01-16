<?php

require '../../process/db.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this appointment?");
        }
    </script>
</head>

<body>
    <button><a href="../../Index/create_appointment.php">Create Appointment</a></button>

    <?php
    $query = "SELECT * FROM appointment";
    $res = $DB->query($query);
    ?>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Patient Name</th>
                <th>Number</th>
                <th>Clinic</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($data = $res->fetch_object()) { ?>
                <?php
                $query_patient = "SELECT * FROM patient WHERE id_patient = $data->id_patient";
                $res_patient = $DB->query($query_patient);
                $patient = $res_patient->fetch_object();
                ?>
                <?php
                $query_clinic = "SELECT * FROM clinic WHERE id_clinic = $data->id_clinic";
                $res_clinic = $DB->query($query_clinic);
                $clinic = $res_clinic->fetch_object();
                ?>
                <tr>
                    <td><?php echo $data->id_appointment ?></td>
                    <td><?php echo $patient->name_patient ?></td>
                    <td><?php echo $data->number ?></td>
                    <td><?php echo $clinic->name_clinic ?></td>
                    <td><?php echo $data->status ?></td>
                    <td><?php echo $data->date_and_time ?></td>
                    <td>
                        <a href="show.php?id=<?php echo $data->id_appointment; ?>">Show</a>
                        <a href="update.php?id=<?php echo $data->id_appointment; ?>">Edit</a>
                        <button onclick="return confirmDelete()"><a href="/lifecare-site-main/process/delete_appointment.php?id=<?php echo $data->id_appointment; ?>">Delete</a></button>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</body>

</html>