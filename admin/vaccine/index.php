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
    <link rel="stylesheet" href="../../style/admin/index.css">
    <link rel="stylesheet" href="../../style/admin/show.css">


    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <title>vaccines Tables</title>

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this vaccine?");
        }
    </script>

    <style>
        .btn-create-outside {
            padding: 1.4em 2.4em;
            border: none;
            background-color: #6A55EA;
            color: #FFFFFF;
            border-radius: 1em;
            text-align: center;
            font-family: "Roobert-Medium", sans-serif;
            font-size: 0.9em;
            transition: all 200ms ease-in-out;
        }

    </style>


</head>

<body>

    <?php
    $query = "SELECT vaccine.id_vaccine,vaccine.name_vaccine, vaccine.manufacturer, vaccine.dose_vaccine, vaccine.price, clinic.name_clinic
    FROM vaccine
    INNER JOIN clinic ON vaccine.id_clinic = clinic.id_clinic";
    $res = $DB->query($query);


    ?>


    <div class="users-database container-enable">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <a class="bread" href="/lifecare-site/admin/dashboard.php">Dashboard</a>
            <p>/</p>
            <a class="bread" href="/lifecare-site/admin/vaccine/index.php">Vaccine</a>
            <p>/</p>
            <a class="bread current" href="/lifecare-site/admin/vaccine/create.php">Index</a>
        </div>

        <!-- Header -->
        <div class="header">
            <div class="header-content">
                <h4>Vaccine Database</h4>
                <p>A list of all the vaccines in your account including their appointment number, vaccine type, and age.</p>
            </div>

            <div class="header-action">
                <a href="create.php">
                    <button class="btn-create-outside">Add Vaccine</button>
                </a>
            </div>


        </div>

        <!-- Table -->
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name of the Vaccine</th>
                        <th>Clinic</th>
                        <th>Manufacture</th>
                        <th>Dose</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = $res->fetch_object()) { ?>
                        <tr>
                            <td><?php echo $data->id_vaccine ?></td>
                            <td><?php echo $data->name_vaccine ?></td>
                            <td><?php echo $data->name_clinic ?></td>
                            <td><?php echo $data->manufacturer ?></td>
                            <td><?php echo $data->dose_vaccine ?></td>
                            <td><?php echo $data->price ?></td>
                            <td class="action-btn">
                                <a href="show.php?id=<?php echo $data->id_vaccine; ?>">
                                    <button class="btn-normal">
                                        Show
                                    </button>
                                </a>
                                <a href="update.php?id=<?php echo $data->id_vaccine; ?>">
                                    <button class="btn-normal">
                                        Edit
                                    </button>
                                </a>
                                <button class="btn-delete" onclick="return confirmDelete()">
                                    <a href="/lifecare-site/process/delete_vaccine.php?id=<?php echo $data->id_vaccine; ?>">Delete</a>
                                </button>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>