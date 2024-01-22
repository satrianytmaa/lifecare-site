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

    <title>Clinics Tables - Detail</title>

    <style>
        .form-dropdown{
            width: 60%;
            padding: 1em;
            background-color: #f9f9f9;
            border: 1px solid #f2f2f2;
            border-radius: 8px;
            font-family: "Inter", sans-serif;
            font-size: 16px;
            font-weight: 400;
        }
    </style>

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
                <h4>Update <?php echo $data->full_name ?></h4>
                <p>Update the credentials data of the user.</p>
            </div>
        </div>

        <!-- Form Show -->
        <form method="POST" action="/lifecare-site/process/update_user.php">
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="username">Username</label>
                    <p>Username used by the user.</p>
                </div>
                <input type="text" name="username" id="username" value="<?php echo $data->username ?>">
            </div>
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="name">Name</label>
                    <p>Name of the user.</p>
                </div>
                <input type="text" name="name" id="name" value="<?php echo $data->full_name ?>">
            </div>
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="role">Role</label>
                    <p>Role of the user.</p>
                </div>
                <select name="role" id="role" class="form-dropdown">
                    <option value="user" <?php echo ($data->role === 'user') ? 'selected' : ''; ?>>User</option>
                    <option value="admin" <?php echo ($data->role === 'admin') ? 'selected' : ''; ?>>Admin</option>
                </select>
            </div>

            <div class="form-wrap">
                <div class="form-headliner">
                    <label for="address">Location</label>
                    <p>The location of the user.</p>
                </div>
                <input type="text" name="address" id="address" value="<?php echo $data->address ?>">
            </div>
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="email">Email</label>
                    <p>Email of the user.</p>
                </div>
                <input type="text" name="email" id="email" value="<?php echo $data->email ?>">
            </div>
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="phone_number">Phone Number</label>
                    <p>Phone number of the user.</p>
                </div>
                <input type="text" name="phone_number" id="phone_number" value="<?php echo $data->phone_number ?>">
            </div>
            <div class="create-action">
                <a class="btn-cancel-a" href="/lifecare-site/process/delete_user.php?id=<?php echo $data->id_clinic; ?>" onclick="return confirmDelete()">Delete</a>
                <button class="btn-create" type="submit">Update</button>

            </div>
    </form>
    </div>


</body>

</html>