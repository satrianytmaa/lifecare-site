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

    <title>Vaccine Detail</title>

    <style>
        .user-show .header {
            margin-bottom: 2em;
        }

        .user-show .header h4 {
            font-size: 1.5em;
            font-weight: 600;
            margin-bottom: 0.5em;
        }

        .user-show .header p {
            font-size: 1em;
            font-weight: 400;
            color: #6E7191;
        }

        .user-show .user-data {
            background-color: #F6F8FB;
            padding: 1em;
            border-radius: 1em;
        }

        .user-show .user-data h5 {
            font-size: 1em;
            font-weight: 600;
            margin-bottom: 0.5em;
        }

        .user-show .user-data p {
            font-size: 1em;
            font-weight: 400;
            color: #6E7191;
        }
    </style>

</head>

<body>
    <?php
    $query = "SELECT * FROM vaccine WHERE id_vaccine= $id ";
    $res = $DB->query($query);
    $data = $res->fetch_object();
    ?>

    <?php
    $query = "SELECT * FROM clinic WHERE id_clinic= $data->id_clinic ";
    $res = $DB->query($query);
    $clinic = $res->fetch_object();
    ?>

    <div class="user-database user-show container-enable">
        <!-- Header -->
        <div class="header">
            <h4>Vaccine Detail</h4>
        </div>

        <div class="user-data">
            <h5>Id : <?php echo $data->id_vaccine ?></h5>
            <h5>Vaccine Name : <?php echo $data->name_vaccine ?></h5>
            <h5>Clinic Name : <?php echo $data->name_vaccine ?></h5>
            <h5>Clinic Name : <?php echo $clinic->name_clinic ?></h5>
            <h5>Manufacturer : <?php echo $data->manufacturer ?></h5>
            <h5>Dose Vaccine : <?php echo $data->dose_vaccine ?></h5>
        </div>

        <div class="action-button">
            <a href="update.php?id=<?php echo $data->id_vaccine ?>">
                <button class="btn-normal">
                    Edit
                </button>
            </a>
            <button class="btn-delete" onclick="return confirmDelete()">
                <a href="/../lifecare-site/process/delete_vaccine.php?id=<?php echo $id ?>">Delete</a>
            </button>
        </div>
    </div>


</body>

</html>