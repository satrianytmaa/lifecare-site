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

    <title>Clinics Tables</title>

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this user?");
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

        .btn-create-outside{
            padding: 1.4em 2.4em    ;
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
    $query = "SELECT * FROM user";
    $res = $DB->query($query);
    ?>

    <!-- Users Database -->
    <div class="users-database container-enable">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <a class="bread" href="/lifecare-site/admin/dashboard.php">Dashboard</a>
            <p>/</p>
            <a class="bread" href="/lifecare-site/admin/user/index.php">User</a>
            <p>/</p>
            <a class="bread current" href="/lifecare-site/admin/register.php">Index</a>
        </div>

        <!-- Header -->
        <div class="header">
            <div class="header-content">
                <h4>Users Database</h4>
                <p>A list of all the user in the database, including their name, address, and email.</p>
            </div>

            <div class="header-action">
                <a  href="../register.php">
                    <button class="btn-create-outside">Add User</button>
                </a>
            </div>
        </div>

        <!-- Table -->
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = $res->fetch_object()) { ?>
                        <tr>
                            <td><?php echo $data->id_user ?></td>
                            <td class="table-full-name"><?php echo $data->username ?></td>
                            <td class="table-full-name"><?php echo $data->full_name ?></td>
                            <td><?php echo $data->role ?></td>
                            <td class="action-btn">
                                <a href="show.php?id=<?php echo $data->id_user; ?>">
                                    <button class="btn-normal">
                                        Show
                                    </button>
                                </a>
                                <a href="update.php?id=<?php echo $data->id_user; ?>">
                                    <button class="btn-normal">
                                        Edit
                                    </button>
                                </a>
                                <button class="btn-delete" onclick="return confirmDelete()">
                                    <a href="/lifecare-site/process/delete_user.php?id=<?php echo $data->id_user; ?>">Delete</a>
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