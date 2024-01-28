<?php
require '../../process/db.php';
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
    <link rel="stylesheet" href="" />

    <!-- Admin Stylesheet -->
    <link rel="stylesheet" href="../../style/admin/admin_default.css" />
    <link rel="stylesheet" href="../../style/admin/create.css">


    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    

    <title>Vaccines Tables</title>

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this vaccine?");
        }
    </script>


</head>

<body>

    <?php
    $query = "SELECT * FROM vaccine";
    $res = $DB->query($query);

    $query_clinic = "SELECT * FROM clinic";
    $res_clinic = $DB->query($query_clinic);
    $clinic = $res_clinic->fetch_object();
    ?>
    


    <div class="create-database container-enable">

        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <a class="bread" href="/lifecare-site/admin/dashboard.php">Dashboard</a>
            <p>/</p>
            <a class="bread" href="/lifecare-site/admin/vaccine/index.php">Vaccine</a>
            <p>/</p>
            <a class="bread current" href="/lifecare-site/admin/vaccine/create.php">Create</a>
        </div>


        <!-- Header Create -->
        <div class="header">
            <div class="header-content">
                <h4>Create</h4>
                <p>A list of all the vaccines in your account including their appointment number, vaccine type, and age.</p>
            </div>


        </div>

        <!-- Form Create -->
        <form method="POST" action="/lifecare-site/process/create_vaccine.php">
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="name_vaccine">Name</label>
                    <p>Name of the vaccine.</p>
                </div>
                <input type="text" name="name_vaccine" id="name_vaccine" placeholder="Enter the Name...">
            </div>
            <div class="form-wrap">
                <div class="form-headliner">
                    <label for="manufacturer">Manufacture</label>
                    <p>Manufacture of the vaccine.</p>
                </div>
                <input type="text" name="manufacturer" id="manufacturer" placeholder="Enter the Manufacture...">
            </div>
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="dose_vaccine">Dose</label>
                    <p>Initial dose that recommended for the vaccine.</p>
                </div>
                <input type="text" name="dose_vaccine" id="dose_vaccine" placeholder="Enter the Dose...">
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
            <div class="create-action">
                <button class="btn-cancel">Cancel</button>
                <button class="btn-create" type="submit">Save</button>
            </div>
    </form>
    </div>
</body>

</html>