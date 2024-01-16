<?php
require '../../process/db.php';

session_start();
$id = $_GET['id'];
// Store the ID in the session
$_SESSION['id_user'] = $id;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>

<body>
    <!-- buat query select select clinic -->
    <?php
    $query = "SELECT * FROM user WHERE id_user= $id ";
    $res = $DB->query($query);
    $data = $res->fetch_object();
    ?>

    <form method="POST" action="/lifecare-site-main/process/update_user.php">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?php echo $data->full_name; ?>">
        </div>
        <div>
            <label for="phone">Phone Number</label>
            <input type="text" name="phone" id="phone" value="<?php echo $data->phone_number; ?>">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="<?php echo $data->password; ?>">
        </div>
        <button type="submit">Save</button>
    </form>
</body>

</html>