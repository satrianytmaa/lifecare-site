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

    

    <title>Clinic Tables</title>


</head>

<body>

    <?php
    $query = "SELECT * FROM clinic";
    $res = $DB->query($query);
    ?>
    


    <div class="create-database container-enable">

        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <a class="bread" href="/lifecare-site/admin/dashboard.php">Dashboard</a>
            <p>/</p>
            <a class="bread" href="/lifecare-site/admin/clinic/index.php">Clinic</a>
            <p>/</p>
            <a class="bread current" href="/lifecare-site/admin/clinic/create.php">Create</a>
        </div>


        <!-- Header Create -->
        <div class="header">
            <div class="header-content">
                <h4>Create</h4>
                <p>Create a new clinic, including names, location, and email.</p>
            </div>


        </div>

        <!-- Form Create -->
        <form method="POST" action="/lifecare-site/process/create_clinic.php">
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="name">Name</label>
                    <p>Name of the clinic.</p>
                </div>
                <input type="text" name="name" id="name" placeholder="Enter the Name...">
            </div>
            <div class="form-wrap">
                <div class="form-headliner">
                    <label for="address">Location</label>
                    <p>Input the location of the clinic.</p>
                </div>
                <input type="text" name="address" id="address" placeholder="Enter the Address...">
            </div>
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="email">Email</label>
                    <p>Email of the clinic.</p>
                </div>
                <input type="text" name="email" id="email" placeholder="Enter the Email...">
            </div>
            <div class="create-action">
                <button class="btn-cancel">Cancel</button>
                <button class="btn-create" type="submit">Save</button>
            </div>
    </form>
    </div>
</body>

</html>