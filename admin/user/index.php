<?php
require '../../process/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this user?");
        }
    </script>
</head>

<body>
    <!-- nampilin user role admin saja -->
    <?php
    $query = "SELECT * FROM user WHERE role = 'admin'";
    $res = $DB->query($query);
    ?>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Full Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Password</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($data = $res->fetch_object()) { ?>
                <tr>
                    <td><?php echo $data->id_user ?></td>
                    <td><?php echo $data->full_name ?></td>
                    <td><?php echo $data->address ?></td>
                    <td><?php echo $data->email ?></td>
                    <td><?php echo $data->phone_number ?></td>
                    <td><?php echo $data->password ?></td>
                    <td><?php echo $data->role ?></td>
                    <td>
                        <a href="show.php?id=<?php echo $data->id_user; ?>">Show</a>
                        <a href="update.php?id=<?php echo $data->id_user; ?>">Edit</a>
                        <button onclick="return confirmDelete()"> <a href="/lifecare-site-main/process/delete_user.php?id=<?php echo $data->id_user; ?>">Delete</a></button>

                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>