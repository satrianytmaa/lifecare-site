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
    <link rel="stylesheet" href="../../style/admin/modal.css">


    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <title>Clinics Tables</title>

    <script src="../../javascript/modal.js"></script>


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

        

    </style>


</head>

<body>
    <?php
    $query = "SELECT * FROM clinic";
    $res = $DB->query($query);
    ?>

    <!-- Modal -->
    <div id="confirmationModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <div class="modal-dialog">
                <h4>Delete data</h4>
                <p>Are you sure you want to delete this data from the database? All of your data will be permanently removed. This action cannot be undone.</p>
            </div>
            <div class="modal-action">
                <button class="modal-no" onclick="closeModal()">No, Cancel</button>
                <button class="modal-yes" onclick="confirmDelete()">Yes, Delete</button>
            </div>
            <!-- Hidden input to store clinic ID -->
            <input type="hidden" id="clinicIdInput" value="">
        </div>
    </div>


    <!-- Users Database -->
    <div class="users-database container-enable">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <a class="bread" href="/lifecare-site/admin/dashboard.php">Dashboard</a>
            <p>/</p>
            <a class="bread" href="/lifecare-site/admin/clinic/index.php">Clinic</a>
            <p>/</p>
            <a class="bread current" href="/lifecare-site/admin/clinic/create.php">Index</a>
        </div>

        <!-- Header -->
        <div class="header">
            <div class="header-content">
                <h4>Clinic Database</h4>
                <p>A list of all the clinic in your account including their name, address, and email.</p>
            </div>

            <div class="header-action">
                <a href="create.php">
                    <button class="btn-add">Add Clinic</button>
                </a>
            </div>
        </div>

        <!-- Table -->
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tag</th>
                        <th>Clinic Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = $res->fetch_object()) { ?>
                        <tr>
                            <td><?php echo $data->id_clinic ?></td>
                            <td><?php echo $data->tag ?></td>
                            <td class="table-full-name"><?php echo $data->name_clinic ?></td>
                            <td><?php echo $data->email_clinic ?></td>
                            <td class="action-btn">
                                <a href="show.php?id=<?php echo $data->id_clinic; ?>">
                                    <button class="btn-normal">
                                        Show
                                    </button>
                                </a>
                                <a href="update.php?id=<?php echo $data->id_clinic; ?>">
                                    <button class="btn-normal">
                                        Edit
                                    </button>
                                </a>
                                <button class="btn-delete" onclick="openModal(<?php echo $data->id_clinic; ?>)">Delete</button>
                                <a id="deleteLink" style="display: none;" href="/lifecare-site/process/delete_clinic.php?id=<?php echo $data->id_clinic; ?>"></a>

                                <!-- <button class="btn-delete" onclick="return confirmDelete()">
                                    <a href="/lifecare-site/process/delete_clinic.php?id=<?php echo $data->id_clinic; ?>">Delete</a>
                                </button> -->

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>