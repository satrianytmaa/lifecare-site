<?php
require '../../process/db.php';

session_start();
$id = $_GET['id'];
// Store the ID in the session
$_SESSION['id_contact'] = $id;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Contact</title>
</head>

<body>
    <!-- buat query select select clinic -->
    <?php
    $query = "SELECT * FROM contact WHERE id_contact= $id ";
    $res = $DB->query($query);
    $data = $res->fetch_object();
    ?>

    <?php
    $query_user = "SELECT * FROM user";
    $res_user = $DB->query($query_user);
    ?>

    <form method="POST" action="/lifecare-site-main/process/update_contact.php">
        <div>
            <label for="user"> Name</label>
            <select name="user" id="user">

                <?php
                while ($user = $res_user->fetch_object()) {
                    $selected = ($data->user_id == $user->id_user) ? 'selected' : '';
                    echo '<option value="' . $user->id_user . '" ' . $selected . '>' . $user->full_name . '</option>';
                }
                ?>

            </select>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?php echo $data->email; ?>">
        </div>
        <div>
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" value="<?php echo $data->subject; ?>">
        </div>
        <div>
            <label for="problem">Problem</label>
            <input type="text" name="problem" id="problem" value="<?php echo $data->problem; ?>">
        </div>
        <button type="submit">Save</button>
    </form>
</body>

</html>