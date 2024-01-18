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


    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <title>Users Tables - Detail</title>

    <style>

        .user-show .header{
            margin-bottom: 2em;
        }

        .user-show .header h4{
            font-size: 1.5em;
            font-weight: 600;
            margin-bottom: 0.5em;
        }

        .user-show .header p{
            font-size: 1em;
            font-weight: 400;
            color: #6E7191;
        }

        .user-show .user-data{
            background-color: #F6F8FB;
            padding: 1em;
            border-radius: 1em;
        }

        .user-show .user-data h5{
            font-size: 1em;
            font-weight: 600;
            margin-bottom: 0.5em;
        }

        .user-show .user-data p{
            font-size: 1em;
            font-weight: 400;
            color: #6E7191;
        }


    </style>

</head>

<body>

    <?php
    $query = "SELECT * FROM user WHERE id_user= $id ";
    $res = $DB->query($query);
    $data = $res->fetch_object();
    ?>
    <div class="user-database user-show container-enable">
        <!-- Header -->
        <div class="header">
            <h4>Detail Information of <?php echo $data->full_name ?></h4>
            <p>A list of all the users in your account including their name, title, email and role.</p>
        </div>

        <div class="user-data">
            <h5>Id : <?php echo $data->id_user ?></h5>
            <h5>Full Name : <?php echo $data->full_name ?></h5>
            <h5>Phone Number : <?php echo $data->phone_number ?></h5>
            <h5>Role : <?php echo $data->role ?></h5>
        </div>

        <div class="action-button">
            <a href="update.php?id=<?php echo $data->id_user; ?>">
            <button class="btn-normal">
                Edit
            </button>
            </a>
            <button class="btn-delete" onclick="return confirmDelete()">
                <a href="/lifecare-site/process/delete_user.php?id=<?php echo $data->id_user; ?>">Delete</a>
            </button>
        </div>
    </div>


</body>

</html>