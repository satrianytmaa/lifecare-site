<?php
require '../../process/db.php';

$sql = "SELECT vaccine.*, clinic.name_clinic
        FROM vaccine
        INNER JOIN clinic ON vaccine.id_clinic = id_clinic";

$res = $DB->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccine Information</title>
    <!-- Add any additional styles or scripts here -->
</head>

<body>

    <h2>Vaccine Information</h2>

    <table border="1">
        <thead>
            <tr>
                <th>Vaccine ID</th>
                <th>Vaccine Name</th>
                <th>Clinic Name</th>
                <!-- Add more columns as needed -->
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $res->fetch(PDO::FETCH_ASSOC)) : ?>
                <tr>
                    <td><?= $row['id_vaccine'] ?></td>
                    <td><?= $row['name_vaccine'] ?></td>
                    <td><?= $row['name_clinic'] ?></td>
                    <!-- Add more cells as needed -->
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</body>

</html>
