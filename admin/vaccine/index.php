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
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-add {
            background-color: #6A55EA;
            border: 1.5px solid #D8DBDC;
            outline: none;
            cursor: pointer;
            padding: 1em 3em;
            border-radius: 0.4em;

            color: #FFFFFF;
            font-weight: 500;
        }

        .btn-add:hover {
            background-color: #5C4CE3;
        }

        /* Responsive */

        @media screen and (max-width: 768px) {
            .users-database {
                padding: 0 1em;
            }

            .header {
                flex-direction: column;
                gap: 1em;
            }

            .header-content {
                text-align: center;
            }

            .header-action {
                width: 100%;
                display: flex;
                justify-content: center;
            }

            .btn-add {
                width: 100%;
            }

            .table {
                overflow-x: scroll;
            }
        }
    </style>


</head>

<body>

    <?php
    $query = "SELECT * FROM vaccine";
    $res = $DB->query($query);
    ?>


    <div class="users-database container-enable">

        <!-- Header -->
        <div class="header">
            <div class="header-content">
                <h4>Vaccine Database</h4>
                <p>A list of all the vaccines in your account including their appointment number, vaccine type, and age.</p>
            </div>


        </div>

        <!-- Table -->
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>Id Appointment</th>
                        <th>Appointment Number</th>
                        <th>vaccine Type</th>
                        <th>Age</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = $res->fetch_object()) { ?>
                        <?php
                        $query_app = "SELECT * FROM appointment WHERE id_appointment = $data->id_appointment";
                        $res_app = $DB->query($query_app);
                        $appointment = $res_app->fetch_object();
                        ?>
                        <tr>
                            <td><?php echo $data->id_vaccine ?></td>
                            <td><?php echo $appointment->number ?></td>
                            <td><?php echo $data->name_vaccine ?></td>
                            <td><?php echo $data->age ?></td>
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