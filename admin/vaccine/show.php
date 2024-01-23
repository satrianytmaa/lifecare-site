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

</head>

<body>
    <?php
    $query = "SELECT * FROM vaccine WHERE id_vaccine= $id ";
    $res = $DB->query($query);
    $data = $res->fetch_object();
    ?>

    


    <div class="show-database user-show container-enable">

        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <a class="bread" href="/lifecare-site/admin/dashboard.php">Dashboard</a>
            <p>/</p>
            <a class="bread" href="/lifecare-site/admin/vaccine/index.php">Vaccine</a>
            <p>/</p>
            <a class="bread current" href="/lifecare-site/admin/vaccine/show.php">Show</a>
        </div>

        <!-- Header -->
        <div class="header">
            <div class="header-content">
                <h4>Detail of <?php echo $data->name_vaccine ?></h4>
                <p>Detail information of the vaccine, including name, location, and email.</p>
            </div>
        </div>

        <!-- Form Show -->
        <form method="POST" action="/lifecare-site/process/create_vaccine.php">
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="name">Name</label>
                    <p>Name of the clinic.</p>
                </div>
                <input type="text" name="name" id="name" value="<?php echo $data->name_vaccine ?>" readonly>
            </div>
            <div class="form-wrap">
                <div class="form-headliner">
                    <label for="manufacturer">Manuvacturer</label>
                    <p>Input the location of the manufacturer.</p>
                </div>
                <input type="text" name="manufacturer" id="manufacturer" value="<?php echo $data->manufacturer ?>" readonly>
            </div>
            <div class="form-wrap">
                <div class="form-headline">
                    <label for="email">Email</label>
                    <p>Email of the clinic.</p>
                </div>
                <input type="text" name="email" id="email" value="<?php echo $data->dose_vaccine ?>" readonly>
            </div>
            <div class="create-action">
                <a class="btn-cancel-a" href="/lifecare-site/process/delete_vaccine.php?id=<?php echo $data->id_vaccine; ?>" onclick="return confirmDelete()">Delete</a>
                <a href="update.php?id=<?php echo $data->id_vaccine; ?>" class="btn-create-a">Edit</a>

            </div>
    </form>
    </div>


</body>

<script>
    function confirmDelete() {
        var confirmation = confirm("Are you sure you want to delete this vaccine?");

        if (confirmation) {
            // If the user confirms, redirect to the delete URL
            window.location.href = "/lifecare-site/process/delete_vaccine.php?id=<?php echo $data->id_vaccine; ?>";
        } else {
            // If the user cancels, do nothing or handle accordingly
        }
    }
</script>

</html>