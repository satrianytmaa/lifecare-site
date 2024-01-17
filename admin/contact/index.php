<?php
require '../../process/db.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this contact?");
        }
    </script>
</head>

<body>

    <?php
    $query = "SELECT * FROM contact";
    $res = $DB->query($query);
    ?>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>subject</th>
                <th>problem</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($data = $res->fetch_object()) { ?>
                <?php
                $query = "SELECT * FROM user WHERE id_user = $data->user_id";
                $res_user = $DB->query($query);
                $user = $res_user->fetch_object();
                ?>
                <tr>
                    <td><?php echo $data->id_contact ?></td>
                    <td><?php echo $user->full_name ?></td>
                    <td><?php echo $data->email ?></td>
                    <td><?php echo $data->subject ?></td>
                    <td><?php echo $data->problem ?></td>
                    <td>
                        <a href="show.php?id=<?php echo $data->id_contact; ?>">Show</a>
                        <a href="update.php?id=<?php echo $data->id_contact; ?>">Edit</a>
                        <button onclick="return confirmDelete()"><a href="/lifecare-site/process/delete_contact.php?id=<?php echo $data->id_contact; ?>">Delete</a></button>

                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>