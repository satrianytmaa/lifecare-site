<?php
require '../../process/db.php';

$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Browser Logo -->

    <!-- Browser Logo -->
    <link rel="icon" href="../../assets/icons/Logo.svg" />

    <!-- components -->
    <link rel="stylesheet" href="../../style/components/header.css" />
    <link rel="stylesheet" href="../../style/components/support.css" />
    <link rel="stylesheet" href="../../style/components/blog.css" />
    <link rel="stylesheet" href="../../style/components/footer.css" />

    <!-- Base Config -->
    <link rel="stylesheet" href="../../style/base_font.css" />
    <link rel="stylesheet" href="../../style/base_config.css" />
    <link rel="stylesheet" href="../../style/base_root.css" />
    <link rel="stylesheet" href="../../style/base_component.css" />

    <!-- Initial -->
    <link rel="stylesheet" href="../../style/contact_page.css" />
    <link rel="stylesheet" href="../../style/contact_responsive.css" />

    <!-- Responsive -->
    <link rel="stylesheet" href="../../style/admin/admin_default.css" />
    <link rel="stylesheet" href="../../style/admin/create.css">
    <link rel="stylesheet" href="../../style/admin/index.css">
    <link rel="stylesheet" href="../../style/admin/show.css">



    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <title>Users Tables - Detail</title>

</head>

<body>
    <?php
    $query = "SELECT * FROM user WHERE id_user= $id ";
    $res = $DB->query($query);
    $data = $res->fetch_object();
    ?>

    


    <div class="show-database user-show container-enable">

        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <a class="bread" href="/lifecare-site/admin/dashboard.php">Dashboard</a>
            <p>/</p>
            <a class="bread" href="/lifecare-site/admin/user/index.php">User</a>
            <p>/</p>
            <a class="bread current" href="/lifecare-site/admin/user/create.php">Show</a>
        </div>

        <!-- Header -->
        <div class="header">
            <div class="header-content">
                <h4>Detail of <?php echo $data->full_name ?></h4>
                <p>Detail information of the user, including name, location, and email.</p>
            </div>
        </div>

        <!-- Form Show -->
        <form method="POST" action="/lifecare-site/process/create_user.php">
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="id">No</label>
                    <p>Number used by the user.</p>
                </div>
                <input type="text" name="id" id="id" value="<?php echo $data->id_user ?>" readonly>
            </div>
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="username">Username</label>
                    <p>Username used by the user.</p>
                </div>
                <input type="text" name="username" id="username" value="<?php echo $data->username ?>" readonly>
            </div>
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="name">Name</label>
                    <p>Name of the user.</p>
                </div>
                <input type="text" name="name" id="name" value="<?php echo $data->full_name ?>" readonly>
            </div>
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="role">Role</label>
                    <p>Role of the user.</p>
                </div>
                <input type="text" name="role" id="role" value="<?php echo $data->role ?>" readonly>
            </div>
            <div class="form-wrap">
                <div class="form-headliner">
                    <label for="address">Location</label>
                    <p>Input the location of the user.</p>
                </div>
                <input type="text" name="address" id="address" value="<?php echo $data->address ?>" readonly>
            </div>
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="email">Email</label>
                    <p>Email of the user.</p>
                </div>
                <input type="text" name="email" id="email" value="<?php echo $data->email ?>" readonly>
            </div>
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="email">Phone Number</label>
                    <p>Phone number of the user.</p>
                </div>
                <input type="text" name="email" id="email" value="<?php echo $data->phone_number ?>" readonly>
            </div>
            
            <div class="create-action">
                <a class="btn-cancel-a" href="/lifecare-site/process/delete_user.php?id=<?php echo $data->id_user; ?>" onclick="return confirmDelete()">Delete</a>
                <a href="update.php?id=<?php echo $data->id_user; ?>" class="btn-create-a">Edit</a>

            </div>
    </form>
    </div>


</body>

<script>
    function confirmDelete() {
        var confirmation = confirm("Are you sure you want to delete this user?");

        if (confirmation) {
            // If the user confirms, redirect to the delete URL
            window.location.href = "/lifecare-site/process/delete_user.php?id=<?php echo $data->id_user; ?>";
        } else {
            // If the user cancels, do nothing or handle accordingly
        }
    }
</script>

</html>