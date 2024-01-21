<?php
require '../../process/db.php';

session_start();
$id = $_GET['id'];
// Store the ID in the session
$_SESSION['id_blog'] = $id;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update blog</title>
</head>

<body>
    <!-- buat query select select clinic -->
    <?php
    $query = "SELECT * FROM blog WHERE id_blog= $id ";
    $res = $DB->query($query);
    $data = $res->fetch_object();
    ?>

    <?php
    $query_user = "SELECT * FROM user WHERE id_user= $data->user_id";
    $res_user = $DB->query($query_user);
    $user = $res_user->fetch_object();
    ?>

    <form method="POST" action="/lifecare-site/process/update_blog.php">
        <div>
            <div>
                <label for="content">Content</label>
                <input type="textarea" name="content" id="content" value="<?php echo $data->content; ?>">
            </div>
        </div>
        <div>
            <label for="category">Category</label>
            <input type="text" name="category" id="category" value="<?php echo $data->category; ?>">
        </div>
        <div>
            <label for="date">Date</label>
            <input type="text" name="date" id="date" value="<?php echo $data->date; ?>">
        </div>
        <div>
            <label for="user_id">user</label>
            <input type="text" name="user_id" id="user_id" value="<?php echo $user->full_name; ?>">
        </div>
        <button type="submit">Save</button>
    </form>
</body>

</html>