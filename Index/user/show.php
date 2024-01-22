<!-- tampilkan data user isi btn edit dan hapus jg -->
<!-- http://localhost/lifecare-site-main/Index/user/show.php?id=id -->

<?php
require '../../process/db.php';

$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show User</title>

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this user?");
        }
    </script>
</head>

<body>
    <?php
    $query = "SELECT * FROM user WHERE id_user= $id ";
    $res = $DB->query($query);
    $data = $res->fetch_object();
    ?>
    <p>Id : <?php echo $data->id_user ?></p>
    <p>Id : <?php echo $data->username ?></p>
    <p>Full Name : <?php echo $data->full_name ?></p>
    <p>Address : <?php echo $data->address ?></p>
    <p>Email : <?php echo $data->email ?></p>
    <p>Phone Number : <?php echo $data->phone_number ?></p>
    <!-- <p>Password : <?php //echo $data->password 
                        ?></p> tidak perlu menapilkan password!-->

    <button><a href="update.php?id=<?php echo $data->id_user ?>">Update User</a></button>
</body>

</html>