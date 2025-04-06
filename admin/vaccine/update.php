<?php
require '../../process/db.php';
session_start();
$id = $_GET['id'];

$_SESSION['id_vaccine'] = $id;

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

    <title>Vaccine Update </title>

</head>

<body>
    <?php
    $query = "SELECT * FROM vaccine WHERE id_vaccine= $id ";
    $res = $DB->query($query);
    $data = $res->fetch_object();
    ?>
    <?php
    $query_clinic = "SELECT * FROM clinic";
    $res_clinic = $DB->query($query_clinic);
    // $clinic = $res_clinic->fetch_object();
    ?>



    <div class="show-database user-show container-enable">

        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <a class="bread" href="/lifecare-site/admin/dashboard.php">Dashboard</a>
            <p>/</p>
            <a class="bread" href="/lifecare-site/admin/vaccine/index.php">Vaccine</a>
            <p>/</p>
            <a class="bread current" href="/lifecare-site/admin/vaccine/create.php">Show</a>
        </div>

        <!-- Header -->
        <div class="header">
            <div class="header-content">
                <h4>Update <?php echo $data->name_vaccine ?></h4>
                <p>Detail information of the vaccine, including name, location, and email.</p>
            </div>
        </div>

        <!-- Form Show -->
        <form method="POST" action="/lifecare-site/process/update_vaccine.php">
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="name_vaccine">Name</label>
                    <p>Name of the vaccine.</p>
                </div>
                <input type="text" name="name_vaccine" id="name_vaccine" value="<?php echo $data->name_vaccine ?>">
            </div>
            <div class="form-wrap">
                <label for="clinic">Clinic</label>
                <select name="clinic" id="clinic">

                    <?php

                    while ($clinic = $res_clinic->fetch_object()) {
                        $selected = ($data->id_clinic == $clinic->id_clinic) ? 'selected' : '';
                        echo '<option value="' . $clinic->id_clinic . '" ' . $selected . '>' . $clinic->name_clinic . '</option>';
                    }
                    ?>

                </select>
            </div>
            <div class="form-wrap">
                <div class="form-headliner">
                    <label for="manufacturer">Manufacturer</label>
                    <p>Location of the manufacturer.</p>
                </div>
                <input type="text" name="manufacturer" id="manufacturer" value="<?php echo $data->manufacturer ?>">
            </div>
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="dose_vaccine">Dose</label>
                    <p>Dose recommended for the vaccine.</p>
                </div>
                <input type="number" name="dose_vaccine" id="dose_vaccine " value="<?php echo $data->dose_vaccine ?>">
            </div>
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="price">Price</label>
                    <p>Price recommended for the vaccine.</p>
                </div>
                <input type="number" name="price" id="price " value="<?php echo $data->price ?>">
            </div>
            <div class="create-action">
                <a class="btn-cancel-a" href="/lifecare-site/process/delete_vaccine.php?id=<?php echo $data->id_vaccine; ?>" onclick="return confirmDelete()">Delete</a>
                <button class="btn-create" type="submit">Update</button>

            </div>
        </form>
    </div>


</body>

</html>